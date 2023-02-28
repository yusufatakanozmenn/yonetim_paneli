<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-b-lg">
                   Sabit Linkler
                </h4>

                <div class="card">
                    <form action="../_class/yonetim_islem.php" method="POST">
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
                                                                    name="anaurl" value="anasayfa">
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
                                                                    name="urunkategoriurl" value="urun-kategori">
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
                                                                    name="urunlerurl" value="urunler">
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
                                                                    name="urundetayurl" value="urun">
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
                                                                    name="projekategoriurl" value="proje-kategori">
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
                                                                    name="projelerurl" value="projeler">
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
                                                                    name="projedetayurl" value="proje">
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
                                                                    name="refurl" value="referanslar">
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
                                                                    name="refdetayurl" value="referans">
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
                                                                    name="musteriurl" value="musteri-gorusleri">
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
                                                                    name="belgeurl" value="belgelerimiz">
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
                                                                    name="subeurl" value="bayilerimiz">
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
                                                                    name="iletisimurl" value="iletisim">
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
                                                                    name="ekiburl" value="ekibimiz">
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
                                                                    name="ekibdetayurl" value="ekip">
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
                                                                    name="katalogurl" value="e-katalog">
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
                                                                    name="fotourl" value="foto-galeri">
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
                                                                    name="fotodetayurl" value="foto">
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
                                                                    name="videourl" value="video-galeri">
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
                                                                    name="videodetayurl" value="video">
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
                                                                    name="hizmeturl" value="hizmetlerimiz">
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
                                                                    name="hizmetdetayurl" value="hizmetdetay">
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
                                                                    name="haberurl" value="blog">
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
                                                                    name="haberdetayurl" value="blogdetay">
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
                                                                    name="sayfaurl" value="icerik">
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
                                                                    name="ikurl" value="insan-kaynaklari">
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
                                                                    name="sssurl" value="sss">
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
                                                                    name="bankahesapurl" value="banka-hesaplari">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <button type="submit" name="sabit_url"
                                                class="btn btn-success btn-icon-text btn-sm">
                                                <i class="mdi mdi-spin mdi-loading"></i>
                                                GÜNCELLE
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>





                    </form>
                </div>



            </div><!-- END column -->
        </div>
    </section><!-- #dash-content -->
</div>