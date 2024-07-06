<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/main-page.bundle.css',
	'js' => 'dist/main-page.bundle.js',
	'rel' => [
		'main.core',
	],
	'skip_core' => false,
];
