<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-b-lg">
                    Ürün Listesi
                </h4>

                <div class="card">
                    <form action="../_class/yonetim_islem.php" method="POST">
                        <div class="main-panel">
                            <div class="content-wrapper">                                
                                <div class="row">
                                    <div class="col-lg-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <form class="forms-sample" method="post"
                                                    action="../_class/yonetim_islem.php" enctype="multipart/form-data">
                                                    <input id="id" name="id" type="hidden" value="">
                                                    <div class="form-group">
                                                        <label for="menu_ust">Üst Menü Seç</label>
                                                        <select
                                                            class="js-example-basic-single form-control-sm select2-hidden-accessible"
                                                            name="menu_ust" id="menu_ust" required="" style="width:100%"
                                                            tabindex="-1" aria-hidden="true">
                                                            <option value="0">Üst Menü</option>
                                                            <option value="2">KURUMSAL</option>
                                                            <option value="4">ÜRÜNLERİMİZ</option>
                                                            <option value="10">BELGELERİMİZ</option>
                                                            <option value="28">İNSAN KAYNAKLARI</option>
                                                            <option value="8">İLETİŞİM</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-labelledby="select2-menu_ust-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-menu_ust-container"
                                                                        title="Üst Menü"></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="menu_sira">Menü Sıra</label>
                                                        <input type="number" min="0"
                                                            class="form-control form-control-sm" name="menu_sira"
                                                            id="menu_sira" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="menu_isim">Menü Adı</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="menu_isim" required="" id="menu_isim" value="">
                                                    </div>
                                                    <div class="form-group tip" style="display: block;">
                                                        <label for="tip">Otomatik Listeleme</label>
                                                        <select
                                                            class="js-example-basic-single form-control-sm select2-hidden-accessible"
                                                            name="tip" id="tip" required="" style="width:100%"
                                                            tabindex="-1" aria-hidden="true">
                                                            <option value="0" selected="">Otomatik listeleme Yok
                                                            </option>
                                                            <option value="1">Ürün Kategori</option>
                                                            <option value="2">Ürünler</option>
                                                            <option value="3">Hizmetler</option>
                                                            <option value="4">Foto Galeri</option>
                                                            <option value="5">Video Galeri</option>
                                                            <option value="6">Proje Kategori</option>
                                                            <option value="7">Projeler</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-labelledby="select2-tip-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-tip-container"
                                                                        title="Otomatik listeleme Yok"></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>

                                                    <div class="form-group katlimit" style="display: none;">
                                                        <label for="klimit">Otomatik Listeleme Limiti</label>
                                                        <input type="number" class="form-control form-control-sm"
                                                            min="0" name="klimit" id="klimit" value="">
                                                    </div>

                                                    <div class="form-group tip1 tip" style="display: block;">
                                                        <label for="tbuton">Tümünü gör buton linki (Eğer tümünü gör
                                                            butonunu istemiyorsanız bu alanı boş bırakınız) </label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="tbuton" id="tbuton" value="">
                                                    </div>

                                                    <div class="form-group sayfalar">
                                                        <label for="menu_url">Bağlantı Sayfası</label>
                                                        <select name="menu_url" id="menu_url"
                                                            class="js-example-basic-single form-control-sm select2-hidden-accessible"
                                                            style="width:100%" tabindex="-1" aria-hidden="true">
                                                            <option value="0"></option>
                                                            <optgroup label="Sayfalarım">
                                                                <option value="icerik/hakkimizda">Hakkımızda</option>
                                                                <option value="icerik/etik-ilkelerimiz">Etik İlkelerimiz
                                                                </option>
                                                                <option value="icerik/organizasyon-semasi">Organizasyon
                                                                    Şeması</option>
                                                            </optgroup>
                                                            <optgroup label="Proje Kategori">
                                                            </optgroup>
                                                            <optgroup label="Projeler">
                                                            </optgroup>
                                                            <optgroup label="Haberler">
                                                            </optgroup>
                                                            <optgroup label="Hizmetler">
                                                                <option value="hizmetdetay/hayvancilik-urunleri">
                                                                    Hayvancılık Ürünleri</option>
                                                                <option value="hizmetdetay/tarim-urunleri">Tarım
                                                                    Ürünleri</option>
                                                                <option value="hizmetdetay/medikal-urunler">Medikal
                                                                    Ürünler</option>
                                                            </optgroup>
                                                            <optgroup label="Foto Galeri">
                                                            </optgroup>
                                                            <optgroup label="Video Galeri">
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
                                                                <option value="musteri-gorusleri">Müşteri Görüşleri
                                                                </option>
                                                                <option value="e-katalog">E-Katalog</option>
                                                                <option value="bayilerimiz">Bayilerimiz</option>
                                                                <option value="foto-galeri">Foto Galeri</option>
                                                                <option value="video-galeri">Video Galeri</option>
                                                                <option value="sss">SSS</option>
                                                                <option value="insan-kaynaklari">İnsan Kaynakları
                                                                </option>
                                                                <option value="banka-hesaplari">Banka Hesapları</option>
                                                                <option value="iletisim">İletisim</option>
                                                            </optgroup>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-labelledby="select2-menu_url-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-menu_url-container"
                                                                        title="Diğer (Manuel Link Ekle)">Diğer (Manuel
                                                                        Link Ekle)</span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>
                                                    <div class="form-group link sayfalar">
                                                        <label for="link">Bağlantı Adresi (Manuel Link Ekle)</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="link" id="link" value="">
                                                    </div>
                                                    <div class="form-group sayfalar">
                                                        <div class="form-check form-check-flat form-check-primary">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" name="sekme"
                                                                    class="form-check-input">
                                                                Tıklandığında yeni sekmeye gitsin mi ?
                                                                <i class="input-helper"></i><i
                                                                    class="input-helper"></i></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="d-block" for="menu_durum">Menü Durumu</label>
                                                        <label class="switch">
                                                            <input type="checkbox" name="menu_durum" id="menu_durum"
                                                                value="1" checked="">
                                                            <span class="slider"></span>
                                                        </label>

                                                    </div>
                                                    <button type="submit" name="MenuKaydet"
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
                                                                <div class="dd3-content aktif-menu">KURUMSAL
                                                                    <div class="nestablebtns">
                                                                        <a data-toggle="tooltip" data-placement="top"
                                                                            title="" href="header-menu-duzenle/2"
                                                                            data-original-title="Düzenle"><i
                                                                                class="ti-pencil-alt"></i></a>
                                                                        <a data-toggle="tooltip" data-placement="top"
                                                                            title="" class="popconfirm"
                                                                            href="../_class/yonetim_islem.php?menusil=ok&amp;id=2"
                                                                            data-original-title="Sil"><i
                                                                                class="ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                                <ol class="dd-list">
                                                                    <li class="dd-item dd3-item">
                                                                        <div class="dd-handle dd3-handle">1</div>
                                                                        <div class="dd3-content aktif-menu">Hakkımızda
                                                                            <div class="nestablebtns">
                                                                                <a data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    href="header-menu-duzenle/9"
                                                                                    data-original-title="Düzenle"><i
                                                                                        class="ti-pencil-alt"></i></a>
                                                                                <a data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    class="popconfirm"
                                                                                    href="../_class/yonetim_islem.php?menusil=ok&amp;id=9"
                                                                                    data-original-title="Sil"><i
                                                                                        class="ti-trash"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ol>
                                                                <ol class="dd-list">
                                                                    <li class="dd-item dd3-item">
                                                                        <div class="dd-handle dd3-handle">2</div>
                                                                        <div class="dd3-content aktif-menu">Organizasyon
                                                                            Şeması <div class="nestablebtns">
                                                                                <a data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    href="header-menu-duzenle/29"
                                                                                    data-original-title="Düzenle"><i
                                                                                        class="ti-pencil-alt"></i></a>
                                                                                <a data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    class="popconfirm"
                                                                                    href="../_class/yonetim_islem.php?menusil=ok&amp;id=29"
                                                                                    data-original-title="Sil"><i
                                                                                        class="ti-trash"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ol>
                                                                <ol class="dd-list">
                                                                    <li class="dd-item dd3-item">
                                                                        <div class="dd-handle dd3-handle">3</div>
                                                                        <div class="dd3-content aktif-menu">Etik
                                                                            İlkelerimiz <div class="nestablebtns">
                                                                                <a data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    href="header-menu-duzenle/11"
                                                                                    data-original-title="Düzenle"><i
                                                                                        class="ti-pencil-alt"></i></a>
                                                                                <a data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    class="popconfirm"
                                                                                    href="../_class/yonetim_islem.php?menusil=ok&amp;id=11"
                                                                                    data-original-title="Sil"><i
                                                                                        class="ti-trash"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                            <li class="dd-item dd3-item">
                                                                <div class="dd-handle dd3-handle">2</div>
                                                                <div class="dd3-content aktif-menu">ÜRÜNLERİMİZ
                                                                    <div class="nestablebtns">
                                                                        <a data-toggle="tooltip" data-placement="top"
                                                                            title="" href="header-menu-duzenle/4"
                                                                            data-original-title="Düzenle"><i
                                                                                class="ti-pencil-alt"></i></a>
                                                                        <a data-toggle="tooltip" data-placement="top"
                                                                            title="" class="popconfirm"
                                                                            href="../_class/yonetim_islem.php?menusil=ok&amp;id=4"
                                                                            data-original-title="Sil"><i
                                                                                class="ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="dd-item dd3-item">
                                                                <div class="dd-handle dd3-handle">3</div>
                                                                <div class="dd3-content aktif-menu">BELGELERİMİZ
                                                                    <div class="nestablebtns">
                                                                        <a data-toggle="tooltip" data-placement="top"
                                                                            title="" href="header-menu-duzenle/10"
                                                                            data-original-title="Düzenle"><i
                                                                                class="ti-pencil-alt"></i></a>
                                                                        <a data-toggle="tooltip" data-placement="top"
                                                                            title="" class="popconfirm"
                                                                            href="../_class/yonetim_islem.php?menusil=ok&amp;id=10"
                                                                            data-original-title="Sil"><i
                                                                                class="ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="dd-item dd3-item">
                                                                <div class="dd-handle dd3-handle">4</div>
                                                                <div class="dd3-content aktif-menu">İNSAN KAYNAKLARI
                                                                    <div class="nestablebtns">
                                                                        <a data-toggle="tooltip" data-placement="top"
                                                                            title="" href="header-menu-duzenle/28"
                                                                            data-original-title="Düzenle"><i
                                                                                class="ti-pencil-alt"></i></a>
                                                                        <a data-toggle="tooltip" data-placement="top"
                                                                            title="" class="popconfirm"
                                                                            href="../_class/yonetim_islem.php?menusil=ok&amp;id=28"
                                                                            data-original-title="Sil"><i
                                                                                class="ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="dd-item dd3-item">
                                                                <div class="dd-handle dd3-handle">5</div>
                                                                <div class="dd3-content aktif-menu">İLETİŞİM
                                                                    <div class="nestablebtns">
                                                                        <a data-toggle="tooltip" data-placement="top"
                                                                            title="" href="header-menu-duzenle/8"
                                                                            data-original-title="Düzenle"><i
                                                                                class="ti-pencil-alt"></i></a>
                                                                        <a data-toggle="tooltip" data-placement="top"
                                                                            title="" class="popconfirm"
                                                                            href="../_class/yonetim_islem.php?menusil=ok&amp;id=8"
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
                                <!-- main-panel ends -->
                                <script>
                                $(document).ready(function(e) {
                                    $('#menu_url').bind('change', linkGetir);
                                    $('#tip').bind('change', menutipi_getir);
                                    $('#menu_ust').bind('change', ust_getir);
                                });


                                function menutipi_getir() {
                                    var ustid = $(this).val();
                                    if (ustid == '0') {
                                        $(".katlimit").css("display", "none");
                                    } else {
                                        $(".katlimit").css("display", "block");
                                    }
                                }

                                $('#tip').ready(function() {
                                    var ustid = $("#tip").val();
                                    if (ustid == '0') {
                                        $(".katlimit").css("display", "none");
                                    } else {
                                        $(".katlimit").css("display", "block");
                                    }
                                });

                                function ust_getir() {
                                    var ustid = $(this).val();
                                    if (ustid == '0') {
                                        $(".tip").css("display", "block");
                                    } else {
                                        $(".tip").css("display", "none");
                                    }
                                }

                                $('#menu_ust').ready(function() {
                                    var ustid = $("#menu_ust").val();
                                    if (ustid == '0') {
                                        $(".tip").css("display", "block");
                                    } else {
                                        $(".tip").css("display", "none");
                                    }
                                });

                                function linkGetir() {
                                    var value = $(this).val();
                                    if (value == '0') {
                                        $('.link').removeClass('hidden');
                                    } else {
                                        $('.link').addClass('hidden');
                                    }
                                }
                                $('#menu_url').ready(function() {
                                    var value = $("#menu_url").val();
                                    if (value == '0') {
                                        $('.link').removeClass('hidden');
                                    } else {
                                        $('.link').addClass('hidden');
                                    }
                                });
                                </script>


                            </div>
                            <!-- content-wrapper ends -->
                            <footer class="footer">
                                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                    <span
                                        class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright
                                        © 2023 Tüm hakları saklıdır.</span>
                                </div>
                            </footer>
                            <!-- partial -->
                        </div>


                </div><!-- END column -->
            </div>
    </section><!-- #dash-content -->
</div>