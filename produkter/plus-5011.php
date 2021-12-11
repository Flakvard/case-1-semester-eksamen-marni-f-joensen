<!DOCTYPE html>
<html lang="en">
<?php include "style.css"; ?>

<head>
    <?php //include "style.php"; 
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "../header.php"; ?>

    <div class="main-container ">


        <amp-animation id="stick" layout="nodisplay" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay">
            <script type="application/json">
                {
                    "duration": "300ms",
                    "fill": "both",
                    "animations": [{
                            "selector": ".main-nav-wrapper",
                            "keyframes": [{
                                "transform": "translateY(-40px)"
                            }]
                        },
                        {
                            "selector": ".header-background",
                            "keyframes": [{
                                "transform": "translateY(-55px)"
                            }]

                        },
                        {
                            "selector": ".main-nav-logo-inner .logo",
                            "keyframes": [{
                                "transform": "translateY(12px) scale(0.6)"
                            }]
                        }
                    ]
                }
            </script>
        </amp-animation>

        <amp-animation id="unstick" layout="nodisplay" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay">
            <script type="application/json">
                {
                    "duration": "300ms",
                    "fill": "both",
                    "animations": [{
                            "selector": ".main-nav-wrapper",
                            "keyframes": [{
                                "transform": "translateY(0px)"
                            }]
                        },
                        {
                            "selector": ".header-background",
                            "keyframes": [{
                                "transform": "translateY(0px)"
                            }]
                        },
                        {
                            "selector": ".main-nav-logo-inner .logo",
                            "keyframes": [{
                                "transform": "translateY(0) scale(1)"
                            }]
                        }
                    ]
                }
            </script>
        </amp-animation>

        <div class="stick-observer stickobserver">
            <amp-position-observer on="enter:stick.start" layout="nodisplay" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay"></amp-position-observer>
        </div>

        <div class="unstuck-observer stickobserver">
            <amp-position-observer on="enter:unstick.start" layout="nodisplay" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay"></amp-position-observer>
        </div>
        <div class="content-container shop sidebar-enabled sidebar-enabled-left">


            <div class="content">


                <div class="woocommerce-notices-wrapper"></div>
                <div id="product-2646" class="product type-product post-2646 status-publish first instock product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">

                    <div class="column">


                    </div>



                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title">Plus 5011</h1>
                        <p class="price"></p>
                        <div class="product_meta">



                            <span class="posted_in">Kategori: <a href="https://farstrup.dk/vare-kategori/sofaer/" rel="tag">Sofaer</a></span>


                        </div>
                    </div>


                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                            <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                <a href="#tab-description">
                                    Beskrivelse </a>
                            </li>
                        </ul>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">


                            <div class="row">
                                <div class="column">
                                    <div class="product-gallery">
                                        <div class="product-main-image">
                                            <img src="https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1.png" alt="Plus 5011" width="350" height="450">
                                        </div>
                                    </div>
                                    <p>Plus 5011 er en sofastol, der passer til Plus-seriens <a href="/vare-kategori/laenestole/">lænestole</a> og <a href="/vare-kategori/sofaer/">sofaer</a>. Det tidløse og elegante design gør Plus 5011 let at sammensætte med de fleste indretninger og den kan nemt matches sammen med andre <a href="https://farstrup.dk/produkter/">møbler</a>.</p>
                                    <p>Plus 5011 har et fast lavt ryglæn, et klassisk design og en uovertruffen siddekomfort. Sofastolen er udført med kvalitetsmaterialer, og der er mulighed for at vælge mellem et bredt udvalg af kvalitetstekstiler og lædermaterialer i mange forskellige farver, så hvis ønsket er at matche eksisterende møbler er det muligt, men det er også muligt at skabe en stol med et helt personligt udtryk.</p>
                                    <p>5011 sofastolen er en alsidig stol der kan bruges i de fleste rum– den går gennem utallige faglærte hænder, for at man til sidst kan sætte sig i sin helt personlige stol eller stol med personlighed.</p>
                                    <p>Plus 5011 er en klassisk og stilren lænestol, som står flot sammen med <a href="https://farstrup.dk/produkter/sofabord-8300/">sofabordene 3800</a>.</p>                           
                                    <p><strong>Vejl. pris fra: 8.900 Kr.</strong></p>
                                    <p>Prisen på møblet varierer afhængig af materialevalg. Der må ydermere påregnes pristillæg for funktioner og tilpasninger.</p>
                                </div>
                                <div>
                                    <br>
                                    <br>
                                    <br>
                                    <?php include "../Indkoebskurv/index.php"; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="extra-text-container the-content-container">
                                    <br><br><br><br><br><br><br><br><br><br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    
                                </div>
                            </div>



                        </div>

                        <div class="wp-block-buttons buttons-beside-product">
                            <div class="wp-block-button">
                                <a class="wp-block-button__link" href="https://farstrup.dk/forhandlere/"></a>
                            </div>
                            <div class="wp-block-button">
                                <a class="wp-block-button__link" href="#mere-info"> </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-image-container first-child">
                        <amp-img src="https://farstrup.dk/wp-content/uploads/Plus_5011_450x550_web.jpg" width="450" height="550" layout="intrinsic" class="product-image i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" i-amphtml-layout="intrinsic">
                            <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer>
                        </amp-img>

                    </div>
                    <div class="product-image-container ">
                        <amp-img src="https://farstrup.dk/wp-content/uploads/Plus_5011_2_450x550_web.jpg" width="450" height="550" layout="intrinsic" class="product-image i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" i-amphtml-layout="intrinsic">
                            <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer>
                        </amp-img>

                    </div>
                    <br><br><br><br><br><br><br><br>
                    <div class="">
                        <div class="mere-info-link" id="mere-info"></div>
                        <h2>Specifikationer</h2>
                        <div class="">
                            <p><b>Generelt</b><br>
                                Plus-serien findes et i utal af forskellige designs og muligheder. Længe leve individualisme!</p>
                            <p><b>Vedligeholdelse</b><br>
                                Afhængigt af hvilket tekstil eller lædermateriale, som du ønsker på stolen er der forskellige ting du kan gøre. Spørg gerne os eller en af vores forhandlere.</p>
                        </div>
                        <div class="">
                            <p><strong>Mål m.m.</strong><br>
                                Bredde: 70 cm<br>
                                Dybde: 73 cm<br>
                                Højde: 88 cm</p>
                            <p>Siddedybde, siddehøjde med mere kan justeres efter behov. Kontakt en af vores forhandlere og hør mere om mulighederne.</p>
                            <h3>Betræk</h3>
                            <p>Plus 5011 fås i et bredt udvalg i læder og kvalitetstektiler.<br>
                                Vælg kvalitetstekstil fra danske Gabriel eller Kvadrat.<br>
                                Er du mere til læder, kan dette naturligvis også lade sig gøre. Du kan få din Plus 5011 med ægte læder fra danske Sørensen Leather.</p>
                            <p>
                                <amp-img class="wp-image-4408 alignnone amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" src="https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1.png" alt="" width="229" height="229" srcset="https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1.png 400w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-180x180.png 180w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-300x300.png 300w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-150x150.png 150w" sizes="(max-width: 229px) 100vw, 229px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                    <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjIyOSIgd2lkdGg9IjIyOSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" src="https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1.png" alt="" width="229" height="229" srcset="https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1.png 400w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-180x180.png 180w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-300x300.png 300w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-150x150.png 150w" sizes="(max-width: 229px) 100vw, 229px"></noscript>
                                </amp-img>
                                <amp-img class="wp-image-4424 alignnone amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" src="https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1.png" alt="" width="204" height="204" srcset="https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1.png 400w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-180x180.png 180w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-300x300.png 300w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-150x150.png 150w" sizes="(max-width: 204px) 100vw, 204px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                    <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjIwNCIgd2lkdGg9IjIwNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" src="https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1.png" alt="" width="204" height="204" srcset="https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1.png 400w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-180x180.png 180w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-300x300.png 300w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-150x150.png 150w" sizes="(max-width: 204px) 100vw, 204px"></noscript>
                                </amp-img>
                            </p>
                            <p>Er du i tvivl om hvilket betræk du skal vælge på din stol. Så besøg din lokale forhandler. Her vil du kunne se – og ikke mindst mærke – alle de forskellige tekstiler og lædertyper.<br>
                                <a href="https://farstrup.dk/forhandlere/">Klik her for at finde en forhandler nær dig.</a>
                            </p>
                            <h3>Stel</h3>
                            <p>Plus 5011 fås med stel i massivt ege- eller bøgetræ.<br>
                                Begge træsorter tilbydes i forskellige bejdseformer.</p>
                            <p><strong>Bøg:</strong> Ubehandlet, natur, lysnet, hvidolieret, kirsebær, lys brun, teak, maghogni og sortbejdset.</p>
                            <p><strong>Eg:</strong> Ubehandlet, natur, lysnet, hvidolieret, lys brun og sortbejdset.</p>
                            <p>Vi yder 10 års garanti på træstellet.</p>
                            <p>
                                <amp-img class="alignnone size-medium wp-image-5148 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" src="https://farstrup.dk/wp-content/uploads/traeproever-300x300.png" alt="" width="300" height="300" srcset="https://farstrup.dk/wp-content/uploads/traeproever-300x300.png 300w, https://farstrup.dk/wp-content/uploads/traeproever-180x180.png 180w, https://farstrup.dk/wp-content/uploads/traeproever-150x150.png 150w, https://farstrup.dk/wp-content/uploads/traeproever.png 550w" sizes="(max-width: 300px) 100vw, 300px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                    <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwMCIgd2lkdGg9IjMwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" src="https://farstrup.dk/wp-content/uploads/traeproever-300x300.png" alt="" width="300" height="300" srcset="https://farstrup.dk/wp-content/uploads/traeproever-300x300.png 300w, https://farstrup.dk/wp-content/uploads/traeproever-180x180.png 180w, https://farstrup.dk/wp-content/uploads/traeproever-150x150.png 150w, https://farstrup.dk/wp-content/uploads/traeproever.png 550w" sizes="(max-width: 300px) 100vw, 300px"></noscript>
                                </amp-img>
                            </p>
                        </div>
                    </div>


                </div>




            </div>
        </div>


        </script>

    </div>

    <?php
    include "../footer.php"; ?>

</body>

</html>