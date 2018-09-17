<?php
/**
 * REST API Reports taxes controller
 *
 * Handles requests to the /reports/taxes endpoint.
 *
 * @package WooCommerce/API
 * @since   3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * REST API Reports taxes controller class.
 *
 * @package WooCommerce/API
 * @extends WC_REST_Reports_Controller
 */
class WC_REST_Reports_Taxes_Controller extends WC_REST_Reports_Controller {

	/**
	 * Endpoint namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'wc/v3';

	/**
	 * Route base.
	 *
	 * @var string
	 */
	protected $rest_base = 'reports/taxes';
}
