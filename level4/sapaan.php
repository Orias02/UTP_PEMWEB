<?php

if (isset($_COOKIE["nama_pelanggan"])) {
    echo "<p>Selamat datang kembali, " . htmlspecialchars($_COOKIE["nama_pelanggan"]) . "!</p>";
} else {
    echo "<p>Selamat datang di Kedai Kopi Tobi!</p>";
}