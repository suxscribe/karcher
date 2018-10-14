<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>


	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>


		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1"><a href="" class="btn-back icon-ic_back"></a> Добавление магазина</h1>

			</div>
			<div id="main-content">

				
				<div class="panel-496 panel-box">
					<div class="panel-box-header">
						<h3>Общая информация</h3>

					</div>

					<div class="panel-box-inner">

						<form class="" action="/">
							<div class="form-group">
								<label class="form-text text-muted" for="input-shop-name">Название *</label>
								<input type="text" class="form-control fl-input" id="input-shop-name" required="" placeholder="Название магазина">
							</div>

							<div class="form-group">
								<label class="form-text text-muted" for="input-shop-chain">Торговая сеть *</label>
								<input type="text" class="form-control" id="input-shop-chain" placeholder="Название торговой сети" required="">
							</div>
							<div class="form-group ">
								<label for="select-city" class="form-text">Город *</label>
								<select id="select-city" class="custom-select">
									<option value="">Выберите город</option>
									<option value="moscow">Москва</option>
									<option value="value2">Город</option>
									<option value="value3">Город</option>
									<option value="value4">Город</option>
								</select>
							</div>

							<div class="form-group">
								<label class="form-text text-muted" for="input-shop-points">Адрес *</label>
								<input type="text" class="form-control" id="input-shop-points" placeholder="Адрес" required="">
							</div>

							<div class="form-group mb-4">
								<label class="form-text text-muted" for="input-shop-desc">Описание *</label>
								<textarea name="shop-description" class="form-control" id="input-shop-desc" required rows="4"></textarea>
							</div>

							<div class="form-buttons">
								<a href="#" class="btn btn-blue">Сохранить</a>
								<a href="#" class="btn btn-grey">Отмена</a>
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