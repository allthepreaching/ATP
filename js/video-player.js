const controlsContainer = document.getElementById("video-controls-container");
const rewindBtn = document.querySelector(".rewind-btn");
const playPauseBtn = document.querySelector(".play-pause-btn");
const forwardBtn = document.querySelector(".forward-btn");
const captionsBtn = document.querySelector(".captions-btn");
const speedBtn = document.querySelector(".speed-btn");
const miniPlayerBtn = document.querySelector(".mini-btn");
const theaterBtn = document.querySelector(".theater-btn");
const fullScreenBtn = document.querySelector(".fullscreen-btn");
const muteBtn = document.querySelector(".mute-btn");
const currentTimeElem = document.querySelector(".current-time");
const totalTimeElem = document.querySelector(".total-time");
const volumeSlider = document.querySelector(".volume-slider");
const videoContainer = document.querySelector(".video-container");
const timelineContainer = document.querySelector(".timeline-container");
const video = document.querySelector("video");

//fetch time from when video starts playing, it is set in video.php
video.currentTime = playPauseBtn.dataset.time;

document.addEventListener("keydown", (e) => {
  const tagName = document.activeElement.tagName.toLowerCase();

  if (tagName === "input") return;

  switch (e.key.toLowerCase()) {
    case " ":
      if (tagName !== "button") togglePlay();
      break;
    case "k":
      togglePlay();
      break;
    case "f":
      toggleFullScreenMode();
      break;
    case "t":
      toggleTheaterMode();
      break;
    case "i":
      toggleMiniPlayerMode();
      break;
    case "m":
      toggleMute();
      break;
    case "arrowleft":
    case "j":
      skip(-5);
      break;
    case "arrowright":
    case "l":
      skip(5);
      break;
    case "c":
      toggleCaptions();
      break;
  }
});

// Timeline
timelineContainer.addEventListener("mousemove", handleTimelineUpdate);
timelineContainer.addEventListener("mousedown", toggleScrubbing);
document.addEventListener("mouseup", (e) => {
  if (isScrubbing) toggleScrubbing(e);
});
document.addEventListener("mousemove", (e) => {
  if (isScrubbing) handleTimelineUpdate(e);
});

let isScrubbing = false;
let wasPaused;
function toggleScrubbing(e) {
  const rect = timelineContainer.getBoundingClientRect();
  const percent = Math.min(Math.max(0, e.x - rect.x), rect.width) / rect.width;
  isScrubbing = (e.buttons & 1) === 1;
  videoContainer.classList.toggle("scrubbing", isScrubbing);
  if (isScrubbing) {
    wasPaused = video.paused;
    video.pause();
  } else {
    video.currentTime = percent * video.duration;
    if (!wasPaused) video.play();
  }
}

function handleTimelineUpdate(e) {
  const rect = timelineContainer.getBoundingClientRect();
  const percent = Math.min(Math.max(0, e.x - rect.x), rect.width) / rect.width;
  timelineContainer.style.setProperty("--progress-position", percent);
}

// Playback Speed
speedBtn.addEventListener("click", changePlaybackSpeed);

function changePlaybackSpeed() {
  let newPlaybackRate = video.playbackRate + 0.25;
  if (newPlaybackRate > 2) newPlaybackRate = 0.25;
  video.playbackRate = newPlaybackRate;
  speedBtn.textContent = `${newPlaybackRate}x`;
}

// Captions
const captions = video.textTracks[0];
captions.mode = getCaptionMode();

captionsBtn.addEventListener("click", toggleCaptions);

function toggleCaptions() {
  const isHidden = captions.mode === "hidden";
  captions.mode = isHidden ? "showing" : "hidden";
  videoContainer.classList.toggle("captions", isHidden);
  document.cookie = `captions=${captions.mode};path=/`;
}

//cookie that saves the setting of whether captions are on or off, makes it default for subsequent video loadings
function getCaptionMode() {
  const cookies = document.cookie.split('; ');
  const captionCookie = cookies.find(row => row.startsWith('captions='));
  return captionCookie ? captionCookie.split('=')[1] : "showing";
}


// Duration
video.addEventListener("loadedmetadata", () => {
  totalTimeElem.textContent = formatDuration(video.duration);
});

