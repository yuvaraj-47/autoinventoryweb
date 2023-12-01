<?php

session_start();

if ($_SESSION['status'] != "Active") {
  header("location:../../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Find Part </title>
  <meta charset="utf-8" />
  <link rel="icon" href="../../../img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="../../../img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="../../../css/bootstrap.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../../../css/responsive.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../../../css/style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../../../css/style2.css" type="text/css" media="screen" />
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
      <div id="content">
        <div class="main">
          <br />
          <div class="wrapper1">
            <div class="sidebar" style="width: 20%;">
              <ul>
                <li>
                  <a href="../../Master Inventory.php"> BACK </a>
                </li>
              </ul>
            </div>
            <div class="main_content">
              <div class="info header div-content "
                style="float: left; margin: 2%; width: 45%; height:auto; background-color:#f8f8f8; border-style:double;">
                <br>
                <h6>
                  <strong>
                    <pre> FIND PART  </pre>
                  </strong>
                </h6>
                <form name="search" class="info" target="" action="findpart_result.php" onsubmit="return myFunction()"
                  method="POST" target="findpart_result.php">
                  <br>
                  <label> Enter Part ID</label>
                  <input type="text" name="partid" ID="partid" required>
                  <hr />
                  <input type="submit" value="Search" style="display: inline-flex;">
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
    </div>
  </div>
</body>

</html>