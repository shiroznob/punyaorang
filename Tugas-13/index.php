<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas 13</title>
  </head>
  <style>
    * {
        margin: 0;
        padding: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
        Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    }
    body {
        background-image: url(eagle.jpg);
        display: grid;
        place-items: center;
        width: 100vw;
        height: 100vh;
    }
    h2 {
        padding-bottom: 5px;
        border-bottom: 3px solid #f8c301;
        font-size: 64px;
        color: #f8c301;
    }
    #pusat {
        display: grid;
        place-items: center;
        row-gap: 30px;
    }
    input, textarea {
        font-weight: bold;
        padding: 12px 20px;
        box-sizing: border-box;
        background-color: white;
        color: black;
        border-radius: 5px;
        outline-width: 0px;
        border: none;
    }
    .form {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
        flex: 1;
        gap: 50px;
        font-weight: bold;
    }
    .judul {
        display: flex;
        flex: 1;
    }
    .sejajar {
        display: flex;
        flex-direction: row;
        gap: 50px;
    }
    .nama,
    .jk,
    .alamat {
        display: flex;
        flex-direction: column;
        gap: 10px;
        font-weight: bold;
    }
    .gender {
        display: flex;
        flex-direction: row;
        gap: 20px;
        justify-items: start;
    }
    button {
        justify-self: center;
        display: flex;
        width: 150px;
        background-color: #4CAF50; 
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        align-self: center;
        border-radius: 5px;
    }
    button:hover {
        cursor: pointer;
    }
    select {
        font-weight: bold;
        padding: 4px 8px;
        box-sizing: border-box;
        background-color: white;
        color: black;
        border-radius: 5px;
        outline-width: 0px;
        border: none;
    }
    .tengah {
        font-size: 18px;
        font-weight: bold;
        display: flex;
        flex-direction: column;
        gap: 30px;
        color: white;
    }
    .tengah div {
        width:100%;
        display: flex;
        flex-direction: row;
        justify-items: space-between;
        align-items: space-between;
        
    }
    .tengah div:nth-child(odd) {
        display: flex;
        flex: 0.4;
    }
    .tengah div:nth-child(even) {
        display: flex;
        flex: 0.2;
    }
    .tengah > div:not(:last-child) {
        padding-bottom: 20px;
        border-bottom: 3px dotted white;

    }
  </style>
  <body>
    <?php 
        if(!empty($_POST["name"])){
    ?>
        <div class="baru">
            <h2 style="margin-bottom: 90px;">Selamat Datang!</h2>
            <div class="tengah" style="width:120%; margin-bottom: 50px; margin-left : -40px">
                <div>
                    <div>Nama</div>
                    <div>:</div>
                    <div><?= $_POST["name"] ?></div>
                </div>
                <div>
                    <div>Jenis Kelamin</div>
                    <div>:</div>
                    <div><?= $_POST["gender"] ?></div>
                </div>
                <div>
                    <div>Alamat Rumah</div>
                    <div>:</div>
                    <div><?= $_POST["alamat"] ?></div>
                </div>
            </div>
        </div>
    <?php    
    }
    ?>
    <?php 
        if(empty($_POST["name"])){
    ?>
        <div id="pusat">
            <div class="judul">
                <h2>STIKI ZOO</h2>
            </div>
            <form method="post" action="index.php" class="form">
                <div class="nama">
                <b>Nama</b>
                <input type="text" name="name" placeholder="Nama" size="20" style="width:100%" />
                </div>
                <div class="sejajar">
                <div class="jk">
                    Jenis Kelamin
                    <div class="gender">
                    <div>
                        <input
                        type="radio"
                        name="gender"
                        value="Laki-laki"
                        style="transform: scale(1.2, 1.2); margin-right: 7px"
                        />Laki-laki
                    </div>
                    <div>
                        <input
                        type="radio"
                        name="gender"
                        style="transform: scale(1.2, 1.2); margin-right: 7px"
                        value="Perempuan"
                        />Perempuan
                    </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="alamat">
                Alamat Rumah
                <textarea
                    name="alamat"
                    id="alamat"
                    cols="35"
                    rows="5"
                    placeholder="Alamat"
                ></textarea>
                </div>
                <button type="submit" name="submit">Kirim</button>
            </form>
        </div>
        <?php    
        }
        ?>
  </body>
</html>