<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <div class="col-md-6">
                                
                                <h4 class="widget-title">Anasayfa Modülleri</h4>
                        </div>
                        <div class="col-md-6">
                        
                                <h4 class="widget-title">Diğer Modüller</h4>
                        </div>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                        <input id="id" name="id" type="hidden" value="1">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="card-title">Anasayfa Modülleri</h6>
                                <div id="dragula-event-left" class="py-2">
                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <div class="media-body">
                                                        <i
                                                            class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                        <h6 class="mb-1">Slider Üzeri Bilgi</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki slider üzerindeki bilgi alanını kapatıp
                                                            açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                    <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan1" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan1) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Teklif Formu Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfa teklif formu alanını kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan2" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan2) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Hakkımızda Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki hakkımızda alanını kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan3" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan3) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Referanslar Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki istatistik alanını kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan3" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan3) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Hizmetlerimiz Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki hizmetlerimiz alanını kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan4" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan4) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa İstatistik Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki İstatistik alanını kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan5" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan5) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Ekibimiz Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki ekibimiz alanını kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan6" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan6) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Bizimle İletişime Geçin Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki bizimle iletişime geçin alanını kapatıp
                                                            açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan7" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan7) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Paketlerimiz Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki paketlerimiz alanını kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan8" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan8) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Müşteri Görüşleri Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki müşteri görüşleri alanını kapatıp açabilrsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan9" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan9) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Haberler ve Duyurular Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki haberler ve duyurular alanını kapatıp
                                                            açabilrsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan10" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan10) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Öne Çıkan Ürünlerimiz Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki öne çıkan ürünlerimiz alanını kapatıp
                                                            açabilrsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan11" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan11) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Ürün Grupları Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki ürün grupları alanını kapatıp açabilrsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan12" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan12) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Anasayfa Son Projelerimiz Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Anasayfadaki son projelerimiz alanını kapatıp açabilrsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan13" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan13) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-md-6">
                               
                                <div id="dragula-event-right" class="py-2">

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Yükleniyor</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitedeki sayfa yükleniyor alanını kapatıp açabilrsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                    <label class="switch mb-0" style="margin-top: 1px;">
                                                    <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan14" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan14) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">.html uzantı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitenizin .html uzantılı açılmasını kapatıp açabilrsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan15" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan15) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">SSL</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitenizin ssl'li şekilde açılmasını kapatıp açabilrsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan16" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan16) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Slider Üzeri Karartı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitedeki slider üzerindeki karartı efektini kapatıp
                                                            açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan17" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan17) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Ürün Fiyatlarını Göster / Gizle</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitedeki ürünlerin fiyatlarını kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan18" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan18) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Ürün Detay Benzer Ürünler</h6>
                                                        <p class="mb-0 text-muted">
                                                            Ürün detay sayfasındaki benzer ürünler alanını
                                                            açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan19" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan19) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Site içi Arama</h6>
                                                        <p class="mb-0 text-muted">
                                                            Site içi arama motorunu kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan20" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan20) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Sosyal Medya Butonları</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitedeki sosyal medya butonlarını kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan21" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan21) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Çalışma Saatleri</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitedeki çalışma saatlerini kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan22" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan22) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Ürün Detay Sipariş Formu</h6>
                                                        <p class="mb-0 text-muted">
                                                            Ürün detay sayfasındaki sipariş formu alanını kapatıp
                                                            açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan23" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan23) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">E-Bülten Alanı</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitenizde footer üstünde bulunan e-bülten alanı kapatıp
                                                            açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan24" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan24) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Google reCAPTCHA Modülü</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitenizde google recaptcha modülünü kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan25" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan25) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Sitedeki Görsel Efektler</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitenizdeki tüm görsel efektleri kapatıp açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan26" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan26) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Slider altı Görsel Efekt</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitenizde slider altındaki görsel efekti kapatıp
                                                            açabilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan27" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan27) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded border mb-2">
                                        <div class="card-body p-3">
                                            <div class="media row module">
                                                <div class="col-lg-9 col-md-9 col-sm-6">
                                                    <i
                                                        class="mdi float-left mt-2 mdi-check icon-sm text-primary align-self-center mr-3"></i>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Site Bakım Modu</h6>
                                                        <p class="mb-0 text-muted">
                                                            Sitenizi bakım moduna alır.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 text-right">
                                                <input
                                                        data-url="<?php echo base_url("module_settings/update_status/$item->id"); ?>"
                                                        class="isActiveModule" id="switch-2-2" name="alan28" type="checkbox" data-switchery
                                                        data-color="#10c469" <?php echo ($item->alan28) ? "checked" : ""; ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    