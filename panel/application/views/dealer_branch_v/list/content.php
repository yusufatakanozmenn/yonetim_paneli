<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Bayi & Şube Listesi
        </h4>
        <h4>

            <a href="<?php echo base_url("dealer_branch/add_form"); ?>" class="btn btn-outline btn-primary btn-sm">
                <i class="fa fa-plus-circle"></i> Yeni Ekle</a>
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
                        href="<?php echo base_url("dealer_branch/add_form"); ?>">tıklayınız</a></p>
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
                    <th>Şube / Firma Adı</th>
                    <th>Şehir / İlçe</th>                   
                    <th>İşlem</th>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>
                    <tr>
                        <td>
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="checkbox-demo-1" />
                                <label for="checkbox-demo-1"></label>
                            </div>
                        </td>
                        <td><?php echo $item->adi;?></td>
                        <td><?php echo $item->adres;?></td>                      
                        <td>
                            <a href="<?php echo base_url("dealer_branch/delete/$item->id");?>"
                                class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i>
                                Sil</a>
                            <a href="<?php echo base_url("dealer_branch/update_form/$item->id");?>"
                                class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>
                                Düzenle</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>

        </div><!-- .widget -->
    </div><!-- END column -->
</div>