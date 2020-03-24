<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style media="screen">
      body{
          background: #000000;
        }
        .form{
          margin: 10% 0 0 25%;
          float: left;
          width: 60%;
        }
        .box{
          width: 600px;
          padding: 80px;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          background: #241663;
          text-align: center;
        }
        .box2{
          width: 300px;
          padding: 40px;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          background: #ffffff;
          text-align: center;
          border: 2px solid blue;
        }
        .input{
          border: 0;
          background: none;
          display: block;
          margin: 20px auto;
          text-align: center;
          border: 2px solid blue;
          padding: 14px 10px;
          width: 200px;
          outline: none;
          color: white;
          border-radius: 24px;
          transition: 0.25s;
        }
        .input:focus{
          width: 280px;
          border-color: #602080;
        }
        .input2{
          border: 0;
          background: none;
          display: block;
          margin: 20px auto;
          text-align: center;
          border: 2px solid blue;
          padding: 20px 15px;
          width: 200px;
          outline: none;
          color: white;
          border-radius: 24px;
          transition: 0.25s;
        }
        .input2 h5{
          color: white;
          text-transform: uppercase;
          font-weight: 400;
        }
        .submit{
          border: 0;
          background: none;
          display: block;
          margin: 20px auto;
          text-align: center;
          border: 2px solid #602080;
          padding: 14px 40px;
          outline: none;
          color: white;
          border-radius: 24px;
          transition: 0.25s;
          cursor: pointer;
        }
        .submit:hover{
          background: #a72693;
        }
        .welcome{
          color: #602080;
          font-size: 20pt;
          font-weight: 900;
        }
    </style>
  </head>
  <body>
    <div class="box">
        <span class="welcome"> Register </span>
        <form action="" method="post">
          <input class="input" type="text" name="nama_petugas" placeholder="Nama">
          <input class="input" type="text" name="username" placeholder="Username">
          <input class="input" type="password" name="password" placeholder="Password">
          <input class="input" type="text" name="telp" placeholder="Telp">
          <div class="input2">
            <h5>Level</h5>
          <input type="radio" id="1" name="level" value="petugas">
          <label for="1">Petugas</label>
            <br>
          <input type="radio" id="2" name="level" value="anggota">
          <label for="2">Anggota</label>
        </div>
          <input class="submit" type="submit" name="simpan" value="Daftar">
        </form>
    </div>
  </body>
</html>

<?php
    include 'config.php';
    if(@$_POST['simpan']){
      $nama_petugas = @$_POST['nama_petugas'];
      $username = @$_POST['username'];
      $password = @$_POST['password'];
      $pass = md5(@$password);
      $telp = @$_POST['telp'];
      $level = @$_POST['id_level'];
//md5 = enkripsi buat password supaya tdk kelihatan
      $query = mysqli_query($koneksi, "INSERT INTO `t_petugas` (nama_petugas,username,password,telp,id_level)
                    VALUES ('$nama_petugas','$username','$pass','$telp','$level')");
      if($query){
        echo "<div class='box2'>
          <h3> Berhasil registrasi akun </h3>
          <br/> Klik untuk <a href='index2.php'>Login</a>
          </div>";
      }else{
        echo "data gagal di input";
      }
    }
   ?>
