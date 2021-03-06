<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="icon.png"
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content = "IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="animate.min.css">
    <link rel="stylesheet" href="../dist/aos.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Neel Bhavsar</title>

    <style type = "text/css">

      body{
        margin-top: 55px;
      }

      .jumbotron {
        background-image: url("background.jpeg");
        text-align: center;
        height:400px;
        margin-top: 20px;
      }

      .jumbotron2 {
        margin-top: 60px;
        margin-left: 50px;
        margin-right: 50px;
        text-align: center;
        height:300px;
      }

      .jumbotron3{
        text-align: center;
        margin-top: 50px;

      }

      .centered {
        justify-content: center;
        align: center;
        display: block; margin-left: auto; margin-right: auto;
      }
      .display-5 {
        font-size: 40px;
        text-align: center;

      }

      .display-6 {
        margin-top: 140px;
      }
      .display-1 {
        color: white;
      }

      .text-55 {
        color;white
      }
      #email {}

      TM{  opacity:1;
  				position:relative;
  				animation-name: Talha;
  				animation-duration: 2s;
  				animation-iteration-count: infinite;
  				animation-delay:1s;
        }

        .col-sm-4 {
          text-align: center;
        }

        .lightGreen {
          margin-top: -30px;
          color: #90EE90;}

            @keyframes Talha {
                0% {opacity: 0.5;}
                50% {opacity: 1; }
                100% {opacity: 0.5;}
              }


      .cardpictures img {
      -webkit-transform: scale(1);
      -webkit-transition-timing-function: ease-out;
      -webkit-transition-duration: 500ms;
      }

      .cardpictures img:hover{
      -webkit-transform: scale(.5);
      -webkit-transition-timing-function: ease-out;
      -webkit-transition-duration: 500ms;
      }

      .title1 {
        text-align: center;

      }

      .imgBorder{
        border-radius: 10%;
        width:225px;
        height: 125px;
      }

      .imgBorder2{
        border-radius: 3%;
      }

      .subheading{
        text-align: center;
      }

      .card{
        background-color:#c5dce5;
        margin-top: 40px;
        height:500px;
        width: 310px;
        border-radius:1%;
        border-color: black;
        border-width: 1px;
      }

      .card-img-top{
        align-self: center;
        position: relative;
      }

      .card-title {
        text-align: center;
      }
      .form-group{
        margin-left: 37%
      }

      .text-center {
        text-align: center;
      }



      .item img {
        width:65%;
        height:420px;
        margin: auto;
        border-radius: 1%;}

        .changeColour{
        -webkit-animation: color-change 4s infinite;
        -moz-animation: color-change 4s infinite;
        -o-animation: color-change 4s infinite;
        -ms-animation: color-change 4s infinite;
        animation: color-change 4s infinite;
        }

    @-webkit-keyframes color-change {
        0% { color: #0022C1; }
        50% { color: black; }
        100% { color: #0022C1; }
    }
    @-moz-keyframes color-change {
        0% { color: #0022C1; }
        50% { color: black; }
        100% { color: #0022C1; }
    }
    @-ms-keyframes color-change {
        0% { color: #0022C1; }
        50% { color: black; }
        100% { color: #0022C1; }
    }
    @-o-keyframes color-change {
        0% { color: #0022C1; }
        50% { color: black; }
        100% { color: #0022C1; }
    }
    @keyframes color-change {
        0% { color: #0022C1; }
        50% { color: black; }
        100% { color: #0022C1; }
    }

    .container24 {
  position: relative;
  width: 50%;
}

    .image {
  opacity: 1;
  display: block;
  transition: .5s ease;
  backface-visibility: hidden;
  border-radius: ;
  width:225px;
  height: 125px;


}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container24:hover .image {
  opacity: 0.3;
}

.container24:hover .middle {
  opacity: 1;
}

.text {
  color: black;
  font-size: 16px;
  text-align: center;
  position: relative;


}


    </style>


  </head>
  <body data-spy = "scroll" data-target = "#navbar-example" data-offset="120" data-aos-easing="ease" data-aos-duration="800" data-aos-delay="0">

    <nav style = " "class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">BACK TO TOP</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">PORTFOLIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<section id="page-top">

</section>

<section id="about">

  <div class="jumbotron">
    <p data-aos="zoom-out" data-aos-delay="500"style="font-size: 80px; color:white;animation-duration:2s;
    animation-iteration-count:infinite;animation-delay:1s;
"class="lead pulse mb-5 green pb-5 aos-init aos-animate" class = "lightGreen">Neel Bhavsar</p>
    <p data-aos="zoom-out" data-aos-delay="500" style="color:white;animation-duration:2s;animation-iteration-count:infinite;animation-delay:1s;"
    class="lead pulse mb-5 lightGreen pb-5 aos-init aos-animate" class = "text-55">A Web Developer.<br>An Engineering student.</p>

    <p class="lead"></p>
      <p class="lead"></p>
  </div>
<hr class="my-2"><br>

    <div class = "container">
      <div class="jumbotron2">
      <h1 class="display-5">Hello.</h1><br>
      <p class="lead">I am a second year Computer Engineering student at <strong class = "changeColour">Ryerson University</strong>, very passionate learning about the new leading technologies. I have worked with various app, web development as well as hardware digital systems. Every day, I aspire to learn something new and try to apply the same knowledge in my future projects and work. Alongside, I have experience in the corporate world so I wish to combine technical and financial experiences as a technocommercial candidate.</p>

      </div>

      <!-- <a class="btn btn-primary btn-lg" href="#services" role="button">Learn more</a> -->

    </div>

    </section>


<section id="services">

  <div class="jumbotron3">
    <br><br><hr class="my-2">
    <h1 class="display-6">My Technical Skills</h1>
  </div>
  <br>
    <div class = "container">
<br>
        <div class = "row">

            <div class = "col-sm-4">
              <div class="card" >
                <img style = "margin-top: 25px;width:100px;"src="skills.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <hr class="my-2" style = "border-color:black;"><br>
                    <h4 class="card-title">Programming Languages</h4><br>
                      <div style = "text-align:center">
                      <ul >Java SE</ul>
                      <ul >C++, C#, C</ul>
                      <ul >JavaScript</ul>
                      <ul >HTML5, CSS</ul>
                      <ul >SQL, PHP</ul>
                      <ul >Bootstrap4</ul>
                      <ul >Git  </ul>
                      </div>
                </div>
              </div>
            </div>


            <div class = "col-sm-4">
              <div class="card" >
                <img style = "text-align: center; margin-top:25px;width:100px;"src="skills2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <hr class="my-2" style = "border-color:black;"><br>
                    <h4 class="card-title">Softwares</h4><br>

                      <ul >Visual Studio</ul>
                      <ul >Visual Basic Applications</ul>
                      <ul >Android Studio</ul>
                      <ul >Adobe Illustrator</ul>
                      <ul >Microsoft Office Suite</ul>
                      <ul >AutoCAD</ul>
                      <ul >MATLAB</ul>

                </div>
              </div>
            </div>

            <div class = "col-sm-4">
              <div class="card" >
                <img style = "margin-top:25px;width:100px;"src="skills3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <hr class="my-2" style = "border-color:black;"><br>
                    <h4 class="card-title">Engineering Equipment</h4></br>
                      <ul >Oscilliscopes</ul>
                      <ul >Multi-meter</ul>
                      <ul >Function Generator</ul>
                      <ul >CPLD Chips</ul>
                      <ul >Micro-controllers</ul>
                </div>
              </div>
            </div>


        </div>


          <!-- <a class="btn btn-primary btn-lg" href="#contact" role="button">Learn more</a> -->

    </div>

</section>

<section id="portfolio">

      <div class="container mt-2">
          <br><br><br><hr class = "my-2"><br>
        <h1 class="display-5">Projects</h1><br>


        <div class = "row">

          <div class = "col-sm-4">
            <div class = "cardpictures">
               <a href=> <img class = "imgBorder" src="KPMG.jpeg" width="250px;"/></a>
               <div>
                  <h3 class = "title">KPMG Ideation Challenge 2019</h3>
                  <p class = "title1">Working with AI and Cognitive Computing system utilizing
                    weather API, traffic API and ABS (Anti-braking System) data to assist the driver with road
                    guidance on extreme weather conditions.</p>
               </div>

            </div>
          </div>


          <div class = "col-sm-4">
            <div class="cardpictures">
               <a href="https://frontierofhealthcare.com"><img class = "imgBorder" src="conference.jpg" width="250px;"/></a>
               <div>
                  <h3 class = "title">Frontier of Healthcare Digital-Tech Conference</h3>
                  <p class = "title1">Used a variety of HTML5, CSS3 and JavaScript to create a website for an upcoming conference. Responsbile for regularly maintaining it.</p>
               </div>
            </div>
          </div>


          <div class = "col-sm-4">
            <div class = "cardpictures">
               <a href="http://awol.tech/Baitul/"> <img class = "imgBorder" src="Masjid.png" width="250px;" height = "140px;"/></a>
               <div>
                  <h3 class = "title">Danforth Community Centre</h3>
                  <p class = "title1">Built a website for local mosque incorporating live changes to prayer times with usage of open source code as times may vary. Used a combination of PHP, Javascript, HTML5 and CSS3 to create a layout for website.
              </div>
            </div>
          </div>

        </div>


    <div class = "row">

          <div class = "col-sm-4">
            <div class = "cardpictures">
               <a href="http://awol.tech/suicide/"> <img class = "imgBorder" src="1.jpg" width="250px;"/></a>
               <div>
                  <h3 class = "title">Web Application - Chatbot API</h3>
                  <p class = "title1">Built an automated bot system using HTML5, CSS, Bootstrap and JS creating using Google chatbot APIs that takes a collection of phrases based on an input received from user end.</p>
               </div>
            </div>
          </div>

          <div class = "col-sm-4">
            <div class = "cardpictures">
               <a href="https://github.com/neelbhavsar99/CryptoConvert"> <img class = "imgBorder" src="3.png" width="250px;" height = "140px;"/></a>
               <div>
                  <h3 class = "title">Crypo Convert - App Development</h3>
                  <p class = "title1">Built an application with Android Studio on the Android App Store that implements crypto conversion with live rate changes with the use of object oriented programming.
              </div>
            </div>
          </div>



          <div class = "col-sm-4">
            <div class="cardpictures">
               <a href="https://github.com/neelbhavsar99/MyUnityGame"><img class = "imgBorder" src="2.jpg" width="250px;"/></a>
               <div>
                  <h3  class = "title1">Unity 2D Platformer Game Ecosystem</h3>
                  <p  class = "title">Used object oriented programming on Unity game engine with C# to design, develop and incorporate a virtual 2D platformer system, allowing up to two player input, integrated polymorphism with inheritance of nested classes, advanced methods on private and public domain to render a virtual model of the prototype</p>
               </div>
            </div>
          </div>




    </div>

    <div class = "row">


      <div class = "col-sm-4">
        <div class = "cardpictures">
           <a href="https://github.com/neelbhavsar99/Simple-General-Purpose-Processor"> <img class = "imgBorder" src="CEchip.jpg" width="250px;"/></a>
           <div>
              <h3 class = "title">Simple General Purpose Processor</h3>
              <p class = "title1">Made a GPU Unit using ALU, Control Unit, two latches, Finite State Machine, and a 4x16 Decoder. Displayed it using Block Schematic File and SSEG display on an Alterra Chip.</p>
           </div>
        </div>
      </div>

    </div>

   </div>

<div class = "container">
  <div class = "row">
     <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
  </div>
</div>
    </div>




    <br><br><br><hr class = "my-2"><br>

  <h1 class="display-5">Extra Curriculars</h1><br>




</section>
    <br><hr class = "my-2"><br>


<section id="contact">
  <div class="text-center" style="position:relative;top:-50px">
      <br><br><h1 class="display-5">Contact Me</h1><br>
    <img src ="neelB copy.jpg" width = "300px;" style = "border-radius:10%; border-width:50px">
  </div>
    <div class = "container">

      <p style = "text-align:center;">Want to get in touch? You can contact me for any inquiries!</p>

    </div>
    <div class="text-center" style="position:relative;top:-50px">
      <br><br><br><br>

    <div class = "footerlink center m-2">
      <a href="https://www.linkedin.com/in/neelbhavsar/" target="_blank"><button style="cursor:pointer;" type="button" class="btn btn-outline-info"><i class="fab fa-linkedin"></i> LinkedIn</button></a>
      <a href="mailto:neelbhavsar102@gmail.com"><button style="cursor:pointer;" type="button" class="btn btn-outline-danger"><i class="far fa-envelope"></i> Mail</button></a>
      <a href="https://github.com/neelbhavsar99"><button style="cursor:pointer;" type="button" class="btn btn-outline-success"><i class="far fa-github"></i> Github</button></a>
      <br><br><br><div class="text-black mt-3">Neel Bhavsar <span class="bold">©2019</span></div>
    </div>
  </div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
