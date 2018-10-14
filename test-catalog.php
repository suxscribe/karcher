<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1">Каталог тестов</h1>
				<div class="main-header-buttons">
					<a href="#" class="btn btn-blue">Создать тест</a>
				</div>
			</div>
			<div id="main-content">

				<ul class="nav tabs-line" id="test-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">Все</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="draft-tab" data-toggle="tab" href="#draft" role="tab" aria-controls="draft" aria-selected="false">Черновики</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="published-tab" data-toggle="tab" href="#published" role="tab" aria-controls="published" aria-selected="false">Опубликованные</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="archive-tab" data-toggle="tab" href="#archive" role="tab" aria-controls="archive" aria-selected="false">В архиве</a>
					</li>
				</ul>
				<div class="tab-content" id="course-tabs-content">
					<div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">

						<div class="row">
							<div class="col-lg-3 d-lg-block filter-pane">
								<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3">Фильтры</div></div>
								<a href="javascript:;" class="filter-close d-lg-none"></a>
								<div class="filter-form">
									<div class="filter-header d-sm-none d-lg-block">Фильтр</div>
									<form class="kform">
										<div>
											<label for="title">Поиск по названию теста</label>
											<input type="text" id="title" class="form-control" placeholder="Поиск по названию курса">
										</div>
										<div>
											<div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input" id="testCheckbox1">
											  <label class="custom-control-label" for="testCheckbox1">Показать тесты для перехода на новый уровень</label>
											</div>
										</div>
										<div class="mb-4">
											<div class="custom-control custom-checkbox">
											  <input type="checkbox" class="custom-control-input" id="testCheckbox2">
											  <label class="custom-control-label" for="testCheckbox2">Показать тесты курсов</label>
											</div>
										</div>
										<div>
											<label for="rubric">Рубрика</label>
											<input type="text" id="rubric" class="form-control" data-cclass="c-sel" readonly placeholder="Рубрика">

											<select name="rubric" class="d-none">
												<option value="r1">Рубрика 1</option>
												<option value="r2">Рубрика 2</option>
												<option value="r3">Рубрика 3</option>
											</select>
										</div>
										<div>
											<label for="level">Уровень</label>
											<select id="level">
												<option value="all">Все</option>
												<option value="beginner">Начальный</option>
												<option value="intermediate">Продвинутый</option>
												<option value="expert">Экспертный</option>
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
									<div class="panel-box-header d-flex flex-wrap align-items-center mb-remove">
										<h3 class="flex-grow-1">Каталог тестов</h3>
										<div class="title-buttons">
											<a href="#" class="link-accent">Добавить урок</a>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-hover table-tests table-sortable">
											<thead>
												<tr>
													<th scope="col"></th>
													<th scope="col">Название</th>
													<th scope="col" class="score">Количество очков</th>
													<th scope="col">Курс</th>
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
													<td>Тест по продукции Karcher</td>
													<td class="score"><span>2713</span></td>
													<td>История Karcher</td>
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
													<td>Тест по продукции Karcher</td>
													<td class="score"><span>2713</span></td>
													<td>История Karcher</td>
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
													<td>Тест по продукции Karcher</td>
													<td class="score"><span>2713</span></td>
													<td>История Karcher</td>
													<td><span class="status-icon status-icon_3"></span></td>
									
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
					<div class="tab-pane fade show active" id="draft" role="tabpanel" aria-labelledby="home-tab">

					</div>
					<div class="tab-pane fade show active" id="published" role="tabpanel" aria-labelledby="home-tab">

					</div>
					<div class="tab-pane fade show active" id="archive" role="tabpanel" aria-labelledby="home-tab">

					</div>
				</div>


			</div>
		</main>
	</div>
</div>



<div class="overlay"></div>
<!--  -->


<? include('block-footer.php'); ?>