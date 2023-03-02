<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Sorular
        </h4>
        <h4>

            <div class="card">
                <form action="../_class/yonetim_islem.php" method="POST">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="btn-toolbar" role="toolbar">
                                    <a href="<?php echo base_url("sss/add_form"); ?>"
                                        class="btn btn-primary btn-sm mr-1">
                                        <i class="icon-plus font-12"></i> Yeni Hizmet Ekle </a>
                                    <div class="dropdown mr-1">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon-options-vertical font-12"></i> Seçilenlere Uygula
                                        </button>
                                        <div class="dropdown-menu p-0 min-width-full"
                                            aria-labelledby="dropdownMenuSizeButton3">
                                            <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                                name="hizmet_aktif"><i class="icon-check"></i> Seçilenleri Aktif
                                                Et</button>
                                            <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                                name="hizmet_pasif"><i class="icon-close"></i> Seçilenleri Pasif
                                                Et</button>
                                            <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                                name="hizmet_tumu"><i class="icon-trash"></i> Seçilenleri Sil</button>
                                        </div>
                                    </div>
                                    <a href="../_class/yonetim_islem.php?hizmettumunusil=ok" title=""
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
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="order-listingg_length"><label>Sayfada
                                                        <select name="order-listingg_length"
                                                            aria-controls="order-listingg"
                                                            class="form-control form-control-sm">
                                                            <option value="5">5</option>
                                                            <option value="10">10</option>
                                                            <option value="15">15</option>
                                                            <option value="4">Tümü</option>
                                                        </select> kayıt göster</label></div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="order-listingg_filter" class="dataTables_filter">
                                                    <label>Ara:<input type="search" class="form-control form-control-sm"
                                                            placeholder="" aria-controls="order-listingg"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="order-listingg"
                                                    class="table table-bordered table-hover dataTable no-footer"
                                                    role="grid" aria-describedby="order-listingg_info"
                                                    style="width: 1308px;">
                                                    <thead class="headbg">
                                                        <tr role="row">
                                                            <th class="noshort sorting_disabled" style="width: 38.8px;"
                                                                data-placement="top" title="Tümünü Seç" rowspan="1"
                                                                colspan="1" aria-label="
									
									
								">
                                                                <input id="checkbox-4"
                                                                    class="select-all checkbox-custom" type="checkbox"
                                                                    style="width:100px;">
                                                                <label for="checkbox-4"
                                                                    class="checkbox-custom-label mb-0"><span
                                                                        class="checktext"></span></label>
                                                            </th>
                                                            <th class="secili sorting" tabindex="0"
                                                                aria-controls="order-listingg" rowspan="1" colspan="1"
                                                                style="width: 847.8px;"
                                                                aria-label="Başlık: artan sütun sıralamasını aktifleştir">
                                                                Başlık</th>
                                                            <th style="width: 69.8px;"
                                                                class="secili text-center sorting" tabindex="0"
                                                                aria-controls="order-listingg" rowspan="1" colspan="1"
                                                                aria-label="Anasayfa: artan sütun sıralamasını aktifleştir">
                                                                Anasayfa</th>
                                                            <th style="width: 69.8px;"
                                                                class="secili text-center sorting" tabindex="0"
                                                                aria-controls="order-listingg" rowspan="1" colspan="1"
                                                                aria-label="Durum: artan sütun sıralamasını aktifleştir">
                                                                Durum</th>
                                                            <th style="width: 114.6px;"
                                                                class="text-center sorting_disabled" rowspan="1"
                                                                colspan="1" aria-label="İşlem">İşlem</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="sortable" class="ui-sortable">
                                                        <tr id="item-10" role="row" class="even highlight">
                                                            <td>
                                                                <div class="form-check mb-0 mt-0"><label
                                                                        class="form-check-label"><input type="checkbox"
                                                                            name="id[]" value="10"
                                                                            class="form-check-input checkbox"><i
                                                                            class="input-helper"></i></label></div>
                                                            </td>
                                                            <td class=" secili"><a href="hizmet-duzenle/10"
                                                                    class="renk_baslik" title="Düzenle">Dezenfektan
                                                                    Ürünleri</a></td>
                                                            <td class=" secili text-center">
                                                                <div class="badge badge-outline-danger">Hayır</div>
                                                            </td>
                                                            <td class=" secili text-center">
                                                                <div class="badge badge-outline-danger">Pasif</div>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo base_url("product/delete/$item->id");?>"
                                                                    class="btn btn-sm btn-danger btn-outline"><i
                                                                        class="fa fa-trash"></i>
                                                                    Sil</a>
                                                                <a href="<?php echo base_url("product/update_form/$item->id");?>"
                                                                    class="btn btn-sm btn-info btn-outline"><i
                                                                        class="fa fa-pencil-square-o"></i>
                                                                    Düzenle</a>
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
                                                    aria-live="polite">4 kayıttan 1 - 4 arasındaki kayıtlar gösteriliyor
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