<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yönetici Listesi
        </h4>
        <h4>

            <div class="card">
                <form action="../_class/yonetim_islem.php" method="POST">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="btn-toolbar" role="toolbar">
                                    <a href="<?php echo base_url("managers/add_form"); ?>"
                                        class="btn btn-primary btn-sm mr-1">
                                        <i class="icon-plus font-12"></i> Yeni Yönetici Ekle </a>
                                    <div class="dropdown mr-1">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon-options-vertical font-12"></i> Seçilenlere Uygula
                                        </button>
                                        <div class="dropdown-menu p-0 min-width-full"
                                            aria-labelledby="dropdownMenuSizeButton3">
                                            <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                                name="galeri_aktif"><i class="icon-check"></i> Seçilenleri Aktif
                                                Et</button>
                                            <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                                name="galeri_pasif"><i class="icon-close"></i> Seçilenleri Pasif
                                                Et</button>
                                            <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                                name="galeri_tumu"><i class="icon-trash"></i> Seçilenleri Sil</button>
                                        </div>
                                    </div>
                                    <a href="../_class/yonetim_islem.php?galeritumunusil=ok" title=""
                                        class="btn btn-danger btn-sm mr-1 popconfirm"
                                        data-original-title="Tüm Veriyi Sil">
                                        <i class="ti-trash font-12"></i> Tüm Veriyi Sil
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <div id="order-listingg_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="order-listingg"
                                                    class="table table-bordered table-hover dataTable no-footer"
                                                    role="grid" aria-describedby="order-listingg_info"
                                                    style="width: 1306px;">
                                                    <thead class="headbg">
                                                        <tr role="row">
                                                            <th class="noshort sorting_asc" style="width: 38.8px;"
                                                                data-placement="top" title=""
                                                                data-original-title="Tümünü Seç" rowspan="1" colspan="1"
                                                                aria-label="
									
									
								">
                                                                <!-- <input id="checkbox-4"
                                                                    class="select-all checkbox-custom" type="checkbox"
                                                                    style="width:100px;">
                                                                <label for="checkbox-4"
                                                                    class="checkbox-custom-label mb-0"><span
                                                                        class="checktext"></span></label> -->
                                                            </th>
                                                            <th style="width: 29.8px;" class="secili sorting"
                                                                tabindex="0" aria-controls="order-listingg" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Sıra: artan sütun sıralamasını aktifleştir">
                                                                Sıra</th>
                                                            <th class="secili sorting" tabindex="0"
                                                                aria-controls="order-listingg" rowspan="1" colspan="1"
                                                                style="width: 209.8px;"
                                                                aria-label="İsim: artan sütun sıralamasını aktifleştir">
                                                                İsim</th>
                                                            <th class="secili sorting" tabindex="0"
                                                                aria-controls="order-listingg" rowspan="1" colspan="1"
                                                                style="width: 321.8px;"
                                                                aria-label="Kullanıcı Adı: artan sütun sıralamasını aktifleştir">
                                                                Kullanıcı Adı</th>
                                                            <th class="secili sorting" tabindex="0"
                                                                aria-controls="order-listingg" rowspan="1" colspan="1"
                                                                style="width: 380.8px;"
                                                                aria-label="Son Giriş: artan sütun sıralamasını aktifleştir">
                                                                Son Giriş</th>
                                                            <th style="width: 114.6px;"
                                                                class="text-center sorting_disabled" rowspan="1"
                                                                colspan="1" aria-label="İşlem">İşlem</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">
                                                                <div class="form-check mb-0 mt-0"><label
                                                                        class="form-check-label"><input type="checkbox"
                                                                            name="id[]" value="6"
                                                                            class="form-check-input"><i
                                                                            class="input-helper"></i></label></div>
                                                            </td>
                                                            <td class=" secili">1</td>
                                                            <td class=" secili">Alva Grup</td>
                                                            <td class=" secili">master</td>
                                                            <td class=" secili">02 Mart 2023, 10:52</td>
                                                            <td>
                                                                <a href="" class="btn btn-sm btn-danger btn-outline"><i
                                                                        class="fa fa-trash"></i>
                                                                </a>
                                                                <a href="" class="btn btn-sm btn-info btn-outline"><i
                                                                        class="fa fa-pencil-square-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div id="order-listingg_processing" class="dataTables_processing card"
                                                    style="display: none;">İşleniyor...</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="order-listingg_info" role="status"
                                                    aria-live="polite">1 kayıttan 1 - 1 arasındaki kayıtlar gösteriliyor
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="order-listingg_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="order-listingg_previous"><a href="#"
                                                                aria-controls="order-listingg" data-dt-idx="0"
                                                                tabindex="0" class="page-link">Önceki</a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="order-listingg" data-dt-idx="1"
                                                                tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item next disabled"
                                                            id="order-listingg_next"><a href="#"
                                                                aria-controls="order-listingg" data-dt-idx="2"
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

    </div><!-- .widget -->
</div><!-- END column -->
</div>