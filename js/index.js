//something
//nav interactions        
const menuIconContainer = document.querySelector("nav .menu-icon-container");
const menuContainer = document.querySelector(".desktop-nav");
const navContainer = document.querySelector(".nav-container");

menuIconContainer.addEventListener("click", () => {
    navContainer.classList.toggle("active");
})
menuContainer.addEventListener("click", () => {
    navContainer.classList.toggle("active");
})

//Go to end page after signup 


function down() 
{
x = 0;  //horizontal coord
y = 10000; //vertical coord
window.scroll(x,y);
}

