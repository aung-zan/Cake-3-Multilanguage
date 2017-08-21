<!DOCTYPE html>
<html>
<head>
    <title>Frobo-Myanmar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('common.css') ?>
    <?= $this->Html->css('responsive.css') ?>

    <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('scroll.js') ?>
    <?= $this->Html->script('custom.js'); ?>

</head>
<body>
    <nav class="navbar"><!-- Navbar -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="glyphicon glyphicon-align-justify"></span>
            </button>
            <a class="logo-image"><img src="img/logo.png" class="img-responsive"/></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="navbar-right hidden-xs">
                <a href="content1.html"><img src="img/preview-top.png" class="preview-btn"/></a>
            </div>
            <div class="nav-menu-bar">
                <div class="nav-upper-menu-bar hidden-xs">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?=
                                $this->Html->link($this->Html->image('lang-japan.png'),
                                    ['lang' => 'jp'],
                                    ['escape' => false]
                                );
                            ?>
                        </li>
                        <li>
                            <?=
                                $this->Html->link($this->Html->image('lang-english.png'),
                                    ['lang' => 'eng'],
                                    ['escape' => false]
                                );
                            ?>
                        </li>
                        <li><a href="#"><img src="img/lang-myanmar.png"/></a></li>
                    </ul>
                </div>
                <div class="nav-lower-menu-bar">
                    <ul class="nav navbar-nav nav-bar-lower-menu">
                        <li><a href="index.html"><?= __('Company') ?></a></li>
                        <li><a href="service.html"><?= __('Service') ?></a></li>
                        <li><a href="career.html"><?= __('Career') ?></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav><!-- Navbar -->

    <div class="col-md-12 bg-1"><!-- Start First Container -->
    </div><!-- End First Container -->

    <!-- footer -->
    <div class="col-md-12 footer-nav"><!-- col-md-12 footer-nav -->
        <div class="footer-address col-md-4">
            <div class="footer-nav-logo">
                <img src="img/footer-logo-forbo - Copy.png" class="img-responsive">
                <address>
                    <h5><?= __('Myanmar') ?> ： <a><?= __('FROBO Myanmar Co., Ltd.') ?></a></h5>
                    <span><?= __('No.(15/17), Room (7-B), Insein Road, Hledan Junction, Kamayut Township, Yangon, Myanmar') ?></span>
                </address>
                <address>
                    <h5><?= __('Japan') ?> ： <a><?= __('FROBO JAPAN Co., Ltd.') ?></a></h5>
                    <span><?= __('Okinawa Prefecture Naha city 2-3-1 Naha citizen Collaboration Plaza 406,Japan.') ?></span>
                </address>
            </div>
        </div>
        <div class="content-us">
            <div class="col-md-3 footer-content pull-right hidden-xs">
                <h4><div class="arrow-right"></div><span><?= __('SERVICE') ?></span></h4>
                    <ul>
                        <li><a><?= __('Laboratory development') ?></a></li>
                        <li><a><?= __('Contract development') ?></a></li>
                        <li><a><?= __('Resident development') ?></a></li>
                        <li><a><?= __('Our Approach') ?></a></li>
                        <li><a><?= __('Myanmar’s attraction') ?></a></li>
                    </ul>
            </div>

            <div class="col-md-3 footer-content pull-right hidden-xs">
                <h4><div class="arrow-right"></div><span><?= __('COMPANY') ?></span></h4>
                <ul>
                    <li><a><?= __('company overview') ?></a></li>
                </ul>
                <h4><div class="arrow-right"></div><span><?= __('CAREER') ?></span></h4>
                <ul>
                    <li><a><?= __('career information') ?></a></li>
                    <li><a><?= __('staff interview') ?></a></li>
                </ul>
            </div>
        </div>

    </div>

    <footer class="col-md-12 footer-bg text-center">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-menu-up"></span></button>
        <p>Copyright  2017 FROBO Myanmar Co., Ltd. All rights reserved</p>
    </footer>
</body>
</html>