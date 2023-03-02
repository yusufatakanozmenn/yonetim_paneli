<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <h4 class="widget-header">
                        Arka Plan Resimleri
                    </h4>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post" enctype="multipart/form-data"
                            action="<?php echo base_url("background_images_settings/update/$item->id"); ?>">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="white_card card mb-3">
                                        <div class="thumbnail white">
                                            <a href="javascript:void(0)" class="product">
                                                <img class="img-responsive"
                                                    src="<?php echo base_url('uploads'); ?>/background_images_settings_v/<?php echo $item->bizesorun; ?>"
                                                    alt="Bize Soru Sorun arka plan">
                                            </a>
                                            <div class="caption">
                                                <div class="card-header">
                                                    <h4 class="m-0">Bize Soru Sorun </h4>
                                                    <div class=" mb-0">
                                                        <input type="file" name="bizesorun" class="file-upload-default">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="white_card card mb-3">
                                        <div class="thumbnail white">
                                            <a href="javascript:void(0)" class="product">
                                                <img class="img-responsive"
                                                    src="<?php echo base_url('uploads'); ?>/background_images_settings_v/<?php echo $item->anateklif; ?>"
                                                    alt="Anasayfa Teklif Formu arka plan">
                                            </a>
                                            <div class="caption">
                                                <h3 class="m-0">Anasayfa Teklif Formu </h3>
                                                <div class=" mb-0">
                                                    <input type="file" name="anateklif" class="file-upload-default">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="white_card ">
                                        <div class="thumbnail white">
                                            <a href="javascript:void(0)" class="product">
                                                <img class="img-responsive"
                                                    src="<?php echo base_url('uploads'); ?>/background_images_settings_v/<?php echo $item->sayfalar; ?>"
                                                    alt="Sayfalar arka plan">
                                            </a>
                                            <div class="caption">
                                                <h3 class="m-0">Sayfalar</h3>
                                                <div class=" mb-0">
                                                    <input type="file" name="sayfalar" class="file-upload-default">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="white_card ">
                                        <div class="thumbnail white">
                                            <a href="javascript:void(0)" class="product">
                                                <img class="img-responsive"
                                                    src="<?php echo base_url('uploads'); ?>/background_images_settings_v/<?php echo $item->belgelerimiz; ?>"
                                                    alt="Belgelerimiz arka plan">
                                            </a>
                                            <div class="caption">
                                                <h3 class="m-0">Belgelerimiz </h3>
                                                <div class=" mb-0">
                                                    <input type="file" name="belgelerimiz" class="file-upload-default">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="white_card ">
                                        <div class="thumbnail white">
                                            <a href="javascript:void(0)" class="product">
                                                <img class="img-responsive"
                                                    src="<?php echo base_url('uploads'); ?>/background_images_settings_v/<?php echo $item->referanslar; ?>"
                                                    alt="Referanslar arka plan">
                                            </a>
                                            </a>
                                            <div class="caption">
                                                <h3 class="m-0">Referanslar</h3>
                                                <div class=" mb-0">
                                                    <input type="file" name="referanslar" class="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="white_card ">
                                        <div class="thumbnail white">
                                            <a href="javascript:void(0)" class="product">
                                                <img class="img-responsive"
                                                    src="<?php echo base_url('uploads'); ?>/background_images_settings_v/<?php echo $item->ik; ?>"
                                                    alt="İnsan Kaynakları arka plan">
                                            </a>
                                            <div class="caption">
                                                <h3 class="m-0">İnsan Kaynakları</h3>
                                                <div class=" mb-0">
                                                    <input type="file" name="ik" class="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="white_card ">
                                        <div class="thumbnail white">
                                            <a href="javascript:void(0)" class="product">
                                                <img class="img-responsive"
                                                    src="<?php echo base_url('uploads'); ?>/background_images_settings_v/<?php echo $item->sss; ?>"
                                                    alt="Sıkça Sorulan Sorular arka plan">
                                            </a>
                                            <div class="caption">
                                                <h3 class="m-0">Sıkça Sorulan Sorular</h3>
                                                <div class=" mb-0">
                                                    <input type="file" name="sss" class="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="white_card ">
                                        <div class="thumbnail white">
                                            <a href="javascript:void(0)" class="product">
                                                <img class="img-responsive"
                                                    src="<?php echo base_url('uploads'); ?>/background_images_settings_v/<?php echo $item->musterigorus; ?>"
                                                    alt="Müşteri Görüşleri arka plan">
                                            </a>
                                            <div class="caption">
                                                <h3 class="m-0">Müşteri Görüşleri</h3>
                                                <div class=" mb-0">
                                                    <input type="file" name="musterigorus" class="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn rounded mw-md btn-success">
                                    GÜNCELLE </button>
                                <a href="<?php echo base_url("background_images_settings/update"); ?>"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #dash-content -->
</div>