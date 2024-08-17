
<?php
 
 $cities = array(
  "Choose a city : ",
  "Wilaya de Adrar",
  "Wilaya de Chlef",
  "Wilaya de Laghouat",
  "Wilaya de Oum El Bouaghi",
  "Wilaya de Batna",
  "Wilaya de Béjaïa",
  "Wilaya de Biskra",
  "Wilaya de Béchar",
  "Wilaya de Blida",
  "Wilaya de Bouira",
  "Wilaya de Tamanrasset",
  "Wilaya de Tébessa",
  "Wilaya de Tlemcen",
  "Wilaya de Tiaret",
  "Wilaya de Tizi Ouzou",
  "Wilaya de Alger",
  "Wilaya de Djelfa",
  "Wilaya de Jijel",
  "Wilaya de Sétif",
  "Wilaya de Saïda",
  "Wilaya de Skikda",
  "Wilaya de Sidi Bel Abbès",
  "Wilaya de Annaba",
  "Wilaya de Guelma",
  "Wilaya de Constantine",
  "Wilaya de Médéa",
  "Wilaya de Mostaganem",
  "Wilaya de M'Sila",
  "Wilaya de Mascara",
  "Wilaya de Ouargla",
  "Wilaya de Oran",
  "Wilaya d El Bayadh",
  "Wilaya de Illizi",
  "Wilaya de Bordj Bou Arreridj",
  "Wilaya de Boumerdès",
  "Wilaya de El Tarf",
  "Wilaya de Tindouf",
  "Wilaya de Tissemsilt",
  "Wilaya de El Oued",
  "Wilaya de Khenchela",
  "Wilaya de Souk Ahras",
  "Wilaya de Tipaza",
  "Wilaya de Mila",
  "Wilaya de Aïn Defla",
  "Wilaya de Naâma",
  "Wilaya de Aïn Témouchent",
  "Wilaya de Ghardaïa",
  "Wilaya de Relizane",
  "Wilaya de Timimoun",
  "Wilaya de Bordj Badji Mokhtar",
  "Wilaya de Ouled Djellal",
  "Wilaya de Béni Abbès",
  "Wilaya de In Salah",
  "Wilaya de In Guezzam",
  "Wilaya de Touggourt",
  "Wilaya de Djanet",
  "Wilaya de El M'Ghair",
  "Wilaya de El Meniaa"
);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>home - bleditourism</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    
    <link rel="stylesheet" href="./view/style.css" />
    <link href="./view/homepage.css" rel="stylesheet" />



  </head>
  <body>
    <div>
      

      <div class="homepage-container">
        <div class="homepage-container01">
          <header data-role="Header" class="homepage-header">
            <svg viewBox="0 0 1024 1024" class="homepage-icon">
              <path
                d="M768 639.968l-182.82-182.822 438.82-329.15-128.010-127.996-548.52 219.442-172.7-172.706c-49.78-49.778-119.302-61.706-154.502-26.508-35.198 35.198-23.268 104.726 26.51 154.5l172.686 172.684-219.464 548.582 127.99 128.006 329.19-438.868 182.826 182.828v255.98h127.994l63.992-191.988 191.988-63.996v-127.992l-255.98 0.004z"
              ></path>
            </svg>
            <div class="homepage-nav">
              <nav class="homepage-mynav">
                <a href="index.php?action=home" class="homepage-navlink">home</a>
                <a id="t" href="index.php?action=all-tourism " class="homepage-navlink01" <?php echo $disabledAttr; ?>>
                  tourism
                </a>
                <a  id ="h"href="index.php?action=all-hotels" class="homepage-navlink02" <?php echo $disabledAttr; ?>>hotels</a>
                <a id="r" href="index.php?action=all-restaurants" class="homepage-navlink03" <?php echo $disabledAttr; ?>>
                  restaurants
                </a>
                <a id="a" href="index.php?action=all-agencies" class="homepage-navlink04" <?php echo $disabledAttr; ?>>
                  agencies
                </a>
                <a id="guideslink" href="index.php?action=all-guides" class="homepage-navlink05" <?php echo $disabledAttr; ?>>guides</a>
              </nav>
            </div>
            <div class="homepage-btn-group">

              <?php if(empty($_COOKIE['user']))
              {

                echo '<a href="index.php?action=login" class="homepage-login button">Login</a>
                <a   href="index.php?action=sign_up"  class="homepage-register button">sign up</a>';
                
              }

              else {


               

                if($role!="visitor"){


                 echo '<a href="index.php?action=my_profile&role='.$role.'" class="homepage-login button">My profile </a>';

                 echo '<a style="margin:auto 10px;" href="index.php?action=logout" class="homepage-login button">Logout </a>';
                }
              


              }

              ?>
              
            </div>
            <div data-role="BurgerMenu" class="homepage-burger-menu">
              <svg viewBox="0 0 1024 1024" class="homepage-icon02">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <div data-role="MobileMenu" class="homepage-mobile-menu">
              <div class="homepage-nav1">
                <div class="homepage-container02">
                  <img
                    alt="image"
                    src="https://presentation-website-assets.teleporthq.io/logos/logo.png"
                    class="homepage-image"
                  />
                  <div data-role="CloseMobileMenu" class="homepage-menu-close">
                    <svg viewBox="0 0 1024 1024" class="homepage-icon04">
                      <path
                        d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>
              <div>
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="homepage-icon06"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="homepage-icon08"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="homepage-icon10"
                >
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                </svg>
              </div>
            </div>
          </header>
          <div class="homepage-container03" style="flex-wrap:nowrap">
            <div class="homepage-container04">
              <h1 class="homepage-text">
                discover the beauty of algeria&nbsp;
              </h1>
              <span class="homepage-text01">
                Explore Algeria with ease using our e-tourism website,
                connecting you with top local guides, travel agencies, hotels,
                and restaurants for the ultimate travel experience.
              </span>
            </div>

            <div class="homepage-container05">

  <div class="homepage-container06">
    <span class="homepage-text02">enter your destination</span>

  </div>

  <form id="myForm" style="width:60%;height:100%;" action="index.php?action=find_city" method="post"  >

  <select id="wilaya" style="
    width: 100%;
    height: 100%;
    border-radius: 50px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
