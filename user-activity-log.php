<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>

	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>

		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1">Журнал активностей пользователей</h1>
				<div class="main-header-buttons">
					
				</div>
			</div>
			<div id="main-content">

				<div class="row">
					<div class="col-lg-3 d-lg-block filter-pane">
						<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3">Фильтры</div></div>
						<a href="javascript:;" class="filter-close d-lg-none"></a>
						<div class="filter-form">
							<div class="filter-header d-sm-none d-lg-block">Фильтр</div>
							<form class="kform">
								
								<div>
									<label for="filter-initiator">Инициатор активности</label>

									<select id="filter-initiator">
										<option value="initiator1">Инициатор 1</option>
										<option value="initiator2">Инициатор 2</option>
										<option value="initiator3">Инициатор 3</option>
									</select>
								</div>
								<div>
									<label for="filter-chain">Сеть магазинов инициатора</label>
									<select id="filter-chain">
										<option value="chain1">Сеть 1</option>
										<option value="chain2">Сеть 2</option>
										<option value="chain3">Сеть 3</option>
										<option value="chain4">Сеть 4</option>
									</select>
								</div>
								<div>
									<label for="filter-store">Магазин инициатора</label>
									<select id="filter-store">
										<option value="store1">Магазин 1</option>
										<option value="store2">Магазин 2</option>
										<option value="store3">Магазин 3</option>
										<option value="store4">Магазин 4</option>
									</select>
								</div>
								<div>
											<label for="filter-date-from">Время активности, от</label>
	                    <input type="text" class="form-control form-datetimepicker" id="filter-date-from" data-toggle="datetimepicker" data-target="#filter-date-from"/>
								</div>
								<div>
											<label for="filter-date-to">Время активности, до</label>
	                    <input type="text" class="form-control form-datetimepicker" id="filter-date-to" data-toggle="datetimepicker" data-target="#filter-date-to"/>
								</div>
								<div>
									<label for="filter-object">Объект активности</label>
									<select id="filter-object">
										<option value="filter-object1">Курсы</option>
										<option value="filter-object2">Тесты</option>
										<option value="filter-object3">Объект 3</option>
									</select>
								</div>
								<div class="kform-actions">
									<input type="submit" class="submit-text" value="Применить" />
									<a class="clear" href="javascript:;">Сбросить</a>
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
							<div class="table-responsive">
								<table class="table table-hover table-user-info">
									<thead>
										<tr>
											<th scope="col">Инициатор активности</th>
											<th scope="col">Время активности</th>
											<th scope="col">Объект, описание активности</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><a href="">Константин Сергеевич Константинопольский</a></td>
											<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>
											<td>
												<div class="subtitle">Курс</div>
												Пройден урок "История Karcher"
											</td>
							
										</tr>
										<tr>
											<td><a href="">Константин Сергеевич Константинопольский</a></td>
											<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>
											<td>
												<div class="subtitle">Курс</div>
												Пройден урок "История Karcher"
											</td>
							
										</tr>
										<tr>
											<td><a href="">Константин Сергеевич Константинопольский</a></td>
											<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>
											<td>
												<div class="subtitle">Курс</div>
												Пройден урок "История Karcher"
											</td>
							
										</tr>
										<tr>
											<td><a href="">Константин Сергеевич Константинопольский</a></td>
											<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>
											<td>
												<div class="subtitle">Курс</div>
												Пройден урок "История Karcher"
											</td>
							
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