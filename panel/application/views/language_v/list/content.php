<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Dil Listesi
        </h4>
        <h4>

            <a href="<?php echo base_url("language_list/add_form"); ?>" class="btn btn-outline btn-primary btn-sm">
                <i class="fa fa-plus-circle"></i> Yeni Ekle</a>
            <!-- <a href="#" class="btn btn-outline btn-danger btn-sm">
                <i class="fa fa-trash"></i> Tüm Veriyi Sil</a> -->
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php
            if (empty($items)) { ?>
            <div class="alert alert-info text-center">
                <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a
                        href="<?php echo base_url("language_list/add_form"); ?>">tıklayınız</a></p>
            </div>
            <?php } else { ?>

            <table class="table table-hover table-striped">
                <thead>
                    <th class="">ID</th>
                    <th class="">Dil Adı</th>
                    <th class="">Bayrak</th>
                    <th class="">Anadil</th>
                    <th class="">Durum</th>
                    <th class="">İşlem</th>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>
                        <tr>
                        <td class=""><?php echo $item->id;?></td>
                        <td class=""><?php echo $item->adi;?></td>
                        <td class="flag-icon " style="background-image: url('<?php echo base_url("assets");?>/assets/flags/<?php echo $item->bayrak;?>.svg');"></td>
                        <td>
                            <input 
                            data-url="<?php echo base_url("language_list/update_status/$item->id");?>"
                            class="language_switch anadil_switch"
                            id="switch-2-2" 
                            type="checkbox" 
                            data-switchery 
                            data-color="#10c469"
                            name="anadil"
                            <?php echo ($item->anadil) ? "checked" : "";  ?>/>

                        </td>
                        <td>
                            <input 
                            data-url="<?php echo base_url("language_list/update_status/$item->id");?>"
                            class="language_switch"
                            id="switch-2-3" 
                            type="checkbox" 
                            data-switchery 
                            data-color="#10c469"
                            name="durum"
                            <?php echo ($item->durum) ? "checked" : "";  ?>/>

                        </td>
                        <td>
                            <a href="<?php echo base_url("language_list/delete/$item->id");?>" class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i>
                                Sil</a>
                            <a href="<?php echo base_url("language_list/update_form/$item->id");?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>
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