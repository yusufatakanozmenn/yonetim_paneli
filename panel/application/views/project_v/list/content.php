<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Proje Listesi
        </h4>
        <h4>

            <a href="<?php echo base_url("project/new_form"); ?>" class="btn btn-primary btn-sm">
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
                        href="<?php echo base_url("project/new_form"); ?>">tıklayınız</a></p>
            </div>
            <?php } else { ?>

            <table class="table table-hover table-striped">
                <thead>
                    <th>ID</th>
                    <th>Proje Adı</th>
                    <th>Kategori</th>
                    <th>Anasayfa</th>
                    <th>Durum</th>
                    <th>İşlem</th>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>
                    <tr>
                        <td>
                            <?php echo $item->id; ?>
                        </td>
                        <td>
                            <?php echo $item->adi; ?>
                        </td>
                        <td>
                            <?php echo $item->kategori; ?>
                        </td>
                        <td>
                            <input data-url="<?php echo base_url("project/update_status/$item->id");?>"
                                class="isActive" id="anasayfa" type="checkbox" data-switchery data-color="#10c469"
                                <?php echo ($item->anasayfa) ? "checked" : "";  ?> />

                        </td>
                        <td>
                            <input data-url="<?php echo base_url("project/update_status/$item->id");?>"
                                class="isActive" id="durum" type="checkbox" data-switchery data-color="#10c469"
                                <?php echo ($item->durum) ? "checked" : "";  ?> />

                        </td>
						<td>
                            <a href="<?php echo base_url("project/delete/$item->id");?>" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i>
                                Sil</a>
                            <a href="<?php echo base_url("project/update_form/$item->id");?>" class="btn btn-sm btn-info "><i class="fa fa-pencil-square-o"></i>
                                Düzenle</a>
                            <a href="<?php echo base_url("project/image_form/$item->id");?>" class="btn btn-sm btn-dark "><i class="fa fa-image"></i>
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