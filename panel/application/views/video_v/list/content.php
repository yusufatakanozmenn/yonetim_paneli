<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Video Galeri Listesi
        </h4>
        <h4>

            <a href="<?php echo base_url("video/add_form"); ?>" class="btn btn-outline btn-primary btn-sm">
                <i class="fa fa-plus-circle"></i> Yeni Video Ekle</a>
            <!-- <a href="#" class="btn btn-outline btn-danger btn-sm">
                <i class="fa fa-trash"></i> Tüm Veriyi Sil</a> -->
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php
            if (empty($items)) { ?>
                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a
                            href="<?php echo base_url("video/new_form"); ?>">tıklayınız</a></p>
                </div>
            <?php } else { ?>

                <table class="table table-hover table-striped">
                    <thead>
                        <th>
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="checkbox-demo-1" />
                                <label for="checkbox-demo-1"></label>
                            </div>
                        </th>
                        <th>Sıra</th>
                        <th>Başlık</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <?php foreach ($items as $item) { ?>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" id="checkbox-demo-1" />
                                        <label for="checkbox-demo-1"></label>
                                    </div>
                                </td>
                                <td name="sira">
                                    <?php echo $item->sira; ?>
                                <td name="adi">
                                    <?php echo $item->adi; ?>
                                </td>
                                <td name="durum"> <input data-url="<?php echo base_url("video/update_status/$item->id"); ?>"
                                        class="isActive" id="switch-2-2" type="checkbox" data-switchery data-color="#10c469"
                                        <?php echo ($item->durum) ? "checked" : ""; ?> />
                                </td>
                                <td>
                                    <a href="<?php echo base_url("video/delete/$item->id"); ?>"
                                        class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i>
                                        Sil</a>
                                    <a href="<?php echo base_url("video/update_form/$item->id"); ?>"
                                        class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>
                                        Düzenle</a>
                                </td>
                            </tr>
                        </tbody>

                    <?php } ?>
                </table>

            <?php } ?>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="order-listingg_info" role="status" aria-live="polite">5 kayıttan 1
                        - 5 arasındaki kayıtlar gösteriliyor
                    </div>

                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="order-listingg_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="order-listingg_previous"><a
                                        href="#" aria-controls="order-listingg" data-dt-idx="0" tabindex="0"
                                        class="page-link">Önceki</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="order-listingg"
                                        data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item next disabled" id="order-listingg_next"><a href="#"
                                        aria-controls="order-listingg" data-dt-idx="2" tabindex="0"
                                        class="page-link">Sonraki</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- .widget -->

    </div><!-- END column -->
</div>