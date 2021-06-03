<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
include ('tpl/link.php');
?>
<style>
  .carousel {
max-height: 500px ;
overflow: hidden;margin-left:20%;
}
.carousel-inner {
overflow: visible;
}
.carousel-inner img {
max-width: 80% !important;
max-height: 80% !important;
}
</style>

</head>
<body>

<?php
include ('tpl/header.php');
?>
<main class="flex">
<div class="row">
<div class="col">

</div>
</div>
<div class="container-fluid">


<div class="card text-center">
<div class="card-header">

      <ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="Макаронс-tab" data-bs-toggle="tab" data-bs-target="#Макаронс" type="button" role="tab" aria-controls="Макаронс" aria-selected="true">Макаронс</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="Кекс-лягушка-tab" data-bs-toggle="tab" data-bs-target="#Кекс-лягушка" type="button" role="tab" aria-controls="Кекс-лягушка" aria-selected="false">Кекс-лягушка</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="moon-tab" data-bs-toggle="tab" data-bs-target="#moon" type="button" role="tab" aria-controls="" aria-selected="false">Лунные пряники</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="долька-tab" data-bs-toggle="tab" data-bs-target="#долька" type="button" role="tab" aria-controls="долька" aria-selected="false">Арбузная долька</button>
</li> 
<li class="nav-item" role="presentation">
<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Салат "Дед Мороз"</button>
</li> 
<li class="nav-item" role="presentation">
<button class="nav-link" id="hot-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"></button>
</li> 
<li class="nav-item" role="presentation">
<button class="nav-link" id="hash-tab" data-bs-toggle="tab" data-bs-target="#hash" type="button" role="tab" aria-controls="hash" aria-selected="false">Хашбраун</button>
</li> 
<li class="nav-item" role="presentation">
<button class="nav-link" id="lodochki-tab" data-bs-toggle="tab" data-bs-target="#lodochki" type="button" role="tab" aria-controls="lodochki" aria-selected="false">Картофельные лодочки</button>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="Макаронс" role="tabpanel" aria-labelledby="Макаронс-tab"><img src="img/baking/makaroni.jpg" style="max-width:50%;" class="card-img-top" >
<h5 class="card-title">Макаронс</h5>
<p class="card-text">в комнате не должно быть влажно, а макаруны, высаженные на противень, должны постоять примерно 1,5 часа в комнате, чтобы их поверхность стала полностью сухой, это обеспечит образование "юбочки" и гладкой поверхности готовых пирожных.</p>
  <ul class="list-group list-group-flush">
<li class="list-group-item">Миндальная мука  — 100 Грамм</li>
<li class="list-group-item">Сахарная пудра  — 250 Грамм (100 г - в тесто, 150 г - в начинку)</li>
<li class="list-group-item">Яичные белки  — 70 Грамм</li>
<li class="list-group-item">Сахар  — 90 Грамм</li>
<li class="list-group-item">
Лимонная кислота  — 1 Щепотка</li>
<li class="list-group-item">
Нутелла  — 2 Ст. ложки</li>
<li class="list-group-item">
Темный шоколад  — 30 Грамм</li>
<li class="list-group-item">
Сливки  — 50 Миллилитров</li>
<li class="list-group-item">
Мягкое сливочное масло  — 60 Грамм</li>
<li class="list-group-item">Черника  — 1/4 Стакана</li>
<li class="list-group-item">Соль  — 1 Щепотка
</li>
<li class="list-group-item">Количество порций: 10</li>
</ul>
<div class="card-body">
</div></div>

<div class="tab-pane fade" id="Кекс-лягушка" role="tabpanel" aria-labelledby="Кекс-лягушка-tab">

<img src="img/baking/frog.jpg" style="max-width:50%;" class="card-img-top" >
<h5 class="card-title">Кекс-лягушка</h5>
<p class="card-text"></p>
  <ul class="list-group list-group-flush">
<li class="list-group-item">150 г. сливочного масла</li>
<li class="list-group-item">3 яйца</li>
<li class="list-group-item">100 г. сахара</li>
<li class="list-group-item">200 г. муки</li>
<li class="list-group-item">1 ч. л. разрыхлителя</li>
<li class="list-group-item">2 ст. л. молока</li>
<li class="list-group-item">щепотка соли</li>
<li class="list-group-item">Для крема:</li>
<li class="list-group-item">100 г. сливочного масла</li>
<li class="list-group-item">1 яйцо</li>
<li class="list-group-item">60 мл. молока</li>
<li class="list-group-item">100 г. сахара</li>
<li class="list-group-item">1 ч. л. ванильного сахара</li>
</ul>

</div>
<div class="tab-pane fade" id="moon" role="tabpanel" aria-labelledby="moon-tab">

<img src="img/baking/moon2.jpg" style="max-width:50%;" class="card-img-top" >
<h5 class="card-title">Лунные пряники</h5>
<p class="card-text"></p>
  <ul class="list-group list-group-flush">
      <li class="list-group-item">мука пшеничная - 2 стакана</li>
