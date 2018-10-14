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
					<a href="#" class="btn btn-blue">Заблокировать</a>
					<a href="#" class="btn btn-grey">Редактировать</a>
				</div>
			</div>
			<div id="main-content">

				<ul class="nav tabs-line" id="user-info-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="user-info-tab" data-toggle="tab" href="#user-info" role="tablist" aria-controls="users" aria-selected="true">О сотруднике</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="user-stats-tab" data-toggle="tab" href="#user-stats" role="tab" aria-controls="roles" aria-selected="false">Статистика</a>
					</li>
				</ul>
				<div class="tab-content" id="users-tabs-content">
					<div class="tab-pane fade show active" id="user-info" role="tabpanel">

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
												<img src="img/user-info-avatar.png" alt="">
											</div>


										</div>
										<div class="col user-profile-info">
											<div class="subtitle">Фамилия</div>
											<div class="info-title user-lastname mb-4">Иванова</div>

											<div class="subtitle">Имя</div>
											<div class="info-title user-name mb-4">Алла</div>
											<div class="subtitle">Отчество</div>
											<div class="info-title user-patronymic mb-4">Петровна</div>
											<div class="subtitle">Дата рождения</div>
											<div class="info-title user-birthdate mb-4">05.07.1969</div>
											<div class="subtitle">Роль</div>
											<div class="info-title user-role mb-4">Продавец</div>


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
							<div class="col-12 col-lg-6 panel-368 mb-4">
								<div class=" panel-box">
									<div class="panel-box-header d-flex flex-wrap align-items-center">
										<h3 class="flex-grow-1">Информация о магазине</h3>
									</div>

									<div class="subtitle">Сеть магазинов</div>
									<div class="info-title user-chain mb-4">Сеть магазинов Karcher во Владимирской области</div>

									<div class="subtitle">Город</div>
									<div class="info-title user-city mb-4">Москва</div>
									<div class="subtitle">Магазин</div>
									<div class="info-title user-store mb-4">Магазин Karcher № 1278</div>
									<div class="subtitle">Должность</div>
									<div class="info-title user-post mb-4">Продавец-консультант</div>

								</div>
							</div>
						</div>

					</div>
					<div class="tab-pane fade show" id="user-stats" role="tabpanel">

						<div class=" panel-box mb-4">
							<div class="panel-box-header d-flex flex-wrap align-items-center">
								<h3 class="flex-grow-1">История обучения</h3>
								<div class="title-buttons">
									
								</div>
							</div>

							<div class="panel-box-inner">
								
								<div class="row row-divider">
									<div class="col col-xs-4 test-spec">
										<div class="subtitle">Уровень</div>
										<div class="text-large">Экспертный</div>
									</div>
									<div class="col col-xs-4 test-spec">
										<div class="subtitle">Доступно очков</div>
										<div class="text-large">713</div>
									</div>
									<div class="col col-xs-4 test-spec">
										<div class="subtitle">Всего зачислено очков</div>
										<div class="text-large">1512</div>
									</div>
								</div>

							</div>

						</div>

						<div class="panel-box">
							<div class="panel-box-header d-flex flex-wrap align-items-center mb-remove">
								<h3 class="flex-grow-1"><span class="icon icon-ic_filtr_24px"></span> Курсы</h3>
								
							</div>
							<div class="table-responsive">
								<table class="table table-hover table-user-info">
									<thead>
										<tr>
											<th scope="col">Дата операции</th>
											<th scope="col" class="text-center">Количество очков</th>
											<th scope="col">Описание</th>
											<th scope="col">Начало курса</th>
											<th scope="col">Завершение курса</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>05.07.2018</td>
											<td class="text-center"><input type="text" class="score"></td>
											<td>Пройден курс <a href="">"Продукция Kаrcher"</a></td>
											<td>05.07.2018 <span class="text-muted">11:10</span></td>
											<td>05.07.2018 <span class="text-muted">11:10</span></td>
							
										</tr>
										<tr>
											<td>05.07.2018</td>
											<td class="text-center"><input type="text" class="score"></td>
											<td>Пройден курс <a href="">"Продукция Kаrcher"</a></td>
											<td>05.07.2018 <span class="text-muted">11:10</span></td>
											<td>05.07.2018 <span class="text-muted">11:10</span></td>
							
										</tr>
										<tr>
											<td>05.07.2018</td>
											<td class="text-center"><input type="text" class="score"></td>
											<td>Оформлен заказ № 12411</td>
											<td>05.07.2018 <span class="text-muted">11:10</span></td>
											<td>05.07.2018 <span class="text-muted">11:10</span></td>
							
										</tr>

							
									</tbody>
								</table>
							</div>

							<div class="paginator-block">
								<div class="shown">Показаны записи 1-10 из 4</div>
								<div class="onpage">
									<span>Строк на странице</span>
									<span class="somesel-wrp">
										<select class="somesel">
											<option>10</option>
											<option>20</option>
											<option>50</option>
										</select>
									</span>
								</div>
								<div class="pag-wrp">
									<ul class="paginator">
										<li class="first"><a href="javascript:;"></a></li>
										<li class="prev"><a href="javascript:;"></a></li>
										<li class="page"><a href="javascript:;">1</a></li>
										<li class="page"><a href="javascript:;">2</a></li>
										<li class="page active"><a href="javascript:;">3</a></li>
										<li class="page"><a href="javascript:;">4</a></li>
										<li class="page"><a href="javascript:;">5</a></li>
										<li class="page more"><a href="javascript:;">...</a></li>
										<li class="page"><a href="javascript:;">10</a></li>
										<li class="next"><a href="javascript:;"></a></li>
										<li class="last"><a href="javascript:;"></a></li>
									</ul>
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