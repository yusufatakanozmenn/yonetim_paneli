<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Proje Düzenle</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                        <form action="<?php echo base_url("/project/update/$item->id") ?>" method="post">

                            <div class="form-group">
                                <label for="sira">Sıra</label>
                                <input type="number" class="form-control form-control-sm" name="sira" id="sira"
                                    value="<?php echo $item->sira; ?>">
                            </div>

                            <div class="form-group">
                                <label for="adi">Başlık</label>
                                <input type="text" class="form-control form-control-sm" min="0" name="adi" id="adi"
                                    value="<?php echo $item->adi; ?>">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control form-control-sm" id="kategori" name="kategori" value="">
                                        <option selected style="display:none;">
                                        <?php echo $item->kategori; ?>
                                        </option>
                                        <option>
                                            KOSGEB Desteği
                                        </option>
                                        <option>TUBİTAK Desteği</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="videoid">Youtube Video ID</label>
                                    <input type="text" class="form-control form-control-sm" name="videoid" id="videoid"
                                        value="<?php echo $item->videoid; ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="site_url">Yayın Tarihi</label>
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker4" data-plugin="datetimepicker"
                                            data-options="{  format: 'DD/MM/YYYY' }">
                                            <input type="text" class="form-control input-small" name="tarih"
                                                placeholder="Yayın Tarihi" value="<?php echo $item->tarih; ?>">
                                            <span class="input-group-addon bg-info text-white">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="site_url">Güncelleme Tarihi</label>
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker4" data-plugin="datetimepicker"
                                            data-options="{  format: 'DD/MM/YYYY' }">
                                            <input type="text" class="form-control input-small" name="tarihg"
                                                placeholder="Açılış Tarihi" value="<?php echo $item->tarihg; ?>">
                                            <span class="input-group-addon bg-info text-white">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kapak Görseli</label>
                                <input type="file" name="kapak" class="file-upload-default">
                            </div>
                            <div class="form-group">
                                <label>Fotoğraflar</label>
                                <input type="file" name="resim" multiple="" class="file-upload-default">
                            </div>
                            <div class="form-group">
                                <label for="spot">Spot Metin <i class="icon-info text-info" data-toggle="popover"
                                        data-content="Spot metin, içeriğinizi özetleyen bir ya da iki cümlelik metindir. 180 karakteri geçmemesi gerekmektedir.  Spot metinde de tamamen BÜYÜK harften kaçınmalı ve çift tırnak kullanılmamalıdır."
                                        data-trigger="hover" data-original-title="Spot Metin"></i></label>
                                <textarea id="spot" name="spot" class="form-control" rows="4"><?php echo $item->spot ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="aciklama">İçerik <i class="icon-info text-info" data-toggle="popover"
                                        data-content="İçerik" data-trigger="hover"
                                        data-original-title="Spot Metin"></i></label>
                                <textarea id="aciklama" name="aciklama" class="form-control" rows="4"><?php echo $item->aciklama ?></textarea>
                            </div>

                            <div class="" id="seo-ayarlari" role="tabpanel" aria-labelledby="contact-tab-vertical">

                                <div class="form-group">
                                    <label for="maxlength-textarea">SEO Açıklama (Description)</label>
                                    <textarea id="maxlength-textarea" name="description" class="form-control"
                                        maxlength="260" rows="2"><?php echo $item->description ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn rounded mw-md btn-success "> GÜNCELLE </button>
                                <a href="<?php echo base_url("project/update"); ?>"></a>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>