<?php session_start();?>
<?php
if(isset($_GET['state-submit'])) {
 $state=$_GET['state'];   
 if($state=='international')
 {
     header("location: international");
 }
 else
header("location: $state-tour-package");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Sand and Peaks: Tour Operations and Managment</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/popupquery.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#151515">
    <meta name="theme-color" content="#151515">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W1GDJ85NPK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W1GDJ85NPK');
</script>
<script  src="js/utkarsh.js"></script>
</head>


<body>
    
    <div class="container">
        <!--start of top panel-->
       <my-header></my-header>
        <!--end of top panel-->
        <div class="main_slider js_height">
            <div class="slider_wrap" id="main_slider_wrap">
                <div class="slide">
                    <div class="bg-img" style="background-image: url(img/honeymoon-tour-banner-sand-and-peaks.webp)"></div>
                    <div class="wrap">
                        <div class="wrap_float js_height">
                            <div class="slide_content">
                                <div class="title_wrap">
                                    <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                        <style>
                            .alert h4{
                                margin-left:50%;
                                margin-top:-40%;
                                background-color: #B5F3A4;
                                border: 2px solid #66AF52;
                                border-radius: 10px;
                                margin-bottom: 1rem;
                                height: 3rem;
                                padding-top: 0.6rem;
                                text-align: center;
                            }
                            .btnu{
                                float: right;
                                font-size: 1.3rem;
                                margin-right: 1rem;
                                background-color: #00D26A;
                                border-radius: 50%;
                            }
                           @media only screen and (max-width: 1000px) {
                                .alert h4{
                                    margin-left: 0%;
                                }
    
                            }
                        </style>
                        <script>
                            window.onload = () => {
                            document.getElementById('close22').onclick = function() {
                            this.parentNode.remove()
                            return false;
                             };
                            };
                            setTimeout(() => {
                            const box = document.getElementById('toptop');

                             // 👇️ removes element from DOM
                             box.style.display = 'none';

                            // 👇️ hides element (still takes up space on page)
                            // box.style.visibility = 'hidden';
                            }, 5000); // 👈️ time in milliseconds
                        </script>
                            <div class="alert" role="alert" id="toptop">
                            <h4><strong>✅  Hey!</strong> <?php echo $_SESSION['status']; ?><button class="btnu" id='close22'>❎</button></h4>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
                                    <h2 class="slide_title">Honeymoon</h2>
                                </div>
                                <p class="text" style="color:white;" >
                                      You only get to plan the honeymoon once; make sure you do it right. 
                                </p>
                                <div class="buttons">
                                    <button class="btn button js-popup-open" data-href="#book-now1"> Plan My Honeymoon </button>
                                </div>
                                <div class="next_title">International</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="bg-img" style="background-image: url(img/international-getaway-banner-sand-and-peaks.webp)"></div>
                    <div class="wrap">
                        <div class="wrap_float js_height">
                            <div class="slide_content">
                                <div class="title_wrap">
                                    <h2 class="slide_title">International Getaway </h2>
                                </div>
                                <p class="text" style="color:white;"> 
                                 Why not explore the world if you have the option to, right? 
                                </p>
                               <div class="buttons">
                                    <button class="btn button js-popup-open" data-href="#book-now2"> Plans, Packages, and Pricing </button>
                                </div> 
                                <div class="next_title">Corporate</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="bg-img" style="background-image: url(img/corporate-retreat-banner-sand-and-peaks.webp)"></div>
                    <div class="wrap">
                        <div class="wrap_float js_height">
                            <div class="slide_content">
                                <div class="title_wrap">
                                    <h2 class="slide_title">Company Retreat</h2>
                                </div>
                                <p class="text" style="color:white;" >
                                    Gift your employees what they need; A well-deserved break. 
                                </p>
                               <div class="buttons">
                                    <button class="btn button js-popup-open" data-href="#book-now3"> Find Out What's Best For Your Team </button>
                                </div>
                                <div class="next_title">Family</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="bg-img" style="background-image: url(img/family-getaway-banner-sand-and-peaks.webp)"></div>
                    <div class="wrap">
                        <div class="wrap_float js_height">
                            <div class="slide_content">
                                <div class="title_wrap">
                                    <h2 class="slide_title">Family Vacation</h2>
                                </div>
                                <p class="text" style="color:white;" >
                                    Reunite with your family and create memories that will last a lifetime.  
                                   
                                </p>
                                  <div class="buttons">
                                 
                                    <button class="btn button js-popup-open" data-href="#book-now4"> Find Your Best Option </button>
                                </div> 
                                <div class="next_title">Custom </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="slide">
                    <div class="bg-img" style="background-image: url(img/custom-tailored-tour-banner-sand-and-peaks.webp)"></div>
                    <div class="wrap">
                        <div class="wrap_float js_height">
                            <div class="slide_content">
                                <div class="title_wrap">
                                    <h2 class="slide_title"> Custom Tailored Tours</h2>
                                </div>
                                <p class="text" style="color:white;" > 
                                If pre-made plans are not something you're looking for, we are ready to cook a new one for you.
</p>
                                <div class="buttons">
                                    <button class="btn button js-popup-open" data-href="#book-now5">Plan a Tour According To Me </button>
                                </div>
                                <div class="next_title">Honeymoon</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="arrows">
                <div class="arrow prev"></div>
                <div class="arrow next"></div>
            </div>
        </div>
        <div class="most_popular">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="title_wrap">
                        <h2 class="title">Featured Tours</h2>
                        <p class="subtitle">
                            Introducing a handpicked selection of tours that have been the prime choice among our community.                        </p>
                        <div class="controls">
                        
                            <div class="arrows">
                                <div class="arrow prev"></div>
                                <div class="arrow next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section_content">
                        <div class="tour-slider" id="tour-slider">
                            
                                            
                                               <!--<//Tour 1>-->
                                               
                                                   <a href="couple-getaway-in-kashmir-tour-6d.html" class="tour_item" style="background-image: url(img/kashmir-honeymoon-tour-banner-sand-and-peaks.webp)">
                                <div class="tour_item_top">
                                    <p class="country">
                                        <span> Kashmir, India</span>
                                    </p>
                                 
                                </div>
                                <div class="tour_item_bottom">
                                    <h3 class="_title">Honeymoon In Kashmir </h3>
                                    <div class="_info">
                                        <div class="_info_left">
                                            <div class="days">06 Days 05 Nights | </div>
                                            <div class="cost">₹ 42,499 </div>
                                        </div>
                                        <div class="_info_right">
                                          
                                            <p class="rating-text"> Srinagar, Pahalgam, Gulmarg, Sonamarg </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>
                            


                           

                                               <!--<//Tour 2>-->
                                               
                                                <a href="couple-getaway-in-andaman-tour-6d.html" class="tour_item" style="background-image: url(img/andamans-honeymoon-tour-banner-sand-and-peaks.webp)">
                                <div class="tour_item_top">
                                    <p class="country">
                                        <span> Andaman, India</span>
                                    </p>
                                 
                                </div>
                                <div class="tour_item_bottom">
                                    <h3 class="_title">Honeymoon In Andaman </h3>
                                    <div class="_info">
                                        <div class="_info_left">
                                            <div class="days">06 Days 05 Nights | </div>
                                            <div class="cost">₹ 53,499 </div>
                                        </div>
                                        <div class="_info_right">
                                          
                                            <p class="rating-text"> Port Blair, Havelock, Neil </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>
                                               
                          
                                               <!--<//Tour 3>-->


                            <a href="couple-getaway-in-manali-tour.html" class="tour_item" style="background-image: url(img/manali-shimla-honeymoon-tour-sand-and-peaks.webp)">
                                <div class="tour_item_top">
                                    <p class="country">
                                        <span> Himachal Pradesh, India</span>
                                    </p>
                                 
                                </div>
                                <div class="tour_item_bottom">
                                    <h3 class="_title">Honeymoon In Manali-Shimla </h3>
                                    <div class="_info">
                                        <div class="_info_left">
                                            <div class="days">06 Days 05 Nights | </div>
                                            <div class="cost">₹ 49,999 </div>
                                        </div>
                                        <div class="_info_right">
                                          
                                            <p class="rating-text"> Shimla, Manali, Solang Valley, Kufri </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                                               <!--<//Tour 4>-->
                                               
                         <a href="honeymoon-trip-to-kerala.html" class="tour_item" style="background-image: url(img/kerala-honeymoon-tour-banner-sand-and-peaks.webp)">
                                <div class="tour_item_top">
                                    <p class="country">
                                        <span> Kerala, India</span>
                                    </p>
                                 
                                </div>
                                <div class="tour_item_bottom">
                                    <h3 class="_title">Honeymoon In Kerala </h3>
                                    <div class="_info">
                                        <div class="_info_left">
                                            <div class="days">06 Days 05 Nights | </div>
                                            <div class="cost">₹ 44,000 </div>
                                        </div>
                                        <div class="_info_right">
                                          
                                            <p class="rating-text"> Cochin, Munnar, Thekkady, Alleppy </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>
                        

                                               <!--<//Tour 5>-->

                            <a href="couple-getaway-in-sikkim-tour.html" class="tour_item" style="background-image: url(img/sikkim-honeymoon-tour-banner-sand-and-peaks.webp)">
                                <div class="tour_item_top">
                                    <p class="country">
                                        <span> Sikkim, India</span>
                                    </p>
                                 
                                </div>
                                <div class="tour_item_bottom">
                                    <h3 class="_title">Honeymoon In Sikkim </h3>
                                    <div class="_info">
                                        <div class="_info_left">
                                            <div class="days">06 Days 05 Nights | </div>
                                            <div class="cost">₹ 64,000 </div>
                                        </div>
                                        <div class="_info_right">
                                          
                                            <p class="rating-text"> Gangtok, Darjeeling, Nathula Pass </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>
                            
                            
                            
                                               <!--<// End of Tours >-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <//Top Tourist Destination In India Section Start>
        
        <div class="destinations">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="title_wrap">
                        <h2 class="title">Top Tourist Destinations In India</h2>
                        <p class="subtitle">
                            These are the the most popular destination in the Indian region. It contains full information starting from weather conditions, best time to visit, how to reach and more.
                        </p>
                       
                    </div>
                    <div class="section_content">
                        <div class="scroll">
                            <a href="himachal-tourism.html" class="destinations_item" style="background-image: url('img/Himachal Pradesh.png')">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Himachal</h3>
                                                <p class="_info">Check Now</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="meghalaya-tourism.html" class="destinations_item" style="background-image: url('img/Meghalaya.png')">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Meghalaya</h3>
                                                <p class="_info">Check Now</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="ladakh-tourism.html" class="destinations_item" style="background-image: url('img/Ladakh.png')">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Ladakh</h3>
                                                <p class="_info">Check Now</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="spiti-valley-tourism.html" class="destinations_item" style="background-image: url('img/Spiti.jpg')">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Spiti</h3>
                                                <p class="_info">Check Now</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <//Top Tourist Destination In India Section Ends>
        
        
    <//Top International Tourist Destination Section Starts>
            <div class="destinations">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="title_wrap">
                        <h2 class="title">Top International Tourist Destinations </h2>
                        <p class="subtitle">
                            These are the the most popular destination in the international region for an Indian tourist. It contains full information starting from weather conditions, best time to visit, how to reach and more.
                        </p>
                       
                    </div>
                    <div class="section_content">
                        <div class="scroll">
                            <a href="maldives-tourism.html" class="destinations_item" style="background-image: url('img/Maldives-Tourism.jpg')">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Maldives</h3>
                                                <p class="_info">Check Now</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="dubai-tourism.html" class="destinations_item" style="background-image: url('img/Dubai-Tourism.jpg')">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Dubai</h3>
                                                <p class="_info">Check Now</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="singapore-tourism.html" class="destinations_item" style="background-image: url('img/Singapore-Tourism.jpg')">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Singapore</h3>
                                                <p class="_info">Check Now</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="bali-tourism.html" class="destinations_item" style="background-image: url('img/Bali-Tourism.jpg')">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Bali</h3>
                                                <p class="_info">Check Now</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
 <//Top International Tourist Destination Section Ends>  
 
       <div class="destinations">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="title_wrap">
                        <h2 class="title">Let Us Help You</h2>
                        <p class="subtitle">
                            Group tours are not for everyone, sometimes all you want is a distinctive tour plan that is made just for you, right? So, tell us where you would like to go and we’ll set you up with a travel expert to plan your getaways.
                        </p>
                        <div class="controls">
                            <a href="travel-list-image-header.html" class="link">View All Destinations</a>
                        </div>
                    </div>
                     </div>
      </div>
      </div>
    
        <div class="search-tour">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="search-form" style="padding-bottom: 70px;">
                        <div class="destination-col">
                            <div class="label">Destination</div>
                            <div class="select_wrap">
                                 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                                <select name="state" style="padding-top: 15px;">
          <option value="Destination" disabled selected>Destination</option>
          <option value="andaman-and-nicobar">Andaman And Nicobar</option>                                  
          <option value="andhra-pradesh">Andhra Pradesh</option>
          <option value="arunachal-pradesh">Arunachal Pradesh</option>
          <option value="assam">Assam</option>
          <option value="bihar">Bihar</option>
          <option value="chandigarh">Chandigarh</option>
          <option value="chhattisgarh">Chhattisgarh</option>
          <option value="delhi">Delhi</option>
          <option value="daman-and-diu">Daman and Diu</option>
          <option value="goa">Goa</option>
          <option value="gujrat">Gujrat</option>
          <option value="haryana">Haryana</option>
          <option value="himachal-pradesh">Himachal Pradesh</option>
          <option value="jharkhand">Jharkhand</option>
          <option value="jammu-and-kashmir">Jammu and Kashmir</option>
          <option value="karnataka">Karnataka</option>
          <option value="kerala">Kerala</option>
          <option value="lakshadweep">Lakshadweep</option>
          <option value="ladakh">Ladakh</option>
          <option value="madhya-pradesh">Madhya Pradesh</option>
          <option value="maharashtra">Maharashtra</option>
          <option value="manipur">Manipur</option>
          <option value="meghalaya">Meghalaya</option>
          <option value="mizoram">Mizoram</option>
          <option value="nagaland">Nagaland</option>
          <option value="odisha">Odisha</option>
          <option value="punjab">Punjab</option>
          <option value="puducherry">Puducherry</option>
          <option value="rajasthan">Rajasthan</option>
          <option value="sikkim">Sikkim</option>
          <option value="tamil-nadu">Tamil Nadu</option>
          <option value="telangana">Telangana</option>
          <option value="tripura">Tripura</option>
          <option value="uttar-pradesh">Uttar Pradesh</option>
          <option value="uttarakhand">Uttarakhand</option>
          <option value="west-bengal">West Bengal</option>
          <option value="international">International</option>
                                 
                                </select>
                            </div>
                        </div>
                        <div class="date-col">
                            <div class="label">Check In</div>
                            <div class="date_div">
                                <input type="text" class="js_calendar desctop-input">
                                <input type="date" class="mobile-input">
                                <div class="day">21</div>
                                <div class="date_div_right">
                                    <div class="month">December</div>
                                    <div class="year">2019</div>
                                </div>
                            </div>
                        </div>
                        <div class="date-col">
                            <div class="label">Check Out</div>
                            <div class="date_div">
                                <input type="text" class="js_calendar desctop-input">
                                <input type="date" class="mobile-input">
                                <div class="day">21</div>
                                <div class="date_div_right">
                                    <div class="month">December</div>
                                    <div class="year">2019</div>
                                </div>
                            </div>
                        </div>
                        <div class="num-col">
                            <div class="label">Adult</div>
                            <div class="num_wrap">
                                <div class="buttons">
                                    <button class="plus"></button>
                                    <button class="minus"></button>
                                </div>
                                <input type="number" class="val js_num" value="3" min="0" max="99">
                            </div>
                        </div>
                        <div class="num-col last">
                            <div class="label">Children</div>
                            <div class="num_wrap">
                                <div class="buttons">
                                    <button class="plus"></button>
                                    <button class="minus"></button>
                                </div>
                                <input type="number" class="val js_num" value="2" min="0" max="99">
                            </div>
                        </div>
                    <button class="btnsubmit">
                        <input type="submit" class="btn button stete-submit" style="color: white;border: none;font-size: large;" name="state-submit">
                    </button>
                     </form>
                    </div>
                </div>
            </div>
        </div>
      
      
        <div class="blog">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="title_wrap">
                        <h2 class="title">Recent Blog Posts</h2>
                        <p class="subtitle">
                            Read through a vast variety of travel hacks, guides, and how-to's. 
                        </p>
                        <div class="controls">
                            <a href="blog-right-sidebar.html" class="link">All Blog Posts</a>
                        </div>
                    </div>
                    <div class="section_content">
                        <a href="https://sandandpeaks.com/blogs/index.php/2022/04/27/10-things-you-can-do-on-your-honeymoon/ " class="blog_item">
                            <div class="blog_item_top" style="background-image: url(img/things-that-you-can-do-on-your-honeymoon.webp);">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="tags">
                                                <div class="tag red">Honeymoon</div>
                                                <div class="tag green">Top 10</div>
                                            </div>
                                            <h3 class="_title">
10 Things You Can Do On Your Honeymoon                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </div>
                          <!--  <div class="blog_item_bottom">
                                <div class="author">
                                    <div class="userpic">
                                        <img src="img/demo-bg.jpg" alt="">
                                    </div>
                                    <div class="date">21.09.2019 by Maya Delia</div>
                                </div>
                                <p class="text">
                                    The Secret To Planning a Perfect Road Trip
                                </p>
                            </div>-->
                        </a>

                        <a href="https://sandandpeaks.com/blogs/index.php/2022/04/27/here-are-some-best-honeymoon-destinations-in-india/" class="blog_item">
                            <div class="blog_item_top" style="background-image: url(img/best-places-for-honeymoon-in-india.webp);">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="tags">
                                                <div class="tag red">Honyemoon</div>
                                                <div class="tag green">Best Places</div>

                                            </div>
                                            <h3 class="_title">
Here Are Some Best Honeymoon Destinations In India
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </div>
                           <!-- <div class="blog_item_bottom">
                                <div class="author">
                                    <div class="userpic">
                                        <img src="img/demo-bg.jpg" alt="">
                                    </div>
                                    <div class="date">20.09.2019 by Victor Shibut</div>
                                </div>
                                <p class="text">
                                   What Is A Backpacking Adventure And How To Plan One?
                                </p>
                            </div>-->
                        </a>

                        <a href="https://sandandpeaks.com/blogs/index.php/2022/04/27/what-is-workation-and-why-you-should-have-one/ " class="blog_item">
                            <div class="blog_item_top" style="background-image: url(img/what-is-workation-blog.webp);">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="tags">
                                                <div class="tag red">Workcation</div>
                                                <div class="tag green"> Guide</div>
                                            </div>
                                            <h3 class="_title">
What Is Workation And Why You Should Have One?                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </div>
                           <!-- <div class="blog_item_bottom">
                                <div class="author">
                                    <div class="userpic">
                                        <img src="img/demo-bg.jpg" alt="">
                                    </div>
                                    <div class="date">21.09.2019 by Maya Delia</div>
                                </div>
                                <p class="text">
                                    Why Workation The New Normal?
                                </p>
                            </div>-->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
     <!--Start of Newsletter-->  
        <div class="subscribe_section">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="subscribe_block" style="background-image: url(img/offers.jpg)">
                        <div class="left">
                            <h2 class="_title">Sign Up For Offers</h2>
                            <p class="_subtitle"> Looking for best prices, deals and offers before everyone else? Subscribe Now.</p>
                        </div>
                        <div class="right">
                         <form action="action2.php" method="POST" autocomplete="off">
                            <div class="input_wrap">
                             <input type="email" name="email" id="email" placeholder="Email" class="input" required>
                             </div>
                            <button class="btn btn-success submit button" id="bq"><span>Subscribe</span></button>
                            
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <!--end of Newsletter-->
    
        
      <my-footer></my-footer>
        

   
   

   <div class="popup1">
            <button class="cross" id="close1">&times;</button>
            <div class="container1">  
      <form id="contact1" action="action1.php" method="POST" autocomplete="off">
        <h3>Query Form</h3>
        <h4>We will contact you in next 30 miniutes.</h4>
        <fieldset>
            <h5>Mobile no.</h5>
          <input type="tel" pattern="[0-9]{10}" name="contact" id="contact" placeholder="Contact" class="input" required>
        </fieldset>

        <fieldset>
         <!--  <button type="submit" class="btn btn-success submit button" id="bq"><span>Subscribe</span></button> -->
               <button type="submit" class="btn btn-success submit button" id="bq"><span>Subscribe</span></button>
        </fieldset>
      </form>
      <div class="message">
                <div class="success" id="success">
                    Your Message Successfully Sent!
                </div>
                <div class="danger" id="danger">Feilds Can't be Empty!</div>
            </div>
        </div>
    </div>
        </div>
        <!--Script-->
        <script type="text/javascript">
    window.addEventListener("load", function(){
        setTimeout(
            function open(event){
                document.querySelector(".popup1").style.display = "block";
            },
            2000 
        )
    });


    document.querySelector("#close1").addEventListener("click", function(){
        document.querySelector(".popup1").style.display = "none";
    });
        </script>





<div class="popup book-now-popup" id="book-now1">
          <div class="scroll">
              <div class="scroll_wrap">
                  <div class="popup-head">
                      <div class="title">Honeymoon Booking</div>
                  </div>
                  <div class="popup-body">
                      <div class="form">
                        <form action="honeymoon.php" method="POST" autocomplete="off">
                          <input type="text"  name="username" id="username" placeholder="Your name" class="input" required>
                          <input type="email" name="email" id="email" placeholder="Your Email" class="input" required>
                          <input type="tel" pattern="[0-9]{10}" name="contact" id="contact" placeholder="Contact" class="input" required>
                          <button type="submit" class="btn btn-success submit button" id="bq">Book Now | <b>$356</b></button>
                      </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="close"></div>
      </div>
<div class="popup book-now-popup" id="book-now2">
          <div class="scroll">
              <div class="scroll_wrap">
                  <div class="popup-head">
                      <div class="title">International Getaway Booking</div>
                  </div>
                  <div class="popup-body">
                      <div class="form">
                        <form action="international_gataway.php" method="POST" autocomplete="off">
                          <input type="text"  name="username" id="username" placeholder="Your name" class="input" required>
                          <input type="email" name="email" id="email" placeholder="Your Email" class="input" required>
                          <input type="tel" pattern="[0-9]{10}" name="contact" id="contact" placeholder="Contact" class="input" required>
                          <button type="submit" class="btn btn-success submit button" id="bq">Book Now | <b>$356</b></button>
                      </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="close"></div>
      </div>
<div class="popup book-now-popup" id="book-now3">
          <div class="scroll">
              <div class="scroll_wrap">
                  <div class="popup-head">
                      <div class="title">Company Retreat Booking</div>
                  </div>
                  <div class="popup-body">
                      <div class="form">
                        <form action="company_retreat.php" method="POST" autocomplete="off">
                          <input type="text"  name="username" id="username" placeholder="Your name" class="input" required>
                          <input type="email" name="email" id="email" placeholder="Your Email" class="input" required>
                          <input type="tel" pattern="[0-9]{10}" name="contact" id="contact" placeholder="Contact" class="input" required>
                          <button type="submit" class="btn btn-success submit button" id="bq">Book Now | <b>$356</b></button>
                      </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="close"></div>
      </div>
<div class="popup book-now-popup" id="book-now4">
          <div class="scroll">
              <div class="scroll_wrap">
                  <div class="popup-head">
                      <div class="title">Family Booking</div>
                  </div>
                  <div class="popup-body">
                      <div class="form">
                        <form action="family_vacation.php" method="POST" autocomplete="off">
                          <input type="text"  name="username" id="username" placeholder="Your name" class="input" required>
                          <input type="email" name="email" id="email" placeholder="Your Email" class="input" required>
                          <input type="tel" pattern="[0-9]{10}" name="contact" id="contact" placeholder="Contact" class="input" required>
                          <button type="submit" class="btn btn-success submit button" id="bq">Book Now | <b>$356</b></button>
                      </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="close"></div>
      </div>
<div class="popup book-now-popup" id="book-now5">
          <div class="scroll">
              <div class="scroll_wrap">
                  <div class="popup-head">
                      <div class="title">Family Booking</div>
                  </div>
                  <div class="popup-body">
                      <div class="form">
                        <form action="family_vacation.php" method="POST" autocomplete="off">
                          <input type="text"  name="username" id="username" placeholder="Your name" class="input" required>
                          <input type="email" name="email" id="email" placeholder="Your Email" class="input" required>
                          <input type="tel" pattern="[0-9]{10}" name="contact" id="contact" placeholder="Contact" class="input" required>
                          <button type="submit" class="btn btn-success submit button" id="bq">Book Now | <b>$356</b></button>
                      </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="close"></div>
      </div>
      <div class="popup success-popup" id="contact-us-success">
          <div class="scroll">
              <div class="scroll_wrap">
                  <div class="popup-head">
                      <div class="title">Success</div>
                  </div>
                  <div class="popup-body">
                      <div class="subtitle">
                          Your message was successfully sent. We will contact you shortly
                      </div>
                  </div>
              </div>
          </div>
          <div class="close"></div>
      </div>
            
        
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/lightgallery.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/hammer.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>