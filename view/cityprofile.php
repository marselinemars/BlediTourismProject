


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>cityprofile - bleditourism</title>
    <meta
      property="og:title"
      content="cityguides-bleditourism
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

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
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <link rel="stylesheet" href="./view/style.css" />
  </head>
  <body>
    <div>
      <link href="./view/cityprofile.css" rel="stylesheet" />

      <div class="cityprofile-container">
        <header data-role="Header" class="cityprofile-header">
          <svg viewBox="0 0 1024 1024" class="cityprofile-icon">
            <path
              d="M768 639.968l-182.82-182.822 438.82-329.15-128.010-127.996-548.52 219.442-172.7-172.706c-49.78-49.778-119.302-61.706-154.502-26.508-35.198 35.198-23.268 104.726 26.51 154.5l172.686 172.684-219.464 548.582 127.99 128.006 329.19-438.868 182.826 182.828v255.98h127.994l63.992-191.988 191.988-63.996v-127.992l-255.98 0.004z"
            ></path>
          </svg>
          <div class="cityprofile-nav">
            <nav class="cityprofile-mynav">
              <a href="index.php?action=home" class="cityprofile-navlink">home</a>
              <a href="index.php?action=all-tourism" class="cityprofile-navlink01">
                tourism
              </a>
              <a href="index.php?action=all-hotels" class="cityprofile-navlink02">
                hotels
              </a>
              <a href="index.php?action=all-restaurants" class="cityprofile-navlink03">
                restaurants
              </a>
              <a href="index.php?action=all-agencies" class="cityprofile-navlink04">
                agencies
              </a>
              <a href="index.php?action=all-guides" class="cityprofile-navlink05">
                guides
              </a>
            </nav>
          </div>
          <div class="cityprofile-btn-group">
                 
        <?php if ($role!="visitor"){
          
          echo '<a href="index.php?action=my_profile&role='.$role.'" class="guideprofie-register button">
          My profile
        </a>' ; 
      } ?>
          </div>
          <div data-role="BurgerMenu" class="cityprofile-burger-menu">
            <svg viewBox="0 0 1024 1024" class="cityprofile-icon02">
              <path
                d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
              ></path>
            </svg>
          </div>
          <div data-role="MobileMenu" class="cityprofile-mobile-menu">
            <div class="cityprofile-nav1">
              <div class="cityprofile-container01">
                <img
                  alt="image"
                  src="https://presentation-website-assets.teleporthq.io/logos/logo.png"
                  class="cityprofile-image"
                />
                <div data-role="CloseMobileMenu" class="cityprofile-menu-close">
                  <svg viewBox="0 0 1024 1024" class="cityprofile-icon04">
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
                class="cityprofile-icon06"
              >
                <path
                  d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                ></path></svg
              ><svg
                viewBox="0 0 877.7142857142857 1024"
                class="cityprofile-icon08"
              >
                <path
                  d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                ></path></svg
              ><svg
                viewBox="0 0 602.2582857142856 1024"
                class="cityprofile-icon10"
              >
                <path
                  d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                ></path>
              </svg>
            </div>
          </div>
        </header>
        <div class="cityprofile-container02">
          <div class="cityprofile-container03">
            <div class="cityprofile-container04">
              <span class="cityprofile-text">explore our country</span>
              <div class="cityprofile-container05"></div>
              <div class="cityprofile-container06">
                <h1 class="cityprofile-text01">welcome to&nbsp;</h1>
                <h1 class="cityprofile-text02"><?php echo $city ;?></h1>
              </div>
            </div>
            <div class="cityprofile-stats">
              <div class="cityprofile-stat">
                <svg viewBox="0 0 1024 1024" class="cityprofile-icon12">
                  <path
                    d="M512 490q44 0 75-31t31-75-31-75-75-31-75 31-31 75 31 75 75 31zM512 86q124 0 211 87t87 211q0 62-31 142t-75 150-87 131-73 97l-32 34q-12-14-32-37t-72-92-91-134-71-147-32-144q0-124 87-211t211-87z"
                  ></path>
                </svg>
                <span class="cityprofile-text03">tourism</span>
                <span class="cityprofile-text04">
                  monuments and places to visit
                </span>
                <h1 class="cityprofile-text05"><?php echo $tourism_count ; ?> </h1>
              </div>
              <div class="cityprofile-stat1">
                <svg viewBox="0 0 1024 1024" class="cityprofile-icon14">
                  <path
                    d="M810 298q70 0 121 51t51 121v384h-86v-128h-768v128h-86v-640h86v384h342v-300h340zM298 554q-52 0-90-38t-38-90 38-90 90-38 90 38 38 90-38 90-90 38z"
                  ></path>
                </svg>
                <span class="cityprofile-text06">hotels</span>
                <span class="cityprofile-text07">available hotels&nbsp;</span>
                <h1 class="cityprofile-text08"><?php echo $hotel_count ; ?></h1>
              </div>
              <div class="cityprofile-stat2">
                <svg viewBox="0 0 1024 1024" class="cityprofile-icon16">
                  <path
                    d="M634 492l-62 62 294 294-60 60-294-294-294 294-60-60 416-416q-24-48-7-112t67-114q62-62 138-71t122 37 37 123-71 139q-50 50-114 66t-112-8zM346 570l-180-180q-50-50-50-120t50-120l300 298z"
                  ></path>
                </svg>
                <span class="cityprofile-text09">restaurants</span>
                <span class="cityprofile-text10">available restaurants</span>
                <h1 class="cityprofile-text11"><?php echo $resto_count ; ?></h1>
              </div>
              <div class="cityprofile-stat3">
                <svg viewBox="0 0 1024 1024" class="cityprofile-icon18">
                  <path
                    d="M0 1024h512v-1024h-512v1024zM320 128h128v128h-128v-128zM320 384h128v128h-128v-128zM320 640h128v128h-128v-128zM64 128h128v128h-128v-128zM64 384h128v128h-128v-128zM64 640h128v128h-128v-128zM576 320h448v64h-448zM576 1024h128v-256h192v256h128v-576h-448z"
                  ></path>
                </svg>
                <span class="cityprofile-text12">agencies</span>
                <span class="cityprofile-text13">
                  agencies to book circuits
                </span>
                <h1 class="cityprofile-text14"><?php echo $agency_count ; ?></h1>
              </div>
              <div class="cityprofile-stat4">
                <svg viewBox="0 0 1024 1024" class="cityprofile-icon20">
                  <path
                    d="M576 706.612v-52.78c70.498-39.728 128-138.772 128-237.832 0-159.058 0-288-192-288s-192 128.942-192 288c0 99.060 57.502 198.104 128 237.832v52.78c-217.102 17.748-384 124.42-384 253.388h896c0-128.968-166.898-235.64-384-253.388z"
                  ></path>
                </svg>
                <span class="cityprofile-text15">guides</span>
                <span class="cityprofile-text16">
                  available touristic guides&nbsp;
                </span>
                <h1 class="cityprofile-text17"><?php echo $guide_count ; ?></h1>
              </div>
            </div>
          </div>
        </div>
        <div class="cityprofile-hero">
          <div class="cityprofile-container07">
            <div class="cityprofile-container08">
              <h1 class="cityprofile-text18">hotels</h1>
              <span class="cityprofile-text19">
                <span>
                  here you find all the hotels that are worthvisiting in the
                  city . their addresses, pictures, and feedback are provided.
                </span>
                <span></span>
                <span></span>
              </span>
            </div>
            <a href="index.php?action=city_hotels&city=<?php echo $city ;?>" class="cityprofile-navlink06 button">
              explore more
            </a>
          </div>
          <img
            alt="image"
            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDR8fGhvdGVsc3xlbnwwfHx8fDE2NzkxNzU3MDM&amp;ixlib=rb-4.0.3&amp;w=1200"
            class="cityprofile-image1"
          />
        </div>
        <div class="cityprofile-hero1">
          <img
            alt="image"
            src="https://images.unsplash.com/photo-1563693267403-111c5d856e49?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDE0fHx0b3VyaXNtfGVufDB8fHx8MTY3OTI0Nzg2MA&amp;ixlib=rb-4.0.3&amp;w=1200"
            class="cityprofile-image2"
          />
          <div class="cityprofile-container09">
            <div class="cityprofile-container10">
              <h1 class="cityprofile-text23">tourism</h1>
              <span class="cityprofile-text24">
                <span>
                  here you find all the touristic places and monuments that are
                  worthvisiting in the city . their addresses, pictures, and
                  feedback are provided.
                </span>
                <span></span>
                <span></span>
              </span>
            </div>
            <a href="index.php?action=city_tourism&city=<?php echo $city ;?>"  class="cityprofile-navlink07 button">
              explore more
            </a>
          </div>
        </div>
        <div class="cityprofile-hero2">
          <div class="cityprofile-container11">
            <div class="cityprofile-container12">
              <h1 class="cityprofile-text28">agencies</h1>
              <span class="cityprofile-text29">
                here you find all the available agencies that have circuits and
                plans for a tour in the city . their addresses, galeries, and
                feedback are provided.
              </span>
            </div>
            <a href="index.php?action=city_agencies&city=<?php echo $city ;?>" class="cityprofile-navlink08 button">
              explore more
            </a>
          </div>
          <img
            alt="image"
            src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fHBsYW5lfGVufDB8fHx8MTY3OTI0ODA3Nw&amp;ixlib=rb-4.0.3&amp;w=1200"
            class="cityprofile-image3"
          />
        </div>
        <div class="cityprofile-hero3">
          <img
            alt="image"
            src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fHJlc3RhdXJhbnRzfGVufDB8fHx8MTY3OTI1NDkyOQ&amp;ixlib=rb-4.0.3&amp;w=1200"
            class="cityprofile-image4"
          />
          <div class="cityprofile-container13">
            <div class="cityprofile-container14">
              <h1 class="cityprofile-text30">restaurants</h1>
              <span class="cityprofile-text31">
                here you find all the restaurants that are worthvisiting to try
                the traditional food in the city . their addresses, pictures,
                and feedback are provided.
              </span>
            </div>
            <a href="index.php?action=city_restaurants&city=<?php echo $city ;?> " class="cityprofile-navlink09 button">
              explore more
            </a>
          </div>
        </div>
        <div class="cityprofile-hero4">
          <img
            alt="image"
            src="https://images.unsplash.com/photo-1598525317424-bc58218b48cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
            class="cityprofile-image5"
          />
          <div class="cityprofile-container15">
            <div class="cityprofile-container16">
              <h1 class="cityprofile-text32">guides</h1>
              <span class="cityprofile-text33">
                here you find all the available touristic guides that are ready
                to take you in a tour in the city&nbsp;. their contacts ,
                portfolio, and feedback are provided.
              </span>
            </div>

           
            <a href="index.php?action=city_guides&city=<?php echo $city;?>" class="cityprofile-navlink10 button">
              explore more
            </a>
          </div>
        </div>
        <div class="cityprofile-testimonial">
          <div class="cityprofile-container17">
            <h1 class="cityprofile-text34">
              What are visitors saying about the city ?
            </h1>
            <span class="cityprofile-text35">
              read feedbacks and make your call about your next
              destination&nbsp;
            </span>
            <div class="cityprofile-container18">
              <div class="cityprofile-testimonial-card">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="cityprofile-icon22"
                >
                  <path
                    d="M438.857 182.857v402.286c0 161.143-131.429 292.571-292.571 292.571h-36.571c-20 0-36.571-16.571-36.571-36.571v-73.143c0-20 16.571-36.571 36.571-36.571h36.571c80.571 0 146.286-65.714 146.286-146.286v-18.286c0-30.286-24.571-54.857-54.857-54.857h-128c-60.571 0-109.714-49.143-109.714-109.714v-219.429c0-60.571 49.143-109.714 109.714-109.714h219.429c60.571 0 109.714 49.143 109.714 109.714zM950.857 182.857v402.286c0 161.143-131.429 292.571-292.571 292.571h-36.571c-20 0-36.571-16.571-36.571-36.571v-73.143c0-20 16.571-36.571 36.571-36.571h36.571c80.571 0 146.286-65.714 146.286-146.286v-18.286c0-30.286-24.571-54.857-54.857-54.857h-128c-60.571 0-109.714-49.143-109.714-109.714v-219.429c0-60.571 49.143-109.714 109.714-109.714h219.429c60.571 0 109.714 49.143 109.714 109.714z"
                  ></path>
                </svg>
                <div class="cityprofile-testimonial1">
                  <span class="cityprofile-text36">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                    lorem lorem, malesuada in metus vitae, scelerisque accumsan
                    ipsum. Nam pellentesque nulla leo, sagittis vehicula sem
                    commodo nec.
                  </span>
                  <span class="cityprofile-text37">Jane Doe</span>
                  <span class="cityprofile-text38">SOFTWARE ENGINEER</span>
                  <img
                    alt="profile"
                    src="https://images.unsplash.com/photo-1557053910-d9eadeed1c58?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fHdvbWFuJTIwcG9ydHJhaXR8ZW58MHx8fHwxNjI2NDUxOTgy&amp;ixlib=rb-1.2.1&amp;h=1200"
                    class="cityprofile-image6"
                  />
                </div>
              </div>
              <div class="cityprofile-testimonial-card1">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="cityprofile-icon24"
                >
                  <path
                    d="M438.857 182.857v402.286c0 161.143-131.429 292.571-292.571 292.571h-36.571c-20 0-36.571-16.571-36.571-36.571v-73.143c0-20 16.571-36.571 36.571-36.571h36.571c80.571 0 146.286-65.714 146.286-146.286v-18.286c0-30.286-24.571-54.857-54.857-54.857h-128c-60.571 0-109.714-49.143-109.714-109.714v-219.429c0-60.571 49.143-109.714 109.714-109.714h219.429c60.571 0 109.714 49.143 109.714 109.714zM950.857 182.857v402.286c0 161.143-131.429 292.571-292.571 292.571h-36.571c-20 0-36.571-16.571-36.571-36.571v-73.143c0-20 16.571-36.571 36.571-36.571h36.571c80.571 0 146.286-65.714 146.286-146.286v-18.286c0-30.286-24.571-54.857-54.857-54.857h-128c-60.571 0-109.714-49.143-109.714-109.714v-219.429c0-60.571 49.143-109.714 109.714-109.714h219.429c60.571 0 109.714 49.143 109.714 109.714z"
                  ></path>
                </svg>
                <div class="cityprofile-testimonial2">
                  <span class="cityprofile-text39">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                    lorem lorem, malesuada in metus vitae, scelerisque accumsan
                    ipsum. Nam pellentesque nulla leo, sagittis vehicula sem
                    commodo nec.
                  </span>
                  <span class="cityprofile-text40">Jane Doe</span>
                  <span class="cityprofile-text41">SOFTWARE ENGINEER</span>
                  <img
                    alt="profile"
                    src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDd8fHBvcnRyYWl0fGVufDB8fHx8MTYyNjM3ODk3Mg&amp;ixlib=rb-1.2.1&amp;h=1200"
                    class="cityprofile-image7"
                  />
                </div>
              </div>
              <div class="cityprofile-testimonial-card2">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="cityprofile-icon26"
                >
                  <path
                    d="M438.857 182.857v402.286c0 161.143-131.429 292.571-292.571 292.571h-36.571c-20 0-36.571-16.571-36.571-36.571v-73.143c0-20 16.571-36.571 36.571-36.571h36.571c80.571 0 146.286-65.714 146.286-146.286v-18.286c0-30.286-24.571-54.857-54.857-54.857h-128c-60.571 0-109.714-49.143-109.714-109.714v-219.429c0-60.571 49.143-109.714 109.714-109.714h219.429c60.571 0 109.714 49.143 109.714 109.714zM950.857 182.857v402.286c0 161.143-131.429 292.571-292.571 292.571h-36.571c-20 0-36.571-16.571-36.571-36.571v-73.143c0-20 16.571-36.571 36.571-36.571h36.571c80.571 0 146.286-65.714 146.286-146.286v-18.286c0-30.286-24.571-54.857-54.857-54.857h-128c-60.571 0-109.714-49.143-109.714-109.714v-219.429c0-60.571 49.143-109.714 109.714-109.714h219.429c60.571 0 109.714 49.143 109.714 109.714z"
                  ></path>
                </svg>
                <div class="cityprofile-testimonial3">
                  <span class="cityprofile-text42">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                    lorem lorem, malesuada in metus vitae, scelerisque accumsan
                    ipsum. Nam pellentesque nulla leo, sagittis vehicula sem
                    commodo nec.
                  </span>
                  <span class="cityprofile-text43">Jane Doe</span>
                  <span class="cityprofile-text44">SOFTWARE ENGINEER</span>
                  <img
                    alt="profile"
                    src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDd8fHdvbWFuJTIwcG9ydHJhaXR8ZW58MHx8fHwxNjI2NDUxOTgy&amp;ixlib=rb-1.2.1&amp;h=1200"
                    class="cityprofile-image8"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="cityprofile-container19">
            <a href="linkagepage.html" class="cityprofile-navlink11 button">
              see more
            </a>
            <a href="linkagepage.html" class="cityprofile-navlink12 button">
              add your feedback
            </a>
          </div>
        </div>
        <footer class="cityprofile-footer">
          <svg viewBox="0 0 1024 1024" class="cityprofile-icon28">
            <path
              d="M768 639.968l-182.82-182.822 438.82-329.15-128.010-127.996-548.52 219.442-172.7-172.706c-49.78-49.778-119.302-61.706-154.502-26.508-35.198 35.198-23.268 104.726 26.51 154.5l172.686 172.684-219.464 548.582 127.99 128.006 329.19-438.868 182.826 182.828v255.98h127.994l63.992-191.988 191.988-63.996v-127.992l-255.98 0.004z"
            ></path>
          </svg>
          <span class="cityprofile-text45">
            © 2021 bleditourism, All Rights Reserved.
          </span>
          <div class="cityprofile-icon-group1">
            <svg
              viewBox="0 0 950.8571428571428 1024"
              class="cityprofile-icon30"
            >
              <path
                d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
              ></path></svg
            ><svg
              viewBox="0 0 877.7142857142857 1024"
              class="cityprofile-icon32"
            >
              <path
                d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
              ></path></svg
            ><svg
              viewBox="0 0 602.2582857142856 1024"
              class="cityprofile-icon34"
            >
              <path
                d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
              ></path>
            </svg>
          </div>
        </footer>
      </div>
    </div>
    <script
      data-section-id="header"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
