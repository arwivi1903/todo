<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO-DO List (Yapılacaklar)</title>

    <link href="default.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<?php 

require_once "conn.php" ; 

if (@$_GET["action"]=="edit")
{
   $sql = "SELECT * FROM todo WHERE id=" . $_GET["id"] . " LIMIT 1";
   $sth = $db->prepare($sql);
   $sth->execute();
   $row = $sth->fetch(PDO::FETCH_ASSOC);
}

?>

<body>

<div class="container">
<div class="heading">
          <h1>Yapılacaklar</h1>
      </div>
      <form action="islem.php" method="POST">
           <div class="form">
           <div class="form-group">
                <label for="title">Yapılacak İşler (TO-DO)</label>
                <input type="text" value="<?=$row["todo_title"]?>" class="form-control" name="todo_title">
           </div>
            <input type="hidden" class="form-control" name="id" value="<?=$row["id"]?>">   
           <button type="submit" class="btn btn-primary" name="veri_duzenle">Düzenle</button>
           </div>
       </form>
       
      </table>

</div>

</body>
</html>

<script src="main.js"></script>