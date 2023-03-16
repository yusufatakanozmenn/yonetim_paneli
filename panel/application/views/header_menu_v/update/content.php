<div class="wrap">
    <section class="app-content">
        <h4 class="m-b-lg">
            Menü Düzenle
        </h4>
        <div class="col grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="<?php echo base_url("header_menu/update/$item->id") ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="menu_ust">Üst Menü Seç</label>
                            <select class="js-example-basic-single form-control-sm select2-hidden-accessible" name="menu_ust" id="menu_ust" required="" style="width:100%" tabindex="-1" aria-hidden="true">
                                <option value="<?= $item->menu_ust ?>"><?= ($item->menu_ust == 0) ? "Üst Menü" : "$item->menu_isim" ?></option>
                                <option value="0">Üst Menü</option>
                                <option value="2">KURUMSAL</option>
                                <option value="4">ÜRÜNLERİMİZ</option>
                                <option value="10">BELGELERİMİZ</option>
                                <option value="28">İNSAN KAYNAKLARI</option>
                                <option value="8">İLETİŞİM</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-menu_ust-container"><span class="select2-selection__rendered" id="select2-menu_ust-container" title="Üst Menü"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <div class="form-group">
                            <label for="menu_sira">Menü Sıra</label>
                            <input type="number" min="0" class="form-control form-control-sm" name="menu_sira" id="menu_sira" value="<?= $item->menu_sira ?>">
                        </div>
                        <div class="form-group">
                            <label for="menu_isim">Menü Adı</label>
                            <input type="text" class="form-control form-control-sm" name="menu_isim" required="" id="menu_isim" value="<?= $item->menu_isim ?>">
                        </div>
                        <div class="form-group link sayfalar">
                            <label for="link">Bağlantı Adresi (Manuel Link Ekle)</label>
                            <input type="text" class="form-control form-control-sm" name="link" id="link" value="<?= $item->link ?>">
                        </div>
                        <div class="form-group sayfalar">
                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                    <input type="checkbox" name="sekme" class="form-check-input" <?= ($item->sekme) ? "checked" : ""; ?>>
                                    Tıklandığında yeni sekmeye gitsin mi ?
                                    <i class="input-helper"></i><i class="input-helper"></i></label>
                            </div>
                        </div>
                        <h4 class="m-b-lg">
                            Alt Menüler
                        </h4>
                        <?php if (empty($sub_menu)) { ?>
                            <div class="alert alert-info text-center">
                                <p>Burada herhangi bir veri bulunmamaktadır.</p>
                            </div>
                        <?php } else { ?>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th><i class="fa fa-reorder"></i></th>
                                    <th>#id</th>
                                    <th>Menu Başlık</th>
                                    <th>Menu Url</th>
                                    <th>Durumu</th>
                                    <th>İşlem</th>
                                </thead>
                                <tbody class="sortable" data-url="<?php echo base_url("header_menu/rankSetter"); ?>">

                                    <?php foreach ($sub_menu as $menu) { ?>

                                        <tr id="ord-<?php echo $menu->id; ?>">
                                            <td><i class="fa fa-reorder"></i></td>
                                            <td>#<?php echo $menu->id; ?></td>
                                            <td><?php echo $menu->menu_isim; ?></td>
                                            <td><?php echo $menu->menu_url; ?></td>
                                            <td>1
                                                <input data-url="<?php echo base_url("header_menu/update_status/$menu->id"); ?>" class="isActive" type="checkbox" data-switchery data-color="#10c469" <?php echo ($menu->menu_durum) ? "checked" : ""; ?> />
                                            </td>
                                            <td>
                                                <button data-url="<?php echo base_url("header_menu/delete/$menu->id"); ?>" class="btn btn-sm btn-danger btn-outline remove-btn">
                                                    <i class="fa fa-trash"></i> Sil
                                                </button>
                                                <a href="<?php echo base_url("header_menu/update_form/$menu->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                            </td>
                                        </tr>

                                    <?php } ?>

                                </tbody>

                            </table>

                        <?php } ?>
                        <button type="submit" name="MenuKaydet" class="btn btn-primary mr-2 btn-sm"><i class="mdi mdi-spin mdi-loading"></i> Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- #dash-content -->
</div>