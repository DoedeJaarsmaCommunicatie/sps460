<?php
namespace App\Controllers\Customizer;

use Kirki;

/**
 * Class MailchimpController
 *
 * @package App\Controllers\Customizer
 */
class MailchimpController extends Customizer {

	/**
	 * The current section
	 *
	 * @var array $section
	 */
	protected $section = [
		'id'          => 'mailchimp',
		'title'       => 'Mailchimp instellingen',
		'description' => 'Dit is het blok naast het bruine vlak',
	];

	public function add_fields() : void {
		Kirki::add_field(
			'sps460',
			[
				'type'     => 'text',
				'section'  => $this->section['id'],
				'label'    => esc_html( 'Titel' ),
				'settings' => 'mailchimp-titel',
			]
		);

		Kirki::add_field(
			'sps460',
			[
				'type'     => 'editor',
				'section'  => $this->section['id'],
				'label'    => esc_html( 'Content' ),
				'settings' => 'mailchimp-content',
			]
		);

		// Kirki::add_field( 'sps460', []);
	}
}
