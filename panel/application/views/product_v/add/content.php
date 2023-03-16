<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Yeni Ürün Ekle</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post" action="<?php echo base_url('product/save')?>"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="adi">Başlık</label>
                                <input type="text" class="form-control form-control-sm" min="0" name="adi" id="adi"
                                    value="">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="sira">Sıra</label>
                                        <input type="number" class="form-control form-control-sm" name="sira" id="sira"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Ürün Kodu</label>
                                        <input type="text" class="form-control form-control-sm" name="urun_kodu"
                                            id="urun_kodu" value="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Fiyat</label>
                                        <input type="text" class="form-control form-control-sm" name="fiyat" value="">
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>İndirimli Fiyat</label>
                                        <input type="text" class="form-control form-control-sm" name="ifiyat" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <select class="form-control w-100" name="stok" id="stok" required="">
                                    <option value="0" selected="">Stokta Var</option>
                                    <option value="1">Tükendi</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="secenek">Kategori</label>
                                <select class="js-example-basic-multiple form-control-sm select2-hidden-accessible"
                                    name="kategori" id="secenek" required="" style="width:100%" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="41">Ürünler</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-secenek-container"><span
                                                class="select2-selection__rendered" id="select2-secenek-container"
                                                title="Ürünler">Ürünler</span><span class="select2-selection__arrow"
                                                role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-lg-12 ">
                            <label class="col-form-label font-weight-bold" for="resim">Listeleme Görseli</label>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-group col-xs-12">
                                <input type="file" name="resim" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <div class="col-md-12 col-sm-12">
                                        <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                                    </div>
                                </div>
                            </div>
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
                        <textarea name="aciklama" class="m-0" data-plugin="summernote"
                            data-options="{height: 250}"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="maxlength-textarea">SEO Açıklama (Description)</label>
                        <textarea id="maxlength-textarea" name="seo" class="form-control" maxlength="260"
                            rows="2"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn rounded mw-md btn-success "> KAYDET </button>
                        <a href="<?php echo base_url("product"); ?>"></a>
                    </div>
                    </form>

                </div>


            </div>