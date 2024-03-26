<?php

    /*!
	 * POCKET v3.7
	 *
	 * http://www.droidoxy.com
	 * support@droidoxy.com
	 *
	 * Copyright 2020 DroidOXY ( http://www.droidoxy.com )
	 */
    
    include_once("../admin/core/init.inc.php");
    include_once("../admin/controller/controller-login.php");

?><!DOCTYPE html>
<?php include_once 'includes/vendor_comments.php'; ?>
<html lang="en">

	<!-- begin::Head -->
	<head>
	    <?php include_once 'includes/dashboard_title.php'; ?>
	    
	    <?php include_once 'includes/global_header_scripts.php'; ?>
	    
		<!--begin::Page Custom Styles(used by this page) -->
		<link href="assets/css/pages/login/login.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles -->
		
	</head>
	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

	    <?php include_once 'includes/dashboard_page_loader.php'; ?>

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

					<!--begin::Aside-->
					<div class="login-aside kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside">
						<div class="kt-grid__item">
							<a href="index.php" class="kt-login__logo">
								<img src="../admin/images/<?php echo esc_attr($configs->getConfig('SITE_LOGO_LIGHT')); ?>">
							</a>
						</div>
						<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
							<div class="kt-grid__item kt-grid__item--middle">
								<h3 class="kt-login__title">Welcome to <?php echo esc_attr($APP_NAME); ?>!</h3>
								<h4 class="kt-login__subtitle"><?php echo esc_attr($APP_DESC); ?></h4>
							</div>
						</div>
						<div class="kt-grid__item">
							<div class="kt-login__info">
								<div class="kt-login__copyright">
									&copy 2020 <?php echo esc_attr($APP_NAME); ?>
								</div>
							</div>
						</div>
					</div>
					
					<!--end::Aside-->
					
					<!--begin::Content-->
					<div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">
					    <!--begin::Body-->
						<div class="kt-login__body">
							<!--begin::Signin-->
							<div class="kt-login__form">
								<div class="kt-login__title">
									<h3>Sign In</h3>
								</div>
								
								<?php if ($error){ ?>
								
								<div class="alert alert-danger">
								    <?php echo esc_attr($error_message); ?>
								</div>
								
								<?php } ?>
								
								<div id="signin_process"></div>
								<div id="signin_layout">
								    
								    <!--begin::Form-->
                                    <form class="kt-form" name="signin_form" id="needs-validation kt_login_form" action="login.php" method="post" novalidate="novalidate">
                                        <input autocomplete="off" type="hidden" id="authenticity_token" name="authenticity_token" value="<?php echo helper::getAuthenticityToken(); ?>">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email or Username" id="user_username" autocomplete="off" maxlength="60" id="user_username" name="user_username" type="text" value="<?php echo esc_attr($user_username); ?>" required="">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" id="user_password" autocomplete="off" type="password" id="user_password" maxlength="20" name="user_password" required="">
                                        </div>
                                    
                                        <!--begin::Action-->
                                        <div class="kt-login__actions">
                                            <a href="forgot-password.php" class="kt-link kt-login__link-forgot">
                                                Forgot Password ?
                                            </a>
                                            <button type="submit" id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Sign In</button>
                                        </div>
                                        <!--end::Action-->
                                    </form>
                                    <!--end::Form-->
                                    
                                    <!--begin::Divider-->
                                    <div class="kt-login__divider">
                                        <div class="kt-divider">
                                            <span></span><span>OR</span><span></span>
                                        </div>
                                    </div>
                                    <!--end::Divider-->
                                    
                                    <!--begin::Options-->
                                    <div class="kt-login__options mb-4">
                                        
                                        <?php if($configs->getConfig('FACEBOOK_LOGIN_WEB')){ ?>
                                        
                                        <a href="../admin/controller/oauth.php?provider=Facebook" class="btn btn-primary kt-btn">
                                            <i class="fab fa-facebook-f"></i>Facebook
                                        </a>
                                        
                                        <?php }
                                        if($configs->getConfig('GOOGLE_LOGIN_WEB')){ ?>
                                        
                                        <a href="../admin/controller/oauth.php?provider=Google" class="btn btn-danger kt-btn">
                                            <i class="fab fa-google"></i>Google
                                        </a>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    <!--end::Options-->
                                    
                                </div>
								
								<!--begin::Register-->
								<div class="form-bootom-text">
								    <span class="kt-login__signup-label">Don't have an account yet?</span>&nbsp;&nbsp;
								    <a href="register.php" class="kt-link kt-login__signup-link">Sign Up!</a>
								</div>
								<!--end::Register-->
								
							</div>
							
							<!--end::Signin-->
						</div>
						
						<!--end::Body-->
					</div>
					
					<!--end::Content-->
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		
		<?php include_once 'includes/global_footer_scripts.php'; ?>
		
	</body>
	<!-- end::Body -->
</html>