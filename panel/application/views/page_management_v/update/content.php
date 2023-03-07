<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Sayfa Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="<?php echo base_url("page_management/update/$item->id")?>"
                    enctype="multipart/form-data">
                    <input id="id" name="id" type="hidden" value="">
                    <div class="form-group">
                        <label for="sira">Sıra</label>
                        <input type="number" class="form-control form-control-sm" min="0" name="sira" id="sira"
                            value="<?=$item->id?>">
                    </div>
                    <div class="form-group">
                        <label for="adi">Başlık</label>
                        <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="<?=$item->adi?>">
                    </div>
                    <!--
					<div class="form-group">
						<label for="icon">Hizmet İcon <a target="_blank" href="https://fontawesome.com/icons?d=gallery">İconlar</a></label>
						<input type="text" class="form-control form-control-sm" name="icon" id="icon" value="" />
					</div>
					
					-->
                    <div class="form-group">
                        <div class="card-header">
                            Hizmet Resimleri
                        </div>
                        <input type="file" name="firma_footerlogo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <div class="col-md-6 col-sm-6">
                                <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                            </div>
                        </div>
                        <div class="form-group row col-md-6">
                            <label for="sayfa">Bağlantı Sayfası</label>
                            <select class="js-example-basic-single form-control-sm select2-hidden-accessible"
                                name="sayfa" id="sayfa" required="" style="width:100%" tabindex="-1" aria-hidden="true">
                                <option value="0">Genel</option>
                                <option value="1">İş Başvurusu</option>
                                <option value="2">Sipariş Formu Sözleşmesi</option>
                            </select><span
                                class="select2 select2-container select2-container--default select2-container--below select2-container--open"
                                dir="ltr" style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="true" tabindex="0"
                                        aria-labelledby="select2-sayfa-container" aria-owns="select2-sayfa-results"
                                        aria-activedescendant="select2-sayfa-result-e2sb-0"><span
                                            class="select2-selection__rendered" id="select2-sayfa-container"
                                            title="Genel">genel</span><span class="select2-selection__arrow"
                                            role="presentation"><b role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <div class="form-group ">
                            <label class="switch">
                                <input type="checkbox" name="durum" id="durum" value="<?=$item->durum?>" checked="">
                                <span class="slider"></span>
                            </label>
                            <label class="d-inline-block" style="line-height: 34px;" for="durum">Durum</label>
                        </div>
                        <div class="form-group ">
                            <label class="switch">
                                <input type="checkbox" name="anasayfa" id="anasayfa" value="1" checked="">
                                <span class="slider"></span>
                            </label>

                            <label class="d-inline-block" style="line-height: 34px;" for="anasayfa">Anasayfa'da Gözüksün
                                mü
                                ?</label>
                        </div>
                    </div>
                    <div id="summernote"></div>
                    <div class="card mb-4">
                        <div class="card-header">
                            SEO AYARLARI
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="maxlength-textarea">Sayfa Açıklama (description)</label>
                                <textarea id="maxlength-textarea" name="aciklama"  class="form-control"
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