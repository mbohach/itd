<?php include($include_root.'templates/header.php'); ?>
	<div class="transparent" style="margin-bottom: 25px;">
		<div class="padding">
			<div id="main_content">
				<div class="padding">
					<img src="<?= $web_root ?>images/placeholder.jpg" />
				</div>
			
				<div id="search_bar">
					<img src="<?= $web_root ?>images/social.png" />
				</div>
				
				<div class="padding">
					<div class="search_input">
						<div class="left">
							<h3>Interactive Search</h3>
							<div id="slot">
								<div class="number spot1"></div>
								<div class="number spot2"></div>
								<div class="number spot3"></div>
								<div class="number comma"></div>
								<div class="number spot4"></div>
								<div class="number spot5"></div>
								<div class="number spot6"></div>
								<div class="number comma"></div>
								<div class="number spot7"></div>
								<div class="number spot8"></div>
								<div class="number spot9"></div>
								<div class="number period"></div>
								<div class="number spot10"></div>
								<div class="number spot11"></div>
								<div class="number period"></div>
								<div class="number spot12"></div>
								<div class="number spot13"></div>
								<div class="number period"></div>
								<div class="number spot14"></div>
								<div class="number spot15"></div>
								<div class="number colon"></div>
								<div class="number spot16"></div>
								<div class="number spot17"></div>
							</div>
						
							<table cellpadding="0" cellspacing="0" id="slot_search" width="100%">
								<tr>
									<td valign="top">
										<input class="in" type="text" name="year" id="year" size="12" maxlength="12" value="<?= sprintf("%09d",date('Y')) ?>" />
										<br />Year
									</td>
									<td valign="top">
										<input class="in" type="text" name="month" id="month" size="2" value="<?= date('m') ?>" />
										<br />Month
									</td>
									<td valign="top">
										<input class="in" type="text" name="day" id="day" size="2" value="<?= date('d') ?>" />
										<br />Day
									</td>
									<td valign="top">
										<input class="in" type="text" name="hour" id="hour" size="2" value="<?= date('h') ?>" />
										<br />Hour
									</td>
									<td valign="top">
										<input class="in" type="text" name="minute" id="minute" size="2" value="<?= date('i') ?>" />
										<br />Minute
									</td>
									<td valign="top">
										<input type="checkbox" class="in" name="ampm" id="ampm" value="am" /> AM<br />
										<input type="checkbox" class="in" name="ampm" id="ampm" value="pm" /> PM
									</td>
									<td valign="top">
										<input type="checkbox" class="in" name="adbc" id="abdc" value="BC" /> BC<br />
										<input type="checkbox" class="in" name="adbc" id="adbc" value="AD" /> AD
									</td>
									<td valign="top" align="right" style="padding-right: 0;"><img src="<?= $web_root ?>images/default-search-button.png" id="search" /></td>
								</tr>
							</table>
							<div id="search_result"></div>
						</div>
			
						
						<div class="right">
							<h3 class="random">Randomizer</h3>
							<div class="randomizer">
								<ul>
									<li class="history" id="1"><a href="#"><span>History</span></a></li>
									<li class="humor" id="2"><a href="#"><span>Humor</span></a></li>
									<li class="sports" id="3"><a href="#"><span>Sports</span></a></li>
									<li class="holidays" id="4"><a href="#"><span>Holidays</span></a></li>
									<li class="hollywood" id="5"><a href="#"><span>Hollywood</span></a></li>
									<li class="world" id="6"><a href="#"><span>World</span></a></li>
								</ul>
							</div>
							<p id="random_event"></p>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					<div class="how_to">
						<div class="left">
							<img src="<?= $web_root ?>images/blank.png" />
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit risus ac enim volutpat non euismod augue pellentesque. Quisque commodo malesuada enim,</p>
						</div>
						
						<div class="middle">
							<img src="<?= $web_root ?>images/blank.png" />
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit risus ac enim volutpat non euismod augue pellentesque. Quisque commodo malesuada enim,</p>
						</div>
						
						<div class="right">
							<img src="<?= $web_root ?>images/blank.png" />
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit risus ac enim volutpat non euismod augue pellentesque. Quisque commodo malesuada enim,</p>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	
	<div class="previously_purchased">
		<div class="padding">
			<h3>Previously Claimed Moments</h3>
			
			<div class="prev_slide">
				<div class="tag"><span>Oct. 7th 2009 4:35pm</span></div>
			</div>
			<div class="prev_slide">
				<div class="tag"><span>Oct. 7th 2009 4:35pm</span></div>
			</div>
			<div class="prev_slide">
				<div class="tag"><span>Oct. 7th 2009 4:35pm</span></div>
			</div>
			<div class="prev_slide" style="margin-right: 0;">
				<div class="tag"><span>Oct. 7th 2009 4:35pm</span></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
<?php include($include_root.'templates/footer.php'); ?>