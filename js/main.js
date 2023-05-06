const navbarUL = document.querySelector(".navbar>ul");
const regBtn = document.getElementById("signIn");
const navItems = document.querySelectorAll(".linkItem");
navItems.forEach((item)=>{
    navItems.forEach(item => {
        item.addEventListener('click', function() {
          navItems.forEach(item => item.classList.remove('active'));
          this.classList.add('active');
        });
    });
});

document.onclick = function(e){
    console.log(e.target.classList);
    if(e.target.id == "check"){
        navbarUL.classList.toggle("active");
        document.querySelector(".och").classList.toggle("dNone");
        document.querySelector(".yop").classList.toggle("dInh");
    }
    if(e.target.classList == "linkItem"){
        document.querySelector(".yop").classList.toggle("dInh");
        document.querySelector(".och").classList.toggle("dNone");
        navbarUL.classList.toggle("active");
    }
    if(e.target.classList[1] == "signIn" || e.target.classList =="signIn"){
        document.getElementById("register").classList.toggle("dNone");
    }
    if(e.target.classList[1] == "fa-xmark" || e.target.classList == "fa-xmark" ){
        document.getElementById("register").classList.toggle("dNone");
    }
}

