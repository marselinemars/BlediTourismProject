<!DOCTYPE html>
<html lang="en">
    <head>
        <title>agency profile - bleditourism</title>
        <meta property="og:title" content="login - bleditourism" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <meta property="twitter:card" content="summary_large_image" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link
          rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
          data-tag="font"
        />
        <!--This is the head section-->
        <!-- <style> ... </style> -->
        <link rel="stylesheet" href="./view/style.css" />

        <link href="./view/guideprofile.css" rel="stylesheet" />
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

          .guideprofie-container03 {
    width: 100%;
    height: 616px;
    display: flex;
    flex-wrap: wrap;
    align-self: center;
    box-shadow: 5px 5px 10px 0px #39707b;
    align-items: center;
    backdrop-filter: blur(5px);
    background-size: cover;
    justify-content: center;
    background-image: url("https://blog.byond.travel/wp-content/uploads/2019/11/5-lies-people-say-about-group-travel.jpg");
  }

          </style>







        <style>

          .guideprofie-container06 {
                width: 100%;
                height: 40%;
                display: flex;
                align-items: flex-start;
                flex-direction: column;
                justify-content: space-evenly;
            }


          div.mycard {

            width:32%;
            border-bottom: 2px solid rgba(57, 112, 123, 1); 
            margin-bottom: 40px ; 
            height:500px;


          }

          div.mycard_container{

            display:flex ; 
            flex-direction:row; 
            flex-wrap:wrap; 
            grid-gap:0;
            justify-content:space-between;
          }

          
          


          div.mycard:hover  {

            transform:scale(1.03);
          }
          img.mycard{

            height: 80%;
            width: 100%;
          }
          h1.mycard , span.mycard{
            height: 10%;
          }
          .tab-button {

            cursor:pointer;
            background-color: white ;
          }
          .tab-button.active {
           background-color:rgba(57, 112, 123, 0.25);
          }
    
          .tab-content.active {
          display: flex;
      

          }

          div.tab-content{

            display:none;

          }


          #form-dialog {
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          background-color: white;
          padding: 20px;
          border: 1px solid rgba(57, 112, 123, 1);
          z-index: 9999;
          border-radius: 10px;
          width: auto;


          }


          #feedback-dialog {
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          background-color: white;
          padding: 20px;
          border: 1px solid rgba(57, 112, 123, 1);
          z-index: 9999;
          border-radius: 10px;
          width: auto;

          }



          #contact-dialog  {
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          background-color: white;
          padding: 20px;
          border: 1px solid rgba(57, 112, 123, 1);
          border-radius: 10px;
          z-index: 9999;
          width: 50%;
          height:auto;


          }

          #circuit-dialog {
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          background-color: white;
          padding: 20px;
          border: 1px solid rgba(57, 112, 123, 1);
          border-radius: 10px;
          z-index: 9999;
          width: auto;
          height:auto;


          }

          #contact-dialog>label {

            font-size: 1.1em;
            color:rgba(57, 112, 123, 1) ;
          }

          #contact-dialog>p {

          font-size: 1em;
          color:black ;
          }

          #newpost_form>input, #newpost_form>label , #newpost_form>textarea , #newfeedback_form>input, #newfeedback_form>label , #newfeedback_form>textarea , #newcircuit_form>input, #newcircuit_form>label , #newcircuit_form>textarea  {
            display:block;
            margin:10px;
            
          }

          #newpost_form>input[type="text"] , #newpost_form>textarea ,#newfeedback_form>input, #newfeedback_form>textarea ,  #newfeedback_form>textarea , #newcircuit_form>input,#newcircuit_form>textarea{
            
            border: 1px solid rgba(57, 112, 123, 1);
          }



          .circuits-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .circuit-card {
    background-color: #f8f8f8;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: #333333;
    margin-bottom: 20px;
    padding: 20px;
    text-align: center;
    transition: transform 0.2s ease-in-out;
    flex-basis: calc(33.33% - 40px);
    max-width: calc(33.33% - 40px);
  }

  .circuit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .circuit-title {
    color: #6d3d6d;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .circuit-description {
    color: #777777;
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 20px;
    word-wrap: break-word;
  }

  .circuit-date {
    color: #999999;
    font-size: 14px;
    font-style: italic;
  }


  .feedback-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .feedback-card {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: #333333;
    margin: 20px;
    padding: 20px;
    transition: transform 0.2s ease-in-out;
    flex-basis: calc(50%);
    max-width: calc(33.33% - 40px);
  }

  .feedback-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .rating {
    margin-bottom: 10px;
  }

  .stars {
    display: flex;
    justify-content: flex-start;
    align-items: center;
  }

  .star {
    color: #fcd303;
    font-size: 24px;
    margin-right: 5px;
    transform: rotate(-15deg);
    transition: transform 0.2s ease-in-out;
  }

  .star:hover {
    transform: scale(1.2) rotate(-15deg);
  }

  .feedback-details {
    text-align: left;
  }

  .author {
    color: #6d3d6d;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .comment {
    color: #777777;
    font-size: 14px;
    line-height: 1.5;
    word-wrap: break-word;
  }


  .close-button {
  background-color: transparent;
  border: none;
  color: rgba(57, 112, 123, 1) ;
  cursor: pointer;
  font-size: 20px;
  padding: 0;
  position:fixed ;
  right:10px;
  top:10px;
}

