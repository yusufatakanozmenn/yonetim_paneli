<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-b-lg">
                    Ürün Listesi
                </h4>

                <div class="card">
                    <form action="../_class/yonetim_islem.php" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">

                                    <div class="table-responsive">
                                        <div id="editable-form_wrapper"
                                            class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="dataTables_length" id="editable-form_length">
                                                        <label>Sayfada <select name="editable-form_length"
                                                                aria-controls="editable-form"
                                                                class="form-control form-control-sm">
                                                                <option value="5">5</option>
                                                                <option value="10">10</option>
                                                                <option value="15">15</option>
                                                                <option value="-1">Tümü</option>
                                                            </select> kayıt göster</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div id="editable-form_filter" class="dataTables_filter">
                                                        <label>Ara:<input type="search"
                                                                class="form-control form-control-sm" placeholder=""
                                                                aria-controls="editable-form"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="editable-form"
                                                        class="table table-bordered user-list dataTable no-footer"
                                                        role="grid" aria-describedby="editable-form_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th style="width:250px;" class="sorting_asc"
                                                                    tabindex="0" aria-controls="editable-form"
                                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                                    aria-label="Key: azalan sütun soralamasını aktifleştir">
                                                                    Key</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="editable-form" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Açıklama: artan sütun sıralamasını aktifleştir"
                                                                    style="width: 655.094px;">Açıklama</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr role="row" class="odd">
                                                                <td class="uneditable sorting_1">txt1</td>
                                                                <td><input type="text" name="text" id="text2"
                                                                        value="Anasayfa"
                                                                        onchange="saveData(event,'txt1')"><span
                                                                        style="display:none">Anasayfa</span></td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="uneditable sorting_1">txt10</td>
                                                                <td><input type="text" name="text" id="text12"
                                                                        value="Mail Ayarları"
                                                                        onchange="saveData(event,'txt10')"><span
                                                                        style="display:none">Mail Ayarları</span></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="uneditable sorting_1">txt102</td>
                                                                <td><input type="text" name="text" id="text100"
                                                                        value="Diğer"
                                                                        onchange="saveData(event,'txt102')"><span
                                                                        style="display:none">Diğer</span></td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="uneditable sorting_1">txt103</td>
                                                                <td><input type="text" name="text" id="text101"
                                                                        value="Not Defteri"
                                                                        onchange="saveData(event,'txt103')"><span
                                                                        style="display:none">Not Defteri</span></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="uneditable sorting_1">txt104</td>
                                                                <td><input type="text" name="text" id="text102"
                                                                        value="Oturumu Kapat"
                                                                        onchange="saveData(event,'txt104')"><span
                                                                        style="display:none">Oturumu Kapat</span></td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="uneditable sorting_1">txt105</td>
                                                                <td><input type="text" name="text" id="text103"
                                                                        value="S.S.S"
                                                                        onchange="saveData(event,'txt105')"><span
                                                                        style="display:none">S.S.S</span></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="uneditable sorting_1">txt106</td>
                                                                <td><input type="text" name="text" id="text104"
                                                                        value="Soru Ekle / Düzenle"
                                                                        onchange="saveData(event,'txt106')"><span
                                                                        style="display:none">Soru Ekle / Düzenle</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="uneditable sorting_1">txt107</td>
                                                                <td><input type="text" name="text" id="text105"
                                                                        value="Sorular"
                                                                        onchange="saveData(event,'txt107')"><span
                                                                        style="display:none">Sorular</span></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="uneditable sorting_1">txt108</td>
                                                                <td><input type="text" name="text" id="text106"
                                                                        value="Yeni Soru Ekle"
                                                                        onchange="saveData(event,'txt108')"><span
                                                                        style="display:none">Yeni Soru Ekle</span></td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="uneditable sorting_1">txt109</td>
                                                                <td><input type="text" name="text" id="text107"
                                                                        value="E-Katalog Yönetimi"
                                                                        onchange="saveData(event,'txt109')"><span
                                                                        style="display:none">E-Katalog Yönetimi</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="uneditable sorting_1">txt11</td>
                                                                <td><input type="text" name="text" id="text13"
                                                                        value="SMS Ayarları"
                                                                        onchange="saveData(event,'txt11')"><span
                                                                        style="display:none">SMS Ayarları</span></td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="uneditable sorting_1">txt110</td>
                                                                <td><input type="text" name="text" id="text108"
                                                                        value="Katalog Ekle / Düzenle"
                                                                        onchange="saveData(event,'txt110')"><span
                                                                        style="display:none">Katalog Ekle /
                                                                        Düzenle</span></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="uneditable sorting_1">txt111</td>
                                                                <td><input type="text" name="text" id="text109"
                                                                        value="Katalog Listesi"
                                                                        onchange="saveData(event,'txt111')"><span
                                                                        style="display:none">Katalog Listesi</span></td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="uneditable sorting_1">txt112</td>
                                                                <td><input type="text" name="text" id="text110"
                                                                        value="Yeni Katalog Ekle"
                                                                        onchange="saveData(event,'txt112')"><span
                                                                        style="display:none">Yeni Katalog Ekle</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="uneditable sorting_1">txt113</td>
                                                                <td><input type="text" name="text" id="text111"
                                                                        value="Bayi/Şube Yönetimi"
                                                                        onchange="saveData(event,'txt113')"><span
                                                                        style="display:none">Bayi/Şube Yönetimi</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="uneditable sorting_1">txt114</td>
                                                                <td><input type="text" name="text" id="text112"
                                                                        value="Bayi/Şube Ekle / Düzenle"
                                                                        onchange="saveData(event,'txt114')"><span
                                                                        style="display:none">Bayi/Şube Ekle /
                                                                        Düzenle</span></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="uneditable sorting_1">txt115</td>
                                                                <td><input type="text" name="text" id="text113"
                                                                        value="Bayi/Şube Listesi"
                                                                        onchange="saveData(event,'txt115')"><span
                                                                        style="display:none">Bayi/Şube Listesi</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="uneditable sorting_1">txt116</td>
                                                                <td><input type="text" name="text" id="text114"
                                                                        value="Yeni Bayi/Şube Ekle"
                                                                        onchange="saveData(event,'txt116')"><span
                                                                        style="display:none">Yeni Bayi/Şube Ekle</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="uneditable sorting_1">txt117</td>
                                                                <td><input type="text" name="text" id="text115"
                                                                        value="Müşteri Görüşleri"
                                                                        onchange="saveData(event,'txt117')"><span
                                                                        style="display:none">Müşteri Görüşleri</span>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="uneditable sorting_1">txt119</td>
                                                                <td><input type="text" name="text" id="text116"
                                                                        value="Ekip Yönetimi"
                                                                        onchange="saveData(event,'txt119')"><span
                                                                        style="display:none">Ekip Yönetimi</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="editable-form_info" role="status"
                                                        aria-live="polite">133 kayıttan 1 - 20 arasındaki kayıtlar
                                                        gösteriliyor</div>
                                                </div>
                                                <div class="col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                        id="editable-form_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled"
                                                                id="editable-form_previous"><a href="#"
                                                                    aria-controls="editable-form" data-dt-idx="0"
                                                                    tabindex="0" class="page-link">Önceki</a></li>
                                                            <li class="paginate_button page-item active"><a href="#"
                                                                    aria-controls="editable-form" data-dt-idx="1"
                                                                    tabindex="0" class="page-link">1</a></li>
                                                            <li class="paginate_button page-item "><a href="#"
                                                                    aria-controls="editable-form" data-dt-idx="2"
                                                                    tabindex="0" class="page-link">2</a></li>

                                                            <li class="paginate_button page-item next"
                                                                id="editable-form_next"><a href="#"
                                                                    aria-controls="editable-form" data-dt-idx="8"
                                                                    tabindex="0" class="page-link">Sonraki</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </form>
                </div>



            </div><!-- END column -->
        </div>
    </section><!-- #dash-content -->
</div>