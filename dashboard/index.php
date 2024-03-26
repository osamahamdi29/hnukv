<?php

    /*!
	 * POCKET v3.7
	 *
	 * http://www.droidoxy.com
	 * support@droidoxy.com
	 *
	 * Copyright 2020 DroidOXY ( http://www.droidoxy.com )
	 */

     // Install Handler

	if (!file_exists('../admin')) {
	    
	    include_once("includes/notice-admin-not-installed.php");
	    
		exit;
		
	}
    
	$pagename = 'dashboard';
	$container = '';

    include_once("includes/user.inc.php");
	
	$configs->updateAnalyticsSessions();
	
    // User Points
	$userCurrentPoints = $req_user_info['points'];
	$userRedeemedPoints = $configs->getUserRedeemedPoints($req_user_info['login']);
	$userTotalPoints = $userCurrentPoints+$userRedeemedPoints;
	
	// User's Referred Members
	$userreferredMembers = $configs->getUserReferredMembers($req_user_info['refer']);

?><!DOCTYPE html>
<?php include_once 'includes/vendor_comments.php'; ?>
<html lang="en">

	<!-- begin::Head -->
	<head>
	    <?php include_once 'includes/dashboard_title.php'; ?>
	    
	    <?php include_once 'includes/global_header_scripts.php'; ?>
	    
	    <div id="gb-widget-4718" style="bottom: 21px; right: 23px; opacity: 1; transition: opacity 0.5s ease 0s; box-sizing: border-box; direction: ltr; position: fixed !important; z-index: 16000160 !important;"><div><div class="q8c6tt-2 jxPOhn"><a href="https://www.facebook.com/groups/2649280855173311" target="_blank" color="#4dc247" id="" class="q8c6tt-0 jlzTty"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 122.88 122.88" style="
    width: 60px;
    border-radius: 40px;
"><defs><style>.cls-1{fill:#3b5998;}.cls-1,.cls-2{fill-rule:evenodd;}.cls-2{fill:#fff;}</style></defs><title>Gift Freee Facebook</title><path class="cls-1" d="M25.2,0H97.68a25.27,25.27,0,0,1,25.2,25.2V97.68a25.27,25.27,0,0,1-25.2,25.2H25.2A25.27,25.27,0,0,1,0,97.68V25.2A25.27,25.27,0,0,1,25.2,0Z"></path><path class="cls-2" d="M69.27,35.31H82.34V19.63H69.27A18.32,18.32,0,0,0,51,37.92v7.84H40.54V61.44H51v41.81H66.67V61.44H79.73l2.61-15.68H66.67V37.92a2.64,2.64,0,0,1,2.6-2.61Z"></path></svg></a></div></div></div>
	    
	</head>
	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

	    <?php include_once 'includes/dashboard_page_loader.php'; ?>

		<!-- begin:: Page -->
		
		<!-- begin:: Header Mobile -->
	    <?php include_once 'includes/dashboard_header_mobile.php'; ?>
	    <!-- end:: Header Mobile -->
	    
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				    
					<!-- begin:: Header -->
				    <?php include_once 'includes/dashboard_header.php'; ?>
					<!-- end:: Header -->
					
					<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
						<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

							<!-- begin:: Subheader -->
							<div class="kt-subheader   kt-grid__item" id="kt_subheader">
								<div class="kt-container ">
									<div class="kt-subheader__main">
										<h3 class="kt-subheader__title">
											Dashboard </h3>
										<div class="kt-subheader__breadcrumbs">
											<a href="index.php" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
											<span class="kt-subheader__breadcrumbs-separator"></span>
											<a href="index.php" class="kt-subheader__breadcrumbs-link">Dashboard</a>
										</div>
									</div>
									<div class="kt-subheader__toolbar">
										<div class="kt-subheader__wrapper">
											<a href="redeem.php" class="btn kt-subheader__btn-secondary">
												Redeem
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- end:: Subheader -->

							<!-- begin:: Content -->
							<div class="kt-container  kt-grid__item kt-grid__item--fluid">
								
								<!--Begin::Notices -->
								<?php include_once("../admin/controller/notices.php"); ?>
								<!--End::Notices -->

								<!--Begin::Dashboard -->
								
								<!--Begin::Row-->
								<div class="row">
                                    
                                    <div class="col-xl-12 order-md-1 order-lg-1 order-xl-1">
                                        
                                        <!--begin:: Widgets/Quick Stats-->
                                        <?php include_once 'includes/dashboard_stats_home.php'; ?>
                                        <!--end:: Widgets/Quick Stats-->
                                    </div>
                                    
									<div class="col-xl-8 col-lg-12 order-md-2 order-lg-2 order-xl-2">
									    
										<!--begin:: Widgets/Offer Walls-->
											<?php   if (!isset($_GET['page'])){ 
									    include_once("includes/ogads-offers.php");include_once 'includes/dashboard_offers.php'; }/*else if($_GET['page'] ==1){ include_once("includes/ogads-offers.php");include_once 'includes/dashboard_offers.php';}*//*else if ($_GET['page']==0){ include_once("includes/dashboard_offerwalls.php"); include_once 'includes/dashboard_offers1.php'; }*/else if ($_GET['page']==2){ include_once("includes/ogads-offers1.php"); include_once 'includes/dashboard_offers1.php'; }else if($_GET['page'] ==3){ include_once("includes/ogads-offers2.php");include_once 'includes/dashboard_offers2.php';}/*else{ include_once("includes/ogads-offers2.php");include_once 'includes/dashboard_offers2.php'; }*/ ?>
										<!--end:: Widgets/Offer Walls-->
										<?php include_once 'includes/dashboard_offerwalls.php'; ?>
										<!--end:: Widgets/Offer Walls-->
										
									</div>
                                    
									<div class="col-xl-4 col-lg-6 order-md-3 order-lg-3 order-xl-3">
									    
                                        <!--begin:: Widgets/Daily Checkin -->
										<?php if($configs->getConfig('DAILY_ACTIVE')){ include_once 'includes/dashboard_daily_checkin.php'; } ?>
                                        <!--end:: Widgets/Daily Checkin -->
									    
                                        <!--begin:: Widgets/New Feature -->
										<?php if($configs->getConfig('WEB_SHOW_NEW_FEATURE_NOTICE')){ include_once 'includes/dashboard_new_feature.php'; } ?>
                                        <!--end:: Widgets/New Feature -->
                                        
                                        <!--begin:: Widgets/Announcements -->
										<?php if($configs->getConfig('WEB_SHOW_ANNOUNCEMENT')){ include_once 'includes/dashboard_announcement.php'; } ?>
                                        <!--end:: Widgets/Announcements -->

                                        <!--begin:: Widgets/Recent Payouts -->
										<?php if($configs->getConfig('WEB_SHOW_RECENT_PAYOUTS')){ include_once 'includes/dashboard_recent_payouts.php'; } ?>
                                        <!--end:: Widgets/Recent Payouts -->
									</div>
								</div>

								<!--End::Row-->

								<!--End:: Dashboard -->
							</div>

							<!-- end:: Content -->
						</div>
					</div>
                    
                    <?php include_once 'includes/dashboard_footer.php'; ?>
                    
				</div>
			</div>
		</div>

		<!-- end:: Page -->
		
	    <?php include_once 'includes/dashboard_scroll_to_top.php'; ?>
		
	    <?php include_once 'includes/global_footer_scripts.php'; ?>

		<!--begin::Page Scripts(used by this page) -->
		<script src="assets/js/pages/dashboard.js" type="text/javascript"></script>
		<script src="assets/js/daily-checkin.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
		
	</body>

	<!-- end::Body -->
</html>