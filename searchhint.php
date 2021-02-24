<?php
// searchhint.php - this is an independent file

// ** 6 fields require credentials and data


// include your database connection config file or 
// ** enter your credentails below as strings
$DB_NAME = 
$HOST = 
$USER_NAME = 
$PASSWORD = 

$conn = new PDO("mysql:host=$HOST;dbname=$DB_NAME;charset=utf8mb4;", $USER_NAME, $PASSWORD); 


try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $input='';
    $input = $_POST['a'];


if ($input !== '') {

  $input = strtolower($input);
  $length=strlen($input);



    $table_name =  // ** enter the name of table to search through
    $column_name = // ** enter the name of the column to search through
    
    $query = "
    SELECT * FROM $table_name WHERE $column_name LIKE '%$input%'";
   
    $statement = $conn->prepare($query);
    $statement -> execute();
    $result = $statement->fetchAll();


$output='';

foreach($result as $row) {
    
if($row['name'] !== NULL){  
$output.='
<a id="links" href="">'.$row['name'].'</a>';
// ** if output result has a page link in your database, 
// ** place the link-row name in href attribute. For example '.$row["link_name"].'
}
else {
  echo '<div id="links">no results found</div>';
}


}
$output.='</div>';
echo $output;
}


else {
  echo '<div id="links">you have entered nothing!</div>';
}





}

catch(PDOException $e) {
echo $e->getMessage();
}






















































//For AJAX-PHP-JQuery-SQL visit ianmugie.online

?>