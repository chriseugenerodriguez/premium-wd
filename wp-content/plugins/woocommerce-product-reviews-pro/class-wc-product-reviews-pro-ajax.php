<?php
/**
 * WooCommerce Product Reviews Pro
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@skyverge.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade WooCommerce Product Reviews Pro to newer
 * versions in the future. If you wish to customize WooCommerce Product Reviews Pro for your
 * needs please refer to http://docs.woothemes.com/document/woocommerce-product-reviews-pro/ for more information.
 *
 * @package   WC-Product-Reviews-Pro/Classes
 * @author    SkyVerge
 * @copyright Copyright (c) 2015, SkyVerge, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * WC Product Reviews Pro AJAX class
 *
 * Handles all AJAX actions
 *
 * @since 1.0.0
 */
class WC_Product_Reviews_Pro_AJAX {


	/**
	 * Adds required wp_ajax_* hooks
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		add_action( 'wp_ajax_wc_product_reviews_pro_vote',        array( $this, 'cast_vote' ) );
		add_action( 'wp_ajax_nopriv_wc_product_reviews_pro_vote', array( $this, 'cast_vote' ) );

		add_action( 'wp_ajax_wc_product_reviews_pro_flag',        array( $this, 'flag_contribution' ) );
		add_action( 'wp_ajax_nopriv_wc_product_reviews_pro_flag', array( $this, 'flag_contribution' ) );

		add_action( 'wp_ajax_wc_product_reviews_pro_refresh_nonce',        array( $this, 'refresh_nonce' ) );
		add_action( 'wp_ajax_nopriv_wc_product_reviews_pro_refresh_nonce', array( $this, 'refresh_nonce' ) );

		add_action( 'wp_ajax_wc_product_reviews_pro_contributions_list',        array( $this, 'contributions_list' ) );
		add_action( 'wp_ajax_nopriv_wc_product_reviews_pro_contributions_list', array( $this, 'contributions_list' ) );

		add_action( 'wp_ajax_wc_product_reviews_pro_remove_contribution_attachment', array( $this, 'remove_contribution_attachment' ) );

		// Handle AJAX login & registration via WooCommerce
		//add_filter( 'login_errors',                            array( $this, 'ajax_login_error' ), 9999 );
		//add_filter( 'woocommerce_login_redirect',              array( $this, 'ajax_login_success' ), 9999 );
		//add_filter( 'woocommerce_registration_redirect',       array( $this, 'ajax_registration_success' ), 9999 );
		//add_filter( 'woocommerce_process_registration_errors', array( $this, 'record_ajax_registration_errors_start' ), 1 );
		add_filter( 'init',                                    array( $this, 'ajax_registration_error' ), 11 );

	}


	/**
	 * Verifies AJAX request is valid
	 *
	 * @since 1.0.0
	 *
	 * @param string $nonce
	 * @param string $action
	 *
	 * @return void|bool
	 */
	private function verify_request( $nonce, $action ) {
		retur true;
		if ( ! wp_verify_nonce( $nonce, $action ) ) {
			wp_send_json_error( array(
				'message' => __( 'You have taken too long, please go back and try again.', WC_Product_Reviews_Pro::TEXT_DOMAIN )
			) );
		}

		return true;
	}


	/**
	 * Vote for a contribution
	 *
	 * @since 1.0.0
	 */
	public function cast_vote() {

		$this->verify_request( $_POST['security'], 'wc-product-reviews-pro' );

		// Check that user is logged in
		if ( ! is_user_logged_in() ) {
			wp_send_json_error( array(
				'message' => __( 'You need to be logged in to vote.', WC_Product_Reviews_Pro::TEXT_DOMAIN )
			) );
		}

		// Check that the request is valid
		if ( ! isset( $_POST['comment_id'] ) || ! isset( $_POST['vote'] ) ) {
			wp_send_json_error( array(
				'message' => __( 'Invalid request.', WC_Product_Reviews_Pro::TEXT_DOMAIN )
			) );
		}

		// Get contribution
		$contribution = wc_product_reviews_pro_get_contribution( $_POST['comment_id'] );

		if ( ! $contribution ) {
			wp_send_json_error( array(
				'message' => __( 'Invalid request. Contribution not found.', WC_Product_Reviews_Pro::TEXT_DOMAIN )
			) );
		}

		// Cast the vote
		$vote_count = $contribution->cast_vote( $_POST['vote'] );

		if ( $vote_count === false ) {
			$message = $contribution->get_failure_message();
			wp_send_json_error( array(
				'message' => $message ? $message : __( 'Could not cast your vote. Please try again later.', WC_Product_Reviews_Pro::TEXT_DOMAIN )
			) );
		}

		// Respond with new vote count and message
		wp_send_json_success( array(
			'message'        => __( 'Vote has been cast. Thanks!', WC_Product_Reviews_Pro::TEXT_DOMAIN ),
			'total_votes'    => $contribution->get_vote_count(),
			'positive_votes' => $contribution->get_positive_votes(),
			'negative_votes' => $contribution->get_negative_votes(),
		) );
	}


