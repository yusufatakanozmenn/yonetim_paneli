<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Toplu E-Mail Gönder</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">

                        <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                            enctype="multipart/form-data">
                            <div class="form-group">

                                <input type="text" class="form-control form-control-sm" name="konu" id="konu" value="">
                            </div>
                            <div class="form-group">
                                <label for="diger">Harici E-Posta Adresleri <small class="text-danger">virgüllerle
                                        ayırınız</small></label>
                                <textarea id="diger" name="diger" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="m-0" data-plugin="summernote" data-options="{height: 250}"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="toplu_email_gonder" class="btn rounded mw-md btn-primary">
                                    GÖNDER </button>
                                <a href=""></a>
                            </div>


                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section><!-- #dash-content -->
</div>