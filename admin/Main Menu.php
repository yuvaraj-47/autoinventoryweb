<?php

session_start();

if ($_SESSION['status'] != "Active") {
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8" />
  <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
  <meta name="description" content="Your description" />
  <meta name="keywords" content="Your keywords" />
  <meta name="author" content="Your name" />
  <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen" />
  <link rel="stylesheet" href=../css/responsive.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/style2.css" type="text/css" media="screen" />
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/superfish.js"></script>
  <script type="text/javascript" src="../js/jquery.mobilemenu.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <div class="main">
    <div class="div-content">
      <header>
        <div style="display: flex; justify-content: space-between;">
          <h1 style="margin-left:2%;color:green"> Auto Parts Inventory </h1>
          <h3 style="float:right;">ADMIN</h3>
        </div>
      </header>
      <div id="content">
        <div class="main">
          <div class="wrapper1">
            <div class="sidebar">
              <ul>
                <li>
                  <a href="Main Menu.php">
                    <i class="fas fa-home"></i>Home </a>
                </li>
                <li>
                  <a href="Master Inventory.php">Master Inventory</a>
                </li>
                <li>
                  <a href="../logout.php">Sign Out</a>
                </li>
              </ul>
            </div>
            <div class="main_content">
              <div class="header div-content">
                <h5>
                  <strong> Welcome <a href="Announcements.php" style="float: right;"> ANNOUNCEMENTS </a>
                  </strong>
                </h5>
              </div>
              <div class="info header">
                <div class="div-content header" style="border:solid;width:95%;position:static">
                  <br>
                  <section style="margin:5%"></section>
                  <div class="div-content header" style="border:outset;height:auto; margin:2px;">
                    <div style="margin:auto">
                      <br>
                      <h5>
                        <strong>Announcements</strong>
                      </h5>
                      <p>
                        <li>CARRRRSSS! Assemble!! HAHOOO!!!</li>
                      </p>
                      <p>
                        <li>
                          <p>Lets be awesome today!</p>
                        </li>
                      </p>
                    </div>
                  </div>
                </div>
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
  <br>
  <br>
</body>

</html>