.close-button:hover {
  color:rgba(57, 112, 123, 0.5);
}
 

        </style>


        <script>
        function openTab(event, tabId) {
        // Get all tab content elements and hide them
        const tabContents = document.getElementsByClassName("tab-content");
        for (let i = 0; i < tabContents.length; i++) {
          tabContents[i].style.display = "none";
        }
      
        // Get all tab button elements and remove active class
        const tabButtons = document.getElementsByClassName("tab-button");
        for (let i = 0; i < tabButtons.length; i++) {
          tabButtons[i].classList.remove("active");
        }
      
        // Show the clicked tab content and add active class to clicked tab button
        const clickedTabContent = document.getElementById(tabId);
        clickedTabContent.style.display = "flex";
        if (tabId === 'tab1') {
          
        } else {
          clickedTabContent.style.flexDirection = "column";
        }

        
       
        event.currentTarget.classList.add("active");
      }


      function show_form(event){

const formDialog = document.getElementById("form-dialog");

  formDialog.style.display = "block";

}


      function close_dialog(event){

      const formDialog = document.getElementById("form-dialog");

      const feedabackDialog = document.getElementById("feedback-dialog");

      const circuitDialog = document.getElementById("circuit-dialog");

      const contactDialog = document.getElementById("contact-dialog");


      formDialog.style.display = "none";
      feedabackDialog.style.display ="none";
      circuitDialog.style.display = "none";
      contactDialog.style.display = "none";


    }

    function show_feedback(event){

const formDialog = document.getElementById("feedback-dialog");

  formDialog.style.display = "block";

}
      

    function show_contact(event){

    const contactDialog = document.getElementById("contact-dialog");

    contactDialog.style.display = "block";

    }


    function show_circuit(event){

const contactDialog = document.getElementById("circuit-dialog");

contactDialog.style.display = "block";

}



      
      </script>






        
      </head>
  <body>
    <div>
      

      <div class="guideprofie-container">
        <div class="guideprofie-container01">
          <header data-role="Header" class="guideprofie-header">
            <svg viewBox="0 0 1024 1024" class="guideprofie-icon">
              <path
                d="M768 639.968l-182.82-182.822 438.82-329.15-128.010-127.996-548.52 219.442-172.7-172.706c-49.78-49.778-119.302-61.706-154.502-26.508-35.198 35.198-23.268 104.726 26.51 154.5l172.686 172.684-219.464 548.582 127.99 128.006 329.19-438.868 182.826 182.828v255.98h127.994l63.992-191.988 191.988-63.996v-127.992l-255.98 0.004z"
              ></path>
            </svg>
            <div class="guideprofie-nav">
              <nav class="guideprofie-mynav">
                <a href="index.php?action=home" class="guideprofie-navlink">home</a>
                <a href="index.php?action=all-tourism" class="guideprofie-navlink1">
                  tourism
                </a>
                <a href="index.php?action=all-hotels" class="guideprofie-navlink2">
                  hotels
                </a>
                <a href="index.php?action=all-restaurants" class="guideprofie-navlink3">
                  restaurants
                </a>
                <a href="index.php?action=all-agencies" class="guideprofie-navlink4">
                  agencies
                </a>
                <a href="index.php?action=all-guides" class="guideprofie-navlink5">
                  guides
                </a>
              </nav>
            </div>
            <div class="guideprofie-btn-group">
            <?php if ($role!="visitor"){
              echo '<a href="index.php?action=my_profile&role='.$role.'" class="guideprofie-register button">
                My profile
              </a>';
              echo '<a style="margin:auto 10px;"href="index.php?action=logout" class="guideprofie-register button">
              Logout
            </a>';

            }
              ?>
            </div>
            <div data-role="BurgerMenu" class="guideprofie-burger-menu">
              <svg viewBox="0 0 1024 1024" class="guideprofie-icon02">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <div data-role="MobileMenu" class="guideprofie-mobile-menu">
              <div class="guideprofie-nav1">
                <div class="guideprofie-container02">
                  <img
                    alt="image"
                    src="https://presentation-website-assets.teleporthq.io/logos/logo.png"
                    class="guideprofie-image"
                  />
                  <div
                    data-role="CloseMobileMenu"
                    class="guideprofie-menu-close"
                  >
                    <svg viewBox="0 0 1024 1024" class="guideprofie-icon04">
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
                  class="guideprofie-icon06"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="guideprofie-icon08"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="guideprofie-icon10"
                >
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                </svg>
              </div>
            </div>
          </header>
          <div class="guideprofie-container03">

            
            <div class="guideprofie-container04">
              <img
                alt="image"
                src="<?php echo $pfp;?>"
                class="guideprofie-image1"
              />
              <div class="guideprofie-container05">
                <?php


                $name=$items[0]['name'];
                $bio=$items[0]['bio'];
                $contacts=$items[0]['contacts'];
                echo'
                <div class="guideprofie-container06 ">
                  <h1 class="guideprofie-text">'.$name.'</h1>
                  <span class="guideprofie-text01">
                  '.$bio.'
                  </span>
                 
                </div>
                <a onclick="show_contact(event)"  class="guideprofie-navlink6 button">
                  contact me !
                </a>

                <div id="contact-dialog" style="display:none;">
                <button  onclick="close_dialog(event)" class="close-button">&#10006;</button>
         
                <label  class="guideprofie-text18" for="">Socials and contacts : </label>
                
                <p   class="guideprofie-text18" >
                '.$contacts.'
                </p>
                
                </div>';

                ?>
              </div>
             
            </div>
          </div>
          <a href="index.php?action=all-agencies" class="guideprofie-navlink7 button">
            back to all agencies
          </a>
          
          <div class="guideprofie-container09 tab-buttons">
            <div class="guideprofie-container10 tab-button active"  onclick="openTab(event, 'tab1')" >
              <h1 class="guideprofie-text02">gallery</h1>
            </div>
            <div class="guideprofie-container11 tab-button " onclick="openTab(event, 'tab2')">
              <h1 class="guideprofie-text03">circuits</h1>
            </div>
            <div class="guideprofie-container12 tab-button "  onclick="openTab(event, 'tab3')">
              <h1 class="guideprofie-text04">feedbacks</h1>
            </div>
          </div>


          <div   id="tab1" style = "width:100%;" class="guideprofie-gallery tab-content active mycard_container">

          
          <?php

            $combined_array = array_combine($images, $info);

            if (empty($combined_array)) {
              echo '<p id="no_posts" style="overflow:hidden;margin:auto;" class="guideprofie-text07 mycard"> Ooooops . This agency has no posts yet ! </p> ';
            } else {

              foreach ($combined_array as $image => $aninfo){
              

                $file_path = $aninfo;
                $file_contents = file_get_contents($file_path);
                $data = explode("|", $file_contents);
                $title = $data[0];
                $description = str_replace("[NEWLINE]", "\n", $data[1]);
  
                echo '<div  class="guideprofie-gallery-card mycard">
                  <img
                  style="height:60%;"
                    class="mycard"
                    alt="image"
                    src="' . $image . '"
                    class="guideprofie-image2"
                  />
                  <div class="info" style="height:40%; width:100%; padding:2%;">
                  
                  <h2 class="guideprofie-text06 mycard">'.$title.'</h2>
                  <p style="overflow:hidden;" class="guideprofie-text07 mycard">'.$description.'</p></div>
                  
                </div> ';
              }
            }
            

            ?>


           
