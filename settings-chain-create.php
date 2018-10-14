<? include('block-head.php'); ?>


<div class="wrapper">
	<!-- Sidebar  -->
	<? include('block-sidebar.php'); ?>

	<!-- Page Content  -->
	<div id="content">

		<? include('block-header.php'); ?>

		<main class="">
			<div class="title-wrap d-flex flex-wrap align-items-center">
				<h1 class="flex-grow-1"><a href="" class="btn-back icon-ic_back"></a> Добавление торговой сети</h1>


			</div>
			<div id="main-content">

				<div class="chain-create panel-496 panel-box">
					<div class="panel-box-header">
						<h3>Общая информация</h3>

					</div>

					<div class="panel-box-inner">

						<form class="" action="/">
							<div class="form-group">
								<label class="form-text text-muted" for="input-chain-name">Название *</label>
								<input type="text" class="form-control fl-input" id="input-chain-name" required="" placeholder="Название торговой сети">
							</div>


							<div class="form-group mb-4">
								<label class="form-text text-muted" for="input-chain-desc">Описание *</label>
								<textarea name="chain-description" class="form-control" id="input-chain-desc" required rows="4"></textarea>
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