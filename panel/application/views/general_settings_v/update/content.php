<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-b-lg">Genel Ayarlar</h4>
                <div class="col-md-12">
                    <div class="main-panel">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="forms-sample" method="post"
                                            action="<?php echo base_url("general_settings/update/$item->id"); ?>"
                                            enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card mb-3">
                                                        <div class="card-header">Logo Yükle</div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="file" name="firma_logo"
                                                                    class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <a href="#" class="thumbnail white"><img
                                                                                src="<?php echo base_url('assets'); ?>/assets/images/<?php echo $item->firma_logo; ?>"
                                                                                alt="..."></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card mb-3">
                                                        <div class="card-header">Mail Şablonu ve Footer logo yükle</div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="file" name="firma_footerlogo"
                                                                    class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <a href="#" class="thumbnail white"><img
                                                                                src="<?php echo base_url('assets'); ?>/assets/images/<?php echo $item->firma_footerlogo; ?>"
                                                                                alt="..."></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card mb-3">
                                                        <div class="card-header">Favicon Yükle</div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <input type="file" name="favicon"
                                                                    class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <a href="#" class="thumbnail white"><img
                                                                                src="<?php echo base_url('assets'); ?>/assets/images/<?php echo $item->favicon; ?>"
                                                                                alt="..."></a>
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
                                                    id="site_url" value="<?php echo $item->site_url ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="site_title">Site Title</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="site_baslik" id="site_baslik"
                                                    value="<?php echo $item->site_baslik ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="pbirim">Para Birimi</label>
                                                <select class="form-control form-control-sm" name="pbirim"
                                                    value="<?php echo $item->pbirim ?>">
                                                    <option selected style="display:none;">
                                                        <?php echo $item->pbirim ?>
                                                    </option>
                                                    <option>
                                                        TL
                                                    </option>
                                                    <option>USD</option>
                                                    <option>EURO</option>
                                                </select>
                                            </div>
                                            <small>
                                                <div class="form-group">
                                                    <label for="site_url"><b>Yönetim Paneli Girişi Link Adresi
                                                            (Örnek:xyonetim, ypanel,yadminx, Not: TR Karekter
                                                            Kullanmayınız.!)</b></label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="yonetim" id="yonetim"
                                                        value="<?php echo $item->yonetim ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="maxlength-textarea">SEO Açıklama (Description)</label>
                                                    <textarea id="maxlength-textarea" name="site_desc"
                                                        class="form-control" maxlength="260"
                                                        rows="4"><?php echo $item->site_desc ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="copyright">Copyright Metni</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="copyright" id="copyright"
                                                        value="<?php echo $item->copyright ?>">
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn rounded mw-md btn-success">
                                                        GÜNCELLE </button>
                                                    <a href="<?php echo base_url("general_settings/update"); ?>"></a>
                                                </div>
                                            </small>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</div>