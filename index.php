<?php


require_once "./lib/book.php";
$booklist = [book::getAll()];



?>


<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Warenkorb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="center">
    <div class="container">
        <h1>Bücher</h1>
        <button type="button" class="btn btn-light" style="margin-left: 293px;" onclick="window.location.href='warenkorb.php';">Warenkorb</button>
    </div>







<?php

function addToCookie() {

    setcookie("Cart", $_GET["stock"], time() + (86400 * 30), "/");

}







foreach ($booklist as $item)
    echo "<div>
    <h3>".$item['title']."</h3>
    <p>€ ".$item['price']."</p>
    <form action='index.php' method='POST'>
    <div class='container end'>
  <select name='stock' class='form-control' id='sel1' style='margin-left: 350px;'>
    "; for ($i = 1; $i <= $item['stock']; $i++) {
        echo "<option>".$i."</option>";
    }
   echo "
     </select>
     
     <button onclick='' class='btn btn-light'>hinzufügen</button>
     </form>
     </div>
        </div>"

?>
</div>
</body>
</html>
