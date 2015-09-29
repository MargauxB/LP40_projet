<?php
	$xml=new DomDocument;
    $xml->load("LP40_Projet.xml");
	$recettes=$xml->getelementsByTagName("recette");
	echo"<html><body>";
	$search=$_POST['search'];
	if($search=="pays"){
		foreach($recettes as $recette){ 
			$pays=$recette->getElementsByTagName('from')->item(0)
			if($pays==$search){
				$title=$recette->getElementByTagName('title')->item(0);
				echo $title."<br/>
			}
		}
	}
?>