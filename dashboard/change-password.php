<?php

    /*!
	 * POCKET v3.7
	 *
	 * http://www.droidoxy.com
	 * support@droidoxy.com
	 *
	 * Copyright 2020 DroidOXY ( http://www.droidoxy.com )
	 */

    
	$pagename = 'change-password';
	$container = '';
    
    include_once("includes/user.inc.php");
    include_once("../admin/controller/controller-change-password.php");

?><!DOCTYPE html>
<?php include_once 'includes/vendor_comments.php'; ?>
<html lang="en">

	<!-- begin::Head -->
	<head>
	    <?php include_once 'includes/dashboard_title.php'; ?>
	    
	    <?php include_once 'includes/global_header_scripts.php'; ?>
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
											<a href="change-password.php" class="kt-subheader__breadcrumbs-link">Change Password</a>
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
							    
								<!--Begin:: Profile -->
								<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
								
									<!--Begin:: App Aside Mobile Toggle-->
									<button class="kt-app__aside-close" id="kt_user_profile_aside_close">
										<i class="la la-close"></i>
									</button>
									
									<!--End:: App Aside Mobile Toggle-->
									
									<!--Begin:: App Aside-->
									<div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

										<!--begin:: Widgets/Applications/User/Profile-->
										<div class="kt-portlet ">
											<div class="kt-portlet__head  kt-portlet__head--noborder">
												<div class="kt-portlet__head-label">
													<h3 class="kt-portlet__head-title">&nbsp;</h3>
												</div>
											</div>
											<div class="kt-portlet__body kt-portlet__body--fit-y">

												<!--begin::Widget -->
												<div class="kt-widget kt-widget--user-profile-1">
													<div class="kt-widget__head">
														<div class="kt-widget__content">
															<div class="kt-widget__section">
																<a href="#" class="kt-widget__username">
																	<?php echo esc_attr($req_user_info['fullname']); ?>
																	<i class="flaticon2-correct kt-font-success"></i>
																</a>
																<span class="kt-widget__subtitle">
																	Member Since <?php echo esc_attr(date('d M, Y', $req_user_info['regtime'])) ; ?>
																</span>
															</div>
															<div class="kt-widget__action">
																<button type="button" class="btn btn-success btn-sm">Active</button>
															</div>
														</div>
													</div>
													<div class="kt-widget__body">
														<div class="kt-widget__content">
															<div class="kt-widget__info">
																<span class="kt-widget__label">Email :</span>
																<a href="#" class="kt-widget__data"><?php echo esc_attr($req_user_info['email']); ?></a>
															</div>
															<div class="kt-widget__info">
																<span class="kt-widget__label">Phone :</span>
																<a href="#" class="kt-widget__data"><?php echo esc_attr($req_user_info['mobile']); ?></a>
															</div>
														</div>
														<div class="kt-widget__items">
															<a href="profile.php" class="kt-widget__item">
																<span class="kt-widget__section">
																	<span class="kt-widget__icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																			</g>
																		</svg> </span>
																	<span class="kt-widget__desc">
																		Account Information
																	</span>
																</span>
															</a>
															
															<a href="change-password.php" class="kt-widget__item kt-widget__item--active">
																<span class="kt-widget__section">
																	<span class="kt-widget__icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																				<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
																				<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg> </span>
																	<span class="kt-widget__desc">
																		Change Password
																	</span>
																</span>
															</a>
															<a href="transactions.php" class="kt-widget__item">
																<span class="kt-widget__section">
																	<span class="kt-widget__icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
																				<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																	</span>
																	<span class="kt-widget__desc">My Transactions</span>
																</span>
															</a>
															<a href="refer.php" class="kt-widget__item">
																<span class="kt-widget__section">
																	<span class="kt-widget__icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"></rect>
																				<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3"></path>
																				<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000"></path>
																			</g>
																		</svg>
																	</span>
																	<span class="kt-widget__desc">My Referral Link</span>
																</span>
															</a>
														</div>
													</div>
												</div>

												<!--end::Widget -->
											</div>
										</div>
										<!--end:: Widgets/Applications/User/Profile-->
									</div>
									
									<!--End:: App Aside-->
									
									<!--Begin:: App Content-->
									<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="kt-portlet kt-portlet--height-fluid">
                                                    <div class="kt-portlet__head">
                                                        <div class="kt-portlet__head-label">
                                                            <h3 class="kt-portlet__head-title">Change Your Account Password<small>
                                                        </div>
                                                    </div>
                                                    <form method="post" action="" class="kt-form kt-form--label-right">
                                                        <div class="kt-portlet__body">
                                                            <div class="kt-section kt-section--first">
                                                                <div class="kt-section__body">
                                                                    
                                                                    <?php if($error){ ?>
                                                                    
                                                                    <div class="alert alert-solid-danger alert-bold show kt-margin-t-20 kt-margin-b-40" role="alert">
                                                                        <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                                                                        <div class="alert-text"><?php echo esc_attr($error_message); ?></div>
                                                                        <div class="alert-close">
                                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                <span aria-hidden="true"><i class="la la-close"></i></span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <?php } ?>
                                                                    
                                                                    <?php if($success){ ?>
                                                                    
                                                                    <div class="alert alert-solid-success alert-bold show kt-margin-t-20 kt-margin-b-40" role="alert">
                                                                        <div class="alert-icon"><i class="fa fa-check"></i></div>
                                                                        <div class="alert-text"><?php echo esc_attr($error_message); ?></div>
                                                                        <div class="alert-close">
                                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                <span aria-hidden="true"><i class="la la-close"></i></span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <?php }else{ ?>
                                                                    
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <input type="password" class="form-control" name="new_password" value="" placeholder="New password">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group form-group-last row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Confirm Password</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <input type="password" class="form-control" name="confirm_password" value="" placeholder="Confirm password">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <?php } ?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <?php if(!$success){ ?>
                                                        
                                                        <div class="kt-portlet__foot">
                                                            <div class="kt-form__actions">
                                                                <div class="row">
                                                                    <div class="col-lg-9 col-xl-9">
                                                                    </div>
                                                                    <div class="col-lg-3 col-xl-3">
                                                                        <button type="submit" class="btn btn-brand btn-bold">Change Password</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <?php } ?>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!--End:: App Content-->
									
								</div>
								<!--End:: Profile -->
								
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
	</body>

	<!-- end::Body -->
</html>