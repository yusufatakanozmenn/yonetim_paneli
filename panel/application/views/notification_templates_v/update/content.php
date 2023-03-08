<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <label class="badge badge-primary" style="font-size:1rem;">
                            <?php echo $item->sablon_adi; ?>
                        </label>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post"
                            action="<?php echo base_url("notification_templates/update_form/$item->id"); ?>"
                            enctype="multipart/form-data">

                            <div class="form-group">
                                <div class="card-header">
                                    Üye'ye E-Posta Gönder
                                </div>
                                <div class="form-group">
                                    <input data-url="<?php echo base_url(""); ?>" class="isActiveModule" id="switch-2-2"
                                        name="alan1" type="checkbox" data-switchery data-color="#10c469" <?php echo ($item->ubildirim) ? "checked" : ""; ?> />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="card-header">
                                    Üye'ye SMS Gönder
                                </div>
                                <div class="form-group">
                                    <input data-url="<?php echo base_url(""); ?>" class="isActiveModule" id="switch-2-2"
                                        name="alan1" type="checkbox" data-switchery data-color="#10c469" <?php echo ($item->sbildirim) ? "checked" : ""; ?> />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="card-header">
                                    Yönetici'ye E-Posta Gönder
                                </div>
                                <div class="form-group">
                                    <input data-url="<?php echo base_url(""); ?>" class="isActiveModule" id="switch-2-2"
                                        name="alan1" type="checkbox" data-switchery data-color="#10c469" <?php echo ($item->abildirim) ? "checked" : ""; ?> />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="card-header">
                                    Yönetici'ye SMS Gönder
                                </div>
                                <div class="form-group">
                                    <input data-url="<?php echo base_url(""); ?>" class="isActiveModule" id="switch-2-2"
                                        name="alan1" type="checkbox" data-switchery data-color="#10c469" <?php echo ($item->ysbildirim) ? "checked" : ""; ?> />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="adi">E-Posta Konu Başlığı (Üye)</label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi"
                                    plaseholder="Mesaj Adı" value="<?php echo $item->konu; ?>">
                            </div>

                            <div class="form-group">
                                <label for="url">E-Posta Konu Başlığı (Yönetici)</label>
                                <input type="text" class="form-control form-control-sm" name="url" id="url"
                                    placeholder="Mesaj Url" value="<?php echo $item->konu2; ?>">
                            </div>
                            <div class="form-group sbildirim">
                                <label>Üye'ye Gidecek SMS</label>
                                <textarea name="icerik" class="form-control" id="icerik4" rows="9"></textarea>
                            </div>

                            <div class="form-group ysbildirim">
                                <label for="icerik4">Yönetici'ye Gidecek SMS</label>
                                <textarea name="icerik4" class="form-control" id="icerik4" rows="9"></textarea>
                            </div>
                            <div class="alert alert-info" role="alert">
                                Değişkenler : <strong>{email},{tarih},{ip},{logo},{domain}</strong> Belirtilen
                                değişkenleri
                                içerik'de istediğiniz yere koyarak bildirim'de belirtilmesini sağlayabilirsiniz.
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn rounded mw-md btn-success">
                                    GÜNCELLE </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <label class="badge badge-primary" style="font-size:15px;">E-bülten</label>
                <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                    enctype="multipart/form-data">
                    <input id="id" name="id" type="hidden" value="16">
                    <div class="card mb-4">
                        <div class="card-header">
                            Üye'ye E-Posta Gönder
                        </div>
                        <div class="card-body m-0 p-0 pl-3">
                            <div class="form-check form-check-success d-inline-block mr-2">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="ubildirim" id="ubildirim_sec1"
                                        value="1" checked="">
                                    Aktif
                                    <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check form-check-danger d-inline-block mr-2">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="ubildirim" id="ubildirim_sec2"
                                        value="0">
                                    Pasif
                                    <i class="input-helper"></i></label>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            Üye'ye SMS Gönder
                        </div>
                        <div class="card-body m-0 p-0 pl-3">
                            <div class="form-check form-check-success d-inline-block mr-2">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="sbildirim" id="sbildirim_sec1"
                                        value="1" checked="">
                                    Aktif
                                    <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check form-check-danger d-inline-block mr-2">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="sbildirim" id="sbildirim_sec2"
                                        value="0" checked="">
                                    Pasif
                                    <i class="input-helper"></i></label>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            Yönetici'ye E-Posta Gönder
                        </div>
                        <div class="card-body m-0 p-0 pl-3">
                            <div class="form-check form-check-success d-inline-block mr-2">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="abildirim" id="abildirim_sec1"
                                        value="1" checked="">
                                    Aktif
                                    <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check form-check-danger d-inline-block mr-2">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="abildirim" id="abildirim_sec2"
                                        value="0">
                                    Pasif
                                    <i class="input-helper"></i></label>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            Yönetici'ye SMS Gönder
                        </div>
                        <div class="card-body m-0 p-0 pl-3">
                            <div class="form-check form-check-success d-inline-block mr-2">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="ysbildirim" id="ysbildirim_sec1"
                                        value="1" checked="">
                                    Aktif
                                    <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check form-check-danger d-inline-block mr-2">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="ysbildirim" id="ysbildirim_sec2"
                                        value="0" checked="">
                                    Pasif
                                    <i class="input-helper"></i></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ubildirim">
                        <label for="konu">E-Posta Konu Başlığı (Üye)</label>
                        <input type="text" class="form-control form-control-sm" name="konu" id="konu"
                            value="E-Bülten kaydınızı aldık.">
                    </div>
                    <div class="form-group abildirim">
                        <label for="konu2">E-Posta Konu Başlığı (Yönetici)</label>
                        <input type="text" class="form-control form-control-sm" name="konu2" id="konu2"
                            value="Web sitenizden ebülten bildirimi var!">
                    </div>


                    <div class="form-group sbildirim" style="display: none;">
                        <label for="icerik3">Üye'ye Gidecek SMS</label>
                        <textarea name="icerik3" class="form-control" id="icerik3" rows="9"></textarea>
                    </div>

                    <div class="form-group ysbildirim" style="display: none;">
                        <label for="icerik4">Yönetici'ye Gidecek SMS</label>
                        <textarea name="icerik4" class="form-control" id="icerik4" rows="9"></textarea>
                    </div>
                    <div class="alert alert-info" role="alert">
                        Değişkenler : <strong>{email},{tarih},{ip},{logo},{domain}</strong> Belirtilen değişkenleri
                        içerik'de istediğiniz yere koyarak bildirim'de belirtilmesini sağlayabilirsiniz.
                    </div>
                    <button type="submit" name="sablon_guncelle" class="btn btn-success btn-icon-text btn-sm">
                        <i class="mdi mdi-reload  btn-icon-prepend"></i>
                        KAYDET
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>