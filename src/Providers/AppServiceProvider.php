<?php
namespace App\Providers;

class AppServiceProvider
{
    protected $providers;
    public function __construct()
    {
        $providers = include get_stylesheet_directory() . '/src/config/app.php';
        $this->providers = $providers['providers'];
        $this->boot();

        add_filter('timber/twig', [ $this, 'add_to_twig' ]);

    }
    
    public function boot(): void
    {
        foreach ($this->providers as $provider) {
            new $provider();
        }
    }


    public function add_to_twig($twig)
    {
		if (extension_loaded('intl')) {
			$twig->addExtension(new \Twig_Extensions_Extension_Intl());
		}
		return $twig;
    }
}
