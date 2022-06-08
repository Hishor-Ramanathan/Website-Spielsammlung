<!DOCTYPE html>
<html>

<head>
  <title>Registrierung Moviecenter</title>
  <link rel="stylesheet" type="text/css" href="_style.css" />
</head>

<body>
  <br>
  <br>
  <div class="container">
    <div class="row col-md-6 col-md-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h1>Registrierung Moviecenter</h1>
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
          <form action="connectRegistrierung.php" method="post">
            <div class="form-group">
              <p>Pflichtfelder*</p>
              <label for="firstName">Name*</label>
              <input type="text" class="form-control" id="firstName" name="firstName" minlength="3" maxlength="100" required />
            </div>
            <div class="form-group">
              <label for="lastName">Vorname*</label>
              <input type="text" class="form-control" id="lastName" name="lastName" minlength="3" maxlength="100" required />
            </div>
            <div class="form-group">
              <label for="gender">Geschlecht</label>
              <div>
                <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male" />Mann</label>
                <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female" />Frau</label>
                <label for="others" class="radio-inline"><input type="radio" name="gender" value="o" id="others" />Andere</label>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email*</label>
              <input type="text" class="form-control" id="email" name="email" minlength="5" maxlength="100" required />
            </div>
            <div class="form-group">
              <label for="number">Alter</label>
              <input type="number" class="form-control" id="age" name="age" />
            </div>
            <div class="form-group">
              <label for="number">Telefonnummer</label>
              <input type="number" class="form-control" id="number" name="number" />
            </div>
            <div class="form-group">
              <label for="password">Passwort*</label>
              <input type="password" class="form-control" id="password" name="password" minlength="8" maxlength="100"  required />
            </div>
            <input type="submit" class="btn btn-primary" />
          </form>
          <br>
          <p>Besitzen Sie bereits ein Konto?</p>
          <p>Melden Sie sich <a href="Index.php">hier</a> an</p>
        </div>
        <div class="panel-footer text-right">
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>