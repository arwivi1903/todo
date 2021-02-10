<?php

include 'conn.php';
include 'safe.php';

if(isset($_POST['veri_ekle']))
    {
    $todo_title=security($_POST['todo_title']);
    $todo_date=date("d-m-Y H:i:s");
     
    $sql = "INSERT INTO todo (todo_title, todo_date) VALUES (?,?)";
    $db->prepare($sql)->execute([$todo_title, $todo_date]);
     
    header("location:/todo");
    }

 
    if (@$_GET["action"]=="delete")
    {
       $sql = "DELETE FROM todo WHERE id=" . $_GET["id"];
       $sth = $db->prepare($sql);
       $sth->execute();
       if ($sth)
       {
           header("location:/todo");
       }
    }

    if(isset($_POST['veri_duzenle'])){  
 
    
        $todo_title=security($_POST['todo_title']);
        $todo_date=date("d-m-Y H:i:s");
        $id=security($_POST['id']);
        
        $liste=[$todo_title,$todo_date,$id]; 
        
        $sorgu = "UPDATE `todo` SET `todo_title` = ?, `todo_date` = ? WHERE `id` = ?";
        $stmt = $db->prepare($sorgu);
        $stmt->execute($liste);
        $db = null;

        header("location:/todo");
    }

   

?>  