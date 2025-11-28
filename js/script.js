
// Mobile view 

const hamburger = document.querySelector(".hamburger")
const overlay = document.querySelector("#overlay")
const mobile_menu = document.querySelector("#mobile-menu")

hamburger.addEventListener("click",function(){
mobile_menu.style.right ="0";
overlay.classList.remove("hidden");
})


overlay.addEventListener("click",function(){
    mobile_menu.style.right="-100%";
    overlay.classList.add("hidden");
})