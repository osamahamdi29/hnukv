<?php

    /*!
	 * POCKET v3.7
	 *
	 * http://www.droidoxy.com
	 * support@droidoxy.com
	 *
	 * Copyright 2020 DroidOXY ( http://www.droidoxy.com )
	 */

    
	$pagename = 'transactions';
	$container = '';
    
    include_once("includes/user.inc.php");
    
    $tracker = new tracker($dbo);
    
    // User's All Transactions
    $allTransactions = $tracker->getuserTransactionsAPI($req_user_info['login']);
    $allTransactions = $allTransactions['transactions'];

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
											<a href="transactions.php" class="kt-subheader__breadcrumbs-link">Transactions</a>
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
							    
								<!--Begin:: Transactions -->
								<div class="kt-portlet kt-portlet--mobile">
									<div class="kt-portlet__head kt-portlet__head--lg">
										<div class="kt-portlet__head-label">
											<span class="kt-portlet__head-icon">
												<i class="kt-font-brand flaticon2-line-chart"></i>
											</span>
											<h3 class="kt-portlet__head-title">
												All Transactions
												<small>Showing all Earning and Redeem history.</small>
											</h3>
										</div>
										<div class="kt-portlet__head-toolbar">
											<div class="kt-portlet__head-wrapper">
												<div class="kt-portlet__head-actions">
													<a href="redeem.php" class="btn btn-brand btn-elevate btn-icon-sm">
														<i class="la la-plus"></i>
														New Redeem
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="kt-portlet__body">

										<!--begin: Search Form -->
										<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
											<div class="row align-items-center">
												<div class="col-xl-8 order-2 order-xl-1">
													<div class="row align-items-center">
														<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
															<div class="kt-input-icon kt-input-icon--left">
																<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
																<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																</span>
															</div>
														</div>
														<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
															<div class="kt-form__group kt-form__group--inline">
																<div class="kt-form__label">
																	<label>Type:</label>
																</div>
																<div class="kt-form__control">
																	<select class="form-control bootstrap-select" id="kt_form_type">
																		<option value="">All</option>
																		<option value="cr">Credit</option>
																		<option value="db">Debit</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
															<div class="kt-form__group kt-form__group--inline">
																<div class="kt-form__label">
																	<label>Status:</label>
																</div>
																<div class="kt-form__control">
																	<select class="form-control bootstrap-select" id="kt_form_status">
																		<option value="">All</option>
																		<option value="0">Pending</option>
																		<option value="1">Success</option>
																		<option value="2">Processing</option>
																		<option value="3">Rejected</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
													<a href="#" class="btn btn-default kt-hidden">
														<i class="la la-cart-plus"></i> New Order
													</a>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
												</div>
											</div>
										</div>

										<!--end: Search Form -->
									</div>
									<div class="kt-portlet__body kt-portlet__body--fit">

										<!--begin: Datatable -->
										<table class="kt-datatable" id="html_table" width="100%">
											<thead>
												<tr>
													<th title="Field #1">Transaction ID</th>
													<th title="Field #2">Transaction Name</th>
													<th title="Field #3">Transaction Points</th>
													<th title="Field #4">Transaction Date</th>
													<th title="Field #5">User</th>
													<th title="Field #6">Type</th>
													<th title="Field #7">Status</th>
												</tr>
											</thead>
											<tbody>
											    
											    <?php   foreach($allTransactions as $transaction){  ?>
												<tr>
													<td><?php echo esc_attr($transaction['tn_id']); ?></td>
													<td><?php echo esc_attr($transaction['tn_name']); ?></td>
													<td><?php echo esc_attr($transaction['tn_points']); ?></td>
													<td><?php echo esc_attr($transaction['tn_date']); ?></td>
													<td><?php echo esc_attr($req_user_info['fullname']); ?></td>
													<td align="right"><?php echo esc_attr($transaction['tn_type']); ?></td>
													<td align="right"><?php echo esc_attr($transaction['tn_status']); ?></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>

										<!--end: Datatable -->
									</div>
								</div>
								<!--End:: Transactions -->
								
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
		<script src="assets/js/pages/html-table.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>