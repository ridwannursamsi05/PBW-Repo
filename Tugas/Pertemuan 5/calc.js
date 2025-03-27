function cekNilai() {
    let nim = document.getElementById("nim").value;
    let nilai = parseFloat(document.getElementById("nilai").value);
    let hasilmutu = "";
    
    if (isNaN(nilai) || nilai < 0 || nilai > 100) {
        hasilmutu = "Nilai tidak valid!";
    } else if (nilai >= 80) {
        hasilmutu = "Nilai A";
    } else if (nilai >= 70) {
        hasilmutu = "Nilai B";
    } else if (nilai >= 60) {
        hasilmutu = "Nilai C";
    } else if (nilai >= 50) {
        hasilmutu = "Nilai D";
    } else {
        hasilmutu = "Nilai E";
    }
    
    document.getElementById("hasil").innerText = hasilmutu;
}