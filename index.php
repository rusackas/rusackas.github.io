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

<!--  <script src="js/min/scripts-min.js"></script>-->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/modernizr/modernizr.js"></script>
  <script src="bower_components/tipsy/src/javascripts/jquery.tipsy.js"></script>
  <script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
  <script src="bower_components/animatescroll/animatescroll.min.js"></script>
  <script src="bower_components/stellar/jquery.stellar.min.js"></script>
  <script src="js/jquery.jInvertScroll.js"></script>
  <script src="js/coverflow.js"></script>
  <script src="js/scripts.js"></script>
</head>

<body>
  
<?php 
  $launched = false;
  if($launched == true || $_SERVER['HTTP_HOST'] == 'localhost' || $_REQUEST['preview'] == 'yes') {
?>
  
<div class="horizon scroll">
<!--  <img src="img/horiz_parallax/horizon.png" alt="" />-->
</div>
<div class="middle scroll">
<!--  <img src="img/horiz_parallax/middle.png" alt="" />-->
</div>
<div class="front scroll">
<!--  <img src="img/horiz_parallax/front.png" alt="" />-->
</div>
  
<div class="wrapper">
  <main>
      <section class="module parallax parallax-1 watchpos" id="section_intro" data-title="Intro" data-stellar-background-ratio="0.25">
        <div id="headerbar">
          <div id="nameplate">Evan Rusackas</div>
          <div class="container">
            <img class="headerlogo" id="headerlogo_top" src="img/headerlogo_top.png" /><br />
            <img class="headerlogo" id="headerlogo_bottom" src="img/headerlogo_bottom.png" />
          </div>
          <div id="nav_dots"></div>
        </div>
      </section>

      <section class="module content" id="section_mission" data-title="Mission/Objectives">
        <div class="colorbacker"></div>
        <div class="container about">
          <h2>My mission:</h2>
          <ul>
            <li class="watchpos">To design, implement, and improve web/application/mobile interfaces, making the experience both intuitive and memorable for end users</li>
            <li class="watchpos">To take advantage of the new and exciting technologies and practices to make the processes of design, development, and testing all integrate smoothly</li>
            <li class="watchpos">To work with a team of like-minded designers, developers, and content creators in a challenging and creative environment</li>
            <li class="watchpos">To take on a role that caters to my interests, skills, and experiences both professionally and personally</li>
            <li class="watchpos">To find unique and creative solutions to design and interface issues using the latest tools, techniques, and design patterns</li>
            <li class="watchpos">To design and build interfaces look, act, and feel like home.</li>
          </ul>
        </div>
      </section>

      <section class="module parallax parallax-2" id="section_skills" data-title="Skills/Process" data-stellar-background-ratio="0.25">
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
                            <li><a class="group1" href="img/portfolio/gv/960/purplesite.jpg" title=""><img src="img/portfolio/gv/200/purplesite.jpg" /></a></li>
                            <li><a class="group1" href="img/portfolio/gv/960/cms.jpg" title=""><img src="img/portfolio/gv/200/cms.jpg" /></a></li>
                            <li><a class="group1" href="img/portfolio/gv/960/ediusworld.jpg" title=""><img src="img/portfolio/gv/200/ediusworld.jpg" /></a></li>
                            <li><a class="group1" href="img/portfolio/gv/960/stratus1.jpg" title=""><img src="img/portfolio/gv/200/stratus1.jpg" /></a></li>
                            <li><a class="group1" href="img/portfolio/gv/960/museum.jpg" title=""><img src="img/portfolio/gv/200/museum.jpg" /></a></li>
                            <li><a class="group1" href="img/portfolio/gv/960/navigator.jpg" title=""><img src="img/portfolio/gv/200/navigator.jpg" /></a></li>
                          </ul>
                        </div>
                        <div class="slider-text">
                          <h2>Grass Valley</h2>
                          <ul>
                            <li>Stuuuuffffff</li>
                          </ul>
                        </div>
                      </li>
                      <li>
                        <div class="slider-pics">
                          <ul>
                            <li><a class="group2" href="img/portfolio/link_media/960/linkorg.jpg" title=""><img src="img/portfolio/link_media/200/linkorg.jpg" /></a></li>
                            <li><a class="group2" href="img/portfolio/link_media/960/viewchange2.jpg" title=""><img src="img/portfolio/link_media/200/viewchange2.jpg" /></a></li>
                            <li><a class="group2" href="img/portfolio/link_media/960/VC.jpg" title=""><img src="img/portfolio/link_media/200/VC.jpg" /></a></li>
                            <li><a class="group2" href="img/portfolio/link_media/960/explore_photos.jpg" title=""><img src="img/portfolio/link_media/200/explore_photos.jpg" /></a></li>
                            <li><a class="group2" href="img/portfolio/link_media/960/cms.jpg" title=""><img src="img/portfolio/link_media/200/cms.jpg" /></a></li>
                          </ul>
                        </div>
                        <div class="slider-text">
                          <h2>Link TV websites and CMS system</h2>
                          <ul>
                            <li>UI design / buildout of custom content management system</li>
                            <li>UI design for front-end / back-end of Link TV Platform (open source semantic web driven video portal)</li>
                            <li>Viewchange.org UI development</li>
                            <li>Explore.org website interface design and implementation</li>
                            <li>Design, development, and theming of several sub-sites, web portals, and site templates</li>
                          </ul>
                        </div>
                      </li>
                      <li>
                        <div class="slider-pics">
                          <ul>
                            <li><a class="group3" href="img/portfolio/cengage/960/discoverywheel.jpg" title=""><img src="img/portfolio/cengage/200/discoverywheel.jpg" /></a></li>
                            <li><a class="group3" href="img/portfolio/cengage/960/lsi.jpg" title=""><img src="img/portfolio/cengage/200/lsi.png" /></a></li>
                          </ul>
                        </div>
                        <div class="slider-text">
                          <h2>Cengage</h2>
                          <ul>
                            <li>UI design of interactive HTML5 instructional activities.</li>
                            <li>Adove ExtendScript Workflow automation for Adobe Creative Suite to process bulk images using CSV data and automate HTML image gallery building </li>
                          </ul>
                        </div>
                      </li>
                      <li>
                        <div class="slider-pics">
                          <ul>
                            <li><a class="group5" href="img/portfolio/stanford/960/YOS_2.jpg" title="Yosemite App"><img src="img/portfolio/stanford/200/YOS_2.jpg" /></a></li>
                            <li><a class="group5" href="img/portfolio/stanford/960/YOS_3.jpg" title="Yosemite App 2"><img src="img/portfolio/stanford/200/YOS_3.jpg" /></a></li>
                            <li><a class="group5" href="img/portfolio/stanford/960/CRO_1.jpg" title=""><img src="img/portfolio/stanford/200/CRO_1.jpg" /></a></li>
                            <li><a class="group5" href="img/portfolio/stanford/960/CRO_3.jpg" title=""><img src="img/portfolio/stanford/200/CRO_3.jpg" /></a></li>
                            <li><a class="group5" href="img/portfolio/stanford/960/PAC_1.jpg" title=""><img src="img/portfolio/stanford/200/PAC_1.jpg" /></a></li>
                            <li><a class="group5" href="img/portfolio/stanford/960/PAC_2.jpg" title=""><img src="img/portfolio/stanford/200/PAC_2.jpg" /></a></li>
                          </ul>
                        </div>
                        <div class="slider-text">
                          <h2>Stanford University</h2>
                          Implementation of UI for iPad-based cartographic museum exhibition. UI design and buildout of corresponding website. Built with HTML5, jQuery, and responsive design.
                        </div>
                      </li>
                      <li>
                        <div class="slider-pics">
                          <ul>
                            <li><a class="group4" href="img/portfolio/print/960/linoleum.jpg" title=""><img src="img/portfolio/print/200/linoleum.jpg" /></a></li>
                            <li><a class="group4" href="img/portfolio/print/960/Express5800_320Ma-1.jpg" title=""><img src="img/portfolio/print/200/Express5800_320Ma-1.jpg" /></a></li>
                            <li><a class="group4" href="img/portfolio/print/960/Express5800_320Ma.jpg" title=""><img src="img/portfolio/print/200/Express5800_320ma.jpg" /></a></li>
                            <li><a class="group4" href="img/portfolio/print/960/f51.jpg" title=""><img src="img/portfolio/print/200/f51.jpg" /></a></li>
                            <li><a class="group4" href="img/portfolio/print/960/PatMetheneyPage.jpg" title=""><img src="img/portfolio/print/200/PatMetheneyPage.jpg" /></a></li>
                          </ul>
                        </div>
                        <div class="slider-text">
                          <h2>Print Design</h2>
                          Art direction and design for Bassics Magazine, Fingerstyle Guitar Magazine, and StickIt!, along with design and production of marketing and collatteral materials
                        </div>
                      </li>
<!--
                      <li>
                        <div class="slider-pics"></div>
                        <div class="slider-text">
                          <h3>KareCo /Pharmagel</h3>
                          Design and implementation of custm Shopify storefront, custom CMS system, and HTML emails.
                        </div>
                      </li>
-->
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
      <section class="module parallax parallax-4" id="section_case2" data-title="Beer Citizen" data-stellar-background-ratio="0.25">
        <div class="container">
          <h1 class="watchpos">Case Study: <a href="http://beercitizen.com/" target="_blank">Beer Citizen</a></h1>
          <div id="player2"></div>
          <div class="coverflow_button coverflow_left" onclick="coverflow('player2').left();">Prev</div>
          <div class="coverflow_button coverflow_right" onclick="coverflow('player2').right();">Next</div>
        </div>
      </section>

      <section class="module content" id="section_future" data-title="Onward...">
        <div class="container">
          <h2>Ongoing objectives...</h2>
          <p>
            I'm currently enamored with all the possibilities of CSS3, which combined with growing support in evergreen browsers, is allowing for rapid progress in the design and development of user interfaces, and provdes a TON of opportunitices for icing on top. On the frontier, I'm very excited to work more with Web Components (and related polyfills, like Polymer). I'm also loving the new wave of front-end tools and IDEs on the market like Brackets for code editing, and CodeKit for enabling SCSS, minification and more. Having been designing and building for the web since 1996, I'm continually amazed that while the capabilities and implications of the internet continue to expand, the tools and techniques used in building it are becoming faster and easier, to keep pace. The web is what we make of it, and it's very exciting to be at a point where we can do nearly <i>anything</i>.
          </p>
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
          <a href="resume.pdf" target="_blank" class="file"><img alt="Download Resume" src="img/file_icon.png" width="100" height="121" /><span class="download">Download Resumé</span></a>
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

</body>
</html>