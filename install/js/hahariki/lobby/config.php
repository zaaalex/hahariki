<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/lobby.bundle.css',
	'js' => 'dist/lobby.bundle.js',
	'rel' => [
		'main.core',
	],
	'skip_core' => false,
];
