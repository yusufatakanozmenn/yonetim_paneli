<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Sabit Linkler</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                    <form class="forms-sample" method="post"
                        action="<?php echo base_url("persistent_links/update/$item->id"); ?>"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="durum" id="durum" value="1">

                                            <div class="alert alert-danger" role="alert">
                                                <i class="mdi mdi-alert-circle"
                                                    style="font-size: 50px;line-height: normal;float: left;"></i>
                                                <p>AŞAĞIDA YAPACAĞINIZ HER DEĞİŞİKLİK İÇİN DEĞİŞİLİK YAPTIĞINIZ ALANLA
                                                    İLGİLİ <b>MENÜ YÖNETİMİ</b> -&gt; <b>HEDAER MENÜ</b> -&gt; <b>FOOTER
                                                        MENÜ</b>'de DEĞİŞİKLİK YAPMAYI UNUTMAYINIZ.!</p>
                                                <p>İŞLEMLERİN EN SONUNDA WEB SİTENİZDE ANASAYFA'YA GELEREK SAYFAYI
                                                    YENİLEDİKTEN SONRA KONTROL EDİNİZ.!</p>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Anasayfa</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="anaurl"
                                                                    value="<?php echo $item->anaurl ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Ürün Kategoriler</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="urunkategoriurl" value="<?php echo $item->urunkategoriurl?>" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Ürünler</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="urunlerurl" value="<?php echo $item->urunlerurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Ürün Detayı</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="urundetayurl" value="<?php echo $item->urundetayurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Proje Kategoriler</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="projekategoriurl" value="<?php echo $item->projekategoriurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Projeler</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="projelerurl" value="<?php echo $item->projelerurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Proje Detayı</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="projedetayurl" value="<?php echo $item->projedetayurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Referanslar</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="refurl" value="<?php echo $item->refurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Referans Detayı</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="refdetayurl" value="<?php echo $item->refdetayurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Müşteri Görüşleri</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="musteriurl" value="<?php echo $item->musteriurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Belgelerimiz</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="belgeurl" value="<?php echo $item->belgeurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Bayi/Şubelerimiz</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="subeurl" value="<?php echo $item->subeurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">İletişim</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="iletisimurl" value="<?php echo $item->iletisimurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Ekibimiz</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="ekiburl" value="<?php echo $item->ekiburl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Ekip Detayı</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="ekibdetayurl" value="<?php echo $item->ekibdetayurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">E-Katalog</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="katalogurl" value="<?php echo $item->katalogurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Foto Galeri</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="fotourl" value="<?php echo $item->fotourl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Foto Galeri Detayı</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="fotodetayurl" value="<?php echo $item->fotodetayurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Video Galeri</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="videourl" value="<?php echo $item->videourl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Video Galeri Detayı</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="videodetayurl" value="<?php echo $item->videodetayurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Hizmetlerimiz</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="hizmeturl" value="<?php echo $item->hizmeturl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Hizmet Detayı</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="hizmetdetayurl" value="<?php echo $item->hizmetdetayurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Haberler</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="haberurl" value="<?php echo $item->haberurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Haber Detayı</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="haberdetayurl" value="<?php echo $item->haberdetayurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Sayfa Detayı</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="sayfaurl" value="<?php echo $item->sayfaurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">İnsan Kaynakları</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="ikurl" value="<?php echo $item->ikurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Sıkça Sorulan Sorular</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="sssurl" value="<?php echo $item->sssurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card mb-4">
                                                        <div class="card-header">Banka Hesapları</div>
                                                        <div class="card-body p-3">
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="bankahesapurl" value="<?php echo $item->bankahesapurl?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn rounded mw-md btn-success">
                                                    GÜNCELLE </button>
                                                <a href="<?php echo base_url("persistent_links/update"); ?>"></a>
                                            </div>
                                        </form>
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