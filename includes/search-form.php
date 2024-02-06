 <!-- Search form, separated into its own file to avoid code duplication-->
 <div class="searchBox">
     <form id="search-form" action="<?php echo $search_script_path ?>search.php" method="GET">
         <div class="search-field">

             <!-- Search Input & Button Container -->
             <div class="search-input-button-container">


                 <!-- Search Input -->
                 <input id="search-input" value="<?php echo $_GET['search'] ?>" type="text" name="search" placeholder="Search preachers, categories and/or titles...">
                 <!-- Advanced Search Input -->
                 <input id="advanced-search-input" value="<?php echo $_GET['advanced-search'] ?>" type="text" name="advanced-search" placeholder="Search media content...">

                 <!-- Search Button -->
                 <button type="submit" id="submit-search" name="submit-search">
                     <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#dbab83" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                 </button>
                 <!-- Info Button -->
                 <button type="button" name="info-button" onclick="showInfoPopup()" onblur="hideInfoPopup()">
                     <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <circle cx="12" cy="12" r="10" stroke="#dbab83" stroke-width="2" />
                         <line x1="12" y1="16" x2="12" y2="12" stroke="#dbab83" stroke-width="2" />
                         <line x1="12" y1="8" x2="12" y2="10" stroke="#dbab83" stroke-width="2" />
                     </svg>
                 </button>

                 <!-- Info Popup -->
                 <div onclick="hideInfoPopup()" id="info-popup" style="display: none; position: fixed; top: 10px; right: 10px; z-index: 1000; background-color: #dbab83; color: black; padding: 10px; border-radius: 15px; border: 2px solid #dbab83; opacity: 0; transition: opacity 0.5s;">
                     <p>The first input matches category information that usually includes category (sermons, clips, other, docs), preacher (by last name) and just general video/sermon title.</p>
                     <p>The second input matches the content of the media. A maximum of 300 results are returned per search query for performance reasons.</p>
                     <p>Use both input fields together or each independently to suit your needs.</p>

                 </div>


                 <!-- JavaScript for info popup-->
                 <script>
                     function showInfoPopup() {
                         const infoPopup = document.getElementById('info-popup');
                         infoPopup.style.display = 'block';
                         setTimeout(() => infoPopup.style.opacity = '1', 50); // slight delay to allow for the display change
                     }

                     function hideInfoPopup() {
                         const infoPopup = document.getElementById('info-popup');
                         infoPopup.style.opacity = '0';
                         setTimeout(() => infoPopup.style.display = 'none', 500); // delay to allow for the fade out animation
                     }
                 </script>

             </div>

         </div>
         <div id="advanced-search-container" class="search-field">

         </div>
     </form>

 </div>