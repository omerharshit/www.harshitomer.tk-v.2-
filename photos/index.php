<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="favicon.png" type="image/favicon">
    <link rel="icon"  type="image/png"  href="/index.html/photos/man.png" />
    <title>Harshit Omer|Portfolio</title>
    <meta name="author" content="Harshit Omer">
    <meta property="og:url" content="http://harshitomer.ml"/>
    <meta property="og:site_name" content="Harshit omer(harshitomer)"/>
    <meta property="og:title" content="Harshit Omer(harshitomer)"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Harshit Omer is an undergraduate student, pursuing bachelor of technology degree in Computer Science and Engineering. I expect to graduate with a Bachelors degree in May 2019. I love to play with web technologies and create great user experiences. Feel free to contact me. "/>
    <meta name="description" content="Harshit Omer is an undergraduate student, pursuing bachelor of technology degree in Computer Science and Engineering. I expect to graduate with a Bachelors degree in May 2019. I love to play with web technologies and create great user experiences. Feel free to contact me. ">
    <meta name="keywords" content="Harshit Omer, Harshit omer,harshitomer, harshit omer, Harshit Omer, harshitomer1997,  web devloper, harshit omer srmcem, web developer, harshit lucknow, Github, pyhton, javascript, html5, css3, API, developer,  Notification Panel,  php , Abhivyakti2k17, Laptop selfi, Gantavya2k17, CS 2019, Writter, Philosophy,Sudoko,Octo Game,Cube,Asphalt, hackerrank,LinkedIn,Gmail">
    <link rel="stylesheet" href="/index.html/CSS/web.css" type="text/css"  >
    <link rel="stylesheet" href="/index.html/CSS/stars.css" type="text/css">  
    <link rel="stylesheet" href="/index.html/CSS/forkit.css" type="text/css">
    <link rel="stylesheet" href="/index.html/CSS/roll.css" type="text/css">
    <link rel="stylesheet" href="/index.html/CSS/flipside.css" type="text/css">
    <link rel="stylesheet" href="/index.html/CSS/v2style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css" media="screen" title="no title" charset="utf-8">
     <link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
  <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-96143103-1', 'auto');
			ga('send', 'pageview');
	</script>
</head>
  
  <body style="background-color:black" >
  <!-- The ribbon -->
  <a class="forkit" data-text="My Github" data-text-detached="omerharshit" href="https://github.com/omerharshit"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://a248.e.akamai.net/camo.github.com/e6bef7a091f5f3138b8cd40bc3e114258dd68ddf/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub"></a>
   <script src="/index.html/js/forkit.js"></script>
  <script type="text/javascript">
   window.onload = function() {
    alert(" Harshit Omer's Portfolio is coming!!");
   }
   window.onunload = function(){
    alert('GoodBye!!');
   }
 </script>
  <div class="bordertop"  style="width:100%; position: fixed; height: 7px; background-color: white;"></div>
   <div style="max-height:100%">
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
  </div>  
      <div class="shift"  style="color:white; font-size: 20px; text-align: center;"> 
<?php
date_default_timezone_set("Asia/Kolkata");

$hour=date("H");
if ($hour < 12)
{
 echo "Good Morning";
}
if($hour >= 12 and $hour < 17)
{
  echo "Good Afternoon";
}
if($hour >= 17 and $hour < 20)
{
  echo "Good Evening";
}
if($hour > 20)
{
  echo "Good Night";
}
?>

</div> 
<style type="text/css">
	img.image.photo.containers:hover{
		align: middle;
	}
</style>
   <div class="main-section">
        <div class="containers" style="border-color: white;">
         <div class="photo" style="border-color: white;">
          <div class="image" style="border-color: white;">
            <img src="/index.html/photos/HarshitOmer.jpg" alt="Harshit Omer" style="border-color: white" />
          </div>
          </div>
          
          
          <span class="set" >I'm </span><span class="malarkey" ></span><span id="hide" >|</span> 
           
            <script src="/index.html/js/malarkey.min.js" charset="utf-8"></script>
    <script>
    var elem = document.querySelector('.malarkey');
    var opts = {
      typeSpeed: 60,
      deleteSpeed: 60,
      pauseDelay: 2000,
      loop: true,
      postfix: ''
    };
    var m = malarkey(elem, opts).type(' a Geek.').pause().delete()
                                .type(' a web devloper.').pause().delete()
                                .type(' a programmer.').pause().delete();
                                // .type('have a bookworm.')pause().delete()
                                //.type('nerd.')pause().delete()
                                //.type('Hacker')pause().delete()
                                
    document.addEventListener('click', function() {
      if (m.isRunning()) {
        m.triggerPause();
        elem.style.color = 'red';
      } else {
        m.triggerResume();
        elem.style.color = 'black';
      }
    });
