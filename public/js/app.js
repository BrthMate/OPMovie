const search = document.querySelector(".search__icon");
const navbar = document.querySelector(".navigation")
const navItems = document.querySelector(".to__pages__contianer");
const searchContainer = document.querySelector(".search__container");
const pageTag = document.querySelector(".to__pages");
const mode = document.querySelector(".mode");
const BackTop = document.querySelector(".back__top");
const searchInput = document.getElementById("search");
const searchBox = document.querySelector(".find__item__container");

let DarkMode = localStorage.getItem("darkMode");
let searchActive = false;
let url = window.location.pathname;

if( url == "/"){
    pageTag.children[0].classList.add("active");
}else if ( url == "/series"){
    pageTag.children[1].classList.add("active");
}else if ( url == "/movies"){
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
        {
            searchItemsDN();
            searchBox.style.display = "none";
        }
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
        darkModel();
    }else{
        disenableDarkMode();
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
let back__toBtnPos = height*.7;
document.addEventListener('scroll', function() {
    if(window.scrollY < backToUp){
        BackTop.style.display = "block";
        BackTop.style.top = back__toBtnPos + scrollY+"px";
    }
    else{
        BackTop.style.display = "none";
    }
    if (window.scrollY == 0){
        BackTop.style.display = "none";
    }
    backToUp = window.scrollY;  
});
searchInput.addEventListener('keyup', () => {
    if(url != "/movies" || url != "/series" ){
        let search = searchInput.value;
        if(search != ""){
            searchBox.style.display = "flex";
        }else{
            searchBox.style.display = "none";
        }
    }else{
        //masik oldal
    }
});

/***back__to */

BackTop.addEventListener("dragstart", BackTopmousedown);

function BackTopmousedown(e){
    console.log("start")
    window.addEventListener('drag',mousemove);
    window.addEventListener('dragend',mouseup);

    let prevX = e.clientX;
    let prevY = e.clientY;

    function mousemove(e){
        BackTop.style.right= "unset";

        let newX; 
        let newY; 

        if(e.clientX != 0 || e.clientY != 0){
            newX = prevX-e.clientX;
            newY = prevY-e.clientY;
        }
        

        const rect = BackTop.getBoundingClientRect();
        back__toBtnPos = rect.top;
        if(window.innerWidth-(rect.left - newX)-BackTop.offsetWidth < 10 ){
            BackTop.style.left = window.innerWidth-BackTop.offsetWidth - 10 + "px";          
        }
        else if (window.innerHeight-(rect.top - newY)-BackTop.offsetHeight < 10) {
            BackTop.style.top = window.innerHeight-BackTop.offsetHeight - 10 + "px"; 
        }
        else{
            if(rect.top - newY > 10){
                BackTop.style.top = window.scrollY+rect.top - newY + "px";
                
            }else{
                //BackTop.style.top = window.scrollY+10 + "px";
            }
            if(rect.left - newX > 10){
                BackTop.style.left = rect.left - newX + "px";
            }else{
                //BackTop.style.left = 10 + "px";
            }
        }
        if(e.clientX !== 0 && e.clientY !== 0){
            prevX = e.clientX;
            prevY = e.clientY;
        }
    }

    function mouseup(){
        console.log("end")
        window.removeEventListener('drag',mousemove);
        window.removeEventListener('dragend', mouseup);
    }
}