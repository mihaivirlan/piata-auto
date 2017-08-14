<?php
	session_start();
	include('db.php');
	include('functions.php');
	header('Content-Type: text/html; charset=utf-8');
	if(isset($_GET["nr_pag"])){
	$nr_pag=$_GET["nr_pag"];
	} else {
	$nr_pag=1;
	};
	$pagina=$_GET['pagina'];
	$titlu = "Piaţa auto.md";
	$automobile=selectAutomobile($db_config);

 switch($pagina) {
	case 'contacte':
		$titlu = "Contacte | Piaţa auto.md";
		include('header.php');
		include('contacte.php');
		include('footer.php');
		break;
		
	case 'despre':
		$titlu = "Despre | Piaţa auto.md";
		include('header.php');
		include('despre.php');
		include('footer.php');
		break;
		
	case 'stiri':
		$titlu = "Stiri | Piaţa auto.md";
		include('header.php');
		include('stiri.php');
		include('footer.php');
		break;
		
	case 'adauga_anunt':
		$titlu = "Adauga_anunt | Piaţa auto.md";
		include('header.php');
		include('adauga_anunt.php');
		include('footer.php');
		break;
		
		
		
	case 'search':
		$titlu = "Cautare | Piaţa auto.md";
		$query = isset($_GET['query']) ? $_GET['query'] : '';
		$automobile=selectAutomobile($db_config,$query);
		include('header.php');
		include('search.php');
		include('footer.php');
		break;
		
	case 'logare':
		$titlu = "Logare | Piaţa auto.md";
		include('header.php');
		include('logare.html');
		include('footer.php');
		break;
		
		
	case 'inregistrare':
		$titlu = "Inregistrare | Piaţa auto.md";
		include('header.php');
		include('inregistrare.html');
		include('footer.php');
		break;
		
	/* DETALII */	
	case 'detalii':
						
		$id = $_GET['automobil'];
		$automobil=selectAutomobil($db_config,$id);
		if (count($automobil)){
		// aratam automobilul
		$titlu = $automobil['denumire']." | Piaţa auto.md";
		include('header.php');
		include('detalii.php');
		include('footer.php');
		} else {
		// zicem ca nu este asa ceva
		echo 'Nu exista asa automobil pe sait.';
		}
		break;
		
	case 'cumpara':
		$id = $_GET['automobil'];
		if(array_key_exists($id,$automobile)){
		// aratam automobilul
		$automobil = $automobile[$id];
		$titlu = $automobil['denumire']." | Piaţa auto.md";
		include('header.php');
		include('cumpara.php');
		include('footer.php');
		} else {
			
		// zicem ca nu este asa ceva
		echo 'Nu exista asa automobil pe sait.';
		}
		
		break;	
		
	default:
		if(strlen($pagina) == 0) {
		include('header.php');
		include('pagina_principala.php');
		include('footer.php');
		} else {
		$titlu = "404 | Piaţa auto.md";
		include('header.php');
		include('404.php');
		include('footer.php');
		}
            }
?>

