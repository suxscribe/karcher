<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1"><a href="" class="btn-back icon-ic_back"></a> Создание товара</h1>
				<div class="title-buttons">
					<a href="#" class="btn btn-blue">Сохранить</a>
					<a href="#" class="btn btn-grey">Отмена</a>
				</div>
			</div>
			<div id="main-content">

				
						
						<div class="course-create panel-box panel-752">
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
												<label class="form-text text-muted" for="shop-name">Наименование товара*</label>
												<input type="text" class="form-control fl-input" id="shop-name"  placeholder="Наименование товара">
											</div>
											
											<div class="form-group">
												<label class="form-text text-muted" for="shop-price">Цена за единицу, очков*</label>
												<input type="text" class="form-control fl-input" id="shop-price"  placeholder="Цена за единицу, очков">

											</div>
											<div class="form-group">
												<label class="form-text text-muted" for="shop-desc">Описание*</label>
												<textarea name="description" class="form-control" id="shop-desc" rows="4"></textarea>

											</div>
											<div class="form-group">
												<label class="form-text text-muted" for="shop-sku">Артикул*</label>
												<input type="text" class="form-control fl-input" id="shop-sku"  placeholder="Артикул">

											</div>
											<div class="mb-4">
												<div class="custom-control custom-checkbox">
												  <input type="checkbox" class="custom-control-input" id="shop-check-new">
												  <label class="custom-control-label" for="shop-check-new">Новинка</label>
												</div>
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