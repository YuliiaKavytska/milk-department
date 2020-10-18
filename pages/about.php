<?php
$page = "about";
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
include $_SERVER['DOCUMENT_ROOT'] . "/parts/head.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/">Home</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">
      About
	 </li>
  </ol>
</nav>

<div id="carouselExampleCaptions" class="carousel slide w-100 col-12" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="/img/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Чем же мы особенны?</h5>
        <p>Все товары изготовлены из высококачественных материвалов.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>А как же дазайн?</h5>
        <p>Мы наняли лучших экспертов из мира дизайна!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/7.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Где находится наше производство?</h5>
        <p>Наши заводы расположены в Китае.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="text-center">

<h2 class="mt-4">Обновленная таблица размеров!<span class="badge badge-secondary">New</span></h2>
<figure class="figure mt-4">
  <img src="/img/8.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption text-right">Самая уноверсальная таблица размеров только в нашем магазине!</figcaption>
</figure>
</div>

<div class="card text-center mt-3 mb-5">
  <div class="card-header">
    Не упустите!
  </div>
  <div class="card-body">
    <h5 class="card-title">Специальное предложение от нашего магазина</h5>
    <p class="card-text">Следующие 2 дня действует скидка 30% на ВСЕ товары нашего магазина!!!</p>
    <a href="/" class="btn btn-primary">ПЕРЕЙТИ К ПОПУПКАМ</a>
  </div>
  <div class="card-footer text-muted">
    Остался 1 день до конца акции.
  </div>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/parts/footer.php";
?>