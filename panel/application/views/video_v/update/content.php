<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Yeni Video Ekle</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="adi">Başlık</label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                            </div>
                            <input id="id" name="id" type="hidden" value="">
                            <div class="form-group">
                                <label for="sira">Sıra</label>
                                <input type="number" class="form-control form-control-sm" min="0" name="sira" id="sira"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="kod">Youtube Video Kodu</label>
                                <input type="text" class="form-control form-control-sm" name="kod" id="kod" value="">
                            </div>

                            <div class="form-group">
                                <label>Kapak Görseli</label>

                                <div class="input-group col-xs-12">
                                    <input type="file" name="firma_footerlogo" class="file-upload-default">
                                    <div class="input-group col-md-6">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="maxlength-textarea">Açıklama</label>
                                <textarea id="maxlength-textarea" name="description" class="form-control"
                                    maxlength="260" rows="4"></textarea>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header">
                                    SEO AYARLARI
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="maxlength-textarea">Sayfa Açıklama (description)</label>
                                        <textarea id="maxlength-textarea" name="description" class="form-control"
                                            maxlength="260" rows="4"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn rounded mw-md btn-primary">
                                        KAYDET </button>
                                    <a href="<?php echo base_url("general_settings/update"); ?>"></a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>