<?php
    error_reporting(E_ALL);
    ini_set('display_errors',true);
    include_once "./includes/devReload.php";
    function loadClass($class){
        require "./includes/$class.php";
    }
    spl_autoload_register("loadClass");


    function mailing($email){
        $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html data-editor-version="2" class="sg-campaigns" xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
            <!--[if !mso]><!-->
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
            <!--<![endif]-->
            <!--[if (gte mso 9)|(IE)]>
            <xml>
                <o:OfficeDocumentSettings>
                <o:AllowPNG/>
                <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
            </xml>
            <![endif]-->
            <!--[if (gte mso 9)|(IE)]>
        <style type="text/css">
            body {width: 600px;margin: 0 auto;}
            table {border-collapse: collapse;}
            table, td {mso-table-lspace: 0pt;mso-table-rspace: 0pt;}
            img {-ms-interpolation-mode: bicubic;}
        </style>
        <![endif]-->
            <style type="text/css">
            body, p, div {
            font-family: arial,helvetica,sans-serif;
            font-size: 14px;
            }
            body {
            color: #000000;
            }
            body a {
            color: #1188E6;
            text-decoration: none;
            }
            p { margin: 0; padding: 0; }
            table.wrapper {
            width:100% !important;
            table-layout: fixed;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            }
            img.max-width {
            max-width: 100% !important;
            }
            .column.of-2 {
            width: 50%;
            }
            .column.of-3 {
            width: 33.333%;
            }
            .column.of-4 {
            width: 25%;
            }
            ul ul ul ul  {
            list-style-type: disc !important;
            }
            ol ol {
            list-style-type: lower-roman !important;
            }
            ol ol ol {
            list-style-type: lower-latin !important;
            }
            ol ol ol ol {
            list-style-type: decimal !important;
            }
            @media screen and (max-width:480px) {
            .preheader .rightColumnContent,
            .footer .rightColumnContent {
                text-align: left !important;
            }
            .preheader .rightColumnContent div,
            .preheader .rightColumnContent span,
            .footer .rightColumnContent div,
            .footer .rightColumnContent span {
                text-align: left !important;
            }
            .preheader .rightColumnContent,
            .preheader .leftColumnContent {
                font-size: 80% !important;
                padding: 5px 0;
            }
            table.wrapper-mobile {
                width: 100% !important;
                table-layout: fixed;
            }
            img.max-width {
                height: auto !important;
                max-width: 100% !important;
            }
            a.bulletproof-button {
                display: block !important;
                width: auto !important;
                font-size: 80%;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .columns {
                width: 100% !important;
            }
            .column {
                display: block !important;
                width: 100% !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
            .social-icon-column {
                display: inline-block !important;
            }
            }
        </style>
            <style>
            @media screen and (max-width:480px) {
                table\0 {
                width: 480px !important;
                }
            }
            </style>
            <!--user entered Head Start--><!--End Head user entered-->
            </head>
            <body>
            <center class="wrapper" data-link-color="#1188E6" data-body-style="font-size:14px; font-family:arial,helvetica,sans-serif; color:#000000; background-color:#FFFFFF;">
                <div class="webkit">
                <table cellpadding="0" cellspacing="0" border="0" width="100%" class="wrapper" bgcolor="#FFFFFF">
                    <tr>
                    <td valign="top" bgcolor="#FFFFFF" width="100%">
                        <table width="100%" role="content-container" class="outer" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td width="100%">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                <td>
                                    <!--[if mso]>
            <center>
            <table><tr><td width="600">
        <![endif]-->
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%; max-width:600px;" align="center">
                                            <tr>
                                                <td role="modules-container" style="padding:0px 0px 0px 0px; color:#000000; text-align:left;" bgcolor="#FFFFFF" width="100%" align="left"><table class="module preheader preheader-hide" role="module" data-type="preheader" border="0" cellpadding="0" cellspacing="0" width="100%" style="display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;">
            <tr>
            <td role="module-content">
                <p></p>
            </td>
            </tr>
        </table><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" data-type="columns" style="padding:0px 0px 60px 0px;" bgcolor="#FFFFFF" data-distribution="1,1">
            <tbody>
            <tr role="module-content">
                <td height="100%" valign="top"><table width="300" style="width:300px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-0">
            <tbody>
                <tr>
                <td style="padding:0px;margin:0px;border-spacing:0;"><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ffb4a968-f67f-4370-8c24-d00c8bdaaaff" data-mc-module-version="2019-10-22">
            <tbody>
            <tr>
                <td style="padding:40px 0px 0px 0px; line-height:35px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: left"><span style="color: #000000; font-family: helvetica, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; font-size: 40px"><strong>BIENVENUE SUR SICLE</strong></span>&nbsp;</div><div></div></div></td>
            </tr>
            </tbody>
        </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ffb4a968-f67f-4370-8c24-d00c8bdaaaff.1" data-mc-module-version="2019-10-22">
            <tbody>
            <tr>
                <td style="padding:20px 10px 0px 0px; line-height:24px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="color: #000000; font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline">Merci de vous être abonné à la newsletter.</span>&nbsp;</div><div></div></div></td>
            </tr>
            </tbody>
        </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ffb4a968-f67f-4370-8c24-d00c8bdaaaff.1.3" data-mc-module-version="2019-10-22">
            <tbody>
            <tr>
                <td style="padding:20px 10px 0px 0px; line-height:24px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="color: #000000; font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline">Courir, bouger et se dépasser, nous savons que vous avez hâte, Sicle sera bientôt là !&nbsp;</span>&nbsp;</div><div></div></div></td>
            </tr>
            </tbody>
        </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ffb4a968-f67f-4370-8c24-d00c8bdaaaff.1.2" data-mc-module-version="2019-10-22">
            <tbody>
            <tr>
                <td style="padding:20px 10px 0px 0px; line-height:24px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="color: #000000; font-family: inherit; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: inherit; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: inherit; line-height: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; text-align: start; background-color: rgb(255, 255, 255); float: none; display: inline">Nous travaillons dur pour vous offrir la meilleure expérience possible. C\'est pourquoi nous sommes impatients de vous accueillir et de vous aider à atteindre vos objectifs.</span></div><div></div></div></td>
            </tr>
            </tbody>
        </table></td>
                </tr>
            </tbody>
            </table><table width="300" style="width:300px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-1">
            <tbody>
                <tr>
                <td style="padding:0px;margin:0px;border-spacing:0;"><table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="310d916e-21da-4835-b221-8d57f8e2faed">
            <tbody>
            <tr>
                <td style="font-size:6px; line-height:10px; padding:5px 0px 0px 0px;" valign="top" align="center">
                <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:100% !important; width:100%; height:auto !important;" width="300" alt="" data-proportionally-constrained="true" data-responsive="true" src="http://cdn.mcauto-images-production.sendgrid.net/381a99dd9bedc798/0ac2638c-3c8b-4403-8ccb-e3041502bf34/546x583.png">
                </td>
            </tr>
            </tbody>
        </table></td>
                </tr>
            </tbody>
            </table></td>
            </tr>
            </tbody>
        </table></td>
                                            </tr>
                                            </table>
                                            <!--[if mso]>
                                        </td>
                                        </tr>
                                    </table>
                                    </center>
                                    <![endif]-->
                                </td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        </table>
                    </td>
                    </tr>
                </table>
                </div>
            </center>
            </body>
        </html>';

            // Création de l'instance de cURL
        $curl = curl_init();

        // Définition de l'URL de l'API SendGrid
        $url = 'https://api.sendgrid.com/v3/mail/send';

        // Préparation des données à envoyer à l'API
        $data = array(
        "personalizations" => array(
            array(
            "to" => array(
                array(
                "email" => $email
                )
            ),
            "subject" => 'BIENVENUE SUR SICLE'
            )
        ),
        "from" => array(
            "email" => 'gleegs.agency@gmail.com'
        ),
        "content" => array(
            array(
            "type" => "text/html",
            "value" => $message
            )
        )
        );

        // Configuration de cURL
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer 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",
            "Content-Type: application/json"
        ),
        ));

        // Envoi de la requête HTTP
        $response = curl_exec($curl);
        $err = curl_error($curl);

        // Fermeture de l'instance de cURL
        curl_close($curl);

        // Vérification de la réponse de l'API
        if ($err) {
        // Erreur lors de l'envoi de la requête
        echo "cURL Error #:" . $err;
        } else {
        // Réponse de l'API
        echo $response;
        }
    }
    if(!empty($_POST)){
        $manager = new UserManager();
        $user = $manager->getByEmail($_POST['email']);
        if($user == false){
            $user = new User($_POST);

            $manager->add($user);
            mailing($user->getEmail());
            $succes = "Adresse bien enregistrée vous recevrez un mail dans quelques instants";
        }else{
            $error = "L'adresse mail existe déjà";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-252574533-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-252574533-2');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WBB7MXG');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sicle - L'application mobile ludique et motivante</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#272f38">
    <link rel="shortcut icon" href="./assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="./assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/styles/reset.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head> 
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBB7MXG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Landing page -->
    <div class="landingPageAll">

        <!-- Header -->
        <div class="header centered">
            <div class="logo boldItalic">Sicle</div>

            <div class="headerButtons">
                <a href="#sicleDefinitionAnchor" class="buttons">A propos</a>
                <a href="#promotionalVideoAnchor" class="buttons">Vidéo promotionnelle</a>
                <a href="#previewExperienceAnchor" class="buttons">Experience</a>
                <a href="#" class="buttons">L'équipe</a>
                <a href="#contactAnchor" class="buttons">Contact</a>
            </div>
        </div>

        <!-- Landing -->
        <div class="landingPage centered">

            <div class="leftSentences">
                <div class="upsideText">
                    <h1>Relève-toi et fais mieux !</h1>
                </div>

                <div class="underText">
                    <p class="text">« Tout ce qui ne tue pas rend plus fort »</p>
                    <p class="miniText">Nietzsche, philosophe</p>
                </div>
            </div>

            <canvas class="webgl"></canvas>

        </div>

    </div>

    <!-- Section definition -->
    <div data-aos="fade-up" id="sicleDefinitionAnchor" class="firstBlock centered">

        <div class="card blue">

            <div class="cardHeader">

                <div class="leftCardHeader boldItalic">
                    <h1>Sicle</h1>
                </div>

                <img src="./assets/images/quote.svg" alt="quote">

            </div>

            <div class="cardBody">
                <p>Sicle est une application mobile conçue pour inciter les gens à faire du sport de manière ludique et motivante. 👟</p>
                <br>
                <p>Grâce à des fonctionnalités innovantes et une interface intuitive, Sicle vous accompagne dans votre parcours de sport et vous encourage à atteindre vos objectifs de santé et de bien-être. 🤝</p>
                <br>
                <p>Que vous soyez un sportif amateur ou un athlète confirmé, Sicle vous offre une expérience personnalisée et adaptée à vos objectifs. ❤️</p>
            </div>

            <!-- A RENOMMER LEGEND / Legend -->
            <div class="cardFooter">
                <p>DÉFINITION</p>
            </div>
            
        </div>

        <div class="blockImg cardImage"></div>

    </div>

    <div data-aos="fade-up" class="fifthBlock centered">

        <div class="fifthLeftContent">
            <img src="./assets/images/imageApplication.png" alt="application">
        </div>

        <div class="card blue">

            <div class="cardHeader">

                <div class="leftCardHeader boldItalic">
                    <h1>Discipline</h1>
                    <p>n.f</p>
                </div>

                <img src="./assets/images/quote.svg" alt="quote">

            </div>

            <div class="cardBody">
                <p>Règle de conduite que l'on s'impose, maîtrise de soi, sens du devoir</p>
                <br>
                <p>Il s'astreint à une discipline alimentaire très stricte.</p>
            </div>

            <!-- A RENOMMER LEGEND / Legend -->
            <div class="cardFooter">
                <p>DÉFINITION</p>
            </div>
            
        </div>

    </div>

    <div data-aos="fade-up" class="secondBlock centered">

        <div class="cardImage leftCard"></div>

        <div class="card midCard">

            <div class="cardHeader">

                <div class="leftCardHeader boldItalic">
                    <h1>Motivation</h1>
                    <p>n.f</p>
                </div>

                <div class="rightCardHeader">
                    <img src="./assets/images/quote.svg" alt="quote">
                </div>

            </div>

            <div class="cardBody">
                <p>Raisons, intérêts, éléments qui poussent quelqu'un dans son action.</p>
                <br>
                <p>Fait pour quelqu'un d'être motivé à agir</p>
            </div>

            <div class="cardFooter">
                <p>DÉFINITION</p>
            </div>

        </div>

        <div class="cardImage rightCard"></div>

    </div>

    <!-- Promotional video -->
    <div data-aos="fade-up" id="promotionalVideoAnchor" class="thirdBlock centered">

        <div class="title boldItalic">
            VIDÉO PROMOTIONNELLE
        </div>

        <div class="youtubeVideo">
            <!-- <video src="#"></video> -->
        </div>

    </div>

    <!-- Experience Figma -->
    <div data-aos="fade-up" id="previewExperienceAnchor" class="fourthBlock centered">

        <div class="titleFigma boldItalic">
            Testez en avant-premiere le fonctionnement de l’application via un prototype Figma
        </div>

        <div class="text">
            <p>Essayer l'expérience Sicle en interagissant avec le prototype ci-dessous 👇</p>
            <br>
            <p>Grâce aux maquettes Figma que nous avons designé et prototypé, vous pouvez naviguer de manière interactive dans linterface et découvrir les fonctionnalités en temps réel 📱</p>
            <br>
            <p>Cette expérience vous offrira une meilleure compréhension de ce que nous proposons 🤝</p>
        </div>

        <iframe src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FMie8JSDdfTnp2CHjPlyYZr%2FAPPLI-MOBILE---SICLE-%25F0%259F%2593%25B1%3Fpage-id%3D424%253A1415%26node-id%3D424%253A1416%26viewport%3D947%252C318%252C0.27%26scaling%3Dscale-down%26starting-point-node-id%3D526%253A2627" allowfullscreen></iframe>

    </div>

    <!-- Contact -->
    <div id="contactAnchor" class="contact">

        <div class="leftContactContent">

            <div class="contactTitle boldItalic">
                <p>Restez informé grâce à notre newsletter.</p>
            </div>
            <!-- action="#"  -->
            <form method="post">
                <input type="email" placeholder="Email" name="email" id="email">
                <div class="checkbox">
                    <input type="checkbox" name="completeSubscription" id="completeSubscription">
                    <label for="completeSubscription">Voulez vous pré-inscrire ?</label>
                </div>
                <div class="personnalInfo hidden">
                    <input type="text" name="username" id="username" placeholder="Nom d'utilisateur">
                    <input type="number" name="weight" id="weight" step="0.01" placeholder="Poids">
                    <input type="number" name="height" id="height" placeholder="Taille (cm)">
                    <input type="number" name="age" id="age" placeholder="Age">
                    <select name="gender" id="gender">
                        <option value="male">Homme</option>
                        <option value="female">Femme</option>
                    </select>
                </div>
                <div class="goal hidden">
                    <input type="number" name="weightGoal" id="weightGoal" step="0.01" placeholder="Votre objectif de poids">
                </div>
                <?php 
                    if(isset($error)){
                        echo("<span class='error'>$error</span>");
                    }
                ?>
                <?php 
                    if(isset($error)){
                        echo("<span class='succes'>$succes</span>");
                    }
                ?>
                <input type="submit" value="Valider" class="contactButton">
                <div class="btns">
                    <button class="btn prev invisible">Precédent</button>
                    <input type="submit" value="Valider" class="submit invisible">
                    <button class="btn next invisible">Suivant</button>
                </div>
            </form>
        </div>

        <div class="rightContactContent">

            <div class="uperText">
                <h1>Grâce à des fonctionnalités innovantes et une interface intuitive, Sicle vous accompagne dans votre parcours de sport et vous encourage à atteindre vos objectifs de santé et de bien-être.</h1>
            </div>
            
            <div class="downText">
            <p>Alors n'hésitez pas à télécharger l'application et à vous mettre au sport avec Sicle !</p>
            </div>
            
        </div>

    </div>

    <!-- Scripts -->
    <?php if(MODE == 'DEV') { ?>
        <script src="http://localhost:35729/livereload.js"></script>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/kursor"></script>
    <script>
        new kursor({
            type: 4,
            color: '#272f38'
        })
    </script>

    <script src="./assets/js/bundle.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>

</body>
</html>