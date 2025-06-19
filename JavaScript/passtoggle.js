const pass = document.querySelector("form input[type='password']"),
toggleBtn = document.querySelector(".password i");

toggleBtn.addEventListener("click",()=>{
    if (pass.type == "password") {
        pass.type = "text";
        toggleBtn.classList.remove("fa-eye");
        toggleBtn.classList.add("fa-eye-slash");
    }else{
        pass.type = "password";
        toggleBtn.classList.remove("fa-eye-slash");
        toggleBtn.classList.add("fa-eye");
    }
})