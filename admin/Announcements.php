<?php

session_start();

if ($_SESSION['status'] != "Active") {
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Announcements</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/responsive.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/style2.css" type="text/css" media="screen" />
</head>

<body>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <div class="main">
    <div class="div-content">
      <header>
        <div>
          <h1 style="margin-left:2%;color:green;"> Auto Parts Inventory </h1>
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
                  <strong> ANNOUNCEMENTS <a href="Main Menu.php" style="float: right;">
                      < Back </a>
                  </strong>
                </h5>
              </div>
              <div class="info header">
                <div class="div-content header" style="border:solid;width:95%;position:static">
                  <br>
                  <h3>Announcements</h3>
                  <hr>
                  <p>
                    <li>
                      <p>All workers would be meeting for coffee at the lobby at 12pm. Remember to be awesome today.
                        Caarrss!! Assemble!!</p>
                    </li>
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