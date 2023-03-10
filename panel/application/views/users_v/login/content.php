<div id="back-to-home">
    <a href="https://alvagrup.com/" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
</div>
<div class="simple-page-wrap">
    <div class="simple-page-logo animated swing">
        <a href="index.html">
            <a href="javascript:void(0)"><img class="img-responsive"
                    src="<?php echo base_url("assets"); ?>/assets/images/alva_logo_beyaz.svg" alt="avatar" /></a>
        </a>
    </div>
    <div class="simple-page-form animated flipInY" id="login-form">
        <h4 class="form-title m-b-xl text-center">Yönetim Paneli</h4>
        <form class="forms-sample" method="post" action="<?php echo base_url("userop/do_login"); ?>"
            enctype="multipart/form-data">
            <div class="form-group">
                <input id="sign-in-email" type="email" class="form-control" placeholder="E-posta" name="email">
                <?php if (isset($form_error)) { ?>
                    <small class="pull-right input-form-error">
                        <?php echo form_error("email"); ?>
                    </small>
                <?php } ?>
            </div>

            <div class="form-group">
                <input id="sign-in-password" type="password" class="form-control" placeholder="Şifre"
                    name="sifre">
                <?php if (isset($form_error)) { ?>
                    <small class="pull-right input-form-error">
                        <?php echo form_error("sifre"); ?>
                    </small>
                <?php } ?>

            </div>

            <button type="submit" class="btn btn-primary">GİRİŞ</button>
        </form>
    </div>

    <div class="simple-page-footer">
        <p><a href="password-forget.html">Şifremi Unuttum ?</a></p>
    </div>


</div>