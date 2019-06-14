<?php
/**
 * This is an abstract to use as building block for customizer components.
 *
 * @author Mitch Hijlkema <mail@mitchhijlkema.nl>
 * @package App;
 */
namespace App\Controllers\Customizer;
use Kirki;
/**
 * Class Customizer
 *
 * @package App\Controllers\Customizer
 */
abstract class Customizer {
	/**
	 * If there is a panel, it should be an array.
	 *
	 * @var array|null $panel
	 */
	protected $panel;
	/**
	 * If there is a section it should be an array.
	 *
	 * @var array|null $section
	 */
	protected $section;
	/**
	 * Customizer constructor.
	 */
	public function __construct() {
		$this->add_panel();
		$this->add_section();
		$this->add_fields();
	}
	/**
	 * Adds fields to the section.
	 *
	 * @return void
	 */
	abstract public function add_fields(): void;
	/**
	 * Adds a section for this customizer.
	 *
	 * @return void
	 */
	public function add_section(): void {
		Kirki::add_section(
			$this->section['id'],
			[
				'title'       => esc_html( $this->section['title'] ),
				'description' => esc_html( $this->section['description'] ),
				'panel'       => $this->panel['id'] ?? null,
				'priority'    => $this->section['priority'] ?? 10,
			]
		);
	}
	/**
	 * Adds a panel if there is one.
	 *
	 * @return void
	 */
	public function add_panel(): void {
		if ( $this->panel ) {
			Kirki::add_panel(
				$this->panel['id'],
				[
					'priority'    => $this->panel['priority'] ?? 10,
					'title'       => esc_html( $this->panel['title'] ),
					'description' => esc_html( $this->panel['description'] ),
				]
			);
		}
	}
}