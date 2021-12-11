<?php 
include "functionsindkob.php";
?>
<div class="header-container">

    <div class="header-background"></div>



    <div class="main-nav-wrapper">


        <div class="main-nav-logo">
            <div class="main-nav-logo-inner" id="mainlogo">
                <a href="http://localhost/case-1-semester-eksamen-marni-f-joensen">
                    <amp-img src="https://farstrup.dk/wp-content/uploads/logo-2-300x60.png" width="300" height="60" layout="fill" class="logo contain i-amphtml-layout-fill i-amphtml-layout-size-defined" alt="" i-amphtml-layout="fill"></amp-img>
                </a>
            </div>
        </div>


        <div class="main-nav top-nav">
            <div class="menu-header-top-menu-container">
                <ul id="menu-header-top-menu" class="menu">
                    <li id="menu-item-8992" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8992"><a href="/category/presse/">Presse</a></li>
                    <li id="menu-item-3816" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3816"><a href="/category/blog/">Blog</a></li>
                </ul>
            </div>
        </div>

        <div class="main-nav">
            <div class="menu-header-menu-container">
                <ul id="menu-header-menu" class="menu">
                    <li id="menu-item-725" class="menu-kollektion menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children current-menu-item current_page_item menu-item-725"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen" aria-current="page">Kollektion</a>
                        <ul class="sub-menu">
                            <li id="menu-item-3830" class="menu-laenestole menu-item menu-item-type-custom menu-item-object-custom menu-item-3830"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen/vare-kategori/sofaer/"> <img src='data:image/png;base64,<?php echo base64_encode(file_get_contents("http://localhost/case-1-semester-eksamen-marni-f-joensen/img/Lænestole.png")); ?>'> Lænestole</a></li>
                            <li id="menu-item-3829" class="menu-funktionsstole menu-item menu-item-type-custom menu-item-object-custom menu-item-3829"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen/vare-kategori/sofaer/"> <img src='data:image/png;base64,<?php echo base64_encode(file_get_contents("http://localhost/case-1-semester-eksamen-marni-f-joensen/img/Funktionsstole.png")); ?>'> Funktionsstole</a></li>
                            <li id="menu-item-3832" class="menu-spisebordsstole menu-item menu-item-type-custom menu-item-object-custom menu-item-3832"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen/vare-kategori/sofaer/"> <img src='data:image/png;base64,<?php echo base64_encode(file_get_contents("http://localhost/case-1-semester-eksamen-marni-f-joensen/img/Spisebordsstole.png")); ?>'> Spisebordsstole</a></li>
                            <li id="menu-item-3833" class="menu-stabelstole menu-item menu-item-type-custom menu-item-object-custom menu-item-3833"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen/vare-kategori/sofaer/"> <img src='data:image/png;base64,<?php echo base64_encode(file_get_contents("http://localhost/case-1-semester-eksamen-marni-f-joensen/img/stabelstole.png")); ?>'> Stabelstole</a></li>
                            <li id="menu-item-3831" class="menu-sofaer menu-item menu-item-type-custom menu-item-object-custom menu-item-3831"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen/vare-kategori/sofaer/"> <img src='data:image/png;base64,<?php echo base64_encode(file_get_contents("http://localhost/case-1-semester-eksamen-marni-f-joensen/img/Sofaer.png")); ?>'> Sofaer</a></li>
                            <li id="menu-item-3828" class="menu-borde menu-item menu-item-type-custom menu-item-object-custom menu-item-3828"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen/vare-kategori/sofaer/"> <img src='data:image/png;base64,<?php echo base64_encode(file_get_contents("http://localhost/case-1-semester-eksamen-marni-f-joensen/img/Borde.png")); ?>'> Borde</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-721" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-721"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen">Forhandlere</a></li>
                    <li id="menu-item-722" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-722"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen">Om os</a></li>
                    <li id="menu-item-939" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-939"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen">Kontakt</a></li>
                    <li id="menu-item-6852" class="menu-kollektion menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6852"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen">Contract</a>                    </li>
                    <li id="indkoebskruv" class="menu-indkoebskruv"><a href="http://localhost/case-1-semester-eksamen-marni-f-joensen/produkter/indkobskurv.php"><img src="http://localhost/case-1-semester-eksamen-marni-f-joensen/img/indkøbskurv.png" width="30" height="30">
                            <ul class="sub-menu">
                                <?php 
                                if (getFromIndkøbskurven()>0){foreach (getFromIndkøbskurven() as $i => $indkøbskurv) { ?>
                                    <li>
                                        <?php echo ($i); ?>
                                    </li>
                                <?php }} ?>
                            </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div>