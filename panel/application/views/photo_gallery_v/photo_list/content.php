<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">
                            <?php echo $item1->adi ?> Galerisine Ait Fotoğraflar
                        </h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form class="forms-sample" method="post" enctype="multipart/form-data" action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-body">
                                            <form action="<?php echo base_url("photo_gallery/upload_photo"); ?>"
                                                class="dropzone" data-plugin="dropzone"
                                                data-options="{ url: '<?php echo base_url("photo_gallery/upload_photo"); ?>'}">
                                                <div class="dz-message">
                                                    <h3 class="m-h-lg">Yüklemek istediğiniz resimleri buyara
                                                        sürükleyiniz</h3>
                                                    <p class="m-b-lg text-muted">(Yüklemek için dosyalarınızı
                                                        sürükleyiniz yada buraya tıklayınız)</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <h4>
                                        <a href="#" class="btn btn-outline btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Seçilenleri Sil</a>
                                        <a href="#" class="btn btn-outline btn-purple btn-sm">
                                            <i class="fa fa-trash"></i> Tümünü Seç</a>
                                        <a href="#" class="btn btn-outline btn-warning btn-sm">
                                            <i class="fa fa-trash"></i> Hiçbirini Seçme</a>

                                    </h4>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="white_card card mb-3">
                                            <div class="thumbnail white">
                                                <div class="caption">
                                                    <div class="card-header">
                                                        <div class="checkbox checkbox-primary">
                                                            <input type="checkbox" id="checkbox-demo-1" />
                                                            <label for="checkbox-demo-1"></label>
                                                        </div>
                                                    </div>

                                                    <a href="javascript:void(0)" class="product">
                                                        <img src="<?php echo base_url("uploads/$viewFolder/$item->kapak"); ?>"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div class="caption">
                                                        <div class="card-header">
                                                            <a href="<?php echo base_url("photo_gallery/delete/$item->id"); ?>"
                                                                class="btn btn-sm btn-danger btn-outline"><i
                                                                    class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>