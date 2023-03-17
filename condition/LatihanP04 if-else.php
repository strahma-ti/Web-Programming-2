<!DOCTYPE html>
<html>
    <head>
        <title>
            Konversi Nilai ke Huruf (If-Else)
        </title>
    </head>
    <body>
        <?php
            // Pengkondisian untuk memeriksa form yang telah di submit
            if(isset($_POST['submit'])){
                // mengambil data nilai dari input yang di submit user
                $nilai = $_POST['nilai'];

                // Pengkondisian if-else untuk bisa mencetak huruf
                if ($nilai >= 80){
                    $huruf = 'A';
                }
                elseif ($nilai >= 70 && $nilai <= 79){
                    $huruf = 'B';
                }
                elseif ($nilai >= 60 && $nilai <= 69){
                    $huruf = 'C';
                }
                elseif ($nilai >= 50 && $nilai <= 59){
                    $huruf = 'D';
                }
                else {
                    $huruf = 'E';
                }
            }
        ?>

        <!-- membuat form untuk menginput nilai -->
        <form method="post">
            <label for = "nilai"> Masukkan Nilai : </label>
            <input type="number" id="nilai" name="nilai" required>
            <input type="submit" name="submit" value="Konversi">
        </form>
        <?php
            // mmeriksa apakah form sudah di submit oleh user
            if(isset($_POST['submit'])){
            // jika sudah di submit maka akan mencetak huruf sesuai nilai yang sudah di input
            echo $huruf;
            }
        ?>
    </body>
</html>
