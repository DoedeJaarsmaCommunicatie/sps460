<?php
namespace App\Controllers\Customizer;

use Kirki;

class FooterController extends Customizer {

	/**
	 * The current section
	 *
	 * @var array $section
	 */
	protected $section = [
		'id'          => 'footer',
		'title'       => 'Footer instellingen',
		'description' => 'Hiermee kan je instellingen in de footer beheren.',
	];

	/**
	 * Add fields to the application
	 */
	public function add_fields() : void {
		Kirki::add_field(
			'sps460',
			[
				'type'     => 'image',
				'section'  => $this->section['id'],
				'label'    => esc_html( 'Footer logo' ),
				'settings' => 'footer-logo',
				'choices'  => [
					'save_as' => 'id',
				],
			]
		);
	}
}
