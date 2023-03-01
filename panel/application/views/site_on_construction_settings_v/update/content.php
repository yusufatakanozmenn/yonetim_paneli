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
                                    <form class="forms-sample" method="post"
                                        action="<?php echo base_url("site_on_construction_settings/update/$item->id"); ?>"
                                        enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="site_url">Site Açılış tarihi</label>
                                                    <div class="form-group">
                                                        <div class="input-group date col-sm-6" id="datetimepicker4"
                                                            data-plugin="datetimepicker"
                                                            data-options="{  format: 'DD/MM/YYYY' }">
                                                            <input type="text" class="form-control input-small"
                                                                name="acilis_tarihi" placeholder="Açılış Tarihi"
                                                                value="<?php echo $item->acilis_tarih; ?>">
                                                            <span class="input-group-addon bg-info text-white">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="site_url">Site Açılış Zamanı</label>
                                                    <div class="form-group">
                                                        <div
                                                            class="input-group bootstrap-timepicker timepicker col-sm-6">
                                                            <input id="timepicker2" type="text"
                                                                class="form-control input-small"
                                                                data-plugin="timepicker" name="acilis_zaman"
                                                                value="<?php echo $item->acilis_zaman; ?>"
                                                                data-options="{ showInputs: false, showMeridian: false }" 
                                                                placeholder="Açılış Zamanı">
                                                            <span class="input-group-addon bg-info"><i
                                                                    class="glyphicon glyphicon-time"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="baslik">Başlık</label>
                                            <input type="text" class="form-control form-control-sm" name="baslik"
                                                id="baslik" value="<?php echo $item->baslik; ?>" placeholder="Başlık">
                                        </div>
                                        <div class="form-group">
                                            <label for="aciklama">Açıklama</label>
                                            <textarea id="aciklama" name="aciklama" class="form-control"
                                                rows="4"><?php echo $item->aciklama; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn rounded mw-md btn-success">
                                                GÜNCELLE </button>
                                            <a
                                                href="<?php echo base_url("site_on_construction_settings/update"); ?>"></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- END column -->
            </div>
    </section><!-- #dash-content -->
</div>