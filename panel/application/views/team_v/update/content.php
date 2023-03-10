<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Ekip Ekle
        </h4>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="post"
                            action="<?php echo base_url("team/update/$item->id"); ?>" enctype="multipart/form-data">
                            <input id="id" name="id" type="hidden" value="">
                            <div class="form-group">
                                <label for="sira">Sıra</label>
                                <input type="text" class="form-control form-control-sm" name="sira" id="sira"
                                    value="<?=$item->sira?>">
                            </div>
                            <div class="form-group">
                                <label for="adi">Başlık</label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi"
                                    value="<?=$item->adi?>">
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <label for="twitter">Twitter Sayfa URL</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="twitter" id="twitter"
                                                value="<?=$item->twitter?>">

                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="instagram">Instagram Sayfa URL</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="instagram" id="instagram"
                                                value="<?=$item->instagram?>">

                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="linkedin">LinkedIn Sayfa URL</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="linkedin" id="linkedin"
                                                value="<?=$item->linkedin?>">

                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Kapak Resmi</label>
                            <input type="file" name="resim" class="file-upload-default">
                            <div class="input-group col-xs-6">
                                <div class="col-md-4 col-sm-4">
                                    <a href="#" class="thumbnail white">
                                        <img src="<?php echo base_url('uploads'); ?>/team_v/<?php echo $item->resim; ?>"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label class="switch">
                                <input type="checkbox" name="durum" id="durum" value="<?=$item->durum?>" checked="">
                                <span class="slider"></span>
                            </label>
                            <label class="d-inline-block" style="line-height: 34px;" for="durum">Durum</label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-icon-text btn-sm"> GÖNDER </button>
                            <a href="<?php echo base_url("team"); ?>"></a>
                            </form>
                        </div>
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