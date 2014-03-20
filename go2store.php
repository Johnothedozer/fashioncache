<?php
/*******************************************************************\
 * CashbackEngine v2.1
 * http://www.CashbackEngine.net
 *
 * Copyright (c) 2010-2014 CashbackEngine Software. All rights reserved.
 * ------------ CashbackEngine IS NOT FREE SOFTWARE --------------
\*******************************************************************/

	session_start();
	require_once("inc/config.inc.php");

	$userid = (int)$_SESSION['userid'];


	if (isset($_GET['id']) && is_numeric($_GET['id']))
	{
		$retailer_id = (int)$_GET['id'];

		$query = "SELECT * FROM cashbackengine_retailers WHERE retailer_id='$retailer_id' LIMIT 1";
		$result = smart_mysql_query($query);

		if (mysql_num_rows($result) > 0)
		{
			if (isset($_GET['c']) && is_numeric($_GET['c']) && $_GET['c'] > 0)
			{
				$coupon_id = (int)$_GET['c'];

				$coupon_result = smart_mysql_query("SELECT * FROM cashbackengine_coupons WHERE coupon_id='$coupon_id' LIMIT 1");
				if (mysql_num_rows($coupon_result) > 0)
				{
					$coupon_row = mysql_fetch_array($coupon_result);
					$coupon_link = $coupon_row['link'];
				}
			}
			
			if (!isLoggedIn())
			{
				$_SESSION['goRetailerID']	= $retailer_id;
				$_SESSION['goCouponID']		= $coupon_id;

				header("Location: login.php?msg=4");
				exit();
			}

			// update retailer visits //
			smart_mysql_query("UPDATE cashbackengine_retailers SET visits=visits+1 WHERE retailer_id='$retailer_id'");

			// update coupon visits //
			if (isset($coupon_id) && is_numeric($coupon_id))
			{
				smart_mysql_query("UPDATE cashbackengine_coupons SET visits=visits+1 WHERE coupon_id='$coupon_id'");
			}

			// save member's click in history //
			smart_mysql_query("INSERT INTO cashbackengine_clickhistory SET user_id='".(int)$userid."', retailer_id='".(int)$retailer_id."', added=NOW()");

			$row = mysql_fetch_array($result);

			if ($row['url'] != "")
			{
				if ($coupon_link != "")
					$retailer_website = str_replace("{USERID}", $userid, $coupon_link);
				else
					$retailer_website = str_replace("{USERID}", $userid, $row['url']);

				if (SHOW_LANDING_PAGE == 1)
				{
					// show landing page
					if ($coupon_id)
						$go_url = "redirect.php?id=".$retailer_id."&c=".$coupon_id;
					else
						$go_url = "redirect.php?id=".$retailer_id;
					
					header("Location: $go_url");
					exit();
				}
				else
				{
					// directly open retailer's website
					header("Location: ".$retailer_website);
					exit();
				}
			}
		}
		else
		{
			///////////////  Page config  ///////////////
        	$PAGE_TITLE = CBE1_STORE_NOT_FOUND;

			require_once ("inc/header.inc.php");
			echo "<p align='center'>".CBE1_STORE_NOT_FOUND2."<br/><br/><a class='goback' href='#' onclick='history.go(-1);return false;'>".CBE1_GO_BACK."</a></p>";
			require_once ("inc/footer.inc.php");
		}
	}
	else
	{	
		header("Location: index.php");
		exit();
	}

?>