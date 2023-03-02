<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Bayi & Şube Ekle
        </h4>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                    enctype="multipart/form-data">
                    <input id="id" name="id" type="hidden" value="">
                    <input id="ilceid" name="ilceid" type="hidden" value="">
                    <div class="form-group">
                        <label for="sira">Sıra</label>
                        <input type="text" class="form-control form-control-sm" name="sira" id="sira" value="">
                    </div>
                    <div class="form-group">
                        <label for="adi">Firma / Şube Adı</label>
                        <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                    </div>

                    <div class="form-group">
                        <label for="adres">Adres</label>
                        <input type="text" class="form-control form-control-sm" name="adres" id="adres" value="">
                    </div>

                    <div class="form-group row mb-0">
                        <div class="form-group col-md-4">
                            <label for="telefon">Telefon</label>
                            <input type="text" class="form-control form-control-sm" name="telefon" id="telefon"
                                value="">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="gsm">GSM</label>
                            <input type="text" class="form-control form-control-sm" name="gsm" id="gsm" value="">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="email">E-Posta</label>
                            <input type="email" class="form-control form-control-sm" name="email" id="email" value="">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="form-group col-md-6">
                            <label for="il">Şehir</label>
                            <select class="js-example-basic-single form-control-sm select2-hidden-accessible" name="il"
                                id="il" required="" style="width:100%" tabindex="-1" aria-hidden="true">
                                <option value="">-Seçiniz-</option>
                                <option value="1">Adana</option>
                                <option value="2">Adiyaman</option>
                                <option value="3">Afyonkarahisar</option>
                                <option value="4">Ağri</option>
                                <option value="5">Amasya</option>
                                <option value="6">Ankara</option>
                                <option value="7">Antalya</option>
                                <option value="8">Artvin</option>
                                <option value="9">Aydin</option>
                                <option value="10">Balikesir</option>
                                <option value="11">Bilecik</option>
                                <option value="12">Bingöl</option>
                                <option value="13">Bitlis</option>
                                <option value="14">Bolu</option>
                                <option value="15">Burdur</option>
                                <option value="16">Bursa</option>
                                <option value="17">Çanakkale</option>
                                <option value="18">Çankiri</option>
                                <option value="19">Çorum</option>
                                <option value="20">Denizlİ</option>
                                <option value="21">Diyarbakir</option>
                                <option value="22">Edirne</option>
                                <option value="23">Elaziğ</option>
                                <option value="24">Erzincan</option>
                                <option value="25">Erzurum</option>
                                <option value="26">Eskişehir</option>
                                <option value="27">Gaziantep</option>
                                <option value="28">Giresun</option>
                                <option value="29">Gümüşhane</option>
                                <option value="30">Hakkari</option>
                                <option value="31">Hatay</option>
                                <option value="32">Isparta</option>
                                <option value="33">Mersin</option>
                                <option value="34">İstanbul</option>
                                <option value="35">İzmir</option>
                                <option value="36">Kars</option>
                                <option value="37">Kastamonu</option>
                                <option value="38">Kayseri</option>
                                <option value="39">Kirklareli</option>
                                <option value="40">Kirşehir</option>
                                <option value="41">Kocaeli</option>
                                <option value="42">Konya</option>
                                <option value="43">Kütahya</option>
                                <option value="44">Malatya</option>
                                <option value="45">Manisa</option>
                                <option value="46">Kahramanmaraş</option>
                                <option value="47">Mardin</option>
                                <option value="48">Muğla</option>
                                <option value="49">Muş</option>
                                <option value="50">Nevşehir</option>
                                <option value="51">Niğde</option>
                                <option value="52">Ordu</option>
                                <option value="53">Rize</option>
                                <option value="54">Sakarya</option>
                                <option value="55">Samsun</option>
                                <option value="56">Siirt</option>
                                <option value="57">Sinop</option>
                                <option value="58">Sivas</option>
                                <option value="59">Tekirdağ</option>
                                <option value="60">Tokat</option>
                                <option value="61">Trabzon</option>
                                <option value="62">Tuncelİ</option>
                                <option value="63">Şanlıurfa</option>
                                <option value="64">Uşak</option>
                                <option value="65">Van</option>
                                <option value="66">Yozgat</option>
                                <option value="67">Zonguldak</option>
                                <option value="68">Aksaray</option>
                                <option value="69">Bayburt</option>
                                <option value="70">Karaman</option>
                                <option value="71">Kirikkale</option>
                                <option value="72">Batman</option>
                                <option value="73">Şirnak</option>
                                <option value="74">Bartin</option>
                                <option value="75">Ardahan</option>
                                <option value="76">Iğdir</option>
                                <option value="77">Yalova</option>
                                <option value="78">Karabük</option>
                                <option value="79">Kilis</option>
                                <option value="80">Osmaniye</option>
                                <option value="81">Düzce</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-labelledby="select2-il-container"><span class="select2-selection__rendered"
                                            id="select2-il-container" title="-Seçiniz-"></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="ilce">İlçe</label>
                            <select class="js-example-basic-single form-control-sm select2-hidden-accessible"
                                name="ilce" id="ilce" required="" style="width:100%" tabindex="-1" aria-hidden="true">
                                <option value="0">İlçe Seçiniz</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-labelledby="select2-ilce-container"><span
                                            class="select2-selection__rendered" id="select2-ilce-container"
                                            title="İlçe Seçiniz"> </span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>


                    <div class="form-group mb-2">
                        <label class="switch">
                            <input type="checkbox" name="durum" id="durum" value="1" checked="">
                            <span class="slider"></span>
                        </label>
                        <label class="d-inline-block" style="line-height: 34px;" for="durum">Durum</label>
                    </div>

                    <button type="submit" name="bayi_ekle" class="btn btn-primary btn-icon-text btn-sm">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i>
                        KAYDET
                    </button>
                </form>
            </div>
        </div>

        </form>
    </div>
</div>

</div>
</div>