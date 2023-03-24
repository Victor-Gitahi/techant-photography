const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const navBar = document.getElementById("nav-bar")

menuBtn.addEventListener("click", ()=> {
    navBar.classList.add("show")
})

closeBtn.addEventListener("click", ()=> {
    navBar.classList.remove("show")
})