<?php 
try{
    $pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");

    $sql = "DROP TABLE products";
    
    $pdo->exec($sql);

    echo "Table dropped succesfully";

}catch (PDOException $e) {
   echo $e->getMessage();
}

?>
