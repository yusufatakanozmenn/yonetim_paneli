<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Mesaj Listesi
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php
            if (empty($items)) { ?>
            <div class="alert alert-info text-center">
                <p>Burada herhangi bir veri bulunmamaktadır</p>
            </div>
            <?php } else { ?>

            <table class="table table-hover table-striped">
                <thead>
                    <th>Gönderen</th>
                    <th>Telefon</th>
                    <th>Konu</th>
                    <th>E-Posta</th>
                    <th>Gönderi Tarihi</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>
                    <tr>
                        <td><?php echo $item->isim;?></td>
                        <td><?php echo $item->telefon;?></td>
                        <td><?php echo $item->konu;?></td>
                        <td><?php echo $item->email;?></td>
                        <td><?php echo $item->tarih;?></td>
                        <td>
                            <input data-url="<?php echo base_url("messages/update_status/$item->id");?>"
                                class="isActive" id="switch-2-2" type="checkbox" data-switchery data-color="#10c469"
                                <?php echo ($item->durum) ? "checked" : "";  ?> />

                        </td>
                        <td>
                            <a href="<?php echo base_url("messages/mesaj_goster/$item->id");?>"
                                class="btn btn-sm btn-info btn-outline"><i class="fa fa-eye"></i>
                            </a>
                            <a href="<?php echo base_url("messages/delete/$item->id");?>"
                                class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>


                </tbody>

            </table>
            <?php } ?>

        </div><!-- .widget -->
    </div><!-- END column -->
</div>