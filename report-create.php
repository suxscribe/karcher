<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>


		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1">Формирование отчета</h1>

			</div>
			<div id="main-content">

				
				<div class="panel-496 panel-box">
					<div class="panel-box-header">
						<h3>Общая информация</h3>

					</div>

					<div class="panel-box-inner">

						<form class="" action="/">
							<div class="form-group">
								<label class="form-text text-muted" for="input-report-name">Название отчета *</label>
								<input type="text" class="form-control fl-input" id="input-report-name" required="" placeholder="Название отчета">
							</div>

							<div class="form-group ">
								<label for="select-type" class="form-text">Тип отчета *</label>
								<select id="select-type" class="custom-select">
									<option value="">Выберите тип</option>
									<option value="type1">По торговым сетям</option>
									<option value="type2">Тип</option>
									<option value="type3">Тип</option>
									<option value="type4">Тип</option>
								</select>
							</div>

							<div class="form-group ">
								<label for="select-city" class="form-text">Выберите сеть *</label>
								<select id="select-city" class="custom-select">
									<option value="">Выберите сеть</option>
									<option value="chain1">Сеть номер два</option>
									<option value="chain2">Город</option>
									<option value="chain3">Город</option>
									<option value="chain4">Город</option>
								</select>
							</div>

							<div class="form-group">
								<label class="form-text text-muted" for="input-report-date-from">Период отчета, с *</label>
								<input type="text" class="form-control form-datetimepicker" id="input-report-date-from" data-toggle="datetimepicker" data-target="#input-report-date-from"/>
							</div>
							<div class="form-group mb-4">
								<label class="form-text text-muted" for="input-report-date-to">Период отчета, до *</label>
								<input type="text" class="form-control form-datetimepicker" id="input-report-date-to" data-toggle="datetimepicker" data-target="#input-report-date-to"/>
							</div>

							<div class="form-buttons">
								<a href="#" class="btn btn-blue">Сформировать</a>
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