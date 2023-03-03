<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Kategori Ekle
        </h4>
        <div class="card">
			<div class="card-body">
				<form class="forms-sample" method="post" action="../_class/yonetim_islem.php" enctype="multipart/form-data">
				<input id="id" name="id" type="hidden" value="">
					<div class="form-group">
						<label for="sira">Sıra</label>
						<input type="number" min="0" class="form-control form-control-sm" name="sira" id="sira" value="">
					</div>
					<div class="form-group">
						<label for="ustid">Üst Kategori Seç</label>
						<select class="js-example-basic-single form-control-sm select2-hidden-accessible" name="ustid" id="ustid" required="" style="width:100%" tabindex="-1" aria-hidden="true">
						<option value="0">Üst Kategori</option>
						<option value="41">Ürünler</option>						</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ustid-container"><span class="select2-selection__rendered" id="select2-ustid-container" title="Üst Kategori">Üst Kategori</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
					</div>
					<div class="form-group">
						<label for="adi">Başlık</label>
						<input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
					</div>					
										<div class="form-group row col-md-6">
					<label>Listeleme Görseli</label>
						<input type="file" name="kapak" class="file-upload-default">
						<div class="input-group col-xs-12">
							
						</div>
					</div>	
					<div class="card mb-4">
						<div class="card-header">
							SEO AYARLARI
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="maxlength-textarea">Sayfa Açıklama (description)</label>
								<textarea id="maxlength-textarea" name="description" class="form-control" maxlength="260" rows="4"></textarea>
							</div>
														
						</div>
					</div>
					<div class="form-group mb-2">						
												<label class="switch">
							<input type="checkbox" name="durum" id="durum" value="1" checked="">
							<span class="slider"></span>
						</label>
												<label class="d-inline-block" style="line-height: 34px;" for="durum">Durum</label>						
					</div>
					<div class="form-group mb-2">						
												<label class="switch">
							<input type="checkbox" name="anasayfa" id="anasayfa" value="1" checked="">
							<span class="slider"></span>
						</label>
							
						<label class="d-inline-block" style="line-height: 34px;" for="anasayfa">Anasayfa'da Gözüksün mü ?</label>
					</div>
					<div class="form-group">
										<button type="submit" name="urun_kategori_ekle" class="btn btn-primary btn-icon-text btn-sm">
						<i class="mdi mdi-file-check btn-icon-prepend"></i>
						KAYDET
					</button>
										</div>
				</form>
			</div>
		</div>

    </div>
</div>