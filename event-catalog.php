<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1">Мероприятия</h1>
				<div class="main-header-buttons">
					
				</div>
			</div>
			<div id="main-content">

				<ul class="nav tabs-line" id="event-catalog-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="event-tab" data-toggle="tab" href="#events" role="tablist" aria-controls="users" aria-selected="true">Мероприятия</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="request-tab" data-toggle="tab" href="#requests" role="tab" aria-controls="roles" aria-selected="false">Заявки на участие</a>
					</li>
					
				</ul>
				<div class="tab-content" id="event-tabs">
					<div class="tab-pane fade show active" id="events" role="tabpanel">

						<div class="row">
							<div class="col-lg-3 d-lg-block filter-pane">
								<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3">Фильтры</div></div>
								<a href="javascript:;" class="filter-close d-lg-none"></a>
								<div class="filter-form">
									<div class="filter-header d-sm-none d-lg-block">Фильтр</div>
									<form class="kform">
										<div>
											<label for="event-city">Город</label>
											<select id="event-city">
												<option value="event-city">Все</option>
												<option value="event-city2">Город</option>
												<option value="event-city3">Город</option>
												<option value="event-city4">Город</option>
											</select>
										</div>
										<div>
											<label for="event-title">Наименование мероприятия</label>
											<input type="text" id="event-title" class="form-control" placeholder="Поиск по названию мероприятия">
										</div>
										<div>
											<label for="filter-date-from">Дата заказа, от</label>
	                    <input type="text" class="form-control form-datetimepicker" id="filter-date-from" data-toggle="datetimepicker" data-target="#filter-date-from"/>
										</div>
										<div>
											<label for="filter-date-to">Дата заказа, до</label>
	                    <input type="text" class="form-control form-datetimepicker" id="filter-date-to" data-toggle="datetimepicker" data-target="#filter-date-to"/>
										</div>
										
									</form>
								</div>
							</div>
							<div class="col-lg-9 col-sm-12">
								<div class="filter-pl d-lg-none">
									<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3"><a class="filter-btn" href="javascript:;">Фильтры</a></div></div>
									<a href="javascript:;" class="clear">Сбросить</a>
								</div>

								<div class="panel-box">
									
									<div class="events events_back">
									    <ul class="nav justify-content-center wm-toggle" role="tablist">
									        <li class="nav-item">
									            <a class="nav-link active nav-month" data-toggle="tab" href="#month" role="tab"aria-selected="true">Месяц</a>
									        </li>
									        <li class="nav-item">
									            <a class="nav-link nav-week" data-toggle="tab" href="#week" role="tab" aria-selected="false">Неделя</a>
									        </li>
									    </ul>
									    <div class="tab-content">
									        <div class="tab-pane fade show active" id="month" role="tabpanel">
									            <div class="month-head">
									                <a href="javascript:;" class="prev"></a>
									                <div class="month-name">Июль 2018</div>
									                <a href="javascript:;" class="next"></a>
									            </div>
									            <div class="week-days">
									                <div>Пн</div>
									                <div>Вт</div>
									                <div>Ср</div>
									                <div>Чт</div>
									                <div>Пт</div>
									                <div>Сб</div>
									                <div>Вс</div>
									            </div>
									            <div class="cal-table">
									                <div class="event-bubble" style="left:0;top: 10%; width: 57.1428%;">
									                    Лекция об истории компании Karcher
									                </div>
									                <div class="event-bubble" style="left:28.5714%;top: 30%; width: 71.4285%;">
									                    Собрание продавцов магазина №2 торговой сети Москвы
									                </div>
									                <div class="week-line">
									                    <div><div class="day">1</div></div>
									                    <div><div class="day">2</div></div>
									                    <div><div class="day">3</div></div>
									                    <div><div class="day">4</div></div>
									                    <div><div class="day">5</div></div>
									                    <div><div class="day">6</div></div>
									                    <div><div class="day">7</div></div>
									                </div>
									                <div class="week-line">
									                    <div><div class="day">8</div></div>
									                    <div><div class="day">9</div></div>
									                    <div><div class="day">10</div></div>
									                    <div><div class="day today">11</div></div>
									                    <div><div class="day">12</div></div>
									                    <div><div class="day">13</div></div>
									                    <div><div class="day">14</div></div>
									                </div>
									                <div class="week-line">
									                    <div><div class="day">15</div></div>
									                    <div><div class="day">16</div></div>
									                    <div><div class="day">17</div></div>
									                    <div><div class="day">18</div></div>
									                    <div><div class="day">19</div></div>
									                    <div><div class="day">20</div></div>
									                    <div><div class="day">21</div></div>
									                </div>
									                <div class="week-line">
									                    <div><div class="day">22</div></div>
									                    <div><div class="day">23</div></div>
									                    <div><div class="day">24</div></div>
									                    <div><div class="day">25</div></div>
									                    <div><div class="day">26</div></div>
									                    <div><div class="day">27</div></div>
									                    <div><div class="day">28</div></div>
									                </div>
									                <div class="week-line">
									                    <div><div class="day">29</div></div>
									                    <div><div class="day">30</div></div>
									                    <div><div class="day">30</div></div>
									                    <div><div class="day next-month">1</div></div>
									                    <div><div class="day next-month">2</div></div>
									                    <div><div class="day next-month">3</div></div>
									                    <div><div class="day next-month">4</div></div>
									                </div>
									            </div>
									        </div>

									        <div class="tab-pane fade" id="week" role="tabpanel">
									            <div class="week-head">
									                <a href="javascript:;" class="prev"></a>
									                <div class="week-name">1 - 7 июля, 2018</div>
									                <a href="javascript:;" class="next"></a>
									            </div>
									            <div class="week-day">
									                <div class="day-head">Понедельник, 1 июля</div>
									                <div class="schedule-line">
									                    <div class="time">8:00 - 18:00</div>
									                    <div class="event-title"><a href="/event.html">Лекция о продукции Karcher</a></div>
									                </div>
									                <div class="schedule-line">
									                    <div class="time">12:00 - 15:00</div>
									                    <div class="event-title"><a href="/event.html">Собрание продавцов магазина №2 торговой сети Москвы</a></div>
									                </div>
									                <div class="schedule-line">
									                    <div class="time">16:00 - 17:00</div>
									                    <div class="event-title"><a href="/event.html">Лекция об истории компании Karcher</a></div>
									                </div>
									            </div>

									            <div class="week-day">
									                <div class="day-head">Вторник, 2 июля</div>
									                <div class="schedule-line">
									                    <div class="time">8:00 - 18:00</div>
									                    <div class="event-title"><a href="/event.html">Лекция о продукции Karcher</a></div>
									                </div>
									                <div class="schedule-line">
									                    <div class="time">12:00 - 15:00</div>
									                    <div class="event-title"><a href="/event.html">Собрание продавцов магазина №2 торговой сети Москвы</a></div>
									                </div>
									                <div class="schedule-line">
									                    <div class="time">16:00 - 17:00</div>
									                    <div class="event-title"><a href="/event.html">Лекция об истории компании Karcher</a></div>
									                </div>
									            </div>

									            <div class="week-day">
									                <div class="day-head">Среда, 3 июля</div>
									                <div class="schedule-line">
									                    <div class="time">8:00 - 18:00</div>
									                    <div class="event-title"><a href="/event.html">Лекция о продукции Karcher</a></div>
									                </div>
									                <div class="schedule-line">
									                    <div class="time">12:00 - 15:00</div>
									                    <div class="event-title"><a href="/event.html">Собрание продавцов магазина №2 торговой сети Москвы</a></div>
									                </div>
									                <div class="schedule-line">
									                    <div class="time">16:00 - 17:00</div>
									                    <div class="event-title"><a href="/event.html">Лекция об истории компании Karcher</a></div>
									                </div>
									            </div>

									        </div>
									    </div>
									</div>

									
								</div>
								
							</div>
						</div>

					</div>
					<div class="tab-pane fade show " id="requests" role="tabpanel">
						<div class="panel-box">
							
							<div class="table-responsive">
								<table class="table table-hover table-users table-sortable">
									<thead>
										<tr>
											<th scope="col"></th>
											<th scope="col">Подал заявку</th>
											<th scope="col">Дата подачи</th>
											<th scope="col">Статус</th>
											<th scope="col">Мероприятие</th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="dropdown">
													<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRow1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

													<div class="dropdown-menu" aria-labelledby="dropdownMenuRow1">
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_help_outline_16px"></i> Информация</a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
													</div>
												</div>
											</td>
											<td><a href="">Константин Сергеевич Константинопольский</a></td>
											<td>05.07.2018</td>

											<td class="">Требует подтверждения</td>
											<td>
												<a href="">Лекция по продукции Karcher</a>
											</td>	


										</tr><tr>
											<td>
												<div class="dropdown">
													<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRow1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

													<div class="dropdown-menu" aria-labelledby="dropdownMenuRow1">
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_help_outline_16px"></i> Информация</a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
													</div>
												</div>
											</td>
											<td><a href="">Константин Сергеевич Константинопольский</a></td>
											<td>05.07.2018</td>

											<td class="">Требует подтверждения</td>
											<td>
												<a href="">Лекция по продукции Karcher</a>
											</td>	


										</tr><tr>
											<td>
												<div class="dropdown">
													<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRow1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

													<div class="dropdown-menu" aria-labelledby="dropdownMenuRow1">
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_help_outline_16px"></i> Информация</a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
													</div>
												</div>
											</td>
											<td><a href="">Константин Сергеевич Константинопольский</a></td>
											<td>05.07.2018</td>

											<td class="">Требует подтверждения</td>
											<td>
												<a href="">Лекция по продукции Karcher</a>
											</td>	


										</tr><tr>
											<td>
												<div class="dropdown">
													<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRow1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

													<div class="dropdown-menu" aria-labelledby="dropdownMenuRow1">
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_help_outline_16px"></i> Информация</a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
													</div>
												</div>
											</td>
											<td><a href="">Константин Сергеевич Константинопольский</a></td>
											<td>05.07.2018</td>

											<td class="">Требует подтверждения</td>
											<td>
												<a href="">Лекция по продукции Karcher</a>
											</td>	


										</tr><tr>
											<td>
												<div class="dropdown">
													<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRow1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

													<div class="dropdown-menu" aria-labelledby="dropdownMenuRow1">
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_help_outline_16px"></i> Информация</a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
													</div>
												</div>
											</td>
											<td><a href="">Константин Сергеевич Константинопольский</a></td>
											<td>05.07.2018</td>

											<td class="">Требует подтверждения</td>
											<td>
												<a href="">Лекция по продукции Karcher</a>
											</td>	


										</tr>
										
										
										
										
										
									</tbody>
								</table>
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