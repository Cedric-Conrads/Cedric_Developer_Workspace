const zahl1 = document.getElementById("zahl1");
const zahl2 = document.getElementById("zahl2");

const plusBtn = document.getElementById("plus-btn");
const minusBtn = document.getElementById("minus-btn");
const malBtn = document.getElementById("mal-btn");
const geteiltBtn = document.getElementById("geteilt-btn");

const ergebnis = document.getElementById("ergebnis");

function rechne(rechenart) {
    const nummer1 = Number(zahl1.value);
    const nummer2 = Number(zahl2.value);

    if (zahl1.value === "" || zahl2.value === "") {
        ergebnis.textContent = "Bitte beide Zahlen eingeben.";
        return;
    }

    let result;

    if (rechenart === "plus") {
        result = nummer1 + nummer2;
    }

    if (rechenart === "minus") {
        result = nummer1 - nummer2;
    }

    if (rechenart === "mal") {
        result = nummer1 * nummer2;
    }

    if (rechenart === "geteilt") {
        if (nummer2 === 0) {
            ergebnis.textContent = "Durch 0 teilen geht nicht.";
            return;
        }

        result = nummer1 / nummer2;
    }

    ergebnis.textContent = "Ergebnis: " + result;
}

plusBtn.addEventListener("click", function () {
    rechne("plus");
});

minusBtn.addEventListener("click", function () {
    rechne("minus");
});

malBtn.addEventListener("click", function () {
    rechne("mal");
});

geteiltBtn.addEventListener("click", function () {
    rechne("geteilt");
});

document.addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
        rechne("plus");
    }
});

const resetButton = document.getElementById("reset-btn");

resetButton.addEventListener("click", function () {
    zahl1.value = "";
    zahl2.value = "";
    ergebnis.textContent = "Ergebnis: 0";


});
