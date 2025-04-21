function searchById() {
    const searchInput = document
        .getElementById("search")
        .value.trim()
        .toLowerCase();

    const container = document.querySelectorAll(".container .box");
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
