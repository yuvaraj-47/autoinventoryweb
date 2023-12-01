<?php

session_start();

if ($_SESSION['status'] != "Active") {
  header("location:../../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Remove Device</title>
  <meta charset="utf-8" />
  <link rel="icon" href="../../../img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="../../../img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="../../../css/bootstrap.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../../../css/responsive.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../../../css/style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../../../css/style2.css" type="text/css" media="screen" />
  <style>
    form select {
      width: fit-content;
    }
  </style>
</head>

<body>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <div class="main">
    <div class="div-content">
      <header>
        <div>
          <h1 style="margin-left:2%;color:green"> Auto Parts Inventory </h1>
        </div>
      </header>
      <div class="content wrapper1 ">
        <div class="sidebar" style="width: 20%;">
          <ul>
            <li>
              <a href="../../Master Inventory.php"> BACK </a>
            </li>
          </ul>
        </div>
        <div>
          <div class="info header div-content  clearfix "
            style="float: left; margin:3%; min-width: 600px; height: 400px; background-color:#f8f8f8 ; border-style:double;">
            <br>
            <h6>
              <strong>
                <pre> DELETE DEVICE </pre>
              </strong>
            </h6>
            <form name="newdevice " action="removedevicecon.php" method="POST" onsubmit="return myFunction()"
              style="margin:5% ;">
              <label style="text-align:left;"> Part: </label>
              <select name="part" id="part">
                <?php
                include("../../../connection.php");
                $sql = mysqli_query($con, "SELECT partid FROM parts");
                while ($row = $sql->fetch_assoc()) {
                  echo "
										<option value='" . $row['partid'] . "'>" . $row['partid'] . "</option>";
                }
                ?>
              </select>
              <br>
              <br>
              <input type="submit" value="Delete" style="display: inline-flex; padding:2%; float: left">
              <br>
              <br>
            </form>
          </div>
        </div>
      </div>
      <div class="container">
        <footer>
          <div class="container" style="color:black;margin-left:40%;margin-right:40%;"> ClassOf2023Group@CSU</div>
        </footer>
      </div>
    </div>
  </div>
  <script>
    function myFunction() {
      document.getElementById("newdevice").reset();
    }
  </script>
  <br>
  <br>
</body>

</html>