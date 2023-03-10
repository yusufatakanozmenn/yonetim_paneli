<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Slider Güncelle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="<?php echo base_url("slider/update/$item->id"); ?>"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="sira">Slayt Sıra Nosu</label>
                        <input type="number" class="form-control form-control-sm" name="sira" id="sira" min="0"
                            value="<?=$item->sira?>">
                    </div>
                    <div class="form-group">
                        <label for="adi">Slayt Başlığı</label>
                        <input type="text" class="form-control form-control-sm" name="adi" id="adi"
                            value="<?=$item->adi?>">
                    </div>
                    <div class="form-group">
                        <label for="url">Slayt URL</label>
                        <input type="text" class="form-control form-control-sm" name="url" id="url"
                            value="<?=$item->url?>">
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Slider Görseli</label>
                            <input type="file" name="resim" class="file-upload-default">
                            <div class="input-group col-xs-6">
                                <div class="col-md-4 col-sm-4">
                                    <a href="#" class="thumbnail white">
                                        <img src="<?php echo base_url('uploads'); ?>/slider_v/<?php echo $item->resim; ?>"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

            <div class="form-group">
                <label for="adi">Açıklama</label>
                <textarea class="form-control" name="aciklama"><?=$item->aciklama?></textarea>
            </div>

            <div class="form-group">
                <label for="video">Varsa Video Embed Video ID <a href="images/embed.png" target="_blank"
                        class="hoverZoomLink">Neresi ?</a></label>
                <input type="text" class="form-control form-control-sm" name="video" id="video"
                    value="<?=$item->video?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-icon-text btn-sm"> GÖNDER </button>
                <a href="<?php echo base_url("slider"); ?>" class="btn btn-danger btn-sm">IPTAL</a>
                </form>
            </div>

            </form>
        </div>
    </div>
</div>
</div>
</div>