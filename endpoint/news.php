<?php

//Receive the RAW post data via the php://input IO stream.
$content = file_get_contents("php://input");
$content=json_decode($content, true);

//connect to DB
$conn = new mysqli("localhost", "iaborgom_root", "1H~+FVqA0V#ZH[~q;4", "iaborgom_master");

$existingNews=array();
$sql="SELECT * FROM news";
$result=$conn->query($sql);
while($news=$result->fetch_array(MYSQLI_ASSOC)){
	$existingNews[$news['codice']]=$news;
}

foreach ($content as $key => $value) {
	
	//itero solo le righe che hanno codice e voce_menu diversa da vuota
	if($value['voce_menu']!="" && $value['codice']!=""){

		//Se è nuova la inserisco
		if(!array_key_exists($value['codice'], $existingNews)){

            $fields=$values="";
            foreach ($value as $rowKey => $rowValue) {

                if($rowKey=="data") $rowValue=strtotime($rowValue);

                $fields.=$rowKey.",";
                $values.="'".str_replace("'", "\'", $rowValue)."',";
            }
            $fields.="url";
            $values.="'".slugify($value['voce_menu'])."'";

			$sql="INSERT INTO news (".$fields.") VALUES (".$values.")";
			$conn->query($sql);
		}else{

            $set="";
            foreach ($value as $rowKey => $rowValue) {

                if($rowKey=="data") $rowValue=strtotime($rowValue);

                if($rowKey!="codice") $set.=$rowKey."='".str_replace("'", "\'", $rowValue)."',";
            }
            $set=substr($set, 0, -1);

		    //se il codice esiste già effettuo l'update   
			$sql="UPDATE news SET ".$set." WHERE codice=".$value['codice'];
			$conn->query($sql);
		}
	}
}

function slugify($text){
    // Strip html tags
    $text=strip_tags($text);
    // Replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    // Transliterate
    setlocale(LC_ALL, 'en_US.utf8');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // Trim
    $text = trim($text, '-');
    // Remove duplicate -
    $text = preg_replace('~-+~', '-', $text);
    // Lowercase
    $text = strtolower($text);
    // Check if it is empty
    if (empty($text)) { return 'n-a'; }
    // Return result
    return $text;
}
?>