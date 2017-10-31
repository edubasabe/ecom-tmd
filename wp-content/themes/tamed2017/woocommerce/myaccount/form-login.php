<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>



<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

<div class="container" id="customer_login">
	<div class="row">





	<div class="col-xs-12">




			<!-- Login -->
			<div id="login" class="tab-pane">

				<div class="row">
					<div class="col-md-4 col-md-offset-4">
			<?php endif; ?>

					<h2><?php _e( 'Login', 'woocommerce' ); ?></h2>

					<form class="woocommerce-form woocommerce-form-login login" method="post">

						<?php do_action( 'woocommerce_login_form_start' ); ?>

						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<!-- <label for="username"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label> -->
							<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" placeholder="<?php _e( 'Username or email address', 'woocommerce' ); ?>" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
						</p>
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<!-- <label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label> -->
							<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" placeholder="<?php _e( 'Password', 'woocommerce' ); ?> " />
						</p>

						<?php do_action( 'woocommerce_login_form' ); ?>

						<p class="form-row">
							<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
							<input type="submit" class="btn btn-block btn-lg button" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
							<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
								<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php _e( 'Remember me', 'woocommerce' ); ?></span>
							</label>
						</p>
						<p class="woocommerce-LostPassword lost_password">
							<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
						</p>

						<?php do_action( 'woocommerce_login_form_end' ); ?>

					</form>
				</div><!-- col-md-4 -->
			</div><!-- fin del row -->

			</div><!-- Fin del login -->
			<legend>
				<fieldset>
					¿Nuevo en TAMED?
				</fieldset>
			</legend>
			<button data-toggle="collapse" data-target="#registro" class="btn btn-fibaro btn-block">Crear una cuenta</button>

			<!-- Registro -->
			<div id="registro" class="collapse">

				<div class="row">
					<div class="col-md-4 col-md-offset-4">



				<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>




						<h2><?php _e( 'Register', 'woocommerce' ); ?></h2>

						<form method="post" class="register">




							<?php do_action( 'woocommerce_register_form_start' ); ?>

							<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

								<div class="form-group">
									<!-- <label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label> -->
									<input type="text" class="form-control input-text" name="username" id="reg_username" placeholder="<?php _e( 'Username', 'woocommerce' ); ?> " value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
								</div>

							<?php endif; ?>



							<div class="form-group">
								<!-- <label for="reg_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label> -->
								<input type="email" class="form-control input-text" name="email" id="reg_email" placeholder="<?php _e( 'Email address', 'woocommerce' ); ?> " value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( $_POST['email'] ) : ''; ?>" />
							</div>

							<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

								<div class="form-group">
									<!-- <label for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label> -->
									<input type="password" class="form-control input-text" name="password" placeholder="<?php _e( 'Password', 'woocommerce' ); ?> " id="reg_password" />
								</div>

							<?php endif; ?>


							<?php do_action( 'woocommerce_register_form' ); ?>

							<div class="form-group">
								<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
								<input type="submit" class="btn btn-block btn-lg button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" />
							</div>

							<?php do_action( 'woocommerce_register_form_end' ); ?>

						</form>

					</div><!-- col-md-4 -->
				</div><!-- fin del row -->

			</div><!-- Fin del registro -->







	</div>

</div>


<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
