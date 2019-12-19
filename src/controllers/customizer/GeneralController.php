<?php
namespace App\Controllers\Customizer;

use Kirki;

/**
 * Class NewsletterCustomizer
 *
 * @package App\Controllers\Customizer
 */
class GeneralController extends Customizer {

	/**
	 * The current section
	 *
	 * @var array $section
	 */
	protected $section = [
		'id'          => 'general',
		'title'       => 'Uitnodigingen blok',
		'description' => 'Dit is het blok in het bruine vlak.',
	];

	/**
	 * Add fields to the application
	 */
	public function add_fields() : void {
		Kirki::add_field(
			'sps460',
			[
				'type'     => 'text',
				'section'  => $this->section['id'],
				'label'    => esc_html( 'Titel' ),
				'settings' => 'inloop-title',
			]
		);

		Kirki::add_field(
			'sps460',
			[
				'type'     => 'editor',
				'section'  => $this->section['id'],
				'label'    => esc_html( 'Content' ),
				'settings' => 'inloop-content',
			]
		);

		Kirki::add_field(
			'sps460',
			[
				'type'      => 'repeater',
				'label'     => 'Bijeenkomsten',
				'section'   => $this->section['id'],
				'settings'  => 'date-table-rows',
				'fields'    => [
					'title'     => [
						'type'      => 'text',
						'label'     => 'Titel',
					],
					'date'      => [
						'type'      => 'date',
						'label'     => 'Datum',
					],
					'time'      => [
						'type'  => 'text',
						'label' => 'Tijd',
					],
					'location'  => [
						'type'  => 'text',
						'label' => 'Locatie'
					]
				],

			]
		);
	}

}
