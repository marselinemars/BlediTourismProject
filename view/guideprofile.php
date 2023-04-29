
<?php


    function generateStarRating($numRatings) {
      // Calculate the average rating, based on the number of ratings passed
      $avgRating = $numRatings ;

      // Generate the HTML code for the star rating
      $html = '
      <div class="star-rating" style="font-size: 24px; display: inline-block;white-space: nowrap; overflow: hidden;" >';
      for ($i = 1; $i <= 5; $i++) {
        if ($i <= $avgRating) {
          $html .= '<i style="color: gold;" class="fa fa-star"></i>'; // Use a full star icon
        } else if ($i == ceil($avgRating)) {
          $html .= '<i style="color: gold;" class="fa fa-star-half-o"></i>'; // Use a half star icon
        } else {
          $html .= '<i style="color: gold;" class="fa fa-star-o"></i>'; // Use an empty star icon
        }
      }
      $html .= '</div>';

      // Return the HTML code
      return $html;
    }



?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>guide profile - bleditourism</title>
        <meta property="og:title" content="login - bleditourism" />
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



        <style>

          .guideprofie-container06 {
                width: 100%;
                height: 40%;
                display: flex;
                align-items: flex-start;
                flex-direction: column;
                justify-content: space-evenly;
            }



          div.myfeedback_container{

            display:flex;
            flex-direction: column;
            align-items: center;
          }

          div.myfeedback_container>div{

            width:90%;
            margin-bottom: 40px ; 
            height:400px;
            display: flex;
            align-items: flex-start;
            flex-direction: column;
            justify-content: flex-start;
            background-color:rgba(57, 112, 123, 0.02);
            border-radius:5px;
            border: 2px solid rgba(57, 112, 123, 0.25);
            padding:5%;

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

          div.mycircuit_container{

          display:flex ; 
          flex-direction:row; 
          flex-wrap:wrap; 
          grid-gap:0;
          justify-content:center;

          }

          div.mycircuit_container>div{

            width:45%;
            margin-bottom: 40px ; 
            height:400px;
            display: flex;
            align-items: flex-start;
            flex-direction: column;
            justify-content: flex-start;
            background-color:rgba(57, 112, 123, 0.05);
            border-radius:10px;
            border: 5px solid rgba(57, 112, 123, 0.25);
            padding:5%;
            margin : 2%;

            
          }

          
          

            div.mycircuit>h2{
            color:rgba(57, 112, 123, 1);
            font-size: 1.5em;
            }

          div.mycard:hover , div.myfeedback_container>div:hover ,  div.mycircuit_container>div:hover{

            transform:scale(1.15);
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

            font-size: 1.5em;
            color:rgba(57, 112, 123, 1) ;
          }

          #contact-dialog>p {

          font-size: 1em;
          color:black ;
          }

          #newpost_form>input, #newpost_form>label , #newpost_form>textarea , #newfeedback_form>input, #newfeedback_form>label , #newfeedback_form>textarea  {
            display:block;
            margin:10px;
            
          }

          #newpost_form>input[type="text"] , #newpost_form>textarea ,#newfeedback_form>input, #newfeedback_form>textarea{
            
            border: 1px solid rgba(57, 112, 123, 1);
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
        event.currentTarget.classList.add("active");
      }


      function show_form(event){

      const formDialog = document.getElementById("form-dialog");

        formDialog.style.display = "block";

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
                <a href="linkagepage.html" class="guideprofie-navlink">home</a>
                <a href="linkagepage.html" class="guideprofie-navlink1">
                  tourism
                </a>
                <a href="linkagepage.html" class="guideprofie-navlink2">
                  hotels
                </a>
                <a href="linkagepage.html" class="guideprofie-navlink3">
                  restaurants
                </a>
                <a href="linkagepage.html" class="guideprofie-navlink4">
                  agencies
                </a>
                <a href="linkagepage.html" class="guideprofie-navlink5">
                  guides
                </a>
              </nav>
            </div>
            <div class="guideprofie-btn-group">
              <a href="signup.html" class="guideprofie-register button">
                My profile
              </a>
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
                src="https://images.unsplash.com/photo-1589800221366-5cf066781928?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDIwfHxwcm9maWx8ZW58MHx8fHwxNjc5MjYyMDg4&amp;ixlib=rb-4.0.3&amp;w=500"
                class="guideprofie-image1"
              />
              <div class="guideprofie-container05">
                <?php


                $name=$items[0]['g_name'];
                $bio=$items[0]['g_bio'];
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
         
                <label  class="guideprofie-text18" for="">Socials and contacts : </label>
                <p   class="guideprofie-text18" >
                '.$contacts.'
                </p>
                
                </div>';

                ?>
              </div>
             
            </div>
          </div>
          <a href="cityguides.html" class="guideprofie-navlink7 button">
            back to all guides
          </a>
          
          <div class="guideprofie-container09 tab-buttons">
            <div class="guideprofie-container10 tab-button active"  onclick="openTab(event, 'tab1')" >
              <h1 class="guideprofie-text02">portfolio</h1>
            </div>
            <div class="guideprofie-container11 tab-button " onclick="openTab(event, 'tab2')">
              <h1 class="guideprofie-text03">circuits</h1>
            </div>
            <div class="guideprofie-container12 tab-button "  onclick="openTab(event, 'tab3')">
              <h1 class="guideprofie-text04">feedbacks</h1>
            </div>
          </div>
          <div   id="tab1" class="guideprofie-gallery tab-content active mycard_container">

          
          <?php


            $combined_array = array_combine($images, $info);

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
                <p style="word-wrap: break-word;" class="guideprofie-text07 mycard">'.$description.'</p></div>
                
              </div> ';
            }

            ?>


           
          
          <button  style="display:block; width:100%;margin-top:60px;" id="show-form-btn"onclick="show_form(event)"><span class="guideprofie-text18">Add post -&gt;</span></button>

          <div id="form-dialog" style="display:none;">
         <form id="newpost_form" action="index.php?action=guide_add_to_gallery" enctype="multipart/form-data"  method="post">
         <input type="file" name="newpost" id="file-input">
 
         <label for="">The title : </label>
         <input type="text" name="title" id="" placeholder="write the title here ">
         <label for="">The description : </label>
         <textarea id="messag" name="description" rows="5" cols="50" placeholder="write the description here"></textarea>

        
        <button style="margin:20px auto 10px ; width:100%;" class = "button guideprofie-navlink6 " type="submit" name="submit-btn">Add</button>

        </form>
        </div>


          </div>



          <div id="tab2" class="guideprofie-gallery tab-content mycircuit_container ">

          <?php
          for ($i=0;$i<count($circuits);$i++){
            ?>
           

           <div class="guideprofie-gallery-card mycircuit">
              <h2 class="guideprofie-text06 mycard"><?php echo htmlspecialchars($circuits[$i]['title']);?> : </h2>
              <br>
              <span class="guideprofie-text07 mycard"><?php echo htmlspecialchars($circuits[$i]['description']);?> :</span>
            </div>


         
         <?php  }?>


              <br>

              <button  style="display:block; width:100%;margin-top:60px;" id="show-form-btn"onclick="show_circuit(event)"><span class="guideprofie-text18">Add circuit -&gt;</span></button>


              <div id="circuit-dialog" style="display:none;">
              <form id="newpost_form" action="index.php?action=guide_add_circuit"  method="post">


              <label for="">The title of the circuit : </label>
              <input type="text" name="title" id="" placeholder="write the title here ">
              <label for="">The description and details of the circuit : </label>
              <textarea id="messag" name="description" rows="5" cols="50" placeholder="write the description here"></textarea>


              <button style="margin:20px auto 10px ; width:100%;" class = "button guideprofie-navlink6 " type="submit" name="submit-btn">Add</button>

              </form>
              </div>


          </div>

          <div id="tab3" class="guideprofie-gallery tab-content myfeedback_container">

            
          <?php
          for ($i=0;$i<count($feedbacks);$i++){
            $starhtml= generateStarRating ($feedbacks[$i]['rating']);
            ?>
           

           

           <div class="guideprofie-gallery-card mycircuit">
                <h2 class="guideprofie-text06 mycard"> By: </h2>
                <span class="guideprofie-text07 mycard"><?php echo htmlspecialchars($feedbacks[$i]['visitor']);?> </span>
  
                <h2 class="guideprofie-text06 mycard"> Rating: </h2>
                
                <?php echo $starhtml ;?>

                <h2 class="guideprofie-text06 mycard"> Opinion: </h2>
                <span class="guideprofie-text07 mycard"><?php echo htmlspecialchars($feedbacks[$i]['opinion']);?> </span>
  
                
              </div>


         <?php  }?>
  



                <br>

              <button  style="display:block; width:100%;margin-top:60px;" id="show-form-btn"onclick="show_feedback(event)"><span class="guideprofie-text18">Add feedback -&gt;</span></button>


              <div id="feedback-dialog" style="display:none;">
              <form id="newfeedback_form" action="index.php?action=guide_add_feedback"  method="post">


              <label for="">your rating of this : </label>
              <input type="number" max="5" min="0" step="0.5 " name="rating" id="" placeholder="/5">
              <label for=""> your opinion about this guide :  </label>
              <textarea id="messag" name="opinion" rows="5" cols="50" placeholder="write your opinion here"></textarea>


              <button for ="newfeedback_form" style="margin:20px auto 10px ; width:100%;" class = "button guideprofie-navlink6 " type="submit" name="submit-btn">Add</button>

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
    <script
      data-section-id="header"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>


