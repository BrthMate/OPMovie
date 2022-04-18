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
const video = document.querySelector('.video-container #video');
const watchedBar = document.querySelector(".watched__bar");
const controller = document.querySelector(".controller");
const TimeLine = document.querySelector(".timeline");
const bar = document.querySelector(".progress__bar");
const Cogbox = document.querySelector(".cox__box");
const voiceContainer = document.querySelector(".voice__container");
const VoiceRange = document.querySelector(".voice__container input");
const ccBox = document.querySelector(".cc__box");
const subContainer = document.querySelector(".sub__title__lang");
const subTitle = document.querySelector(".sub__title");
const subSettingsbox = document.querySelector(".settings");
const save = document.querySelector("#save");
const cancel = document.querySelector("#cancel");
const title = document.querySelector(".video__title");
const timeContainer =document.querySelector(".time__container");

let lastTimevalue;
let lastTime = false;
let controlsTimeout;
let Currentsub;
let lineControll = -5;

if(!localStorage.getItem(title.innerHTML)){
  localStorage.setItem(title.innerHTML, '');
}else{
  lastTimevalue = localStorage.getItem(title.innerHTML)
}

watchedBar.style.width = '0px';
pauseBtn.style.display = 'none';
exitBtn.style.display = 'none';
TimeLine.style.display = "none";
voiceBtn.children[1].style.display = "none";
voiceBtn.children[2].style.display = "none";
subSettingsbox.style.display = "none";
timeContainer.style.display = "none";


for (var i = 0; i < video.textTracks.length; i++) {
  var curTrack = video.textTracks[i];
  var addTrackOpt = document.createElement('span');
  //addTrackOpt.setAttribute('value',curTrack.kind + '-' + curTrack.language);
  addTrackOpt.textContent = curTrack.label;
  subContainer.appendChild(addTrackOpt);
}

const subContainerElement = document.querySelectorAll(".sub__title__lang span");

subTitle.addEventListener("click", () => {
  subTitleSettings();
});
save.addEventListener("click", () => {
  saveSettings();
});
cancel.addEventListener("click", () => {
  cancelSettings();
});
document.addEventListener('click', function handleContainer(e){
    if(e.target.className == "form-range" || e.target.className =="bx bx-volume-full" || e.target.className =="bx bx-volume-low" || e.target.className =="bx bx-volume" ){   
      VoiceRange.style.display = "flex";
      Cogbox.style.display = "none";
      ccBox.style.display = "none";
    }else if(e.target.className == "bx bx-cog"){
      Cogbox.style.display = "flex";
      VoiceRange.style.display = "none";
      ccBox.style.display = "none";
    }else if(e.target.className == "bx bx-captions"){
      ccBox.style.display = "flex";
      VoiceRange.style.display = "none";
      Cogbox.style.display = "none";
    }else{
      VoiceRange.style.display = "none";
      Cogbox.style.display = "none";
      ccBox.style.display = "none";
    }
});
document.addEventListener('mousemove', () => {
    displayControls();
});
VoiceRange.addEventListener("click", () => {
  volumeControl();
});
VoiceRange.addEventListener("keyup", () => {
  volumeControl();
});
VoiceRange.addEventListener("mousemove", () => {
  volumeControl();
});
VoiceRange.addEventListener("mousewheel", (e) => {
  if(exitBtn.style.display != 'none'){
    if(e.deltaY > 0){
      VoiceRange.value = VoiceRange.value+0.1;
    }else{
      VoiceRange.value = VoiceRange.value-0.1;
    }
  }
  //0.5 fölé nem megy és leugrik 1-0.5 re
});
playBtn.addEventListener('click', () => {
  playPause();
});
pauseBtn.addEventListener('click', () => {
  playPause();
});
voiceBtn.children[0].addEventListener('dblclick', () => {
  toggleMute();
});
voiceBtn.children[2].addEventListener('dblclick', () => {
  toggleMute();
});
fullBtn.addEventListener('click',() => {
  toggleFullScreen();
});
exitBtn.addEventListener('click',() => {
  toggleFullScreen();
});
video.addEventListener('click', () => {
  playPause();
});
video.addEventListener('contextmenu',  () => { 
  mouse_position();
});
video.addEventListener('mousewheel',  (e) => { 
  if(exitBtn.style.display != 'none'){
    if(e.deltaY > 0){
      video.currentTime += 10.
    }else{
      video.currentTime -= 10.0
    }
  }
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
  }else if(watchedBar.offsetWidth + TimeLine.offsetWidth/2 > bar.offsetWidth){
    TimeLine.style.left = "calc( 100% - 75px)";
  }else{
    TimeLine.style.left = watchedBar.offsetWidth - TimeLine.offsetWidth/2 + 'px';
  }
  localStorage.setItem(title.innerHTML, video.currentTime)
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
  const pos = (event.pageX  - (bar.offsetLeft + bar.offsetParent.offsetLeft)-(document.querySelector("body").offsetWidth-video.offsetWidth)/2 ) / bar.offsetWidth;
  //const pos = (event.pageX  - (bar.offsetLeft + bar.offsetParent.offsetLeft)) / bar.offsetWidth;
  video.currentTime = pos * video.duration;//
});
/*cogBtn.addEventListener("click", () => {
  cogBoxDP();
})*/
const displayControls = () => {
    controller.classList.add("active");
    document.body.style.cursor = 'initial';
    TimeLine.style.display = "";
    if(Currentsub != undefined){
      cuesSettings(Currentsub,lineControll);
    }
    if (controlsTimeout) {
      clearTimeout(controlsTimeout);
    }
    controlsTimeout = setTimeout(() => {
        controller.classList.remove("active");
        document.body.style.cursor = 'none';
        TimeLine.style.display = "none";
        if(Currentsub != undefined){
          cuesSettings(Currentsub);
        }
    }, 3000);
};

