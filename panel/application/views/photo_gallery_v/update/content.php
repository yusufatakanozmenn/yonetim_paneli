<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Galeri Düzenle</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post"
                            action="<?php echo base_url("photo_gallery/update/$item->id"); ?>"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="adi">Başlık</label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi"
                                    value="<?php echo $item->adi ?>">
                            </div>
                            <input id="id" name="id" type="hidden" value="">


                            <div class="form-group">
                                <label>Galeri Kapak</label>
                                <input type="file" name="resim" class="file-upload-default">
                                <div class="input-group col-xs-6">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="#" class="thumbnail white">
                                            <img src="<?php echo base_url('uploads'); ?>/photo_gallery_v/<?php echo $item->resim; ?>"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="maxlength-textarea">İçerik</label>
                                <textarea id="maxlength-textarea" name="aciklama" class="form-control" maxlength="260"
                                    rows="4"><?php echo $item->aciklama ?></textarea>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header">
                                    SEO AYARLARI
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="maxlength-textarea">Sayfa Açıklama (description)</label>
                                        <textarea id="maxlength-textarea" name="description" class="form-control"
                                            maxlength="260" rows="4"><?php echo $item->description ?></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn rounded mw-md btn-success">
                                    GÜNCELLE </button>
                                <a href="<?php echo base_url("photo_gallery/update"); ?>"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>