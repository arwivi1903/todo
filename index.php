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

<?php require_once "conn.php" ; ?>

<body>

<div class="container">
<div class="heading">
          <h1>Yapılacaklar</h1>
      </div>
      <form action="islem.php" method="POST">
           <div class="form">
           <div class="form-group">
               <label for="title">Yapılacak İşler (TO-DO)</label>
               <input type="text" class="form-control" name="todo_title">
           </div>
           <button type="submit" class="btn btn-primary" name="veri_ekle">Ekle</button>
           </div>
       </form>
      <table class="table">
        <thead>
          <tr>
            <th>Yapılacak İşlem - Tarih</th>
            <th colspan="2">İşlemler </th>
            
          </tr>
        </thead>
        <tbody id="tableBody">
       <?php foreach($kayitlar as $row) { ?>
          <tr>
            <td> <input type="checkbox" class='box'> <?=$row['todo_title']?> - <?=$row['todo_date']?></td>
            <td><a class="btn btn-primary btn-sm" href="edit.php?action=edit&id=<?=$row["id"]?>">Düzenle</a></td>
            <td><a class="btn btn-danger btn-sm" href="islem.php?action=delete&id=<?=$row["id"]?>" onclick="return confirm('Bu Kayıt Silinecektir?')">Sil</a></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>

</div>



</body>
</html>

<script src="main.js"></script>