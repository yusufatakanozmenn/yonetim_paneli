<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="site_url">Site Açılış Tarihi</label>
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker2" data-plugin="datetimepicker">
                                        <input type="text" class="form-control">
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
                                    <div class="input-group bootstrap-timepicker timepicker col-sm-6">
                                        <input id="timepicker2" type="text" class="form-control input-small"
                                            data-plugin="timepicker"
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
                            value="SİTEMİZ BAKIMDADIR">
                    </div>
                    <div class="form-group">
                        <label for="aciklama">Açıklama</label>
                        <textarea id="aciklama" name="aciklama" class="form-control"
                            rows="4">Şu anda bakımdayız. Kısa süre sonra geri döneceğiz .Daha sonra yeniden deneyiniz.</textarea>
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