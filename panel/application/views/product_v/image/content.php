<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("product/image_upload/$item->id"); ?>" id="dropzone" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("product/image_upload/$item->id"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Yüklemek istediğiniz resimleri buyara sürükleyiniz</h3>
                        <p class="m-b-lg text-muted">(Yüklemek için dosyalarınızı sürükleyiniz yada buraya tıklayınız)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>

<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <b><?php echo $item->adi; ?></b> kaydına ait Resimler
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">

                <?php if(empty($item_images)) { ?>

                    <div class="alert alert-info text-center">
                        <p>Burada herhangi bir resim bulunmamaktadır.</a></p>
                    </div>

                <?php } else { ?>

                    <table class="table table-bordered table-striped table-hover pictures_list">
                        <thead>
                            <th class="w100 text-center">#id</th>
                            <th>Görsel</th>
                            <th>Resim Adı</th>
                            <th>İşlem</th>
                        </thead>
                        <tbody>

                        <?php foreach($item_images as $image){ ?>

                            <tr>
                                <td class="w100 text-center">#<?php echo $image->id; ?></td>
                                <td class="w100 text-center">
                                    <img width="30" src="<?php echo base_url("uploads/{$viewFolder}/$image->resim"); ?>" alt="<?php echo $image->resim; ?>" class="img-responsive">
                                </td>
                                <td><?php echo $image->resim; ?></td>
                                <td class="w100 text-center">
                                    <a
                                        href="<?php echo base_url("product/image_delete/$item->id/$image->resim"); ?>"
                                        class="btn btn-sm btn-danger btn-outline btn-block">
                                        <i class="fa fa-trash"></i> Sil
                        </a>
                                </td>
                            </tr>

                        <?php } ?>

                        </tbody>

                    </table>
                <?php } ?>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>

