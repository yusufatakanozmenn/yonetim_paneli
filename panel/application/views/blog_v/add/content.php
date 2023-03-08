<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Blog Ekle
        </h4>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="<?php echo base_url('blog/save') ?>"
                            enctype="multipart/form-data">
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
                                <div class="form-group ">
                                    <label>Yayın Tarihi <i class="icon-info text-info" data-toggle="popover"
                                            data-content="İçeriğin ilk eklendiği tarihtir. Sistem ekleme sırasında otomatik olarak verir. Dilerseniz tarihi değiştirebilirsiniz."
                                            data-trigger="hover" data-original-title="Yayın Tarihi"></i></label>
                                    <div class="input-group">
                                        <input type="date" autocomplete="off" name="tarih" value=""
                                            class="form-control form-control-sm date-timepicker">
                                        <span class="input-group-addon input-group-append border-left"
                                            style="height: 35px;">
                                            <span class="mdi mdi-calendar input-group-text"></span>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label>Güncelleme Tarihi <i class="icon-info text-info" data-toggle="popover"
                                            data-content="İçeriğinizde güncelleme yaptıysanız takvim simgesine tıklayarak güncelleme tarihini belirtmeniz gerekir. İlk içerik girişinde yayın tarih ve saatiyle aynı seçilmesinde yarar vardır."
                                            data-trigger="hover" data-original-title="Güncelleme Tarihi"></i></label>
                                    <div class="input-group">
                                        <input type="date" autocomplete="off" name="tarihg" value=""
                                            class="form-control form-control-sm date-timepicker">
                                        <span class="input-group-addon input-group-append border-left"
                                            style="height: 35px;">
                                            <span class="mdi mdi-calendar input-group-text"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label>Listeleme Görseli</label>
                                <div class="form-group">
                                    <input type="file" name="firma_footerlogo" disabled class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <div class=" col-sm-6">
                                            <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-group">
                            <label for="spot">Spot Metin <i class="icon-info text-info" data-toggle="popover"
                                    data-content="Spot metin, içeriğinizi özetleyen bir ya da iki cümlelik metindir. 180 karakteri geçmemesi gerekmektedir.  Spot metinde de tamamen BÜYÜK harften kaçınmalı ve çift tırnak kullanılmamalıdır."
                                    data-trigger="hover" data-original-title="Spot Metin"></i></label>
                            <textarea id="spot" name="spot" class="form-control" rows=""></textarea>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="maxlength-textarea">SEO Açıklama (Description)</label>
                                    <textarea id="maxlength-textarea" name="description" class="form-control"
                                        maxlength="260" rows=""></textarea>
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
                        <label class="d-inline-block" style="line-height: 34px;" for="durum">Anasayfa</label>
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