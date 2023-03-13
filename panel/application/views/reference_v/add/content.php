<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Yeni Referans Ekle</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post" action="<?php echo base_url("reference/save"); ?>"
                            enctype="multipart/form-data">
                            <input id="id" name="id" type="hidden" value="">
                            <div class="form-group">
                                <label for="sira">Sıra</label>
                                <input type="text" class="form-control form-control-sm" name="sira" id="sira" value="">
                            </div>
                            <div class="form-group">
                                <label for="adi">Başlık</label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                            </div>

                            <div class="form-group">
                                <label>Kapak Görseli</label>
                                <div class="form-group">
                                    <input type="file" name="resim" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <div class="col-md-3 col-sm-6">
                                            <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="maxlength-textarea">Açıklama</label>
                                        <textarea id="summernote" name="aciklama" class="form-control" maxlength="260"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="maxlength-textarea">Seo</label>
                                        <textarea id="seo" name="seo" class="form-control" maxlength="260"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" id="detay" name="detay" class="form-check-input"
                                            onchange="degistir()">Detay Sayfası Gösterilsin mi ?<i
                                            class="input-helper"></i><i class="input-helper"></i></label>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-icon-text btn-sm"> KAYDET </button>
                                <a href="<?php echo base_url("reference"); ?>"></a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>