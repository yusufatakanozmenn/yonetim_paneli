<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürün Listesi
        </h4>
        <h4>

            <a href="<?php echo base_url("product/new_form"); ?>" class="btn btn-outline btn-primary btn-sm">

                <i class="fa fa-plus-circle"></i> Yeni Ekle</a>
            <a href="javascript:void(0)" class="dropdown-toggle btn btn-outline btn-primary btn-sm"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i> Seçilenlere Uygula </a>
            <div class="media-group dropdown-menu animated flipInY" style="margin-left:5rem; ">
                <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>My
                        Profile</a></li>
                <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a>
                </li>
                <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>privacy</a>
                </li>
            </div>
            <a href="javascript:void(0)" class="dropdown-toggle btn btn-outline btn-warning btn-sm"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i> Excel İşlemleri </a>
            <div class="media-group dropdown-menu animated flipInY" style="margin-left:13rem; ">
                <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>My
                        Profile</a></li>
                <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a>
                </li>
                <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>privacy</a>
                </li>
            </div>
            <a href="#" class="btn btn-outline btn-danger btn-sm">
                <i class="fa fa-trash"></i> Tüm Veriyi Sil</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php
            if (empty($items)) { ?>
            <div class="alert alert-info text-center">
                <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a
                        href="<?php echo base_url("product/new_form"); ?>">tıklayınız</a></p>
            </div>
            <?php } else { ?>

            <table class="table table-hover table-striped">
                <thead>
                    <th>
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" id="checkbox-demo-1" />
                            <label for="checkbox-demo-1"></label>
                        </div>
                    </th>
                    <th>Foto</th>
                    <th>Başlık</th>
                    <th>Kategori</th>
                    <th>Yeni Ürün</th>
                    <th>Anasayfa</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>
                        <tr>
                        <td>
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="checkbox-demo-1" />
                                <label for="checkbox-demo-1"></label>
                            </div>
                        </td>
                        <td>#<?php echo $item->id;?></td>
                        <td><?php echo $item->adi;?></td>
                        <td><?php echo $item->kategori;?></td>
                        <td><?php echo $item->spot;?></td>
                        <td><?php echo $item->description;?></td>
                        <td>
                            <input id="switch-2-2" 
                            type="checkbox" 
                            data-switchery 
                            data-color="#10c469"
                            <?php echo ($item->durum) ? "checked" : "";  ?>/>
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i>
                                Sil</a>
                            <a href="#" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>
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