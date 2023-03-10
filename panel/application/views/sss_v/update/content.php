<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Soru Düzenle
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
                  
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="maxlength-textarea">Açıklama</label>
                                <textarea id="aciklama" name="aciklama" class="form-control" maxlength="260"
                                    rows="4"><?= $item->aciklama ?></textarea>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="maxlength-textarea">Seo</label>
                                <textarea id="seo" name="seo" class="form-control" maxlength="260" rows="4"><?= $item->seo?></textarea>
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