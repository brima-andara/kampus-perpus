// !LINK LOGO
const logo = document.querySelector("nav .kiri img");
console.log(logo);
logo.addEventListener("click", function () {
    const url = logo.getAttribute("data-route");
    window.location.href = url;
});
