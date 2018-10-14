<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1">Каталог курсов</h1>
				<div class="main-header-buttons">
					<a href="#" class="btn btn-blue">Создать курс</a>
				</div>
			</div>
			<div id="main-content">

				<ul class="nav tabs-line" id="course-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="home" aria-selected="true">Все</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="draft-tab" data-toggle="tab" href="#draft" role="tab" aria-controls="profile" aria-selected="false">Черновики</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="published-tab" data-toggle="tab" href="#published" role="tab" aria-controls="contact" aria-selected="false">Опубликованные</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="archive-tab" data-toggle="tab" href="#archive" role="tab" aria-controls="contact" aria-selected="false">В архиве</a>
					</li>
				</ul>
				<div class="tab-content" id="course-tabs-content">
					<div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">

						<div class="row">
							<div class="col-lg-3 d-lg-block filter-pane">
								<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3">Фильтры</div></div>
								<a href="javascript:;" class="filter-close d-lg-none"></a>
								<div class="filter-form">
									<div class="filter-header d-sm-none d-lg-block">Фильтр</div>
									<form class="kform">
										<div>
											<label for="title">Поиск по названию курса</label>
											<input type="text" id="title" class="form-control" placeholder="Поиск по названию курса">
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

								<div class="course-list">
									<div class="course-card">
										<div class="course-img">
											<img src="img/cordless.jpg" class="d-none d-md-block">
											<img src="img/carpet.png" class="d-md-none">
										</div>
										<div class="course-info">
											<div>
												<div class="rubric">
													Техника для наружной уборки
												</div>
												<div class="title">
													Бытовая техника Karcher
												</div>
												<div class="description">
													Данный курс позволит познакомиться с историей компании Karcher, основными принципами работы в компании. Вы сможете узнать всю линейку продукции Karcher.
												</div>
											</div>
											<div class="course-bottom">
												<div class="cb-left">
													<span class="lessons">3 урока</span>
													<span class="score">65 очков</span>
													<span class="level junior">Начальный<span class="d-none d-md-inline"> уровень</span></span>
												</div>
												<a href="javascript:;" class="more">Подробнее</a>
											</div>
										</div>
									</div>
									
									<div class="course-card">
										<div class="course-img">
											<img src="img/cordless.jpg" class="d-none d-md-block">
											<img src="img/carpet.png" class="d-md-none">
										</div>
										<div class="course-info">
											<div>
												<div class="rubric">
													Техника для наружной уборки
												</div>
												<div class="title">
													Бытовая техника Karcher
												</div>
												<div class="description">
													Данный курс позволит познакомиться с историей компании Karcher, основными принципами работы в компании. Вы сможете узнать всю линейку продукции Karcher.
												</div>
											</div>
											<div class="course-bottom">
												<div class="cb-left">
													<span class="lessons">3 урока</span>
													<span class="score">65 очков</span>
													<span class="level intermediate">Продвинутый<span class="d-none d-md-inline"> уровень</span></span>
												</div>
												<a href="javascript:;" class="more">Подробнее</a>
											</div>
										</div>
									</div>
									
									<div class="course-card">
										<div class="course-img">
											<img src="img/cordless.jpg" class="d-none d-md-block">
											<img src="img/carpet.png" class="d-md-none">
										</div>
										<div class="course-info">
											<div>
												<div class="rubric">
													Техника для наружной уборки
												</div>
												<div class="title">
													Бытовая техника Karcher
												</div>
												<div class="description">
													Данный курс позволит познакомиться с историей компании Karcher, основными принципами работы в компании. Вы сможете узнать всю линейку продукции Karcher.
												</div>
											</div>
											<div class="course-bottom">
												<div class="cb-left">
													<span class="lessons">3 урока</span>
													<span class="score">65 очков</span>
													<span class="level expert">Экспертный<span class="d-none d-md-inline"> уровень</span></span>
												</div>
												<a href="javascript:;" class="more">Подробнее</a>
											</div>
										</div>
									</div>
									
									<div class="course-card">
										<div class="course-img">
											<img src="img/cordless.jpg" class="d-none d-md-block">
											<img src="img/carpet.png" class="d-md-none">
										</div>
										<div class="course-info">
											<div>
												<div class="rubric">
													Техника для наружной уборки
												</div>
												<div class="title">
													Бытовая техника Karcher
												</div>
												<div class="description">
													Данный курс позволит познакомиться с историей компании Karcher, основными принципами работы в компании. Вы сможете узнать всю линейку продукции Karcher.
												</div>
											</div>
											<div class="course-bottom">
												<div class="cb-left">
													<span class="lessons">3 урока</span>
													<span class="score">65 очков</span>
													<span class="level junior">Начальный<span class="d-none d-md-inline"> уровень</span></span>
												</div>
												<a href="javascript:;" class="more">Подробнее</a>
											</div>
										</div>
									</div>
									
									<div class="course-card">
										<div class="course-img">
											<img src="img/cordless.jpg" class="d-none d-md-block">
											<img src="img/carpet.png" class="d-md-none">
										</div>
										<div class="course-info">
											<div>
												<div class="rubric">
													Техника для наружной уборки
												</div>
												<div class="title">
													Бытовая техника Karcher
												</div>
												<div class="description">
													Данный курс позволит познакомиться с историей компании Karcher, основными принципами работы в компании. Вы сможете узнать всю линейку продукции Karcher.
												</div>
											</div>
											<div class="course-bottom">
												<div class="cb-left">
													<span class="lessons">3 урока</span>
													<span class="score">65 очков</span>
													<span class="level junior">Начальный<span class="d-none d-md-inline"> уровень</span></span>
												</div>
												<a href="javascript:;" class="more">Подробнее</a>
											</div>
										</div>
									</div>
									
									<div class="course-card">
										<div class="course-img">
											<img src="img/cordless.jpg" class="d-none d-md-block">
											<img src="img/carpet.png" class="d-md-none">
										</div>
										<div class="course-info">
											<div>
												<div class="rubric">
													Техника для наружной уборки
												</div>
												<div class="title">
													Бытовая техника Karcher
												</div>
												<div class="description">
													Данный курс позволит познакомиться с историей компании Karcher, основными принципами работы в компании. Вы сможете узнать всю линейку продукции Karcher.
												</div>
											</div>
											<div class="course-bottom">
												<div class="cb-left">
													<span class="lessons">3 урока</span>
													<span class="score">65 очков</span>
													<span class="level junior">Начальный<span class="d-none d-md-inline"> уровень</span></span>
												</div>
												<a href="javascript:;" class="more">Подробнее</a>
											</div>
										</div>
									</div>
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