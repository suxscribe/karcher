<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1"><a href="" class="btn-back icon-ic_back"></a> Профиль</h1>
				<div class="title-buttons">
					<a href="#" class="btn btn-blue">Редактировать</a>
					<a href="#" class="btn btn-grey">Сменить пароль</a>
				</div>
			</div>
			<div id="main-content">

				<div class="user-profile row">
					<div class="col-12 col-lg-6 panel-368 mb-4">
						<div class=" panel-box">
							<div class="panel-box-header d-flex flex-wrap align-items-center">
								<h3 class="flex-grow-1">Общая информация</h3>
								<div class="title-buttons">
									<div class="label-status">Активный</div>
								</div>
							</div>

							<div class="user-profile-main row d-flex flex-wrap row-divider panel-box-inner">
								<div class="col user-profile-avatar">

									<div class="user-avatar">
										<img src="img/avatar@2x.png" alt="">
									</div>


								</div>
								<div class="col user-profile-info">
									<div class="subtitle">Фамилия</div>
									<div class="info-title user-lastname mb-4">Константинопольский</div>

									<div class="subtitle">Имя</div>
									<div class="info-title user-name mb-4">Константин</div>
									<div class="subtitle">Отчество</div>
									<div class="info-title user-patronymic mb-4">Константинович</div>
									<div class="subtitle">Дата рождения</div>
									<div class="info-title user-birthdate mb-4">05.07.1969</div>
									<div class="subtitle">Роль</div>
									<div class="info-title user-role mb-4">Главный администратор</div>


								</div>
							</div>

						</div>
					</div>
					<div class="col-12 col-lg-6 panel-368 mb-4">
						<div class=" panel-box">
							<div class="panel-box-header d-flex flex-wrap align-items-center">
								<h3 class="flex-grow-1">Контактная информация</h3>
							</div>

							<div class="subtitle">Мобильный телефон</div>
							<div class="info-title user-phone mb-4">+7 (930) 079-77-12</div>

							<div class="subtitle">E-mail</div>
							<div class="info-title user-email mb-4">Konstantin_69@karcher.ru</div>
							<div class="subtitle">Рабочий телефон</div>
							<div class="info-title user-workphone mb-4">+ 7 (495) 079-77-12</div>
							<div class="subtitle">Добавочный</div>
							<div class="info-title user-phoneaddon mb-4">113</div>

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