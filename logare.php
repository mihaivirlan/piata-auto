   
   
    <?php 
    
        //ini_set('display_errors', 0);
        $mail=          $_POST['email'];
        $parola=        $_POST['parola'];
        
        $servername =   "localhost";
        $username =     "mihaivirlan";
        $password =      "";
        $db=            "piata";
        $port=          "3306";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $db, $port);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        };

        $sql = "SELECT Parola,ban FROM inregistrare WHERE `E-mail`='$mail'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        if($row['Parola']==hash("sha256",$parola)) {
           
        if($row['ban']==1){
            echo "Esti banat de administrator.";
        } else {
            echo "Bine ati revenit " . $mail;
        //Initializare sesiune
         session_start();
             $_SESSION['user'] = $mail;
             $_SESSION['login_time'] = time();
         
         header('Location: https://piata-auto-mihaivirlan.c9users.io/sait/index.php');
        }
        
        
         } else {
             echo "Logare nereusita" . "<br>" . "E-mail sau parola incorecta";
         }
    
    
        } else {
             echo "Cont invalid, inregistrati cont nou.";
         }


         mysqli_close($conn);


    ?>
    
