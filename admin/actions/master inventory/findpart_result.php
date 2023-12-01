<?php

session_start();

if ($_SESSION['status'] != "Active") {
  header("location:../../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Results </title>
  <meta charset="utf-8" />
  <link rel="icon" href="../../../img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="../../../img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="../../../css/bootstrap.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../../../css/responsive.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../../../css/style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../../../css/style2.css" type="text/css" media="screen" />
  <style>
    td {
      white-space: nowrap;
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
      <div id="content">
        <div class="main">
          <br />
          <div class="wrapper1">
            <div class=" main_content">
              <div class="info header div-content " style="width:90%">
                <h5>
                  <strong> Search <a href="findpart.php" style="float: right;">
                      < Back </a>
                  </strong>
                </h5>
              </div>
              <div class="info header div-content " style=" width:90%; border-style:double;">
                <hr />
                <h2> Search Results</h2>
                <article style="height: auto; margin:0.2%; border-style:double;">
                  <?php
                  include('../../../connection.php');
                  $partid = $_POST['partid'];

                  $query = "SELECT * FROM parts where partid LIKE '%{$partid}%' ";
                  $result = mysqli_query($con, $query);

                  echo "
										<table>";
                  echo "
											<tr>
												<th>Part ID</th>
												<th>Part Type</th>
												<th>Car Type</th>
											</tr>";
                  while ($row = mysqli_fetch_array($result)) {
                    echo "
											<tr>
												<td>" . htmlspecialchars($row['partid']) . "</td>
												<td>" . htmlspecialchars($row['parttype']) . "</td>
												<td>" . htmlspecialchars($row['cartype']) . "</td>
											</tr>";
                  }
                  echo "</table>";
                  mysqli_close($con);

                  ?>
                </article>
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
  <br>
  <br>
</body>

</html>