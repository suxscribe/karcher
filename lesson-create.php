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

				
				<div class="lesson-create panel-box">
					<div class="panel-box-header">
						<h3>Общая информация</h3>

					</div>

					<div class="panel-box-inner">

						<form class="" action="/">
							<div class="form-group">
								<label class="form-text text-muted" for="input-lesson-name">Название*</label>
								<input type="text" class="form-control fl-input" id="input-lesson-name" required="" placeholder="Название курса">
							</div>

							<div class="form-group">
								<label class="form-text text-muted" for="input-lesson-name">Файл урока*</label>
								<div class="form-file form-file_small d-flex align-items-center">
									<div class="form-file-label">
										<img src="img/ic_attach_file_24px.svg" width="22" alt=""> ЗАГРУЗИТЬ ФАЙЛ
									</div>
									<div class="form-tip" data-toggle="tooltip" data-placement="right" title="Всплывающая подсказка">

									</div>
								</div>
							</div> 



							<div class="form-group">
								<label class="form-text text-muted" for="input-lesson-points">Количество очков успешного прохождения урока*</label>
								<input type="text" class="form-control" id="input-lesson-points" placeholder="Количество очков успешного прохождения урока" required="">
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