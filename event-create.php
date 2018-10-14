<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1"><a href="" class="btn-back icon-ic_back"></a> Создание мероприятия</h1>
				<div class="title-buttons">
					<a href="#" class="btn btn-blue">Сохранить</a>
					<a href="#" class="btn btn-grey">Отмена</a>
				</div>
			</div>
			<div id="main-content">



				<div class="event-create panel-box">
					<div class="panel-box-header">
						<h3>Общая информация</h3>
					</div>

					<div class="row row-divider panel-box-inner">
						<div class="col-md-4">

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
									<label class="form-text text-muted" for="input-event-name">Название мероприятия*</label>
									<input type="text" class="form-control fl-input" id="input-event-name"  placeholder="Название мероприятия">
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

								<div class="row">
									<div class="col col-md-6">
										<div class="form-group">
											<label class="form-text text-muted" for="input-event-date-from">Дата начала*</label>
											<input type="text" class="form-control form-datetimepicker" id="input-event-date-from" data-toggle="datetimepicker" data-target="#input-event-date-from"/>
										</div>
									</div>
									<div class="col col-md-6">
										<div class="form-group">
											<label class="form-text text-muted" for="input-event-date-to">Дата окончания*</label>
											<input type="text" class="form-control form-datetimepicker" id="input-event-date-to" data-toggle="datetimepicker" data-target="#input-event-date-to"/>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="form-text text-muted" for="input-event-place">Место проведения*</label>
									<input type="text" class="form-control fl-input" id="input-event-place" required  placeholder="Место проведения">
								</div>

								<div class="form-group">
									<label class="form-text text-muted" for="input-event-desc">Описание*</label>
									<textarea name="description" class="form-control" id="input-event-desc" rows="4"></textarea>

								</div>

								<div class="form-group ">
									<label for="select-city" class="form-text">Города, принимающие участие *</label>
									<select id="select-city" class="custom-select">
										<option value="">Выберите город</option>
										<option value="value1">Москва</option>
										<option value="value2">Город</option>
										<option value="value3">Город</option>
										<option value="value4">Город</option>
									</select>
								</div>
								<div class="text-right">
									<a href="#" class="link-accent">Добавить город</a>
								</div>
								
							</form>
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