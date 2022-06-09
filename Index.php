<!DOCTYPE html>
<html>

<head>
  <title>Spielesammlung</title>
  <link rel="stylesheet" type="text/css" href="_style.css" />
</head>

<body>
  <br>
  <br>
  <div class="container">
    <div class="row col-md-6 col-md-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h1>Spielsammlung Login</h1>
        </div>

        <div class="panel-body">
        <?php
              session_start();
              if (isset($_SESSION['message'])) {
                $message = $_SESSION['message'];
                unset($_SESSION['message']);
                print " <p style= 'color: red';>$message</p><br>";
              }
              ?>
          <form action="connectIndex.php" method="post">
            <div class="form-group">
             
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" required />
            </div>

            <div class="form-group">
              <label for="password">Passwort</label>
              <input type="password" class="form-control" id="password" name="password" required />
            </div>
            <input type="submit" class="btn btn-primary" />
          </form>
          <br>
          <p>Besitzen Sie kein Konto?</p>


          <p>Registrieren Sie sich <a href="Registrierung.php">hier</a></p>


        </div>

        <div class="panel-footer text-right">
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>