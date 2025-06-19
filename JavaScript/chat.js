const form = document.querySelector(".chatSend"),
    inputField = form.querySelector("#Message")
continueBtn = document.querySelector(".chatSend>i");

form.addEventListener("submit", (e)=>{
    e.preventDefault();

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                inputField.value = "";
            }
        }
    };
    let formData = new FormData(form);
    xhr.send(formData);
})