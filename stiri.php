
<div class="container">
    <?php
        ini_set('display_errors','off');
        $str =      file_get_contents("http://www.prosport.ro/alte-sporturi/auto-moto");
        $DOM =      new DOMDocument;
        $DOM->      loadHTML($str);
        $items =    $DOM->getElementsByTagName('a');
        $text =     $DOM->getElementsByTagName('div');
   
        //display all H1 text
   
        $contor=0;
        for ($i = 0; $i < $items->length; $i++) {
        
        if ($items->item($i)->getAttribute("class") == "a-title") {
          
         $myarray['titlu'][$contor]= $items->item($i)->nodeValue;
         $contor++;
         
           }
      
       };
       
        $contor=0;  
        for ($i = 0; $i < $text->length; $i++) {
       
        if ($text->item($i)->getAttribute("class") == "side") {
         $myarray['text'][$contor]= $text->item($i)->nodeValue;
         $contor++;
         
          }
          
       };
      
	       for($i=0;$i<6;$i++){
          echo"<div class='col-lg-12 stiri'>";
		        echo"<h4>" . $myarray['titlu'][$i] . "</h4>";
		        echo"<br>";
		        echo "<h5>" . $myarray['text'][$i]  . "</h5>";
		        echo"</div>";
		        echo '<hr class="col-xs-12 linie">';

		  
       }
   ?>
          <?php include('scroll.php')?>   
</div>


