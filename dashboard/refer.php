<?php

    /*!
	 * POCKET v3.7
	 *
	 * http://www.droidoxy.com
	 * support@droidoxy.com
	 *
	 * Copyright 2020 DroidOXY ( http://www.droidoxy.com )
	 */

    
	$pagename = 'refer';
	$container = '';
    
    include_once("includes/user.inc.php");
    
    // User Refer Code
	$userReferCode = $req_user_info['refer'];
	
	// User Refer URL
	$webRoot = $configs->getConfig('WEB_ROOT');
	$userReferURL = $webRoot.'/refer/?refer='.$userReferCode;
	if(substr($webRoot, -1) == "/"){ $userReferURL = $webRoot.'refer/?refer='.$userReferCode; }
	
	// User's Referred Members
	$userreferredMembers = $configs->getUserReferredMembers($req_user_info['refer']);
	
	// User's Income from Referred Members
	$userIncomeFromReferredMembers = $configs->getUserReferIncome($req_user_info['login']);
	
	// defined refer reward
	$referReward = $configs->getConfig('REFER_REWARD');
    

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
											<span class="kt-subheader__breadcrumbs-separator"></span>
											<a href="refer.php" class="kt-subheader__breadcrumbs-link">Refer & Earn</a>
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

								<!--Begin:: Refer & Earn -->
								
								<!--Begin::Row-->
								<div class="row">
								    
                                    <div class="col-lg-4">
                                        
                                        <!--begin:: Widgets/Quick Stats-->
                                        <?php include_once 'includes/dashboard_stats_refer.php'; ?>
                                        <!--end:: Widgets/Quick Stats-->
                                        
                                    </div>
                                    
                                    <div class="col-lg-8">
                                        
                                        <!--begin:: Widgets/Refer URL & Code-->
                                        <div class="kt-portlet kt-portlet--mobile">
                                			<div class="kt-portlet__head">
                                				<div class="kt-portlet__head-label">
                                					<h3 class="kt-portlet__head-title">Refer & Earn</h3>
                                				</div>
                                			</div>
                                			<div class="kt-portlet__body center">
                                			    <p class="refer-text">Earn unlimited rewards by referring your friends, family and followers. You'll earn <?php echo esc_attr($referReward); ?> points for every user you refer and your referal gets <?php echo esc_attr($referReward); ?> Poinst too.. Keep referring more friends and watch your earnings grow up !</p>
                                			    <div class="input-group input-group-lg refer-url">
                                			        <input type="text" class="form-control" value="<?php echo esc_attr($userReferURL); ?>" disabled="disabled">
                                			        <div class="input-group-append"><a href="#" class="btn btn-secondary" id="sweetalert_refer_url_copy" onclick="copyReferURLToClipboard('<?php echo esc_attr($userReferURL); ?>')"><i class="fas fa-copy"></i></a></div>
                                        		</div>
                                        		<br><br>
                                        		<p class="refer-text">Share above Referral Link or unique Referral Code <code><a href="#" id="sweetalert_refer_code_copy" onclick="copyReferCodeToClipboard('<?php echo esc_attr($userReferCode); ?>')"><?php echo esc_attr($userReferCode); ?></a></code> to your Friends & Family.</p>
                                        		<br><br>
                                        		<p>
                                        		    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_attr($userReferURL); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank">
                                        			    <button type="button" class="btn btn-facebook"><i class="socicon-facebook"></i> &nbsp; &nbsp; Share on Facebook</button>
                                        			</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        			<a href="http://twitter.com/share?text=Earn free rewards and gift cards with @<?php echo esc_attr($configs->getConfig('APP_NAME')); ?>. Join me today : &amp;url=<?php echo esc_attr($userReferURL); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank">
                                        			    <button type="button" class="btn btn-twitter"><i class="socicon-twitter"></i> &nbsp; &nbsp; Share on Twitter</button>
                                        			</a>
                                        		</p>
                                			</div>
                                		</div>
                                        <!--end:: Widgets/Refer URL & Code-->
                            		
                                    </div>
                                    
								</div>
								<!--End::Row-->
								
								<!--Begin:: Widgets/How to Refer-->
								<?php include_once 'includes/dashboard_how_to_refer.php'; ?>
								<!--End:: Widgets/How to Refer-->

								<!--End:: Refer & Earn -->
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
	    

		<!--begin::Page Vendors(used by this page) -->
		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<!--end::Page Scripts -->
		
	</body>

	<!-- end::Body -->
</html>