

        <?php
        

            //ini_set('display_errors', 0);
            $numele=$_POST['numele'];
            $prenumele=$_POST['prenumele'];
            $adresa=$_POST['adresa'];
            $mail=$_POST['mail'];
            $anunt=$_POST['anunt'];
            $id=$_POST['id_masina'];



            //echo $producator . "<br>" . $anul . "<br>" . $tara . "<br>" . $caroserie . "<br>" . $anunt;
            $servername = "localhost";
            $username = "mihaivirlan";
            $password = "";
            $db="piata";
            $port="3306";
            

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $db, $port);
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
             
            
            $sql = "INSERT INTO cumpara (Name, Prenumele, Adresa, `E-mail`, Informatii, `id_masina`)
                    VALUES ('$numele', '$prenumele', '$adresa', '$mail', '$anunt', '$id')";
            
            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
               header('Location: https://piata-auto-mihaivirlan.c9users.io/sait/index.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            


       ?>