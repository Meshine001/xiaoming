<!DOCTYPE html>
              <html>
                <head>
                  <!-- Required meta tags-->
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
                  <meta name="apple-mobile-web-app-capable" content="yes">
                  <meta name="apple-mobile-web-app-status-bar-style" content="black">
                  <!-- Your app title -->
                  <title>My App</title>
                  <!-- Path to Framework7 iOS CSS theme styles-->
                  <link rel="stylesheet" href="dist/css/framework7.ios.min.css">
                  <!-- Path to Framework7 iOS related color styles -->
                  <link rel="stylesheet" href="dist/css/framework7.ios.colors.min.css">
                  <!-- Path to your custom app styles-->
                  <link rel="stylesheet" href="dist/css/my-app.css">
                </head>
                <body>
                  <!-- Views -->
                  <div class="views">
                    <!-- Your main view, should have "view-main" class -->
                    <div class="view view-main">
                      <!-- Top Navbar-->
                      <div class="navbar">
                        <div class="navbar-inner">
                          <!-- We need cool sliding animation on title element, so we have additional "sliding" class -->
                          <div class="center sliding">Awesome App</div>
                          <div class="right">
                            <!-- 
                              Right link contains only icon - additional "icon-only" class
                              Additional "open-panel" class tells app to open panel when we click on this link
                            -->
                            <a href="#" class="link icon-only open-panel"><i class="icon icon-bars"></i></a>
                          </div>
                        </div>
                      </div>
                      <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
                      <div class="pages navbar-through toolbar-through">
                        <!-- Page, "data-page" contains page name -->
                        <div data-page="index" class="page">
                          <!-- Scrollable page content -->
                          <div class="page-content">
                            <p>Page content goes here</p>
                            <!-- Link to another page -->
                            <a href="about.html">About app</a>
                          </div>
                        </div>
                      </div>
                      <!-- Bottom Toolbar-->
                      <div class="toolbar">
                        <div class="toolbar-inner">
                          <!-- Toolbar links -->
                          <a href="#" class="link">Link 1</a>
                          <a href="#" class="link">Link 2</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Path to Framework7 Library JS-->
                  <script type="text/javascript" src="dist/js/framework7.min.js"></script>
                  <!-- Path to your app js-->
                  <script type="text/javascript" src="dist/js/my-app.js"></script>
                </body>
</html>         