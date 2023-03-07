<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Soru Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="<?php echo base_url("sss/update/$item->id")?>"
                    enctype="multipart/form-data">
                    <input id="id" name="id" type="hidden" value="<?= $item->id ?>">
                    <div class="form-group">
                        <label for="sira">Sıra</label>
                        <input type="number" class="form-control form-control-sm" min="0" name="sira" id="sira"
                            value="<?= $item->sira ?>">
                    </div>
                    <div class="form-group">
                        <label for="adi">Başlık</label>
                        <input type="text" class="form-control form-control-sm" name="adi" id="adi"
                            value="<?= $item->adi ?>">
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
                        <input type="file" name="firma_footerlogo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <div class="col-md-6 col-sm-6">
                                <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="switch">
                                <input type="checkbox" name="durum" id="durum" value="<?= $item->durum ?>" checked="">
                                <span class="slider"></span>
                            </label>
                            <label class="d-inline-block" style="line-height: 34px;" for="durum">Durum</label>
                        </div>
                       
                    </div>
                    <div class="card-body">
                        <div name="aciklama" id="summernote">
                            <label for="maxlength-textarea">Açıklama</label>
                            <textarea id="maxlength-textarea" value="<?= $item->aciklama ?>" class="form-control"
                                maxlength="260" rows="4"></textarea>
                        </div>

                    </div>
                    <div id="summernote"></div>
                    <div class="card mb-4">
                        <div class="card-header">
                            SEO AYARLARI
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="maxlength-textarea">Sayfa Açıklama (description)</label>
                                <textarea id="maxlength-textarea" name="description" value="<?= $item->seo ?>"
                                    class="form-control" maxlength="260" rows="4"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-icon-text btn-sm"> GÖNDER </button>
                        <a href="<?php echo base_url("sss"); ?>"></a>
                </form>
            </div>
            </form>
        </div>
    </div>

</div>
</div>