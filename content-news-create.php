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

			</div>
			<div id="main-content">

						<div class="panel-752 panel-box">
							<div class="panel-box-header">
								<h3>Общая информация</h3>
							</div>

							<div class="row row-divider panel-box-inner mb-4">
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
												<label class="form-text text-muted" for="input-news-name">Заголовок новости *</label>
												<input type="text" class="form-control fl-input" id="input-news-name"  placeholder="Заголовок новости">
											</div>
											<div class="form-group">
												<label class="form-text text-muted" for="input-news-desc">Аннотация новости</label>
												<textarea name="description" class="form-control" id="input-news-desc" rows="4"></textarea>
											</div>

											<div class="form-group">
												<label class="form-text text-muted" for="input-news-publish-date">Дата публикации*</label>
												<input type="text" class="form-control form-datetimepicker" id="input-news-publish-date" data-toggle="datetimepicker" data-target="#input-news-publish-date"/>
											</div>

											<div class="form-group">
												<label class="form-text text-muted" for="input-news-desc">Описание*</label>
												<textarea name="description" class="form-control" id="input-news-desc" rows="4"></textarea>
											</div>

											<div class="form-group">
												<label class="form-text text-muted" for="input-news-text">Текст новости</label>
												<textarea name="news-text" class="form-control" id="input-news-text" rows="6"></textarea>
											</div>

										</form>
									</div>
								</div>
								<div class="form-buttons">
									<a href="#" class="btn btn-blue">Сохранить</a>
									<a href="#" class="btn btn-grey">Отмена</a>
								</div>


							</div>


				</div>
			</main>
		</div>
	</div>



	<div class="overlay"></div>
	<!--  -->


	<? include('block-footer.php'); ?>