</script>
<script>
var supports3DTransforms =  document.body.style['webkitPerspective'] !== undefined || 
                            document.body.style['MozPerspective'] !== undefined;

function linkify( selector ) {
    if( supports3DTransforms ) {
        
        var nodes = document.querySelectorAll( selector );

        for( var i = 0, len = nodes.length; i < len; i++ ) {
            var node = nodes[i];

            if( !node.className || !node.className.match( /roll/g ) ) {
                node.className += ' roll';
                node.innerHTML = '<span data-title="'+ node.text +'">' + node.innerHTML + '</span>';
            }
        };
    }
}

linkify( '#omer');
</script>
          <div class="gap-20"></div>
          <h1 class="about-me" >
            My_self <a id="omer" href="harshitomer.ml" style="color: red;">Harshit Omer</a>. I’m an Undergraduate student, pursuing bachelor of technology degree in Computer Science and Engineering. I expect to graduate with a Bachelors degree in May 2019. I love to play with web technologies and create great user experiences.
          </h1>
        
        
        <div class="gap-40"></div>
        <div class="social">
          <span class="h2" style="color: white;"><a  class="h2" style="color: red;">I </a>live online here.</span>
          <div class="gap-20"></div>
          <div class="icons-image">
            <ul>
                <li><a href="https://in.linkedin.com/in/harshit-omer-13306412a" target="_blank"><abbr title="Linkedin"><img id="linkedin" src="/index.html/photos/linkedin.jpg" alt="linkedin image" /></abbr></a></li>
                <li><a href="https://github.com/omerharshit1997" target="_blank"><abbr title="Github"><img id="github" src="/index.html/photos/github.png" alt="github image" /></abbr></a></li>
                <li><a href="https://facebook.com/harshit.omer.5" target="_blank"><abbr title="Facebook"><img id="facebook" src="/index.html/photos/facebook.jpg" alt="facebook image"/></abbr></a></li>
                <li><a href="https://www.hackerrank.com/omerharshit1997" target="_blank"><abbr title="Hackerrank"><img id="hackerrank" src="/index.html/photos/hackerrank.jpg" alt="hackerrank image"/></abbr></a></li>
                <li><a href="https://www.quora.com/profile/Harshit-Omer-3" target="_blank"><abbr title="Quora"><img id="quora" src="/index.html/photos/quora.png"  alt="quora image"/></abbr></a></li>
                <li><a href="https://gmail.com/in/harshit-omer-13306412a" target="_blank"><abbr title="GMail"><img id="gmail" src="/index.html/photos/gmail.png" alt="gmail image" /></abbr></a></li>
                <li><a href="https://twitter.com/omerharshit1997" target="_blank"><abbr title="Twitter"><img id="Twitter" src="/index.html/photos/twitter.png" / alt="twitter image"></abbr></a></li>
                <li><a href="https://login.yahoo.com/account/personalinfo?.intl=in&.lang=en-IN&.done=https://in.yahoo.com/&.src=fpctx" target="_blank" ><abbr title="Yahoo"><img id="yahoo" src="/index.html/photos/yahoo.jpg" alt="yahoo image"/></abbr></a></li>
                <li><a href="https://www.coursera.org/account/profile" target="_blank" ><abbr title="Coursera"><img id="coursera" src="/index.html/photos/coursera.jpg" alt="coursera image" /></abbr></a></li>
          </ul>
         </div>

          <div class="gap-10"></div>
         
          <div class="email" style="color: white;">Or Just say <a href="mailto:omerharshit1997@gmail.com" style="color: red;">Hi@email</a></div>
        </div>
        <div class="gap-40"></div>
        <div class="project-head">
           <a><span class="h3">Fun Skills/Projects</span></a>
        </div>
        <div class="row">
          <div class="col s12 m12 l4">
            <div class="row box">
              <h5 class="box-title">1. CODEing</h5>
               <div class="col s12 m12 l12 box-image" >
                <img src="/index.html/photos/code.jpg">
               </div>
            <div class="col s12 m12 l12 box-content" >
                coding is my favorite part time work.I have good command in C,C++,C#,HTML,CSS,Javascript,Python,php.<br>
            </div>
          </div>
         </div>
          <div class="col s12 m12 l4">
            <div class="row box">
            <h5 class="box-title" >2. Sudoku</h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/sudoku2.jpg">
              </div>
              <div class="col s12 m12 l12 box-content" >
                 This is also game of Mind and Time.You can be judge your Accuracy skill by solving SUDUKO.<br>
                </div>
              </div>
            </div>
          <div class="col s12 m12 l4">
            <div class="row box">
              <h5 class="box-title" >3. Solitaire Games</h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/solitaire.jpg">
              </div>
              <div class="col s12 m12 l12 box-content" >
                 solitaire game series have various games. All are superb and interasting. <br>
             </div>
            </div>
           </div>
        </div>
    
        <div class="row">
          <div class="col s12 m12 l4">
            <div class="row box">
            <h5 class="box-title" >4.Cube</h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/cube2.jpg">
              </div>
              <div class="col s12 m12 l12 box-content" >
                  Cube solving is a MIND and CONCEPT Game.Time is the important part of this Game.I can complete whole cube in 2 minutes.<br>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="row box">
              <h5 class="box-title" >5.Asphalt </h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/asphalt.jpg">
              </div>
              <div class="col s12 m12 l12 box-content" >
                 I like racing games NFS and Asphalt are both my favorite. <br>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="row box">
              <h5 class="box-title" >6.Philosophy</h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/philosophy.jpg">
              </div>
              <div class="col s12 m12 l12 box-content" >
                I am  not really a pholosopher.But I want to be like Aristotle so I try to think like him.
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m12 l4">
            <div class="row box">
            <h5 class="box-title" >7. Writter</h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/writter.jpg">
              </div>
              <div class="col s12 m12 l12 box-content">
                I wrote many stories in my school days. Writing poems is my favorite part time work from school days.
              </div>
            </div>
          </div>
         </div>
         </hr> 
         <p class="fp" >Future Projects</p>
         <div style="max-height:100%">
         <div id='stars'></div>
         <div id='stars2'></div>
         <div id='stars3'></div>
         </div>
         <div class="row">
          <div class="col s12 m12 l4">
            <div class="row box">
              <h5 class="box-title">8. Octo Game</h5>
               <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/octogame.png">
              </div>
              <div class="col s12 m12 l12 box-content" >
                Simple strategy game more like clash of clans but in 1D, built using Php
                and Mysql and cron jobs for updatation. <br>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="row box">
              <h5 class="box-title" >9. Abhivyakti 2k18</h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/abhivyakti.jpg">
              </div>
              <div class="col s12 m12 l12 box-content" >
                devloping a website for my colleges cultural fest named Abhivyakti. 
                <br>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="row box">
              <h5 class="box-title">11. Laptop Selfi</h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/selfie.png">
              </div>
              <div class="col s12 m12 l12 box-content" >
                Capture, edit and share selfie's now with your webcam.
                using getMedia API of chrome i will built this.[WORK ON PROCESS]<br>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m12 l4">
            <div class="row box">
             <h5 class="box-title">13. Gantavya 2k18</h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/gantavya.png">
              </div>
              <div class="col s12 m12 l12 box-content" >
                Creating a website for my colleges technical fest named Gantavya 2k18. 
                I am devloping this website using Php and JQuery. <br>
               </div>
                 <div class="button-box">
                <a class="wonder-links" href="https://github.com/omerharshit" target="_blank">Code</a>
                <a class="wonder-links wonder-link-right" href="/index.html">Demo</a>
              </div>
            </div>
          </div>
        
         <div class="col s12 m12 l4">
            <div class="row box">
             <h5 class="box-title" >14. Notification Panel</h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/notification_panel.png">
              </div>
              <div class="col s12 m12 l12 box-content" >
                Created a software using javascript which gives notification on your PC on a single click.
                I hope you all will like it. <br>
               </div>
               <div class="button-box">
                <a class="wonder-links" href="https://github.com/omerharshit/Notification_Panel" target="_blank" >Code</a>
                <a class="wonder-links wonder-link-right" href="/index.html/HTML/Notification_Panel/index.php" target="_blank" >Demo</a>
              </div>
            </div>
          </div>
           <div class="col s12 m12 l4">
            <div class="row box">
             <h5 class="box-title" >15. Online Calculator </h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/calci.png">
              </div>
              <div class="col s12 m12 l12 box-content" >
                Created a online calculator which used for accounting.that calculator is created in javascript language.
                I hope you all will like it. <br>
               </div>
               <div class="button-box">
                <a class="wonder-links" href="https://github.com/omerharshit/Calculator" target="_blank" >Code</a>
                <a class="wonder-links wonder-link-right" href="/index.html/HTML/Calculator/index.html" target="_blank" >Demo</a>
              </div>
            </div>
          </div>
        </div>  
        
         <div class="row">
          <div class="col s12 m12 l4">
            <div class="row box">
             <h5 class="box-title">16. Down-for-everyone-or-for-me</h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/DFEOFM.png">
              </div>
              <div class="col s12 m12 l12 box-content" >
                Creating a webpage using PHP API which tells that given URL available in internet or not. <br>
               </div>
                 <div class="button-box">
                <a class="wonder-links" href="https://github.com/omerharshit/Down-for-everyone-or-for-me" target="_blank">Code</a>
                <a class="wonder-links wonder-link-right" href="/index.html/HTML/Down-for-everyone-or-for-me/index.php" target="_blank">Demo</a>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l4">
            <div class="row box">
             <h5 class="box-title">17.My Website V.1</h5>
              <div class="col s12 m12 l12 box-image">
                <img src="/index.html/photos/website_v.1.png">
              </div>
              <div class="col s12 m12 l12 box-content" >
               My first website created using HTML,CSS,PHP,JAVASCRIPT and PHYTHON languages. <br>
               </div>
                 <div class="button-box" >
                <a class="wonder-links"  href="https://github.com/omerharshit/My-website-v.1" target="_blank">Code</a>
                
                <a class="wonder-links wonder-link-right" href="/index.html/HTML/My-website-v.1/My_Website_v.1.php" target="_blank" >Demo</a>
                </div>
                <style type="text/css">
                .wonder-links {
  color: black;
  background-color: black;
  padding: 6px 15px ;
  margin-top: 10px;
  background: transparent;

 
}
.wonder-link-right {
  margin-right:30px;
  background: transparent;
}
.button-box {
  position: relative;
  width: calc(100% - 10px);
 margin-top: 20px;
 margin-bottom: 10px;
  padding-left: 10px;
  margin-right: 40px;
  background: transparent;
}
               </style>
           
            </div>
          </div>
          </div>
        <div class="center" style="border-top:1px solid #bbb;padding:10px">
            <a href="http://madewithlove.org.in" target="_blank" style="text-decoration:none; text-align:center; color: white;">Made with <span style="color: #e74c3c">&hearts;</span> in India</a>
        </div>
      </div>
    </div>
    <script>
