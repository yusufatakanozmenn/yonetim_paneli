<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-b-lg">
                    Toplu SMS Gönder
                </h4>

               
						<div class="col-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<form class="forms-sample" method="post" action="../_class/yonetim_islem.php" enctype="multipart/form-data">
					
					<div class="form-group">
						<label for="diger">Harici Telefon Numaraları <small class="text-danger">virgüllerle ayırınız</small></label>
						<textarea id="diger" name="diger" class="form-control" rows="6"></textarea>
					</div>
					<div class="form-group">
						<label for="aciklama">SMS İçeriği</label>
						<textarea name="aciklama" rows="6" class="form-control" id="aciklama"></textarea>
					</div>
					<button type="submit" name="toplu_sms_gonder" class="btn btn-primary btn-icon-text btn-sm">
						<i class="mdi mdi-file-check btn-icon-prepend"></i>
						GÖNDER
					</button>
				</form>
			</div>
		</div>
	</div>
	
						
    <!-- .row -->
                          
    </section><!-- #dash-content -->
</div>