<?php
 
 $cities = array(
  "Choose a city : ",
  "Wilaya d'Adrar",
  "Wilaya de Chlef",
  "Wilaya de Laghouat",
  "Wilaya d'Oum El Bouaghi",
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
  "Wilaya d'Alger",
  "Wilaya de Djelfa",
  "Wilaya de Jijel",
  "Wilaya de Sétif",
  "Wilaya de Saïda",
  "Wilaya de Skikda",
  "Wilaya de Sidi Bel Abbès",
  "Wilaya d'Annaba",
  "Wilaya de Guelma",
  "Wilaya de Constantine",
  "Wilaya de Médéa",
  "Wilaya de Mostaganem",
  "Wilaya de M'Sila",
  "Wilaya de Mascara",
  "Wilaya de Ouargla",
  "Wilaya d'Oran",
  "Wilaya d'El Bayadh",
  "Wilaya d'Illizi",
  "Wilaya de Bordj Bou Arreridj",
  "Wilaya de Boumerdès",
  "Wilaya d'El Tarf",
  "Wilaya de Tindouf",
  "Wilaya de Tissemsilt",
  "Wilaya d'El Oued",
  "Wilaya de Khenchela",
  "Wilaya de Souk Ahras",
  "Wilaya de Tipaza",
  "Wilaya de Mila",
  "Wilaya d'Aïn Defla",
  "Wilaya de Naâma",
  "Wilaya d'Aïn Témouchent",
  "Wilaya de Ghardaïa",
  "Wilaya de Relizane",
  "Wilaya de Timimoun",
  "Wilaya de Bordj Badji Mokhtar",
  "Wilaya d'Ouled Djellal",
  "Wilaya de Béni Abbès",
  "Wilaya d'In Salah",
  "Wilaya d'In Guezzam",
  "Wilaya de Touggourt",
  "Wilaya de Djanet",
  "Wilaya d'El M'Ghair",
  "Wilaya d'El Meniaa"
);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>signup - bleditourism</title>
    <meta property="og:title" content="signup - bleditourism" />
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
    <style>
      .dialog {

        padding: 20px;
        position:fixed ;
        background-color: var(--dl-color-gray-white);
        z-index: 9999;
        height:auto;
        border-radius:10px;
      }

      .dialog>form>div{

        margin:10px;
        height:40px;
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
      <link href="./view/signup.css" rel="stylesheet" />

      
        <div class="signup-container01">
          <header data-role="Header" class="signup-header">
            <svg viewBox="0 0 1024 1024" class="signup-icon">
              <path
                d="M768 639.968l-182.82-182.822 438.82-329.15-128.010-127.996-548.52 219.442-172.7-172.706c-49.78-49.778-119.302-61.706-154.502-26.508-35.198 35.198-23.268 104.726 26.51 154.5l172.686 172.684-219.464 548.582 127.99 128.006 329.19-438.868 182.826 182.828v255.98h127.994l63.992-191.988 191.988-63.996v-127.992l-255.98 0.004z"
              ></path>
            </svg>
            <div class="signup-nav">
              <nav class="signup-mynav">
                <a href="index.php?action=home" class="signup-navlink">home</a>
                <a href="index.php?action=all-agencies" class="signup-navlink1">tourism</a>
                <a href="index.php?action=all-hotels" class="signup-navlink2">hotels</a>
                <a href="index.php?action=all-restaurants" class="signup-navlink3">
                  restaurants
                </a>
                <a href="index.php?action=all-agencies" class="signup-navlink4">agencies</a>
                <a href="index.php?action=all-guides" class="signup-navlink5">guides</a>
              </nav>
            </div>
            <div class="signup-btn-group">
              <a href="index.php?action=login" class="signup-login button">Login</a>
              <a href="index.php?action=sign_up" class="signup-register button">sign up</a>
            </div>
            <div data-role="BurgerMenu" class="signup-burger-menu">
              <svg viewBox="0 0 1024 1024" class="signup-icon02">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <div data-role="MobileMenu" class="signup-mobile-menu">
              <div class="signup-nav1">
                <div class="signup-container02">
                  <img
                    alt="image"
                    src="https://presentation-website-assets.teleporthq.io/logos/logo.png"
                    class="signup-image"
                  />
                  <div data-role="CloseMobileMenu" class="signup-menu-close">
                    <svg viewBox="0 0 1024 1024" class="signup-icon04">
                      <path
                        d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>
              <div>
                <svg viewBox="0 0 950.8571428571428 1024" class="signup-icon06">
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="signup-icon08"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="signup-icon10"
                >
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                </svg>
              </div>
            </div>
          </header>
          <div class="signup-container03">
            <div class="signup-container04">
              <h1 class="signup-text">sign up</h1>
              <div class="signup-container05">
                <div style="height:20%;" class="signup-container06">
                  
                <div style="height:100%;" class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text3">sign up as</span>
                  </div>

                  <?php if (isset($vars['error_message'])){ ?><b style="color:red;"><?php echo $vars['error_message'] ?></b> <?php } ?>

                  <select id ="options" name="user" class="signup-textinput2 input" >
                    <option value=""><button>Select an option</button></option>
                    <option value="1">visitor</option>
                    <option value="2" >hotel</option>
                    <option value="3" >restaurant</option>
                    <option  value="4">agency</option>
                    <option value="5" >guide</option>
                  </select>
                </div>
              </div>





              <!-- the hotel dialog -->
              <div id ="dialog2" style="display:none ;"  class="dialog signup-container05">
                <form action="index.php?action=hotel_do_register" method="post" enctype="multipart/form-data" >

                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text1">enter your profile picture </span>
                  </div>
                  <input type="file" name="profile" id="file-input">
                </div>
                  

                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text1">enter your city</span>
                  </div>
                                  
                  <select  class="signup-textinput input" id="wilaya" style="
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
                </div>

                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text1">enter your email</span>
                  </div>
                  <input
                    type="text"
                    placeholder="exp : sheraton@gmail.com"
                    class="signup-textinput input"
                    name="email"

                  />
                </div>
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text2">enter your password</span>
                  </div>
                  <input
                    type="password"
                    placeholder="exp : ************"
                    class="signup-textinput1 input"
                    name="password"
                  />
                </div>
                
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text3">enter your address</span>
                  </div>
                  <input
                    type="text"
                    placeholder="address"
                    class="signup-textinput2 input"
                    name="address"
                    
                  />
                </div>
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text3">enter your name</span>
                  </div>
                  <input
                    type="text"
                    placeholder="hotel name"
                    class="signup-textinput2 input"
                    name="name"
                    
                  />
                </div>
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text3">enter your contact</span>
                  </div>
                  <input
                    type="tel"
                    placeholder="number: ... insta : ... facebook: ... "
                    class="signup-textinput2 input"
                    name="contact"
                    
                  />
                </div>
                

                <button name="submit_hotel" style="position: absolute; left: 30%; height: 10%;"href="linkagepage.html" type="submit" class="signup-navlink6 button">
                  sign up
                </button>
              </form>
              </div>


                 <!-- the restaurant dialog -->
                 <div id ="dialog3" style="display:none ;"  class="dialog signup-container05">
                  <form action="index.php?action=restaurant_do_register" method="post" enctype="multipart/form-data" >


                  <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text1">enter your profile picture </span>
                  </div>
                  <input type="file" name="profile" id="file-input">
                </div>
                  

                  <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text1">enter your city</span>
                  </div>
                  <select  class="signup-textinput input" id="wilaya" style="
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
                </div>
                  <div class="signup-container10">
                    <div class="signup-container11">
                      <span class="signup-text1">enter your email</span>
                    </div>
                    <input
                      type="text"
                      placeholder="exp : sheraton@gmail.com"
                      class="signup-textinput input"
                      name="email"
  
                    />
                  </div>
                  <div class="signup-container10">
                    <div class="signup-container11">
                      <span class="signup-text2">enter your password</span>
                    </div>
                    <input
                      type="password"
                      placeholder="exp : ************"
                      class="signup-textinput1 input"
                      name="password"
                    />
                  </div>
                  
                  <div class="signup-container10">
                    <div class="signup-container11">
                      <span class="signup-text3">enter your address</span>
                    </div>
                    <input
                      type="text"
                      placeholder="address"
                      class="signup-textinput2 input"
                      name="address"
                      
                    />
                  </div>
                  <div class="signup-container10">
                    <div class="signup-container11">
                      <span class="signup-text3">enter your name</span>
                    </div>
                    <input
                      type="text"
                      placeholder="restaurant name"
                      class="signup-textinput2 input"
                      name="name"
                      
                    />
                  </div>
                  <div class="signup-container10">
                    <div class="signup-container11">
                      <span class="signup-text3">enter your contact</span>
                    </div>
                    <input
                      type="tel"
                      placeholder="number: ... insta : ... facebook: ... "
                      class="signup-textinput2 input"
                      name="contact"
                      
                    />
                  </div>
                  
  
                  <button name="submit_hotel" style="position: absolute; left: 30%; height: 10%;"href="linkagepage.html" type="submit" class="signup-navlink6 button">
                    sign up
                  </button>
                </form>
                </div>



                   <!-- the agency dialog -->
              <div id ="dialog4" style="display:none ;"  class="dialog signup-container05">
                <form action="index.php?action=agency_do_register" method="post" enctype="multipart/form-data" >

                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text1">enter your profile picture </span>
                  </div>
                  <input type="file" name="profile" id="file-input">
                </div>
                  
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text1">enter your city</span>
                  </div>
                  <select  class="signup-textinput input" id="wilaya" style="
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
                </div>
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text1">enter your email</span>
                  </div>
                  <input
                    type="text"
                    placeholder="exp : sheraton@gmail.com"
                    class="signup-textinput input"
                    name="email"

                  />
                </div>
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text2">enter your password</span>
                  </div>
                  <input
                    type="password"
                    placeholder="exp : ************"
                    class="signup-textinput1 input"
                    name="password"
                  />
                </div>
                
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text3">enter your address</span>
                  </div>
                  <input
                    type="text"
                    placeholder="address"
                    class="signup-textinput2 input"
                    name="address"
                    
                  />
                </div>
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text3">enter your name</span>
                  </div>
                  <input
                    type="text"
                    placeholder="agency name"
                    class="signup-textinput2 input"
                    name="name"
                    
                  />
                </div>
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text3">enter your contact</span>
                  </div>
                  <input
                    type="tel"
                    placeholder="number: ... insta : ... facebook: ... "
                    class="signup-textinput2 input"
                    name="contact"
                    
                  />
                </div>
                

                <button name="submit_hotel" style="position: absolute; left: 30%; height: 10%;"href="linkagepage.html" type="submit" class="signup-navlink6 button">
                  sign up
                </button>
              </form>
              </div>


              
               <!-- the visitor dialog -->
               <div id ="dialog1" style="display:none ;"  class="dialog signup-container05">
                <form action="index.php?action=visitor_do_register" method="post">

                  
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text1">enter your email</span>
                  </div>
                  <input
                    type="text"
                    placeholder="exp : sheraton@gmail.com"
                    class="signup-textinput input"
                    name="email"

                  />
                </div>
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text2">enter your password</span>
                  </div>
                  <input
                    type="password"
                    placeholder="exp : ************"
                    class="signup-textinput1 input"
                    name="password"
                  />
                </div>
                
                <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text3">enter your name</span>
                  </div>
                  <input
                    type="text"
                    placeholder="visitor name"
                    class="signup-textinput2 input"
                    name="name"
                    
                  />
                </div>
               
                

                <button name="submit_hotel" style="position: absolute; left: 30%; height: 10%;"href="linkagepage.html" type="submit" class="signup-navlink6 button">
                  sign up
                </button>
              </form>
              </div>




                 <!-- the guide dialog -->
                 <div id ="dialog5" style="display:none ;"  class="dialog signup-container05">
                  <form action="index.php?action=guide_do_register" method="post" enctype="multipart/form-data" >

                  <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text1">enter your profile picture </span>
                  </div>
                  <input type="file" name="profile" id="file-input">
                </div>
                  
                  <div class="signup-container10">
                  <div class="signup-container11">
                    <span class="signup-text1">enter your city</span>
                  </div>
                  <select  class="signup-textinput input" id="wilaya" style="
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
                </div>
                  <div class="signup-container10">
                    <div class="signup-container11">
                      <span class="signup-text1">enter your email</span>
                    </div>
                    <input
                      type="text"
                      placeholder="exp : sheraton@gmail.com"
                      class="signup-textinput input"
                      name="email"
  
                    />
                  </div>
                  <div class="signup-container10">
                    <div class="signup-container11">
                      <span class="signup-text2">enter your password</span>
                    </div>
                    <input
                      type="password"
                      placeholder="exp : ************"
                      class="signup-textinput1 input"
                      name="password"
                    />
                  </div>
                  
                  <div class="signup-container10">
                    <div class="signup-container11">
                      <span class="signup-text3">enter your bio</span>
                    </div>
                    <input
                      type="textarea"
                      placeholder="bio"
                      class="signup-textinput2 input"
                      name="bio"
                      
                    />
                  </div>
                  <div class="signup-container10">
                    <div class="signup-container11">
                      <span class="signup-text3">enter your name</span>
                    </div>
                    <input
                      type="text"
                      placeholder="guide name"
                      class="signup-textinput2 input"
                      name="name"
                      
                    />
                  </div>
                  <div class="signup-container10">
                    <div class="signup-container11">
                      <span class="signup-text3">enter your contact</span>
                    </div>
                    <input
                      type="textarea"
                      placeholder="number: ... insta : ... facebook: ... "
                      class="signup-textinput2 input"
                      name="contact"
                      
                    />
                  </div>

                  
  
                  <button name="submit_hotel" style="position: absolute; left: 30%; height: 10%;"href="linkagepage.html" type="submit" class="signup-navlink6 button">
                    sign up
                  </button>
                </form>
                </div>




              


  

























              <div class="signup-container12">
                <span class="signup-text4">already have an account ?</span>
                <a href="index.php?action=login" class="signup-navlink7 button">log in</a>
              </div>
            </div>
          </div>
          
        </div>

        <footer class="signup-footer">
          <svg viewBox="0 0 1024 1024" class="signup-icon12">
            <path
              d="M768 639.968l-182.82-182.822 438.82-329.15-128.010-127.996-548.52 219.442-172.7-172.706c-49.78-49.778-119.302-61.706-154.502-26.508-35.198 35.198-23.268 104.726 26.51 154.5l172.686 172.684-219.464 548.582 127.99 128.006 329.19-438.868 182.826 182.828v255.98h127.994l63.992-191.988 191.988-63.996v-127.992l-255.98 0.004z"
            ></path>
          </svg>
          <span class="signup-text5">
            © 2021 bleditourism, All Rights Reserved.
          </span>
          <div class="signup-icon-group1">
            <svg viewBox="0 0 950.8571428571428 1024" class="signup-icon14">
              <path
                d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
              ></path></svg
            ><svg viewBox="0 0 877.7142857142857 1024" class="signup-icon16">
              <path
                d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
              ></path></svg
            ><svg viewBox="0 0 602.2582857142856 1024" class="signup-icon18">
              <path
                d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
              ></path>
            </svg>
          </div>
        </footer>
      </div>
    <script
      data-section-id="header"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>

    <script>
      // Get the select element and all the dialog divs
      const select = document.getElementById('options');
      const dialogs = document.querySelectorAll('.dialog');
  
      // Add an event listener to the select element
      select.addEventListener('change', (event) => {
        // Get the value of the selected option
        const selectedValue = event.target.value;
  
        // Hide all the dialog divs
        for (let i = 0; i < dialogs.length; i++) {
          dialogs[i].style.display = 'none';
        }
  
        // Show the selected dialog div
        if (selectedValue) {
          const selectedDialog = document.getElementById(`dialog${selectedValue}`);
          if (selectedDialog) {
            selectedDialog.style.display = 'block';
          }
        }
      });

    </script>
    
  </body>
</html>
