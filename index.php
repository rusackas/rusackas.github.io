<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
  <!-- title and meta -->
  <meta charset="utf-8">
  <meta content="width=device-width,initial-scale=1.0" name="viewport">
  <meta content="description" name="In this tutorial, we take a look at a beautiful parallax scrolling effect in the simplest of ways, with stationary backgrounds and scrolling content.">

  <title>Evan Rusackas</title>

  <!-- css -->
  <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative|Raleway:400,300' rel='stylesheet' type='text/css'>
<!--
  <link rel="stylesheet" type="text/css" href="css/slideshow.css" />
  <link rel="stylesheet" href="bower_components/tipsy/src/stylesheets/tipsy.css" type="text/css" />
  <link rel="stylesheet" href="bower_components/colorbox/example4/colorbox.css" type="text/css" />
  <link rel="stylesheet" href="css/coverflow.css">
-->
  <link rel="stylesheet" href="css/style.css">

  
  <!-- js -->

  <script src="js/min/scripts-min.js"></script>
<!--
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/modernizr/modernizr.js"></script>
  <script src="bower_components/tipsy/src/javascripts/jquery.tipsy.js"></script>
  <script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
  <script src="bower_components/animatescroll/animatescroll.min.js"></script>
  <script src="bower_components/stellar/jquery.stellar.min.js"></script>
  <script src="bower_components/jquery-throttle-debounce/jquery.ba-throttle-debounce.min.js"></script>
  <script src="js/coverflow.js"></script>
  <script src="js/scripts.js"></script>
-->
<!--  <script type="text/javascript" src="http://www.createjs.com/Demos/src/tweenjs/CSSPlugin.js"></script>-->
</head>

<body>
  
