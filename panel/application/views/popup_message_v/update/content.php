<main id="app-main">
    <div class="main-panel">
        <div class="content-wrapper">
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Açılır Mesaj Resmi</label>
                                            <input type="file" name="resim" class="file-upload-default">
                                            <div class="input-group col-xs-6">
                                                <div class="col-md-4 col-sm-4">
                                                    <a href="#" class="thumbnail white">
                                                        <img src="<?php echo base_url("assets");?>/assets/images/alva_favicon.svg"
                                                            alt="...">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="adi">Mesaj Adı</label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">

                                <div class="form-group">
                                    <label for="url">Mesaj Url</label>
                                    <input type="text" class="form-control form-control-sm" name="url" id="url"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="sekme" class="form-check-input">Tıklandığında
                                            yeni sekmeye gitsin mi ?<i class="input-helper"></i><i
                                                class="input-helper"></i></label>
                                    </div>

                                    <div class="m-b-lg m-r-xl inline-block">
                                        <input id="switch-2-2" type="checkbox" data-switchery="true"
                                            data-color="#10c469" checked="" style="display: none;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="popup_ayarlar"
                                        class="btn btn-success btn-icon-text btn-sm">
                                        <i class="mdi mdi-spin mdi-loading"></i>
                                        GÜNCELLE
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>