const form = document.querySelector(".chatSend"),
    inputField = form.querySelector("#Message"),
    chatMsg = document.querySelector(".chatMsg"),
continueBtn = document.querySelector(".chatSend>i");

form.addEventListener("submit", (e) => {
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

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                chatMsg.innerHTML = data;
            }
        }
    };
    let formData = new FormData(form);
    xhr.send(formData);
}, 500);