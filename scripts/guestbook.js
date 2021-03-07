/*
 Author: Mark
 guestbook javascript*/

//get button
document.getElementById("submit").onsubmit = validate;

// noinspection DuplicatedCode
function validate() {
    let isValid = true;

    //clear all error messages
    let err = document.getElementsByClassName("err");
    for (let i=0; i<err.length; i++) {
        err[i].style.display = "none";
    }

    //check fname
    let first = document.getElementById("fname").value;
    if (first === "") {
        let errFirst = document.getElementById("err-fname");
        errFirst.style.display = "inline";
        isValid = false;
    }

    //check lname
    let last = document.getElementById("fname").value;
    if (last === "") {
        let errLast = document.getElementById("err-lname");
        errLast.style.display = "inline";
        isValid = false;
    }

    //check email
    let email = document.getElementById("email").value;

    if (email === "") {

    } else {
        //check if has @
        if (!(email.includes("@") && email.includes("."))) {
            let errEmail = document.getElementById("err-email");
            errEmail.style.display = "inline";
            isValid = false;
        }
    }

    //check linkedin
    let linkedin = document.getElementById("linkedin").value;

    if (linkedin === "") {

    } else {
        //check if has @
        if (!(linkedin.includes("http") && linkedin.includes(".com"))) {
            let errEmail = document.getElementById("err-linkedin");
            errEmail.style.display = "inline";
            isValid = false;
        }
    }

    //check how we met
    let howMet = document.getElementById("howmet").value;

    if (howMet === "specify") {
        let errMet = document.getElementById("err-met");
        errMet.style.display = "inline";
        isValid = false;
    }

    //check email list pls
    let mailRequest = document.getElementById("mail-list").checked;
    //alert("Mail status: " + mailRequest);

    if (mailRequest) {
        if (email === "") {
            let errEmail = document.getElementById("err-email");
            errEmail.style.display = "inline";
            isValid = false;
        }
    }

    //alert("worked!");

    return isValid;
}