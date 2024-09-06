import "./bootstrap";
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


const burger = document.getElementById("burger");
const menu = document.getElementById("menu");
const dropdown = document.getElementById("dropdown");

burger.addEventListener("click", () => {
    dropdown.classList.toggle("hidden");

    if (dropdown.classList.contains("hidden")) {
        document.body.style.overflowY = "";
    } else {
        document.body.style.overflowY = "hidden";
    }
});