	/**
	 * Flag a contribution via AJAX
	 *
	 * @since 1.0.0
	 */
	public function flag_contribution() {

		$this->verify_request( $_POST['security'], 'wc-product-reviews-pro' );

		// Check that the request is valid
		if ( ! isset( $_POST['comment_id'] ) ) {
			wp_send_json_error( array(
				'message' => __( 'Invalid request.', WC_Product_Reviews_Pro::TEXT_DOMAIN )
			) );
		}

		// Get contribution
		$contribution = wc_product_reviews_pro_get_contribution( $_POST['comment_id'] );

		if ( ! $contribution ) {
			wp_send_json_error( array(
				'message' => __( 'Invalid request. Contribution not found.', WC_Product_Reviews_Pro::TEXT_DOMAIN )
			) );
		}

		// Flag contribution
		$flagged = $contribution->flag( isset( $_POST['reason'] ) ? $_POST['reason'] : '', get_current_user_id() );

		if ( ! $flagged ) {
			$message = $contribution->get_failure_message();
			wp_send_json_error( array(
				'message' => $message ? $message : __( 'Could not flag contribution. Please try again later.', WC_Product_Reviews_Pro::TEXT_DOMAIN )
			) );
		}

		wp_send_json_success( array(
			'message' => __( 'Contribution has been flagged. Thanks!', WC_Product_Reviews_Pro::TEXT_DOMAIN ),
		) );
	}


	/**
	 * Return login success in JSON
	 *
	 * Intercepts WooCommerce login success in case of an AJAX
	 * login request and sends back results in JSON, skipping
	 * the loading of the rest of the page
	 *
	 * @since 1.0.0
	 * @param string $redirect
	 */
	public function ajax_login_success( $redirect ) {

		if ( isset( $_POST['_wc_product_reviews_pro_ajax_login'] ) ) {
			wp_send_json_success();
		}

		return $redirect;
	}


	/**
	 * Return login error in JSON
	 *
	 * Intercepts WooCommerce login error in case of an AJAX
	 * login request and sends back results in JSON, skipping
	 * the loading of the rest of the page
	 *
	 * @since 1.0.0
	 *
	 * @param string $errors
	 */
	public function ajax_login_error( $errors ) {

		if ( isset( $_POST['_wc_product_reviews_pro_ajax_login'] ) ) {

			// Format the error(s) for output
			ob_start();
			wc_print_notice( $errors, 'error' );
			$message = ob_get_clean();

			wp_send_json_error( array(
				'message' => $message
			) );
		}
	}


	/**
	 * Return registration success in JSON
	 *
	 * Intercepts WooCommerce registration success redirect in case of an AJAX
	 * registration request and sends back results in JSON, skipping
	 * the loading of the rest of the page
	 */
	public function ajax_registration_success( $redirect ) {

		if ( isset( $_POST['_wc_product_reviews_pro_ajax_register'] ) ) {
			wp_send_json_success();
		}

		return $redirect;
	}


