<?php
  
//prima functie

    function selectAutomobile($db_config,$query = ''){
 
         // Create connection
        $conn = mysqli_connect(
                        $db_config['servername'], 
                        $db_config['username'], 
                        $db_config['password'], 
                        $db_config['dbname'], 
                        $db_config['port']
                        );
                        
    // Check connection
    if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
    }
    
    $automobile= array();
    
    $sql = "SELECT 
                producator, 
                pret, 
                imagine, 
                anunt, 
                tara_origine, 
                anul_producerii, 
                caroserie,
                id
                FROM masini";
    
    if($query !==''){
        $sql .= " WHERE producator like '%" . $query . "%'";
        $sql .= " OR pret like '%" . $query . "%'";
        $sql .= " OR anunt like '%" . $query . "%'";
        $sql .= " OR tara_origine like '%" . $query . "%'";
        $sql .= " OR anul_producerii like '%" . $query . "%'";
        $sql .= " OR caroserie like '%" . $query . "%'";
    }            
                
    $result = mysqli_query($conn, $sql);
    
    $i=1;
    if (mysqli_num_rows($result) > 0 && $i <= mysqli_num_rows($result)) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $automobile[$i] = array(
                'denumire' =>   $row["producator"], 
                'pret' =>       $row["pret"], 
                'imagine' =>    $row["imagine"], 
                'anunt' =>      $row["anunt"], 
                'tara' =>       $row["tara_origine"],
                'anul' =>       $row["anul_producerii"], 
                'caroserie' =>  $row['caroserie'],
                'id' =>         $row['id']
            );
            $i++;
        }
    }
    
  //  mysqli_close($conn);
    return $automobile;
    
}



    //a doua functie

    function selectAutomobil($db_config,$id){
 
         // Create connection
        $conn = mysqli_connect(
                        $db_config['servername'], 
                        $db_config['username'], 
                        $db_config['password'], 
                        $db_config['dbname'], 
                        $db_config['port']
                        );
    // Check connection
    if (!$conn) {
        
    die("Connection failed: " . mysqli_connect_error());
    
    }
    
        $automobil= array();
        $sql = "SELECT 
                producator, 
                pret, 
                imagine, 
                anunt, 
                tara_origine, 
                anul_producerii, 
                caroserie,
                id
                FROM masini";
    
    if($id){
        $sql .= " WHERE id= " . $id;
    
    }            
                
    $result = mysqli_query($conn, $sql);
    
    $i=1;
    if (mysqli_num_rows($result) > 0 && $i <= mysqli_num_rows($result)) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $automobil = array(
                'denumire' =>   $row["producator"], 
                'pret' =>       $row["pret"], 
                'imagine' =>    $row["imagine"], 
                'anunt' =>      $row["anunt"], 
                'tara' =>       $row["tara_origine"],
                'anul' =>       $row["anul_producerii"], 
                'caroserie' =>  $row['caroserie'],
                'id' =>         $row['id']
            );
            $i++;
        }
    }
    
  //  mysqli_close($conn);
    return $automobil;
    
}


  //functia pentru regex
      function UserFromEmail($email) { $subject = $email;
        $pattern = "([^@]+)";
        preg_match($pattern, $subject, $rezultat);
        return $rezultat[0] ;
        }


?>


<button class="btn btn-primary scroll-top" data-scroll="up" type="button">
                    <i class="fa fa-chevron-up"></i>
          </button>
          <script>
          $(document).ready(function () {
              $(window).scroll(function () {
                  if ($(this).scrollTop() > 100) {
                      $('.scroll-top').fadeIn();
                  } else {
                      $('.scroll-top').fadeOut();
                  }
              });
          
              $('.scroll-top').click(function () {
                  $("html, body").animate({
                      scrollTop: 0
                  }, 100);
                  return false;
              });
          
          });
          </script>