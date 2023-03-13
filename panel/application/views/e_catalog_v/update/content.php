<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Katalog Ekle
        </h4>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="<?php echo base_url("e_catalog/update/$item->id")?>"
                            enctype="multipart/form-data">
                            <input id="id" name="id" type="hidden" value="">
                            <div class="form-group">
                                <label for="sira">Sıra</label>
                                <input type="text" class="form-control form-control-sm" name="sira" id="sira" value="<?=$item->sira?>">
                            </div>
                            <div class="form-group">
                                <label for="adi">Başlık</label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="<?=$item->adi?>">
                            </div>

                            <div class="form-group row col-md-4">
                                <label>Kapak Görseli</label>
                                <div class="form-group">
                                    <input type="file" name="resim" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="thumbnail white"><img src="<?php echo base_url('uploads'); ?>/e_catalog_v/<?php echo $item->resim; ?>" alt="..."></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-4">
                                <label>Dosya</label>
                                <div class="form-group">
                                    <input type="file" name="dosya" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="thumbnail white"><img src="<?php echo base_url('uploads'); ?>/e_catalog_v/<?php echo $item->dosya; ?>" alt="..."></a>
                                        </div>
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
                            <div class="card mb-4">                                
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="maxlength-textarea">Seo</label>
                                        <textarea id="seo" name="seo" class="form-control" maxlength="260"
                                            rows="4"><?=$item->seo?></textarea>
                                    </div>
                                </div>
                            </div>                       
               

                            <button type="submit" name="referans_ekle" class="btn btn-primary btn-icon-text btn-sm">
                                <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                KAYDET
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        </form>
    </div>
</div>

</div>
</div>