<?php if ($role==="agency" && $mine=='true'){
         echo ' <button  style="display:block; width:100%;margin-top:60px;" id="show-form-btn"onclick="show_form(event)"><span class="guideprofie-text18">Add post -&gt;</span></button>';
}?>
          <div id="form-dialog" style="display:none;">

          <button  onclick="close_dialog(event)" class="close-button">&#10006;</button>
         <form id="newpost_form" action="" enctype="multipart/form-data"  method="post">
         <input type="file" name="newpost" id="file-input">
 
         <label for="">The title : </label>
         <input type="text" name="title" id="title-input" placeholder="write the title here ">
         <label for="">The description : </label>
         <textarea id="description-input" name="description" rows="5" cols="50" placeholder="write the description here"></textarea>

        
        <button id="add1" onclick = close_dialog(event) style="margin:20px auto 10px ; width:100%;" class = "button guideprofie-navlink6 " type="submit" name="submit-btn">Add</button>

        </form>
        
        </div>


          </div>






          <div id="tab2"  style = "width:100%;" class="guideprofie-gallery tab-content mycircuit_container ">

        
         <div id="tab2.1" class="circuits-container">

         <?php

                
        if (empty($circuits2)) {
          echo '<p id="no_circuits" style="overflow:hidden;margin:auto;" class="guideprofie-text07 mycard"> Ooooops . This agency has no circuits yet ! </p> ';
        } else {

          for ($i=0;$i<count($circuits2);$i++){
                  ?>
        <div class="circuit-card">
          <h2 class="circuit-title"><?php echo htmlspecialchars($circuits2[$i]['title']);?> :</h2>
          <p class="circuit-description"><?php echo htmlspecialchars($circuits2[$i]['description']);?> </p>
          <p class="circuit-date"><?php echo htmlspecialchars($circuits2[$i]['date']);?></p>
        </div>
        <?php  }  }?>
        
        <!-- Add more circuit cards -->
      </div>

      
      
      <br>

      <?php if ($role==="agency" && $mine=='true'){
echo '<button  style="display:block; width:100%;margin-top:60px;" id="show-form-btn"onclick="show_circuit(event)"><span class="guideprofie-text18">Add circuit -&gt;</span></button>';
      }?>

