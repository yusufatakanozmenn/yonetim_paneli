<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Sayfa Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="<?php echo base_url('page_management/save')?>"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="adi">Başlık</label>
                        <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                    </div>
                    <div class="form-group">
                        <div class="card-header">
                            Hizmet Resimleri
                            <input type="file" disabled name="resim" class="file-upload-default">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="sayfa">Bağlantı Sayfası</label>
                        <select class="js-example-basic-single form-control-sm select2-hidden-accessible"
                            name="sayfa" id="sayfa" required="" style="width:100%" tabindex="-1" aria-hidden="true">
                            <option value="0">Genel</option>
                            <option value="1">İş Başvurusu</option>
                            <option value="2">Sipariş Formu Sözleşmesi</option>
                        </select>
                    </div>

                    <div class="form-group">
                                <label>Açıklama</label>
                                <textarea id="summernote" name="aciklama" class="m-0" data-plugin="summernote"
                                    data-options="{height: 250}"></textarea>
                            </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="maxlength-textarea">SEO Açıklama (description)</label>
                                <textarea id="maxlength-textarea" name="description" class="form-control"
                                    maxlength="260" rows="4"></textarea>
                            </div>

                        </div>
                    </div>
                    <button type="submit" name="sayfa_ekle" class="btn btn-primary btn-icon-text btn-sm">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i>
                        KAYDET
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>