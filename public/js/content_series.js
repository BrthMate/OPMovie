const playBtn = document.querySelector(".play__btn");
const pauseBtn = document.querySelector(".stop__btn");
const voiceBtn = document.querySelector(".voice__btn");
const previousBtn = document.querySelector(".previous__btn");
const nextBtn = document.querySelector(".next__btn");
const ccBtn = document.querySelector(".cc__btn");
const cogBtn = document.querySelector(".cog__btn");
const exitBtn = document.querySelector(".exit__fullscreen__btn");
const fullBtn = document.querySelector(".fullscreen__btn");

const videoContainer = document.querySelector(".video-container");
const video = document.querySelector('.video-container video');
const watchedBar = document.querySelector(".watched__bar");
const controller = document.querySelector(".controller");
const TimeLine = document.querySelector(".timeline");
const bar = document.querySelector(".progress__bar");

const Cogbox = document.querySelector(".cox__box");

let activeCogbox = false;

let controlsTimeout;
watchedBar.style.width = '0px';
pauseBtn.style.display = 'none';
exitBtn.style.display = 'none';
TimeLine.style.display = "none";
voiceBtn.children[1].style.display = "none";
voiceBtn.children[2].style.display = "none";
voiceBtn.children[3].style.display = "none";

document.addEventListener('mousemove', () => {
    displayControls();
});
playBtn.addEventListener('click', () => {
  playPause()
});
pauseBtn.addEventListener('click', () => {
  playPause()
});
voiceBtn.children[0].addEventListener('click', () => {
  toggleMute()
});
voiceBtn.children[3].addEventListener('click', () => {
  toggleMute()
});
fullBtn.addEventListener('click',() => {
  toggleFullScreen()
});
exitBtn.addEventListener('click',() => {
  toggleFullScreen()
});
video.addEventListener('click', () => {
  playPause()
});
video.addEventListener('dblclick',  () => { 
  mouse_position()
});
document.addEventListener('fullscreenchange', () => {
  if (!document.fullscreenElement) {
    fullBtn.style.display = '';
    exitBtn.style.display = 'none';
  } else {
    fullBtn.style.display = 'none';
    exitBtn.style.display = '';
  }
});

document.addEventListener('keyup', (event) => {
  if (event.code === 'Space') {
    playPause(); 
  }

  if (event.code === 'KeyM') {
    toggleMute();
  }

  if (event.code === 'KeyF') {
    toggleFullScreen();
  }

  displayControls();
});

video.addEventListener('timeupdate', () => {
  watchedBar.style.width = ((video.currentTime / video.duration) * 100) + '%';
  if(watchedBar.offsetWidth < TimeLine.offsetWidth/2){
    TimeLine.style.left = '0%';
  /*}else if(watchedBar.offsetWidth + TimeLine.offsetWidth/2 > bar.offsetWidth){
    TimeLine.style.left = watchedBar.offsetWidth - TimeLine.offsetWidth + 'px';
  */
  }else{
    TimeLine.style.left = watchedBar.offsetWidth - TimeLine.offsetWidth/2 + 'px';
  }
  /*
  const totalSecondsRemaining = video.duration - video.currentTime;

  const time = new Date(null);
  time.setSeconds(totalSecondsRemaining);
  let hours = null;

  if(totalSecondsRemaining >= 3600) {
    hours = (time.getHours().toString()).padStart('2', '0');
  }

  let minutes = (time.getMinutes().toString()).padStart('2', '0');
  let seconds = (time.getSeconds().toString()).padStart('2', '0');
  */
  const currentTime = new Date(null);
  currentTime.setSeconds(video.currentTime);
  let currentTimehours = null;

  if(video.currentTime >= 3600) {
    currentTimehours = (currentTime.getHours().toString()).padStart('2', '0');
  }

  let currentTimeminutes = (currentTime.getMinutes().toString()).padStart('2', '0');
  let currentTimeseconds = (currentTime.getSeconds().toString()).padStart('2', '0');

  //time.textContent = `${hours ? hours : '00'}:${minutes}:${seconds}`;
  //console.log(hours ? hours : '00'+":"+minutes+":"+seconds)
  TimeLine.textContent = `${currentTimehours ? currentTimehours : '00'}:${currentTimeminutes}:${currentTimeseconds}`;
});

bar.addEventListener('click', (event) => {
  const pos = (event.pageX  - (bar.offsetLeft + bar.offsetParent.offsetLeft)) / bar.offsetWidth;
  video.currentTime = pos * video.duration;
});
cogBtn.addEventListener("click", () => {
  cogBoxDP();
})
const displayControls = () => {
    controller.classList.add("active");
    document.body.style.cursor = 'initial';
    TimeLine.style.display = "";
    if (controlsTimeout) {
      clearTimeout(controlsTimeout);
    }
    controlsTimeout = setTimeout(() => {
        controller.classList.remove("active");
        document.body.style.cursor = 'none';
        TimeLine.style.display = "none";
    }, 3000);
};

const playPause = () => {
    if (video.paused) {
      video.play();
      playBtn.style.display = 'none';
      pauseBtn.style.display = '';
    } else {
      video.pause();
      playBtn.style.display = '';
      pauseBtn.style.display = 'none';
    }
};

const toggleMute = () => {
  video.muted = !video.muted;
  if (video.muted) {
    voiceBtn.children[0].style.display = 'none';
    voiceBtn.children[3].style.display = '';
  } else {
    voiceBtn.children[0].style.display = '';
    voiceBtn.children[3].style.display = 'none';
  }
};

const toggleFullScreen = () => {
  if (!document.fullscreenElement) {
    videoContainer.requestFullscreen();
  } else {
    document.exitFullscreen();
  }
};

const mouse_position = () => {

  var e = window.event;
  var posX = e.clientX;
  var posY = e.clientY;

  if( window.innerWidth/2 > posX){
    video.currentTime -= 10;
  }
  else{
    video.currentTime +=10;
  }
}

const cogBoxDP = () => {
  if(!activeCogbox){
    Cogbox.style.display = "flex";
    activeCogbox = true;
  }else{
    Cogbox.style.display = "none";
    activeCogbox = false;
  }
}

