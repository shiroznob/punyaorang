<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pembelian</title>
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
        button {
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
        .pusat {
            padding: 0;
            margin: 0;
            place-items: center; 
            row-gap: 30px;
        }
        table { 
            border-collapse:collapse;
            border-spacing:0;     
            font-size:16px;
            }

        table th {
            font-weight:bold;
            padding:10px;
            color:#fff;
            background-color:#2A72BA;
            border-top:1px black solid;
            border-bottom:1px black solid;
            }
        table td {
            padding:10px;
            border-top: 1px black solid;
            border-bottom: 1px black solid;
            text-align: center;
            }         
        table tr {
            background-color: #DFEBF8;
            }
        div {
            font-family:Arial, sans-serif;
            padding: 20px;
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
                require("database.php");
                $sql = "SELECT ID, Nama, Jumlah FROM pembelian";
                $query = mysqli_query($koneksi,$sql);
                ?>
                    <table border="1">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                        </tr>
            <?php		
                        $no = 1;
                        while($data = mysqli_fetch_array($query)) {
            ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data['Nama']?></td>
                            <td><?=$data['Jumlah']?></td>
                            <td><a href="update.php?kode=$data['ID']">Ubah</a></td>
                        </tr>
            <?php
                    }
            ?>
                    </table>
                    <div class="link">
                        <button>
                            <a href="form.html">Beli Tiket</a>
                        </button>
                    </div>
        </div>
    </div>
</body>
</html>