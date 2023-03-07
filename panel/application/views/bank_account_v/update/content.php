<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Hesap Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post"
                    action="<?php echo base_url("bank_account/update/$item->id"); ?>" enctype="multipart/form-data"
                    autocomplete="off">
                    <input id="id" name="id" type="hidden" value="<?=$item->id?>">
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="banka">Banka Adı</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-sm" name="banka" id="banka"
                                value="<?=$item->banka?>">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="hesap">Hesap Sahibi</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-sm" name="hesap" id="hesap"
                                value="<?=$item->hesap?>">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="sube">Şube Kodu - Şube Adı</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-sm" name="sube" id="sube" value="<?=$item->sube?>">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="hnumara">Hesap Numarası</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-sm" name="hnumara" id="hnumara"
                                value="<?=$item->hnumara?>">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label font-weight-bold" for="iban">Iban</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control form-control-sm" name="iban" id="iban"
                                value="<?=$item->iban?>">
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
                   

                    <div class="form-group row">
                        <div class="col-lg-3 text-right">
                            <label class="col-form-label"></label>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <a href="<?php echo base_url("bank_account"); ?>"></a>
                                <button type="submit" class="btn btn-success btn-icon-text btn-sm"> Güncelle </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>

    </div>
</div>