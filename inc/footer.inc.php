<div class="footer">
		<div class="container">
			<div class="footerNavigation footernavlinks">
				<div><a href="#">About Fashion Smart</a></div>
				<div><a href="#">Advertise With Us</a></div>
				<div><a href="#">Contact Us</a></div>
				<div><a href="#">Privacy Policy</a></div>
				<div><a href="#">Terms &#x0026; Conditions</a></div>
				<div><a href="#">Blog</a></div>
				<div><a href="#">FAQs</a></div>
				<div><a href="#">Partners: Brands &#x0026; Retailers</a></div>
			</div>
			<div class="popularStores footernavlinks">
				<div class="title">MOST POPULAR STORES</div>
				<div><a href="#">Nordstrom</a></div>
				<div><a href="#">Macy&#x2019;s</a></div>
				<div><a href="#">Banana Republic</a></div>
				<div><a href="#">J. Crew</a></div>
				<div><a href="#">Neiman Marcus</a></div>
			</div>
			<div class="connectWithUs footernavlinks socialLinks">
				<div class="title">CONNECT WITH US!</div>
				<div><a href="#" class="fbDark"><img class="noncolor" alt="" src="<?php echo SITE_URL;?>img/fbDark.jpg"/><img class="colorful" alt="" src="<?php echo SITE_URL;?>img/fbColorDark.jpg"/></a></div>
				<div><a href="#" class="twtDark"><img class="noncolor" alt="" src="<?php echo SITE_URL;?>img/twtDark.jpg"/><img class="colorful" alt="" src="<?php echo SITE_URL;?>img/twtColorDark.jpg"/></a></div>
				<div><a href="#" class="gpDark"><img class="noncolor" alt="" src="<?php echo SITE_URL;?>img/gpDark.jpg"/><img class="colorful" alt="" src="<?php echo SITE_URL;?>img/gpColorDark.jpg"/></a></div>
				<div><a href="#" class="piDark"><img class="noncolor" alt="" src="<?php echo SITE_URL;?>img/piDark.jpg"/><img class="colorful" alt="" src="<?php echo SITE_URL;?>img/piColorDark.jpg"/></a></div>
			</div>
			<div class="cb"></div>
		</div>
		<div class="copyright">
			<div class="container">
			<div>Fashion Smart. &#x00A9; 2013 All rights reserved.</div>
			</div>
		</div>
	</div>





	
	
			
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
     	</script> -->
