<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">SMS Ayarları</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post"
                    action="<?php echo base_url("sms_settings/update/$item->id"); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="postUrl">Post URL</label>
                        <input type="text" class="form-control form-control-sm" name="postUrl" id="postUrl"
                            value="<?php echo $item->postUrl;?>">
                    </div>
                    <div class="form-group">
                        <label for="KULLANICIADI">Kullanıcı Adı</label>
                        <input type="text" class="form-control form-control-sm" name="KULLANICIADI" id="KULLANICIADI"
                            value="<?php echo $item->KULLANICIADI;?>">
                    </div>
                    <div class="form-group">
                        <label for="SIFRE">Api Secret</label>
                        <input type="text" class="form-control form-control-sm" name="SIFRE" id="SIFRE"
                            value="<?php echo $item->SIFRE;?>">
                    </div>
                    <div class="form-group">
                        <label for="ORGINATOR">Başlık</label>
                        <input type="text" class="form-control form-control-sm" name="ORGINATOR" id="ORGINATOR"
                            value="<?php echo $item->ORGINATOR;?>">
                    </div>
                    <div class="form-group">
                        <label for="m_kime">Mesajın Geleceği Telefon Numarası</label>
                        <input type="text" class="form-control form-control-sm" name="m_kime" id="m_kime"
                            value="<?php echo $item->m_kime;?>">
                    </div>
                    
                     <div class="form-group">
                        <button type="submit" class="btn rounded mw-md btn-success">
                            GÜNCELLE </button>
                        <a href="<?php echo base_url("sms_settings/update"); ?>"></a>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
