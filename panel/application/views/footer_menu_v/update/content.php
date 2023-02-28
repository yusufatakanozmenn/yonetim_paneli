<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-b-lg">
                    Ürün Listesi
                </h4>

                <div class="card">
                    <form action="../_class/yonetim_islem.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                                            enctype="multipart/form-data">
                                            <input id="id" name="id" type="hidden" value="">
                                            <div class="form-group">
                                                <label for="menu_sira">Menü Sıra</label>
                                                <input type="number" min="0" class="form-control form-control-sm"
                                                    name="menu_sira" id="menu_sira" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="menu_isim">Menü Adı</label>
                                                <input type="text" class="form-control form-control-sm" name="menu_isim"
                                                    required="" id="menu_isim" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="menu_url">Bağlantı Sayfası</label>
                                                <select name="menu_url" id="menu_url"
                                                    class="js-example-basic-single form-control-sm select2-hidden-accessible"
                                                    style="width:100%" tabindex="-1" aria-hidden="true">
                                                    <option value="0">Diğer (Manuel Link Ekle)</option>
                                                    <optgroup label="Sayfalarım">
                                                        <option value="icerik/hakkimizda">Hakkımızda</option>
                                                        <option value="icerik/etik-ilkelerimiz">Etik İlkelerimiz
                                                        </option>
                                                        <option value="icerik/organizasyon-semasi">Organizasyon Şeması
                                                        </option>
                                                    </optgroup>
                                                    <optgroup label="Proje Kategori">
                                                    </optgroup>
                                                    <optgroup label="Projeler">
                                                    </optgroup>
                                                    <optgroup label="Haberler">
                                                    </optgroup>
                                                    <optgroup label="Hizmetler">
                                                        <option value="hizmetdetay/hayvancilik-urunleri">Hayvancılık
                                                            Ürünleri</option>
                                                        <option value="hizmetdetay/tarim-urunleri">Tarım Ürünleri
                                                        </option>
                                                        <option value="hizmetdetay/medikal-urunler">Medikal Ürünler
                                                        </option>
                                                    </optgroup>
                                                    <optgroup label="Sabit Sayfalar">
                                                        <option value="anasayfa">Anasayfa</option>
                                                        <option value="urunler">Ürünler</option>
                                                        <option value="blog">Haberler</option>
                                                        <option value="projeler">Projeler</option>
                                                        <option value="hizmetlerimiz">Hizmetlerimiz</option>
                                                        <option value="belgelerimiz">Belgelerimiz</option>
                                                        <option value="ekibimiz">Ekibimiz</option>
                                                        <option value="referanslar">Referanslarımız</option>
                                                        <option value="musteri-gorusleri">Müşteri Görüşleri</option>
                                                        <option value="e-katalog">E-Katalog</option>
                                                        <option value="bayilerimiz">Bayilerimiz</option>
                                                        <option value="foto-galeri">Foto Galeri</option>
                                                        <option value="video-galeri">Video Galeri</option>
                                                        <option value="sss">SSS</option>
                                                        <option value="insan-kaynaklari">İnsan Kaynakları</option>
                                                        <option value="banka-hesaplari">Banka Hesapları</option>
                                                        <option value="iletisim">İletisim</option>
                                                    </optgroup>
                                                </select><span
                                                    class="select2 select2-container select2-container--default"
                                                    dir="ltr" style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0"
                                                            aria-labelledby="select2-menu_url-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-menu_url-container"
                                                                title="Diğer (Manuel Link Ekle)">Diğer (Manuel Link
                                                                Ekle)</span><span class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <div class="form-group link">
                                                <label for="link">Bağlantı Adresi (Manuel Link Ekle)</label>
                                                <input type="text" class="form-control form-control-sm" name="link"
                                                    id="link" value="" required="required">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check form-check-flat form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" name="sekme" class="form-check-input">
                                                        Tıklandığında yeni sekmeye gitsin mi ?
                                                        <i class="input-helper"></i><i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="d-block" for="menu_durum">Menü Durumu</label>
                                                <label class="switch">
                                                    <input type="checkbox" name="menu_durum" id="menu_durum" value="1"
                                                        checked="">
                                                    <span class="slider"></span>
                                                </label>

                                            </div>
                                            <button type="submit" name="footermenu_kaydet"
                                                class="btn btn-primary mr-2 btn-sm"><i
                                                    class="mdi mdi-spin mdi-loading"></i> Kaydet</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 grid-margin stretch-card ">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="clearfix m-b-20">
                                            <div class="dd nestable-with-handle">
                                                <ol class="dd-list">
                                                    <li class="dd-item dd3-item">
                                                        <div class="dd-handle dd3-handle">1</div>
                                                        <div class="dd3-content aktif-menu"> Hakkımızda
                                                            <div class="nestablebtns">
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    href="footer-menu-duzenle/1"
                                                                    data-original-title="Düzenle"><i
                                                                        class="ti-pencil-alt"></i></a>
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    class="popconfirm"
                                                                    href="../_class/yonetim_islem.php?footermenu_sil=ok&amp;id=1"
                                                                    data-original-title="Sil"><i
                                                                        class="ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item dd3-item">
                                                        <div class="dd-handle dd3-handle">2</div>
                                                        <div class="dd3-content aktif-menu"> Organizasyon Şeması
                                                            <div class="nestablebtns">
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    href="footer-menu-duzenle/12"
                                                                    data-original-title="Düzenle"><i
                                                                        class="ti-pencil-alt"></i></a>
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    class="popconfirm"
                                                                    href="../_class/yonetim_islem.php?footermenu_sil=ok&amp;id=12"
                                                                    data-original-title="Sil"><i
                                                                        class="ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item dd3-item">
                                                        <div class="dd-handle dd3-handle">3</div>
                                                        <div class="dd3-content aktif-menu"> Etik İlkelerimiz
                                                            <div class="nestablebtns">
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    href="footer-menu-duzenle/17"
                                                                    data-original-title="Düzenle"><i
                                                                        class="ti-pencil-alt"></i></a>
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    class="popconfirm"
                                                                    href="../_class/yonetim_islem.php?footermenu_sil=ok&amp;id=17"
                                                                    data-original-title="Sil"><i
                                                                        class="ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item dd3-item">
                                                        <div class="dd-handle dd3-handle">4</div>
                                                        <div class="dd3-content aktif-menu"> Hayvancılık Ürünleri
                                                            <div class="nestablebtns">
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    href="footer-menu-duzenle/3"
                                                                    data-original-title="Düzenle"><i
                                                                        class="ti-pencil-alt"></i></a>
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    class="popconfirm"
                                                                    href="../_class/yonetim_islem.php?footermenu_sil=ok&amp;id=3"
                                                                    data-original-title="Sil"><i
                                                                        class="ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item dd3-item">
                                                        <div class="dd-handle dd3-handle">5</div>
                                                        <div class="dd3-content aktif-menu"> Tarım Ürünleri
                                                            <div class="nestablebtns">
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    href="footer-menu-duzenle/13"
                                                                    data-original-title="Düzenle"><i
                                                                        class="ti-pencil-alt"></i></a>
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    class="popconfirm"
                                                                    href="../_class/yonetim_islem.php?footermenu_sil=ok&amp;id=13"
                                                                    data-original-title="Sil"><i
                                                                        class="ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item dd3-item">
                                                        <div class="dd-handle dd3-handle">6</div>
                                                        <div class="dd3-content aktif-menu"> Medikal Sağlık Ürünleri
                                                            <div class="nestablebtns">
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    href="footer-menu-duzenle/18"
                                                                    data-original-title="Düzenle"><i
                                                                        class="ti-pencil-alt"></i></a>
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    class="popconfirm"
                                                                    href="../_class/yonetim_islem.php?footermenu_sil=ok&amp;id=18"
                                                                    data-original-title="Sil"><i
                                                                        class="ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item dd3-item">
                                                        <div class="dd-handle dd3-handle">7</div>
                                                        <div class="dd3-content aktif-menu"> Belgelerimiz
                                                            <div class="nestablebtns">
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    href="footer-menu-duzenle/19"
                                                                    data-original-title="Düzenle"><i
                                                                        class="ti-pencil-alt"></i></a>
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    class="popconfirm"
                                                                    href="../_class/yonetim_islem.php?footermenu_sil=ok&amp;id=19"
                                                                    data-original-title="Sil"><i
                                                                        class="ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item dd3-item">
                                                        <div class="dd-handle dd3-handle">8</div>
                                                        <div class="dd3-content aktif-menu"> İnsan Kaynakları
                                                            <div class="nestablebtns">
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    href="footer-menu-duzenle/20"
                                                                    data-original-title="Düzenle"><i
                                                                        class="ti-pencil-alt"></i></a>
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    class="popconfirm"
                                                                    href="../_class/yonetim_islem.php?footermenu_sil=ok&amp;id=20"
                                                                    data-original-title="Sil"><i
                                                                        class="ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item dd3-item">
                                                        <div class="dd-handle dd3-handle">9</div>
                                                        <div class="dd3-content aktif-menu"> İletişim
                                                            <div class="nestablebtns">
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    href="footer-menu-duzenle/8"
                                                                    data-original-title="Düzenle"><i
                                                                        class="ti-pencil-alt"></i></a>
                                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                                    class="popconfirm"
                                                                    href="../_class/yonetim_islem.php?footermenu_sil=ok&amp;id=8"
                                                                    data-original-title="Sil"><i
                                                                        class="ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
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