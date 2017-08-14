<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titlu; ?></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:bold">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script scr="bootstrap/js/bootstrap.js"></script>
</head>

<body>
  <nav id="mainNav" class="navbar navbar-default container">
     <div class="nav nav-pills menu_baza  nav nav-pills pull-left">
          <span class="fa">&#xf1b9;</span> Piața auto.md
    </div>
    <ul class="nav nav-pills pull-right menu_optional">
      <li role="presentation"<?php if ($pagina==''){echo " class='active'";}?>>
	    <a href="/sait/index.php">
	           <span class="fa fa-home">
	           </span> Acasă
              </a>
      </li>
       <li role="presentation"<?php if ($pagina=='contacte'){echo "class='active'";}?>>
              <a href="/sait/index.php?pagina=contacte">
                     <span class="glyphicon glyphicon-earphone">
                     </span> Contacte
              </a>
       </li>
       <li role="presentation"<?php if ($pagina=='despre'){echo "class='active'";}?>>
	     <a href="/sait/index.php?pagina=despre">
	           <span class="glyphicon glyphicon-list">
	           </span> Despre noi
	     </a>
       </li>
        <li role="presentation"<?php if ($pagina=='stiri'){echo "class='active'";}?>>
	      <a href="/sait/index.php?pagina=stiri">
	           <span class="glyphicon glyphicon-hd-video">
	           </span> Știri
	      </a>
        </li>

	
        <?php  
            if(!isset($_SESSION['user']) || time() - $_SESSION['login_time'] > 1800){
             $_SESSION['login_time']=time();
        ?>
 
         <li role="presentation" <?php if ($pagina=='logare'){echo "class='active'";} ?>>
                <a href="/sait/index.php?pagina=logare">
                    <span class="glyphicon glyphicon-log-in">
                    </span> Log in
                </a>
         </li>
                
             <?php } else { ?>
                
        <li role="presentation" <?php if ($pagina=='adauga_anunt'){echo "class='active'";} ?>>
                <a href="/sait/index.php?pagina=adauga_anunt">
                    <span class="fa fa-file" aria-hidden="true">
                    </span> Adaugă anunț 
                </a>
        </li>
        
        
        <span>
        
             <?php
                 $email = $_SESSION['user'];
                    echo UserFromEmail($email);
             ?>
       
        </span>
        
          <li role="presentation" <?php if ($pagina=='logare'){echo "class='active'";} ?>>
                 <a href='logout.php'>
                     <span class="glyphicon glyphicon-log-out" aria-hidden="true">
                     </span>Log out
                 </a>
         
            <?php } ?>

    </ul>
  </nav>
</body>
</html>

	