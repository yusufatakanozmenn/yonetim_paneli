<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Menü Ekle
        </h4>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                                enctype="multipart/form-data">
                                <input id="id" name="id" type="hidden" value="">
                                <div class="form-group">
                                    <label for="menu_ust">Üst Menü Seç</label>
                                    <select class="js-example-basic-single form-control-sm select2-hidden-accessible"
                                        name="menu_ust" id="menu_ust" required="" style="width:100%" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="0">Üst Menü</option>
                                        <option value="2">KURUMSAL</option>
                                        <option value="4">ÜRÜNLERİMİZ</option>
                                        <option value="10">BELGELERİMİZ</option>
                                        <option value="28">İNSAN KAYNAKLARI</option>
                                        <option value="8">İLETİŞİM</option>
                                    </select><span
                                        class="select2 select2-container select2-container--default select2-container--below"
                                        dir="ltr" style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-menu_ust-container"><span
                                                    class="select2-selection__rendered" id="select2-menu_ust-container"
                                                    ></span><span
                                                    class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>

                                <div class="form-group">
                                    <label for="menu_sira">Menü Sıra</label>
                                    <input type="number" min="0" class="form-control form-control-sm" name="menu_sira"
                                        id="menu_sira" value="">
                                </div>
                                <div class="form-group">
                                    <label for="menu_isim">Menü Adı</label>
                                    <input type="text" class="form-control form-control-sm" name="menu_isim" required=""
                                        id="menu_isim" value="">
                                </div>
                                <div class="form-group tip" style="display: block;">
                                    <label for="tip">Otomatik Listeleme</label>
                                    <select class="js-example-basic-single form-control-sm select2-hidden-accessible"
                                        name="tip" id="tip" required="" style="width:100%" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="0" selected="">Otomatik listeleme Yok</option>
                                        <option value="1">Ürün Kategori</option>
                                        <option value="2">Ürünler</option>
                                        <option value="3">Hizmetler</option>
                                        <option value="4">Foto Galeri</option>
                                        <option value="5">Video Galeri</option>
                                        <option value="6">Proje Kategori</option>
                                        <option value="7">Projeler</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-tip-container"><span
                                                    class="select2-selection__rendered" id="select2-tip-container"
                                                    ></span><span
                                                    class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>

                                <div class="form-group katlimit" style="display: none;">
                                    <label for="klimit">Otomatik Listeleme Limiti</label>
                                    <input type="number" class="form-control form-control-sm" min="0" name="klimit"
                                        id="klimit" value="">
                                </div>

                                <div class="form-group tip1 tip" style="display: block;">
                                    <label for="tbuton">Tümünü gör buton linki (Eğer tümünü gör butonunu istemiyorsanız
                                        bu alanı boş bırakınız) </label>
                                    <input type="text" class="form-control form-control-sm" name="tbuton" id="tbuton"
                                        value="">
                                </div>

                                <div class="form-group sayfalar">
                                    <label for="menu_url">Bağlantı Sayfası</label>
                                    <select name="menu_url" id="menu_url"
                                        class="js-example-basic-single form-control-sm select2-hidden-accessible"
                                        style="width:100%" tabindex="-1" aria-hidden="true">
                                        <option value="0">Diğer (Manuel Link Ekle)</option>
                                        <optgroup label="Sayfalarım">
                                            <option value="icerik/hakkimizda">Hakkımızda</option>
                                            <option value="icerik/etik-ilkelerimiz">Etik İlkelerimiz</option>
                                            <option value="icerik/organizasyon-semasi">Organizasyon Şeması</option>
                                        </optgroup>
                                        <optgroup label="Proje Kategori">
                                        </optgroup>
                                        <optgroup label="Projeler">
                                        </optgroup>
                                        <optgroup label="Haberler">
                                        </optgroup>
                                        <optgroup label="Hizmetler">
                                            <option value="hizmetdetay/hayvancilik-urunleri">Hayvancılık Ürünleri
                                            </option>
                                            <option value="hizmetdetay/tarim-urunleri">Tarım Ürünleri</option>
                                            <option value="hizmetdetay/medikal-urunler">Medikal Ürünler</option>
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
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-menu_url-container"><span
                                                    class="select2-selection__rendered" id="select2-menu_url-container"
                                                    ></span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group link sayfalar">
                                    <label for="link">Bağlantı Adresi (Manuel Link Ekle)</label>
                                    <input type="text" class="form-control form-control-sm" name="link" id="link"
                                        value="">
                                </div>
                                <button type="submit" name="MenuKaydet" class="btn btn-primary mr-2 btn-sm"><i
                                        class="mdi mdi-spin mdi-loading"></i> Kaydet</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>