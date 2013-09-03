		<!-- POPUP Buttom Start -->
        <div id="pageWrap">
           <div class="wrapper" id="jobWindow-bg"></div>
         <div id="windowContainer">
           <div id="jobWindowContainer">
             <?php echo View::factory('pages/jobwindow') ?>
           </div>
        </div> 
     	<!-- POPUP Buttom End -->

		<!-- Bamboo Toolbar Start -->
     		<div id="leftbamboo"></div>
     		<div id="toolbar-contents">
     			<div class="rightside">
     				<div class="menu">
                        <li><?php echo View::factory('pages/mainright')?></li>
                        <?php
                            for ($x=0; $x<=100; $x++){
                                echo "<li></li>";
                            } 
                        ?>
     				</div>
     			</div>
     		</div>
     	<!-- Bamboo Toolbar End -->

     	<!-- Skysa Toolbar Start -->
          <a href="http://www.skysa.com/page/features/live-support-chat" id="SKYSA-NoScript">Live Support</a><script type="text/javascript" src="//static2.skysa.com?i=8DB2B84F-2E19-4B2D-83C8-F7F63D52F510" async="true"></script>

          <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-35978746-1']);
            _gaq.push(['_setDomainName', 'livei.com']);
            _gaq.push(['_trackPageview']);

            (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
          </script>
          <!-- Skysa Toolbar End -->