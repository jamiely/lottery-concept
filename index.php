<html>
  <head>
    <link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/blueprint/main.css" type="text/css" media="all" />
	  <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print" />
	  <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]--> 
 
    <!-- Import fancy-type plugin for the sample page. --> 
    <link rel="stylesheet" href="css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
  </head>
  <body>
    <div class="container showgrid main">
      <h1>Free Lottery</h1>
      <div class="jackpot-container span-24">
        <div class="title">Jackpot</div>
        <div class="jackpot"></div>
      </div>
      
      <div class="select span-24">
        <script type="text/x-jquery-tmpl" id="tmplAdText">
          <div class="selection">
            <div class="value">${value}</div>
            <div class="ad"><a href="javascript:">${name}</a></div>
          </div>
        </script>           
      </div>
      <div class="entry-container span-24">
        <input type="text" name="entry" readonly="readonly" />
        <input type="text" name="entry" readonly="readonly" />
        <input type="text" name="entry" readonly="readonly" />
        <input type="text" name="entry" readonly="readonly" />
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
    <script src="js/main.js"></script>
  </body>
</html>