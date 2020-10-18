<?php
$page = "contacts";
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
include $_SERVER['DOCUMENT_ROOT'] . "/parts/head.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/">Home</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">
      Contacts
	 </li>
  </ol>
</nav>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Возникли вопросы?</h4>
  <p>Быстрее звони нашим операторам и они помогут тебе выбрать подходящий товар!</p>
  <hr>
  <p class="mb-0">+380935831918</p>
</div>

<h2 class="mt-4">Другие контакты:</h2>

<table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">Оператор</th>
      <th scope="col">Номер</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Киевстар:</th>
      <td>+380680000000</td>
    </tr>
    <tr>
      <th scope="row">Водафон</th>
      <td>+380680000000</td>
    </tr>
    <tr>
      <th scope="row">Лайф Селл</th>
      <td>+380935831918</td>
    </tr>
  </tbody>
</table>

<h2 class="mt-4">Найти ответ в частозадаваемых вопросах:</h2>

<div class="accordion mt-3 mb-4" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		  Для чего нужна регистрация?
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      Зарегистрированный пользователь имеет следующие преимущества:
		<ul class="list-group">
			<li class="list-group-item" aria-disabled="true">Полная информация о статусе заказа, истории его покупок;</li>
			<li class="list-group-item">Автоматически становиться участником программы лояльности «Мой бонус» ;</li>
			<li class="list-group-item">Получает Промокоды  позволяющие купить товар со скидкой</li>
			<li class="list-group-item">Всегда в курсе различных предложений и акций.</li>
		</ul>
</div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		  Как оформить заказ?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
		Оформить заказ можно в телефонном режиме, или же выбрать на сайте интересующий товар и оформить заказ, нажав кнопку «Купить». </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		  Как уточнить номер заказа и товар, который купил?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      Если вы совершали покупку как зарегистрированный пользователь, то историю ваших заказов можно найти в личном кабинете, если как незарегистрированный - позвоните нашим операторам и сообщите номер телефона или ФИО, который был указан в заказе.
		</div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingF">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseF" aria-expanded="false" aria-controls="collapseThree">
		  Как добавить, удалить, изменить количество товара в корзине?
        </button>
      </h2>
    </div>
    <div id="collapseF" class="collapse" aria-labelledby="headingF" data-parent="#accordionExample">
      <div class="card-body">
		Чтобы добавить товар в корзину, нажмите кнопку «Купить», если необходимо добавить еще товары, нажмите «Продолжить покупки».
Для удаления товара,  нажмите на кнопку в правом верхнем углу «Оформить заказ». Вы попадете на страничку отображающую содержимое вашей корзины, после чего нажмите кнопку «X» правее товара, чтобы удалить его из корзины.
Для изменения количества покупаемого товара, введите необходимое число единиц товара в поле «Количество» рядом с выбранным товаром.
</div>
    </div>
  </div>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/parts/footer.php";
?>