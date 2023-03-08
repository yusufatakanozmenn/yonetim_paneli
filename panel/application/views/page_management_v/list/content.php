<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Sayfa Listesi
        </h4>
        <h4>

            <a href="<?php echo base_url("page_management/new_page")?>" class="btn btn-outline btn-primary btn-sm">
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
                        href="<?php echo base_url("page_management/add"); ?>">tıklayınız</a></p>
            </div>
            <?php } else { ?>

            <table class="table table-hover table-striped">
                <thead>
                    <th>ID</th>
                    <th>Başlık</th>
                    <th>Bağlantı Sayfası</th>
                    <th>Anasayfa</th>                    
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody>
                     <?php foreach ($items as $item) { ?>
                        <tr>
                        <td><?php echo $item->id;?></td>
                        <td><?php echo $item->adi;?></td>
                        <td><?php echo $item->seo;?></td>                               
                        <td>
                            <input data-url="<?php echo base_url("page_management/update_status/$item->id");?>"
                                class="isActive" id="anasayfa" type="checkbox" data-switchery data-color="#10c469"
                                <?php echo ($item->anasayfa) ? "checked" : "";  ?> />
                        </td>
                        <td>
                            <input data-url="<?php echo base_url("page_management/update_status/$item->id");?>"
                                class="isActive" id="durum" type="checkbox" data-switchery data-color="#10c469"
                                <?php echo ($item->durum) ? "checked" : "";  ?> />
                        </td>
                        <td>
                            <a href="<?php echo base_url("page_management/delete/$item->id");?>" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i>
                                Sil</a>
                            <a href="<?php echo base_url("page_management/update_form/$item->id");?>" class="btn btn-sm btn-info "><i class="fa fa-pencil-square-o"></i>
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