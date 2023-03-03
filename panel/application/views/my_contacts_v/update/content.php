<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Kayıt Ekle
        </h4>
        <h4>

            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                        enctype="multipart/form-data">
                        <input id="id" name="id" type="hidden" value="">
                        <div class="form-group">
                            <label for="adi">Adı Soyadı</label>
                            <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail Adresi</label>
                            <input type="text" class="form-control form-control-sm" name="email" id="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="telefon">Telefon</label>
                            <input type="text" class="form-control form-control-sm" name="telefon" id="telefon"
                                value="">
                        </div>
                        <div class="form-group">
                            <label class="d-block" for="durum">Durum</label>
                            <label class="switch">
                                <input type="checkbox" name="durum" id="durum" value="1" checked="">
                                <span class="slider"></span>
                            </label>

                        </div>
                        <div class="form-group">
                            <label for="control-demo-5" class="col-sm-3">Textarea</label>
                            <div class="col-sm-9">
                                <textarea name="control-demo-5" id="control-demo-5" class="form-control" cols="30"
                                    rows="10"></textarea>
                            </div>
                        </div><!-- .form-group -->
                        <button type="submit" name="rehber_ekle" class="btn btn-primary btn-icon-text btn-sm">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i>
                            KAYDET
                        </button>
                    </form>
                </div>
            </div>


    </div>
</div>
</div>