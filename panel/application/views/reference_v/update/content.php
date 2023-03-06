<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <h4 class="widget-header">
                        Referans Güncelle
                    </h4>
                    <hr class="widget-separator">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample" method="post"
                                        action="<?php echo base_url("reference/update/$item->id"); ?>"
                                        enctype="multipart/form-data">
                                        <input id="id" name="id" type="hidden" value="<?=$item->id?>">

                                        <div class="form-group">
                                            <label for="adi">Başlık</label>
                                            <input type="text" class="form-control form-control-sm" name="adi" id="adi"
                                                value="<?=$item->adi?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="sira">Sıra</label>
                                            <input type="text" class="form-control form-control-sm" name="sira"
                                                id="sira" value="<?=$item->sira?>">
                                        </div>

                                        <div class="form-group row col-md-6">
                                            <label>Kapak Görseli</label>
                                            <div class="form-group">
                                                <input type="file" name="firma_footerlogo" class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <div class="col-md-6 col-sm-6">
                                                        <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="switch">
                                                <input type="checkbox" name="durum" id="durum" value="1" checked="">
                                                <span class="slider"></span>
                                            </label>
                                            <label class="d-inline-block" style="line-height: 34px;"
                                                for="durum">Durum</label>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="switch">
                                                <input type="checkbox" name="anasayfa" id="anasayfa" value="1">
                                                <span class="slider"></span>
                                            </label>

                                            <label class="d-inline-block" style="line-height: 34px;"
                                                for="anasayfa">Anasayfa'da
                                                Gözüksün mü ?</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" id="detay" name="detay"
                                                        class="form-check-input" onchange="degistir()">Detay Sayfası
                                                    Gösterilsin mi ?<i class="input-helper"></i><i
                                                        class="input-helper"></i></label>
                                            </div>
                                        </div>
                                    

                                                                      

                                        <div class="form-group">
                                            <button type="submit" class="btn rounded mw-md btn-success">
                                                GÜNCELLE </button>
                                            <a href="<?php echo base_url("reference/update"); ?>"></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    </form>
                </div>
            </div>

        </div>
</div>