<?php



// Create DOM from URL or file
//	echo ''.$html->plaintext.'';
//foreach($html->find('img') as $img)
//       echo $img->src . '<br>';




	include("asset/simple_html_dom.php");
	$imdb = file_get_html($imdbUrl . '/tt6856242');


// imdb get data
//$websiteurlimdb = 'https://www.imdb.com';
//$htmlimdb = file_get_html($websiteurlimdb);
//echo $htmlimdb;


//img src
//echo $html->find('img.img-responsive',5)->src;

//img background
//echo $html->find('div#background-image',0)->style
?>


<!--
	<link rel="stylesheet" href="">
---->


<!-----------------------While loop START---------------------->
			<?php  
//			$count = 0;
			
//			while($count <= 3) {
//				echo '

//			'.$imdb->find('a',$count)->plaintext.'

//				'; 
//			$count++;
//			} 
			?>
<!-----------------------While loop END----------------------->

<!----html to output Vaia--->
<?php 	
echo '					
						
'.$imdb->find('h1.TitleHeader__TitleText-sc-1wu6n3d-0', 0)->plaintext.'	


';						
?>