        <?php 
            //ini_set('display_errors', 0);
            $mail=                  $_POST['email'];
            $producator=            $_POST['producator'];
            $anul=                  $_POST['anul'];
            $tara=                  $_POST['tara'];
            $caroserie=             $_POST['caroserie'];
            $anunt=                 $_POST['anunt'];
            $imagine=               $_POST['imagine'];
            $pret=                  $_POST['pret'];
            
            $servername =          "localhost";
            $username =            "mihaivirlan";
            $password =             "";
            $db=                   "piata";
            $port=                 "3306";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $db, $port);
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            };
            
            $sql = "INSERT INTO masini (mail,  producator, `anul_producerii`, `tara_origine`, caroserie, anunt, imagine, pret)
            VALUES ('$mail', '$producator', '$anul', '$tara', '$caroserie', '$anunt', '$imagine', '$pret')";
            if (mysqli_query($conn, $sql)) {
                 header('Location: https://piata-auto-mihaivirlan.c9users.io/sait/index.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
        ?>