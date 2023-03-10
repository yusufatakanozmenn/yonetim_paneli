<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Soru Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="<?php echo base_url("sss/save"); ?>"
                    enctype="multipart/form-data">
                    <input id="id" name="id" type="hidden" value="">
                    <div class="form-group">
                        <label for="sira">Sıra</label>
                        <input type="number" class="form-control form-control-sm" min="0" name="sira" id="sira"
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="adi">Başlık</label>
                        <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                    </div>
                    <!--
					<div class="form-group">
						<label for="icon">Hizmet İcon <a target="_blank" href="https://fontawesome.com/icons?d=gallery">İconlar</a></label>
						<input type="text" class="form-control form-control-sm" name="icon" id="icon" value="" />
					</div>
					
					-->
                  
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="maxlength-textarea">Açıklama</label>
                                <textarea id="aciklama" name="aciklama" class="form-control" maxlength="260"
                                    rows="4"></textarea>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="maxlength-textarea">Seo</label>
                                <textarea id="seo" name="seo" class="form-control" maxlength="260" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn rounded mw-md btn-success "> KAYDET
                        </button>
                        <a href="<?php echo base_url("sss"); ?>"></a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>