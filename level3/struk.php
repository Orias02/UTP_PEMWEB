<?php
// Kerjakan mulai dari sini
if (isset($nama, $menu, $harga, $jumlah, $kategori, $subtotal, $diskon, $total)) {
    $_SESSION["nama"]     = $nama;
    $_SESSION["menu"]     = $menu;
    $_SESSION["harga"]    = $harga;
    $_SESSION["jumlah"]   = $jumlah;
    $_SESSION["kategori"] = $kategori;
    $_SESSION["subtotal"] = $subtotal;
    $_SESSION["diskon"]   = $diskon;
    $_SESSION["total"]    = $total;
}



// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini
    echo "<h2>Struk Pemesanan</h2>";
    echo "Nama: " . htmlspecialchars($_SESSION["nama"]) . "<br>";
    echo "Minuman: " . htmlspecialchars($_SESSION["menu"]) . "<br>";
    echo "Harga Satuan: Rp" . number_format($_SESSION["harga"], 0, ",", ".") . "<br>";
    echo "Jumlah: " . $_SESSION["jumlah"] . " gelas<br>";
    echo "Kategori: " . htmlspecialchars($_SESSION["kategori"]) . "<br>";
    echo "Subtotal: Rp" . number_format($_SESSION["subtotal"], 0, ",", ".") . "<br>";
    echo "Potongan Harga: Rp" . number_format($_SESSION["diskon"], 0, ",", ".") . "<br>";
    echo "<strong>Total Pembayaran: Rp" . number_format($_SESSION["total"], 0, ",", ".") . "</strong><br>";
}
?>