const playPause = () => {
  if(!lastTime && localStorage.getItem(title.innerHTML) != ""){
    VideoContinues();
  }
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
    VoiceRange.value = 0;
    voiceBtn.children[0].style.display = 'none';
    voiceBtn.children[2].style.display = '';
  } else {
    voiceBtn.children[0].style.display = '';
    voiceBtn.children[2].style.display = 'none';
    VoiceRange.value = 1;
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

/*const cogBoxDP = () => {
  if(!activeCogbox){
    Cogbox.style.display = "flex";
    activeCogbox = true;
  }else{
    Cogbox.style.display = "none";
    activeCogbox = false;
  }
}*/

const  volumeControl = () =>{
  if("0.6"<=VoiceRange.value && VoiceRange.value<="1"){
    voiceBtn.children[0].style.display = "";
    voiceBtn.children[1].style.display = "none";
    voiceBtn.children[2].style.display = "none";
    video.muted = false;
  }else if ("0.1"<=VoiceRange.value && VoiceRange.value<="0.5"){
    voiceBtn.children[0].style.display = "none";
    voiceBtn.children[1].style.display = "";
    voiceBtn.children[2].style.display = "none";
    video.muted = false;
  }else{
    voiceBtn.children[0].style.display = "none";
    voiceBtn.children[1].style.display = "none";
    voiceBtn.children[2].style.display = "";
  }
  video.volume = VoiceRange.value;
}

subContainerElement.forEach(element => {
  element.addEventListener("click", () =>{
    trackChange(element.innerHTML)
  });
});
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function trackChange(value) {
  if(value === 'off') {
    for (var i = 0; i < video.textTracks.length; i++) {
      video.textTracks[i].mode = 'hidden';
      Currentsub = undefined;
    }
    ccBtn.classList.remove("active");
  }else {
    for (var i = 0; i < video.textTracks.length; i++) {
      video.textTracks[i].mode = 'hidden';
      if(video.textTracks[i].label == value) {
        Currentsub = i;
        video.textTracks[i].mode = 'showing';
        await sleep(1000);
        cuesSettings( Currentsub)
      }
    }
  }

  subContainerElement.forEach(element => {
    if(element.innerHTML == value){
      element.classList.add("active");
    }else{
      element.classList.remove("active");
  }
  });
}

function cuesSettings(element,line){
  if(line == undefined){
    line = -2;
  }
  video.textTracks[element].mode = 'hidden';
  let length = video.textTracks[element].cues.length;
  for (var i = 0; i < length ; i++) {
    video.textTracks[element].cues[i].line = line;
  }
  video.textTracks[element].mode = 'showing';
}
function subTitleSettings(){
  if(subSettingsbox.style.display == "none"){
    subSettingsbox.style.display = "block";
  }else{
    subSettingsbox.style.display = "none";
  }
}

function saveSettings(){
  $(':root').css('--color',document.querySelector("#fontColor").value);
  document.querySelector("#fontSize").value != "" ? $(':root').css('--fontsize',document.querySelector("#fontSize").value +"px") : "";
  $(':root').css('--background',document.querySelector("#bgColor").value);
  subSettingsbox.style.display = "none";
}
function cancelSettings(){
  subSettingsbox.style.display = "none";
}

const VideoContinues = () =>{
  lastTime = true;
  timeContainer.style.display = "block";
  document.querySelector(".time").innerHTML ="Kivánja folytatni? (" + formatTime(lastTimevalue) +")";
  document.querySelector("#VideoContinues").addEventListener("click",() =>{
    video.currentTime = lastTimevalue;
    timeContainer.style.display = "none";
  });
  document.querySelector("#videoCancel").addEventListener("click",() =>{
    timeContainer.style.display = "none";
  });
}

const formatTime = (time) =>{
  const currentTime = new Date(null);
  currentTime.setSeconds(time);
  let currentTimehours = null;

  if(time >= 3600) {
    currentTimehours = (currentTime.getHours().toString()).padStart('2', '0');
  }

  let currentTimeminutes = (currentTime.getMinutes().toString()).padStart('2', '0');
  let currentTimeseconds = (currentTime.getSeconds().toString()).padStart('2', '0');

  return (`${currentTimehours ? currentTimehours : '00'}:${currentTimeminutes}:${currentTimeseconds}`);
} 