" name="city" onchange="submitForm()">



    <?php foreach ($cities as $city) { ?>
        <option  style="padding : 5px ; " value="<?php echo $city; ?>" ><?php echo $city; ?></option>
    <?php } ?>
  </select>  

</form>

</div>

          </div>
          <div id="signup_login" class="homepage-banner">
            <div class="homepage-container07">
              <h1 class="homepage-text03">Your journey begins now !</h1>
              <span class="homepage-text04">
                <span>
                  <span>
                    Discover the wonders of Algeria's culture, history, and
                    natural beauty with Bledi e-tourism&nbsp;
                  </span>
                  <span></span>
                </span>
                <span>
                  <span></span>
                  <span></span>
                </span>
              </span>
              <div  class="homepage-btn-group1">
                <a href="index.php?action=login" class="homepage-navlink06 button">
                  log in&nbsp;
                </a>
                <a href="index.php?action=sign_up" class="homepage-navlink07 button">
                  sign up
                </a>
              </div>
            </div>
          </div>
          <div class="homepage-container08"></div>
          <div class="homepage-container09">
            <div class="homepage-banner1">
              <div class="homepage-container10">
                <h1 class="homepage-text11">
                  <span>choose your destination now !</span>
                  <br />
                </h1>
                <span class="homepage-text14">
                  check the cities' profiles and decide now . what are you
                  waiting for ?&nbsp;&nbsp;
                </span>
              </div>
            </div>
            <div class="homepage-gallery">
              <div class="homepage-gallery-card">
                <img
                  alt="image"
                  src="https://images.unsplash.com/photo-1674764268559-ad25a6c9ea77?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDE1OHx8YWxnaWVycyUyMGFsZ2VyaWF8ZW58MHx8fHwxNjc5MDk0NjA5&amp;ixlib=rb-4.0.3&amp;w=1500"
                  class="homepage-image01"
                />
                <div class="homepage-container11">
                  <h2 class="homepage-text15">Tamanrasset -deep south&nbsp;</h2>
                  <span class="homepage-text16">
                    Welcome to Tamanrasset! The heart of the Algerian Sahara,
                    offering breathtaking landscapes, sand dunes, mountains, and
                    a unique Tuareg cultural experience. Book your trip now and
                    explore this mesmerizing destination!
                  </span>
                </div>
                <a id = "tamanrasset" href="index.php?action=city_profile&city=Wilaya de Tamanrasset" class="homepage-navlink08 button" <?php echo $disabledAttr; ?>>
                  explore more
                </a>
              </div>
              <div class="homepage-gallery-card1">
                <img
                  alt="image"
                  src="https://images.unsplash.com/photo-1647867817276-5e907ac12d55?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDE2M3x8YWxnZXJpYSUyMGFsZ2VyJTIwY2FwaXRhbCUyMHxlbnwwfHx8fDE2NzkwOTg2MDk&amp;ixlib=rb-4.0.3&amp;w=1500"
                  class="homepage-image02"
                />
                <div class="homepage-container12">
                  <h2 class="homepage-text17">Béjaïa</h2>
                  <span class="homepage-text18">
                    Experience the magic of Bejaia, a charming coastal city in
                    Algeria that boasts picturesque beaches, ancient landmarks,
                    and a rich cultural heritage. Let us guide you through the
                    best of Bejaia with our e-tourism website.
                  </span>
                </div>
                <a id="bejaia"  href="index.php?action=city_profile&city=Wilaya de Béjaïa" class="homepage-navlink08 button" <?php echo $disabledAttr; ?>>
                  explore more
                </a>
              </div>
              <div class="homepage-gallery-card2">
                <img
                  alt="image"
                  src="https://images.unsplash.com/photo-1654127653924-7c4b7247d8e1?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDQ5fHxhbGdlcmlhJTIwfGVufDB8fHx8MTY3OTA5NTg2NQ&amp;ixlib=rb-4.0.3&amp;w=1500"
                  class="homepage-image03"
                />
                <div class="homepage-container13">
                  <h2 class="homepage-text19">Tizi-Ouzou&nbsp;</h2>
                  <span class="homepage-text20">
                    Welcome to Tizi Ouzou, the heart of Kabylie in Algeria.
                    Immerse yourself in the beauty of the surrounding mountains,
                    explore the city's rich history and culture, and discover
                    the unique charm of this enchanting destination with our
                    e-tourism website.
                  </span>
                </div>
                <a id="tizi" href="index.php?action=city_profile&city=Wilaya de Tizi Ouzou" class="homepage-navlink08 button" <?php echo $disabledAttr; ?>>
                  explore more
                </a>
              </div>
              <div class="homepage-gallery-card3">
                <img
                  alt="image"
                  src="https://images.unsplash.com/photo-1642215104060-86e252b2cb69?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDE2fHxhbGdpZXJzfGVufDB8fHx8MTY3OTA5OTM2Mg&amp;ixlib=rb-4.0.3&amp;w=1500"
                  class="homepage-image04"
                />
                <div class="homepage-container14">
                  <h2 class="homepage-text21">Algiers -North&nbsp;</h2>
                  <span class="homepage-text22">
                    Welcome to Algiers, a vibrant city steeped in history and
                    culture. Explore its stunning architecture, bustling
                    markets, and charming streets, and discover the unique
                    beauty of this North African gem.
                  </span>
                </div>
                <a id="algiers" href="index.php?action=city_profile&city=Wilaya d'Alger" class="homepage-navlink08 button" <?php echo $disabledAttr; ?>>
                  explore more
                </a>
              </div>
              <div class="homepage-gallery-card4">
                <img
                  alt="image"
                  src="https://images.unsplash.com/photo-1570383189213-aaedaeada5ae?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fGFubmFiYXxlbnwwfHx8fDE2NzkwOTk2MTM&amp;ixlib=rb-4.0.3&amp;w=1500"
                  class="homepage-image05"
                />
                <div class="homepage-container15">
                  <h2 class="homepage-text23">Annaba -&nbsp;north-easter</h2>
                  <span class="homepage-text24">
                    Discover Annaba, Algeria's hidden gem on the Mediterranean
                    coast, with stunning beaches, rich history, and vibrant
                    culture. A must-visit destination for a unique and
                    unforgettable travel experience
                  </span>
                </div>
                <a id="annaba" href="index.php?action=city_profile&city=Wilaya d'Annaba" class="homepage-navlink08 button" <?php echo $disabledAttr; ?>>
                  explore more
                </a>
              </div>
              <div class="homepage-gallery-card5">
                <img
                  alt="image"
                  src="https://images.unsplash.com/photo-1649333476832-b1a98a63f862?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDI2Mnx8YWxnZXJpYSUyMGFsZ2VyJTIwY2FwaXRhbCUyMHxlbnwwfHx8fDE2NzkwOTg4NjM&amp;ixlib=rb-4.0.3&amp;w=1500"
                  class="homepage-image06"
                />
                <div class="homepage-container16">
                  <h2 class="homepage-text25">Oran -north-western</h2>
                  <span class="homepage-text26">
                    Discover the allure of Oran with our e-tourism website,
                    showcasing the city's stunning architecture, rich culture,
                    delicious cuisine, and bustling markets for an unforgettable
                    travel experience.&nbsp; &nbsp;
                  </span>
                </div>
                <a id="oran" href="index.php?action=city_profile&city=Wilaya d'Oran" class="homepage-navlink08 button" <?php echo $disabledAttr; ?>>
                  explore more
                </a>
              </div>
            </div>
          </div>
          <div class="homepage-hero">
            <div class="homepage-container17">
              <div class="homepage-container18">
                <h1 class="homepage-text27">
                  <span>Discover a vast selection of hotels</span>
                  <span></span>
                </h1>
                <span class="homepage-text30">
                  <span>
                    Hotels offer travelers a comfortable and convenient place to
                    rest during their journeys. They come in various styles and
                    sizes and provide a range of amenities to suit different
                    needs and budgets. Finding the right hotel can make all the
                    difference in your travel experience.
                  </span>
                  <span>
                    <span></span>
                    <span></span>
                  </span>
                  <span>
                    <span></span>
                    <span></span>
                  </span>
                </span>
              </div>
              <a id="hotels" href="index.php?action=all-hotels" class="homepage-navlink09 button" <?php echo $disabledAttr; ?>>
                discover more
              </a>
            </div>
            <div class="homepage-container19">
              <img
                alt="image"
                src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDEzfHxob3RlbHxlbnwwfHx8fDE2NzkxNTg2OTM&amp;ixlib=rb-4.0.3&amp;h=1500"
                class="homepage-image07"
              />
            </div>
          </div>
          <div class="homepage-hero1">
            <div class="homepage-container20">
              <img
                alt="image"
                src="https://images.unsplash.com/photo-1508424757105-b6d5ad9329d0?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDE4fHxyZXN0YXVyYW50fGVufDB8fHx8MTY3OTExNDExMw&amp;ixlib=rb-4.0.3&amp;h=1500"
                class="homepage-image08"
              />
            </div>
            <div class="homepage-container21">
              <div class="homepage-container22">
                <h1 class="homepage-text38">
                  Discover a vast selection of restaurants&nbsp;
                </h1>
                <span class="homepage-text39">
                  <span>
                    Looking for a dining experience that suits your taste buds?
                    Our gastronomy service offers a diverse range of handpicked
                    restaurants that cater to any occasion. From casual cafes to
                    upscale fine dining, we've got you covered. Come and explore
                    the vibrant culinary scene of your destination with us!
                  </span>
                  <span>
                    <span></span>
                    <span></span>
                  </span>
                  <span>
                    <span></span>
                    <span></span>
                  </span>
                </span>
              </div>
              <a id="restaurants" href="index.php?action=all-restaurants" class="homepage-navlink09 button" <?php echo $disabledAttr; ?>>
                discover more
              </a>
            </div>
          </div>
          <div class="homepage-hero2">
            <div class="homepage-container23">
              <div class="homepage-container24">
                <h1 class="homepage-text47">
                  Discover a vast selection of travel agencies
                </h1>
                <span class="homepage-text48">
                  find your favorite agency and book your trip now !
                </span>
              </div>
              <a id="agencies" href="index.php?action=all-agencies" class="homepage-navlink09 button" <?php echo $disabledAttr; ?>>
                discover more
              </a>
            </div>
            <div class="homepage-container25">
              <img
                alt="image"
                src="https://images.unsplash.com/photo-1615317779547-2078d82c549a?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDEzfHxwbGFuZXxlbnwwfHx8fDE2NzkyNDgwNzc&amp;ixlib=rb-4.0.3&amp;h=1500"
                class="homepage-image09"
              />
            </div>
          </div>
          <div class="homepage-hero3">
            <div class="homepage-container26">
              <img
                alt="image"
                src="https://images.unsplash.com/photo-1530107973768-581951e62d34?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDN8fGd1aWRlfGVufDB8fHx8MTY3OTI4MTk1MQ&amp;ixlib=rb-4.0.3&amp;h=1500"
                class="homepage-image10"
              />
            </div>
            <div class="homepage-container27">
              <div class="homepage-container28">
                <h1 class="homepage-text49">
                  Discover a vast selection of touristic guides
                </h1>
                <span class="homepage-text50">
                  meet the best guides ever and have fun with them !
                </span>
              </div>
              <a id ="guides"href="index.php?action=all-guides" class="homepage-navlink09 button" <?php echo $disabledAttr; ?>>
                discover more
              </a>
            </div>
          </div>
          <footer class="homepage-footer">
            <svg viewBox="0 0 1024 1024" class="homepage-icon12">
              <path
                d="M768 639.968l-182.82-182.822 438.82-329.15-128.010-127.996-548.52 219.442-172.7-172.706c-49.78-49.778-119.302-61.706-154.502-26.508-35.198 35.198-23.268 104.726 26.51 154.5l172.686 172.684-219.464 548.582 127.99 128.006 329.19-438.868 182.826 182.828v255.98h127.994l63.992-191.988 191.988-63.996v-127.992l-255.98 0.004z"
              ></path>
            </svg>
            <span class="homepage-text51">
              © 2021 bleditourism, All Rights Reserved.
            </span>
            <div class="homepage-icon-group1">
              <svg viewBox="0 0 950.8571428571428 1024" class="homepage-icon14">
                <path
                  d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                ></path></svg
              ><svg
                viewBox="0 0 877.7142857142857 1024"
                class="homepage-icon16"
              >
                <path
                  d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                ></path></svg
              ><svg
                viewBox="0 0 602.2582857142856 1024"
                class="homepage-icon18"
              >
                <path
                  d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                ></path>
              </svg>
            </div>
          </footer>
        </div>
      </div>
    </div>
   




