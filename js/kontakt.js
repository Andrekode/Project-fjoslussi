//Constants
const submitBtn = document.getElementById("submit")
const navnInput = document.getElementById("navn")
const telefonInput = document.getElementById("telefon")
const emailInput = document.getElementById("email")
const emneInput = document.getElementById("emne")
const beskjedInput = document.getElementById("beskjed")
//Function to clear existing inputs
function submitFormClear () {
    navnInput.innerHTML = ""
    navnInput.innerHTML = ""
    telefonInput.innerHTML = ""
    emailInput.innerHTML = ""
    emneInput.innerHTML = ""
    beskjedInput.innerHTML = ""
}
//Function to check if all inputs are filled, if not gives alert that the form is not filled
function submitForm () {
    if (navnInput.value != "" & telefonInput.value != "" & emailInput.value != "" & emneInput.value != "" & beskjedInput.value != "") {
        submitBtn.disabled = false
        alert("Form Submitted")
        submitFormClear()
    }
    else {
        alert("Form is not filled out")
        return false
    }
}