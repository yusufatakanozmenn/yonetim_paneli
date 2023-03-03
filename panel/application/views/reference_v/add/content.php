<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Yeni Referans Ekle</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
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

                            <div class="form-group">
                                <label>Kapak Görseli</label>
                                <div class="form-group">
                                    <input type="file" name="firma_footerlogo" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <div class="col-md-3 col-sm-6">
                                            <a href="#" class="thumbnail white"><img src="" alt="..."></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-inline-block" style="line-height: 34px;" for="durum">Durum</label>
                            </div>
                            <div class="form-group ">
                                <label class="d-inline-block" style="line-height: 34px;" for="anasayfa">Anasayfa'da
                                    Gözüksün mü ?</label>
                            
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" id="detay" name="detay" class="form-check-input"
                                            onchange="degistir()">Detay Sayfası Gösterilsin mi ?<i
                                            class="input-helper"></i><i class="input-helper"></i></label>
                                </div>
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
    </section>
</div>