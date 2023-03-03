<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Kategori Düzenle</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post"
                            action="<?php echo base_url("product_category/update/$item->id"); ?>"
                            enctype="multipart/form-data">
                            <input id="id" name="id" type="hidden" value="">
                            <div class="form-group">
                                <label for="ustid">Üst Kategori Seç</label>
                                <select class="form-control form-control-sm" name="ustid"
                                    value="<?php echo $item->pbirim ?>">
                                    <option selected style="display:none;">
                                        <?php echo $item->pbirim ?>
                                    </option>
                                    <option>
                                        Üst Kategori
                                    </option>
                                    <option>Ürünler</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="adi">Başlık</label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="<?php echo $item->adi ?>">
                            </div>
                            <div class="form-group">
                                <label for="sira">Sıra</label>
                                <input type="number" min="0" class="form-control form-control-sm" name="sira" id="sira"
                                    value="<?php echo $item->sira ?>">
                            </div>
                            <div class="form-group">
                                <label>Listeleme Görseli</label>
                                <input type="file" name="kapak" class="file-upload-default">
                                <div class="input-group col-xs-12">

                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="card-header">
                                    SEO AYARLARI
                                </div>
                                <div class="card-body">
                                    <div class="form-groups">
                                        <label for="maxlength-textarea">Sayfa Açıklama (description)</label>
                                        <textarea id="maxlength-textarea" name="description" class="form-control"
                                            maxlength="260" rows="4"></textarea>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="urun_kategori_ekle"
                                    class="btn btn-primary btn-icon-text btn-sm">
                                    <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                    KAYDET
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>