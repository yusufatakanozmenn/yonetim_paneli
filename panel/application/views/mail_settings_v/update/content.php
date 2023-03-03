<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Mail Ayarları</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post"
                    action="<?php echo base_url("mail_settings/update/$item->id"); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="m_server">SMTP Server</label>
                        <input type="text" class="form-control form-control-sm" name="m_server" id="m_server"
                            value="<?php echo $item->m_server; ?>" placeholder="SMTP Server">
                    </div>
                    <div class="form-group">
                        <label for="m_port">SMTP Port</label>
                        <input type="text" class="form-control form-control-sm" name="m_port" id="m_port"
                            value="<?php echo $item->m_port; ?>" placeholder="SMTP Port">
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
                        <input type="email" class="form-control form-control-sm" name="m_adresi"
                            placeholder="SMTP Email" id="m_adresi" value="<?php echo $item->m_adresi; ?>"
                            data-inputmask="'alias': 'email'">
                    </div>
                    <div class="form-group">
                        <label for="m_parola">SMTP Email Şifre</label>
                        <input type="text" class="form-control form-control-sm" name="m_parola" id="m_parola"
                            value="<?php echo $item->m_parola; ?>" placeholder="SMTP Email Şifre">
                    </div>
                    <div class="form-check">
                        <label class="d-block" for="durum">Aktif / Pasif</label>
                        <div class="form-check">
                            <div class="m-b-lg m-r-xl inline-block">
                                <input class="formIsActive" id="durum" type="checkbox" data-switchery
                                    data-color="#10c469" <?php echo ($item->durum) ? "checked" : ""; ?> />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="m_kime">Mesajın Geleceği E-Posta Adresi</label>
                        <input type="email" class="form-control form-control-sm" name="m_kime" id="m_kime"
                            value="<?php echo $item->m_kime; ?>" data-inputmask="'alias': 'email'"
                            placeholder="E-Posta Adresi">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn rounded mw-md btn-success">
                            GÜNCELLE </button>
                        <a href="<?php echo base_url("mail_settings/update"); ?>"></a>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
