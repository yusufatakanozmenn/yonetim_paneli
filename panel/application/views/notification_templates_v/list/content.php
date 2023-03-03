<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Bildirim Şablonları
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">
            <?php
            if (empty($items)) { ?>
                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a
                            href="<?php echo base_url(""); ?>">tıklayınız</a></p>
                </div>
            <?php } else { ?>

                <table class="table table-hover table-striped">
                    <thead>
                        <th>Bildirim</th>
                        <th>Konu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item) { ?>
                            <tr role="row" class="odd">
                                <td class=" secili">
                                    <?php echo $item->sablon_adi; ?>
                                </td>
                                <td class=" secili">
                                    <?php echo $item->konu2; ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url("notification_templates/update_form/$item->id"); ?>"
                                        class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>
                                        Düzenle</a>
                                </td>
                            </tr>
                        <?php } ?>


                    </tbody>

                </table>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="order-listingg_info" role="status" aria-live="polite">1
                            kayıttan 1-7
                            arasındaki kayıtlar gösteriliyor</div>
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
            <?php } ?>
        </div>
    </div>
</div>