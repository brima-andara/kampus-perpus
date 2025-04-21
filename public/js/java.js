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
const popUp = document.querySelector(".pop_up");
const bodyBlur = document.querySelector(".blur");
function blur() {
    popUp.classList.toggle("active");
    bodyBlur.classList.toggle("blur_active");
}

for (let i = 0; i < container.length; i++) {
    container[i].addEventListener("click", function () {
        blur();
    });
}

// ?Synopsis Pop Up

const listPopUp = document.querySelector(".flex .kanan ul ");
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

blur();
transaksi.classList.toggle("active");
listPopUp.style.opacity = 0;
listPopUp.style.visibility = "hidden";
listPopUp.style.transition = 0.5;

// ?? Exit Pop UP

const exitButton = document.querySelector(".exit_button");
const fontExit = document.querySelector(".exit_button i");

exitButton.addEventListener("mouseenter", function () {
    fontExit.style.color = "white";
});

exitButton.addEventListener("mouseleave", function () {
    fontExit.style.color = "rgb(151, 151, 151)";
});
function removePopUp() {
    bodyBlur.classList.remove("blur_active");
    popUp.classList.remove("active");
}
exitButton.addEventListener("click", function () {
    removePopUp();
});

document.addEventListener("keydown", (e) => {
    if (e.keyCode === 27) {
        removePopUp();
        console.log("test");
    }
});
