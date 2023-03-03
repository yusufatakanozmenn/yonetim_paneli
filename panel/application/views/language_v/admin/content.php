<?php $BASEPATH = $_SERVER['DOCUMENT_ROOT'] . "/yonetim_paneli/panel/";?>
<div class="card-body">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="card-title">Site Önyüz Dil Ayarı Kelime Düzenle</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <div id="editable-form_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="editable-form"
                                            class="table table-bordered user-list dataTable no-footer" role="grid"
                                            aria-describedby="editable-form_info">
                                            <?php if(file_exists($BASEPATH . "languages/admin_dil.php")){ ?>
                                                <?php include($BASEPATH . "languages/admin_dil.php"); ?>
                                                <?php
                                                foreach ($admindil as $key => $val) { ?>
                                                <tbody>
                                                <tr role="row" class="even">
                                                <td class="uneditable"><?php echo $key;?></td>
                                                <td><input class="language_value"
                                                        type="text"
                                                        name="<?php echo $key;?>"
                                                        data-url="<?php echo base_url("language_admin/update_language_text/");?>"
                                                        id="<?php echo $key;?>"
                                                        value="<?php echo $val;?>"
                                                ></td>
                                                </tr>
                                                </tbody>
                                           <?php } ?>
                                           <?php }else{?>
                                            <?php 
                                                echo  "Kayıt Bulunamadı! Lütfen 'languages' klasörüne dosya ekleyin!";
                                            } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>