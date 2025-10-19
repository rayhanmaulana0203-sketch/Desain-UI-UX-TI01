<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $telepon = htmlspecialchars($_POST["telepon"]);
    $email = htmlspecialchars($_POST["email"]);
    $instruksi = htmlspecialchars($_POST["instruksi"]);
    $crust = htmlspecialchars($_POST["crust"]);
    $jumlah = (int) $_POST["jumlah"];

    // Toppings bisa banyak
    $toppings = isset($_POST["topping"]) ? $_POST["topping"] : [];

    echo "<h2>Detail Pemesanan Pizza</h2>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Alamat:</strong> $alamat</p>";
    echo "<p><strong>Nomor Telepon:</strong> $telepon</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Instruksi Pengiriman:</strong> $instruksi</p>";
    echo "<p><strong>Crust:</strong> $crust</p>";
    
    echo "<p><strong>Topping yang dipilih:</strong></p>";
    if (count($toppings) > 0) {
        echo "<ul>";
        foreach ($toppings as $top) {
            echo "<li>" . htmlspecialchars($top) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Tidak ada topping yang dipilih.</p>";
    }

    echo "<p><strong>Jumlah Pizza:</strong> $jumlah</p>";
} else {
    echo "Akses tidak sah.";
}
?>
<form action="proses_pesanan.php" method="POST">
    <h3>Your Information</h3>
    Name: <input type="text" name="nama" required><br>
    Address: <input type="text" name="alamat" required><br>
    Telephone Number: <input type="text" name="telepon" required><br>
    Email: <input type="email" name="email" required><br>
    <br>
    Delivery Instructions:<br>
    <textarea name="instruksi" rows="3" cols="30"></textarea><br><br>

    <strong>Crust (Choose one):</strong><br>
    <input type="radio" name="crust" value="Classic White" required> Classic White<br>
    <input type="radio" name="crust" value="Multigrain"> Multigrain<br>
    <input type="radio" name="crust" value="Cheese-stuffed crust"> Cheese-stuffed crust<br>
    <input type="radio" name="crust" value="Gluten-free"> Gluten-free<br><br>

    <strong>Toppings (Choose as many as you want):</strong><br>
    <input type="checkbox" name="topping[]" value="Pepperoni"> Pepperoni<br>
    <input type="checkbox" name="topping[]" value="Red Sauce"> Red Sauce<br>
    <input type="checkbox" name="topping[]" value="White Sauce"> White Sauce<br>
    <input type="checkbox" name="topping[]" value="Mozzarella Cheese"> Mozzarella Cheese<br>
    <input type="checkbox" name="topping[]" value="Mushrooms"> Mushrooms<br>
    <input type="checkbox" name="topping[]" value="Peppers"> Peppers<br>
    <input type="checkbox" name="topping[]" value="Anchovies"> Anchovies<br><br>

    <label>How many pizzas: </label>
    <input type="number" name="jumlah" min="1" value="1"><br><br>

    <input type="submit" value="Kirim">
    <input type="reset" value="Reset">
</form>