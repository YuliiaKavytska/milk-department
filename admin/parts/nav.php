<ul class="nav">
	<li <?php if($page == "rating"){ echo "class='nav-item active'"; }?>>
		<a class="nav-link" href="/admin">
			<i class="nc-icon pe-7s-piggy"></i>
			<p>Звітність</p>
		</a>
	</li>
	<li <?php if($page == "purchase"){ echo "class='nav-item active'"; }?>>
		<a class="nav-link" href="/admin/purchase.php">
			<i class="nc-icon nc-app"></i>
			<p>Закупка</p>
		</a>
	</li>
	<li <?php if($page == "users"){ echo "class='nav-item active'"; }?>>
		<a class="nav-link" href="/admin/users.php">
			<i class="nc-icon nc-circle-09"></i>
			<p>Працівники</p>
		</a>
	</li>
	<li <?php if($page == "shift"){ echo "class='nav-item active'"; }?>>
		<a class="nav-link" href="/admin/working-hours.php">
			<i class="nc-icon nc-chart-bar-32"></i>
			<p>Зміни</p>
		</a>
	</li>
	<li <?php if($page == "sale"){ echo "class='nav-item active'"; }?>>
		<a class="nav-link" href="/admin/sale.php">
			<i class="nc-icon nc-delivery-fast"></i>
			<p>Продаж продукції</p>
		</a>
	</li>
	<li <?php if($page == "stores"){ echo "class='nav-item active'"; }?>>
		<a class="nav-link" href="/admin/stores.php">
			<i class="nc-icon nc-cart-simple"></i>
			<p>Магазини збуту</p>
		</a>
	</li>
	<li class='nav-item'>
		<a class="nav-link" href="/admin/options/deleteDB.php">
			<i class="nc-icon nc-button-power"></i>
			<p>Видалити всю базу</p>
		</a>
	</li>
	<li>
		<a class="nav-link" href="#">
			<i class="nc-icon nc-key-25"></i>
			<p>Вийти</p>
		</a>
	</li>
</ul>