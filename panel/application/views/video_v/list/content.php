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
                    <th>Sıra</th>
                    <th>Resim</th>
                    <th>Başlık</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <?php foreach ($items as $item) { ?>
                <tbody>
                    <tr>
                        <td name="sira">
                            <?php echo $item->sira; ?>
                        </td>
                        <td>
                            <a href="#" class="thumbnail white w-50">
                                <img style="width:50px; height:50px;"
                                    src="<?php echo base_url('uploads'); ?>/video_v/<?php echo $item->resim; ?>"
                                    alt="">
                            </a>
                        </td>
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
        </div><!-- .widget -->
    </div><!-- END column -->
</div>