</body>
</html>
<?php 
/*
?>
</div>

<div id="column_right">

		<?php
			$store_of_week = GetStoreofWeek();
			$sow_query = "SELECT * FROM cashbackengine_retailers WHERE (retailer_id='".(int)$store_of_week."' OR deal_of_week='1') AND (end_date='0000-00-00 00:00:00' OR end_date > NOW()) AND status='active' ORDER BY RAND() LIMIT 1";
			$sow_result = smart_mysql_query($sow_query);

			if (mysql_num_rows($sow_result) > 0)
			{
				$sow_row = mysql_fetch_array($sow_result);
		?>
			<div class="box">
				<div class="top"><?php echo CBE1_BOX_SOW; ?></div>
				<div class="middle">

				<div style="text-align: center;">
					<a href="<?php echo GetRetailerLink($sow_row['retailer_id'], $sow_row['title']); ?>"><img src="<?php if (!stristr($sow_row['image'], 'http')) echo SITE_URL."img/"; echo $sow_row['image']; ?>" width="<?php echo IMAGE_WIDTH; ?>" height="<?php echo IMAGE_HEIGHT; ?>" border="0" alt="<?php echo $sow_row['title']; ?>" title="<?php echo $sow_row['title']; ?>" class="thebest" /></a>
				</div>

				</div>
				<div class="bottom">&nbsp;</div>
			</div>
		<?php } ?>

		<?php if (POPULAR_STORES_LIMIT > 0) { ?>
		<div class="box">
			<div class="top"><?php echo CBE1_BOX_POPULAR; ?></div>
			<div class="middle">
				<?php

					$tops_query = "SELECT * FROM cashbackengine_retailers WHERE retailer_id<>'".(int)$store_of_week."' AND (end_date='0000-00-00 00:00:00' OR end_date > NOW()) AND status='active' ORDER BY visits DESC LIMIT ".POPULAR_STORES_LIMIT;
					$tops_result = smart_mysql_query($tops_query);
					$tops_total = mysql_num_rows($tops_result);

					if ($tops_total > 0)
					{
				?>
					<ul id="popular_list">
					<?php while ($tops_row = mysql_fetch_array($tops_result)) { ?>
						<li><a href="<?php echo GetRetailerLink($tops_row['retailer_id'], $tops_row['title']); ?>"><?php echo $tops_row['title']; ?></a></li>
					<?php } ?>
					</ul>
				<?php } ?>
			</div>
			<div class="bottom">&nbsp;</div>
		</div>
		<?php } ?>

		<div class="box">
			<div class="top"><?php echo CBE1_BOX_BROWSE; ?></div>
			<div class="middle">

				<table class="alphabet" border="0" cellpadding="2" cellspacing="0">
				<?php

					$a = 0;

					foreach ($alphabet as $letter)
					{
						if (isset($view) && $view == "list") $view_a = "&view=list"; else $view_a = "";
						if ($a == 0 || $a%7 == 0) echo "<tr>";
						if (isset($ltr) && $ltr == $letter)
							echo "<td class=\"td_alphabet_active\"><a href=\"".SITE_URL."retailers.php?letter=".$letter."$view_a\">".$letter."</a></td>";
						else
							echo "<td class=\"td_alphabet\"><a href=\"".SITE_URL."retailers.php?letter=".$letter."$view_a\">".$letter."</a></td>";
						$a++;
						if ($a%7 == 0 || $a == $numLetters) echo "</tr>";
					}

				?>
				</table>

			</div>
			<div class="bottom">&nbsp;</div>
		</div>

		<?php if (NEW_STORES_LIMIT > 0) { ?>
		<div class="box">
			<div class="top"><?php echo CBE1_BOX_NEW; ?></div>
			<div class="middle">
				<?php

					$n_query = "SELECT * FROM cashbackengine_retailers WHERE (end_date='0000-00-00 00:00:00' OR end_date > NOW()) AND status='active' ORDER BY added DESC LIMIT ".NEW_STORES_LIMIT;
					$n_result = smart_mysql_query($n_query);
					$n_total = mysql_num_rows($n_result);

					if ($n_total > 0)
					{
				?>
					<ul id="newest_list">
					<?php while ($n_row = mysql_fetch_array($n_result)) { ?>
						<li>
							<a href="<?php echo GetRetailerLink($n_row['retailer_id'], $n_row['title']); ?>"><?php echo $n_row['title']; ?></a>
							<?php if ($n_row['cashback'] != "") { ?><br/><span class="newest_cashback"><?php echo DisplayCashback($n_row['cashback']); ?> <?php echo CBE1_CASHBACK2; ?></span><?php } ?>
						</li>
					<?php } ?>
					</ul>
					<div align="right"><a class="more" href="<?php echo SITE_URL; ?>retailers.php"><?php echo CBE1_BOX_NEW_MORE; ?></a></div>
				<?php } ?>
			</div>
			<div class="bottom">&nbsp;</div>
		</div>
		<?php } ?>

		<div class="box">
			<div class="top"><?php echo CBE1_BOX_FOLLOW; ?></div>
			<div class="middle">
				<div id="social">
					<?php if (FACEBOOK_PAGE != "") { ?><a href="<?php echo FACEBOOK_PAGE; ?>" class="facebook_icon" target="_blank" rel="nofollow"></a><?php } ?>
					<?php if (TWITTER_PAGE != "") { ?><a href="<?php echo TWITTER_PAGE; ?>" class="twitter_icon" target="_blank" rel="nofollow"></a><?php } ?>
					<a href="<?php echo SITE_URL; ?>rss.php" class="rss_icon"></a>
				</div>
			</div>
			<div class="bottom">&nbsp;</div>
		</div>

		<?php if (SHOW_FB_LIKEBOX == 1 && FACEBOOK_PAGE != "") { ?>
		<div class="box">
				<iframe src="//www.facebook.com/plugins/likebox.php?href=<?php echo urlencode(FACEBOOK_PAGE); ?>&amp;width=185&amp;height=300&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:185px; height:300px;" allowTransparency="true"></iframe>
		</div>
		<?php } ?>

</div>

<div id="footer">

	<?php echo ShowFooterPages(); ?>
	<a href="<?php echo SITE_URL; ?>aboutus.php"><?php echo CBE1_FMENU_ABOUT; ?></a> &middot; 
	<a href="<?php echo SITE_URL; ?>news.php"><?php echo CBE1_FMENU_NEWS; ?></a> &middot; 
	<a href="<?php echo SITE_URL; ?>terms.php"><?php echo CBE1_FMENU_TERMS; ?></a> &middot; 
	<a href="<?php echo SITE_URL; ?>privacy.php"><?php echo CBE1_FMENU_PRIVACY; ?></a> &middot; 
	<a href="<?php echo SITE_URL; ?>contact.php"><?php echo CBE1_FMENU_CONTACT; ?></a> &middot; 
	<a href="<?php echo SITE_URL; ?>rss.php" class="rss"><?php echo CBE1_FMENU_RSS; ?></a>
	
	<p>&copy; 2014 <?php echo SITE_TITLE; ?>. <?php echo CBE1_FMENU_RIGHTS; ?>.</p>

	<!-- Do not remove this copyright notice! -->
		<div class="powered-by-cashbackengine">Powered by <a href="http://www.cashbackengine.net" title="CashbackEngine - cashback site script" target="_blank"><font color="#84C315">Cashback</font><font color="#5BADFF">Engine</font></a><div>
	<!-- Do not remove this copyright notice! -->

</div>

</div>

<?php echo GOOGLE_ANALYTICS; ?>

</body>
</html>
<?php 
*/
?>