<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1">Справочник торговых сетей и магазинов</h1>
				<div class="main-header-buttons">
					<div class="tab-content" id="settings-tabs-buttons">
						<div class="tab-chains tab-pane fade show active" id="chains-buttons" role="tabpanel">
							<a href="#" class="btn btn-blue">Добавить сеть</a>
						</div>
						<div class="tab-shops tab-pane fade show " id="shops-buttons" role="tabpanel">
							<a href="#" class="btn btn-blue">Добавить магазин</a>
						</div>
					</div>
				</div>
			</div>
			<div id="main-content">

				<ul class="nav tabs-line" id="settings-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="chains-tab" data-toggle="tab" href="#chains" role="tablist" data-target=".tab-chains" aria-controls="chains, chains-buttons" aria-selected="true">Сети</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="shops-tab" data-toggle="tab" href="#shops" role="tab" data-target=".tab-shops" aria-controls="shops, shops-buttons" aria-selected="false">Магазины</a>
					</li>

				</ul>
				<div class="tab-content" id="settings-tabs-content">
					<div class="tab-chains tab-pane fade show active" id="chains" role="tabpanel">

						<div class="row">
							<div class="col-lg-3 d-lg-block filter-pane">
								<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3">Фильтры</div></div>
								<a href="javascript:;" class="filter-close d-lg-none"></a>
								<div class="filter-form">
									<div class="filter-header d-sm-none d-lg-block">Фильтр</div>
									<form class="kform">
										<div>
											<label for="title">Наименование сети</label>
											<input type="text" id="title" class="form-control" placeholder="Поиск по названию">
										</div>
										<div>
											<label for="status">Статус</label>
											<select id="status">
												<option value="status1">Все</option>
												<option value="status2">Актуальная</option>
												<option value="status3">Статус3</option>
												<option value="status4">Статус4</option>
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
													<th scope="col" width="100%">Название</th>
													<th scope="col">Статус</th>
													
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
													<td>
														<a href="">Сеть №1</a>
													</td>
													<td><span class="status-icon status-icon_1"></span></td>
												</tr>												
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
													<td>
														<a href="">Сеть №1</a>
													</td>
													<td><span class="status-icon status-icon_2"></span></td>
												</tr>												
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
													<td>
														<a href="">Сеть №1</a>
													</td>
													<td><span class="status-icon status-icon_3"></span></td>
												</tr>												
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
													<td>
														<a href="">Сеть №1</a>
													</td>
													<td><span class="status-icon status-icon_1"></span></td>
												</tr>												
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
													<td>
														<a href="">Сеть №1</a>
													</td>
													<td><span class="status-icon status-icon_2"></span></td>
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
					<div class="tab-shops tab-pane fade show " id="shops" role="tabpanel">
						
						<div class="row">
							<div class="col-lg-3 d-lg-block filter-pane">
								<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3">Фильтры</div></div>
								<a href="javascript:;" class="filter-close d-lg-none"></a>
								<div class="filter-form">
									<div class="filter-header d-sm-none d-lg-block">Фильтр</div>
									<form class="kform">
										<div>
											<label for="title">Наименование магазина</label>
											<input type="text" id="title" class="form-control" placeholder="Наименование магазина">
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
												<option value="status1">Все</option>
												<option value="status2">Актуальная</option>
												<option value="status3">Статус3</option>
												<option value="status4">Статус4</option>
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
													<th scope="col">Название</th>
													<th scope="col">Сеть</th>
													<th scope="col">Адрес</th>
													<th scope="col">Статус</th>
													
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
													<td>
														<a href="">Магазин №1</a>
													</td>
													<td>
														<a href="">Сеть №1</a>
													</td>
													<td>
														<a href="">Нижний Новгород, ул.40-лет Победы, д.27</a>
													</td>
													<td><span class="status-icon status-icon_1"></span></td>
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
													<td>
														<a href="">Магазин №1</a>
													</td>
													<td>
														<a href="">Сеть №1</a>
													</td>
													<td>
														<a href="">Нижний Новгород, ул.40-лет Победы, д.27</a>
													</td>
													<td><span class="status-icon status-icon_2"></span></td>
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
													<td>
														<a href="">Магазин №1</a>
													</td>
													<td>
														<a href="">Сеть №1</a>
													</td>
													<td>
														<a href="">Нижний Новгород, ул.40-лет Победы, д.27</a>
													</td>
													<td><span class="status-icon status-icon_1"></span></td>
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
													<td>
														<a href="">Магазин №1</a>
													</td>
													<td>
														<a href="">Сеть №1</a>
													</td>
													<td>
														<a href="">Нижний Новгород, ул.40-лет Победы, д.27</a>
													</td>
													<td><span class="status-icon status-icon_3"></span></td>
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
													<td>
														<a href="">Магазин №1</a>
													</td>
													<td>
														<a href="">Сеть №1</a>
													</td>
													<td>
														<a href="">Нижний Новгород, ул.40-лет Победы, д.27</a>
													</td>
													<td><span class="status-icon status-icon_1"></span></td>
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

				</div>

			</div>
		</main>
	</div>
</div>



<div class="overlay"></div>
<!--  -->


<? include('block-footer.php'); ?>