<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Hesap Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                    enctype="multipart/form-data" autocomplete="off">
                    <input id="id" name="id" type="hidden" value="">
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="banka">Banka Adı</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-sm" name="banka" id="banka" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="hesap">Hesap Sahibi</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-sm" name="hesap" id="hesap" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="sube">Şube Kodu - Şube Adı</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-sm" name="sube" id="sube" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="hnumara">Hesap Numarası</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-sm" name="hnumara" id="hnumara"
                                value="">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="iban">Iban</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-sm" name="iban" id="iban" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">

                        </div>
                        <div class="col-lg-9">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="resim">Banka Logo</label>
                        </div>
                        <div class="col-lg-4">
                            
                            <div class="input-group col-xs-12">
                            <input type="file" name="firma_footerlogo" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="durum">Durum</label>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-check form-check-success d-inline-block mr-2">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="durum" id="durum1" value="1"
                                        checked="">
                                    Aktif
                                    <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check form-check-danger d-inline-block mr-2">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="durum" id="durum2" value="0">
                                    Pasif
                                    <i class="input-helper"></i></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label"></label>
                        </div>
                        <div class="col-lg-9">
                            <button type="submit" name="banka_ekle" class="btn btn-primary btn-icon-text btn-sm">
                                <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                KAYDET
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
