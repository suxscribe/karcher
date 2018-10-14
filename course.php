<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1"><a href="" class="btn-back icon-ic_back"></a> Курс «Продукция Karcher»</h1>
				<div class="title-buttons">
					<a href="#" class="btn btn-blue">Редактировать</a>
					<a href="#" class="btn btn-grey">В архив</a>
				</div>
			</div>
			<div id="main-content">

				<div class="course-detail panel-box mb-4">
					<div class="panel-box-header d-flex flex-wrap align-items-center">
						<h3 class="flex-grow-1">Общая информация</h3>
						<div class="title-buttons">
							<span class="icon-check"></span>
						</div>
					</div>

					<div class="row row-divider panel-box-inner">
						<div class="col-md-3">

							<div class="course-image">
								<img src="img/course-image.jpg" alt="">
							</div>


						</div>
						<div class="col-md-9">
							<div class="subtitle">Название</div>
							<div class="course-name mb-4">Продукция Karcher</div>

							<div class="subtitle">Рубрика</div>
							<div class="course-section mb-4">Садовая техника</div>

							<div class="subtitle">Описание</div>
							<div class="course-desc mb-4">Данный курс позволит познакомиться с историей компании Karcher,  основными принципами работы в компании.
Вы сможете узнать всю линейку продукции Karcher.</div>

							<hr>

							<div class="row">
								<div class="col col-xs-4 course-spec">
									<div class="subtitle">Уровень</div>
									<div class="">Экспертный</div>
								</div>
								<div class="col col-xs-4 course-spec">
									<div class="subtitle">Всего очков</div>
									<div class="">220</div>
								</div>
								<div class="col col-xs-4 course-spec">
									<div class="subtitle">Порог прохождения</div>
									<div class="">200</div>
								</div>
							</div>

						</div>
					</div>

				</div>

				<div class="panel-box">
					<div class="panel-box-header d-flex flex-wrap align-items-center mb-remove">
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
		</main>
	</div>
</div>



<div class="overlay"></div>
<!--  -->


<? include('block-footer.php'); ?>