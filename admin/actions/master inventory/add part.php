<?php

session_start();

if ($_SESSION['status'] != "Active") {
  header("location:../../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Add part</title>
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
      <div id="content" style="height: 650px;">
        <div class="main">
          <div class="wrapper1">
            <div class="sidebar" style="width: 20%;">
              <ul>
                <li>
                  <a href="../../Master Inventory.php"> BACK </a>
                </li>
              </ul>
            </div>
            <div class="main_content">
              <div class="content wrapper1 ">
                <div class="info header div-content  clearfix "
                  style="float: left;  min-width:500px; height: 100%; background-color:#f8f8f8; border-style:double;">
                  <br>
                  <h6>
                    <strong>
                      <pre> ADD NEW PART  </pre>
                    </strong>
                  </h6>
                  <form name="newPart" action="addpartconn.php" method="POST" onsubmit="return myFunction()"
                    style="margin:5% ;">
                    <label style="text-align:left;"> Part ID : </label>
                    <input type="text" id="partid" name="partid" required />
                    <br>
                    <br>
                    <label style="text-align:left;"> Part Type : </label>
                    <input type="text" id="parttype" name="parttype"></input>
                    <br>
                    <br>
                    <label style="text-align:left;"> car Type : </label>
                    <input type="text" id="partname" name="cartype"></input>
                    <br>
                    <br>
                    <hr>
                    <input type="submit" value="Update" style="display: inline-flex; padding:2%; float: left">
                  </form>
                </div>
              </div>
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
  </div>
  <script>
    function myFunction() {
      document.getElementById("newPart").reset();
    }
  </script>
  <br>
  <br>
</body>

</html>