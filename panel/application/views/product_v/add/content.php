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
                                <div id="datepicker-popup" class="input-group date datepicker">
                                    <input type="text" class="form-control" name="acilis_tarih" value="26-09-2022">
                                    <span class="input-group-addon input-group-append border-left">
                                        <span class="mdi mdi-calendar input-group-text"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="site_url">Site Açılış Zamanı</label>
                                <div class="input-group date" id="timepicker-example" data-target-input="nearest">
                                    <div class="input-group" data-target="#timepicker-example"
                                        data-toggle="datetimepicker">
                                        <input type="text" name="acilis_zaman" class="form-control datetimepicker-input"
                                            value="10:10" data-target="#timepicker-example">
                                        <div class="input-group-addon input-group-append"><i
                                                class="mdi mdi-clock input-group-text"></i></div>
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