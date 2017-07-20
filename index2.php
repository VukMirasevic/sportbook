<?php
if(!empty($_POST['brwidgetblist']) AND !empty($_POST['iosmin']) AND !empty($_POST['anmin']) AND !empty($_POST['tax'])){
    $pdo = new PDO("mysql:host=localhost;dbname=sportbook","root","");
    $prepare = $pdo->prepare("INSERT INTO app_settings (brwidgetblist,iosmin,anmin,tax) VALUES (:brwidgetblist,:iosmin,:anmin,:tax)");
    $prepare->bindParam(':brwidgetblist',$_POST['brwidgetblist']);
    $prepare->bindParam(':iosmin',$_POST['iosmin']);
    $prepare->bindParam(':anmin',$_POST['anmin']);
    $prepare->bindParam(':tax',$_POST['tax']);
    $prepare->execute();
    echo "New values added successfully";
}
