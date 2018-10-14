<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1">Уведомления</h1>
				<div class="main-header-buttons">
					<a href="#" class="btn btn-blue">Настройка уведомлений</a>
					<a href="#" class="btn btn-grey">Отметить все как прочитанное</a>
				</div>
			</div>
			<div id="main-content">

				<ul class="nav tabs-line" id="notifications-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="notifications-all-tab" data-toggle="tab" href="#notifications-all" role="tablist" aria-controls="users" aria-selected="true">Все</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="notifications-unread-tab" data-toggle="tab" href="#notifications-unread" role="tab" aria-controls="roles" aria-selected="false">Непрочитанные</a>
					</li>
					
				</ul>
				<div class="tab-content" id="notifications-tabs-content">
					<div class="tab-pane fade show active" id="notifications-all" role="tabpanel">


						<div class="row">
							<div class="col-lg-3 d-lg-block filter-pane">
								<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3">Фильтры</div></div>
								<a href="javascript:;" class="filter-close d-lg-none"></a>
								<div class="filter-form">
									<div class="filter-header d-sm-none d-lg-block">Фильтр</div>
									<form class="kform">
										<div>
											<label for="notification-keyword">Ключевое слово</label>
											<input type="text" id="notification-keyword" class="form-control" placeholder="Ключевое слово">
										</div>
										<div>
											<label for="filter-date-from">Дата поступления уведомления, от</label>
	                    <input type="text" class="form-control form-datetimepicker" id="filter-date-from" data-toggle="datetimepicker" data-target="#filter-date-from"/>
										</div>
										<div>
											<label for="filter-date-to">Дата поступления уведомления, до</label>
	                    <input type="text" class="form-control form-datetimepicker" id="filter-date-to" data-toggle="datetimepicker" data-target="#filter-date-to"/>
										</div>

										<div class="kform-actions">
											<input type="submit" class="submit-text" value="Применить" />
											<a class="clear" href="javascript:;">Сбросить</a>
										</div>
									</form>
								</div>

								<!-- Показать модал -->
								<button type="button" class="btn btn-blue mt-4" data-toggle="modal" data-target="#modal-email">
								  Открыть модальное окно
								</button>

							</div>
							<div class="col-lg-9 col-sm-12">
								<div class="filter-pl d-lg-none">
									<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3"><a class="filter-btn" href="javascript:;">Фильтры</a></div></div>
									<a href="javascript:;" class="clear">Сбросить</a>
								</div>

								<div class="panel-box">
									<div class="table-responsive">
										<table class="table table-hover table-sortable">
											<thead>
												<tr>
													<th scope="col"></th>
													<th scope="col">Дата</th>
													<th scope="col">Тема</th>										
												</tr>
											</thead>
											<tbody>
												<tr class="unread">
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
													<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>
													<td>Создан новый курс</td>
												</tr>
												<tr class="unread">
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
													<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>
													<td>Заказ требует обработки</td>
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
													<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>
													<td>Поступило новое обращение</td>
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
													<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>
													<td>Создан новый курс</td>
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
													<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>
													<td>Создан новый курс</td>
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
					<div class="tab-pane fade show " id="notifications-unread" role="tabpanel">
						<div class="panel-box">
							
						</div>
					</div>

				</div>

			</div>
		</main>
	</div>
</div>



<div class="overlay"></div>
<!--  -->

<!-- Modal -->
<div class="modal fade" id="modal-email" tabindex="-1" role="dialog" aria-labelledby="modal-email-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title" id="modal-email-label">Настройка уведомлений</div>

      </div>
      <div class="modal-body">
      	<div class="custom-control custom-checkbox">
      	  <input type="checkbox" class="custom-control-input" id="email-cleckbox">
      	  <label class="custom-control-label" for="email-cleckbox">Я хочу, чтобы уведомления дублировались на мой адрес электронной почты ivanov@karcher.ru</label>
      	</div>						      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-blue" data-dismiss="modal">Подтвердить</button>
        <button type="button" class="btn btn-grey" data-dismiss="modal">Отмена</button>
      </div>
    </div>
  </div>
</div>

<? include('block-footer.php'); ?>