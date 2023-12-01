<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <script type="text/javascript" src="js/jquery.js"></script>
  <title>My Inventory</title>
</head>

<body style="font-family: 'Lato', sans-serif; font-family: 'Poppins', sans-serif;">
  <div class="div-content">
    <div class="div-content">
      <header>
        <div>
          <h1 style="margin-left:2%; color:Green;">
            Auto Parts Inventory
          </h1>
        </div>
      </header>
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="span12 ">
              <h2 class="bgh2">Login</h2>
            </div>
            <div class="span12 clearfix">
              <form action="authenticate.php" onsubmit="return validation()" method="POST" style="margin-left:2%">
                <label>Username (case sensitive):</label><br>
                <input type="text" id="user" name="user" /><br>
                <label>Password(case sensitive):</label><br>
                <input type="password" id="pass" name="pass" /><br /><br />
                <input type="submit" value="Login">
              </form>
              <p id="warning-msg"></p>
            </div>
            <script>
              function validation() {
                var id = document.f1.user.value;
                var ps = document.f1.pass.value;

                if (id.length == "" && ps.length == "") {
                  alert("User Name and Password fields are empty");
                  return false;
                }
                else {
                  if (id.length == "") {
                    alert("User Name is empty");
                    return false;
                  }
                  if (ps.length == "") {
                    alert("Password field is empty");
                    return false;
                  }
                }
              }  
            </script>

            <article class="span12 clearfix">
              <h6 class="bgh2">
                **contact your an Admin to create an account**.
              </h6>
            </article>
            <article class="span12 clearfix">
              <div class="divider"></div>
            </article>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container" style="color:black;margin-left:40%;margin-right:40%;"> ClassOf2023Group@CSU</div>
    </footer>
  </div>
</body>

</html>