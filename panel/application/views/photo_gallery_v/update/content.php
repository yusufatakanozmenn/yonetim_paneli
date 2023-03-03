<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Video Düzenle</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post"
                            action="<?php echo base_url("video/update/$item->id"); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="adi">Başlık</label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi"
                                    value="<?php echo $item->adi ?>">
                            </div>
                            <input id="id" name="id" type="hidden" value="">
                          
                           
                            <div class="form-group">
                                <label>Kapak Görseli</label>

                                <div class="input-group col-xs-12">
                                    <input type="file" name="kapak" class="file-upload-default">
                                    <div class="input-group col-md-6">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="thumbnail white"><img
                                                    src="<?php echo base_url('uploads'); ?>/video_v/<?php echo $item->kapak; ?>"
                                                    alt="..."></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="maxlength-textarea">İçerik</label>
                                <textarea id="maxlength-textarea" name="description" class="form-control"
                                    maxlength="260" rows="4"><?php echo $item->aciklama ?></textarea>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header">
                                    SEO AYARLARI
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="maxlength-textarea">Sayfa Açıklama (description)</label>
                                        <textarea id="maxlength-textarea" name="seo" class="form-control"
                                            maxlength="260" rows="4"><?php echo $item->description ?></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn rounded mw-md btn-success">
                                    GÜNCELLE </button>
                                <a href="<?php echo base_url("video/update"); ?>"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>