<script>


// disable links and forms if user is not logged in
if (!document.cookie.includes('user')) {
  // disable links
  document.querySelectorAll('a[disabled]').forEach(link => {
    link.addEventListener('click', (event) => {
      event.preventDefault();
    });
  });

  // disable forms
  document.querySelectorAll('form[disabled]').forEach(form => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
    });
  });
}
    </script>

    <script>

    var scrollBtn1 = document.getElementById("guides");
    var scrollBtn2 = document.getElementById("hotels");
    var scrollBtn3 = document.getElementById("restaurants");
    var scrollBtn4 = document.getElementById("agencies");

    var scrollBtn5 = document.getElementById("tamanrasset");
    var scrollBtn6 = document.getElementById("algiers");
    var scrollBtn7 = document.getElementById("annaba");
    var scrollBtn8 = document.getElementById("oran");
    var scrollBtn9 = document.getElementById("tizi");
    var scrollBtn10 = document.getElementById("bejaia");
    var scrollBtn11 = document.getElementById("wilaya");
   

    var scrollBtn12 = document.getElementById("t");
    var scrollBtn13 = document.getElementById("h");
    var scrollBtn14 = document.getElementById("r");
    var scrollBtn15 = document.getElementById("a");
    var scrollBtn16 = document.getElementById("guideslink");


var targetSection = document.getElementById("signup_login");

scrollBtn1.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
});


scrollBtn2.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
});

scrollBtn3.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
});

scrollBtn4.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
  
});


scrollBtn5.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
});


scrollBtn6.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
});

scrollBtn7.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
});

scrollBtn8.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
  
});

scrollBtn9.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
});

scrollBtn10.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
  
});

scrollBtn11.addEventListener("click", function() {

  var test = '<?php echo $disabledAttr; ?>';
  if(test==='disabled'){

    targetSection.scrollIntoView({ behavior: "smooth" });
  }
    
});

scrollBtn12.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
});

scrollBtn13.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
  
});

scrollBtn14.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
});

scrollBtn15.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
  
});


scrollBtn16.addEventListener("click", function() {
  targetSection.scrollIntoView({ behavior: "smooth" });
  
});





    </script>


    



    <script>
  function submitForm() {
    var form = document.getElementById("myForm");
    form.submit();
  }
</script>


  


  </body>
</html>
