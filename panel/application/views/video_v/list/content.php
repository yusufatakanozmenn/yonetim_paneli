<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Video Galeri Listesi
        </h4>
        <h4>

            <div class="card">

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="btn-toolbar" role="toolbar">
                                <a href="<?php echo base_url("video/add_form"); ?>" class="btn btn-primary btn-sm mr-1">
                                    <i class="icon-plus font-12"></i> Yeni Video Ekle </a>
                                <div class="dropdown mr-1">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-options-vertical font-12"></i> Seçilenlere Uygula
                                    </button>
                                    <div class="dropdown-menu p-0 min-width-full"
                                        aria-labelledby="dropdownMenuSizeButton3">
                                        <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                            name="video_aktif"><i class="icon-check"></i> Seçilenleri Aktif
                                            Et</button>
                                        <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                            name="video_pasif"><i class="icon-close"></i> Seçilenleri Pasif
                                            Et</button>
                                        <button class="dropdown-item p-2 cursor-pointer" type="submit"
                                            name="video_tumu"><i class="icon-trash"></i> Seçilenleri Sil</button>
                                    </div>
                                </div>
                                <a href="../_class/yonetim_islem.php?videotumunusil=ok" title=""
                                    class="btn btn-danger btn-sm mr-1 popconfirm" data-original-title="Tüm Veriyi Sil">
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
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <th>
                                                        <div class="checkbox checkbox-primary">
                                                            <input type="checkbox" id="checkbox-demo-1" />
                                                            <label for="checkbox-demo-1"></label>
                                                        </div>
                                                    </th>
                                                    <th>ID</th>
                                                    <th>adi</th>
                                                    <th>Durumu</th>
                                                    <th>İşlem</th>
                                                </thead>
                                                <?php foreach($items as $item){?>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox checkbox-primary">
                                                                <input type="checkbox" id="checkbox-demo-1" />
                                                                <label for="checkbox-demo-1"></label>
                                                            </div>
                                                        </td>
                                                        <td name="id"><?php echo $item->id;?></td>
                                                        <td name="adi"><?php echo $item->adi;?></td>
                                                        <td name="durum"><?php echo $item->durum;?></td>
                                                        <td>
                                                            <a href="<?php echo base_url("video/delete/$item->id");?>"
                                                                class="btn btn-sm btn-danger btn-outline"><i
                                                                    class="fa fa-trash"></i>
                                                                Sil</a>
                                                            <a href="<?php echo base_url("video/update_form/$item->id");?>"
                                                                class="btn btn-sm btn-info btn-outline"><i
                                                                    class="fa fa-pencil-square-o"></i>
                                                                Düzenle</a>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <?php } ?>
                                            </table>
                                            <div id="order-listingg_processing" class="dataTables_processing card"
                                                style="display: none;">İşleniyor...</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="order-listingg_info" role="status"
                                                aria-live="polite">5 kayıttan 1 - 5 arasındaki kayıtlar gösteriliyor
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="order-listingg_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="order-listingg_previous"><a href="#"
                                                            aria-controls="order-listingg" data-dt-idx="0" tabindex="0"
                                                            class="page-link">Önceki</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="order-listingg" data-dt-idx="1" tabindex="0"
                                                            class="page-link">1</a></li>
                                                    <li class="paginate_button page-item next disabled"
                                                        id="order-listingg_next"><a href="#"
                                                            aria-controls="order-listingg" data-dt-idx="2" tabindex="0"
                                                            class="page-link">Sonraki</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div><!-- .widget -->
</div><!-- END column -->
</div>