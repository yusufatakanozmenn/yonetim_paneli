<div class="col-sm-12" style="padding: 10px;">

    <div class="" id="urun-bilgileri" role="tabpanel" aria-labelledby="home-tab-vertical">
        <div class="form-group">
            <label for="sira">Başlık</label>
            <input type="text" class="form-control form-control-sm" min="0" name="sira" id="sira" value="">
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="adi">Sıra</label>
                <input type="number" class="form-control form-control-sm" name="adi" id="adi" value="">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Ürün Kodu</label>
                <input type="text" class="form-control form-control-sm" name="urun_kodu" id="urun_kodu" value="">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Fiyat</label>
                <input type="text" class="form-control form-control-sm" name="fiyat" value="">
            </div>
        </div>
        <div class="col-sm-6">
            <!-- /.form-group -->
            <div class="form-group">
                <label>İndirimli Fiyat</label>
                <input type="text" class="form-control form-control-sm" name="ifiyat" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <select class="form-control w-100" name="stok" id="stok" required="">
                <option value="0" selected="">Stokta Var</option>
                <option value="1">Tükendi</option>
            </select>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <label for="secenek">Kategori</label>
            <select class="js-example-basic-multiple form-control-sm select2-hidden-accessible" name="kategori"
                id="secenek" required="" style="width:100%" tabindex="-1" aria-hidden="true">
                <option value="41">Ürünler</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single"
                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                        aria-labelledby="select2-secenek-container"><span class="select2-selection__rendered"
                            id="select2-secenek-container" title="Ürünler">Ürünler</span><span
                            class="select2-selection__arrow" role="presentation"><b
                                role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                    aria-hidden="true"></span></span>
        </div>

        <div class="form-group row col-md-6">
            <label>Listeleme Görseli</label>
            <input type="file" name="resim" class="file-upload-default">
            <div class="input-group col-xs-12">

            </div>
        </div>
        <div class="form-group row col-md-6">
            <label>Fotoğraflar</label>
            <input type="file" name="resimler[]" multiple="" class="file-upload-default">
            <div class="input-group col-xs-12">

            </div>
        </div>
        <div class="form-group row col-md-6">
            <label>Teknik Döküman</label>
            <input type="file" name="dokuman" class="file-upload-default">
            <div class="input-group col-xs-12">

            </div>
        </div>
        <div class="form-group row col-md-6">
            <label>E-Katalog</label>
            <input type="file" name="katalog" class="file-upload-default">
            <div class="input-group col-xs-12">

            </div>
        </div>



        <div class="form-group">
            <label for="spot">Spot Metin <i class="icon-info text-info" data-toggle="popover"
                    data-content="Spot metin, içeriğinizi özetleyen bir ya da iki cümlelik metindir. 180 karakteri geçmemesi gerekmektedir.  Spot metinde de tamamen BÜYÜK harften kaçınmalı ve çift tırnak kullanılmamalıdır."
                    data-trigger="hover" data-original-title="Spot Metin"></i></label>
            <textarea id="spot" name="spot" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label>Açıklama</label>
            <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
        </div>

    </div>
    <div class="" id="urun-ozellikleri" role="tabpanel" aria-labelledby="contact-tab-vertical">

        <div class="tab-pane" id="ozellikler">
            <div id="secyaz"></div>
        </div>

    </div>

    <div class="" id="seo-ayarlari" role="tabpanel" aria-labelledby="contact-tab-vertical">

        <div class="form-group">
            <label for="maxlength-textarea">SEO Açıklama (Description)</label>
            <textarea id="maxlength-textarea" name="description" class="form-control" maxlength="260"
                rows="2"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="popup_ayarlar" class="btn btn-success btn-icon-text btn-sm">
                <i class="mdi mdi-spin mdi-loading"></i>
                GÖNDER
            </button>
        </div>

    </div>

</div>