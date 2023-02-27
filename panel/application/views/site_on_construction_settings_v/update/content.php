<div class="wrap">
        <section class="app-content">
            <div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürün Listesi
        </h4>

        
    <div class="col-md-12">
       <div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                    enctype="multipart/form-data">
                    <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="site_url">Site Açılış tarihi</label>
                                <div class="form-group">                                   
                                    <div class="input-group bootstrap-timepicker timepicker col-sm-6">
                                        <input id="timepicker2" type="text" class="form-control input-small"
                                            data-plugin="timepicker"
                                            name="acilis_tarihi"
                                            value="<?php echo $item->acilis_tarih;?>"
                                            data-options="{ showInputs: false, showMeridian: false }">
                                        <span class="input-group-addon bg-info"><i
                                                class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="site_url">Site Açılış Zamanı</label>
                                <div class="form-group">                                   
                                    <div class="input-group bootstrap-timepicker timepicker col-sm-6">
                                        <input id="timepicker2" type="text" class="form-control input-small"
                                            data-plugin="timepicker"
                                            name="acilis_zaman"
                                            value="<?php echo $item->acilis_zaman;?>"
                                            data-options="{ showInputs: false, showMeridian: false }">
                                        <span class="input-group-addon bg-info"><i
                                                class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="baslik">Başlık</label>
                        <input type="text" class="form-control form-control-sm" name="baslik" id="baslik"
                            value="<?php echo $item->baslik;?>">
                    </div>
                    <div class="form-group">
                        <label for="aciklama">Açıklama</label>
                        <textarea id="aciklama" name="aciklama" class="form-control"
                            rows="4"><?php echo $item->aciklama;?></textarea>
                    </div>
                    <button type="submit" name="site_bakim_modu" class="btn btn-success btn-icon-text btn-sm">
                        <i class="mdi mdi-spin mdi-loading"></i>
                        GÜNCELLE
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
    </div><!-- END column -->
</div>        </section><!-- #dash-content -->
    </div>