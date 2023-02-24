<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-b-lg">
                    Genel Ayarlar
                </h4>


                <div class="col-md-12">

                    <div class="main-panel">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                                            enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card mb-3">
                                                        <div class="card-header">
                                                            Logo Yükle
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="file" name="resim"
                                                                    class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <a href="#" class="thumbnail white">
                                                                            <img src="<?php echo base_url("assets");?>/assets/images/alva_favicon.svg"
                                                                                alt="...">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card mb-3">
                                                        <div class="card-header">
                                                            Mail Şablonu ve Footer logo yükle
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="file" name="footer"
                                                                    class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <a href="#" class="thumbnail white">
                                                                            <img src="<?php echo base_url("assets");?>/assets/images/alva_favicon.svg"
                                                                                alt="...">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card mb-3">
                                                        <div class="card-header">
                                                            Favicon Yükle
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="file" name="favicon"
                                                                    class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <a href="#" class="thumbnail white">
                                                                            <img src="<?php echo base_url("assets");?>/assets/images/alva_favicon.svg"
                                                                                alt="...">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="site_url">Site Url</label>
                                                <input type="text" class="form-control form-control-sm" name="site_url"
                                                    id="site_url" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="site_title">Site Title</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="site_title" id="site_title" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="pbirim">Para Birimi</label>
                                                <select class="form-control form-control-sm" name="pbirim">
                                                    <option selected="">TL</option>
                                                    <option>USD</option>
                                                    <option>EURO</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="video">Firma Tanıtım Video Url Linki
                                                    <small></small></label><small>
                                                    <input type="text" class="form-control form-control-sm" name="video"
                                                        id="video" value="">
                                                </small>
                                            </div><small>
                                                <div class="form-group">
                                                    <label for="site_url"><b>Yönetim Paneli Girişi Link Adresi (Örnek:
                                                            xyonetim, ypanel,
                                                            yadminx, Not: TR Karekter Kullanmayınız.!)</b></label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="yonetim" id="yonetim" value="">
                                                </div>

                                                <div class="form-group">
                                                    <label for="maxlength-textarea">SEO Açıklama (Description)</label>
                                                    <textarea id="maxlength-textarea" name="site_desc"
                                                        class="form-control" maxlength="260" rows="4"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="copyright">Copyright Metni</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="copyright" id="copyright" value="">
                                                </div>
                                                <button type="submit" name="genel_ayarlar"
                                                    class="btn btn-success btn-icon-text btn-sm">
                                                    <i class="mdi mdi-spin mdi-loading"></i>
                                                    GÜNCELLE
                                                </button>

                                            </small>
                                        </form>
                                    </div><small>
                                    </small>
                                </div><small>
                                </small>
                            </div><small>

                            </small>
                        </div><small>

                        </small>
                    </div><small>
                        <!-- content-wrapper ends -->

                        <!-- partial -->
                    </small>
                </div>
            </div><!-- END column -->
        </div>
    </section><!-- #dash-content -->
</div>