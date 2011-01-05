<html>
  <head>
    <link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
	  <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print" />
	  <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]--> 
 
    <!-- Import fancy-type plugin for the sample page. --> 
    <link rel="stylesheet" href="css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
  </head>
  <body>
    <div class="container main">
      <h1>
        <div class="title">Free Lottery</div>
        <div class="next-drawing">
          <ul>
            <li><a href="javascript:">My Account</a></li>
            <li><a href="javascript:">Sign In</a></li>
            <li><a href="javascript:">Home</a></li>
            <li><a href="javascript:">History</a></li>
          </ul>
        </div>
      </h1>
      <div class="jackpot-container span-24">
        
        <div class="jackpot"></div>
        <div class="title">Guess numbers to win...</div>
      </div>
      
      <div class="select span-24">
        <script type="text/x-jquery-tmpl" id="tmplAdText">
          <div class="selection">
            <div class="value">${value}</div>
            <div class="ad"><a href="javascript:">${name}</a></div>
          </div>
        </script>           
      </div>
      

      
      <div class="video-ad span-24">
        <div class="video-explanation">
          Watch this advertisement and you'll enter your guess in a moment.
        </div>
        
        <div id="yt-replace-me"></div>
        <!--         <object width="640" height="385"><param name="movie" value="http://www.youtube.com/v/cOS5BaxCtAk?fs=1&amp;hl=en_US&autoplay=1&start=40&enablejsapi=1&playerapiid=ytplayer"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/cOS5BaxCtAk?fs=1&amp;hl=en_US&autoplay=1&start=40&enablejsapi=1&playerapiid=ytplayer" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="385"></embed></object>
                 -->
      </div>
      
      <div class="entry-container span-24">
        <script type="text/x-jquery-tmpl" id="tmplEntry">
          <div class="entry">
            <div class="input-container">
              <input type="text" name="entry" readonly="readonly" />
            </div>
            <div class="background"></div>
            <div class="ad">
              <a href="javascript:">
                <img src="afdosfds.png" width="200" height="100" /> 
              </a>
            </div>
          </div>
        </script>
      </div>

      <div class="share">
        <div class="instructions">
          Share with your friends for more chances to play! 
        </div>
        <div class="addthis">
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
          <a class="addthis_button_preferred_1"></a>
          <a class="addthis_button_preferred_2"></a>
          <a class="addthis_button_preferred_3"></a>
          <a class="addthis_button_preferred_4"></a>
          <a class="addthis_button_compact"></a>
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d23bb943f9f0e37"></script>
          <!-- AddThis Button END -->
          
        </div>
      </div>

      <div class="section-bottom">
        <div class="play span-8">
          <h2>Play</h2>
          <p>
            How to play. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      
        <div class="win span-8">
          <h2>Win!</h2>
          <p>
            How to win Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      
        <div class="how span-8 last">
          <h2>How?</h2>
          <p>
            How does this work? How is revenue generated? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div>

    <div id="result">
      Finished! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    
    <script src="js/jquery-1.4.2.min.js"></script>
    <script src="js/jquery.tmpl.min.js"></script>
    <script src="js/swfobject.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>