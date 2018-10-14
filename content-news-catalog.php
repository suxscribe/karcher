<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1">Новости</h1>
				<div class="main-header-buttons">
					<a href="#" class="btn btn-blue">Добавить новость</a>
				</div>
			</div>
			<div id="main-content">

				<ul class="nav tabs-line" id="news-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tablist" aria-controls="users" aria-selected="true">Все</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="drafts-tab" data-toggle="tab" href="#drafts" role="tab" aria-controls="roles" aria-selected="false">Черновики</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="published-tab" data-toggle="tab" href="#published" role="tab" aria-controls="roles" aria-selected="false">Опубликованные</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="archived-tab" data-toggle="tab" href="#archived" role="tab" aria-controls="roles" aria-selected="false">В архиве</a>
					</li>

				</ul>
				<div class="tab-content" id="news-tabs-content">
					<div class="tab-pane fade show active" id="all" role="tabpanel">

						<div class="row">
							<div class="col-lg-3 d-lg-block filter-pane">
								<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3">Фильтры</div></div>
								<a href="javascript:;" class="filter-close d-lg-none"></a>
								<div class="filter-form">
									<div class="filter-header d-sm-none d-lg-block">Фильтр</div>
									<form class="kform">
										<div>
											<label for="title">Поиск по новости</label>
											<input type="text" id="title" class="form-control" placeholder="Поиск по новости">
										</div>


										<div>
											<label for="filter-date-from">Дата публикации, с</label>
	                    <input type="text" class="form-control form-datetimepicker" id="filter-date-from" data-toggle="datetimepicker" data-target="#filter-date-from"/>
										</div>
										<div>
											<label for="filter-date-to">Дата публикации, по</label>
	                    <input type="text" class="form-control form-datetimepicker" id="filter-date-to" data-toggle="datetimepicker" data-target="#filter-date-to"/>
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
													<th scope="col">Заголовок</th>
													<th scope="col">Дата</th>
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
														<a href="">Kärcher грязи не боится Компания приняла участие в ...</a>
													</td>
													<td>
														09.07.2018
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
														<a href="">Kärcher грязи не боится Компания приняла участие в ...</a>
													</td>
													<td>
														09.07.2018
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
														<a href="">Kärcher грязи не боится Компания приняла участие в ...</a>
													</td>
													<td>
														09.07.2018
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
					<div class="tab-shops tab-pane fade show " id="drafts" role="tabpanel">
						
					</div>
					<div class="tab-shops tab-pane fade show " id="published" role="tabpanel">
						
					</div>
					<div class="tab-shops tab-pane fade show " id="archived" role="tabpanel">
						
					</div>

				</div>

			</div>
		</main>
	</div>
</div>



<div class="overlay"></div>
<!--  -->


<? include('block-footer.php'); ?>