<?php 
  $launched = true;
  if($launched == true || $_SERVER['HTTP_HOST'] == 'localhost' || $_REQUEST['preview'] == 'yes') {
?>
  
<!--
<div class="horizon scroll"></div>
<div class="middle scroll"></div>
<div class="front scroll"></div>
-->
  
<div class="wrapper">
  <main>
      <section class="module parallax parallax-1 watchpos" id="section_intro" data-title="Intro" data-stellar-background-ratio="0.2">
        <div id="headerbar">
          <div id="nameplate">Evan Rusackas</div>
          <div class="container">
            <img class="headerlogo" id="headerlogo_top" src="img/headerlogo_top.png" /><br />
            <img class="headerlogo" id="headerlogo_bottom" src="img/headerlogo_bottom.png" />
          </div>
          <div id="nav_dots"></div>
        </div>
      </section>

      <section class="module content" id="section_mission" data-title="Objectives">
        <div class="colorbacker"></div>
        <div class="container about">
          <h2>Professional Objectives:</h2>
          <ul>
            <li class="watchpos">To design, implement, and improve web/application/mobile interfaces, making the experience both intuitive and memorable for end users</li>
            <li class="watchpos">To take advantage of the new and exciting technologies and practices to make the processes of design, development, and testing all integrate smoothly</li>
            <li class="watchpos">To work with and build teams of like-minded designers, developers, and content creators in a challenging and creative environment</li>
            <li class="watchpos">To take on challenges and roles that caters to my interests, skills, and experiences both professionally and personally</li>
            <li class="watchpos">To find unique and creative solutions to design and interface issues using the latest tools, techniques, and design patterns</li>
            <li class="watchpos">To design and build interfaces look, act, and feel like home.</li>
          </ul>
        </div>
      </section>

      <section class="module parallax parallax-2" id="section_skills" data-title="Skills/Process" data-stellar-background-ratio="0.2">
<!--        <h1>My process</h1>-->
        <div class="container skills">
          <div class='skill'>
            <div class="skillheader">Design</div>
            <div class="skilliconshadow"></div>
            <img src="img/icon1.png" class="skillicon" width="184" height="184" />
            <ul>
              <li class="watchpos">Assess requirements with users/stakeholders/client </li>
              <li class="watchpos">Information architecture, user flows, and navigational requirements</li>
              <li class="watchpos">UI sketching and wireframeing</li>
              <li class="watchpos">Develop layout grid system</li>
              <li class="watchpos">Functional prototyping of key  components</li>
              <li class="watchpos">Design vocabulary: color palette, branding, typography</li>
              <li class="watchpos">Mock up themes/templates for multiple outlets</li>
            </ul>
          </div>
          <div class='skill'>
            <div class="skillheader">Build</div>
            <div class="skilliconshadow"></div>
            <img src="img/icon2.png" class="skillicon" width="184" height="184" />
            <ul>
              <li class="watchpos">Build pixel-perfect source graphics/sprites</li>
              <li class="watchpos">Build HTML/HTML5 layout components</li>
              <li class="watchpos">Styling and icing with CSS/CSS3/SCSS</li>
              <li class="watchpos">Add responsiveness w/ CSS Media Queries</li>
              <li class="watchpos">Javascript &amp; jQuery development</li>
              <li class="watchpos">Browser testing and patching</li>
              <li class="watchpos">Test for accesssibility</li>
              <li class="watchpos">Internationalization / Localization</li>
            </ul>
          </div>
          <div class='skill'>
            <div class="skillheader">Deliver</div>
            <div class="skilliconshadow"></div>
            <img src="img/icon3.png" class="skillicon" width="184" height="184" />
            <ul>
              <li class="watchpos">Deployment for web, mobile web, and native apps</li>
              <li class="watchpos">GitHub / SVN version control</li>
              <li class="watchpos">Progressive enhancement for evergreen browsers</li>
              <li class="watchpos">Polyfills and graeful degradation for old browsers</li>
              <li class="watchpos">Project management and bug tracking</li>
              <li class="watchpos">Customer support, marketing, and user feedback</li>
              <li class="watchpos">Focus group testing, A/B testing, and <i><b>iteration</b></i></li>
            </ul>
          </div>
        </div>
      </section>

      <section class="module content" id="section_recent" data-title="Sample Projects">
        <div class="container">
          <h2>Sample Projects</h2>
          <div class="sp-slideshow">
			
				<input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
				<label for="button-1" class="button-label-1"></label>
				
				<input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
				<label for="button-2" class="button-label-2"></label>
				
				<input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
				<label for="button-3" class="button-label-3"></label>
				
				<input id="button-4" type="radio" name="radio-set" class="sp-selector-4" />
				<label for="button-4" class="button-label-4"></label>
				
				<input id="button-5" type="radio" name="radio-set" class="sp-selector-5" />
				<label for="button-5" class="button-label-5"></label>
				
				<label for="button-1" class="sp-arrow sp-a1"></label>
				<label for="button-2" class="sp-arrow sp-a2"></label>
				<label for="button-3" class="sp-arrow sp-a3"></label>
				<label for="button-4" class="sp-arrow sp-a4"></label>
				<label for="button-5" class="sp-arrow sp-a5"></label>
				
				<div class="sp-content">
					<div class="sp-parallax-bg"></div>
					<ul class="sp-slider clearfix">
                      <li>
                        <div class="slider-pics">
                          <ul>
                            <li><a class="group1" href="img/portfolio/gv/960/purplesite.jpg" title="Fourth generation main site template"><img src="img/portfolio/gv/200/purplesite.jpg" /></a></li>
                            <li><a class="group1" href="img/portfolio/gv/960/cms.jpg" title="Custom CMS system (page editor biew)"><img src="img/portfolio/gv/200/cms.jpg" /></a></li>
                            <li><a class="group1" href="img/portfolio/gv/960/ediusworld.jpg" title="EDIUSWorld software training portal"><img src="img/portfolio/gv/200/ediusworld.jpg" /></a></li>
                            <li><a class="group1" href="img/portfolio/gv/960/stratus1.jpg" title="STRATUS mobile application demos"><img src="img/portfolio/gv/200/stratus1.jpg" /></a></li>
                            <li><a class="group1" href="img/portfolio/gv/960/museum.jpg" title="GV Museum standalone site"><img src="img/portfolio/gv/200/museum.jpg" /></a></li>
                            <li><a class="group1" href="img/portfolio/gv/960/navigator.jpg" title="GV Navigator Sales/Marketing support portal"><img src="img/portfolio/gv/200/navigator.jpg" /></a></li>
                          </ul>
                        </div>
                        <div class="slider-text">
                          <img src="img/portfolio/gv/logo/gv_logo.png" />
                          Four generations of website theme design and implementation. Custom CMS and page-building system UI and theming. Design and front-end development of mobile apps for tradeshows, one-off event websites, and corrollary sites for internal teams, marketing, training, etc.
                        </div>
                      </li>
                      <li>
                        <div class="slider-pics">
                          <ul>
                            <li><a class="group2" href="img/portfolio/link_media/960/linkorg.jpg" title="LinkTV.org website"><img src="img/portfolio/link_media/200/linkorg.jpg" /></a></li>
                            <li><a class="group2" href="img/portfolio/link_media/960/viewchange2.jpg" title="ViewChange.org semantic video browser"><img src="img/portfolio/link_media/200/viewchange2.jpg" /></a></li>
                            <li><a class="group2" href="img/portfolio/link_media/960/VC.jpg" title="Viewchange.org player and direct action page"><img src="img/portfolio/link_media/200/VC.jpg" /></a></li>
                            <li><a class="group2" href="img/portfolio/link_media/960/explore_photos.jpg" title="Explore.org UI/UX design"><img src="img/portfolio/link_media/200/explore_photos.jpg" /></a></li>
                            <li><a class="group2" href="img/portfolio/link_media/960/cms.jpg" title="LinkTV.org CMS system"><img src="img/portfolio/link_media/200/cms.jpg" /></a></li>
                          </ul>
                        </div>
                        <div class="slider-text">
                          <img src="img/portfolio/link_media/logo/link_logo.png" />
                            UI design and front-end buildout of Linktv.org wbsite and custom CMS. UI design and buildout of Link TV Platform (open source semantic web driven video portal). UI Design, development, and theming of several sub-sites, web portals, and site templates, including Explore.org and ViewChange.org.
                        </div>
                      </li>
                      <li>
                        <div class="slider-pics">
                          <ul>
                            <li><a class="group3" href="img/portfolio/cengage/960/discoverywheel.jpg" title="HTML5 activity UI design"><img src="img/portfolio/cengage/200/discoverywheel.jpg" /></a></li>
                            <li><a class="group3" href="img/portfolio/cengage/960/lsi.jpg" title="HTML5 activity UI design"><img src="img/portfolio/cengage/200/lsi.png" /></a></li>
                            <li><a class="group3" href="img/portfolio/cengage/960/PL1.jpg" title="PowerLecture instructional resources"><img src="img/portfolio/cengage/200/PL1.jpg" /></a></li>
                            <li><a class="group3" href="img/portfolio/cengage/960/PL2.jpg" title="PowerLecture instructional resources"><img src="img/portfolio/cengage/200/PL2.jpg" /></a></li>
                            <li><a class="group3" href="img/portfolio/cengage/960/careers-in-CJ.jpg" title="Careers in Criminal Justice Flash application"><img src="img/portfolio/cengage/200/careers-in-CJ.jpg" /></a></li>
                          </ul>
                        </div>
                        <div class="slider-text">
                          <img src="img/portfolio/cengage/logo/cengage_logo.png" />
                          UI design of interactive HTML5 instructional activities. Production of websites, interactive media, and DVD-ROM accompaniments for higher ed textbook publications. Adobe ExtendScript Workflow automation for Adobe Creative Suite processing of artwork driven by CSV data.
                        </div>
                      </li>
                      <li>
                        <div class="slider-pics">
                          <ul>
                            <li><a class="group5" href="img/portfolio/stanford/960/YOS_2.jpg" title="Carleton Watkins Yosemite interactive map appllication"><img src="img/portfolio/stanford/200/YOS_2.jpg" /></a></li>
                            <li><a class="group5" href="img/portfolio/stanford/960/YOS_3.jpg" title="Carleton Watkins Yosemite interactive map appllication"><img src="img/portfolio/stanford/200/YOS_3.jpg" /></a></li>
                            <li><a class="group5" href="img/portfolio/stanford/960/CRO_1.jpg" title="Carleton Watkins Columbia River interactive map iPad app"><img src="img/portfolio/stanford/200/CRO_1.jpg" /></a></li>
                            <li><a class="group5" href="img/portfolio/stanford/960/CRO_3.jpg" title="Carleton Watkins Columbia River interactive map iPad app"><img src="img/portfolio/stanford/200/CRO_3.jpg" /></a></li>
                            <li><a class="group5" href="img/portfolio/stanford/960/PAC_1.jpg" title="Carleton Watkins Pacific Coast interactive photographic iPad app"><img src="img/portfolio/stanford/200/PAC_1.jpg" /></a></li>
                            <li><a class="group5" href="img/portfolio/stanford/960/PAC_2.jpg" title="Carleton Watkins Pacific Coast interactive photographic iPad app"><img src="img/portfolio/stanford/200/PAC_2.jpg" /></a></li>
                          </ul>
                        </div>
                        <div class="slider-text">
                          <img src="img/portfolio/stanford/logo/stanford_logo.png" />
                          Implementation of UI for iPad-based cartographic museum exhibition. UI design and buildout of corresponding website. Built with HTML5, jQuery, and responsive design.
                        </div>
                      </li>
                      <li>
                        <div class="slider-pics">
                          <ul>
                            <li><a class="group4" href="img/portfolio/print/960/linoleum.jpg" title="Lotteria linoleum carving print"><img src="img/portfolio/print/200/linoleum.jpg" /></a></li>
                            <li><a class="group4" href="img/portfolio/print/960/PatMetheneyPage.jpg" title="Fingerstyle Guitar layout"><img src="img/portfolio/print/200/PatMetheneyPage.jpg" /></a></li>
                            <li><a class="group4" href="img/portfolio/print/960/Express5800_320Ma-1.jpg" title="NEC server brochure"><img src="img/portfolio/print/200/Express5800_320Ma-1.jpg" /></a></li>
                            <li><a class="group4" href="img/portfolio/print/960/Express5800_320Ma.jpg" title="NEC server brochure"><img src="img/portfolio/print/200/Express5800_320ma.jpg" /></a></li>
                            <li><a class="group4" href="img/portfolio/print/960/f51.jpg" title="Fingerstyle Guitar layout"><img src="img/portfolio/print/200/f51.jpg" /></a></li>
                            <li><a class="group4" href="img/portfolio/print/960/nec_postcard.jpg" title="NEC Postctard"><img src="img/portfolio/print/200/nec_postcard.jpg" /></a></li>
                          </ul>
                        </div>
                        <div class="slider-text">
                          <h2>Print Design</h2>
                          Art direction of three magazines, a varied past of marketing and instructional materials for various clients, and a personal love of linoleum varving for letterpress printing. Copy writing/editing, photography, and illustration play their part here, too.
                        </div>
                      </li>
					</ul>
				</div><!-- sp-content -->
				
			</div><!-- sp-slideshow -->
        </div>
      </section>

<!--
      <section class="module parallax parallax-3" id="section_case1" data-title="Grass Valley">
        <div class="container">
          <h1>Case Study: Grass Valley</h1>
          <div id="player"></div>
          <div class="coverflow_button coverflow_left" onclick="coverflow('player').left();">Left</div>
          <div class="coverflow_button coverflow_right" onclick="coverflow('player').right();">Right</div>
        </div>
      </section>
-->
      <section class="module parallax parallax-4" id="section_case2" data-title="Beer Citizen" data-stellar-background-ratio="0.2">
        <div class="container">
          <h1 class="watchpos">Case Study: <a href="http://beercitizen.com/" target="_blank">Beer Citizen</a></h1>
          <div id="player2"></div>
          <div class="coverflow_button coverflow_left" onclick="coverflow('player2').left();">Prev</div>
          <div class="coverflow_button coverflow_right" onclick="coverflow('player2').right();">Next</div>
        </div>
      </section>

      <section class="module content" id="section_future" data-title="Onward...">
        <div class="container">
          <h2>And for my next trick(s)...</h2>
          <ol>
            <li>I'm still addicted to the DOM, and in love with with all the possibilities of CSS3 and HTML5 paired with <a href="http://jquery.com/">jQuery</a>. CSS3's quickly growing support in evergreen browsers is allowing new ways to design, prototype, and develop user interfaces rapidly, and with plenty of icing. Browser performance issues (and troubleshooting them) are a related topic comprising much of my research lately.</li>
          <li>I've been re-building and evoving my front-end tool quiver lately, too. My new favorite front-end IDE, <a href="http://brackets.io/?lang=en">Brackets</a>, along with <a href="">CodeKit</a> adding in support for <a href="http://bower.io/">Bower</a>, <a href="http://sass-lang.com/">SASS</a>, and minification, are making it fun and easy to implement various techniques. It's exciting to see vendor previxing slip behind the curtain, and disappearing, while the moving parts neede to build sites become more plug-and-play.</li>
            <li>I'm hoping to work more with <a href="http://webcomponents.org/">Web Components</a> (and related polyfills via <a href="https://www.polymer-project.org/">Polymer</a>). You'll be seeing more of them here, as I intend for this (brand new) site to be a bit of a test bed for new technologoes.</li>
            <li>I'm starting to play more with <a href="http://angularjs.org/">AngularJS</a>, which is starting to become a lot of fun. I've been at this game a long time, but tools like this make it an exciting time to be in web design/development.</li>
            <li>This site has been allowing me to play with some parallax-y toys, which have been hit or miss due to browser performance issues. It's given me the excuse to think up new ways to approach it, and I'm in the process of turning that approach into a new jQuery plugin <s>coming soon to a GitHub repo near you.</s><a href="https://github.com/rusackas/jquery-scrolltracker"> now available on GitHub!</a></li>
          </ol>
        </div>
      </section>

  </main><!-- /main -->

  <footer id="footer">
    <div class="container">
      <div class="asides clearfix">
        <aside>
          Evan Rusackas<br />
          2948 20th St, #101<br />
          San Francisco, CA 94110<br />
          415.359.5422 [cell]<br />
          <a href="#"><span id="my-email">please enable javascript to view</span></a>
        </aside>
        <aside>
          <ul class="social">
            <li><a href="https://www.facebook.com/e.rusackas" target="_blank" alt="facebook"><img src="img/social/social_fb.png" border="0"></a></li>
            <li><a href="http://twitter.com/rusackas" target="_blank" alt="twitter"><img src="img/social/social_tw.png" border="0"></a></li>
            <li><a href="http://google.com/+EvanRusackas" target="_blank" alt="google+"><img src="img/social/social_g.png" border="0"></a></li>
            <li><a href="http://www.linkedin.com/in/rusackas/" target="_blank" alt="linkedin"><img src="img/social/social_li.png" border="0"></a></li>
            <li><a href="https://github.com/rusackas" target="_blank" alt="github"><img src="img/social/social_git.png" border="0"></a></li>
            <li><a href="http://reddit.com/u/erusackas" target="_blank" alt="reddit"><img src="img/social/social_r.png" border="0"></a></li>
          </ul>
        </aside>
        <aside>
            
            <a href="EvanRusackas_Resume.pdf" target="_blank" class="file"><span class="download"><img alt="Download PDF Résumé" src="img/file_icon.png" width="25" height="30" />Résumé (1pg, PDF)</span></a>
            <br />
            <a href="EvanRusackas_Resume_CV.pdf" target="_blank" class="file"><span class="download"><img alt="Download PDF Résumé &amp; CV" src="img/file_icon.png" width="25" height="30" />Résumé &amp; CV (5pgs, PDF)</span></a>
        </aside>
      </div>
      <div class="copyright">
        <small>
          &copy; 2014, Evan Rusackas<br><a href="http://rusackas.com">rusackas.com</a>
        </small>
      </div>
    </div>
  </footer><!-- /footer -->

</div><!-- /#wrapper -->

<?php 
  }
  else{
?>
  <div align="center" style="-webkit-animation: throb 2s infinite;animation: throb 2s infinite;padding-top:200px;font-size:32px;text-shadow:2px 2px 100px #fff;">Portfolio website launching soon. Please hold...</div>
<?php
  }
?>  

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60055154-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>