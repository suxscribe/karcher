<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>


		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1"><a href="" class="btn-back icon-ic_back"></a> Создание роли</h1>
				<div class="title-buttons">
					<a href="#" class="btn btn-blue">Сохранить</a>
					<a href="#" class="btn btn-grey">Отмена</a>
				</div>

			</div>
			<div id="main-content">

				
				<div class="user-create panel-box mb-4">
					<div class="panel-box-header">
						<h3>Общая информация</h3>

					</div>

					<div class="panel-box-inner">

						<div class="kform fl-form fl-style-2 fl-form_inline">
								<div class="">
									<div>
										<label for="user-lastname">Наименование роли</label>
										<input type="text" id="user-lastname" class="form-control" required placeholder="Наименование роли" onblur="validate(this);" >
									</div>
								</div>

							</div>

					</div>

				</div>

				<div class="user-create panel-box">
					<div class="panel-box-header">
						<h3>Настройка полномочий</h3>
					</div>

					<div class="panel-box-inner">
						<div class="kform fl-form fl-style-2 fl-form_inline">
														
							<div class="row ">
								<div class="col col-12 col-sm-6 col-md-6">
									<div>
										<label for="user-role-course-view">Просмотр курсов</label>
										<select id="user-role-course-view" >
											<option value="chain1">Пункт 1</option>
											<option value="chain2">Пункт 2</option>
											<option value="chain3">Пункт 3</option>
										</select>
									</div>
								</div>
								<div class="col col-12 col-sm-6 col-md-6">
									<div>
										<label for="user-role-course-completion">Прохождение курсов</label>
										<select id="user-role-course-completion" >
											<option value="course-completion1">Пункт 1</option>
											<option value="course-completion2">Пункт 2</option>
											<option value="course-completion3">Пункт 3</option>
										</select>
									</div>
								</div>
								<div class="col col-12 col-sm-6 col-md-6">
									<div>
										<label for="user-role-test-view">Просмотр тестов</label>
										<select id="user-role-test-view" >
											<option value="role1">Пункт 1</option>
											<option value="role2">Пункт 2</option>
											<option value="role3">Пункт 3</option>
										</select>
									</div>
								</div>
								<div class="col col-12 col-sm-6 col-md-6">
									<div>
										<label for="user-role-test-completion">Прохождение тестов</label>
										<select id="user-role-test-completion" >
											<option value="test-completion1">Пункт 1</option>
											<option value="test-completion2">Пункт 2</option>
											<option value="test-completion3">Пункт 3</option>
										</select>
									</div>
								</div>

								<div class="col col-12 col-sm-6 col-md-6">
									<div>
										<label for="user-role-product-order">Заказ товаров</label>
										<select id="user-role-product-order" >
											<option value="product-order1">Да</option>
											<option value="product-order2">Нет</option>
										</select>
									</div>
								</div>

								<div class="col col-12 col-sm-6 col-md-6">
									<div>
										<label for="user-role-user-management">Управление пользователями</label>
										<select id="user-role-user-management" >
											<option value="user-management1">Своего магазина</option>
											<option value="user-management2">Пункт 2</option>
											<option value="user-management3">Пункт 3</option>
										</select>
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