<div id="circuit-dialog" style="display:none;">
<button  onclick="close_dialog(event)" class="close-button">&#10006;</button>
<form id="newcircuit_form" action="index.php?action=agency_add_circuit"  method="post">

<label for="">The title of the circuit : </label>
<input type="text" name="title" id="title-input-2" placeholder="write the title here ">
<label for="">The date of the circuit : </label>
<input type="date" name="date" id="date-input-2" placeholder="enter the date here ">
<label for="">The description and details of the circuit : </label>
<textarea id="description-input-2" name="description" rows="5" cols="50" placeholder="write the description here"></textarea>




<button style="margin:20px auto 10px ; width:100%;" onclick="close_dialog(event)" class = "button guideprofie-navlink6 " type="submit"  name="submit-btn">Add</button>



</form>
</div>



</div>







         



          <div id="tab3"  style = "width:100%;" class="guideprofie-gallery tab-content myfeedback_container">
          <div id="tab3.1" class="feedback-container">
          <?php
          if (empty($feedbacks2)) {
            echo '<p id="no_feedbacks" style="overflow:hidden;margin:auto;" class="guideprofie-text07 mycard"> Ooooops . This agency has no feedbacks yet ! </p> ';
          } else {
  
          for ($i=0;$i<count($feedbacks2);$i++){
            $starhtml= generateStarRating ($feedbacks2[$i]['rating']);
            ?>

          <div class="feedback-card">
          
          <div class="rating">
            <div class="stars">
              <?php echo $starhtml ;?>
            </div>
          </div>
          <div class="feedback-details">
            <p class="author"><?php echo htmlspecialchars($feedbacks2[$i]['visitor']);?> </p>
            <p class="comment"><?php echo htmlspecialchars($feedbacks2[$i]['opinion']);?></p>
          </div>

        </div>

        <?php  } }?>

        </div>


        

        <br>
        <?php if ($role ==="visitor"){
echo '<button  style="display:block; width:100%;margin-top:60px;" id="show-form-btn"onclick="show_feedback(event)"><span class="guideprofie-text18">Add feedback -&gt;</span></button>';
        }?>

