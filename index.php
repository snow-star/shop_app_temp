<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shopify App Template</title>    

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>  
    <script src="js/jquery.flexslider.js"></script>
</head>
<body class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">               
                <div class="navi text-center">
                    <ul>
                        <li><a href="#"><img class="img-circle" src="https://canvas-media.suitopia.com/var/productdesigner/tabs/Product.png"><p class="hidden-xs hidden-sm">Select products</p></a>
                        </li>
                        <li><a href="#"><img class="img-circle" src="https://canvas-media.suitopia.com/var/productdesigner/tabs/fit.png"><p class="hidden-xs hidden-sm">Fit</p></a>
                        </li>
                        <li><a href="#"><img class="img-circle" src="https://canvas-media.suitopia.com/var/productdesigner/tabs/fabric.png"><p class="hidden-xs hidden-sm">Fabric</p></a>
                        </li>
                        <li><a href="#"><img class="img-circle" src="https://canvas-media.suitopia.com/var/productdesigner/tabs/lining.png"><p class="hidden-xs hidden-sm">Lining</p></a>
                        </li>
                        <li><a href="#"><img class="img-circle" src="https://canvas-media.suitopia.com/var/productdesigner/tabs/button.png"><p class="hidden-xs hidden-sm">Buttoning</p></a>
                        </li>
                        <li><a href="#"><img class="img-circle" src="https://canvas-media.suitopia.com/var/productdesigner/tabs/Lapels.png"><p class="hidden-xs hidden-sm">Lapels</p></a>
                        </li>
                        <li><a href="#"><img class="img-circle" src="https://canvas-media.suitopia.com/var/productdesigner/tabs/Pockets.png"><p class="hidden-xs hidden-sm">Pockets</p></a>
                        </li>
                        <li><a href="#"><img class="img-circle" src="https://canvas-media.suitopia.com/var/productdesigner/tabs/Vents.png"><p class="hidden-xs hidden-sm">Vents</p></a>
                        </li>
                        <li><a href="#"><img class="img-circle" src="https://canvas-media.suitopia.com/var/productdesigner/tabs/jacket_details.png"><p class="hidden-xs hidden-sm">Jacket details</p></a>
                        </li>
                        <li><a href="#"><img class="img-circle" src="https://canvas-media.suitopia.com/var/productdesigner/tabs/Trousers.png"><p class="hidden-xs hidden-sm">Trouser style</p></a>
                        </li>
                        <li><a href="#"><img class="img-circle" src="https://canvas-media.suitopia.com/var/productdesigner/tabs/Waistcoat.png"><p class="hidden-xs hidden-sm">Waistcoat</p></a>
                        </li>
                        <li><a href="#"><img class="img-circle" src="https://canvas-static.suitopia.com/productdesigner/img/shopping-cart.55edc5d6b942.png"><p class="hidden-xs hidden-sm">Add to cart</p></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-11 display-table-cell v-align">                
                <div class="user-dashboard">                   
                </div>
            </div>
                     
            <div id="slider" class="flexslider col-md-5 col-sm-11 display-table-cell v-align">
                <ul class="slides">
                    <li>
                      <img src="img/products/1.png" />
                    </li>
                    <li>
                      <img src="img/products/2.png" />
                    </li>
                    <li>
                      <img src="img/products/3.png" />
                    </li>
                    <li>
                      <img src="img/products/4.png" />
                    </li>                    
                </ul>
            </div>
            <div id="carousel" class="flexslider col-md-2 col-sm-1 hidden-xs display-table-cell v-align box">
                <ul class="slides">
                    <li>
                      <img src="img/products/1.png" />
                    </li>
                    <li>
                      <img src="img/products/2.png" />
                    </li>
                    <li>
                      <img src="img/products/3.png" />
                    </li>
                    <li>
                      <img src="img/products/4.png" />
                    </li>                        
                </ul>
            </div>

            <script type="text/javascript">
    
                $(window).load(function() {
                        
                    $('#carousel').flexslider({
                        animation: 'slide',
                        direction: direction,
                        controlNav: false,
                        animationLoop: false,
                        itemWidth: 160,
                        itemMargin: 2,
                        maxItems: 4,
                        slideshow: false,
                        asNavFor: '#slider'
                    });
                    $('#slider').flexslider({
                        animation: 'slide',
                        controlNav: false,
                        directionNav: true,
                        animationLoop: false,
                        slideshow: false,
                        sync: '#carousel'
                    });
                });

            </script>
        </div>
    </div>
</body>
</html>
