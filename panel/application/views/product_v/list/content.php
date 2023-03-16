<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürün Listesi
        </h4>
        <h4>

            <a href="<?php echo base_url("product_add"); ?>" class="btn btn-outline btn-primary btn-sm">
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
                        href="<?php echo base_url("product/new_form"); ?>">tıklayınız</a></p>
            </div>
            <?php } else { ?>

            <table class="table table-hover table-striped">
                <thead>
                    <th>ID</th>
                    <th>Başlık</th>
                    <th>Ürün Resmi</th>
                    <th>Ürün Kodu</th>
                    <th>Fiyat</th>
                    <th>Açıklama</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>
                    <tr>
                        <td><?php echo $item->id;?></td>
                        <td><?php echo $item->adi;?></td>
                        <td>
                            <a href="#" class="thumbnail white w-50">
                                <img style="width:50px; height:50px;"
                                    src="<?php echo base_url('uploads'); ?>/product_v/<?php echo $item->resim; ?>"
                                    alt="">
                            </a>
                        </td>
                        <td><?php echo $item->urun_kodu;?></td>
                        <td><?php echo $item->fiyat;?></td>
                        <td><?php echo $item->aciklama;?></td>
                        <td>
                            <input data-url="<?php echo base_url("product/update_status/$item->id");?>" class="isActive"
                                id="switch-2-2" type="checkbox" data-switchery data-color="#10c469"
                                <?php echo ($item->durum) ? "checked" : "";  ?> />

                        </td>
                        <td>
                            <a href="<?php echo base_url("product/delete/$item->id");?>"
                                class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i>
                                Sil</a>
                            <a href="<?php echo base_url("product/update_form/$item->id");?>"
                                class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>
                                Düzenle</a>
                            <a href="<?php echo base_url("product/image_form/$item->id");?>"
                                class="btn btn-sm btn-dark "><i class="fa fa-image"></i>
                                Fotoğraflar</a>
                        </td>
                    </tr>
                    <?php } ?>


                </tbody>

            </table>
            <?php } ?>

        </div><!-- .widget -->
    </div><!-- END column -->
</div>