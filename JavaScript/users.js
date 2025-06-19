const searchP = document.querySelector(".userSearch p"),
searchBar = document.querySelector(".userSearch input"),
searchBtn = document.querySelector(".userSearch i");

searchBtn.addEventListener("click",()=>{
    searchP.classList.toggle("active");
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
})