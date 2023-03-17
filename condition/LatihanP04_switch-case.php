<!DOCTYPE html>
<html>
    <head>
        <title>
            Konversi Nilai ke Huruf (Switch-Case)
        </title>
    </head>
    <body>
        <?php
            // Pengkondisian untuk memeriksa form yang telah di submit
            if(isset($_POST['submit'])){
                // mengambil data nilai dari input yang di submit user
                $nilai = $_POST['nilai'];

                // Pengkondisian swith-case untuk bisa mencetak huruf
                switch ($nilai){
                    case ($nilai >= 80):
                        $huruf = 'A';
                break;
                    case ($nilai >= 70 && $nilai <=79):
                        $huruf = 'B';
                break;
                    case ($nilai >= 60 && $nilai <=69):
                        $huruf = 'C';
                break;
                    case ($nilai >= 50 && $nilai <=59):
                        $huruf = 'D';
                break;
                default:
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
