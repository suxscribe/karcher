<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>


		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1"><a href="" class="btn-back icon-ic_back"></a> Создание теста</h1>
				<div class="title-buttons">
					<a href="#" class="btn btn-blue">Сохранить</a>
					<a href="#" class="btn btn-grey">Отмена</a>
				</div>

			</div>
			<div id="main-content">

				
				<div class="test-create panel-box">
					<div class="panel-box-header">
						<h3>Общая информация</h3>

					</div>

					<div class="panel-box-inner">

						<form class="" action="/">
							<div class="form-group">
								<label class="form-text text-muted" for="input-test-name">Название теста*</label>
								<input type="text" class="form-control fl-input" id="input-test-name" required="" placeholder="Название теста">
							</div>

							<div class="form-group">
								<label class="form-text text-muted" for="input-test-points">Максимальное количество очков*</label>
								<input type="text" class="form-control" id="input-test-points" placeholder="Количество очков успешного прохождения урока" required="">
							</div>
							<div class="form-group">
								<label class="form-text text-muted" for="input-test-points">Коэффициент регресса*</label>
								<input type="text" class="form-control" id="input-test-points" placeholder="Коэффициент регресса" required="">
							</div>
							<div class="form-group">
								<label class="form-text text-muted" for="input-test-points">Порог прохождения*</label>
								<input type="text" class="form-control" id="input-test-points" placeholder="Порог прохождения" required="">
							</div>

							<div class="mb-4">
								<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="testCheckbox2">
								  <label class="custom-control-label" for="testCheckbox2">Тест по итогам прохождения уровня</label>
								</div>
							</div>
							<div class="form-group ">
								<label for="select-level" class="form-text">Переход с уровня*</label>
								<select id="select-level" class="custom-select">
									<option value="">Уровень</option>
									<option value="products">Продвинутый</option>
									<option value="value2">Продвинутый</option>
									<option value="value3">Продвинутый</option>
									<option value="value4">Продвинутый</option>
								</select>
							</div>


							<div class="form-group">
								<label class="form-text text-muted" for="input-test-name">Файл теста*</label>
								<div class="form-file form-file_small d-flex align-items-center">
									<div class="form-file-label">
										<img src="img/ic_attach_file_24px.svg" width="22" alt=""> ЗАГРУЗИТЬ ФАЙЛ
									</div>
									<div class="form-tip" data-toggle="tooltip" data-placement="right" title="Всплывающая подсказка">

									</div>
								</div>
							</div> 


						</form>

					</div>

				</div>



			</div>
		</main>
	</div>
</div>



<div class="overlay"></div>
<!--  -->


<? include('block-footer.php'); ?>