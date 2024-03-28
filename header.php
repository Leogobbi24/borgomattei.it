<?php $path=(isset($_GET['url_news'])) ? "../" : ""; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Borgo Mattei - Relax nel Parco dei Castelli Romani</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $path?>assets/images/favicon2.ico?2">
    <link rel="stylesheet" href="<?php echo $path?>assets/css/plugins/fontawesome-6.css">
    <link rel="stylesheet" href="<?php echo $path?>assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="<?php echo $path?>assets/css/plugins/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $path?>assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $path?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $path?>assets/css/vendor/metismenu.css">
    <link rel="stylesheet" href="<?php echo $path?>assets/css/style.css?2">
    <link rel="stylesheet" href="<?php echo $path?>assets/css/custom.css?10">
    <link rel="stylesheet" href="<?php echo $path?>assets/css/utility.min.css">
</head>

<body class="index-one">

    <div class="header-top">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="index.html" title="Italiano">
                    <img src="<?php echo $path?>assets/images/it-flag.png" alt="Italiano">
                </a>
                <a href="en/index.html" title="English">
                    <img src="<?php echo $path?>assets/images/en-flag.png" alt="English">
                </a>
            </div>
        </div>
    </div>

    <div class="rts-header-style-one header--sticky">

        <a href="index.html" class="logo">
            <img src="<?php echo $path?>assets/images/logo-borgomattei.png" alt="logo-">
        </a>

        <div class="nav-area-center">
            <nav class="navigation">
                <ul class="parent-ul">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="storia.html">Storia</a></li>
                    <li><a href="ospitalita.html">Ospitalità</a></li>
                    <li><a href="servizi.html">Servizi&Attività</a></li>
                    <li><a href="matrimoni.html">Matrimoni&Eventi</a></li>
                    <li><a href="contatti.html">Dove siamo</a></li>
                    <li class="has-dropdown evidence">
                        <a href="antiche-cantine.html" class="rts-btn btn-border">Antiche Cantine</a>
                        <ul class="submenu">
                            <li class="lim"><a class="sdm-main" href="progetto.html">Progetto</a></li>
                            <li class="lim"><a class="sdm-main last" href="news.html">News</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="action-area d-md-none">
            <div class="menu-icon" id="menu-btn">
                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1.34375C0 0.886719 0.351562 0.5 0.84375 0.5H14.9062C15.3633 0.5 15.75 0.886719 15.75 1.34375C15.75 1.83594 15.3633 2.1875 14.9062 2.1875H0.84375C0.351562 2.1875 0 1.83594 0 1.34375ZM0 6.96875C0 6.51172 0.351562 6.125 0.84375 6.125H10.4062C10.8633 6.125 11.25 6.51172 11.25 6.96875C11.25 7.46094 10.8633 7.8125 10.4062 7.8125H0.84375C0.351562 7.8125 0 7.46094 0 6.96875ZM5.90625 13.4375H0.84375C0.351562 13.4375 0 13.0859 0 12.5938C0 12.1367 0.351562 11.75 0.84375 11.75H5.90625C6.36328 11.75 6.75 12.1367 6.75 12.5938C6.75 13.0859 6.36328 13.4375 5.90625 13.4375Z" fill="#fff" />
                </svg>
            </div>
        </div>
    </div>
