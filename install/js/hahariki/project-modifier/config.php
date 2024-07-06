<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/project-modifier.bundle.css',
	'js' => 'dist/project-modifier.bundle.js',
	'rel' => [
		'scrumtools.notification-service',
		'main.core.events',
		'ui.entity-selector',
		'main.loader',
		'ui.confetti',
		'ui.dialogs.messagebox',
		'main.core',
	],
	'skip_core' => false,
];