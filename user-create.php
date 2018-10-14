<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>


		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1"><a href="" class="btn-back icon-ic_back"></a> Создание пользователя</h1>
				<div class="title-buttons">
					<a href="#" class="btn btn-blue">Сохранить</a>
					<a href="#" class="btn btn-grey">Отмена</a>
				</div>

			</div>
			<div id="main-content">

				
				<div class="user-create panel-box">
					<div class="panel-box-header">
						<h3>Общая информация</h3>

					</div>

					<div class="panel-box-inner">

						<div class="kform fl-form fl-style-2 fl-form_inline">
							<div class="row">
								<div class="col col-12 col-sm-6 col-md-4">
									<div>
										<label for="user-lastname">Фамилия</label>
										<input type="text" id="user-lastname" class="form-control" required placeholder="Фамилия" onblur="validate(this);" >
									</div>
								</div>
								<div class="col col-12 col-sm-6 col-md-4">
									<div>
										<label for="user-name">Имя</label>
										<input type="text" id="user-name" class="form-control" required placeholder="Имя" onblur="validate(this);">
									</div>
								</div>
								<div class="col col-12 col-sm-6 col-md-4">
									<div>
										<label for="user-patronymic">Отчество</label>
										<input type="text" id="user-patronymic" class="form-control" required placeholder="Отчество" onblur="validate(this);">
									</div>
								</div>
								<div class="col col-12 col-sm-6 col-md-4">
									<div>
										<label for="user-birthdate">Дата рождения</label>
										<input type="text" id="user-birthdate" class="form-control" required placeholder="Дата рождения" onblur="validate(this);">
									</div>
								</div>
								
							</div>
						</div>

					</div>

				</div>

				<div class="user-create panel-box">
					<div class="panel-box-header">
						<h3>Контактная информация</h3>

					</div>

					<div class="panel-box-inner">

						<div class="kform fl-form fl-style-2 fl-form_inline">
							<div class="row row-user-contacts">
								<div class="col ">
									<div>
										<label for="user-phone">Мобильный телефон</label>
										<input type="text" id="user-phone" class="form-control" required placeholder="Мобильный телефон" onblur="validate(this);">
									</div>
								</div>
								<div class="col ">
									<div>
										<label for="user-email">E-mail</label>
										<input type="text" id="user-email" class="form-control" required placeholder="E-mail" onblur="validate(this);">
									</div>
								</div>
								<div class="col ">
									<div>
										<label for="user-workphone">Рабочий телефон</label>
										<input type="text" id="user-workphone" class="form-control" required placeholder="Рабочий телефон" onblur="validate(this);">
									</div>
								</div>
								<div class="col col-user-phoneaddon">
									<div>
										<label for="user-phoneaddon">Добавочный</label>
										<input type="text" id="user-phoneaddon" class="form-control" required placeholder="Добавочный" onblur="validate(this);">
									</div>
								</div>
								
							</div>
						</div>

					</div>

				</div>

				<div class="user-create panel-box">
					<div class="panel-box-header">
						<h3>Информация о магазине</h3>

					</div>

					<div class="panel-box-inner">

						<div class="kform fl-form fl-style-2 fl-form_inline">
							<div class="mb-4">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="user-create-manager">
									<label class="custom-control-label" for="user-create-manager">Менеджер магазина</label>
								</div>
							</div>							
							<div class="row ">
								<div class="col  col-12 col-sm-6 col-md-4">
									<div>
										<label for="user-create-chain">Сеть магазинов *</label>
										<select id="user-create-chain" >
											<option value="chain1">Сеть 1</option>
											<option value="chain2">Сеть 2</option>
											<option value="chain3">Сеть 3</option>
										</select>
									</div>
								</div>
								<div class="col  col-12 col-sm-6 col-md-4">
									<div>
										<label for="user-create-city">Город *</label>
										<select id="user-create-city" >
											<option value="city1">Город 1</option>
											<option value="city2">Город 2</option>
											<option value="city3">Город 3</option>
										</select>
									</div>
								</div>
								<div class="col  col-12 col-sm-6 col-md-4">
									<div>
										<label for="user-create-role">Роль *</label>
										<select id="user-create-role" >
											<option value="role1">Сеть 1</option>
											<option value="role2">Сеть 2</option>
											<option value="role3">Сеть 3</option>
										</select>
									</div>
								</div>
								<div class="col  col-12 col-sm-6 col-md-4">
									<div>
										<label for="user-create-store">Магазин *</label>
										<select id="user-create-store" >
											<option value="store1">Магазин 1</option>
											<option value="store2">Магазин 2</option>
											<option value="store3">Магазин 3</option>
										</select>
									</div>
								</div>

								<div class="col  col-12 col-sm-6 col-md-4">
									<div>
										<label for="user-post">Должность</label>
										<input type="text" id="user-post" class="form-control" placeholder="Должность">
									</div>
								</div>
								
							</div>
						</div>

					</div>

				</div>


			</div>
		</main>
	</div>
</div>



<div class="overlay"></div>
<!--  -->


<? include('block-footer.php'); ?>