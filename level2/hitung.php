<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini

// cek valid
$valid = true;
$pesangagal = "";

if ($jumlah <= 0) {
    $valid = false;
    $pesangagal = "Jumlah minimal 1 gelas. Angka 0 atau negatif tidak dapat diproses.";
}

// Hitung harga
$harga = 0;

if ($menu == "Kopi Susu Tobi") {
    $harga = 18000;
} elseif ($menu == "Americano") {
    $harga = 15000;
} elseif ($menu == "Matcha Latte") {
    $harga = 22000;
} elseif ($menu == "Kopi Tubruk") {
    $harga = 30000;
} elseif ($menu == "Teh MGM") {
    $harga = 100000;
} else {
    $valid = false;
    $pesangagal = "Minuman yang dipilih tidak tersedia.";
}

$subtotal = $harga * $jumlah;

// Hitung Diskon
$diskon = 0;

if ($kategori == "Member" && $jumlah >= 3) {
    $diskon = $subtotal * 0.10;
}

// total harga
$total = $subtotal - $diskon;
?>