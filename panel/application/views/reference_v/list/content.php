<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Sorular
        </h4>
        <h4>

            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="../_class/yonetim_islem.php"
                        enctype="multipart/form-data">
                        <input id="id" name="id" type="hidden" value="">
                        <div class="form-group">
                            <label for="sira">Sıra</label>
                            <input type="text" class="form-control form-control-sm" name="sira" id="sira" value="">
                        </div>
                        <div class="form-group">
                            <label for="adi">Başlık</label>
                            <input type="text" class="form-control form-control-sm" name="adi" id="adi" value="">
                        </div>

                        <div class="form-group row col-md-6">
                            <label>Kapak Görseli</label>
                            <input type="file" name="resim" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info form-control-sm" disabled=""
                                    placeholder="Resim dosyası seçiniz">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary btn-sm" type="button"><i
                                            class="icon-cloud-upload font-12"></i> Dosya Seç</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="switch">
                                <input type="checkbox" name="durum" id="durum" value="1" checked="">
                                <span class="slider"></span>
                            </label>
                            <label class="d-inline-block" style="line-height: 34px;" for="durum">Durum</label>
                        </div>
                        <div class="form-group mb-2">
                            <label class="switch">
                                <input type="checkbox" name="anasayfa" id="anasayfa" value="1">
                                <span class="slider"></span>
                            </label>

                            <label class="d-inline-block" style="line-height: 34px;" for="anasayfa">Anasayfa'da Gözüksün
                                mü ?</label>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" id="detay" name="detay" class="form-check-input"
                                        onchange="degistir()">Detay Sayfası Gösterilsin mi ?<i
                                        class="input-helper"></i><i class="input-helper"></i></label>
                            </div>
                        </div>
                        <script>
                        function degistir() {
                            if (document.getElementById("detay").checked) {
                                document.getElementById("divimiz").style.display = "block";
                            } else {
                                document.getElementById("divimiz").style.display = "none";
                            }
                        };
                        </script>
                        <div id="divimiz" style="display: none;">
                            <div class="form-group">
                                <label for="adi">İçerik</label>
                                <textarea name="aciklama" id="myTextarea" style="display: none;"
                                    aria-hidden="true"></textarea>
                                <div role="application" class="tox tox-tinymce"
                                    style="visibility: hidden; height: 400px;">
                                    <div class="tox-editor-container">
                                        <div role="menubar" data-alloy-tabstop="true" class="tox-menubar"><button
                                                aria-haspopup="true" role="menuitem" type="button" unselectable="on"
                                                tabindex="-1" class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                style="user-select: none;"><span
                                                    class="tox-mbtn__select-label">Dosya</span>
                                                <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                        <path
                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                            fill-rule="nonzero"></path>
                                                    </svg></div>
                                            </button><button aria-haspopup="true" role="menuitem" type="button"
                                                unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select"
                                                aria-expanded="false" style="user-select: none;"><span
                                                    class="tox-mbtn__select-label">Düzenle</span>
                                                <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                        <path
                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                            fill-rule="nonzero"></path>
                                                    </svg></div>
                                            </button><button aria-haspopup="true" role="menuitem" type="button"
                                                unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select"
                                                aria-expanded="false" style="user-select: none;"><span
                                                    class="tox-mbtn__select-label">Görünüm</span>
                                                <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                        <path
                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                            fill-rule="nonzero"></path>
                                                    </svg></div>
                                            </button><button aria-haspopup="true" role="menuitem" type="button"
                                                unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select"
                                                aria-expanded="false" style="user-select: none;"><span
                                                    class="tox-mbtn__select-label">Ekle</span>
                                                <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                        <path
                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                            fill-rule="nonzero"></path>
                                                    </svg></div>
                                            </button><button aria-haspopup="true" role="menuitem" type="button"
                                                unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select"
                                                aria-expanded="false" style="user-select: none;"><span
                                                    class="tox-mbtn__select-label">Biçim</span>
                                                <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                        <path
                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                            fill-rule="nonzero"></path>
                                                    </svg></div>
                                            </button><button aria-haspopup="true" role="menuitem" type="button"
                                                unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select"
                                                aria-expanded="false" style="user-select: none;"><span
                                                    class="tox-mbtn__select-label">Araçlar</span>
                                                <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                        <path
                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                            fill-rule="nonzero"></path>
                                                    </svg></div>
                                            </button><button aria-haspopup="true" role="menuitem" type="button"
                                                unselectable="on" tabindex="-1" class="tox-mbtn tox-mbtn--select"
                                                aria-expanded="false" style="user-select: none;"><span
                                                    class="tox-mbtn__select-label">Tablo</span>
                                                <div class="tox-mbtn__select-chevron"><svg width="10" height="10">
                                                        <path
                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                            fill-rule="nonzero"></path>
                                                    </svg></div>
                                            </button></div>
                                        <div role="group" class="tox-toolbar">
                                            <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group"><button aria-label="Insert file"
                                                    title="Insert file" type="button" tabindex="-1"
                                                    class="tox-tbtn"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24">
                                                            <path
                                                                d="M19 4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-4v-2h4V8H5v10h4v2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h14zm-8 9.4l-2.3 2.3a1 1 0 1 1-1.4-1.4l4-4a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1-1.4 1.4L13 13.4V20a1 1 0 0 1-2 0v-6.6z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span></button></div>
                                            <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group"><button aria-label="Geri al" title="Geri al"
                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                    disabled="disabled"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24">
                                                            <path
                                                                d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 0 1-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 1 1-1.4 1.4l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 0 1 1.4 1.4L6.4 8z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span></button><button aria-label="Yinele" title="Yinele"
                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                    disabled="disabled"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24">
                                                            <path
                                                                d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 1 1-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 1 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4l3.3-3.3z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span></button></div>
                                            <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group"><button title="Biçimler"
                                                    aria-label="Biçimler" aria-haspopup="true" type="button"
                                                    unselectable="on" tabindex="-1"
                                                    class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke"
                                                    aria-expanded="false" style="user-select: none;"><span
                                                        class="tox-tbtn__select-label">Paragraf</span>
                                                    <div class="tox-tbtn__select-chevron"><svg width="10" height="10">
                                                            <path
                                                                d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></div>
                                                </button></div>
                                            <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group"><button aria-label="Kalın" title="Kalın"
                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                    aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24">
                                                            <path
                                                                d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="İtalik" title="İtalik"
                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                    aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24">
                                                            <path
                                                                d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button></div>
                                            <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group"><button aria-label="Sola hizala"
                                                    title="Sola hizala" type="button" tabindex="-1" class="tox-tbtn"
                                                    aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24">
                                                            <path
                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="Ortala" title="Ortala"
                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                    aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24">
                                                            <path
                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 1 1 0-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="Sağa hizala"
                                                    title="Sağa hizala" type="button" tabindex="-1" class="tox-tbtn"
                                                    aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24">
                                                            <path
                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="İki yana yasla"
                                                    title="İki yana yasla" type="button" tabindex="-1" class="tox-tbtn"
                                                    aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24">
                                                            <path
                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button></div>
                                            <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group">
                                                <div aria-pressed="false" aria-label="İşaretli liste"
                                                    title="İşaretli liste" role="button" aria-haspopup="true"
                                                    tabindex="-1" class="tox-split-button" aria-expanded="false"
                                                    aria-describedby="aria_4636747621681677679326016"><span
                                                        role="presentation" tabindex="-1" class="tox-tbtn"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                height="24">
                                                                <path
                                                                    d="M11 5h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2zM4.5 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></span><span role="presentation" tabindex="-1"
                                                        class="tox-tbtn tox-split-button__chevron"><svg width="10"
                                                            height="10">
                                                            <path
                                                                d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span><span aria-hidden="true"
                                                        id="aria_4636747621681677679326016" style="display: none;">To
                                                        open the popup, press Shift+Enter</span></div>
                                                <div aria-pressed="false" aria-label="Numaralı liste "
                                                    title="Numaralı liste " role="button" aria-haspopup="true"
                                                    tabindex="-1" class="tox-split-button" aria-expanded="false"
                                                    aria-describedby="aria_8754085381701677679326016"><span
                                                        role="presentation" tabindex="-1" class="tox-tbtn"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                height="24">
                                                                <path
                                                                    d="M10 17h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 1 1 0-2zM6 4v3.5c0 .3-.2.5-.5.5a.5.5 0 0 1-.5-.5V5h-.5a.5.5 0 0 1 0-1H6zm-1 8.8l.2.2h1.3c.3 0 .5.2.5.5s-.2.5-.5.5H4.9a1 1 0 0 1-.9-1V13c0-.4.3-.8.6-1l1.2-.4.2-.3a.2.2 0 0 0-.2-.2H4.5a.5.5 0 0 1-.5-.5c0-.3.2-.5.5-.5h1.6c.5 0 .9.4.9 1v.1c0 .4-.3.8-.6 1l-1.2.4-.2.3zM7 17v2c0 .6-.4 1-1 1H4.5a.5.5 0 0 1 0-1h1.2c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.4a.4.4 0 1 1 0-.8h1.3c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.5a.5.5 0 1 1 0-1H6c.6 0 1 .4 1 1z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></span><span role="presentation" tabindex="-1"
                                                        class="tox-tbtn tox-split-button__chevron"><svg width="10"
                                                            height="10">
                                                            <path
                                                                d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span><span aria-hidden="true"
                                                        id="aria_8754085381701677679326016" style="display: none;">To
                                                        open the popup, press Shift+Enter</span></div><button
                                                    aria-label="Girintiyi azalt" title="Girintiyi azalt" type="button"
                                                    tabindex="-1" class="tox-tbtn"><span
                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                            height="24">
                                                            <path
                                                                d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 1 1 0-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2zm-5 4h12a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2zm1.6-3.8a1 1 0 0 1-1.2 1.6l-3-2a1 1 0 0 1 0-1.6l3-2a1 1 0 0 1 1.2 1.6L6.8 12l1.8 1.2z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button><button aria-label="Girintiyi artır"
                                                    title="Girintiyi artır" type="button" tabindex="-1"
                                                    class="tox-tbtn"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24">
                                                            <path
                                                                d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 1 1 0-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2zm-5 4h12a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2zm-2.6-3.8L6.2 12l-1.8-1.2a1 1 0 0 1 1.2-1.6l3 2a1 1 0 0 1 0 1.6l-3 2a1 1 0 1 1-1.2-1.6z"
                                                                fill-rule="evenodd"></path>
                                                        </svg></span></button>
                                            </div>
                                            <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group"><button aria-label="Resim ekle/düzenle"
                                                    title="Resim ekle/düzenle" type="button" tabindex="-1"
                                                    class="tox-tbtn" aria-pressed="false"><span
                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                            height="24">
                                                            <path
                                                                d="M5 15.7l3.3-3.2c.3-.3.7-.3 1 0L12 15l4.1-4c.3-.4.8-.4 1 0l2 1.9V5H5v10.7zM5 18V19h3l2.8-2.9-2-2L5 17.9zm14-3l-2.5-2.4-6.4 6.5H19v-4zM4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1zm6 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span></button><button aria-label="Kaynak kodu"
                                                    title="Kaynak kodu" type="button" tabindex="-1"
                                                    class="tox-tbtn"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                            width="24" height="24">
                                                            <g fill-rule="nonzero">
                                                                <path
                                                                    d="M9.8 15.7c.3.3.3.8 0 1-.3.4-.9.4-1.2 0l-4.4-4.1a.8.8 0 0 1 0-1.2l4.4-4.2c.3-.3.9-.3 1.2 0 .3.3.3.8 0 1.1L6 12l3.8 3.7zM14.2 15.7c-.3.3-.3.8 0 1 .4.4.9.4 1.2 0l4.4-4.1c.3-.3.3-.9 0-1.2l-4.4-4.2a.8.8 0 0 0-1.2 0c-.3.3-.3.8 0 1.1L18 12l-3.8 3.7z">
                                                                </path>
                                                            </g>
                                                        </svg></span></button></div>
                                            <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group"><button aria-label="Yazdır" title="Yazdır"
                                                    type="button" tabindex="-1" class="tox-tbtn"><span
                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                            height="24">
                                                            <path
                                                                d="M18 8H6a3 3 0 0 0-3 3v6h2v3h14v-3h2v-6a3 3 0 0 0-3-3zm-1 10H7v-4h10v4zm.5-5c-.8 0-1.5-.7-1.5-1.5s.7-1.5 1.5-1.5 1.5.7 1.5 1.5-.7 1.5-1.5 1.5zm.5-8H6v2h12V5z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span></button><button aria-label="Önizleme"
                                                    title="Önizleme" type="button" tabindex="-1" class="tox-tbtn"><span
                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                            height="24">
                                                            <path
                                                                d="M3.5 12.5c.5.8 1.1 1.6 1.8 2.3 2 2 4.2 3.2 6.7 3.2s4.7-1.2 6.7-3.2a16.2 16.2 0 0 0 2.1-2.8 15.7 15.7 0 0 0-2.1-2.8c-2-2-4.2-3.2-6.7-3.2a9.3 9.3 0 0 0-6.7 3.2A16.2 16.2 0 0 0 3.2 12c0 .2.2.3.3.5zm-2.4-1l.7-1.2L4 7.8C6.2 5.4 8.9 4 12 4c3 0 5.8 1.4 8.1 3.8a18.2 18.2 0 0 1 2.8 3.7v1l-.7 1.2-2.1 2.5c-2.3 2.4-5 3.8-8.1 3.8-3 0-5.8-1.4-8.1-3.8a18.2 18.2 0 0 1-2.8-3.7 1 1 0 0 1 0-1zm12-3.3a2 2 0 1 0 2.7 2.6 4 4 0 1 1-2.6-2.6z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span></button><button aria-label="Medya ekle/düzenle"
                                                    title="Medya ekle/düzenle" type="button" tabindex="-1"
                                                    class="tox-tbtn" aria-pressed="false"><span
                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                            height="24">
                                                            <path
                                                                d="M4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1zm1 2v14h14V5H5zm4.8 2.6l5.6 4a.5.5 0 0 1 0 .8l-5.6 4A.5.5 0 0 1 9 16V8a.5.5 0 0 1 .8-.4z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span></button></div>
                                            <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-toolbar__group">
                                                <div aria-pressed="false" aria-label="Yazı rengi" title="Yazı rengi"
                                                    role="button" aria-haspopup="true" tabindex="-1"
                                                    class="tox-split-button" aria-expanded="false"
                                                    aria-describedby="aria_6865448861721677679326024"><span
                                                        role="presentation" tabindex="-1" class="tox-tbtn"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                height="24">
                                                                <g fill-rule="evenodd">
                                                                    <path id="tox-icon-text-color__color"
                                                                        d="M3 18h18v3H3z"></path>
                                                                    <path
                                                                        d="M8.7 16h-.8a.5.5 0 0 1-.5-.6l2.7-9c.1-.3.3-.4.5-.4h2.8c.2 0 .4.1.5.4l2.7 9a.5.5 0 0 1-.5.6h-.8a.5.5 0 0 1-.4-.4l-.7-2.2c0-.3-.3-.4-.5-.4h-3.4c-.2 0-.4.1-.5.4l-.7 2.2c0 .3-.2.4-.4.4zm2.6-7.6l-.6 2a.5.5 0 0 0 .5.6h1.6a.5.5 0 0 0 .5-.6l-.6-2c0-.3-.3-.4-.5-.4h-.4c-.2 0-.4.1-.5.4z">
                                                                    </path>
                                                                </g>
                                                            </svg></span></span><span role="presentation" tabindex="-1"
                                                        class="tox-tbtn tox-split-button__chevron"><svg width="10"
                                                            height="10">
                                                            <path
                                                                d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span><span aria-hidden="true"
                                                        id="aria_6865448861721677679326024" style="display: none;">To
                                                        open the popup, press Shift+Enter</span></div>
                                                <div aria-pressed="false" aria-label="Arka plan rengi"
                                                    title="Arka plan rengi" role="button" aria-haspopup="true"
                                                    tabindex="-1" class="tox-split-button" aria-expanded="false"
                                                    aria-describedby="aria_7810664411741677679326025"><span
                                                        role="presentation" tabindex="-1" class="tox-tbtn"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                height="24">
                                                                <g fill-rule="evenodd">
                                                                    <path id="tox-icon-highlight-bg-color__color"
                                                                        d="M3 18h18v3H3z"></path>
                                                                    <path fill-rule="nonzero"
                                                                        d="M7.7 16.7H3l3.3-3.3-.7-.8L10.2 8l4 4.1-4 4.2c-.2.2-.6.2-.8 0l-.6-.7-1.1 1.1zm5-7.5L11 7.4l3-2.9a2 2 0 0 1 2.6 0L18 6c.7.7.7 2 0 2.7l-2.9 2.9-1.8-1.8-.5-.6">
                                                                    </path>
                                                                </g>
                                                            </svg></span></span><span role="presentation" tabindex="-1"
                                                        class="tox-tbtn tox-split-button__chevron"><svg width="10"
                                                            height="10">
                                                            <path
                                                                d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span><span aria-hidden="true"
                                                        id="aria_7810664411741677679326025" style="display: none;">To
                                                        open the popup, press Shift+Enter</span></div><button
                                                    title="Yazı Boyutları" aria-label="Yazı Boyutları"
                                                    aria-haspopup="true" type="button" unselectable="on" tabindex="-1"
                                                    class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke"
                                                    aria-expanded="false" style="user-select: none;"><span
                                                        class="tox-tbtn__select-label">12pt</span>
                                                    <div class="tox-tbtn__select-chevron"><svg width="10" height="10">
                                                            <path
                                                                d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></div>
                                                </button><button aria-label="İfadeler" title="İfadeler" type="button"
                                                    tabindex="-1" class="tox-tbtn"><span
                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                            height="24">
                                                            <path
                                                                d="M9 11c.6 0 1-.4 1-1s-.4-1-1-1a1 1 0 0 0-1 1c0 .6.4 1 1 1zm6 0c.6 0 1-.4 1-1s-.4-1-1-1a1 1 0 0 0-1 1c0 .6.4 1 1 1zm-3 5.5c2.1 0 4-1.5 4.4-3.5H7.6c.5 2 2.3 3.5 4.4 3.5zM12 4a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 14.5a6.5 6.5 0 1 1 0-13 6.5 6.5 0 0 1 0 13z"
                                                                fill-rule="nonzero"></path>
                                                        </svg></span></button>
                                            </div>
                                        </div>
                                        <div class="tox-anchorbar"></div>
                                        <div class="tox-sidebar-wrap">
                                            <div class="tox-edit-area"><iframe id="myTextarea_ifr" frameborder="0"
                                                    allowtransparency="true"
                                                    title="Rich Text Area. Press ALT-0 for help."
                                                    class="tox-edit-area__iframe"></iframe></div>
                                            <div role="complementary" class="tox-sidebar">
                                                <div data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-sidebar__slider tox-sidebar--sliding-closed"
                                                    style="width: 0px;">
                                                    <div class="tox-sidebar__pane-container"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tox-statusbar">
                                        <div class="tox-statusbar__text-container">
                                            <div role="navigation" data-alloy-tabstop="true"
                                                class="tox-statusbar__path"></div><button type="button"
                                                data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-statusbar__wordcount">0 words</button>
                                        </div>
                                        <div title="Yeniden Boyutlandır" class="tox-statusbar__resize-handle"><svg
                                                width="10" height="10">
                                                <g fill-rule="nonzero">
                                                    <path
                                                        d="M8.1 1.1A.5.5 0 1 1 9 2l-7 7A.5.5 0 1 1 1 8l7-7zM8.1 5.1A.5.5 0 1 1 9 6l-3 3A.5.5 0 1 1 5 8l3-3z">
                                                    </path>
                                                </g>
                                            </svg></div>
                                    </div>
                                    <div aria-hidden="true" class="tox-throbber" style="display: none;"></div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    SEO AYARLARI
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="maxlength-textarea">Sayfa Açıklama (description)</label>
                                        <textarea id="maxlength-textarea" name="description" class="form-control"
                                            maxlength="260" rows="4"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label for="tags">Sayfa Meta <small>(Kelimenin sonuna virgül
                                                koyunuz)</small></label>
                                        <input name="keywords" id="tags" value="" data-tagsinput-init="true"
                                            style="display: none;">
                                        <div id="tags_tagsinput" class="tagsinput"
                                            style="width: 100%; min-height: 75%; height: 75%;">
                                            <div id="tags_addTag"><input id="tags_tag" value="" data-default="ekle"
                                                    style="color: rgb(102, 102, 102); width: 68px;"></div>
                                            <div class="tags_clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="referans_ekle" class="btn btn-primary btn-icon-text btn-sm">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i>
                            KAYDET
                        </button>
                    </form>
                </div>
            </div>


    </div><!-- .widget -->
</div><!-- END column -->
</div>