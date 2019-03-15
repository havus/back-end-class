<?php 
session_start();
if (isset($_SESSION['username'])) {
  header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    body {
      padding: 0;
      margin: 0;
      background: url(assets/img/blur-bg.jpg);
      /* background-image: linear-gradient(to bottom right, #224F90, #C7E9D8); */
      /* background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); */
      /* background-size: cover; */
      /* background-attachment: center; */
    }
    .btn {
      background-color: #66b3ff;
      height: 40px;
      width: 150px;
      margin-top: 15px;
      border-radius: 10px;
      margin-left: auto;
      margin-right: auto;
      display: block;
      letter-spacing: 3px;
      font-weight: 600;
      color: white;
    }
    .form {
      background-color: rgba(102, 255, 102, .5);
      /* width: 320px; */
      text-align: right;
      padding: 20px;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateY(-50%) translateX(-50%);
      border-radius: 10px;
    }
    .label {
      margin-left: 0;
    }
    input {
      /* width: 200px; */
      border-radius: 6px;
      height: 25px;
      background-color: rgba(255, 255, 255, 0.5);
      border: none;
      padding: 2px;
    }
    .error {
      height: 30px;
      width: 100%;
      background-color: salmon;
      margin-bottom: 20px;
      line-height: 20px;
      /* vertical-align: center; */
    }
    .error p {
      text-align: center;
      overflow: hidden;
    }
  </style>
  <title>Form</title>
</head>

<body>
  <div class="form">
    <form action="file.php" method="POST">
      <table cellpadding="4">
        <tr>
          <td class='label'><label for="nama">Nama</label></td>
          <td><input type="text" name="nama" placeholder="Username"></td>
        </tr>
        <tr>
          <td class='label'><label for="password">Password</label></td>
          <td><input type="password" name="password" placeholder="Password"></td>
        </tr>
        
        <!-- ============================== -->
        <?php
        if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }
        ?>
        <!-- ============================== -->        
        
        <tr>
          <!-- <td colspan="2"><input class="btn" type="submit" name="submit" value="LOGIN"></td> -->
          <td><button class='btn' type='submit' name='submit'>LOGIN</button></td>
        </tr>
      </table>
    </form>
  </div>

</body>

</html>