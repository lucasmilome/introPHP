document.getElementById("studentForm").addEventListener("submit", function(event) {
    let isValid = true;
    
    const nameInput = document.getElementById("name");
    const nameError = document.getElementById("nameError");

    if (nameError.value.trim() === "") {
        nameError.style.display = "block";
        isValid = false;
    } else {
        nameError.style.display = "none";
    }

    const emailInput = document.getElementById("email");
    const emailError = document.getElementById("emailError");
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(emailInput.value)) {
        emailError.style.display = "block";
        isValid = false;
    } else {
        emailError.style.display = "none";
    }
});