<li class="list-group-item">сахар-песок - 2,5 ст ложки</li>
<li class="list-group-item">кленовый сироп - 150 гр</li>
<li class="list-group-item">имбирь молотый - 1 ч л</li>
<li class="list-group-item">масло сливочное - 50 гр</li>
<li class="list-group-item">кунжут белый - 30 гр</li>
<li class="list-group-item">мак - 30 гр</li>
<li class="list-group-item">арахис - 30 гр</li>
<li class="list-group-item">миндаль - 30 гр</li>
<li class="list-group-item">ванильный сахар - 2 пакета</li>
<li class="list-group-item">корица молотая - щипотка</li>
<li class="list-group-item">мускатный орех молотый - щипотка</li>
<li class="list-group-item">кокосовая стружка - 30 гр</li>
<li class="list-group-item">масло кунжутное - 10-12 ст л</li>

</ul>

</div>
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">    
<img src="img/salads/ded.jpg" style="max-width:50%;" class="card-img-top" >
<h5 class="card-title">Салат "Дед Мороз"</h5>
<p class="card-text">Салат со шпротами, яйцами, овощами получается нежным, сытным.</p>
  <ul class="list-group list-group-flush">
      <li class="list-group-item">Шпроты в масле - 150 г</li>
<li class="list-group-item">Кукуруза консервированная - 150 г</li>
<li class="list-group-item">Яйца, сваренные вкрутую - 4 шт.</li>
<li class="list-group-item">Морковь вареная - 0,5 шт.</li>
<li class="list-group-item">Картошка вареная - 3 шт.</li>
<li class="list-group-item">Лук репчатый - 1 шт.</li>
<li class="list-group-item">Майонез - 200 г
(можно заменить густой сметаной, смешав её с 1 чайной ложкой горчицы)</li>
<li class="list-group-item">Соль - 1 щепотка</li>
<li class="list-group-item">Сахар - 1 щепотка</li>
<li class="list-group-item">Сок лимона - 1 ч.ложка</li>
<li class="list-group-item">Для украшения:</li>
<li class="list-group-item">Морковь вареная - 0,5 шт.</li>
<li class="list-group-item">Сыр - 150 г</li>
<li class="list-group-item">Слива консервированная или оливка - 1 шт.</li>
<li class="list-group-item">Зелень (укроп, петрушка кудрявая)</li>
</ul>

</div>

<div class="tab-pane fade" id="долька" role="tabpanel" aria-labelledby="долька-tab">
<img src="img/salads/waterlemon.png" style="max-width:50%;" class="card-img-top" >
<h5 class="card-title">Арбузная долька</h5>
<p class="card-text">Главная фишка – декор, зеленую часть дольки арбуза можно сделать из рубленного укропа, можно из натертого огурца, красную часть можно сделать из помидора, как в нашем варианте, а можно из сладкого красного перца. Вид арбузных семечек можно сделать или при помощи маслин, или при помощи чернослива.</p>
  <ul class="list-group list-group-flush">
<li class="list-group-item">Куриное филе 400г.</li>
<li class="list-group-item">Сыр 150 г.</li>
<li class="list-group-item">Свежий огурец (1 крупный)</li>
<li class="list-group-item">Помидоры свежие 2-3 шт.</li>
<li class="list-group-item">Яйца 2-3 шт.</li>
<li class="list-group-item">Маслины (для декора) несколько штук</li>
<li class="list-group-item">Майонез, соль и перец - по вкусу</li>
</ul>

</div>

<div class="tab-pane fade" id="hash" role="tabpanel" aria-labelledby="hash-tab">
<img src="img/hot/hash2.jpg" style="max-width:50%;" class="card-img-top" >
<h5 class="card-title">Хашбраун</h5>
<p class="card-text">Подаем хашбраун на стол горячим вместе с острым соусом, кетчупом или сметаной</p>
  <ul class="list-group list-group-flush">
<li class="list-group-item">
    <li class="list-group-item">Картофель  — 4-5 Штук</li>
<li class="list-group-item">Масло сливочное  — 2 Ст. ложки</li>
<li class="list-group-item">Соль, Перец черный  — - По вкусу</li>
</ul>

</div>

<div class="tab-pane fade" id="lodochki" role="tabpanel" aria-labelledby="lodochki-tab">
<img src= "img/hot/lodochki.jpg" style="max-width:50%;" class="card-img-top" >
<h5 class="card-title">Лодочки из картофеля</h5>
<p class="card-text">Всего три ингредиента</p>
  <ul class="list-group list-group-flush">
<li class="list-group-item">
      <li class="list-group-item">Картофель (средний)  — 10 Штук</li>
    <li class="list-group-item">Грудинка копченая  — 600 Грамм</li>
    <li class="list-group-item">Сыр твердый  — 600 Грамм</li>
      <li class="list-group-item">Соль, Специи - По вкусу</li>



</ul>

</div>


</div>
<div class="card-body">

</div>
</div>

</div>



<br>
<?php
include('dbconnect.php');
$label = 'id';
$id = false;
if (!empty($_GET[$label] ) ) {
    $id = $_GET[$label];
}



$result=$mysqli->query("SELECT * FROM `cours` WHERE id = '$id'");

$myrow = $result->fetch_assoc();

$div = '<div id="row">';
$div .='<div class = "col" >
<div class="tour">';

$id = $myrow[id];



$div.='<p>'.$myrow[programm].'</p>';
$div.='</div></div>';
$div.='</div>';
echo $div;
?>





</div>
</main>
<?php
include ('tpl/footer.php');
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>