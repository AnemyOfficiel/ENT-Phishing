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
    <link rel="stylesheet" type="text/css" href="https://cdn-idf.opendigitaleducation.com/assets/themes/monlycee/skins/default/theme.css" id="theme" crossorigin="anonymous">
    <link rel="icon" href="https://cdn-idf.opendigitaleducation.com/assets/themes/monlycee/img/illustrations/favicon.ico">
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
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap");
    @font-face {
 font-family:"generic-icons";
 font-display:swap;
 font-style:normal;
 font-weight:normal;
 src:url(fonts/generic-icons/generic-icons.woff)
}
    body {
        overflow-x: hidden;
        font-size: 16px;
        line-height: 23px;
        color: #5b6472;
    }
    html, body {
	font-family: Roboto;
}

    html,
    body {
        background: #f0f2f4;
        background: linear-gradient(to bottom right, #f0f2f4, #e9ebef) fixed;
        font-family: Roboto;
    }

    html,
    body {
        margin: 0;
        height: 100%;
        background: #e9ebef;
        z-index: 0;
    }

    body {
        cursor: default !important;
        line-height: 20px;
    }

    body {
        overflow-wrap: break-word;
    }

    .absolute {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
    }

    .container section.main {
        box-sizing: border-box;
        min-height: 100%;
        padding: 10px;
        text-align: left;
    }

    .container .main {
        min-width: 320px;
        margin-left: auto;
        margin-right: auto;
    }

    body section.main {
        background: transparent;
    }

    section.main .panel {
        background: url(https://cdn-idf.opendigitaleducation.com/assets/themes/monlycee/img/illustrations/logo-4x3.png) no-repeat 6px 6px #2a9cc8;
        background-size: 145px;
    }

    .panel {
        background: url(https://cdn-idf.opendigitaleducation.com/assets/themes/monlycee/img/illustrations/logo.png) no-repeat 6px 6px #2a9cc8;
        background-size: 245px;
        width: 100%;
        height: 256px;
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 0;
    }

    .container section.main {
        text-align: left;
    }

    .panel h1 {
        color: #fff;
        width: 100%;
        position: relative;
        margin: 40px auto;
        font-size: 40px;
        line-height: 1em;
        text-align: center;
    }

    h1 {
        font-size: 34px;
        margin-bottom: 20px;
        line-height: 40px;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        color: #4bafd5;
        font-weight: 400;
        margin-top: 10px;
        margin-bottom: 10px;
        line-height: 30px;
    }

    span.no-style {
        background: none !important;
        display: inline !important;
        padding: 0 !important;
        border: none !important;
        border-radius: 0 !important;
        margin: 0 !important;
    }
    html section.main::after, body section.main::after {
	clear: both;
	content: " ";
	display: block;
	width: 100%;
}
.panel.login .panels-container, .panel.activation .panels-container {
	overflow: hidden;
	width: 90%;
	min-height: 500px;
	margin: auto;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-pack: center;
	justify-content: center;
	-ms-flex-align: start;
	align-items: flex-start;
}
.panel.login .welcome-text, .panel.login form, .panel.activation .welcome-text, .panel.activation form {
	margin: 15px;
	min-width: 40%;
	min-height: 345px;
}
.panel.login .welcome-text, .panel.activation .welcome-text {
	display: block;
	max-width: 520px;
	float: left;
	background-color: #fff;
	box-shadow: 0 5px 18px rgba(0,0,0,0.26);
	border-radius: 2px;
	padding: 30px;
	box-sizing: border-box;
}

a.forgot-link {
    text-decoration: none;
}
a:hover, a:hover > h1, a:hover > h2, a:hover > h3 {
	color: #FF8500;
    transition: .3s;
}
.row {
	max-width: 100%;
}
.row {
	width: 100%;
	position: relative;
	clear: both;
	box-sizing: border-box;
}
.cell {
	box-sizing: border-box;
	float: left;
	display: block;
	position: relative;
}
.row::after {
	clear: both;
	content: " ";
	display: block;
	width: 100%;
}
.panel.login .welcome-text p, .panel.activation .welcome-text p {
	font-size: 13px;
}
p {
	word-break: break-word;
}
.panel.login .welcome-text + form, .panel.activation .welcome-text + form {
	width: auto;
	overflow: hidden;
}
.panel.login .welcome-text, .panel.login form, .panel.activation .welcome-text, .panel.activation form {
	margin: 15px;
	min-width: 40%;
	min-height: 345px;
}
.panel form:not(.nostyle) {
	margin-left: auto;
	margin-right: auto;
	max-width: 1000px;
	background: #fff;
	border-radius: 3px;
	padding: 30px;
	box-sizing: border-box;
	box-shadow: 0 5px 18px rgba(0,0,0,0.1);
	border-radius: 2px;
}
.panel form {
	width: 415px;
	max-width: 100%;
	margin-left: auto;
	margin-right: auto;
	border-radius: 5px;
	padding: 15px;
}
.panel label {
	display: block;
	width: auto;
	margin-bottom: 5px;
}
.panel.login input#email, .panel.activation input#email {
	width: 100%;
	height: 32px;
	margin-top: 5px;
	margin-bottom: 0;
	float: none;
}
.panel form input[type="text"], .panel form input[type="password"], .panel form input[type="tel"], .panel form input[type="email"] {
	width: 200px;
	float: right;
	line-height: 20px;
}
input[type="text"], input[type="password"], input[type="search"], input[type="tel"], input[type="email"] {
	color: #5b6472;
	background: transparent;
	border-bottom: 1px solid #d6d9e0;
	transition: border-bottom 250ms ease;
}
input[type="text"], input[type="password"], input[type="search"], input[type="tel"], input[type="email"] {
	color: #5b6472;
	background: transparent;
	height: 25px;
	line-height: 25px;
	padding-left: 5px;
	font-size: 14px;
	margin-bottom: 15px;
}
input[type="text"], input[type="password"], input[type="search"], input[type="tel"], input[type="email"] {
	box-shadow: none;
}
input[type="text"], input[type="password"], input[type="search"], input[type="tel"], input[type="email"] {
	border: none;
}
.panel input-password input[type="password"], .panel input-password input[type="text"] {
	width: calc(100% - 50px);
	margin: 0;
	height: 32px;
	display: inline-block;
	float: none;
}
[ng-click]:not([disabled]), [data-ng-click]:not([disabled]), [call]:not([disabled]), [complete-click]:not([disabled]) {
	cursor: pointer;
}
input-password button {
	font-family: "generic-icons";
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	background-image: none;
	font-weight: normal !important;
}
input-password button {
	height: 32px;
	border-top-right-radius: 15px;
	border-bottom-right-radius: 15px;
}

input-password button {
	width: 50px;
	height: 32px;
	margin: 0px;
	box-sizing: border-box;
	display: inline-block;
	float: none;
	vertical-align: middle;
	border-left: none;
}
button, input[type="button"], a.button, input[type="submit"], .drop-down-button label, .drop-down-button.hidden label {
	background: #FF8500;
	padding: 8px 18px 10px;
	color: #fff;
	text-align: center;
	text-transform: uppercase;
	font-size: 14px;
	border-radius: 2px;
	transition: all 250ms ease;
	font-weight: 500;
	line-height: 20px;
	border: none;
	box-shadow: 0 1px 1px rgba(0,0,0,0.4);
	margin-right: 2px;
	margin-left: 2px;
	margin-bottom: 10px;
	overflow: hidden;
}
button, input[type="button"], a.button, input[type="submit"] {
	text-transform: none !important;
}
button {
	position: relative;
}
input-password.toggleable-password button::before {
	color: #fff;
	background: transparent !important;
	border-radius: 0;
	width: 40px;
	left: 4px;
	top: calc(50% - 9px);
	font-size: 23px;
}
input-password.toggleable-password button::before, input-password.toggleable-password button:active::before, input-password.toggleable-password button:focus::before {
	animation: none;
	transition: none;
}
input-password button::before {
	content: '\e873' !important;
}
button::before, input[type="button"]::before, a.button::before, input[type="submit"]::before, .drop-down-button label::before, .drop-down-button.hidden label::before {
	content: " ";
	background: transparent;
	width: 1%;
	height: 1%;
	position: absolute;
	top: 0;
	left: -50%;
	transition: all 250ms ease;
	border-radius: 100%;
	padding: 0;
}
input#rememberMe + small::before {
	content: '';
	-webkit-appearance: auto;
	-moz-appearance: auto;
	appearance: auto;
	border: 2px solid #8c939e;
	width: 20px;
	height: 20px;
	display: inline-block;
	vertical-align: top;
	margin-right: 10px;
	box-sizing: border-box;
	margin-left: -7px;
	margin-top: 3px;
	transition: all 250ms ease;
}
span.no-style {
	background: none !important;
	display: inline !important;
	padding: 0 !important;
	border: none !important;
	border-radius: 0 !important;
	margin: 0 !important;
}
.flex-magnet-container {
	display: -ms-flexbox;
	display: flex;
	-ms-flex-pack: justify;
	justify-content: space-between;
}
.cell {
	box-sizing: border-box;
	float: left;
	display: block;
	position: relative;
}
.panel.login form a.forgot-link, .panel.activation form a.forgot-link {
	font-size: 18px;
	margin: 0;
}
.flex-magnet-container > .flex-magnet-bottom-right {
	-ms-flex-order: 1;
	order: 1;
	-ms-flex-item-align: end;
	align-self: flex-end;
}
button::before, input[type="button"]::before, a.button::before, input[type="submit"]::before, .drop-down-button label::before, .drop-down-button.hidden label::before {
	content: " ";
	background: transparent;
	width: 1%;
	height: 1%;
	position: absolute;
	top: 0;
	left: -50%;
	transition: all 250ms ease;
	border-radius: 100%;
	padding: 0;
}
input#rememberMe:checked + small::before {
	transform: rotate(40deg);
	border-color: #46bfaf;
	height: 25px;
	width: 20px;
	margin-top: -11px;
	border-top-color: transparent;
	border-left-color: transparent;
}
input#rememberMe + small::before {
	content: '';
	-webkit-appearance: auto;
	-moz-appearance: auto;
	appearance: auto;
	border: 2px solid #8c939e;
	width: 20px;
	height: 20px;
	display: inline-block;
	vertical-align: top;
	margin-right: 10px;
	box-sizing: border-box;
	margin-left: -7px;
	margin-top: 3px;
	transition: all 250ms ease;
}
input#rememberMe, small {
	cursor: pointer;
}
input[type="text"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="email"]:focus {
	border-bottom: 1px solid #FF8500;
	box-shadow: 0 1px 0 0 #FF8500;
	outline: 0;
}
input[type="text"], input[type="password"], input[type="search"], input[type="tel"], input[type="email"] {
	color: #5b6472;
	background: transparent;
	border-bottom: 1px solid #d6d9e0;
	transition: border-bottom 250ms ease;
}
input-password button.pushed {
	background-color: #b35d00;
	box-shadow: none;
}
.panel.login form a.forgot-link, .panel.activation form a.forgot-link {
	font-size: 18px;
	margin: 0;
}
input#rememberMe, small {
	cursor: pointer;
}
.panel.login form a.forgot-link, .panel.activation form a.forgot-link {
	font-size: 18px;
}
a {
	color: #4bafd5;
	cursor: pointer;
}
.panel.login .welcome-text, .panel.login form, .panel.activation .welcome-text, .panel.activation form {
	margin: 15px;
	min-width: 40%;
	min-height: 345px;
}
</style>
<body class="login ng-scope" ng-controller="LoginController" ng-init="error = &quot;&quot;; callBack = &quot;&quot;; mainPage = &quot;&quot;" style="">
    <div id="MathJax_Message" style="display: none;"></div>
    <default-styles>
        <div class="absolute">
            <!-- ngInclude: template.containers.main -->
            <div ng-include="template.containers.main" class="ng-scope">
                <div class="centered container row ng-scope">
                    <section class="main">
                        <div class="login panel" ng-class="{'browser-container': !browser || (browser &amp;&amp; browser.outdated) || !cookieEnabled}">
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
                                                        <p style="text-align: center; color: rgb(135, 176, 247);"><span style="font-weight: normal; color: rgb(135, 176, 247); font-family: Arial; font-size: 20px; line-height: 20px;">Bienvenue
                                                                dans le réseau social éducatif d'Île-de-France</span>
                                                        </p>
                                                        <p><span style="font-weight: 400; color: rgb(0, 0, 0); font-family: Arial; font-size: 16px; line-height: 16px;">MonLycée.net
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
                                                        <div><a href="https://ent.iledefrance.fr/assets/cgu/Charte.pdf" target="_blank" tooltip="Charte d'utilisation Monlycée.net"><span style="font-weight: 400; color: rgb(0, 0, 0); font-family: Arial; font-size: 16px; line-height: 16px;">​</span><span style="font-family: Arial; font-size: 16px; background-color: transparent;">Lire
                                                                    la nouvelle charte d'utilisation ?</span></a></div>
                                                        <p><span style="font-weight: 400; color: rgb(0, 0, 0); font-family: Arial; font-size: 16px; line-height: 16px;"><span style="color: rgb(94, 150, 247);">​</span><span>​Bonne
                                                                    navigation !</span></span><span>​</span></p>
                                                    </div>
                                                    <div class="ng-scope">
                                                        <div class="ng-scope">
                                                            <p class="ng-scope" style="text-align: justify;"><span class="ng-scope">
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
                                        <input type="text" ng-model="user.email" ng-keydown="noSpace($event)" ng-change="noUpperCase()" name="email" id="email" autofocus="" tabindex="1" class="ng-pristine ng-untouched ng-valid ng-empty">
                                    </p>
                                    <p>
                                        <label>
                                            <i18n><span class="no-style ng-scope">Mot de passe</span></i18n>
                                        </label>
                                        <input-password class="ng-pristine ng-untouched ng-valid toggleable-password ng-scope ng-empty" style="display: flex;">
                                            <input type="password" autocomplete="off" ng-model="user.password" name="password" id="passwordInput" tabindex="2" class="ng-pristine ng-untouched ng-valid ng-empty">
                                            <button id="buttonPassword" type="button" onclick="ShowPassword()" style="cursor: pointer;"></button>
                                        </input-password>
                                    </p>
                                    <label>
                                        <input type="checkbox" ng-model="user.rememberMe" name="rememberMe" id="rememberMe" value="true" class="ng-pristine ng-untouched ng-valid ng-empty" style="display: none;">&nbsp;&nbsp;
                                        <small translate="" content="auth.remember.me">
                                            <span class="no-style ng-scope">Se souvenir de moi</span>
                                        </small>
                                    </label>
                                    <p></p>
                                    <input type="hidden" name="callBack" ng-value="callBack" autocomplete="off" value="https%3A%2F%2Fent.iledefrance.fr%2F">
                                    <input type="hidden" name="details" ng-value="details" autocomplete="off" value="">
                                    <div class="flex-magnet-container">
                                        <div class="cell">
                                            <a class="forgot-link" href="https://ent.iledefrance.fr/auth/forgot#/id"><small>
                                                    <i18n><span class="no-style ng-scope">Identifiant oublié</span>
                                                    </i18n>
                                                </small></a>
                                                <br>
                                            <a class="forgot-link" href="https://ent.iledefrance.fr/auth/forgot#/password"><small>
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

<script>
    const input_password = document.getElementById("passwordInput");
    const button_password = document.getElementById("buttonPassword");

    let passwordVisible = false;

    function ShowPassword() {
        if(passwordVisible == false) {
            input_password.type = "text";
            button_password.classList.add("pushed");
            passwordVisible = true;
        } else {
            input_password.type = "password";
            button_password.classList.remove("pushed");
            passwordVisible = false;
        }
    }

</script>
</html>