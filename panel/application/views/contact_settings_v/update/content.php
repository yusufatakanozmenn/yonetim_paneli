<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">İletişim Ayarları</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">

            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Firma Ünvanı</label>
                    <input type="email" class="form-control" name="firma_adi" value="<?php echo $item->firma_adi; ?>">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Firma Telefon</label>
                    <input type="text" class="form-control" name="firma_telefon" value="<?php echo $item->firma_telefon; ?>">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Firma Fax</label>
                    <input type="text" class="form-control" name="firma_fax" value="<?php echo $item->firma_fax; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Firma E-Mail</label>
                    <input type="email" class="form-control" name="firma_email" value="<?php echo $item->firma_email; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Firma Adres</label>
                    <input type="text" class="form-control" name="firma_adres" value="<?php echo $item->firma_adres; ?>">
                </div>

                <button type="button" class="btn rounded mw-md btn-success">Güncelle</button>
            </form>
        </div><!-- .widget-body -->
    </div><!-- .widget -->