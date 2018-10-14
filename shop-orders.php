<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>



		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1">Каталог заказов</h1>
				<div class="main-header-buttons">
					
				</div>
			</div>
			<div id="main-content">

				<ul class="nav tabs-line" id="shop-orders-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="orders-pending-tab" data-toggle="tab" href="#orders-pending" role="tablist" aria-controls="users" aria-selected="true">Требует обработки</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="orders-shipping-tab" data-toggle="tab" href="#orders-shipping" role="tab" aria-controls="roles" aria-selected="false">В доставке</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="orders-completed-tab" data-toggle="tab" href="#orders-completed" role="tab" aria-controls="roles" aria-selected="false">Доставлено</a>
					</li>
					
				</ul>
				<div class="tab-content" id="users-tabs-content">
					<div class="tab-pane fade show active" id="orders-pending" role="tabpanel">

						<div class="row">
							<div class="col-lg-3 d-lg-block filter-pane">
								<div class="filter-header-sm d-lg-none"><div class="filter-icon" data-count="3">Фильтры</div></div>
								<a href="javascript:;" class="filter-close d-lg-none"></a>
								<div class="filter-form">
									<div class="filter-header d-sm-none d-lg-block">Фильтр</div>
									<form class="kform">
										<div>
											<label for="order-number">Номер заказа</label>
											<input type="text" id="order-number" class="form-control" placeholder="Номер заказа">
										</div>
										<div>
											<label for="filter-date-from">Дата заказа, от</label>
	                    <input type="text" class="form-control form-datetimepicker" id="filter-date-from" data-toggle="datetimepicker" data-target="#filter-date-from"/>
										</div>
										<div>
											<label for="filter-date-to">Дата заказа, до</label>
	                    <input type="text" class="form-control form-datetimepicker" id="filter-date-to" data-toggle="datetimepicker" data-target="#filter-date-to"/>
										</div>
										<div>
											<label for="price-min">Цена, от</label>
											<input type="text" id="price-min" class="form-control" placeholder="Цена, от">
										</div>
										<div>
											<label for="price-max">Цена, до</label>
											<input type="text" id="price-max" class="form-control" placeholder="Цена, до">
										</div>
										<div>
											<label for="order-shopper">Покупатель</label>
											<select id="order-shopper">
												<option value="order-shopper">Все</option>
												<option value="order-shopper2">Иванова Алла</option>
												<option value="order-shopper3">Иванова Алла</option>
												<option value="order-shopper4">Иванова Алла</option>
											</select>
										</div>
										<div>
											<label for="filter-chain">Сеть магазинов покупателя</label>
											<select id="filter-chain">
												<option value="chain1">Сеть 1</option>
												<option value="chain2">Сеть 2</option>
												<option value="chain3">Сеть 3</option>
												<option value="chain4">Сеть 4</option>
											</select>
										</div>
										<div>
											<label for="city">Город покупателя</label>
											<select id="city">
												<option value="city1">Город 1</option>
												<option value="city2">Город 2</option>
												<option value="city3">Город 3</option>
												<option value="city4">Город 4</option>
											</select>
										</div>
										<div>
											<label for="store">Магазин покупателя</label>
											<select id="store">
												<option value="store1">Магазин 1</option>
												<option value="store2">Магазин 2</option>
												<option value="store3">Магазин 3</option>
												<option value="store4">Магазин 4</option>
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
									<div class="table-responsive">
										<table class="table table-hover table-users table-sortable">
											<thead>
												<tr>
													<th scope="col"></th>
													<th scope="col">Номер заказа / статус</th>
													<th scope="col">Дата оформления</th>
													<th scope="col">Количество очков</th>
													<th scope="col">Покупатель</th>
													
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
													<td>
														<a href="">G 7.10</a>
														<div class="subtitle">Заказано</div>
													</td>													
													<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>

													<td class="score"><span>2713</span></td>

													<td><a href="">Константин Сергеевич Константинопольский</a></td>

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
													<td>
														<a href="">G 7.10</a>
														<div class="subtitle">В доставке</div>
													</td>													
													<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>

													<td class="score"><span>2713</span></td>

													<td><a href="">Константин Сергеевич Константинопольский</a></td>

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
													<td>
														<a href="">G 7.10</a>
														<div class="subtitle">В доставке</div>
													</td>													
													<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>

													<td class="score"><span>2713</span></td>

													<td><a href="">Константин Сергеевич Константинопольский</a></td>

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
													<td>
														<a href="">G 7.10</a>
														<div class="subtitle">Доставлено</div>
													</td>													
													<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>

													<td class="score"><span>2713</span></td>

													<td><a href="">Константин Сергеевич Константинопольский</a></td>

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
													<td>
														<a href="">G 7.10</a>
														<div class="subtitle">Доставлено</div>
													</td>													
													<td>05.07.2018 <span class="text-muted ml-2">11:17:25</span></td>

													<td class="score"><span>2713</span></td>

													<td><a href="">Константин Сергеевич Константинопольский</a></td>

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
					<div class="tab-pane fade show " id="orders-pending" role="tabpanel">
						<div class="panel-box">
							
						</div>
					</div>
					<div class="tab-pane fade show " id="order-shipped" role="tabpanel">
						<div class="panel-box">
							
						</div>
					</div>
					<div class="tab-pane fade show " id="orders-completed" role="tabpanel">
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


<? include('block-footer.php'); ?>