	/**
	 * Add a special safety-net error notice before all other
	 * registration errors.
	 *
	 * This is a safety-net in place to handle situations where there
	 * may be error notices added to WC session before registration errors.
	 * The error notices array is later sliced based on the position of this
	 * error notice in `ajax_registration_error` method.
	 */
	public function record_ajax_registration_errors_start( $error ) {

		if ( isset( $_POST['_wc_product_reviews_pro_ajax_register'] ) ) {
			wc_add_notice( '_wc_product_reviews_pro_ajax_registration_errors_start', 'error' );
		}

		return $error;
	}


	/**
	 * Return login error in JSON
	 *
	 * Intercepts WooCommerce login error in case of an AJAX
	 * login request and sends back results in JSON, skipping
	 * the loading of the rest of the page
	 *
	 * @param string $errors
	 *
	 * @since 1.0.0
	 */
	public function ajax_registration_error( $errors ) {

		if ( isset( $_POST['_wc_product_reviews_pro_ajax_register'] ) && wc_notice_count( 'error' ) > 0 ) {

			$all_notices   = WC()->session->get( 'wc_notices', array() );
			$error_notices = $all_notices['error'];

			// Safety net against unwanted error notices not related to registration
			$errors_start = array_search( '_wc_product_reviews_pro_ajax_registration_errors_start', $error_notices );

			if ( false !== $errors_start ) {
				$error_notices = array_slice( $error_notices, $errors_start + 1 );
			}

			// Format the error(s) for output
			ob_start();
			foreach ( $error_notices as $notice ) {
				wc_print_notice( $notice, 'error' );
			}
			$message = ob_get_clean();

			// Send JSON error
			wp_send_json_error( array(
				'message' => $message
			) );
		}
	}


	/**
	 * Render contributions list HTML
	 *
	 * @since 1.0.0
	 */
	public function contributions_list() {

		// Bail out if product ID is not provided
		if ( ! isset( $_REQUEST['product_id'] ) ) {
			return;
		}

		global $wp_query;

		query_posts( array(
			'p'            => $_REQUEST['product_id'],
			'post_type'    => 'product',
			'withcomments' => 1,
			'feed'         => 1,
		) );

		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();

				ob_start();
				comments_template( '', true );
				ob_end_clean();

				$filters        = wc_product_reviews_pro_get_current_comment_filters();
				$current_type   = isset( $filters['comment_type'] ) ? $filters['comment_type'] : null;
				$current_rating = isset( $filters['rating'] ) ? $filters['rating'] : null;

				wc_get_template( 'single-product/contributions-list.php', array(
					'comments'       => $wp_query->comments,
					'current_type'   => $current_type,
					'current_rating' => $current_rating,
				) );
			}
		}

		exit;
	}


	/**
	 * Return nonce to an AJAX request
	 *
	 * @since 1.0.0
	 */
	public function refresh_nonce() {
		echo wp_create_nonce( 'wc-product-reviews-pro' );
		exit;
	}


	/**
	 * Remove the contribution attachment
	 *
	 * @since 1.0.0
	 */
	public function remove_contribution_attachment() {

		$this->verify_request( $_POST['security'], 'wc-product-reviews-pro-admin' );

		// Bail out if contribution/comment ID is not provided
		if ( ! isset( $_POST['comment_id'] ) || ! $_POST['comment_id'] ) {
			wp_send_json_error( array(
				'message' => __( 'Invalid request.', WC_Product_Reviews_Pro::TEXT_DOMAIN )
			) );
		}

		// Get contribution
		$contribution = wc_product_reviews_pro_get_contribution( $_POST['comment_id'] );

		if ( ! $contribution ) {
			wp_send_json_error( array(
				'message' => __( 'Invalid request. Contribution not found.', WC_Product_Reviews_Pro::TEXT_DOMAIN )
			) );
		}

		if ( $contribution->has_attachment() ) {

			$attachment_id  = $contribution->get_attachment_id();
			$attachment_url = $contribution->get_attachment_url();

			if ( $attachment_url ) {
				delete_comment_meta( $contribution->id, 'attachment_url' );
			}

			if ( $attachment_id ) {
				delete_comment_meta( $contribution->id, 'attachment_id' );
				wp_delete_attachment( $attachment_id );
			}

			wp_send_json_success( array(
				'message' => __( 'Attachment successfully removed.', WC_Product_Reviews_Pro::TEXT_DOMAIN )
			) );
		}
	}


}
