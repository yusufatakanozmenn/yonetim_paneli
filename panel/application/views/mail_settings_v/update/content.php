<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="m_server">SMTP Server</label>
                        <input type="text" class="form-control form-control-sm" name="m_server" id="m_server"
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="m_port">SMTP Port</label>
                        <input type="text" class="form-control form-control-sm" name="m_port" id="m_port" value="">
                    </div>

                    <div class="form-group">
                        <label for="m_sertifika">Mail Sertifika</label>
                        <select class="js-example-basic-single form-control-sm select2-hidden-accessible"
                            name="m_sertifika" id="m_sertifika" style="width:100%" tabindex="-1" aria-hidden="true">
                            <option value="tls" selected="">TLS</option>
                            <option value="ssl">SSL</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            style="width: 100%;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-m_sertifika-container"><span
                                        class="select2-selection__rendered" id="select2-m_sertifika-container"
                                        title="TLS"></span><span class="select2-selection__arrow"
                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>

                    <div class="form-group">
                        <label for="m_adresi">SMTP Email</label>
                        <input type="text" class="form-control form-control-sm" name="m_adresi" id="m_adresi"
                            value="" data-inputmask="'alias': 'email'">
                    </div>
                    <div class="form-group">
                        <label for="m_parola">SMTP Email Şifre</label>
                        <input type="text" class="form-control form-control-sm" name="m_parola" id="m_parola"
                            value="">
                    </div>
                    <div class="form-group">
                        <label class="d-block" for="durum">Aktif / Pasif</label>
                        <label class="switch">
                            <input type="checkbox" name="durum" id="durum" value="1" checked="">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="m_kime">Mesajın Geleceği E-Posta Adresi</label>
                        <input type="text" class="form-control form-control-sm" name="m_kime" id="m_kime"
                            value="" data-inputmask="'alias': 'email'">
                    </div>
                    <button type="submit" name="mail_ayarlar" class="btn btn-success btn-icon-text btn-sm">
                        <i class="mdi mdi-spin mdi-loading"></i>
                        GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>