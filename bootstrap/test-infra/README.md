## What does `s3_cache.py` do?

### In general
`s3_cache.py` maintains a cache, stored in an Amazon S3 (Simple Storage Service) bucket, of a given directory whose contents are considered non-critical and are completely & solely determined by (and should be able to be regenerated from) a single given file.

The SHA-256 hash of the single file is used as the key for the cache. The directory is stored as a gzipped tarball.

All the tarballs are stored in S3's Reduced Redundancy Storage (RRS) storage class, since this is cheaper and the data is non-critical.

`s3_cache.py` itself never deletes cache entries; deletion should either be done manually or using automatic S3 lifecycle rules on the bucket.

Similar to git, `s3_cache.py` makes the assumption that [SHA-256 will effectively never have a collision](http://stackoverflow.com/questions/4014090/is-it-safe-to-ignore-the-possibility-of-sha-collisions-in-practice).


### For Bootstrap specifically
`s3_cache.py` is used to cache the npm packages that our Grunt tasks depend on and the RubyGems that Jekyll depends on. (Jekyll is needed to compile our docs to HTML so that we can run them thru an HTML5 validator.)

For npm, the `node_modules` directory is cached based on our `npm-shrinkwrap.json` file.

For RubyGems, the `gemdir` of the current RVM-selected Ruby is cached based on the `pseudo_Gemfile.lock` file generated by our Travis build script.
`pseudo_Gemfile.lock` contains the versions of Ruby and Jekyll that we're using (read our `.travis.yml` for details).


## Why is `s3_cache.py` necessary?
`s3_cache.py` is used to speed up Bootstrap's Travis builds. Installing npm packages and RubyGems used to take up a significant fraction of our total build times. Also, at the time that `s3_cache.py` was written, npm was occasionally unreliable.

Travis does offer built-in caching on their paid plans, but this do-it-ourselves S3 solution is significantly cheaper since we only need caching and not Travis' other paid features.


## Configuration
`s3_cache.py` is configured via `S3Cachefile.json`, which has the following format:
```json
{
    "cache-name-here": {
        "key": "path/to/file/to/SHA-256/hash/and/use/that/as/the/cache.key",
        "cache": "path/to/directory/to/be/cached",
        "generate": "shell-command --to run --to regenerate --the-cache $from scratch"
    },
    ...
}
```

`s3_cache.py` will SHA-256 hash the contents of the `key` file and try to fetch a tarball from S3 using the hash as the filename.
If it's unable to fetch the tarball (either because it doesn't exist or there was a network error), it will run the `generate` command. If it was able to fetch the tarball, it will extract it to the `cache` directory.
If it had to `generate` the cache, it will later create a tarball of the `cache` directory and try to upload the tarball to S3 using the SHA-256 hash of the `key` file as the tarball's filename.


## AWS Setup

### Overview
1. Create an Amazon Web Services (AWS) account.
2. Create an Identity & Access Management (IAM) user, and note their credentials.
3. Create an S3 bucket.
4. Set permissions on the bucket to grant the user read+write access.
5. Set the user credentials as secure Travis environment variables.

### In detail
1. Create an AWS account.
2. Login to the [AWS Management Console](https://console.aws.amazon.com).
3. Go to the IAM Management Console.
4. Create a new user (named e.g. `travis-ci`) and generate an access key for them. Note both the Access Key ID and the Secret Access Key.
5. Note the user's ARN (Amazon Resource Name), which can be found in the "Summary" tab of the user browser. This will be of the form: `arn:aws:iam::XXXXXXXXXXXXXX:user/the-username-goes-here`
6. Note the user's access key, which can be found in the "Security Credentials" tab of the user browser.
7. Go to the S3 Management Console.
8. Create a new bucket. For a non-publicly-accessible bucket (like Bootstrap uses), it's recommended that the bucket name be random to increase security. On most *nix machines, you can easily generate a random UUID to use as the bucket name using Python:

    ```bash
    python -c "import uuid; print(uuid.uuid4())"
    ```

9. Determine and note what your bucket's ARN is. The ARN for an S3 bucket is of the form: `arn:aws:s3:::the-bucket-name-goes-here`
10. In the bucket's Properties pane, in the "Permissions" section, click the "Edit bucket policy" button.
11. Input and submit an IAM Policy that grants the user at least read+write rights to the bucket. AWS has a policy generator and some examples to help with crafting the policy. Here's the policy that Bootstrap uses, with the sensitive bits censored:

    ```json
    {
        "Version": "2012-10-17",
        "Id": "PolicyTravisReadWriteNoAdmin",
        "Statement": [
            {
                "Sid": "StmtXXXXXXXXXXXXXX",
                "Effect": "Allow",
                "Principal": {
                    "AWS": "arn:aws:iam::XXXXXXXXXXXXXX:user/travis-ci"
                },
                "Action": [
                    "s3:AbortMultipartUpload",
                    "s3:GetObjectVersion",
                    "s3:ListBucket",
                    "s3:DeleteObject",
                    "s3:DeleteObjectVersion",
                    "s3:GetObject",
                    "s3:PutObject"
                ],
                "Resource": [
                    "arn:aws:s3:::XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
                    "arn:aws:s3:::XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/*"
                ]
            }
        ]
    }
    ```

12. If you want deletion from the cache to be done automatically based on age (like Bootstrap does): In the bucket's Properties pane, in the "Lifecycle" section, add a rule to expire/delete files based on creation date.
13. Install the [`travis` RubyGem](https://github.com/travis-ci/travis): `gem install travis`
14. Encrypt the environment variables:

    ```bash
    travis encrypt --repo twbs/bootstrap "AWS_ACCESS_KEY_ID=XXX"
    travis encrypt --repo twbs/bootstrap "AWS_SECRET_ACCESS_KEY=XXX"
    travis encrypt --repo twbs/bootstrap "TWBS_S3_BUCKET=XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX"
    ```

14. Add the resulting secure environment variables to `.travis.yml`.


## Usage
Read `s3_cache.py`'s source code and Bootstrap's `.travis.yml` for how to invoke and make use of `s3_cache.py`.
