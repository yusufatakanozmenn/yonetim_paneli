<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Blog Ekle
        </h4>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                            <input id="id" name="id" type="hidden" value="">
                            <div class="form-group">
                                <label for="sira">Sıra</label>
                                <input type="number" class="form-control form-control-sm" min="0" name="sira" id="sira"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="adi">Başlık <i class="icon-info text-info" data-toggle="popover"
                                        data-content="Proje adında tamamen BÜYÜK harf kullanmayın. 70 karakterden uzun başlıkları Google indexlemede göstermez ve değerlendirmez. Bu nedenle uzun başlıklar kullanmaktan kaçının. Başlıklarda çift tırnak kesinlikle kullanmayın."
                                        data-trigger="hover" data-original-title="Başlık"></i></label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                            </div>

                            <div class="form-group">
                                <label for="videoid">YouTube Video ID <i class="icon-info text-info"
                                        data-toggle="popover"
                                        data-content="Haber içeriğinizin haber detay görseli alanında görsel yerine, haberin videosunu gösterebilirsiniz. Bunun için Youtube'a yüklediğiniz videonuzun sadece ID numarasını bu alana yapıştırmanız yeterlidir. (Ör: https://www.youtube.com/watch?v=TqeSxMdnEQE adresindeki videonun ID'si v= sorasındaki ID numarasıdır. TqeSxMdnEQE eklenmesi yeterlidir.)"
                                        data-trigger="hover" data-original-title="YouTube Video ID"></i></label>
                                <input type="text" class="form-control form-control-sm" name="videoid" id="videoid"
                                    value="">
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Yayın Tarihi <i class="icon-info text-info" data-toggle="popover"
                                            data-content="İçeriğin ilk eklendiği tarihtir. Sistem ekleme sırasında otomatik olarak verir. Dilerseniz tarihi değiştirebilirsiniz."
                                            data-trigger="hover" data-original-title="Yayın Tarihi"></i></label>
                                    <div class="input-group">
                                        <input type="text" autocomplete="off" name="tarih" value="02-03-2023 09:42"
                                            class="form-control form-control-sm date-timepicker">
                                        <span class="input-group-addon input-group-append border-left"
                                            style="height: 35px;">
                                            <span class="mdi mdi-calendar input-group-text"></span>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Güncelleme Tarihi <i class="icon-info text-info" data-toggle="popover"
                                            data-content="İçeriğinizde güncelleme yaptıysanız takvim simgesine tıklayarak güncelleme tarihini belirtmeniz gerekir. İlk içerik girişinde yayın tarih ve saatiyle aynı seçilmesinde yarar vardır."
                                            data-trigger="hover" data-original-title="Güncelleme Tarihi"></i></label>
                                    <div class="input-group">
                                        <input type="text" autocomplete="off" name="tarihg" value=""
                                            class="form-control form-control-sm date-timepicker">
                                        <span class="input-group-addon input-group-append border-left"
                                            style="height: 35px;">
                                            <span class="mdi mdi-calendar input-group-text"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-6">
                                <label>Listeleme Görseli</label>
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
                    <div class="form-group mb-2">
                        <label class="switch">
                            <input type="checkbox" name="durum" id="durum" value="1" checked="">
                            <span class="slider"></span>
                        </label>
                        <label class="d-inline-block" style="line-height: 34px;" for="durum">Durum</label>
                    </div>
                    <div class="form-group mb-2">
                        <label class="switch">
                            <input type="checkbox" name="anasayfa" id="anasayfa" value="1" checked="">
                            <span class="slider"></span>
                        </label>

                        <label class="d-inline-block" style="line-height: 34px;" for="anasayfa">Anasayfa'da
                            Gözüksün mü ?</label>
                            <div class="form-group" >
                            <label for="spot">Açıklama  <i class="icon-info text-info" data-toggle="popover ;
                                    data-content="Spot metin, içeriğinizi özetleyen bir ya da iki cümlelik metindir. 180 karakteri geçmemesi gerekmektedir.  Spot metinde de tamamen BÜYÜK harften kaçınmalı ve çift tırnak kullanılmamalıdır."
                                    data-trigger="hover" data-original-title="Spot Metin"></i></label>
                            <textarea id="spot" name="spot" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="spot">Spot Metin <i class="icon-info text-info" data-toggle="popover"
                                    data-content="Spot metin, içeriğinizi özetleyen bir ya da iki cümlelik metindir. 180 karakteri geçmemesi gerekmektedir.  Spot metinde de tamamen BÜYÜK harften kaçınmalı ve çift tırnak kullanılmamalıdır."
                                    data-trigger="hover" data-original-title="Spot Metin"></i></label>
                            <textarea id="spot" name="spot" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="maxlength-textarea">SEO Açıklama (Description)</label>
                                    <textarea id="maxlength-textarea" name="description" class="form-control"
                                        maxlength="260" rows="2"></textarea>
                                </div>
                                <!-- <div class="form-group mb-0">
                                        <label for="tags">SEO Kelimeler (Keywords) <small>(Kelimenin sonuna virgül
                                                koyunuz)</small></label>
                                        <input name="keywords" id="tags" value="" data-tagsinput-init="true"
                                            style="display: none;">
                                        <div id="tags_tagsinput" class="tagsinput"
                                            style="width: 100%; min-height: 75%; height: 75%;">
                                            <div id="tags_addTag"><input id="tags_tag" value="" data-default="ekle"
                                                    style="color: rgb(102, 102, 102); width: 68px;"></div>
                                            <div class="tags_clear"></div>
                                        </div>-->
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="haber_ekle" class="btn btn-primary btn-icon-text btn-sm">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i>
                        KAYDET
                    </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>