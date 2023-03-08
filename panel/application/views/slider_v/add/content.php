<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Slider Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="<?php echo base_url("slider/save"); ?>"
                    enctype="multipart/form-data">
                    <input id="id" name="id" type="hidden" value="">
                    <div class="form-group">
                        <label for="sira">Slayt Sıra Nosu</label>
                        <input type="number" class="form-control form-control-sm" name="sira" id="sira" min="0"
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="adi">Slayt Başlığı</label>
                        <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                    </div>
                    <div class="form-group">
                        <label for="url">Slayt URL</label>
                        <input type="text" class="form-control form-control-sm" name="url" id="url" value="">
                    </div>

                    <div class="form-group row col-md-6">
                        <label>Slayt Görseli Seçiniz (Önerilen Ölçüler: 1920x760)</label>
                        <div class="input-group col-xs-12">
                            <div class="form-group">
                                <input type="file" name="firma_footerlogo" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <div class="col-md-6 col-sm-6">
                                        <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>

            <div class="form-group">
                <label for="adi">Açıklama</label>
                <textarea class="form-control" name="aciklama"></textarea>
            </div>

            <div class="form-group">
                <label for="video">Varsa Video Embed Video ID <a href="images/embed.png" target="_blank"
                        class="hoverZoomLink">Neresi ?</a></label>
                <input type="text" class="form-control form-control-sm" name="video" id="video" value="">
            </div>
            <div class="form-group">
                <label class="d-block" for="durum">Durum</label>
                <label class="switch">
                    <input type="checkbox" name="durum" id="durum" value="" checked="">
                    <span class="slider"></span>
                </label>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="sekme" class="form-check-input">Tıklandığında yeni sekmeye
                        gitsin mi ?<i class="input-helper"></i><i class="input-helper"></i></label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-icon-text btn-sm"> GÖNDER </button>
                <a href="<?php echo base_url("slider"); ?>"></a>

            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>