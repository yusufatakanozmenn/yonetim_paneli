<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">İletişim Ayarları</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">

            <form class="forms-sample" method="post"
                action="<?php echo base_url("contact_settings/update/$item->id"); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Firma Ünvanı</label>
                    <input type="text" class="form-control" name="firma_adi" value="<?php echo $item->firma_adi; ?>"
                        placeholder="Firma Adı">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Firma Telefon</label>
                    <input type="text" class="form-control" name="firma_telefon"
                        value="<?php echo $item->firma_telefon; ?>" placeholder="Firma Telefon">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Firma Fax</label>
                    <input type="text" class="form-control" name="firma_fax" value="<?php echo $item->firma_fax; ?>"
                        placeholder="Firma Fax">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Firma E-Mail</label>
                    <input type="email" class="form-control" name="firma_email"
                        value="<?php echo $item->firma_email; ?>" placeholder="Firma E-mail">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Firma Adres</label>
                    <input type="text" class="form-control" name="firma_adres" value="<?php echo $item->firma_adres; ?>"
                        placeholder="Firma Adres">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn rounded mw-md btn-success">
                        GÜNCELLE </button>
                    <a href="<?php echo base_url("contact_settings/update"); ?>"></a>
                </div>
            </form>
        </div><!-- .widget-body -->
    </div><!-- .widget -->