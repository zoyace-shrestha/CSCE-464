let nameInput = document.getElementById("fieldName");
let emailInput = document.getElementById("fieldEmail");
let numberInput = document.getElementById("fieldNumber");
let subBtn = document.getElementById('form-subBtn');
let feedbackInput = document.getElementById("fieldFeedback")
const stars = document.querySelectorAll(".rating input[type='radio']");
let ratingValue;
const body = document.querySelector("body");
const sunIcon = document.querySelector(".toggle .fa-sun");
const moonIcon = document.querySelector(".toggle .fa-moon");
const toggle = document.querySelector("#toggle");

toggle.addEventListener("change", () => {
    body.classList.toggle("dark");
    sunIcon.className = sunIcon.className == "fas fa-sun" ? "fas fa-sun" : "fas fa-sun";
    moonIcon.className = moonIcon.className == "fa fa-moon" ? "fa fa-moon" : "fa fa-moon";

})


subBtn.addEventListener('click', function () {
    let nameValue = nameInput.value;
    let emailValue = emailInput.value;
    let numberValue = numberInput.value;
    let feedbackValue = feedbackInput.value;
    checkNull(nameValue, emailValue, numberValue);
    checkEmailForamt();
    console.log("The name of the Person is: " + nameValue + "\n" +
        "Their email ID is: " + emailValue + " \n" +
        "Their Phone number is : " + numberValue + " \n" +
        "Their feed back is :" + feedbackValue + " \n" +
        "They gave me a rating of: " + ratingValue);

})

// Help from stackoverlow and W3schools
for (let i = 0; i < stars.length; i++) {
    stars[i].addEventListener("change", function () {
        ratingValue = this.value;
    });
}


function checkNull(name, email, number) {
    if (name === '' || email === '' || number === '') {
        alert('Please Enter All Values');
    }

}

function checkEmailForamt() {
    let emailValue = emailInput.value;
    if (isEmail(emailValue)) {
    }
    else {
        alert('email is not Valid. Please have an actual format eg: user123@gmail.com ')
    }
}

// From online to check if the input is  email or not. 
function isEmail(input) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input);
}

function checkRating(stars) {
    for (let i = 0; i < stars; i++) {
        if (stars[i].checked) {
            ratingValue = stars[i].value;
            break;
        }
    }
}