var supports3DTransforms =  document.body.style['webkitPerspective'] !== undefined || 
                            document.body.style['MozPerspective'] !== undefined;

function linkify(selector ) {
    if( supports3DTransforms ) {
        
        var nodes = document.querySelectorAll( selector);

        for( var i = 0, len = nodes.length; i < len; i++ ) {
            var node = nodes[i];

            if( !node.className || !node.className.match( /roll/g ) ) {
                node.className += ' roll';
                node.innerHTML = '<span data-title="'+ node.text +'">' + node.innerHTML + '</span>';
            }
        };
    }
}

linkify( 'a.gol' );
</script>
<div style="text-align: center;" target="_blank">
 
   <button style="margin-left: 20px; padding-left: 10px; padding-right: 10px; padding-top: 5px; padding-bottom: 5px; font-size: 20px; background-color: black; color:white; " target="_blank"  href="/index.html/PHP/reveal.php" >
   <a class="gol" href="/index.html/PHP/reveal.php" target="_blank" style="color: red;
   font-size: 30px;" target="_blank" > Project Presentaion</a> </button>
    </div>

  
    <script src="/index.html/js/flipside.js"  charset="utf-8"></script> 
 
     <script src="/index.html/js/jquery.min.js" charset="utf-8"></script>
    <script src="/index.html/js/malarkey.min.js" charset="utf-8"></script>
    <script src="/index.html/js/script.js" charset="utf-8"></script>
</div>
</body>
</html>
 