<div id="feedback-dialog" style="display:none;">
<button  onclick="close_dialog(event)" class="close-button">&#10006;</button>
<form id="newfeedback_form" action="index.php?action=agency_add_feedback"  method="post">


<label for="">your rating of this : </label>
<input type="number" max="5" min="0" step="0.5" name="rating" id="title-input-3" placeholder="/5">
<label for=""> your opinion about this guide :  </label>
<textarea id="description-input-3" name="opinion" rows="5" cols="50" placeholder="write your opinion here"></textarea>


<button for ="newfeedback_form" onclick="close_dialog(event)" style="margin:20px auto 10px ; width:100%;" class = "button guideprofie-navlink6 " type="submit" name="submit-btn">Add</button>

</form>

</div>



        </div>
                    
          



         


          







          <footer class="guideprofie-footer">
            <svg viewBox="0 0 1024 1024" class="guideprofie-icon22">
              <path
                d="M768 639.968l-182.82-182.822 438.82-329.15-128.010-127.996-548.52 219.442-172.7-172.706c-49.78-49.778-119.302-61.706-154.502-26.508-35.198 35.198-23.268 104.726 26.51 154.5l172.686 172.684-219.464 548.582 127.99 128.006 329.19-438.868 182.826 182.828v255.98h127.994l63.992-191.988 191.988-63.996v-127.992l-255.98 0.004z"
              ></path>
            </svg>
            <span class="guideprofie-text19">
              © 2021 bleditourism, All Rights Reserved.
            </span>
            <div class="guideprofie-icon-group1">
              <svg
                viewBox="0 0 950.8571428571428 1024"
                class="guideprofie-icon24"
              >
                <path
                  d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                ></path></svg
              ><svg
                viewBox="0 0 877.7142857142857 1024"
                class="guideprofie-icon26"
              >
                <path
                  d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                ></path></svg
              ><svg
                viewBox="0 0 602.2582857142856 1024"
                class="guideprofie-icon28"
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
 // JavaScript function to handle file upload and send AJAX request
function uploadImage() 
{
  // Retrieve the file input element
  var fileInput = document.getElementById('file-input');

  // Retrieve the title and description from form inputs
  var titleInput = document.getElementById('title-input');
  var descriptionInput = document.getElementById('description-input');
  var title = titleInput.value;
  var description = descriptionInput.value;

  // Create a new FormData object
  var formData = new FormData();
  formData.append('newpost', fileInput.files[0]);
  formData.append('title', title);
  formData.append('description', description);

  // Create a new XMLHttpRequest object
  var xhr = new XMLHttpRequest();

  // Define the AJAX request
  xhr.open('POST', 'index.php?action=agency_add_to_gallery', true);

  // Set the onload function to handle the AJAX response
  xhr.onload = function() {
    if (xhr.status === 200) {
      if (xhr.responseText) {
        try {
          //alert(xhr.responseText);
          var response = JSON.parse(xhr.responseText);
          var html = response.html;

          var tab1 = document.getElementById('tab1');
          tab1.insertAdjacentHTML('afterbegin', html);
          const nopost = document.getElementById('no_posts');
          nopost.style.display ="none";
          

          // Clear the form inputs
          titleInput.value = '';
          descriptionInput.value = '';
        } catch (error) {
          console.error('Error parsing JSON:', error);
        }
      } else {
        console.error('Empty response');
      }
    }
  };

  // Send the AJAX request
  xhr.send(formData);
}

