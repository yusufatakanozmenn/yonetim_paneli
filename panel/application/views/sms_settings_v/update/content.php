<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="postUrl">Post URL</label>
                        <input type="text" class="form-control form-control-sm" name="postUrl" id="postUrl"
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="KULLANICIADI">Kullanıcı Adı</label>
                        <input type="text" class="form-control form-control-sm" name="KULLANICIADI" id="KULLANICIADI"
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="SIFRE">Api Secret</label>
                        <input type="text" class="form-control form-control-sm" name="SIFRE" id="SIFRE"
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="ORGINATOR">Başlık</label>
                        <input type="text" class="form-control form-control-sm" name="ORGINATOR" id="ORGINATOR"
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="m_kime">Mesajın Geleceği Telefon Numarası</label>
                        <input type="text" class="form-control form-control-sm" name="m_kime" id="m_kime"
                            value="">
                    </div>
                    
                    <button type="submit" name="sms_ayarlar" class="btn btn-success btn-icon-text btn-sm">
                        <i class="mdi mdi-spin mdi-loading"></i>
                        GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>