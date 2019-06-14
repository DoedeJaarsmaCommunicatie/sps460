<?php
/**
 * Provides service for additional customizer fields.
 *
 * @author Mitch Hijlkema <mail@mitchhijlkema.nl>
 * @package App\Providers
 */

namespace App\Providers;

use App\Controllers\Customizer\FooterController;
use App\Controllers\Customizer\GeneralController;
use App\Controllers\Customizer\MailchimpController;
use Kirki;

/**
 * Class CustomizerServiceProvider
 *
 * @package App\Providers
 */
class CustomizerServiceProvider {

	/**
	 * CustomizerServiceProvider constructor.
	 */
	public function __construct() {
		$this->boot();
	}

	/**
	 * Boots the customizer
	 *
	 * @return void
	 */
	public function boot(): void {
		Kirki::add_config(
			'sps460',
			[
				'capability'  => 'edit_theme_options',
				'option_type' => 'theme_mod',
			]
		);

		new GeneralController();
		new MailchimpController();
		new FooterController();
	}
}
