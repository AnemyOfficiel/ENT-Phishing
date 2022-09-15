<!DOCTYPE html>
<html desktop-device="" class="ng-scope portal-container">

<head>
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <title>Authentification</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script type="text/javascript">
    var notLoggedIn = true;
    </script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn-idf.opendigitaleducation.com/assets/themes/monlycee/skins/default/theme.css"
        id="theme" crossorigin="anonymous">
    <link rel="icon"
        href="https://cdn-idf.opendigitaleducation.com/assets/themes/monlycee/img/illustrations/favicon.ico">
    <style type="text/css">
        .MathJax_Preview {
            color: #888
        }

        #MathJax_Message {
            position: fixed;
            left: 1px;
            bottom: 2px;
            background-color: #E6E6E6;
            border: 1px solid #959595;
            margin: 0px;
            padding: 2px 8px;
            z-index: 102;
            color: black;
            font-size: 80%;
            width: auto;
            white-space: nowrap
        }

        #MathJax_MSIE_Frame {
            position: absolute;
            top: 0;
            left: 0;
            width: 0px;
            z-index: 101;
            border: 0px;
            margin: 0px;
            padding: 0px
        }

        .MathJax_Error {
            color: #CC0000;
            font-style: italic
        }
        </style>
        <style type="text/css">
        #MathJax_Zoom {
            position: absolute;
            background-color: #F0F0F0;
            overflow: auto;
            display: block;
            z-index: 301;
            padding: .5em;
            border: 1px solid black;
            margin: 0;
            font-weight: normal;
            font-style: normal;
            text-align: left;
            text-indent: 0;
            text-transform: none;
            line-height: normal;
            letter-spacing: normal;
            word-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            float: none;
            box-shadow: 5px 5px 15px #AAAAAA;
            -webkit-box-shadow: 5px 5px 15px #AAAAAA;
            -moz-box-shadow: 5px 5px 15px #AAAAAA;
            -khtml-box-shadow: 5px 5px 15px #AAAAAA;
            filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')
        }

        #MathJax_ZoomOverlay {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 300;
            display: inline-block;
            width: 100%;
            height: 100%;
            border: 0;
            padding: 0;
            margin: 0;
            background-color: white;
            opacity: 0;
            filter: alpha(opacity=0)
        }

        #MathJax_ZoomFrame {
            position: relative;
            display: inline-block;
            height: 0;
            width: 0
        }

        #MathJax_ZoomEventTrap {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 302;
            display: inline-block;
            border: 0;
            padding: 0;
            margin: 0;
            background-color: white;
            opacity: 0;
            filter: alpha(opacity=0)
        }
        </style>
        <style type="text/css">
        #MathJax_About {
            position: fixed;
            left: 50%;
            width: auto;
            text-align: center;
            border: 3px outset;
            padding: 1em 2em;
            background-color: #DDDDDD;
            color: black;
            cursor: default;
            font-family: message-box;
            font-size: 120%;
            font-style: normal;
            text-indent: 0;
            text-transform: none;
            line-height: normal;
            letter-spacing: normal;
            word-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            float: none;
            z-index: 201;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -khtml-border-radius: 15px;
            box-shadow: 0px 10px 20px #808080;
            -webkit-box-shadow: 0px 10px 20px #808080;
            -moz-box-shadow: 0px 10px 20px #808080;
            -khtml-box-shadow: 0px 10px 20px #808080;
            filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')
        }

        .MathJax_Menu {
            position: absolute;
            background-color: white;
            color: black;
            width: auto;
            padding: 2px;
            border: 1px solid #CCCCCC;
            margin: 0;
            cursor: default;
            font: menu;
            text-align: left;
            text-indent: 0;
            text-transform: none;
            line-height: normal;
            letter-spacing: normal;
            word-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            float: none;
            z-index: 201;
            box-shadow: 0px 10px 20px #808080;
            -webkit-box-shadow: 0px 10px 20px #808080;
            -moz-box-shadow: 0px 10px 20px #808080;
            -khtml-box-shadow: 0px 10px 20px #808080;
            filter: progid:DXImageTransform.Microsoft.dropshadow(OffX=2, OffY=2, Color='gray', Positive='true')
        }

        .MathJax_MenuItem {
            padding: 2px 2em;
            background: transparent
        }

        .MathJax_MenuArrow {
            position: absolute;
            right: .5em;
            color: #666666
        }

        .MathJax_MenuActive .MathJax_MenuArrow {
            color: white
        }

        .MathJax_MenuArrow.RTL {
            left: .5em;
            right: auto
        }

        .MathJax_MenuCheck {
            position: absolute;
            left: .7em
        }

        .MathJax_MenuCheck.RTL {
            right: .7em;
            left: auto
        }

        .MathJax_MenuRadioCheck {
            position: absolute;
            left: 1em
        }

        .MathJax_MenuRadioCheck.RTL {
            right: 1em;
            left: auto
        }

        .MathJax_MenuLabel {
            padding: 2px 2em 4px 1.33em;
            font-style: italic
        }

        .MathJax_MenuRule {
            border-top: 1px solid #CCCCCC;
            margin: 4px 1px 0px
        }

        .MathJax_MenuDisabled {
            color: GrayText
        }

        .MathJax_MenuActive {
            background-color: Highlight;
            color: HighlightText
        }

        .MathJax_Menu_Close {
            position: absolute;
            width: 31px;
            height: 31px;
            top: -15px;
            left: -15px
        }
    </style>
