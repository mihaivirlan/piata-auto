<meta charset="UTF-8">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/js/bootstrap.js">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:bold">
<link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script scr="bootstrap/js/bootstrap.js"></script>
 
<div class="container"><br>  	 
    <div class="row marketing">
  	<form id="mainSearchForm" action="/sait/index.php" method="get" class="form-search" text-align="center" >
          	<input type="hidden" class="span2 search-query  input-lg" name="pagina" value="search">
     		<div class="input-append">
            		<input id="searchInput" type="text" value="<?php if(isset($_GET['query'])) echo $_GET['query']; ?>" 
    					 name="query" 
    					 class="span2 search-query input-lg caseta_text"
    					 placeholder="Căutare automobil pe sait"
    					 required
    					 pattern="^[a-z]+$">
            		<button  class="btn btn-default btn-lg  click_button" >  
        	          		<span class="glyphicon glyphicon-search "></span>
             		</button>  
		</div>
   	</form> <br>
   
	<?php  if(count($automobile) == 0) {
	    	echo "<div class='rezultat_search'>";
	          echo "<b>Căutarea dvs. a returnat zero rezultate!</b><br><br>";
	          echo "</div>";
	       } else {
	        	$produse_pagina=9;
		$total_pagini=ceil(count($automobile)/$produse_pagina);
		$start=($nr_pag-1)*$produse_pagina+1;
		if($nr_pag==$total_pagini){
			$stop=count($automobile);
		}else{
			$stop=$nr_pag*$produse_pagina;
		};
		
		for($i=$start; $i<=$stop; $i++){
	        
	?>
	
 	<div class="col-lg-4 container_produs">
               	<img src="<?php echo $automobile[$i]['imagine']; ?>" class="img_produs img-thumbnail"><br><br>
          <div class="text_auto">
	<div class="title"><?php echo $automobile[$i]['denumire']; ?>
		<hr size="1" color="gray" class="col-xs-12 linie">
	</div> <br>
	<div class="Pret">Preţ:<?php echo $automobile[$i]['pret']; ?>   
                    <span class="glyphicon glyphicon-eur" color="black"></span>
                    <hr size="1" color="gray" class="col-xs-12 linie">
          </div><br>
		<a href="/sait/index.php?pagina=detalii&automobil=<?php echo $automobile[$i]['id']; ?>">
		   <p><button class="title4">Vezi detalii <i class="fa fa-eye" style="font-size:18px"></i></button>
		</a></p>
		<a href="/sait/index.php?pagina=cumpara&automobil=<?php echo $i; ?>">
		    <button class="test">Cumpără <i class="fa fa-briefcase" style="font-size:18px"></i></button>
		</a>
	</div> 
	</div>
	
	<?php } ?>

    <?php } ?>
  
  <?php if($total_pagini > 1){ ?>
          
   <nav aria-label="page navigation">
     <ul class="pagination">
       <li <?php if($nr_pag==1){echo "class='disabled'";};?>>
    	<a href="index.php?nr_pag=<?php echo $nr_pag-1?>" 
    	     aria-label="Previous"><span aria-hidden="true">&laquo;</span>
    	</a>
       </li>
	
       <?php
	
	for($i=1; $i<=$total_pagini; $i=$i+1) {
        	   echo "<li>";
	if ($nr_pag==$i) {
               echo " class='active' ";
	};
	   echo "<a href='index.php?nr_pag=$i'>$i <span class='sr-only'>(current)</span></a></li>";
      
	}
	
       ?>
	
        <li <?php if($nr_pag==$total_pagini){echo "class='disabled'";};?>>
           <a href="index.php?nr_pag=<?php echo $nr_pag+1?>" aria-label="Next">
    	   <span aria-hidden="true">&raquo;</span>
           </a>
        </li>
        
     </ul>
   </nav>
   
  	<?php } ?>

 </div>
</div>

	





