<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Chicago Fire Pizza</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <link rel="stylesheet" href="/new/css/main.css"/>
        <link rel="stylesheet" href="/css/animate.css"/>
        <link rel="stylesheet" href="/new/css/mobile.css"
           media="screen and (max-width: 40em)"/>
    </head>
    <body>
        <?php include('nav.php'); ?>
        <div id="slideshow">     
            <div class="banner" style="background-image: url(/images/banner_stockyard.jpg);">
                <div class="banner_top_left white_text animated fadeInDown">
                    <h1>The Tribute to Chicago Pizza.</h1>
                    <h2>Flaky deep, gourmet stuffed, or crispy thin. Enjoy it all in 
                        a casual upscale restaurant with table service, full bar, 
                        wine by the glass & more.
                    </h2>
                    <a class="button" href="#locations">Locations</a>
                </div>
            </div>
            <div class="banner" style="background-image: url(/images/banner_inside.jpg);">
                <div class="banner_bottom_right white_text animated fadeInUp">
                    <h1>Beautiful Atmosphere.</h1>
                    <h2>From the lighting to the music, we put a lot of thought
                        into crafting the perfect dining experience.
                    </h2>
                </div>
            </div>
            <div class="banner" style="background-image: url(/images/banner_oven.jpg);">
                <div class="banner_bottom_right animated fadeInUp">
                    <h1>Deep. Not Pan.</h1>
                    <h2>Our Deep Dish pizza is made the Chicago way with tall 
                        flaky crust.
                    </h2>
                </div>
            </div>
            <div class="banner" style="background-image: url(/images/banner_salad.jpg);">
                <div class="banner_bottom_right animated fadeInUp">
                    <h1>Always Fresh.</h1>
                    <h2>We use only the freshest produce to ensure the best taste.
                    </h2>
                </div>
            </div>
        </div>
        <div class="scroll animated fadeInUp">
            <a href="#locations" class="arrow-down"></a>
        </div>
        <div class="content">
            <div class="mobile-links">
                <ul>
                    <li><a href="/pdf/happyhour.jpg"><span>Happy Hour Specials</span></a></li>
                    <li><a href="/pdf/FoodMenu.pdf"><span>Menu</span></a></li>
                    <li><a href="/pdf/FoodMenuSutter.pdf"><span>Menu (Sutter St)</span></a></li>
                    <li><a href="/pdf/CocktailTent.jpg"><span>Cocktails</span></a></li>
                    <li><a href="/pdf/WineList.pdf"><span>Wine List</span></a></li>
                    <li class="list-locations"><a href="index.php#locations">Locations</a></li>
                    <li><a href="jobs.php">Jobs</a></li>
                    <li><a href="/card">Giftcard Balance</a></li>
                </ul>
            </div>
            <img src="images/location.png"  id="locations">
            <h1>Locations</h1>
            <br/>
            <section class="location-grid">
                <div class="location">
                    <img src="images/sutter.png">
                    <div>
                        <h2>HISTORIC FOLSOM</h2>
                        <p><a href="http://maps.google.com/maps?saddr=614+Sutter+Street,+Folsom,+CA" target="_blank">614 Sutter Street</a>
                            </br>Folsom, CA
                            </br>(916) 353-0140
                            </br>Open Today: <span id="sutter"></span>
                        </p>
                        <p><a class="manager" href="mailto:phil@chicagofire.com">Philip Hernandez, General Manager</a></p>
                        <!--<p><a href="#">View Details</a></p>-->
                    </div>
                </div>
                <div class="location">
                    <img src="images/palladio.png">
                    <div>
                        <h2>FOLSOM PALLADIO</h2>
                        <p><a href="http://maps.google.com/maps?saddr=310+Palladio+Parkway,+Suite+701,+Folsom,+CA" target="_blank">310 Palladio Parkway</a>
                            </br>Folsom, CA
                            </br>(916) 984-0140
                            </br>Open Today: <span id="palladio"></span>
                        </p>
                        <p><a class="manager"  href="mailto:scott@chicagofire.com">Scott Sagerdahl, General Manager</a></p>
                        <!--<p><a href="#">View Details</a></p>-->
                    </div>
                </div>
                <div class="location">
                    <img src="images/midtown.png">
                    <div>
                        <h2>MIDTOWN SACRAMENTO</h2>
                        <p><a href="http://maps.google.com/maps?saddr=2416+J+Street,+Sacramento,+CA" target="_blank">2416 J Street</a>
                            </br>Sacramento, CA
                            </br>(916) 443-0440
                            </br>Open Today: <span id="midtown"></span>
                        </p>
                        <p><a class="manager"  href="mailto:pete@chicagofire.com">Pete Kertesz, General Manager</a></p>
                        <!--<p><a href="#">View Details</a></p>-->
                    </div>
                </div>
                <div class="location">
                    <img src="images/roseville.png">
                    <div>
                        <h2>ROSEVILLE</h2>
                        <p><a href="https://maps.google.com/maps?saddr=500+N.+Sunrise+Ave,+Roseville,+CA" target="_blank">500 N. Sunrise Ave</a>
                            </br>Roseville, CA
                            </br>(916) 771-2020
                            </br>Open Today: <span id="roseville"></span>
                        </p>
                        <p><a class="manager"  href="mailto:roberta@chicagofire.com">Roberta Jones, General Manager</a></p>
                        <!--<p><a href="#">View Details</a></p>-->
                    </div>
                </div>
            </section>
        </div>
        <section class="skyline">
            <div class="skylinecontent">
                <img src="images/eric.png"/>
                <div>
                    <h2>I love Chicago Pizza!</h2> 
                    <p class="thin">Chicago Fire was originally born of my desire 
                    to enjoy the flavors and textures unique to Chicago Pizza myself, 
                    and also to share them with others. I began researching and making 
                    Chicago pizza after moving out west from Chicago. Premium Wisconsin 
                    Mozzarella, separately formulated dough recipes prepared daily, for 
                    thin crust and deep dish and a third generation sausage purveyor from 
                    Chicago (This is the same sausage maker that supplied the pizzerias 
                    that made Chicago Pizza famous). These are just a few of the examples 
                    of my commitment to quality and authenticity. I believe you are about 
                    to experience the most intensely researched Chicago Pizza, west of Chicago.
                    </p>
                    <p class="thin">The Chi Fi story does not end with pizza. Our menu and the range 
                    of tasty selections are influenced by a number of things. Firstly, 
                    many of Chicago’s tastiest foods were created by Greek and Italian 
                    immigrants. This is reflected on our menu. Secondly, Chicago was once 
                    known as the pork capital of the world. Chicagoans love their meats 
                    and at Chicago Fire, we do too! Most of our sandwiches and pizzas have 
                    over a half pound of meat, staying true to portions one would expect 
                    to enjoy in the windy city. Lastly, we stay true to our name by offering 
                    numerous “Fiery” foods such as Extra Hot Wings, The Great Chicago Fire 
                    Pizza, Spicy Italian Sausage, and of course our signature Hot Italian Beef.
                    </p>
                    <p class="thin">Cooking from scratch and making food to order are not common in 
                    upscale causal restaurants. When I opened the first Chicago Fire, I 
                    created recipes based on how great they tasted, not how much time they 
                    took to prepare. That philosophy resulted in what I refer to in business, 
                    as an “accidental success”. Turns out, people actually enjoy socializing 
                    when dining out and appreciate having a little more “table time” to 
                    relax and visit. Not to mention, the anticipation of that hot, crispy, 
                    buffalo wing or the cheesy, flakey, deep dish pizza, made to order 
                    just for you! There is simply no substitute for time when preparing 
                    great tasting food, whether in your kitchen or ours!
                    <p>
                    <p>Enjoy!</p>
                    <p>Eric Schnetz
                    </br>Founder & Corporate Chef
                    </p>
                </div>
            </div>
        </section>
    <?php include('footer.php'); ?>
    <script src="scroll.js"></script>
    <script src="slide.js"></script>
    <script src="open.js"></script>
    <script>
        $element = $('.banner');
        function fixMobileSafariViewport() {
          $element.css('height', window.innerHeight);
        }
        window.addEventListener('orientationchange', fixMobileSafariViewport, true);
        fixMobileSafariViewport();
    </script>  
    </body>
</html>