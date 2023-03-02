<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Yönetici Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                    enctype="multipart/form-data">
                    <br>
                    <p style="font-style: italic;">Şifre Olarak: <b>123,1234, 123456, 1, admin, user, demo </b> gibi
                        basit düzeyde şifreleri sistem kabul etmemektedir. Şifreniz bu şifrelerden herhangi birisine
                        sahipse panelde hiç bir işlem yapamazsınız.! <br> <b>Not:</b> Yönetim panel giriş linkini Site
                        Yönetimi -&gt; Genel Ayarlar kısmından değiştiriniz.! </p>
                    <br>
                    <input id="id" name="id" type="hidden" value="">
                    <div class="form-group">
                        <label for="isim">İsim</label>
                        <input type="text" class="form-control form-control-sm" name="isim" id="isim" value="">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input class="form-control form-control-sm" name="email" id="email" value=""
                            data-inputmask="'alias': 'email'">
                    </div>
                    <div class="form-group">
                        <label for="kadi">Kullanıcı Adı</label>
                        <input type="text" class="form-control form-control-sm" name="kadi" id="kadi" value="">
                    </div>
                    <div class="form-group">
                        <label for="sifre">Şifre</label>
                        <input type="text" class="form-control form-control-sm" name="sifre" id="sifre" value="">
                    </div>
                    <div class="form-group row col-md-6">
                        <label>Profil Resmi</label>
                       
                        <div class="input-group col-xs-12">
                            <input type="file" name="firma_footerlogo" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <div class="col-md-6 col-sm-6">
                                    <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="yonetici_kaydet" class="btn btn-primary btn-icon-text btn-sm">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i>
                        KAYDET
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>