video.addEventListener("timeupdate", () => {
  currentTimeElem.textContent = formatDuration(video.currentTime);
  const percent = video.currentTime / video.duration;
  timelineContainer.style.setProperty("--progress-position", percent);
});

const leadingZeroFormatter = new Intl.NumberFormat(undefined, {
  minimumIntegerDigits: 2,
});
function formatDuration(time) {
  const seconds = Math.floor(time % 60);
  const minutes = Math.floor(time / 60) % 60;
  const hours = Math.floor(time / 3600);
  if (hours === 0) {
    return `${minutes}:${leadingZeroFormatter.format(seconds)}`;
  } else {
    return `${hours}:${leadingZeroFormatter.format(
      minutes
    )}:${leadingZeroFormatter.format(seconds)}`;
  }
}

function skip(duration) {
  video.currentTime += duration;
}

// Volume
muteBtn.addEventListener("click", toggleMute);
volumeSlider.addEventListener("input", (e) => {
  video.volume = e.target.value;
  video.muted = e.target.value === 0;
});

function toggleMute() {
  video.muted = !video.muted;
}

video.addEventListener("volumechange", () => {
  volumeSlider.value = video.volume;
  let volumeLevel;
  if (video.muted || video.volume === 0) {
    volumeSlider.value = 0;
    volumeLevel = "muted";
  } else if (video.volume >= 0.5) {
    volumeLevel = "high";
  } else {
    volumeLevel = "low";
  }

  videoContainer.dataset.volumeLevel = volumeLevel;
});

// View Modes
theaterBtn.addEventListener("click", toggleTheaterMode);
fullScreenBtn.addEventListener("click", toggleFullScreenMode);
miniPlayerBtn.addEventListener("click", toggleMiniPlayerMode);

function toggleTheaterMode() {
  videoContainer.classList.toggle("theater");
}

function toggleFullScreenMode() {
  if (video.requestFullscreen) {
    if (!document.fullscreenElement) {
      video.requestFullscreen().catch(console.error);
    } else {
      document.exitFullscreen();
    }
  }
}

function toggleMiniPlayerMode() {
  if (videoContainer.classList.contains("mini-player")) {
    if (document.exitPictureInPicture) {
      document.exitPictureInPicture();
    }
  } else if (video.requestPictureInPicture) {
    video.requestPictureInPicture();
  } else {
    alert("Picture-in-Picture API is not supported by your browser.");
  }
}

document.addEventListener("fullscreenchange", () => {
  videoContainer.classList.toggle("full-screen", document.fullscreenElement);
});

video.addEventListener("enterpictureinpicture", () => {
  videoContainer.classList.add("mini-player");
});

video.addEventListener("leavepictureinpicture", () => {
  videoContainer.classList.remove("mini-player");
});

// Play/Pause
playPauseBtn.addEventListener("click", togglePlay);
video.addEventListener("click", togglePlay);

function togglePlay() {
  video.paused ? video.play() : video.pause();
}

video.addEventListener("play", () => {
  videoContainer.classList.remove("paused");
  controlsContainer.classList.add("hidden"); // Hide the controls when the video is playing
});

video.addEventListener("pause", () => {
  videoContainer.classList.add("paused");
  controlsContainer.classList.remove("hidden"); // Show the controls when the video is paused
});

let timeoutId;

// Show controls when the video is playing and the user hovers over the video
video.addEventListener("mouseover", () => {
  if (!video.paused) {
    clearTimeout(timeoutId); // Clear any existing timeout
    controlsContainer.classList.remove("hidden");
  }
});

// Hide controls when the mouse leaves the video and the video is playing
video.addEventListener("mouseleave", () => {
  if (!video.paused) {
    // Set a timeout to hide the controls after 1 second
    timeoutId = setTimeout(() => {
      controlsContainer.classList.add("hidden");
    }, 5000);
  }
});

// Rewind and Forward
rewindBtn.addEventListener("click", () => {
  skip(-5);
});

forwardBtn.addEventListener("click", () => {
  skip(5);
});

function copyToClipboard() {
  // Get the current URL and modify the query parameter
  var url = new URL(window.location.href);
  url.searchParams.set('time', video.currentTime - 5);

  try {
    navigator.clipboard.writeText(url.toString());
    // Alert the user
    alert('URL copied to clipboard');
  } catch (err) {
    console.error('Failed to copy: ', err);
  }
}
