// !SEARCH
const container = document.querySelectorAll(".container .box");
function searchById() {
    const searchInput = document
        .getElementById("search")
        .value.trim()
        .toLowerCase();

    container.forEach((element) => {
        element.style.display = "none";
        console.log(element);
    });

    //   // Jika input kosong, tampilkan semua elemen dan beri pesan
    if (!searchInput) {
        container.forEach((element) => {
            element.style.display = "";
        });
        //     // output.textContent = "Silakan masukkan ID elemen.";
        return;
    }
    let found = false;

    container.forEach((element) => {
        const elementId = element.id.toLowerCase();

        if (elementId.includes(searchInput)) {
            element.style.display = "";
            found = true;
        }
    });
}

// ! MEMBUAT POP UP
fetch("http://localhost:8000/api/books") // sesuaikan dengan URL Laravel kamu
    .then((response) => response.json())
    .then((data) => {
        console.log(data); // Data dari database
        // Tampilkan di halaman, olah, dll
    })
    .catch((error) => console.error("Gagal fetch:", error));

const popUp = document.querySelector(".pop_up");
const bodyBlur = document.getElementById("blur-section");

function munculPopUp(element) {
    const title = element.getAttribute("data-title");
    const img = element.getAttribute("data-b");
    const synopsis = element.getAttribute("data-synopsis");

    document.getElementById("popup-img").src = img;
    document.getElementById("popup-title").textContent = title;
    document.getElementById("popup-synopsis").textContent = synopsis;

    popUp.classList.add("active");
    bodyBlur.classList.add("active-blur");
}

function tutupPopup() {
    popUp.classList.remove("active");
    bodyBlur.classList.remove("active-blur");
}

function loadPopUpImagePng() {
    var imgElement = document.createElement("img");
    styleCover(imgElement);
    // imgElement.;
    return kiri.appendChild(imgElement);
}

function styleCover(element) {
    element.style.width = "100%";
    element.style.height = "100%";
    element.style.objectFit = "cover";
}

// for (let i = 0; i < container.length; i++) {
//     container[i].addEventListener("click", function () {
//         blur();
//     });
// }

// ?Synopsis Pop Up

const listPopUp = document.querySelector(".flex .kanan ul");
const desc = document.querySelector(".desc");
const descButton = document.querySelector(".desc button");

listPopUp.children[0].addEventListener("click", function () {
    desc.classList.toggle("active");
    listPopUp.style.opacity = 0;
    listPopUp.style.visibility = "hidden";
    listPopUp.style.transition = 0.5;
});
descButton.addEventListener("click", function () {
    desc.classList.toggle("active");
    listPopUp.style.opacity = 1;
    listPopUp.style.visibility = "visible";
    listPopUp.style.transition = 0.5;
});

// ?Transaksi
const transaksi = document.querySelector(".transaksi");
const transaksiButton = document.querySelector(".transaksi .kembali");
listPopUp.children[2].addEventListener("click", function () {
    transaksi.classList.toggle("active");
    listPopUp.style.opacity = 0;
    listPopUp.style.visibility = "hidden";
    listPopUp.style.transition = 0.5;
});
transaksiButton.addEventListener("click", function () {
    transaksi.classList.toggle("active");
    listPopUp.style.opacity = 1;
    listPopUp.style.visibility = "visible";
    listPopUp.style.transition = 0.5;
});

// blur();
// transaksi.classList.toggle("active");
// listPopUp.style.opacity = 0;
// listPopUp.style.visibility = "hidden";
// listPopUp.style.transition = 0.5;

// ?? Exit Pop UP

const exitButton = document.querySelector(".exit_button");
const fontExit = document.querySelector(".exit_button i");

function removePopUp() {
    bodyBlur.classList.remove("blur_active");
    popUp.classList.remove("active");
    desc.classList.remove("active");
    transaksi.classList.remove("active");
    listPopUp.style.opacity = 1;
    listPopUp.style.visibility = "visible";
    listPopUp.style.transition = 0.5;
}

exitButton.addEventListener("mouseenter", function () {
    fontExit.style.color = "white";
});

exitButton.addEventListener("mouseleave", function () {
    fontExit.style.color = "rgb(151, 151, 151)";
});

exitButton.addEventListener("click", function () {
    removePopUp();
});

document.addEventListener("keydown", (e) => {
    if (e.keyCode === 27) {
        removePopUp();
    }
});
