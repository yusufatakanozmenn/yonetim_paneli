<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Hizmet Listesi
        </h4>
        <h4>

            <a href="<?php echo base_url("ourservices/add_form"); ?>" class="btn btn-outline btn-primary btn-sm">
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
                        href="<?php echo base_url("ourservices/add_form"); ?>">tıklayınız</a></p>
            </div>
            <?php } else { ?>

            <table class="table table-hover table-striped">
                <thead>
                    <th>ID</th>
                    <th>Resim</th>
                    <th>Başlık</th>
                    <th>Anasayfa</th>
                    <th>Durum</th>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>
                        <tr>
                        <td><?php echo $item->id;?></td>
                        <td>
                            <a href="#" class="thumbnail white w-50">
                                <img style="width:50px; height:50px;" src="<?php echo base_url('uploads'); ?>/ourservices_v/<?php echo $item->resim; ?>"
                                    alt="">
                            </a>
                        </td>
                        <td><?php echo $item->adi;?></td>
                        <td>
                            <input 
                            data-url="<?php echo base_url("ourservices/update_status/$item->id");?>"
                            class="isActive"
                            id="anasayfa" 
                            type="checkbox" 
                            data-switchery 
                            data-color="#10c469"
                            <?php echo ($item->anasayfa) ? "checked" : "";  ?>/>

                        </td>
                        <td>
                            <input 
                            data-url="<?php echo base_url("ourservices/update_status/$item->id");?>"
                            class="isActive"
                            id="durum" 
                            type="checkbox" 
                            data-switchery 
                            data-color="#10c469"
                            <?php echo ($item->durum) ? "checked" : "";  ?>/>

                        </td>
                        <td>
                            <a href="<?php echo base_url("ourservices/delete/$item->id");?>" class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i>
                                Sil</a>
                            <a href="<?php echo base_url("ourservices/update_form/$item->id");?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>
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