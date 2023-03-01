<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-b-lg">
                    Toplu E-Mail Gönder
                </h4>

                <div class="col-md-12">
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="">

                            <div class="card-body">
                                <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                                    enctype="multipart/form-data">
                                    <div class="form-group">

                                        <input type="text" class="form-control form-control-sm" name="konu" id="konu"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="diger">Harici E-Posta Adresleri <small
                                                class="text-danger">virgüllerle ayırınız</small></label>
                                        <textarea id="diger" name="diger" class="form-control" rows="6"></textarea>

                                        <div class="wrap">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="widget">
                                                        <header class="widget-header">
                                                            <h4 class="widget-title"></h4>
                                                        </header><!-- .widget-header -->
                                                        <hr class="widget-separator">
                                                        <div class="widget-body">
                                                            <div class="m-0" data-plugin="summernote"
                                                                data-options="{height: 250}"></div>
                                                        </div><!-- .widget-body -->
                                                    </div><!-- .widget -->
                                                </div><!-- END column -->
                                            </div>
                                        </div><!-- .wrap -->
                                    </div>
                                    <button type="submit" name="toplu_email_gonder"
                                        class="btn btn-primary btn-icon-text btn-sm">
                                        <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                        GÖNDER
                                    </button>
                                </form>
                            </div>
                            <!-- .row -->
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- #dash-content -->
</div>