</head>

<body class="login ng-scope" ng-controller="LoginController"
    ng-init="error = &quot;&quot;; callBack = &quot;&quot;; mainPage = &quot;&quot;" style="">
    <div id="MathJax_Message" style="display: none;"></div>
    <default-styles>
        <div class="absolute">
            <!-- ngInclude: template.containers.main -->
            <div ng-include="template.containers.main" class="ng-scope">
                <div class="centered container row ng-scope">
                    <section class="main">
                        <div class="login panel"
                            ng-class="{'browser-container': !browser || (browser &amp;&amp; browser.outdated) || !cookieEnabled}">
                            <!-- ngIf: !cookieEnabled -->

                            <!-- ngIf: !browser -->

                            <!-- ngIf: browser && browser.outdated -->
                            <h1>
                                <i18n><span class="no-style ng-scope">Connexion</span></i18n>
                            </h1>
                            <!-- ngIf: error -->
                            <div class="rigid-grid panels-container">
                                <!-- ngIf: !welcome.hideContent -->
                                <div class="welcome-text ng-scope" ng-if="!welcome.hideContent">
                                    <div class="row">
                                        <div class="twelve cell ng-isolate-scope" bind-html="welcome.content">
                                            <div class="ng-scope">
                                                <div class="ng-scope"></div>
                                                <div class="ng-scope">
                                                    <div class="ng-scope">
                                                        <p style="text-align: center; color: rgb(135, 176, 247);"><span
                                                                style="font-weight: normal; color: rgb(135, 176, 247); font-family: Arial; font-size: 20px; line-height: 20px;">Bienvenue
                                                                dans le réseau social éducatif d'Île-de-France</span>
                                                        </p>
                                                        <p><span
                                                                style="font-weight: 400; color: rgb(0, 0, 0); font-family: Arial; font-size: 16px; line-height: 16px;">MonLycée.net
                                                                est simple et facile d'utilisation, il permet de
                                                                renforcer les activités de la classe, de faciliter les
                                                                échanges entre le lycée et les familles, et de mettre en
                                                                oeuvre des projets pédagogiques en commun.
                                                                <br><br>

                                                                ​Développé en partenariat avec des enseignants,
                                                                Monlycée.net est financé par la Région Île-de-France.
                                                                Il respecte le cadre réglementaire et sécurité défini
                                                                par l'Éducation nationale. Cet espace partagé est
                                                                uniquement accessible à la communauté éducative des
                                                                lycées franciliens, à l'aide d'un identifiant et d'un
                                                                mot de passe unique pour chaque
                                                                utilisateur.
                                                            </span>
                                                        </p>
                                                        <div><a href="https://ent.iledefrance.fr/assets/cgu/Charte.pdf"
                                                                target="_blank"
                                                                tooltip="Charte d'utilisation Monlycée.net"><span
                                                                    style="font-weight: 400; color: rgb(0, 0, 0); font-family: Arial; font-size: 16px; line-height: 16px;">​</span><span
                                                                    style="font-family: Arial; font-size: 16px; background-color: transparent;">Lire
                                                                    la nouvelle charte d'utilisation ?</span></a></div>
                                                        <p><span
                                                                style="font-weight: 400; color: rgb(0, 0, 0); font-family: Arial; font-size: 16px; line-height: 16px;"><span
                                                                    style="color: rgb(94, 150, 247);">​</span><span>​Bonne
                                                                    navigation !</span></span><span>​</span></p>
                                                    </div>
                                                    <div class="ng-scope">
                                                        <div class="ng-scope">
                                                            <p class="ng-scope" style="text-align: justify;"><span
                                                                    class="ng-scope">
                                                                </span>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end ngIf: !welcome.hideContent -->
                                <form method="post" action="/auth/login" class="ng-pristine ng-valid">
                                    <p>
                                        <label>
                                            <i18n><span class="no-style ng-scope">Identifiant</span></i18n>
                                        </label>
                                        <input type="text" ng-model="user.email" ng-keydown="noSpace($event)"
                                            ng-change="noUpperCase()" name="email" id="email" autofocus="" tabindex="1"
                                            class="ng-pristine ng-untouched ng-valid ng-empty">
                                    </p>
                                    <p>
                                        <label>
                                            <i18n><span class="no-style ng-scope">Mot de passe</span></i18n>
                                        </label>
                                        <input-password
                                            class="ng-pristine ng-untouched ng-valid toggleable-password ng-scope ng-empty">
                                            <input type="password" autocomplete="off" ng-model="user.password"
                                                name="password" id="password" tabindex="2"
                                                class="ng-pristine ng-untouched ng-valid ng-empty"><button type="button"
                                                ng-class="{ pushed: toggle }" ng-click="show(!toggle)"></button>
                                        </input-password>
                                    </p>
                                    <label>
                                        <input type="checkbox" ng-model="user.rememberMe" name="rememberMe"
                                            id="rememberMe" value="true"
                                            class="ng-pristine ng-untouched ng-valid ng-empty">&nbsp;&nbsp;<small
                                            translate="" content="auth.remember.me"><span class="no-style ng-scope">Se
                                                souvenir de moi</span></small>
                                    </label>
                                    <p></p>
                                    <input type="hidden" name="callBack" ng-value="callBack" autocomplete="off"
                                        value="https%3A%2F%2Fent.iledefrance.fr%2F">
                                    <input type="hidden" name="details" ng-value="details" autocomplete="off" value="">
                                    <div class="flex-magnet-container">
                                        <div class="cell">
                                            <a class="forgot-link" href="/auth/forgot#/id"><small>
                                                    <i18n><span class="no-style ng-scope">Identifiant oublié</span>
                                                    </i18n>
                                                </small></a>
                                            <a class="forgot-link" href="/auth/forgot#/password"><small>
                                                    <i18n><span class="no-style ng-scope">Mot de passe oublié</span>
                                                    </i18n>
                                                </small></a>
                                        </div>
                                        <button tabindex="3" class="flex-magnet-bottom-right">
                                            <i18n><span class="no-style ng-scope">Connexion</span></i18n>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </default-styles>


    <div style="display: none;"></div>
</body>

</html>