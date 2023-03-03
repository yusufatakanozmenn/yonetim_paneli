<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Kolon ve Sayfalama Limit Ayarları</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form action="<?php echo base_url("limit_settings/update/$item->id"); ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0 without-header   text-left">
                                            <tbody>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Belgelerimiz
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_belge">
                                                                    <option style="display:none;" selected><?php echo $item->limit_belge?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Ekibimiz
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_ekip">
                                                                    <option style="display:none;" selected><?php echo $item->limit_ekip?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Referanslar
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_referanslar">
                                                                    <option style="display:none;" selected><?php echo $item->limit_referanslar?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr style="height: 75px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Ana Ürünler
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_urun">
                                                                    <option style="display:none;" selected><?php echo $item->limit_urun?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr style="height: 75px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Kategorilerdeki
                                                        Ürünler
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_urunler">
                                                                    <option style="display:none;" selected><?php echo $item->limit_urunler?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Proje Kategori
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_projeler">
                                                                    <option style="display:none;" selected><?php echo $item->limit_projeler?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Projeler
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_proje">
                                                                    <option style="display:none;" selected><?php echo $item->limit_proje?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Foto Galeri
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_foto">
                                                                    <option style="display:none;" selected><?php echo $item->limit_foto?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Video Galeri
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_video">
                                                                    <option style="display:none;" selected><?php echo $item->limit_video?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Haberler
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_haber">
                                                                    <option style="display:none;" selected><?php echo $item->limit_haber?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Müşteri Görüşleri
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_yorum">
                                                                    <option style="display:none;" selected><?php echo $item->limit_yorum?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> E-Katalog
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_katalog">
                                                                    <option style="display:none;" selected><?php echo $item->limit_katalog?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Hizmetlerimiz
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_hizmetler">
                                                                    <option style="display:none;" selected><?php echo $item->limit_hizmetler?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr style="height: 75px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Banka Hesapları
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_bhesaplari">
                                                                    <option style="display:none;" selected><?php echo $item->limit_bhesaplari?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-column2 text-c-red"></i> Bayilerimiz
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="form-radio"
                                                            style="display: flex;    justify-content: center;">
                                                            <div
                                                                class="form-check form-check-success d-inline-block mr-2 mb-1 mt-1">
                                                                <label class="form-check-label">
                                                                    <select class="form-check-input" name="limit_bayiler">
                                                                    <option style="display:none;" selected><?php echo $item->limit_bayiler?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="6">6</option>
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0 without-header   text-left">
                                            <tbody>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Belgelerimiz
                                                        Sayfasındaki Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" maxlength="3"
                                                            name="limit_sayfabelgeler" type="number" value="<?php echo $item->limit_sayfabelgeler?>"
                                                            required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Ekibimiz Sayfasındaki
                                                        Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfaekibimiz"
                                                            type="number" value="<?php echo $item->limit_sayfaekibimiz?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Referans Sayfasındaki
                                                        Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfareferans"
                                                            type="number" value="<?php echo $item->limit_sayfareferans?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 75px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Ana Ürünler
                                                        Sayfasındaki Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfaurun" type="number"
                                                            value="<?php echo $item->limit_sayfaurun?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 75px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Ürün Kategori
                                                        Sayfasındaki Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfaurunler"
                                                            type="number" value="<?php echo $item->limit_sayfaurunler?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Proje Kategori
                                                        Sayfasındaki Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfaproje"
                                                            type="number" value="<?php echo $item->limit_sayfaproje?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Projeler Sayfasındaki
                                                        Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfaprojeler"
                                                            type="number" value="<?php echo $item->limit_sayfaprojeler?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Foto Galeri
                                                        Sayfasındaki Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfafoto" type="number"
                                                            value="<?php echo $item->limit_sayfafoto?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Video Galeri
                                                        Sayfasındaki Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfavideo"
                                                            type="number" value="<?php echo $item->limit_sayfavideo?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Haberler Sayfasındaki
                                                        Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfahaber"
                                                            type="number" value="<?php echo $item->limit_sayfahaber?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Müşteri Görüşleri
                                                        Sayfasındaki Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfayorumlar"
                                                            type="number" value="<?php echo $item->limit_sayfayorumlar?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> E-Katalog
                                                        Sayfasındaki Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfakatalog"
                                                            type="number" value="<?php echo $item->limit_sayfakatalog?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 68px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Hizmetler
                                                        Sayfasındaki Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfahizmetler"
                                                            type="number" value="<?php echo $item->limit_sayfahizmetler?>" required="">
                                                    </td>
                                                </tr>
                                                <tr style="height: 75px;">
                                                    <td class="text-left">
                                                        <i class="ti-layout-grid3 text-c-red"></i> Banka Hesapları
                                                        Sayfasındaki Kayıt Sayısı
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="limit_sayfabhesaplari"
                                                            type="number" value="<?php echo $item->limit_sayfabhesaplari?>" required="">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                           
                           
                                
                            </div>
                            <div class="form-group">
                                    <button type="submit" name="limit_ayarlar"
                                        class="btn rounded mw-md btn-success update-btn">
                              
                                        GÜNCELLE
                                    </button>
                                </div>

                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    
    


