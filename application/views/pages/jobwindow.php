<div id="jobWindow" class="windows hidden">
	<div class="prevJob" id="jobchannel"> < </div>
	<div class="middle"> 
		<div class="jobWindowTitle"> 
			<div id="jobchannel" class="jobTitle">Job Window</div>
			<img id="hideJob" src="images/toggle_button.png"/> 
		</div>
		<div id="items" class="job_container">
			<ul class="job">
				<?php
					$jitems = array('Jobs','About','Apply');
					foreach ($jitems as $item):
					echo '
						<li class="job_items">
							<div class="jobtextcontainer" >
								<span class="jobtext" >'. $item.'</span>
							</div>
							<div class="hasChild" title="" ></div>
						</li>';
					endforeach;
				?>
			</ul>
		</div>
	</div>
	<div class="scrollbar">
        <div class="scroll_up job_scroll">/\</div>
        <div class="scroll_down job_scroll">\/</div>
    </div>
</div>
