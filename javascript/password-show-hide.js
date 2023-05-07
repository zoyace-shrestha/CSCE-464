const pswrdField = document.querySelector(".form .field input[type='password'] ");
const toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () => {
    if (pswrdField.type == "password") {
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
    }
    else if (pswrdField.type == "text") {
        pswrdField.type = "password";
        toggleBtn.classList.remove("active");
    }
}

