<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    

<style>
        
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        .container {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }
        input, button {
            padding: 8px;
            margin: 5px 0;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .result {
            margin-top: 15px;
            padding: 10px;
            background-color: #f8f8f8;
            border-radius: 5px;
        }
    </style>

    </head>
<body>
    <div class="container">
            <h2>Perhitungan Diskon</h2>

            <form method="post"> <!-- form method bukan action -->
                <label for="Harga">Harga awal:</label><br>
                <input type="number" name="harga" require></input><br>

                <label for="diskon">Persentase Diskon:</label><br>
                <input type="number" name="diskon" min="0" max="100" require></input><br>

                <button type ="text" name='hitung'>kirim</button>
            </form>

            <?php
            
            if (isset($_POST['hitung'])) {
                $harga_awal = $_POST['harga'];
                $diskon = $_POST['diskon'];

            

                // $diskon =('0 -> /100') $s;   
                $jumlah_diskon = $diskon * $harga_awal / 100;

                $harga_setelah_diskon = $harga_awal - $jumlah_diskon ;

                echo '<div class ="result">';
                echo '<h3>Harga akhir</h3>';


                echo 'Harga Awal: Rp '                  . number_format($harga_awal,) .'<br>';// kurang titik
                echo 'Diskon'  .$diskon .'% (Rp   '     . number_format($jumlah_diskon, 0, ',', '.') . ')<br>';
                echo '<strong>Harga Setelah Diskon'     . number_format($harga_setelah_diskon, 0, ',','.') . '</strong>';
                echo '</div>';
               

            }
            ?>
    </div>
</body>
</html>