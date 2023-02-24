<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="javascript:void(0)"><img class="img-responsive"
                            src="<?php echo base_url("assets");?>/assets/images/alva_favicon.svg" alt="avatar" /></a>
                </div><!-- .avatar -->
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="javascript:void(0)" class="username">Alva Grup</a></h5>
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <small>Admin</small>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li>
                                    <a class="text-color" href="/index.html">
                                        <span class="m-r-xs"><i class="fa fa-home"></i></span>
                                        <span>Siteye Git</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="profile.html">
                                        <span class="m-r-xs"><i class="fa fa-user"></i></span>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="settings.html">
                                        <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a class="text-color" href="logout.html">
                                        <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                                        <span>Çıkış</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- .media-body -->
        </div><!-- .media -->
    </div><!-- .app-user -->

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">
                <li class="has-submenu">
                    <a href="<?php echo base_url();?>" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                        <span class="menu-text">Anasayfa</span>
                        <i class="menu-caret zmdi zmdi-hc-sm "></i>
                    </a>

                </li>

                
                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                        <span class="menu-text">Site Yönetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url("general_settings")?>">Genel Ayarlar</a></li>
                        <li><a href="<?php echo base_url("popup_message")?>">Açılır Mesaj</a></li>
                        <li><a href="<?php echo base_url("api_settings")?>">API Ayarları</a></li>
                        <li><a href="<?php echo base_url("contact_settings")?>">İletişim Ayarları</a></li>
                        <li><a href="<?php echo base_url("social_media_settings")?>">Sosyal Medya Ayarları</a></li>
                        <li><a href="<?php echo base_url("module_settings")?>">Modül Ayarları</a></li>
                        <li><a href="<?php echo base_url("homepage_module_settings")?>">Anasayfa Modül Sıralama</a></li>
                        <li><a href="<?php echo base_url("limit_settings")?>">Limit Ayarları</a></li>
                        <li><a href="<?php echo base_url("site_on_construction_settings")?>">Site Bakım Modu</a></li>
                        <li><a href="<?php echo base_url("mail_settings")?>">Mail Ayarları</a></li>
                        <li><a href="<?php echo base_url("sms_settings")?>">SMS Ayarları</a></li>
                        <li><a href="<?php echo base_url("background_images_settings")?>">Arka Plan Görselleri</a></li>
                    </ul>
                </li>


                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                        <span class="menu-text">Dil Yönetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url("language_add_new")?>">Yeni Dil Ekle</a></li>
                        <li><a href="<?php echo base_url("language_list")?>">Dil Listesi</a></li>
                        <li><a href="<?php echo base_url("language_admin")?>">Admin Panel Dil Ayarı</a></li>
                    </ul>
                </li>



                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-puzzle-piece zmdi-hc-lg"></i>
                        <span class="menu-text">Menu Yonetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="header-menu.php">Header Menü</a></li>
                        <li><a href="footer.php">Footer Menü</a></li>
                        <li><a href="sabit-linkler.php">Sabit Linkler</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-inbox zmdi-hc-lg"></i>
                        <span class="menu-text">Müşteri Yönetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="rehberim.php">Rehberim</a></li>
                        <li><a href="toplu-email.php">Toplu E-mail Gönder</a></li>
                        <li><a href="toplu-sms.php">Toplu SMS Gönder</a></li>
                        <li><a href="bildirim-sablonlari.php">Bildirim Şablonları</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                        <span class="menu-text">Ürün Yönetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url("product")?>">Ürünler</a></li>
                        <li><a href="urun-kategori.php">Ürün Kategorileri</a></li>
                        <li><a href="ozellik-gruplari.php">Özellik Grupları</a></li>
                    </ul>
                </li>


                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                        <span class="menu-text">Proje Yönetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="projeler.php">Projeler</a></li>
                        <li><a href="proje-kategori.php">Proje Kategorileri</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-storage zmdi-hc-lg"></i>
                        <span class="menu-text">Paket Yönetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="paket.php">Paketler</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                        <span class="menu-text">Sayfa Yönetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="projeler.php">Sayfa Ekle</a></li>
                        <li><a href="proje-kategori.php">Sayfa listesi</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-pin zmdi-hc-lg"></i>
                        <span class="menu-text">Hizmetlerimiz</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">Yeni Hizmet Ekle</a></li>
                        <li><a href="#"">Hizmet listesi </a></li>
                    </ul>
                </li>



                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-pin zmdi-hc-lg"></i>
                        <span class="menu-text">Kutucuk Yönetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="yeni-urun-ekle.php">Yeni Kutucuk Ekle</a></li>
                        <li><a href="urun-listesi.php">Kutucuk listesi </a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-pin zmdi-hc-lg"></i>
                        <span class="menu-text">Haber & Duyurular</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="urun-listesi.php">Yeni Soru Ekle </a></li>
                        <li><a href="yeni-urun-ekle.php">Sorular</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-pin zmdi-hc-lg"></i>
                        <span class="menu-text">Referans Yönetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="urun-listesi.php">Yeni Referans Ekle </a></li>
                        <li><a href="yeni-urun-ekle.php">Referans listesi</a></li>
                    </ul>
                </li>


                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-pin zmdi-hc-lg"></i>
                        <span class="menu-text">Belge Yönetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="yeni-urun-ekle.php">Yeni Belge Ekle</a></li>
                        <li><a href="urun-listesi.php">Belge listesi </a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                        <span class="menu-text">E-Katalog Yönetimi </span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="projeler.php">Yeni Katalog Ekle</a></li>
                        <li><a href="proje-kategori.php">Katalog listesi </a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                        <span class="menu-text">Ekip Yönetimi</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="projeler.php">Yeni Ekip Ekle</a></li>
                        <li><a href="proje-kategori.php">Ekip listesi</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                        <span class="menu-text">Bayi & Şube Yönetimi </span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="projeler.php">Yeni Bayi & Şube Ekle</a></li>
                        <li><a href="projeler.php">Bayi & Şube listesi</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                        <span class="menu-text">Blog </span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="projeler.php">Yeni Blog Ekle</a></li>
                        <li><a href="projeler.php">Blog Listesi</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                        <span class="menu-text">Slider </span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="projeler.php">Yeni Slider Ekle</a></li>
                        <li><a href="projeler.php">Slider Listesi</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                        <span class="menu-text">Foto Galeri </span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="projeler.php">Yeni Fotoğraf Ekle</a></li>
                        <li><a href="projeler.php">Galeri Listesi</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                        <span class="menu-text">Video Galeri </span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="projeler.php">Yeni Video Ekle</a></li>
                        <li><a href="projeler.php">Video Listesi</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                        <span class="menu-text">Banka Hesapları</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="projeler.php">Yeni Banka Hesabı Ekle</a></li>
                        <li><a href="projeler.php">Hesap Listesi</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                        <span class="menu-text">Yöneticiler</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="projeler.php">Yeni Yönetici Ekle</a></li>
                        <li><a href="projeler.php">Yönetici Listesi</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon zmdi zmdi-language-javascript zmdi-hc-lg"></i>
                        <span class="menu-text">Mesajlar</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon zmdi zmdi-language-javascript zmdi-hc-lg"></i>
                        <span class="menu-text">Teklif Formu</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon zmdi zmdi-language-javascript zmdi-hc-lg"></i>
                        <span class="menu-text">İnsan Kaynakları</span>
                    </a>
                </li> -->

                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon zmdi zmdi-language-javascript zmdi-hc-lg"></i>
                        <span class="menu-text">Not Defteri</span>
                    </a>
                </li>


            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>