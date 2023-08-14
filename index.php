<?php	
	//include 'studio/assets/php/sql_conn.php';
  $title = '';
	if(isset($_GET["p"])){
		$p = $_GET["p"];
	}else{
		$p = '';
	}

	switch($p){
		case 'home':
    $title = "Home";
		include('pages/home.php');
		break;

		case 'portfolio':
    $title = "Portfolio";
		include('pages/portfolio.php');
		break;

		case 'gallery':
    $title = "Gallery";
		include('pages/gallery.php');
		break;

		case 'authors':
    $title = "Authors";
		include('pages/authors.php');
		break;

		case 'blog':
    $title = "Blog";
		include('pages/blog.php');
		break;

		case 'read_more':
    $title = "Read More";
		include('pages/read_more.php');
		break;

		default:
		include('pages/home.php');
	}

?>