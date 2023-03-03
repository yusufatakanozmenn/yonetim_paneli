<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-b-lg">
                    Rehberim
                </h4>



                <div class="card">
                    <form action="../_class/yonetim_islem.php" method="POST">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <div class="btn-toolbar" role="toolbar">
                                        <a href="rehber-ekle" class="btn btn-primary btn-sm mr-1">
                                            <i class="icon-plus font-12"></i> Yeni Kayıt Ekle </a>
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-options-vertical font-12"></i> Seçilenlere Uygula
                                            </button>
                                            <div class="dropdown-menu p-0 min-width-full"
                                                aria-labelledby="dropdownMenuSizeButton3">
                                                <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                                    name="rehber_aktif"><i class="icon-check"></i> Seçilenleri
                                                    Aktif Et</button>
                                                <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                                    name="rehber_pasif"><i class="icon-close"></i> Seçilenleri
                                                    Pasif Et</button>
                                                <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                                    name="rehber_tumu"><i class="icon-trash"></i> Seçilenleri
                                                    Sil</button>
                                            </div>
                                        </div>
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
                                                    <?php
                                                    if (empty($items)) { ?>
                                                    <div class="alert alert-info text-center">
                                                        <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen
                                                            <a
                                                                href="<?php echo base_url("package/new_form"); ?>">tıklayınız</a>
                                                        </p>
                                                    </div>
                                                    <?php } else { ?>
                                                    <table id="order-listingg"
                                                        class="table table-bordered table-hover dataTable no-footer"
                                                        role="grid" aria-describedby="order-listingg_info"
                                                        style="width: 995px;">
                                                        <thead class="headbg">
                                                            <tr role="row">
                                                                <th class="noshort sorting_asc" style="width: 38.8px;"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Tümünü Seç" rowspan="1"
                                                                    colspan="1" aria-label=""> </th>
                                                                <th style="width: 29.8px;" class="secili sorting"
                                                                    tabindex="0" aria-controls="order-listingg"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Sıra: artan sütun sıralamasını aktifleştir">
                                                                    Sıra</th>
                                                                <th class="secili sorting" tabindex="0"
                                                                    aria-controls="order-listingg" rowspan="1"
                                                                    colspan="1" style="width: 95.8px;"
                                                                    aria-label="Adı Soyadı: artan sütun sıralamasını aktifleştir">
                                                                    Adı Soyadı</th>
                                                                <th class="secili sorting" tabindex="0"
                                                                    aria-controls="order-listingg" rowspan="1"
                                                                    colspan="1" style="width: 136.8px;"
                                                                    aria-label="E-Posta: artan sütun sıralamasını aktifleştir">
                                                                    E-Posta</th>
                                                                <th class="secili sorting" tabindex="0"
                                                                    aria-controls="order-listingg" rowspan="1"
                                                                    colspan="1" style="width: 91.8px;"
                                                                    aria-label="Telefon: artan sütun sıralamasını aktifleştir">
                                                                    Telefon</th>
                                                                <th class="secili sorting" tabindex="0"
                                                                    aria-controls="order-listingg" rowspan="1"
                                                                    colspan="1" style="width: 145.8px;"
                                                                    aria-label="Oluşturma Tarihi: artan sütun sıralamasını aktifleştir">
                                                                    Oluşturma Tarihi</th>
                                                                <th style="width: 69.8px;"
                                                                    class="text-center secili sorting" tabindex="0"
                                                                    aria-controls="order-listingg" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Durum: artan sütun sıralamasını aktifleştir">
                                                                    Durum</th>
                                                                <th style="width: 89.6px;"
                                                                    class="text-center sorting_disabled" rowspan="1"
                                                                    colspan="1" aria-label="İşlem">
                                                                    İşlem</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($items as $item) { ?>
                                                            <tr role="row" class="odd">
                                                                <td>
                                                                    <div class="checkbox checkbox-primary">
                                                                        <input type="checkbox" id="checkbox-demo-1" />
                                                                        <label for="checkbox-demo-1"></label>
                                                                    </div>
                                                                </td>
                                                                <td class=" secili"><?php echo $item->id;?></td>
                                                                <td class=" secili"><?php echo $item->adi;?></td>
                                                                <td class=" secili"><?php echo $item->email;?></td>
                                                                <td class=" secili"><?php echo $item->telefon;?></td>
                                                                <td class=" secili"><?php echo $item->tarih;?></td>
                                                                <td class=" secili text-center">
                                                                    <div class="badge badge-outline-success">
                                                                        <?php echo $item->durum;?></div>
                                                                </td>
                                                                <td>
                                                                    <a href=""
                                                                        class="btn btn-sm btn-info btn-outline"><i
                                                                            class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <a href="<?php echo base_url("my_contacts/delete/$item->id");?>"
                                                                        class="btn btn-sm btn-danger btn-outline"><i
                                                                            class="fa fa-trash"></i>
                                                                    </a>

                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                    <?php } ?>
                                                    <div id="order-listingg_processing"
                                                        class="dataTables_processing card" style="display: none;">
                                                        İşleniyor...</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="order-listingg_info" role="status"
                                                        aria-live="polite">1 kayıttan 1 - 1
                                                        arasındaki kayıtlar gösteriliyor</div>
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
            </div><!-- END column -->
        </div>
    </section><!-- #dash-content -->
</div>