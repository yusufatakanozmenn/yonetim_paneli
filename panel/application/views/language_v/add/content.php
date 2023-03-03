<div class="card-body">
    <form class="forms-sample" method="post" action="<?php echo base_url("language_list/save/");?>" enctype="multipart/form-data">
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
                <option value="vi" data-icon="vi">ABD Virgin Adaları</option>
                <option value="af" data-icon="af">Afganistan</option>
                <option value="ax" data-icon="ax">Aland</option>
                <option value="de" data-icon="de">Almanya</option>
                <option value="us" data-icon="us">Amerika Birleşik Devletleri</option>
                <option value="um" data-icon="um">Amerika Birleşik Devletleri Küçük Dış Adaları</option>
                <option value="as" data-icon="as">Amerikan Samoası</option>
                <option value="ad" data-icon="ad">Andorra</option>
                <option value="ao" data-icon="ao">Angora</option>
                <option value="ai" data-icon="ai">Anguilla</option>
                <option value="aq" data-icon="aq">Antarktika</option>
                <option value="ag" data-icon="ag">Antigua ve Barbuda</option>
                <option value="ar" data-icon="ar">Arjantin</option>
                <option value="al" data-icon="al">Arnavutluk</option>
                <option value="aw" data-icon="aw">Aruba</option>
                <option value="au" data-icon="au">Avustralya</option>
                <option value="at" data-icon="at">Avusturya</option>
                <option value="az" data-icon="az">Azerbeycan</option>
                <option value="bs" data-icon="bs">Bahamalar</option>
                <option value="bh" data-icon="bh">Bahreyn</option>
                <option value="bd" data-icon="bd">Bangladeş</option>
                <option value="bb" data-icon="bb">Barbados</option>
                <option value="eh" data-icon="eh">Batı Sahra</option>
                <option value="by" data-icon="by">Belarus</option>
                <option value="be" data-icon="be">Belçika</option>
                <option value="bz" data-icon="bz">Belize</option>
                <option value="bj" data-icon="bj">Benin</option>
                <option value="bm" data-icon="bm">Bermuda</option>
                <option value="ae" data-icon="ae">Birleşik Arap Emirlikleri</option>
                <option value="gb" data-icon="gb">Birleşik Krallık</option>
                <option value="bo" data-icon="bo">Bolivya</option>
                <option value="bq" data-icon="bq">Bonaire</option>
                <option value="ba" data-icon="ba">Bosna Hersek</option>
                <option value="bw" data-icon="bw">Botsvana</option>
                <option value="bv" data-icon="bv">Bouvet Adası</option>
                <option value="br" data-icon="br">Brezilya</option>
                <option value="bn" data-icon="bn">Brunei Darussalam</option>
                <option value="bg" data-icon="bg">Bulgaristan</option>
                <option value="bf" data-icon="bf">Burkina Faso</option>
                <option value="bi" data-icon="bi">Burundi</option>
                <option value="bt" data-icon="bt">Butan</option>
                <option value="td" data-icon="td">Çad</option>
                <option value="cv" data-icon="cv">Cape Verde</option>
                <option value="ky" data-icon="ky">Cayman Adaları</option>
                <option value="gi" data-icon="gi">Cebelitarık</option>
                <option value="cz" data-icon="cz">Çek Cumhuriyeti</option>
                <option value="dz" data-icon="dz">Cezayir</option>
                <option value="dj" data-icon="dj">Cibuti</option>
                <option value="cn" data-icon="cn">Çin</option>
                <option value="cc" data-icon="cc">Cocos (Keeling) Adaları</option>
                <option value="ck" data-icon="ck">Cook Adaları</option>
                <option value="cw" data-icon="cw">Curacao</option>
                <option value="dk" data-icon="dk">Danimarka</option>
                <option value="ps" data-icon="ps">Devletin Filistin</option>
                <option value="do" data-icon="do">Dominik Cumhuriyeti</option>
                <option value="dm" data-icon="dm">Dominika</option>
                <option value="ec" data-icon="ec">Ekvador</option>
                <option value="gq" data-icon="gq">Ekvator Ginesi</option>
                <option value="sv" data-icon="sv">El Salvador</option>
                <option value="id" data-icon="id">Endonezya</option>
                <option value="er" data-icon="er">Eritre</option>
                <option value="am" data-icon="am">Ermenistan</option>
                <option value="ee" data-icon="ee">Estonya</option>
                <option value="et" data-icon="et">Etiyopya</option>
                <option value="fk" data-icon="fk">Falkland Adaları (Malvinas)</option>
                <option value="fo" data-icon="fo">Faroe Adaları</option>
                <option value="ma" data-icon="ma">Fas</option>
                <option value="fj" data-icon="fj">Fiji</option>
                <option value="ci" data-icon="ci">Fildişi Sahili</option>
                <option value="ph" data-icon="ph">Filipinler</option>
                <option value="fi" data-icon="fi">Finlandiya</option>
                <option value="fr" data-icon="fr">Fransa</option>
                <option value="tf" data-icon="tf">Fransız Güney Bölgesi</option>
                <option value="gf" data-icon="gf">Fransız Guyanası</option>
                <option value="pf" data-icon="pf">Fransız Polinezyası</option>
                <option value="ga" data-icon="ga">Gabon</option>
                <option value="gm" data-icon="gm">Gambiya</option>
                <option value="gh" data-icon="gh">Gana</option>
                <option value="gn" data-icon="gn">Gine</option>
                <option value="gw" data-icon="gw">Gine-Bissau</option>
                <option value="gd" data-icon="gd">Grenada</option>
                <option value="gl" data-icon="gl">Grönland</option>
                <option value="gp" data-icon="gp">Guadeloupe</option>
                <option value="gu" data-icon="gu">Guam</option>
                <option value="gt" data-icon="gt">Guatemala</option>
                <option value="gg" data-icon="gg">Guernsey</option>
                <option value="za" data-icon="za">Güney Afrika</option>
                <option value="gs" data-icon="gs">Güney Georgia ve Güney Sandviç Adaları</option>
                <option value="ss" data-icon="ss">Güney Sudan</option>
                <option value="ge" data-icon="ge">Gürcistan</option>
                <option value="gy" data-icon="gy">Guyana</option>
                <option value="ht" data-icon="ht">Haiti</option>
                <option value="hm" data-icon="hm">Heard Adası ve McDonald Mcdonald Adaları</option>
                <option value="in" data-icon="in">Hindistan</option>
                <option value="hr" data-icon="hr">Hırvatistan</option>
                <option value="nl" data-icon="nl">Hollanda</option>
                <option value="hn" data-icon="hn">Honduras</option>
                <option value="hk" data-icon="hk">Hong Kong</option>
                <option value="io" data-icon="io">İngiliz Hint Okyanusu Bölgesi</option>
                <option value="vg" data-icon="vg">İngiliz Virgin Adaları</option>
                <option value="iq" data-icon="iq">Irak</option>
                <option value="ir" data-icon="ir">İran, İslam Cumhuriyeti</option>
                <option value="ie" data-icon="ie">İrlanda</option>
                <option value="im" data-icon="im">Isle of Man</option>
                <option value="es" data-icon="es">ispanya</option>
                <option value="il" data-icon="il">İsrail</option>
                <option value="se" data-icon="se">İsveç</option>
                <option value="ch" data-icon="ch">İsviçre</option>
                <option value="it" data-icon="it">İtalya</option>
                <option value="is" data-icon="is">İzlanda</option>
                <option value="jm" data-icon="jm">Jamaika</option>
                <option value="jp" data-icon="jp">Japonya</option>
                <option value="je" data-icon="je">Jersey</option>
                <option value="kh" data-icon="kh">Kamboçya</option>
                <option value="cm" data-icon="cm">Kamerun</option>
                <option value="ca" data-icon="ca">Kanada</option>
                <option value="me" data-icon="me">Karadağ</option>
                <option value="qa" data-icon="qa">Katar</option>
                <option value="kz" data-icon="kz">Kazakistan</option>
                <option value="ke" data-icon="ke">Kenya</option>
                <option value="ki" data-icon="ki">Kiribati</option>
                <option value="cy" data-icon="cy">Kıbrıs</option>
                <option value="kg" data-icon="kg">Kırgızistan</option>
                <option value="co" data-icon="co">Kolombiya</option>
                <option value="km" data-icon="km">Komorlar</option>
                <option value="cg" data-icon="cg">Kongo</option>
                <option value="cd" data-icon="cd">Kongo Demokratik Cumhuriyeti</option>
                <option value="kr" data-icon="kr">Kore Cumhuriyeti</option>
                <option value="kp" data-icon="kp">Kore Demokratik Halk Cumhuriyeti</option>
                <option value="xk" data-icon="xk">Kosova</option>
                <option value="cr" data-icon="cr">Kosta Rika</option>
                <option value="cu" data-icon="cu">Küba</option>
                <option value="kw" data-icon="kw">Kuveyt</option>
                <option value="mp" data-icon="mp">Kuzey Mariana Adaları</option>
                <option value="la" data-icon="la">Lao Halkı'nın Demokratik Cumhuriyeti</option>
                <option value="ls" data-icon="ls">Lesotho</option>
                <option value="lv" data-icon="lv">Letonya</option>
                <option value="lr" data-icon="lr">Liberya</option>
                <option value="ly" data-icon="ly">Libya</option>
                <option value="li" data-icon="li">Lihtenştayn</option>
                <option value="lt" data-icon="lt">Litvanya</option>
                <option value="lb" data-icon="lb">Lübnan</option>
                <option value="lu" data-icon="lu">Lüksemburg</option>
                <option value="mo" data-icon="mo">Macao</option>
                <option value="hu" data-icon="hu">Macaristan</option>
                <option value="mg" data-icon="mg">Madagaskar</option>
                <option value="mk" data-icon="mk">Makedonya, Eski Yugoslav Cumhuriyeti</option>
                <option value="mw" data-icon="mw">Malawi</option>
                <option value="mv" data-icon="mv">Maldivler</option>
                <option value="my" data-icon="my">Malezya</option>
                <option value="ml" data-icon="ml">Mali</option>
                <option value="mt" data-icon="mt">Malta</option>
                <option value="mh" data-icon="mh">Marşal Adaları</option>
                <option value="mq" data-icon="mq">Martinik</option>
                <option value="mu" data-icon="mu">Mauritius</option>
                <option value="yt" data-icon="yt">Mayotte</option>
                <option value="re" data-icon="re">Mayotte</option>
                <option value="mx" data-icon="mx">Meksika</option>
                <option value="fm" data-icon="fm">Mikronezya, Federe Devletleri</option>
                <option value="eg" data-icon="eg">Mısır</option>
                <option value="mn" data-icon="mn">Moğolistan</option>
                <option value="md" data-icon="md">Moldova, Cumhuriyeti</option>
                <option value="mc" data-icon="mc">Monako</option>
                <option value="ms" data-icon="ms">Montserrat</option>
                <option value="mr" data-icon="mr">Moritanya</option>
                <option value="mz" data-icon="mz">Mozambik</option>
                <option value="mm" data-icon="mm">Myanmar</option>
                <option value="na" data-icon="na">Namibya</option>
                <option value="nr" data-icon="nr">Nauru</option>
                <option value="np" data-icon="np">Nepal</option>
                <option value="ne" data-icon="ne">Nijer</option>
                <option value="ng" data-icon="ng">Nijerya</option>
                <option value="ni" data-icon="ni">Nikaragua</option>
                <option value="nu" data-icon="nu">Niue</option>
                <option value="cx" data-icon="cx">Noel Adası</option>
                <option value="nf" data-icon="nf">Norfolk Adası</option>
                <option value="no" data-icon="no">Norveç</option>
                <option value="cf" data-icon="cf">Orta Afrika Cumhuriyeti</option>
                <option value="uz" data-icon="uz">Özbekistan</option>
                <option value="pk" data-icon="pk">Pakistan</option>
                <option value="pw" data-icon="pw">Palau</option>
                <option value="pa" data-icon="pa">Panama</option>
                <option value="pg" data-icon="pg">Papua Yeni Gine</option>
                <option value="py" data-icon="py">Paraguay</option>
                <option value="pe" data-icon="pe">Peru</option>
                <option value="pn" data-icon="pn">Pitcairn</option>
                <option value="pl" data-icon="pl">Polonya</option>
                <option value="pt" data-icon="pt">Portekiz</option>
                <option value="pr" data-icon="pr">Porto Riko</option>
                <option value="ro" data-icon="ro">Romanya</option>
                <option value="rw" data-icon="rw">Ruanda</option>
                <option value="ru" data-icon="ru">Rusya Federasyonu</option>
                <option value="bl" data-icon="bl">Saint Barthelemy</option>
                <option value="sh" data-icon="sh">Saint Helena</option>
                <option value="kn" data-icon="kn">Saint Kitts ve Nevis</option>
                <option value="lc" data-icon="lc">Saint Lucia</option>
                <option value="mf" data-icon="mf">Saint Martin (Fransız bölümü)</option>
                <option value="pm" data-icon="pm">Saint Pierre ve Miquelon</option>
                <option value="vc" data-icon="vc">Saint Vincent ve Grenadinler</option>
                <option value="ws" data-icon="ws">Samoa</option>
                <option value="sm" data-icon="sm">San Marino</option>
                <option value="st" data-icon="st">Sao Tome ve Principe</option>
                <option value="sn" data-icon="sn">Senegal</option>
                <option value="sc" data-icon="sc">Seyşeller</option>
                <option value="sl" data-icon="sl">Sierra Leone</option>
                <option value="cl" data-icon="cl">Şili</option>
                <option value="sg" data-icon="sg">Singapur</option>
                <option value="sx" data-icon="sx">Sint Maarten (Hollandaca bölümü)</option>
                <option value="rs" data-icon="rs">Sırbistan</option>
                <option value="sk" data-icon="sk">Slovakya</option>
                <option value="si" data-icon="si">Slovenya</option>
                <option value="sb" data-icon="sb">Solomon Adaları</option>
                <option value="so" data-icon="so">Somali</option>
                <option value="lk" data-icon="lk">Sri Lanka</option>
                <option value="sd" data-icon="sd">Sudan</option>
                <option value="sr" data-icon="sr">Surinam</option>
                <option value="sy" data-icon="sy">Suriye Arap Cumhuriyeti</option>
                <option value="sa" data-icon="sa">Suudi Arabistan</option>
                <option value="sj" data-icon="sj">Svalbard ve Jan Mayen</option>
                <option value="sz" data-icon="sz">Svaziland</option>
                <option value="tj" data-icon="tj">Tacikistan</option>
                <option value="tz" data-icon="tz">Tanzanya Birleşik Cumhuriyeti</option>
                <option value="th" data-icon="th">Tayland</option>
                <option value="tw" data-icon="tw">Tayvan</option>
                <option value="tl" data-icon="tl">Timor-Leste</option>
                <option value="tg" data-icon="tg">Togo</option>
                <option value="tk" data-icon="tk">Tokelau</option>
                <option value="to" data-icon="to">Tonga</option>
                <option value="tt" data-icon="tt">Trinidad ve Tobago</option>
                <option value="tn" data-icon="tn">Tunus</option>
                <option value="tr" data-icon="tr">Türkiye</option>
                <option value="tm" data-icon="tm">Türkmenistan</option>
                <option value="tc" data-icon="tc">Turks ve Caicos Adaları</option>
                <option value="tv" data-icon="tv">Tuvalu</option>
                <option value="ug" data-icon="ug">Uganda</option>
                <option value="ua" data-icon="ua">Ukrayna</option>
                <option value="om" data-icon="om">Umman</option>
                <option value="jo" data-icon="jo">Ürdün</option>
                <option value="uy" data-icon="uy">Uruguay</option>
                <option value="vu" data-icon="vu">Vanuatu</option>
                <option value="va" data-icon="va">Vatikan</option>
                <option value="ve" data-icon="ve">Venezuela</option>
                <option value="vn" data-icon="vn">Viet Nam</option>
                <option value="wf" data-icon="wf">Wallis ve Futuna</option>
                <option value="ye" data-icon="ye">Yemen</option>
                <option value="nc" data-icon="nc">Yeni Kaledonya</option>
                <option value="nz" data-icon="nz">Yeni Zelanda</option>
                <option value="gr" data-icon="gr">Yunanistan</option>
                <option value="zm" data-icon="zm">Zambiya</option>
                <option value="zw" data-icon="zw">Zimbabve</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success btn-icon-text btn-sm">
        <a href="<?php echo base_url("language_list/save"); ?>"></a>
            <i class="mdi mdi-reload  btn-icon-prepend"></i>
            GÜNCELLE
        </button>
    </form>
</div>