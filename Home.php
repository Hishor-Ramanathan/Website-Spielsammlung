<?php
    session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="_style.css" />
</head>

<body>
    <br>
    <br> 
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Zahlenraten</h1>
                </div>

                <div class="panel-body">
                    <form action="HomeController.php" method="post">
                        <div class="form-group">

                            <label for="zahl">Erraten Sie die Zufallszahl von 1-100</label>
                            <input type="number" class="form-control" id="zahl" name="zahl" required />
                        </div>
                        <?php
                        if (isset($_SESSION['message'])) {
                            print " <p>".$_SESSION['message']."</p>";
                        }
                        ?>
                        <input type="submit" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>