<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1">Пользователи</h1>
				<div class="main-header-buttons">
					<a href="#" class="btn btn-blue">Создать курс</a>
				</div>
			</div>
			<div id="main-content">

				<ul class="nav tabs-line" id="users-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="users-tab" data-toggle="tab" href="#users" role="tablist" aria-controls="users" aria-selected="true">Список пользователей</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="roles-tab" data-toggle="tab" href="#roles" role="tab" aria-controls="roles" aria-selected="false">Роли пользователей</a>
					</li>
				</ul>
				<div class="tab-content" id="users-tabs-content">
					<div class="tab-pane fade show active" id="users" role="tabpanel">

						<div class="row">
							<div class="col-lg-3 d-lg-block filter-pane">
								<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3">Фильтры</div></div>
								<a href="javascript:;" class="filter-close d-lg-none"></a>
								<div class="filter-form">
									<div class="filter-header d-sm-none d-lg-block">Фильтр</div>
									<form class="kform">
										<div>
											<label for="title">Поиск по имени пользователя</label>
											<input type="text" id="title" class="form-control" placeholder="Поиск по имени пользователя">
										</div>
										<div>
											<label for="chain">Сеть</label>
											<select id="chain">
												<option value="chain1">Сеть 1</option>
												<option value="chain2">Сеть 2</option>
												<option value="chain3">Сеть 3</option>
												<option value="chain4">Сеть 4</option>
											</select>
										</div>
										<div>
											<label for="city">Город</label>
											<select id="city">
												<option value="city1">Город 1</option>
												<option value="city2">Город 2</option>
												<option value="city3">Город 3</option>
												<option value="city4">Город 4</option>
											</select>
										</div>
										<div>
											<label for="store">Магазин</label>
											<select id="store">
												<option value="store1">Магазин 1</option>
												<option value="store2">Магазин 2</option>
												<option value="store3">Магазин 3</option>
												<option value="store4">Магазин 4</option>
											</select>
										</div>
										<div>
											<label for="status">Статус</label>
											<select id="status">
												<option value="status1">Статус 1</option>
												<option value="status2">Статус 2</option>
												<option value="status3">Статус 3</option>
												<option value="status4">Статус 4</option>
											</select>
										</div>
										<div>
											<label for="role">Роль</label>
											<select id="role">
												<option value="role1">Роль 1</option>
												<option value="role2">Роль 2</option>
												<option value="role3">Роль 3</option>
												<option value="role4">Роль 4</option>
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
										<table class="table table-hover table-users table-sortable">
											<thead>
												<tr>
													<th scope="col"></th>
													<th scope="col">ФИО / Роль</th>
													<th scope="col">Контакты</th>
													<th scope="col">Магазин</th>
													
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
													<td class="table-user-cell">
														<div class="user-avatar"><img src="img/lk-avatar.png" alt=""></div>
														<span class="user-name">Иванова Алла Петровна</span><br>
														<span class="user-role">Продавец</span>

													</td>

													<td>
														<span class="user-phone">+7 (930) 789-11-43</span><br>
														<span class="user-email"><a href="mailto:ivanova@karcher.ru">ivanova@karcher.ru</a></span>

													</td>
													<td>
														Сеть №1<br>Название магазина №1
													</td>

												</tr>
												<tr>
													<td>
														<div class="dropdown">
															<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRow2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

															<div class="dropdown-menu" aria-labelledby="dropdownMenuRow2">
																<a class="dropdown-item link-icon" href="#"><i class="icon-ic_help_outline_16px"></i> Информация</a>
																<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
																<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
															</div>
														</div>
													</td>
													<td class="table-user-cell">
														<div class="user-avatar"><img src="img/lk-avatar.png" alt=""></div>
														<span class="user-name">Иванова Алла Петровна</span><br>
														<span class="user-role">Продавец</span>

													</td>

													<td>
														<span class="user-phone">+7 (930) 789-11-43</span><br>
														<span class="user-email"><a href="mailto:ivanova@karcher.ru">ivanova@karcher.ru</a></span>

													</td>
													<td>
														Сеть №1<br>Название магазина №1
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
					<div class="tab-pane fade show " id="roles" role="tabpanel">
						<div class="panel-box">
							<div class="table-responsive">
								<table class="table table-hover table-user-roles table-sortable">
									<thead>
										<tr>
											<th scope="col"></th>
											<th scope="col">Наименование роли</th>
											<th scope="col">Дата создания</th>
											<th  class="text-center" scope="col">Статус</th>

										</tr>
									</thead>
									<tbody>
										<tr class="table-row-muted">
											<td class="">
												<div class="dropdown">
													<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRowRole1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

													<div class="dropdown-menu" aria-labelledby="dropdownMenuRowRole1">
														
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
													</div>
												</div>
											</td>
											<td>
												Продавец
											</td>
											<td>
												05.07.2018
											</td>
											<td class="text-center">
												<span class="status-icon status-icon_3"></span>
											</td>

										</tr>
										<tr>
											<td class="">
												<div class="dropdown">
													<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRowRole3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

													<div class="dropdown-menu" aria-labelledby="dropdownMenuRowRole3">
														
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
													</div>
												</div>
											</td>
											<td>
												Адмминистратор
											</td>
											<td>
												05.07.2018
											</td>
											<td class="text-center">
												<span class="status-icon status-icon_1"></span>
											</td>

										</tr>
										<tr>
											<td class="">
												<div class="dropdown">
													<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRowRole4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

													<div class="dropdown-menu" aria-labelledby="dropdownMenuRowRole4">
														
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
													</div>
												</div>
											</td>
											<td>
												Главный администратор
											</td>
											<td>
												05.07.2018
											</td>
											<td class="text-center">
												<span class="status-icon status-icon_1"></span>
											</td>

										</tr>
										<tr>
											<td class="">
												<div class="dropdown">
													<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRowRole2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

													<div class="dropdown-menu" aria-labelledby="dropdownMenuRowRole2">
														
														<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
														<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
													</div>
												</div>
											</td>
											<td>
												Менеджер
											</td>
											<td>
												05.07.2018
											</td>
											<td class="text-center">
												<span class="status-icon status-icon_1"></span>
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