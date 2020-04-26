<?php
$homepage = file_get_contents('file.txt');
echo $homepage.'</br>';

$textArr = explode('.', $homepage, -1);
//$wordArr = explode(' ',$homepage);

/*foreach ($textArr as $key => $value){
    echo $key.' : '.$value.'</br>';
}

foreach ($wordArr as $item => $value){
    echo $item.':'.$value.'</br>';
}
$wordArr = array_unique($wordArr);

foreach ($wordArr as $item => $value){
    echo $item.':'.$value.'</br>';
}*/
try {
    $dsn = 'mysql:host=localhost;dbname=pdo-test';
    $dbh = new PDO($dsn, 'root', '');

    /*$query = "INSERT INTO `categories` (`name`) VALUES (:name)";
    foreach ($textArr as $key => $value){
        $params = [
            ':name' => $value
        ];
        $stmt = $dbh->prepare($query);
        $stmt->execute($params);
    }*/
   /* $id = [1,12,4,7,8,8,8];
    $stmt = $dbh->prepare("SELECT * FROM categories WHERE `id` = ?");
    foreach ($id as $item){
        $stmt->execute([$item]);
        $category = $stmt->fetch(PDO::FETCH_LAZY);
        echo '<pre>';
        print_r($category);
    }*/

    echo 'Connecting';
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}