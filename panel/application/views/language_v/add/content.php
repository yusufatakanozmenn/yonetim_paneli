<div class="wrap">
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget products-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Yeni Dil Ekle</h4>
                    </header>
                    <hr class="widget-separator">
                    <div class="widget-body">
                    <form action="../_class/yonetim_islem.php" method="POST">
                        <div class="card-body">
                            <div class="alert alert-info" role="alert">
                                <i class="mdi mdi-alert-circle"></i>
                                Yeni dil ekleme/düzenleme ve multilanguage kullanımı nasıl olur detaylı bilgi almak için <a href="" data-toggle="modal" data-target="#exampleModal-2">lütfen tıklayınız.</a>
                            </div>
                            <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel-2">Dil Ekleme/Düzenleme (MultiLanguage Kullanımı) Açıklamalar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Çoğu yazılımlarımızda standart olarak gelen&nbsp;<span style="font-weight: bold;">Sınırsız Çoklu Dil (Multi Language)</span> sisteminin kullanımı ve <span style="font-weight: bold;">Yeni &nbsp;Dil Ekleme</span> için gerekli bilgiler aşağıda sırasıyla verilmiştir.</p>
                                            <p><span style="color: rgb(255, 0, 0);"><span style="font-weight: bold;">1)</span> </span> Şu anda bulunduğunuz sayfada yer alan standart (dil adı, ön eki, gösterim adı vb. ) ibareleri kendinize göre doldurunuz.</p>
                                            <p><span style="font-weight: bold;"><span style="color: rgb(255, 0, 0);">2)</span> </span>Sayfanın hemen alt kısmında bulunan <span style="font-weight: bold;">Sabit Değişkenler</span> alanındaki Türkçe olarak hazır bulunan ibareleri, ekleyeceğiniz yeni dil'e göre tercüme ederek kaydedin.</p>
                                            <p><span style="font-weight: bold;"><span style="color: rgb(255, 0, 0);">3)</span> </span>Yeni dil ekleme işlemi yaptıktan sonra, eklediğiniz dil'e veri girişi ve düzenleme yapmak için&nbsp;<span style="line-height: 21.4286px;"><span style="font-weight: bold;">Admin Paneli &gt;&gt;&gt; Dil Yönetimi &gt;&gt;&gt; Dil Listesi &gt;&gt;&gt; Eklediğiniz Dili Düzenle</span>'ye tıklayınız.
								</span></p><p><span style="line-height: 21.4286px;"><span style="color: rgb(255, 0, 0); font-weight: bold;">Hatırlatmakta fayda var;<br></span>Sitede bulunan tüm metinsel alanlar, dil yönetiminden düzenlenebilmektedir. Bu nedenle FTP üzerinden dosyalar da değişiklik yapmanıza <span style="text-decoration: underline;">gerek yoktur</span>. Değiştirmek istediğiniz metinleri, ilgili dil'in içindeki sabit değişkenler kısmından bularak <span style="text-decoration: underline;">değiştirebilirsiniz</span>.</span></p>
                                            <p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Ends -->
                            <form class="forms-sample" method="post" action="../_class/yonetim_islem.php" enctype="multipart/form-data">
                                <input id="id" name="id" type="hidden" value="">
                                <div class="form-group">
                                    <label for="sira">Sıra</label>
                                    <input type="text" class="form-control form-control-sm" name="sira" id="sira" value="">
                                </div>
                                <div class="form-group">
                                    <label for="adi">Dil Adı</label>
                                    <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                                </div>
                                <div class="form-group">
                                    <label>Ülke </label>
                                    <select class="icons_select2 select2-hidden-accessible" name="bayrak" style="width:100%" tabindex="-1" aria-hidden="true">
                                        <option value="0">Lütfen Seçiniz</option>
                                        <option value="flag-icon-vi" data-icon="flag-icon-vi">ABD Virgin Adaları</option>
                                        <option value="flag-icon-af" data-icon="flag-icon-af">Afganistan</option>
                                        <option value="flag-icon-ax" data-icon="flag-icon-ax">Aland</option>
                                        <option value="flag-icon-de" data-icon="flag-icon-de">Almanya</option>
                                        <option value="flag-icon-us" data-icon="flag-icon-us">Amerika Birleşik Devletleri</option>
                                        <option value="flag-icon-um" data-icon="flag-icon-um">Amerika Birleşik Devletleri Küçük Dış Adaları</option>
                                        <option value="flag-icon-as" data-icon="flag-icon-as">Amerikan Samoası</option>
                                        <option value="flag-icon-ad" data-icon="flag-icon-ad">Andorra</option>
                                        <option value="flag-icon-ao" data-icon="flag-icon-ao">Angora</option>
                                        <option value="flag-icon-ai" data-icon="flag-icon-ai">Anguilla</option>
                                        <option value="flag-icon-aq" data-icon="flag-icon-aq">Antarktika</option>
                                        <option value="flag-icon-ag" data-icon="flag-icon-ag">Antigua ve Barbuda</option>
                                        <option value="flag-icon-ar" data-icon="flag-icon-ar">Arjantin</option>
                                        <option value="flag-icon-al" data-icon="flag-icon-al">Arnavutluk</option>
                                        <option value="flag-icon-aw" data-icon="flag-icon-aw">Aruba</option>
                                        <option value="flag-icon-au" data-icon="flag-icon-au">Avustralya</option>
                                        <option value="flag-icon-at" data-icon="flag-icon-at">Avusturya</option>
                                        <option value="flag-icon-az" data-icon="flag-icon-az">Azerbeycan</option>
                                        <option value="flag-icon-bs" data-icon="flag-icon-bs">Bahamalar</option>
                                        <option value="flag-icon-bh" data-icon="flag-icon-bh">Bahreyn</option>
                                        <option value="flag-icon-bd" data-icon="flag-icon-bd">Bangladeş</option>
                                        <option value="flag-icon-bb" data-icon="flag-icon-bb">Barbados</option>
                                        <option value="flag-icon-eh" data-icon="flag-icon-eh">Batı Sahra</option>
                                        <option value="flag-icon-by" data-icon="flag-icon-by">Belarus</option>
                                        <option value="flag-icon-be" data-icon="flag-icon-be">Belçika</option>
                                        <option value="flag-icon-bz" data-icon="flag-icon-bz">Belize</option>
                                        <option value="flag-icon-bj" data-icon="flag-icon-bj">Benin</option>
                                        <option value="flag-icon-bm" data-icon="flag-icon-bm">Bermuda</option>
                                        <option value="flag-icon-ae" data-icon="flag-icon-ae">Birleşik Arap Emirlikleri</option>
                                        <option value="flag-icon-gb" data-icon="flag-icon-gb">Birleşik Krallık</option>
                                        <option value="flag-icon-bo" data-icon="flag-icon-bo">Bolivya</option>
                                        <option value="flag-icon-bq" data-icon="flag-icon-bq">Bonaire</option>
                                        <option value="flag-icon-ba" data-icon="flag-icon-ba">Bosna Hersek</option>
                                        <option value="flag-icon-bw" data-icon="flag-icon-bw">Botsvana</option>
                                        <option value="flag-icon-bv" data-icon="flag-icon-bv">Bouvet Adası</option>
                                        <option value="flag-icon-br" data-icon="flag-icon-br">Brezilya</option>
                                        <option value="flag-icon-bn" data-icon="flag-icon-bn">Brunei Darussalam</option>
                                        <option value="flag-icon-bg" data-icon="flag-icon-bg">Bulgaristan</option>
                                        <option value="flag-icon-bf" data-icon="flag-icon-bf">Burkina Faso</option>
                                        <option value="flag-icon-bi" data-icon="flag-icon-bi">Burundi</option>
                                        <option value="flag-icon-bt" data-icon="flag-icon-bt">Butan</option>
                                        <option value="flag-icon-td" data-icon="flag-icon-td">Çad</option>
                                        <option value="flag-icon-cv" data-icon="flag-icon-cv">Cape Verde</option>
                                        <option value="flag-icon-ky" data-icon="flag-icon-ky">Cayman Adaları</option>
                                        <option value="flag-icon-gi" data-icon="flag-icon-gi">Cebelitarık</option>
                                        <option value="flag-icon-cz" data-icon="flag-icon-cz">Çek Cumhuriyeti</option>
                                        <option value="flag-icon-dz" data-icon="flag-icon-dz">Cezayir</option>
                                        <option value="flag-icon-dj" data-icon="flag-icon-dj">Cibuti</option>
                                        <option value="flag-icon-cn" data-icon="flag-icon-cn">Çin</option>
                                        <option value="flag-icon-cc" data-icon="flag-icon-cc">Cocos (Keeling) Adaları</option>
                                        <option value="flag-icon-ck" data-icon="flag-icon-ck">Cook Adaları</option>
                                        <option value="flag-icon-cw" data-icon="flag-icon-cw">Curacao</option>
                                        <option value="flag-icon-dk" data-icon="flag-icon-dk">Danimarka</option>
                                        <option value="flag-icon-ps" data-icon="flag-icon-ps">Devletin Filistin</option>
                                        <option value="flag-icon-do" data-icon="flag-icon-do">Dominik Cumhuriyeti</option>
                                        <option value="flag-icon-dm" data-icon="flag-icon-dm">Dominika</option>
                                        <option value="flag-icon-ec" data-icon="flag-icon-ec">Ekvador</option>
                                        <option value="flag-icon-gq" data-icon="flag-icon-gq">Ekvator Ginesi</option>
                                        <option value="flag-icon-sv" data-icon="flag-icon-sv">El Salvador</option>
                                        <option value="flag-icon-id" data-icon="flag-icon-id">Endonezya</option>
                                        <option value="flag-icon-er" data-icon="flag-icon-er">Eritre</option>
                                        <option value="flag-icon-am" data-icon="flag-icon-am">Ermenistan</option>
                                        <option value="flag-icon-ee" data-icon="flag-icon-ee">Estonya</option>
                                        <option value="flag-icon-et" data-icon="flag-icon-et">Etiyopya</option>
                                        <option value="flag-icon-fk" data-icon="flag-icon-fk">Falkland Adaları (Malvinas)</option>
                                        <option value="flag-icon-fo" data-icon="flag-icon-fo">Faroe Adaları</option>
                                        <option value="flag-icon-ma" data-icon="flag-icon-ma">Fas</option>
                                        <option value="flag-icon-fj" data-icon="flag-icon-fj">Fiji</option>
                                        <option value="flag-icon-ci" data-icon="flag-icon-ci">Fildişi Sahili</option>
                                        <option value="flag-icon-ph" data-icon="flag-icon-ph">Filipinler</option>
                                        <option value="flag-icon-fi" data-icon="flag-icon-fi">Finlandiya</option>
                                        <option value="flag-icon-fr" data-icon="flag-icon-fr">Fransa</option>
                                        <option value="flag-icon-tf" data-icon="flag-icon-tf">Fransız Güney Bölgesi</option>
                                        <option value="flag-icon-gf" data-icon="flag-icon-gf">Fransız Guyanası</option>
                                        <option value="flag-icon-pf" data-icon="flag-icon-pf">Fransız Polinezyası</option>
                                        <option value="flag-icon-ga" data-icon="flag-icon-ga">Gabon</option>
                                        <option value="flag-icon-gm" data-icon="flag-icon-gm">Gambiya</option>
                                        <option value="flag-icon-gh" data-icon="flag-icon-gh">Gana</option>
                                        <option value="flag-icon-gn" data-icon="flag-icon-gn">Gine</option>
                                        <option value="flag-icon-gw" data-icon="flag-icon-gw">Gine-Bissau</option>
                                        <option value="flag-icon-gd" data-icon="flag-icon-gd">Grenada</option>
                                        <option value="flag-icon-gl" data-icon="flag-icon-gl">Grönland</option>
                                        <option value="flag-icon-gp" data-icon="flag-icon-gp">Guadeloupe</option>
                                        <option value="flag-icon-gu" data-icon="flag-icon-gu">Guam</option>
                                        <option value="flag-icon-gt" data-icon="flag-icon-gt">Guatemala</option>
                                        <option value="flag-icon-gg" data-icon="flag-icon-gg">Guernsey</option>
                                        <option value="flag-icon-za" data-icon="flag-icon-za">Güney Afrika</option>
                                        <option value="flag-icon-gs" data-icon="flag-icon-gs">Güney Georgia ve Güney Sandviç Adaları</option>
                                        <option value="flag-icon-ss" data-icon="flag-icon-ss">Güney Sudan</option>
                                        <option value="flag-icon-ge" data-icon="flag-icon-ge">Gürcistan</option>
                                        <option value="flag-icon-gy" data-icon="flag-icon-gy">Guyana</option>
                                        <option value="flag-icon-ht" data-icon="flag-icon-ht">Haiti</option>
                                        <option value="flag-icon-hm" data-icon="flag-icon-hm">Heard Adası ve McDonald Mcdonald Adaları</option>
                                        <option value="flag-icon-in" data-icon="flag-icon-in">Hindistan</option>
                                        <option value="flag-icon-hr" data-icon="flag-icon-hr">Hırvatistan</option>
                                        <option value="flag-icon-nl" data-icon="flag-icon-nl">Hollanda</option>
                                        <option value="flag-icon-hn" data-icon="flag-icon-hn">Honduras</option>
                                        <option value="flag-icon-hk" data-icon="flag-icon-hk">Hong Kong</option>
                                        <option value="flag-icon-io" data-icon="flag-icon-io">İngiliz Hint Okyanusu Bölgesi</option>
                                        <option value="flag-icon-vg" data-icon="flag-icon-vg">İngiliz Virgin Adaları</option>
                                        <option value="flag-icon-iq" data-icon="flag-icon-iq">Irak</option>
                                        <option value="flag-icon-ir" data-icon="flag-icon-ir">İran, İslam Cumhuriyeti</option>
                                        <option value="flag-icon-ie" data-icon="flag-icon-ie">İrlanda</option>
                                        <option value="flag-icon-im" data-icon="flag-icon-im">Isle of Man</option>
                                        <option value="flag-icon-es" data-icon="flag-icon-es">ispanya</option>
                                        <option value="flag-icon-il" data-icon="flag-icon-il">İsrail</option>
                                        <option value="flag-icon-se" data-icon="flag-icon-se">İsveç</option>
                                        <option value="flag-icon-ch" data-icon="flag-icon-ch">İsviçre</option>
                                        <option value="flag-icon-it" data-icon="flag-icon-it">İtalya</option>
                                        <option value="flag-icon-is" data-icon="flag-icon-is">İzlanda</option>
                                        <option value="flag-icon-jm" data-icon="flag-icon-jm">Jamaika</option>
                                        <option value="flag-icon-jp" data-icon="flag-icon-jp">Japonya</option>
                                        <option value="flag-icon-je" data-icon="flag-icon-je">Jersey</option>
                                        <option value="flag-icon-kh" data-icon="flag-icon-kh">Kamboçya</option>
                                        <option value="flag-icon-cm" data-icon="flag-icon-cm">Kamerun</option>
                                        <option value="flag-icon-ca" data-icon="flag-icon-ca">Kanada</option>
                                        <option value="flag-icon-me" data-icon="flag-icon-me">Karadağ</option>
                                        <option value="flag-icon-qa" data-icon="flag-icon-qa">Katar</option>
                                        <option value="flag-icon-kz" data-icon="flag-icon-kz">Kazakistan</option>
                                        <option value="flag-icon-ke" data-icon="flag-icon-ke">Kenya</option>
                                        <option value="flag-icon-ki" data-icon="flag-icon-ki">Kiribati</option>
                                        <option value="flag-icon-cy" data-icon="flag-icon-cy">Kıbrıs</option>
                                        <option value="flag-icon-kg" data-icon="flag-icon-kg">Kırgızistan</option>
                                        <option value="flag-icon-co" data-icon="flag-icon-co">Kolombiya</option>
                                        <option value="flag-icon-km" data-icon="flag-icon-km">Komorlar</option>
                                        <option value="flag-icon-cg" data-icon="flag-icon-cg">Kongo</option>
                                        <option value="flag-icon-cd" data-icon="flag-icon-cd">Kongo Demokratik Cumhuriyeti</option>
                                        <option value="flag-icon-kr" data-icon="flag-icon-kr">Kore Cumhuriyeti</option>
                                        <option value="flag-icon-kp" data-icon="flag-icon-kp">Kore Demokratik Halk Cumhuriyeti</option>
                                        <option value="flag-icon-xk" data-icon="flag-icon-xk">Kosova</option>
                                        <option value="flag-icon-cr" data-icon="flag-icon-cr">Kosta Rika</option>
                                        <option value="flag-icon-cu" data-icon="flag-icon-cu">Küba</option>
                                        <option value="flag-icon-kw" data-icon="flag-icon-kw">Kuveyt</option>
                                        <option value="flag-icon-mp" data-icon="flag-icon-mp">Kuzey Mariana Adaları</option>
                                        <option value="flag-icon-la" data-icon="flag-icon-la">Lao Halkı'nın Demokratik Cumhuriyeti</option>
                                        <option value="flag-icon-ls" data-icon="flag-icon-ls">Lesotho</option>
                                        <option value="flag-icon-lv" data-icon="flag-icon-lv">Letonya</option>
                                        <option value="flag-icon-lr" data-icon="flag-icon-lr">Liberya</option>
                                        <option value="flag-icon-ly" data-icon="flag-icon-ly">Libya</option>
                                        <option value="flag-icon-li" data-icon="flag-icon-li">Lihtenştayn</option>
                                        <option value="flag-icon-lt" data-icon="flag-icon-lt">Litvanya</option>
                                        <option value="flag-icon-lb" data-icon="flag-icon-lb">Lübnan</option>
                                        <option value="flag-icon-lu" data-icon="flag-icon-lu">Lüksemburg</option>
                                        <option value="flag-icon-mo" data-icon="flag-icon-mo">Macao</option>
                                        <option value="flag-icon-hu" data-icon="flag-icon-hu">Macaristan</option>
                                        <option value="flag-icon-mg" data-icon="flag-icon-mg">Madagaskar</option>
                                        <option value="flag-icon-mk" data-icon="flag-icon-mk">Makedonya, Eski Yugoslav Cumhuriyeti</option>
                                        <option value="flag-icon-mw" data-icon="flag-icon-mw">Malawi</option>
                                        <option value="flag-icon-mv" data-icon="flag-icon-mv">Maldivler</option>
                                        <option value="flag-icon-my" data-icon="flag-icon-my">Malezya</option>
                                        <option value="flag-icon-ml" data-icon="flag-icon-ml">Mali</option>
                                        <option value="flag-icon-mt" data-icon="flag-icon-mt">Malta</option>
                                        <option value="flag-icon-mh" data-icon="flag-icon-mh">Marşal Adaları</option>
                                        <option value="flag-icon-mq" data-icon="flag-icon-mq">Martinik</option>
                                        <option value="flag-icon-mu" data-icon="flag-icon-mu">Mauritius</option>
                                        <option value="flag-icon-yt" data-icon="flag-icon-yt">Mayotte</option>
                                        <option value="flag-icon-re" data-icon="flag-icon-re">Mayotte</option>
                                        <option value="flag-icon-mx" data-icon="flag-icon-mx">Meksika</option>
                                        <option value="flag-icon-fm" data-icon="flag-icon-fm">Mikronezya, Federe Devletleri</option>
                                        <option value="flag-icon-eg" data-icon="flag-icon-eg">Mısır</option>
                                        <option value="flag-icon-mn" data-icon="flag-icon-mn">Moğolistan</option>
                                        <option value="flag-icon-md" data-icon="flag-icon-md">Moldova, Cumhuriyeti</option>
                                        <option value="flag-icon-mc" data-icon="flag-icon-mc">Monako</option>
                                        <option value="flag-icon-ms" data-icon="flag-icon-ms">Montserrat</option>
                                        <option value="flag-icon-mr" data-icon="flag-icon-mr">Moritanya</option>
                                        <option value="flag-icon-mz" data-icon="flag-icon-mz">Mozambik</option>
                                        <option value="flag-icon-mm" data-icon="flag-icon-mm">Myanmar</option>
                                        <option value="flag-icon-na" data-icon="flag-icon-na">Namibya</option>
                                        <option value="flag-icon-nr" data-icon="flag-icon-nr">Nauru</option>
                                        <option value="flag-icon-np" data-icon="flag-icon-np">Nepal</option>
                                        <option value="flag-icon-ne" data-icon="flag-icon-ne">Nijer</option>
                                        <option value="flag-icon-ng" data-icon="flag-icon-ng">Nijerya</option>
                                        <option value="flag-icon-ni" data-icon="flag-icon-ni">Nikaragua</option>
                                        <option value="flag-icon-nu" data-icon="flag-icon-nu">Niue</option>
                                        <option value="flag-icon-cx" data-icon="flag-icon-cx">Noel Adası</option>
                                        <option value="flag-icon-nf" data-icon="flag-icon-nf">Norfolk Adası</option>
                                        <option value="flag-icon-no" data-icon="flag-icon-no">Norveç</option>
                                        <option value="flag-icon-cf" data-icon="flag-icon-cf">Orta Afrika Cumhuriyeti</option>
                                        <option value="flag-icon-uz" data-icon="flag-icon-uz">Özbekistan</option>
                                        <option value="flag-icon-pk" data-icon="flag-icon-pk">Pakistan</option>
                                        <option value="flag-icon-pw" data-icon="flag-icon-pw">Palau</option>
                                        <option value="flag-icon-pa" data-icon="flag-icon-pa">Panama</option>
                                        <option value="flag-icon-pg" data-icon="flag-icon-pg">Papua Yeni Gine</option>
                                        <option value="flag-icon-py" data-icon="flag-icon-py">Paraguay</option>
                                        <option value="flag-icon-pe" data-icon="flag-icon-pe">Peru</option>
                                        <option value="flag-icon-pn" data-icon="flag-icon-pn">Pitcairn</option>
                                        <option value="flag-icon-pl" data-icon="flag-icon-pl">Polonya</option>
                                        <option value="flag-icon-pt" data-icon="flag-icon-pt">Portekiz</option>
                                        <option value="flag-icon-pr" data-icon="flag-icon-pr">Porto Riko</option>
                                        <option value="flag-icon-ro" data-icon="flag-icon-ro">Romanya</option>
                                        <option value="flag-icon-rw" data-icon="flag-icon-rw">Ruanda</option>
                                        <option value="flag-icon-ru" data-icon="flag-icon-ru">Rusya Federasyonu</option>
                                        <option value="flag-icon-bl" data-icon="flag-icon-bl">Saint Barthelemy</option>
                                        <option value="flag-icon-sh" data-icon="flag-icon-sh">Saint Helena</option>
                                        <option value="flag-icon-kn" data-icon="flag-icon-kn">Saint Kitts ve Nevis</option>
                                        <option value="flag-icon-lc" data-icon="flag-icon-lc">Saint Lucia</option>
                                        <option value="flag-icon-mf" data-icon="flag-icon-mf">Saint Martin (Fransız bölümü)</option>
                                        <option value="flag-icon-pm" data-icon="flag-icon-pm">Saint Pierre ve Miquelon</option>
                                        <option value="flag-icon-vc" data-icon="flag-icon-vc">Saint Vincent ve Grenadinler</option>
                                        <option value="flag-icon-ws" data-icon="flag-icon-ws">Samoa</option>
                                        <option value="flag-icon-sm" data-icon="flag-icon-sm">San Marino</option>
                                        <option value="flag-icon-st" data-icon="flag-icon-st">Sao Tome ve Principe</option>
                                        <option value="flag-icon-sn" data-icon="flag-icon-sn">Senegal</option>
                                        <option value="flag-icon-sc" data-icon="flag-icon-sc">Seyşeller</option>
                                        <option value="flag-icon-sl" data-icon="flag-icon-sl">Sierra Leone</option>
                                        <option value="flag-icon-cl" data-icon="flag-icon-cl">Şili</option>
                                        <option value="flag-icon-sg" data-icon="flag-icon-sg">Singapur</option>
                                        <option value="flag-icon-sx" data-icon="flag-icon-sx">Sint Maarten (Hollandaca bölümü)</option>
                                        <option value="flag-icon-rs" data-icon="flag-icon-rs">Sırbistan</option>
                                        <option value="flag-icon-sk" data-icon="flag-icon-sk">Slovakya</option>
                                        <option value="flag-icon-si" data-icon="flag-icon-si">Slovenya</option>
                                        <option value="flag-icon-sb" data-icon="flag-icon-sb">Solomon Adaları</option>
                                        <option value="flag-icon-so" data-icon="flag-icon-so">Somali</option>
                                        <option value="flag-icon-lk" data-icon="flag-icon-lk">Sri Lanka</option>
                                        <option value="flag-icon-sd" data-icon="flag-icon-sd">Sudan</option>
                                        <option value="flag-icon-sr" data-icon="flag-icon-sr">Surinam</option>
                                        <option value="flag-icon-sy" data-icon="flag-icon-sy">Suriye Arap Cumhuriyeti</option>
                                        <option value="flag-icon-sa" data-icon="flag-icon-sa">Suudi Arabistan</option>
                                        <option value="flag-icon-sj" data-icon="flag-icon-sj">Svalbard ve Jan Mayen</option>
                                        <option value="flag-icon-sz" data-icon="flag-icon-sz">Svaziland</option>
                                        <option value="flag-icon-tj" data-icon="flag-icon-tj">Tacikistan</option>
                                        <option value="flag-icon-tz" data-icon="flag-icon-tz">Tanzanya Birleşik Cumhuriyeti</option>
                                        <option value="flag-icon-th" data-icon="flag-icon-th">Tayland</option>
                                        <option value="flag-icon-tw" data-icon="flag-icon-tw">Tayvan</option>
                                        <option value="flag-icon-tl" data-icon="flag-icon-tl">Timor-Leste</option>
                                        <option value="flag-icon-tg" data-icon="flag-icon-tg">Togo</option>
                                        <option value="flag-icon-tk" data-icon="flag-icon-tk">Tokelau</option>
                                        <option value="flag-icon-to" data-icon="flag-icon-to">Tonga</option>
                                        <option value="flag-icon-tt" data-icon="flag-icon-tt">Trinidad ve Tobago</option>
                                        <option value="flag-icon-tn" data-icon="flag-icon-tn">Tunus</option>
                                        <option value="flag-icon-tr" data-icon="flag-icon-tr">Türkiye</option>
                                        <option value="flag-icon-tm" data-icon="flag-icon-tm">Türkmenistan</option>
                                        <option value="flag-icon-tc" data-icon="flag-icon-tc">Turks ve Caicos Adaları</option>
                                        <option value="flag-icon-tv" data-icon="flag-icon-tv">Tuvalu</option>
                                        <option value="flag-icon-ug" data-icon="flag-icon-ug">Uganda</option>
                                        <option value="flag-icon-ua" data-icon="flag-icon-ua">Ukrayna</option>
                                        <option value="flag-icon-om" data-icon="flag-icon-om">Umman</option>
                                        <option value="flag-icon-jo" data-icon="flag-icon-jo">Ürdün</option>
                                        <option value="flag-icon-uy" data-icon="flag-icon-uy">Uruguay</option>
                                        <option value="flag-icon-vu" data-icon="flag-icon-vu">Vanuatu</option>
                                        <option value="flag-icon-va" data-icon="flag-icon-va">Vatikan</option>
                                        <option value="flag-icon-ve" data-icon="flag-icon-ve">Venezuela</option>
                                        <option value="flag-icon-vn" data-icon="flag-icon-vn">Viet Nam</option>
                                        <option value="flag-icon-wf" data-icon="flag-icon-wf">Wallis ve Futuna</option>
                                        <option value="flag-icon-ye" data-icon="flag-icon-ye">Yemen</option>
                                        <option value="flag-icon-nc" data-icon="flag-icon-nc">Yeni Kaledonya</option>
                                        <option value="flag-icon-nz" data-icon="flag-icon-nz">Yeni Zelanda</option>
                                        <option value="flag-icon-gr" data-icon="flag-icon-gr">Yunanistan</option>
                                        <option value="flag-icon-zm" data-icon="flag-icon-zm">Zambiya</option>
                                        <option value="flag-icon-zw" data-icon="flag-icon-zw">Zimbabve</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-bayrak-az-container"><span class="select2-selection__rendered" id="select2-bayrak-az-container" title="Lütfen Seçiniz"><span><i class="flag-icon undefined"></i> </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group float-left mr-3">
                                    <label class="d-block" for="durum">Durum</label>
                                    <label class="switch-2-2">
                                        <input id="switch-2-2" type="checkbox" data-switchery="true" data-color="#10c469" checked="" style="display: none;">
                                        <span class="slider"></span>
                                    </label>

                                </div>

                                <div class="form-group">
                                    <label class="d-block" for="anadil">Anadil</label>
                                    <label class="switch-2-2">
                                        <input id="switch-2-2" type="checkbox" data-switchery="true" data-color="#10c469" checked="" style="display: none;">
                                        <span class="slider"></span>
                                    </label>

                                </div>
                                <button type="submit" name="dil_ekle" class="btn btn-primary btn-icon-text btn-sm">
                                    <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                    KAYDET
                                </button>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>