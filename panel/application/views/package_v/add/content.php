<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Paket Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                    enctype="multipart/form-data">
                    <input id="id" name="id" type="hidden" value="">
                    <div class="form-group">
                        <label for="sira">Sıra</label>
                        <input type="number" class="form-control form-control-sm" min="0" name="sira" id="sira"
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="adi">Başlık <i class="icon-info text-info" data-toggle="popover"
                                data-content="Paket adında tamamen BÜYÜK harf kullanmayın. 70 karakterden uzun başlıkları Google indexlemede göstermez ve değerlendirmez. Bu nedenle uzun başlıklar kullanmaktan kaçının. Başlıklarda çift tırnak kesinlikle kullanmayın."
                                data-trigger="hover" data-original-title="Başlık"></i></label>
                        <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group" style="overflow: hidden;">
                            <label>Fiyat</label>
                            <input type="text" class="form-control form-control-sm" name="fiyat" value="">
                            <select class="form-control form-control-sm" name="pbirim">
                                <option>TL</option>
                                <option>USD</option>
                                <option>EURO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" style="overflow: hidden;">
                            <label class="d-block">Periyod</label>
                            <!--<input type="text" class="form-control form-control-sm" name="periyod_sure" value="" style="width:200px;display: inline-block;float: left;">-->
                            <select class="form-control form-control-sm" name="periyod">
                                <option value="0">Tek Sefer</option>
                                <option value="1">Aylık</option>
                                <option value="2">Yıllık</option>
                            </select>
                        </div>
                    </div>
					                  

                    <div class="form-group">					
                        <label for="link">Satın Al Harici Link <i class="icon-info text-info" data-toggle="popover"
                                data-content="Var ise yazınız.(http kullanarak)" data-trigger="hover"
                                data-original-title="Satın Al Harici Link"></i></label>
                        <input type="text" class="form-control form-control-sm" name="link" id="link" value="">
                    </div>
                    <div class="form-group">
                        <label for="ozellikler">Özellikler <i class="icon-info text-info" data-toggle="popover"
                                data-content="Özellikler alt alta gelecek şekilde yazınız." data-trigger="hover"
                                data-original-title="Özellikler"></i></label>
                        <textarea id="ozellikler" name="ozellikler" class="form-control" rows="8"></textarea>
                    </div>
                    <button type="submit" name="paket_ekle" class="btn btn-primary btn-icon-text btn-sm">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i>
                        KAYDET
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>