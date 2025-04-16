<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<style>
    body {
    background-color: royalblue;
    font-family: Arial, Helvetica, sans-serif;
    margin-top: 8%;
    justify-items: center;
}

.container {
    background-color: white;
    max-width: 500px;
    border-radius: 8px;
    padding: 32px;

}

input[type="number"] {
    width: 100%;
    box-sizing: border-box;
    padding: 8px;
    border-radius: 8px;
    margin-top: 8px;

}

button {
    width: 100%;
    padding: 12px 16px;
    background-color: royalblue;
    color: white;
    font-weight: bold;
    border-radius: 8px;
    margin-top: 16px;
    border: none;
}

label {
    display: block;
    margin-top: 16px;
    font-weight: bold;
}

.result {
    text-align: center;
    margin-top: 32px;
}

h3 {
    text-align: center;
    color: royalblue;
}
</style>
<body>
    <div class="container">
        <form method="post">
            <label>Harga
                <input type="number" name="harga" required>
            </label>

            <label>diskon
                <input type="number" name="diskon" min="0" max="100" required >
            </label>

            <button type="submit" name="submit">submit</button>

        </form>

        <?php
            if (isset($_POST['submit'])) {
                $harga = $_POST['harga'];
                $diskon= $_POST['diskon'];

                $jumlah_diskon = $diskon * $harga / 100;
                $harga_setelah_diskon = $harga - $diskon;

                echo '<div class = "result">';

                echo 'harga awal' . number_format($harga, 0, ',','.') . '<br>';
                echo 'diskon' . $diskon . '%(Rp'    . number_format($jumlah_diskon, 0, ',','.') . ')<br>';
                echo 'harga setelah diskon' . number_format($harga_setelah_diskon, 0, ',','.') .'<br>';
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>