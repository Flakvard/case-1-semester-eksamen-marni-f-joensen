<!DOCTYPE html>
<html lang="en">
<?php
include "style.css";
include "../Indkoebskurv/Functions.php";
include "../Indkoebskurv/Controller.php";
?>

<head>
    <?php //include "style.php"; 
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indkøbskurv</title>
</head>

<body>
    <?php include "../header.php"; ?>
    <br><br><br><br>

    <div class="main-container ">
        <img src="../img/narmesteforhandler.png" alt="">

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
                        <div class="product-gallery">
                            <div class="product-main-image">

                            </div>
                        </div>

                    </div>



                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title">Checkout indkøbskurv</h1>
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
                                    <form>


                                        Billing details <br>
                                        <label for="fname">First name:</label><br>
                                        <input type="text" id="fname" name="fname" value=""><br>
                                        <label for="lname">Last name:</label><br>
                                        <input type="text" id="lname" name="lname" value=""><br>



                                        <label for="Cname">Company name (optional):</label><br>
                                        <input type="text" id="Cname" name="Cname" value=""><br>


                                        <label for="Country">Country / Region:</label><br>
                                        <input type="text" id="Country" name="Country" value=""><br>


                                        <label for="address">Street address:</label><br>
                                        <input type="text" id="address" name="address" value="House no. and street name"><br>
                                        <input type="text" id="Apartment" name="Apartment" value="Apartment, suite, unit, etc. (optional)"><br>


                                        <label for="City">Town / City:</label><br>
                                        <input type="text" id="City" name="City" value=""><br>

                                        <label for="County">State / County:</label><br>
                                        <input type="text" id="County" name="County" value=""><br>

                                        <label for="Postcode">Postcode / ZIP:</label><br>
                                        <input type="text" id="Postcode" name="Postcode" value=""><br>

                                        <label for="Phone">Telefon:</label><br>
                                        <input type="text" id="Phone" name="Phone" value="+45"><br>

                                        <label for="Email">Email address:</label><br>
                                        <input type="text" id="Email" name="Email" value=""><br>

                                        <label for="Ordernotes">Order notes (optional):</label><br>
                                        <input type="text" id="Ordernotes" name="Ordernotes" value="Notes about your order, e.g. special notes for delivery."><br>

                                        <input type="submit" value="Submit">
                                    </form>
                                </div>
                                <div class="column">

                                    <pre>
                                    <?php
                                    if(getFromIndkøbskurv()>1){

                                    
                                    print_r(getFromIndkøbskurv());
                                    $varerne = getFromIndkøbskurv();
                                    $prisforvaren = 8900;
                                    @$Subtotal = $varerne["Plus 5011"]["Antal"] * $prisforvaren;
                                    $moms25 = $Subtotal * 0.25;
                                    $total = $Subtotal + $moms25;


                                    ?>
                                    </pre>

                                    <?php
                                    echo "Pris pr. stk. ";
                                    echo $prisforvaren;
                                    echo "<br>";
                                    echo "Antal varer bestil = ";
                                    echo @$varerne["Plus 5011"]["Antal"];
                                    echo "<br>";
                                    echo "Subtotal = $Subtotal kr<br>";
                                    echo "Moms = $moms25 kr<br>";
                                    echo "Total = $total kr<br>";
                                }
                                    ?>
                                    <br>

                                    <label for="City">Send videre til nærmeste forhandler:</label><br>
                                    <input type="submit" value="Submit">
                                    <br>
                                    <br>
                                    <form action="Payment.php">
                                    <label for="City">Go til payment gateway:</label><br>
                                    <button type="submit" name="paymentmedkort">Payment med kort</button>
                                    
                                    </form>
                                    <form method="post">
                                        <label for="City">Tøm indkøbskurven:</label> <button type="submit" name="tøm">Tøm</button>
                                    </form>

                                </div>
                            </div>



                        </div>


                    </div>



                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



            </div>




        </div>
    </div>


    </script>

    </div>

    <?php
    include "../footer.php"; ?>

</body>

</html>