<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian tiket</title>
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
            gap: 20px;
            border-radius: 20px;
            backdrop-filter: blur(4px);
            background-color: rgba(85, 85, 85, 0.5);
            position: absolute;
            width: 600px;
            height: 400px;
            left: 420px;
            bottom: 50px;
        }
        h1 {
            color: white;
            margin: 0;
            padding: 0;
        }
        table {
            border-spacing: 15px;
            bottom: 200px;
        }
        .nama,
        .jumlah {
            font-weight: bold;
            padding: 15px 30px;
            box-sizing: border-box;
            color: black;
            border-radius: 5px;
            outline-width: 1px;
            border: none;
            background-color: #c4c4c4;
        }
        .submit {
            display: flex;
            width: 50%;
            background-color: #97191D; 
            border: none;
            color: white;
            padding: 10px 27px;
            margin: 4px 2px;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
        }
        .submit:hover {
            cursor: pointer;
        }
        .pusat {
            padding: 0;
            margin: 0;
            place-items: center; 
            row-gap: 30px;
        }
    </style>
    <div class="pusat">
        <div class="atas">
            <h2 class="merah">STIKI</h2>
            <h2>ZOO</h2>
        </div>
        <div class="formtable">
            <h1>Pembelian Tiket</h1>
            <?php
                include "database.php";
                $id = $_GET['kode'];
                $sql = mysqli_query($koneksi, "SELECT*FROM pembelian WHERE ID='$id'");
                $no = 1;
                $data = mysqli_fetch_array($sql);
            ?>
            <form action="prosesUpdate.php" method="post" class="form" >
                <input type="hidden" name="id" value="<?php echo $data['ID'] ?>">
                <table>
                    <tr>
                        <td>
                            <input class="nama"
                            type="text"
                            name="Nama"
                            maxlength="50"
                            size="20"
                            value="<?php echo $data['Nama'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="jumlah"
                            type="number"
                            name="Jumlah"
                            maxlength="50"
                            size="20"
                            value="<?php echo $data['Jumlah'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input class="submit" type="submit" name="submit" value="Simpan">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>