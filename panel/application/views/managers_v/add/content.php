<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Yeni Yönetici Ekle</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post" action="<?php echo base_url("managers/save"); ?>"
                            enctype="multipart/form-data">
                            <div class="alert alert-warning text-center">
                                <p style="font-style: italic;">Şifre Olarak: <b>123,1234, 123456, 1, admin, user, demo
                                    </b>
                                    gibi
                                    basit düzeyde şifreleri sistem kabul etmemektedir. Şifreniz bu şifrelerden herhangi
                                    birisine
                                    sahipse panelde hiç bir işlem yapamazsınız.! <br> <b>Not:</b> Yönetim panel giriş
                                    linkini Site
                                    Yönetimi -&gt; Genel Ayarlar kısmından değiştiriniz.! </p>
                            </div>
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
                                <input type="text" class="form-control form-control-sm" name="sifre" id="sifre"
                                    value="">
                            </div>


                            <div class="form-group">
                                <label>Profil Resmi</label>
                                <div class="input-group col-xs-6">
                                    <input type="file" name="resim" class="file-upload-default">
                                    <div class="input-group col-xs-6">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn rounded mw-md btn-success "> KAYDET </button>
                                <a href="<?php echo base_url("managers"); ?>"></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>