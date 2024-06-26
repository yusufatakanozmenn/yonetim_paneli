<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">API Ayarları</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form action="<?php echo base_url("api_settings/update/$item->id") ?>" method="post"
                            id="api_form">
                            <div class="main-panel">
                                <div class="form-group m-b-0">
                                    <label for="maxlength-demo-4">Whatsapp Kodu</label>
                                    <textarea id="maxlength-demo-4" name="whatsapp" maxlength="200" class="form-control"
                                        data-options="{ alwaysShow: true, threshold: 10, warningClass: 'label label-warning', limitReachedClass: 'label label-danger', placement: 'bottom', message: 'used %charsTyped% of %charsTotal% chars.' }"><?php echo $item->whatsapp; ?></textarea>
                                </div>
                                <div class="form-group m-b-0">
                                    <label for="maxlength-demo-4">Google Analytics .js Kodu</label>
                                    <textarea id="maxlength-demo-4" name="google_analytics" maxlength="200"
                                        class="form-control"
                                        data-options="{ alwaysShow: true, threshold: 10, warningClass: 'label label-warning', limitReachedClass: 'label label-danger', placement: 'bottom', message: 'used %charsTyped% of %charsTotal% chars.' }"><?php echo $item->google_analytics; ?></textarea>
                                </div>
                                <div class="form-group m-b-0">
                                    <label for="maxlength-demo-4">Webmaster Tools Site Doğrulama Kodu</label>
                                    <textarea id="maxlength-demo-4" name="dogrulama_kodu" maxlength="200"
                                        class="form-control"
                                        data-options="{ alwaysShow: true, threshold: 10, warningClass: 'label label-warning', limitReachedClass: 'label label-danger', placement: 'bottom', message: 'used %charsTyped% of %charsTotal% chars.' }"><?php echo $item->dogrulama_kodu; ?></textarea>
                                </div>
                                <div class="form-group m-b-0">
                                    <label for="maxlength-demo-4">İletişim Harita Embed Kodu</label>
                                    <textarea id="maxlength-demo-4" name="google_maps" maxlength="200"
                                        class="form-control"
                                        data-options="{ alwaysShow: true, threshold: 10, warningClass: 'label label-warning', limitReachedClass: 'label label-danger', placement: 'bottom', message: 'used %charsTyped% of %charsTotal% chars.' }"><?php echo $item->google_maps; ?></textarea>
                                </div>
                                <div class="form-group m-b-0">
                                    <label for="maxlength-demo-4">Canlı Destek Kodu</label>
                                    <textarea id="maxlength-demo-4" name="canli_destek" maxlength="200"
                                        class="form-control"
                                        data-options="{ alwaysShow: true, threshold: 10, warningClass: 'label label-warning', limitReachedClass: 'label label-danger', placement: 'bottom', message: 'used %charsTyped% of %charsTotal% chars.' }"><?php echo $item->canli_destek; ?></textarea>
                                </div>
                                <div class="form-group m-b-0">
                                    <label for="maxlength-demo-4">Google Rcaptha Site Anahtar Kodu </label>
                                    <textarea id="maxlength-demo-4" name="rcaptha" maxlength="200" class="form-control"
                                        data-options="{ alwaysShow: true, threshold: 10, warningClass: 'label label-warning', limitReachedClass: 'label label-danger', placement: 'bottom', message: 'used %charsTyped% of %charsTotal% chars.' }"><?php echo $item->rcaptha; ?></textarea>
                                </div>
                        </form>
                        <div>
                            <button class="btn rounded mw-md btn-success update-btn">
                                GÜNCELLE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>