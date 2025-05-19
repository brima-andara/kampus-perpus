window.onload = function () {
    document.getElementById("radio-basic").checked = true; // Mengatur radio pertama terpilih
};

// !DASHBOARD
// ?CECKLIST KIRI
const tableDashboard = document.querySelector("body .dashboard");
const tableBuku = document.querySelector("body .buku");

const test = document.querySelector("#navbar header");
const containerBuku = document.querySelector(".container-buku");
const containerDashboard = document.querySelector("body .container-dashboard");

function showContent(parameter) {
    // document.querySelector("body .dashboard").style.display = "none";
    // document.querySelector("body .buku").style.display = "none";
    if (parameter === 1) {
        // tableDashboard.style.display = "block";
        containerDashboard.classList.toggle("turun");
        containerBuku.classList.toggle("naik");
    } else if (parameter === 2) {
        // tableBuku.style.display = "block";
        containerBuku.classList.toggle("naik");
        containerDashboard.classList.toggle("turun");
    }
}
// tableBuku.style.display = "block";
// tableDashboard.style.display = "block";

// ?TAMBAH
const tambahBuku = document.querySelector(".tambah-buku");
const tambah = document.querySelector(".tambah-buku #penanda");
const formTambahBuku = document.querySelector(".tambah-buku-form");

const blurFilter = document.querySelector(".blur");

function blur() {
    formTambahBuku.classList.toggle("muncul-tambah");
    blurFilter.classList.toggle("blur_active");
}
function removeBlur() {
    formTambahBuku.classList.remove("muncul-tambah");
    blurFilter.classList.remove("blur_active");
}

tambahBuku.addEventListener("mouseenter", function () {
    tambahBuku.classList.toggle("muncul");
});
tambahBuku.addEventListener("mouseleave", function () {
    tambahBuku.classList.toggle("muncul");
});
tambahBuku.addEventListener("click", function () {
    blur();
});
document.addEventListener("click", function (event) {
    if (
        !formTambahBuku.contains(event.target) &&
        !tambahBuku.contains(event.target)
    ) {
        removeBlur();
    }
});
document.addEventListener("keydown", (e) => {
    if (e.keyCode === 27) {
        removeBlur();
    }
});
blurFilter.addEventListener("click", function (event) {});
// ?GLIDE LIST BUKU
const realGlide = document.querySelector(".real-glide");
const blokGlide = document.querySelectorAll(".block-glide .anak-block-glide");

blokGlide[0].addEventListener("mouseenter", function () {
    realGlide.style.transform = "translateY(1%)";
    console.log("test");
});

blokGlide[1].addEventListener("mouseenter", function () {
    realGlide.style.transform = "translateY(116%)";
});
blokGlide[2].addEventListener("mouseenter", function () {
    realGlide.style.transform = "translateY(232%)";
});
blokGlide[3].addEventListener("mouseenter", function () {
    realGlide.style.transform = "translateY(348%)";
});
blokGlide[4].addEventListener("mouseenter", function () {
    realGlide.style.transform = "translateY(464%)";
});

// test.addEventListener("click", function () {
//     containerBuku.classList.toggle("naik");
//     containerDashboard.classList.toggle("turun");
// });

// ?GLIDE KATAGORI
const gliderKatagori = document.querySelector(".glider-katagori");
const radioEdukasi = document.querySelector("#radio-edukasi");
const radioNonEdukasi = document.querySelector("#radio-noneedukasi");

function pindahGlide(parameter) {
    if (parameter === 1) {
        gliderKatagori.classList.toggle("pindah-glider");
    } else if (parameter === 2) {
        gliderKatagori.classList.toggle("pindah-glider");
    }
}

// !!SCROLL
const listBuku = document.querySelector(".container-body-buku");
const panahScroll = document.querySelector(".fixed");
panahScroll.children[0].addEventListener("click", () => {
    listBuku.scrollTo(500, 0);
});
panahScroll.children[1].addEventListener("click", () => {
    listBuku.scrollTo(0, 500);
});

// *ISI BUKU EDUKASI BODY
const isiBodyBuku = document.querySelectorAll(".buku-edukasi-body .isi");

for (let i = 3; i < isiBodyBuku.length; i += 4) {
    isiBodyBuku[i].style.flexDirection = "row";
    isiBodyBuku[i].style.width = "102px";
    isiBodyBuku[i].style.position = "relative";
    isiBodyBuku[i].style.zIndex = "999999999999";
    isiBodyBuku[i].style.pointerEvents = "auto";

    console.log(isiBodyBuku[i]);
}
for (let i = 2; i < isiBodyBuku.length; i += 4) {
    isiBodyBuku[i].style.paddingLeft = "63px";
}
for (let i = 1; i < isiBodyBuku.length; i += 4) {
    isiBodyBuku[i].style.alignItems = "center";
    isiBodyBuku[i].style.paddingRight = "56px";
}
for (let i = 0; i < isiBodyBuku.length; i += 4) {
    isiBodyBuku[i].style.paddingLeft = "31px";
}
