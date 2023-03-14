<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Sayfa Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post"
                    action="<?php echo base_url("page_management/update/$item->id")?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="adi">Başlık</label>
                        <input type="text" class="form-control form-control-sm" name="adi" id="adi"
                            value="<?=$item->adi?>">
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Sayfa Görseli</label>
                            <input type="file" name="resim" class="file-upload-default">
                            <div class="input-group col-xs-6">
                                <div class="col-md-4 col-sm-4">
                                    <a href="#" class="thumbnail white">
                                        <img src="<?php echo base_url('uploads'); ?>/page_management_v/<?php echo $item->resim; ?>"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="sayfa">Bağlantı Sayfası</label>
                        <select class="js-example-basic-single form-control-sm select2-hidden-accessible" name="sayfa"
                            id="sayfa" required="" style="width:100%" tabindex="-1" aria-hidden="true">
                            <option value="<?=$item->sayfa?>">
                                <?php 
                                switch($item->sayfa){
                                    case '0':
                                        echo "Genel";
                                        break;
                                    case '1':
                                        echo "İş Başvurusu";
                                        break;
                                    case '2':
                                        echo "Sipariş Formu Sözleşmesi";
                                        break;

                            }?></option>
                            <option value="0">Genel</option>
                            <option value="1">İş Başvurusu</option>
                            <option value="2">Sipariş Formu Sözleşmesi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea id="summernote" name="aciklama" class="m-0" data-plugin="summernote"
                            data-options="{height: 250}"><?=$item->aciklama?></textarea>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="maxlength-textarea">SEO Açıklama (description)</label>
                                <textarea id="maxlength-textarea" name="description" class="form-control"
                                    maxlength="260" rows="4"><?=$item->description?></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-icon-text btn-sm"> GÖNDER </button>
                        <a href="<?php echo base_url("page_management"); ?>" class="btn btn-danger btn-sm">IPTAL</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>