document.getElementById('newpost_form').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  uploadImage(); // Call the uploadImage() function
  // You can perform additional actions or show loading indicators here
  // ...
});



</script>


<script>
 // JavaScript function to handle file upload and send AJAX request
function add_circuit() 
{
  // Retrieve the title and description from form inputs
  var titleInput = document.getElementById('title-input-2');
  var descriptionInput = document.getElementById('description-input-2');
  var dateInput = document.getElementById('date-input-2');
  var title = titleInput.value;
  var date = dateInput.value;
  var description = descriptionInput.value;
 
  

  // Create a new FormData object
  var formData = new FormData();
  formData.append('title', title);
  formData.append('description', description);
  formData.append('date', date);

  // Create a new XMLHttpRequest object
  var xhr = new XMLHttpRequest();

  // Define the AJAX request
  xhr.open('POST', 'index.php?action=agency_add_circuit', true);

  // Set the onload function to handle the AJAX response
  xhr.onload = function() {
    if (xhr.status === 200) {
      if (xhr.responseText) {
        try {
          var response = JSON.parse(xhr.responseText);
          var html = response.html;

          var tab1 = document.getElementById('tab2.1');
          tab1.insertAdjacentHTML('beforeend', html);
          const nocircuit = document.getElementById('no_circuits');
          nocircuit.style.display ="none";


          // Clear the form inputs
          titleInput.value = '';
          descriptionInput.value = '';
        } catch (error) {
          console.error('Error parsing JSON:', error);
        }
      } else {
        console.error('Empty response');
      }
    }
  };

  // Send the AJAX request
  xhr.send(formData);
}

document.getElementById('newcircuit_form').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  add_circuit(); // Call the uploadImage() function
  // You can perform additional actions or show loading indicators here
  // ...
});



</script>





<script>
 // JavaScript function to handle file upload and send AJAX request
function add_feedback() 
{
  // Retrieve the title and description from form inputs
  var titleInput = document.getElementById('title-input-3');
  var descriptionInput = document.getElementById('description-input-3');
  var title = titleInput.value;
  var description = descriptionInput.value;

  var name = '<?php echo $name; ?>';


  // Create a new FormData object
  var formData = new FormData();

  formData.append('title', title);
  formData.append('description', description);
  formData.append('name', name);

  // Create a new XMLHttpRequest object
  var xhr = new XMLHttpRequest();

  // Define the AJAX request
  xhr.open('POST', 'index.php?action=agency_add_feedback', true);

  // Set the onload function to handle the AJAX response
  xhr.onload = function() {
    if (xhr.status === 200) {
      if (xhr.responseText) {
        try {
          var response = JSON.parse(xhr.responseText);
          var html = response.html;

          var tab1 = document.getElementById('tab3.1');
          tab1.insertAdjacentHTML('beforeend', html);
          const nofeedback = document.getElementById('no_feedbacks');
          nofeedback.style.display ="none";


          // Clear the form inputs
          titleInput.value = '';
          descriptionInput.value = '';
        } catch (error) {
          console.error('Error parsing JSON:', error);
        }
      } else {
        console.error('Empty response');
      }
    }
  };

  // Send the AJAX request
  xhr.send(formData);
}

document.getElementById('newfeedback_form').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  add_feedback(); 
  // You can perform additional actions or show loading indicators here
  // ...
});



</script>



    <script
      data-section-id="header"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>

    
  </body>
</html>


