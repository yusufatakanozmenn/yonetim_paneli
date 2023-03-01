<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="m_server">SMTP Server</label>
                        <input type="text" class="form-control form-control-sm" name="m_server" id="m_server"
                            value="<?php echo $item->m_server; ?>">
                    </div>
                    <div class="form-group">
                        <label for="m_port">SMTP Port</label>
                        <input type="text" class="form-control form-control-sm" name="m_port" id="m_port"
                            value="<?php echo $item->m_port; ?>">
                    </div>

                    <div class="form-group">
                        <label for="m_sertifika">Mail Sertifika</label>
                        <select class="form-control form-control-sm" name="m_sertifika">
                            <option selected style="display:none;">
                                <?php echo $item->m_sertifika ?>
                            </option>
                            <option>TLS</option>
                            <option>SSL</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="m_adresi">SMTP Email</label>
                        <input type="text" class="form-control form-control-sm" name="m_adresi" id="m_adresi"
                            value="<?php echo $item->m_adresi; ?>" data-inputmask="'alias': 'email'">
                    </div>
                    <div class="form-group">
                        <label for="m_parola">SMTP Email Şifre</label>
                        <input type="text" class="form-control form-control-sm" name="m_parola" id="m_parola"
                            value="<?php echo $item->m_parola; ?>">
                    </div>
                    <div class="form-group">
                        <label class="d-block" for="durum">Aktif / Pasif</label>
                        <label class="switch">
                            <input type="checkbox" name="durum" id="durum" value="<?php echo $item->durum; ?>"
                                checked="">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="m_kime">Mesajın Geleceği E-Posta Adresi</label>
                        <input type="text" class="form-control form-control-sm" name="m_kime" id="m_kime"
                            value="<?php echo $item->m_kime; ?>" data-inputmask="'alias': 'email'">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn rounded mw-md btn-success">
                            GÜNCELLE </button>
                        <a href="<?php echo base_url("general_settings/update"); ?>"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>