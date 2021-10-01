<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
    </head>
    <body>  <!--echo "Hallo " . $_GET["vorname "];-->
        <?php
            
            $servername = "localhost";
            $user = "root";
            $pw = "";
            $database = "logindatenbank";

            $name = $_GET["name"];
            $passwort = $_GET["passwort"];

            /*
            echo $name;
            echo $passwort;
            die();
            */

            $con = new mysqli($servername, $user, $pw, $database);

            if($con ->connect_error) {
                die("Verbindungsfehler".$con ->connect_error);
            }
            $sql = "INSERT INTO user (Name, Passwort) VALUES ('$name', '$passwort')";

            if($con->query($sql) === TRUE) {
                echo "Du bist erfolgreich registrert";
                header('Location: http://192.168.178.33/Login/supergeheime.html');
                
            }
            else {
                echo "Du bist ein Lappen" . $con->error;
            }

        ?>
       

    </body>
</html>