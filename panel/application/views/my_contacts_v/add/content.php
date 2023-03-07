<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Kayıt Ekle
        </h4>
        <h4>

            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="<?php echo base_url("my_contacts/add")?>"
                        enctype="multipart/form-data">
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
                        <label for="summernote">Notunuz</label>
                        <textarea id="summernote" name="notunuz"></textarea>
                        <button type="submit" name="rehber_ekle" class="btn btn-primary btn-icon-text btn-sm">
                            <a href="<?php echo base_url("my_contacts")?>"></a>
                            <i class="mdi mdi-file-check btn-icon-prepend"></i>
                            KAYDET
                        </button>
                    </form>
                </div>
            </div>


    </div>
</div>
</div>