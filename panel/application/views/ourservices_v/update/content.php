<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Hizmet Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post"
                    action="<?php echo base_url("ourservices/update/$item->id"); ?>" enctype="multipart/form-data">
                    <input id="id" name="id" type="hidden" value="<?=$item->id?>">
                    <div class="form-group">
                        <label for="sira">Sıra</label>
                        <input type="number" class="form-control form-control-sm" min="0" name="sira" id="sira"
                            value="<?=$item->sira?>">
                    </div>
                    <div class="form-group">
                        <label for="adi">Başlık</label>
                        <input type="text" class="form-control form-control-sm" name="adi" id="adi"
                            value="<?=$item->adi?>">
                    </div>
                    <!--
					<div class="form-group">
						<label for="icon">Hizmet İcon <a target="_blank" href="https://fontawesome.com/icons?d=gallery">İconlar</a></label>
						<input type="text" class="form-control form-control-sm" name="icon" id="icon" value="" />
					</div>
					
					-->
                    <div class="form-group">
                        <div class="card-header">
                            Hizmet Resimleri
                        </div>
                        <input type="file" name="hizmetler" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <div class="col-md-6 col-sm-6">
                                <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                            </div>
                        </div>

                    </div>
                   <div class="wrap">
                 
                   <div class="card mb-4">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="maxlength-textarea">Açıklama</label>
                                <textarea id="aciklama" name="aciklama" class="form-control"
                                    maxlength="260" rows="4"><?=$item->aciklama?></textarea>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="maxlength-textarea">Seo</label>
                                <textarea id="seo" name="seo" class="form-control"
                                    maxlength="260" rows="4"><?=$item->seo?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-icon-text btn-sm"> Güncelle </button>
                        <a href="<?php echo base_url("ourservices"); ?>"></a>
                </form>
            </div>           
     
    </div>

</div>
</div>