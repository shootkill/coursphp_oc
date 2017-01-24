<?php 

$prenom=array('Bryan','Quentin','Damien');
$cordonnees = array('nom' => 'Ferry' , 'prenom' => 'Bryan', 'age' => '19');
print_r($cordonnees);
foreach ($cordonnees as $element) {
	echo $element;
}
 ?>