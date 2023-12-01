<?php

session_start();

if ($_SESSION['status'] != "Active") {
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Master Inventory</title>
  <meta charset="utf-8" />
  <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/responsive.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/style2.css" type="text/css" media="screen" />
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      overflow: scroll;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    div article {
      height: 500px;
      overflow: scroll
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }

    li:hover {
      color: darkorange;
      font-size: 102%;
      transition: font-size .1s;
    }

    li:active {
      color: darkred;
      transition: font-size .5s;
      font-size: 90%;
    }

    li a:hover {
      color: darkorange;
      font-size: 102%;
      transition: font-size .1s;
    }

    li a :active {
      color: darkred;
      transition: font-size .5s;
      font-size: 90%;
    }

    a {
      transition: font-size .1s;
    }

    a:hover {
      color: darkorange;
      font-size: 102%;
      transition: font-size .1s;
    }

    a :active {
      color: darkred;
      transition: font-size .5s;
      font-size: 90%;
    }

    .bgcol ul li:hover {
      background-color: greenyellow;
    }

    div article {
      height: 650px;
      overflow: scroll
    }
  </style>
</head>

<body style="width: 100%;">
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
            <br />
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
              <div class="header div-content ">
                <h5>
                  <strong>Master Inventory Management</strong>
                </h5>
              </div>
              <div class="info">
                <div class="header textLink" class="bgcol">
                  <li>
                    <a href="actions/master inventory/add part.php">
                      <i> > Add new car part </i>
                      </p>
                    </a>
                  </li>
                  <hr />
                  <li>
                    <a href="actions/master inventory/remove device.php">
                      <i> > Remove part from inventory</i>
                    </a>
                    <hr />
                  </li>
                  <li>
                    <a href="actions/master inventory/findpart.php">
                      <i> > Find part</i>
                    </a>
                  </li>
                  <hr />
                  <a href="actions/master inventory/allpart.php" style="float:left">
                    <li>
                      <i> > Display all parts</i>
                    </li>
                  </a>
                  <br />
                  <ul>
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
  </div>
</body>

</html>