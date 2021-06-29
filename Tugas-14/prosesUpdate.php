<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>
<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: roboto;
            background-image: url("eagle.jpg");
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            place-items: center;
        }
        .merah {
            color: #97191D;
        }
        .atas {
            margin-left: 500px;
            display: flex;
            font-size: 64px;
            flex: 1;
            gap: 20px;
            font-weight: bold;
            place-items: center;
            align-items: center;
        }
        .formtable {
            font-size: 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* buat ngasi spasi */
            gap: 60px;
            border-radius: 20px;
            backdrop-filter: blur(4px);
            background-color: rgba(85, 85, 85, 0.5);
            position: absolute;
            width: 600px;
            height: 400px;
            left: 420px;
            bottom: 50px;
        }
        .pusat {
            padding: 0;
            margin: 0;
            place-items: center; 
            row-gap: 30px;
        }
        .berhasil {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: white;
        }
        button {
            display: flex;
            width: 100%;
            background-color: #97191D; 
            border: none;
            color: white;
            padding: 10px 27px;
            margin: 4px 2px;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
        }
        button:hover {
            cursor: pointer;
        }
        a {
            color: white;
            text-decoration: none;
        }
    </style>
    <div class="pusat">
        <div class="atas">
                <h2 class="merah">STIKI</h2>
                <h2>ZOO</h2>
        </div>
        <div class="formtable">
            <?php
                if(isset($_POST["submit"])) {
                    $id = $_POST["id"];
                    $nama = $_POST["Nama"];
                    $jumlah = $_POST["Jumlah"];

                    require('database.php');
                    $sql = "UPDATE pembelian SET Nama='$nama', Jumlah='$jumlah' WHERE id='$id'";
                    $query = mysqli_query($koneksi, $sql);
                    if ($query) {
            ?>
                    <div class="berhasil">
                        <h2>Terimakasih</h2>
                        <h2><?php echo $nama;?></h2>
                    </div>
                    <div class="link">
                        <button>
                            <a href="tabel.php">Lihat Daftar Pembelian</a>
                        </button>
                    </div>
            <?php
                    } else {
            ?>
                    <div class="berhasil">
                        <h2>Pembelian Gagal</h2>
                    </div>
                    <div class="link">
                        <button>
                            <a href="form.html">Kembali ke form Pembelian Tiket</a>
                        </button>
                    </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>