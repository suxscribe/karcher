<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1"><a href="" class="btn-back icon-ic_back"></a> Создание курса</h1>
				<div class="title-buttons">
					<a href="#" class="btn btn-blue">Сохранить</a>
					<a href="#" class="btn btn-grey">Отмена</a>
				</div>
			</div>
			<div id="main-content">

				<ul class="nav tabs-line" id="course-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="course-common-tab" data-toggle="tab" href="#course-common" role="tab" aria-controls="course-common" aria-selected="true">Общая информация</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="course-lessons-tab" data-toggle="tab" href="#course-lessons" role="tab" aria-controls="course-lessons" aria-selected="false">Список уроков</a>
					</li>
				</ul>
				<div class="tab-content" id="course-tabs-content">
					<div class="tab-pane fade show active" id="course-common" role="tabpanel" aria-labelledby="course-common">
						
						<div class="course-create panel-box">
							<div class="panel-box-header">
								<h3>Общая информация</h3>
							</div>

							<div class="row row-divider panel-box-inner">
								<div class="col-md-4">

										<!-- <form action="/file-upload" class="dropzone">
										  <div class="fallback">
										    <input name="file" type="file" multiple />
										  </div>
										</form> -->

										<div class="form-file">
											<div class="form-file-label">
												<img src="img/ic_attach_file_24px.svg" width="22" alt=""> ЗАГРУЗИТЬ ФАЙЛ
											</div>
										</div>
										<div class="form-file-note">
											Необходимо загрузить изображение в формете *jpg, *png. Разрешение загружаемого изображения 400х200
										</div>

									</div>
									<div class="col-md-8">
										<form class="" action="/">
											<div class="form-group">
												<label class="form-text text-muted" for="input-course-name">Название*</label>
												<input type="text" class="form-control fl-input" id="input-course-name"  placeholder="Название курса">
											</div>
											<div class="form-group ">
												<label for="select-section" class="form-text">Рубрика*</label>
												<select id="select-section" class="custom-select">
													<option value="">Рубрика</option>
													<option value="products">Продукция Karcher</option>
													<option value="value2">Продукция Karcher</option>
													<option value="value3">Продукция Karcher</option>
													<option value="value4">Продукция Karcher</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-text text-muted" for="input-course-desc">Описание*</label>
												<textarea name="description" class="form-control" id="input-course-desc" rows="4"></textarea>

											</div>
											<div class="form-group ">
												<label for="select-level" class="form-text">Уровень*</label>
												<select id="select-level" class="custom-select">
													<option value="">Уровень</option>
													<option value="products">Продукция Karcher</option>
													<option value="value2">Продукция Karcher</option>
													<option value="value3">Продукция Karcher</option>
													<option value="value4">Продукция Karcher</option>
												</select>
											</div>
											<div class="form-group ">
												<label for="select-test" class="form-text">Финальный тест*</label>
												<select id="select-test" class="custom-select">
													<option value="">Финальный тест</option>
													<option value="products">Продукция Karcher</option>
													<option value="value2">Продукция Karcher</option>
													<option value="value3">Продукция Karcher</option>
													<option value="value4">Продукция Karcher</option>
												</select>
											</div>
											<div class="text-right">
												<a href="#" class="link-accent">Создать тест</a>
											</div>
											<div class="form-group">
												<label class="form-text text-muted" for="input-course-points">Количество очков успешного прохождения курса*</label>
												<input type="text" class="form-control" id="input-course-points" placeholder="Количество очков успешного прохождения курса">
											</div>
										</form>
									</div>
								</div>

							</div>

						</div>
						<div class="tab-pane fade " id="course-lessons" role="tabpanel" aria-labelledby="course-lessons">

							<div class="panel-box">
								<div class="panel-box-header d-flex flex-wrap align-items-center">
									<h3 class="flex-grow-1">Список уроков</h3>
									<div class="title-buttons">
										<a href="#" class="link-accent">Добавить урок</a>
									</div>
								</div>
								<div>
									<div class="table-responsive">
										<table class="table table-hover table-lessons table-sortable">
											<thead>
												<tr>
													<th scope="col"></th>
													<th scope="col">№</th>
													<th scope="col">Название</th>
													<th scope="col" class="score">Количество очков</th>
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
													<td>1</td>
													<td>О компании Karcher</td>
													<td class="score"><span>2713</span></td>
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
													<td>2</td>
													<td>Бытовая техника Karcher</td>
													<td class="score"><span>2713</span></td>
												</tr>
												<tr>
													<td>
														<div class="dropdown">
															<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRow3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

															<div class="dropdown-menu" aria-labelledby="dropdownMenuRow3">
																<a class="dropdown-item link-icon" href="#"><i class="icon-ic_help_outline_16px"></i> Информация</a>
																<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
																<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
															</div>
														</div>
													</td>
													<td>3</td>
													<td>История Karcher</td>
													<td class="score"><span>2713</span></td>
												</tr>
												<tr>
													<td>
														<div class="dropdown">
															<a class="btn-handle dropdown-toggle" href="#" role="button" id="dropdownMenuRow4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

															<div class="dropdown-menu" aria-labelledby="dropdownMenuRow4">
																<a class="dropdown-item link-icon" href="#"><i class="icon-ic_help_outline_16px"></i> Информация</a>
																<a class="dropdown-item link-icon" href="#"><i class="icon-ic_edit_24px"></i> Редактировать </a>
																<a class="dropdown-item link-icon" href="#"><i class="icon-delete-24px"></i> Удалить</a>
															</div>
														</div>
													</td>
													<td>4</td>
													<td>Финальное тестирование</td>
													<td class="score"><span>2713</span></td>
												</tr>

											</tbody>
										</table>
									</div>
									<div class="total-score">Всего очков: <span class="score">220</span></div>
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