<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <title>READ AND LISTEN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/css/css.css">
</head>

<body>



<?php
if($_COOKIE['user']== ''):
header('Location: /sign.html');
?>


<?php else: ?>
<div>
 <center><img src="photos/logoza.ru.png" class="img-fluid" alt="New York">
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="account.php"><h3>R & L</h3></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.html">Основная</a>
    </li>
	<br>
    <li class="nav-item">
      <a class="nav-link" href="index1.html">Жанры</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index2.html">Карта</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="index3.php">Список желаемого</a>
    </li>
	<li class="nav-item">
      <a class="nav-link active" href="account.php">Аккаунт</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#">Корзина</a>
    </li>
	
    <form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-success" type="submit" >Search</button>
    </form>
  </ul>
   
</nav>

<div class="container" style="margin:30px 0 30px 30px">
<div class="row">
<div class="col-sm-8">
<h2>Ваш Аккаунт</h2>


<img src="photos/prfimg.png" width="200" height="200" alt="acimg">

<h3> Имя: <?=$_COOKIE['user']?></h3>
<h3> Почта: <?=$_COOKIE['email']?></h3>


<h3><a href="validation/exit.php">Выйти из аккаунта.</a></h3>
</div>
</div>
</div>

<div class="container" style="margin:30px 0 30px 30px">
<div class="row">
<div class="col-10">
<h2>Cписок приобретенных книг</h2>

<img src="photos/119.jpg" width="200" height="200" alt="acimg">
<img src="photos/117.jpg" width="200" height="200" alt="acimg">
<img src="photos/118.jpg" width="200" height="200" alt="acimg">
</div>
</div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">


 <h3> Наши контакты: </h3>
 <li>
Горячая линия: 
<a href="tel:123-456-7890">123-456-7890</a>
</li>
 <li>
 Наша почта: 
<a href="mailto:readlist@gmail.com" > readlist@gmail.com </a>
 </li>
  <li>
<a href="index0.html"> Подпишись на новости нашего сайта</a>
 </li>

    <hr class="d-sm-none">
    </div>
 <?php endif; ?>	

</body>

</html>

