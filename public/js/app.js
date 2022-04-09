const search = document.querySelector(".search__icon");
const navbar = document.querySelector(".navigation")
const navItems = document.querySelector(".to__pages__contianer");
const searchContainer = document.querySelector(".search__container");
const pageTag = document.querySelector(".to__pages");
const mode = document.querySelector(".mode");
const BackTop = document.querySelector(".back__top");

let DarkMode = localStorage.getItem("darkMode");
let searchActive = false;
let url = window.location.pathname;

if( url == "/"){
    pageTag.children[0].classList.add("active");
}else if ( url == "/series"){
    pageTag.children[1].classList.add("active");
}else{
    pageTag.children[2].classList.add("active");
}

search.addEventListener("click", searchItems);

function searchItems(){
    searchActive = true;
    search.classList.add("d-none");
    navItems.classList.add("d-none");
    searchContainer.classList.remove("d-none");
}

function searchItemsDN(){
    searchActive = false;
    search.classList.remove("d-none");
    navItems.classList.remove("d-none");
    searchContainer.classList.add("d-none");
}

document.addEventListener('click', function(e) {
    if(searchActive)
    {
        if(e.target.id == "search__btn" || e.target.id == "search__box__icon" || e.target.id == "search" || e.target.id == "show__search__field")
        {}
        else
        {searchItemsDN();}
    }  
}, false);

function darkModel(){
    localStorage.setItem('darkMode',"enabled");
}

function lightModel(){
    localStorage.setItem('darkMode',null);
}

const enableDarkMode = () =>{
    document.documentElement.style.setProperty('--lightgrey', 'rgb(rgb(48 45 45)');
    document.documentElement.style.setProperty('--light', '#1a1a1a');
    document.documentElement.style.setProperty('--dark', 'white');
    document.documentElement.style.setProperty('--darkOpocity', 'rgb(216, 209, 209,.6)');
};

const disenableDarkMode = () =>{
    document.documentElement.style.setProperty('--darkOpocity', 'rgba(0, 0, 0,0.5)');
    document.documentElement.style.setProperty('--light', 'white');
    document.documentElement.style.setProperty('--dark', '#1a1a1a');
    document.documentElement.style.setProperty('--lightgrey', 'rgb(216, 209, 209)');
};

mode.addEventListener("click",()=>{
    DarkMode = localStorage.getItem("darkMode")
    if(DarkMode != "enabled"){
        enableDarkMode();
        console.log("oke")
        darkModel();
    }else{
        disenableDarkMode();
        console.log("ez is")
        lightModel();
    }
});

if(DarkMode =="enabled"){
    enableDarkMode();
    darkModel();
}else{
    disenableDarkMode();
    lightModel();
}

let height = screen.height;
document.querySelector(".to__pages__contianer").style.top = height-47+"px";

setInterval(() => {
    if(screen.height != height){
        height = screen.height;
        document.querySelector(".to__pages__contianer").style.top = height-47+"px";
    }
}, 1000);

let lastKnownScrollPosition = 0;

document.addEventListener('scroll', function(e) {
    if(window.scrollY > lastKnownScrollPosition){
        navbar.classList.add('scrolled');
        navItems.style.display = "block";
    }
    else if (window.scrollY == 0){
        navItems.style.display = "block";
    }
    else{
        navbar.classList.remove('scrolled');
        navItems.style.display = "none";
    }
    lastKnownScrollPosition = window.scrollY;
    
  
});

let backToUp = 0;

document.addEventListener('scroll', function(e) {
    console.log(window.scrollY)
    if(window.scrollY < backToUp){
        BackTop.style.display = "block";
        BackTop.style.top = height*0.7+scrollY+"px";
    }
    else{
        BackTop.style.display = "none";
    }
    if (window.scrollY == 0){
        BackTop.style.display = "none";
    }
    backToUp = window.scrollY;  
});
