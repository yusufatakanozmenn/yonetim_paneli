<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Referans Ekle
        </h4>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                            enctype="multipart/form-data">
                            <input id="id" name="id" type="hidden" value="">
                            <div class="form-group">
                                <label for="sira">Sıra</label>
                                <input type="text" class="form-control form-control-sm" name="sira" id="sira" value="">
                            </div>
                            <div class="form-group">
                                <label for="adi">Başlık</label>
                                <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                            </div>

                            <div class="form-group row col-md-6">
                                <label>Kapak Görseli</label>
                                <div class="form-group">
                                    <input type="file" name="firma_footerlogo" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <div class="col-md-6 col-sm-6">
                                            <a href="#" class="thumbnail white"><img src="" alt="..."></a>
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
                            
                          
                            <script>
                            function degistir() {
                                if (document.getElementById("detay").checked) {
                                    document.getElementById("divimiz").style.display = "block";
                                } else {
                                    document.getElementById("divimiz").style.display = "none";
                                }
                            };
                            </script>

                            <button type="submit" name="referans_ekle" class="btn btn-primary btn-icon-text btn-sm">
                                <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                KAYDET
                            </button>
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