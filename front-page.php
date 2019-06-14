<?php
$context = \Timber\Timber::get_context();

$context ['post'] = \Timber\Timber::get_post();

\Timber\Timber::render('templates/front-page.twig', $context);

