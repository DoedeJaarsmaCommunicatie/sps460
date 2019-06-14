<?php
namespace App;

use App\Providers\MenuServiceProvider;
use App\Providers\CustomizerServiceProvider;

return [
	'providers'     => [
		CustomizerServiceProvider::class,
		MenuServiceProvider::class,
	]
];
