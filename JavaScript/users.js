const searchP = document.querySelector(".userSearch p"),
searchBar = document.querySelector(".userSearch input"),
searchBtn = document.querySelector(".userSearch i");
usersList = document.querySelector(".users");

searchBtn.addEventListener("click",()=>{
    searchP.classList.toggle("active");
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
})

setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/users.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    };
    xhr.send();
}, 1000);