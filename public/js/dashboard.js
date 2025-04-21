window.onload = function () {
    document.getElementById("radio-basic").checked = true; // Mengatur radio pertama terpilih
};

// !DASHBOARD
// ?CECKLIST KIRI
const tableDashboard = document.querySelector("body .dashboard");
const tableBuku = document.querySelector("body .buku");

function showContent(parameter) {
    document.querySelector("body .dashboard").style.display = "none";
    document.querySelector("body .buku").style.display = "none";
    if (parameter === 1) {
        document.querySelector("body .dashboard").style.display = "block";
    } else if (parameter === 2) {
        document.querySelector("body .buku").style.display = "block";
    }
}

// ?TAMBAH
const tambahBuku = document.querySelector(".tambah-buku");
const tambah = document.querySelector(".tambah-buku #penanda");

tambahBuku.addEventListener("mouseenter", function () {
    tambahBuku.classList.toggle("muncul");
    console.log("test");
});
tambahBuku.addEventListener("mouseleave", function () {
    tambahBuku.classList.toggle("muncul");
});

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
blokGlide[5].addEventListener("mouseenter", function () {
    realGlide.style.transform = "translateY(580%)";
});
