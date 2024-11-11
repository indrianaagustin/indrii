<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    echo "<div style='text-align: center; margin-top: 30px;'>";
    echo "<h1>Terima kasih telah mendaftar!</h1>";
    echo "<p>Nama Lengkap: " . $name . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Nomor Telepon: " . $phone . "</p>";
    echo "<p>Alamat: " . $address . "</p>";
    echo "</div>";
} else {
    echo "<p>Form tidak dapat diakses langsung.</p>";
}
?>
