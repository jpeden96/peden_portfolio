<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	//Open connection to our database
	include('connect.php');

	if(isset($_GET['id'])){
		//select single movie
		$id = $_GET['id'];
		//$singleQuery = "SELECT 'tbl_pieces.pieces_name', 'tbl_pieces.pieces_desc', 'tbl_pieces.pieces_year', 'tbl_images.images_path' FROM tbl_portfolio, tbl_pieces, tbl_category WHERE 'tbl_pieces.pieces_id' = 'tbl_images.pieces_id', 'tbl_images.category_id' = 'tbl_category.category_id' WHERE 'tbl_category.category_id' = '2', 'tbl_pieces.pieces_id' = {$id}";
		$singleQuery = "SELECT * FROM tbl_pieces";
		$getPortfolio = mysqli_query($link, $singleQuery); /*use for lightbox to display the one you click on*/
		var_dump($getPortfolio);die;

	}else{
//select all thumbnails
		$thumbQuery = "SELECT tbl_pieces.pieces_name, tbl_pieces.pieces_desc, tbl_pieces.pieces_year, tbl_images.images_path FROM tbl_portfolio, tbl_pieces, tbl_category WHERE tbl_pieces.pieces_id = tbl_images.pieces_id, tbl_images.category_id = tbl_category.category_id WHERE tbl_category.category_id = 1"; //where is to make it thumbnails
		 $getPortfolio = mysqli_query($link, $thumbQuery);

	}

	// $grpResult="";
	//
	// echo "[";
	//
	// while($portResult = mysqli_fetch_assoc($getPortfolio)) {
	// 			$jsonResult = json_encode($portResult);
	// 			$grpResult .= $jsonResult. ",";
	// 			//echo $jsonResult;
	// }
	//
	// echo substr ($grpResult, 0, -1);
	//
	// echo "]";
	//


	//Close connection to our database
	mysqli_close($link);

?>
