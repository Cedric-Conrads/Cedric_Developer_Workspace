alert("JavaScript ist verbunden");

const lengthInput = document.getElementById("length");
const generateButton = document.getElementById("generate-btn");
const passwordOutput = document.getElementById("password-output");

const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=[]{}|;:,.<>?";

function generatePassword() {
    const length = Number(lengthInput.value);

    if (lengthInput.value === "") {
        passwordOutput.textContent = "Bitte gib eine Passwortlänge ein.";
        return;
    }

    if (length < 4) {
        passwordOutput.textContent = "Das Passwort muss mindestens 4 Zeichen lang sein.";
        return;
    }

    if (length > 30) {
        passwordOutput.textContent = "Das Passwort darf maximal 30 Zeichen lang sein.";
        return;
    }

    let password = "";

    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        password = password + characters[randomIndex];
    }

    passwordOutput.textContent = password;
}

generateButton.addEventListener("click", generatePassword);

lengthInput.addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
        generatePassword();
    }
});