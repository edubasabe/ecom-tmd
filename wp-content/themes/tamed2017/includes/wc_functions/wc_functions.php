<?php

/**
 * To add WooCommerce registration form custom fields.
 */
function text_domain_woo_reg_form_fields() {
    ?>
    <div class="form-group">
        <!-- <label for="billing_first_name"><?php _e('First name', 'woocommerce'); ?><span class="required">*</span></label> -->
        <input type="text" class="form-control input-text" name="billing_first_name" placeholder="<?php _e('First name', 'woocommerce'); ?>" id="billing_first_name" value="<?php if (!empty($_POST['billing_first_name'])) esc_attr_e($_POST['billing_first_name']); ?>" />
    </div>
    <div class="form-group">
        <!-- <label for="billing_last_name"><?php _e('Last name', 'woocommerce'); ?><span class="required">*</span></label> -->
        <input type="text" class="form-control input-text" name="billing_last_name" placeholder="<?php _e('Last name', 'woocommerce'); ?>" id="billing_last_name" value="<?php if (!empty($_POST['billing_last_name'])) esc_attr_e($_POST['billing_last_name']); ?>" />
    </div>
    <div class="clear"></div>
    <?php
}

add_action('woocommerce_register_form_start', 'text_domain_woo_reg_form_fields');

/**
 * To save WooCommerce registration form custom fields.
 */
function text_domain_woo_save_reg_form_fields($customer_id) {
    //First name field
    if (isset($_POST['billing_first_name'])) {
        update_user_meta($customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']));
        update_user_meta($customer_id, 'billing_first_name', sanitize_text_field($_POST['billing_first_name']));
    }
    //Last name field
    if (isset($_POST['billing_last_name'])) {
        update_user_meta($customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']));
        update_user_meta($customer_id, 'billing_last_name', sanitize_text_field($_POST['billing_last_name']));
    }
}

add_action('woocommerce_created_customer', 'text_domain_woo_save_reg_form_fields');
