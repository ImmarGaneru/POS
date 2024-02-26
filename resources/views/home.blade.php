<html>
    <body>
        <h1>Ini Halaman Home</h1>
        <form method="GET" action="">
            <label for="id">ID Pengguna:</label>
            <input type="text" name="id" id="id">
        
            <label for="name">Nama Pengguna:</label>
            <input type="text" name="name" id="name">
        
            <button type="submit" name="submit">Tampilkan Profil</button>
        </form>
        
        <?php
        if (isset($_GET['submit'])) {
            $id = $_GET['id'];
            $name = $_GET['name'];
        
            // Buat URL sesuai dengan nilai input
            $url = '/user/' . urlencode($id) . '/name/' . urlencode($name);
        
            // Redirect ke URL yang sesuai
            header('Location: ' . $url);
            exit();
        }
        ?>
        <h2><a href="/category/baby-kid">Go to Baby Kid</a></h2>
        <h2><a href="/category/beauty-health">Go to Beauty health</a></h2>
        <h2><a href="/category/food-beverage">Go to Food Beverage</a></h2>
        <h2><a href="/category/home-care">Go to Home Care</a></h2>
        <h2><a href="/sales">Halaman Penjualan</a></h2>
    </body>
</html>