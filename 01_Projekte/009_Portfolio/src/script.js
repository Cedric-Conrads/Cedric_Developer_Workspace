const topButton = document.getElementById("top-btn");

window.addEventListener("scroll", function () {
    if (window.scrollY > 200) {
        topButton.style.display = "block";
    } else {
        topButton.style.display = "none";
    }
});

topButton.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});