<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Fotoğraf Galeri Listesi
        </h4>
        <h4>

            <a href="<?php echo base_url("photo_gallery/new_form"); ?>" class="btn btn-outline btn-primary btn-sm">
                <i class="fa fa-plus-circle"></i> Yeni Galeri Ekle</a>
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
                            href="<?php echo base_url("photo_gallery/new_form"); ?>">tıklayınız</a></p>
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
                        <th>Başlık</th>
                        <th>Fotoğraflar</th>
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

                                <td name="adi">
                                    <?php echo $item->adi; ?>
                                </td>
                                <td name="adi">
                                    <a href="<?php echo base_url("photo_gallery/photo_list/$item->id"); ?>"
                                        class="btn btn-outline btn-success btn-sm" title="Fotoğrafları Gör"><i
                                            class="fa fa-angle-right"></i> Fotoğrafları Gör []</a>
                                </td>
                                <td name="durum"> <input
                                        data-url="<?php echo base_url("photo_gallery/update_status/$item->id"); ?>"
                                        class="isActive" id="switch-2-2" type="checkbox" data-switchery data-color="#10c469"
                                        <?php echo ($item->durum) ? "checked" : ""; ?> />
                                </td>
                                <td>
                                    <a href="<?php echo base_url("photo_gallery/delete/$item->id"); ?>"
                                        class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i>
                                        Sil</a>
                                    <a href="<?php echo base_url("photo_gallery/update_form/$item->id"); ?>"
                                        class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>
                                        Düzenle</a>
                                </td>
                            </tr>
                        </tbody>

                    <?php } ?>
                </table>

            <?php } ?>



        </div>

    </div>
</div>