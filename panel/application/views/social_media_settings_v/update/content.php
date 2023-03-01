<div class="col-md-12">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">İletişim Ayarları</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">

            <form class="forms-sample" method="post"
                action="<?php echo base_url("social_media_settings/update/$item->id"); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Facebook Sayfa URL</label>
                    <input type="text" class="form-control" name="facebook" value="<?php echo $item->facebook; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Twitter Sayfa URL</label>
                    <input type="text" class="form-control" name="twitter" value="<?php echo $item->twitter; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Instagram Sayfa URL</label>
                    <input type="text" class="form-control" name="instagram" value="<?php echo $item->instagram; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">LinkedIn Sayfa URL</label>
                    <input type="text" class="form-control" name="linkedin" value="<?php echo $item->linkedin; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Youtube Sayfa URL</label>
                    <input type="text" class="form-control" name="youtube" value="<?php echo $item->youtube; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn rounded mw-md btn-success">
                        GÜNCELLE </button>
                    <a href="<?php echo base_url("social_media_settings/update"); ?>"></a>
                </div>
                
            </form>
        </div><!-- .widget-body -->
    </div><!-- .widget -->