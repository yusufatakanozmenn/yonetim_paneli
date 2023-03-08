<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
             Belge Güncelle
        </h4>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="post"
                            action="<?php echo base_url("document/update/$item->id"); ?>" enctype="multipart/form-data">
                            <input id="id" name="id" type="hidden" value="">
                            <div class="form-group">
                                <label for="sira">Sıra</label>
                                <input type="text" class="form-control form-control-sm" name="sira" id="sira"
                                    value="<?=$item->sira?>">
                            </div>
                            <div class="form-group">
                                <label for="adi">Başlık</label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi"
                                    value="<?=$item->adi?>">
                            </div>

                            <div class="form-group ">
                                <label>Kapak Görseli</label>
                                <div class="form-group">
                                    <input type="file"  name="kapak_gorsel" class="file-upload-default">                    
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="maxlength-textarea">Seo</label>
                                    <textarea id="seo" name="seo" class="form-control" maxlength="260"
                                        rows="4"><?=$item->seo?></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label class="switch">
                                    <input type="checkbox" name="durum" id="durum" value="1" checked="">
                                    <span class="slider"></span>
                                </label>
                                <label class="d-inline-block" style="line-height: 34px;" for="durum">Durum</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-icon-text btn-sm"> Kaydet </button>
                                <a href="<?php echo base_url("document"); ?>"></a>
                            </div>
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