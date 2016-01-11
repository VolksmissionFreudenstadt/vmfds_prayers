<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VMFDS.' . $_EXTKEY,
	'Requests',
	array(
		'Request' => 'list, show, new, create, edit, update, delete, approve',
		
	),
	// non-cacheable actions
	array(
		'Request' => 'create, update, delete, ',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VMFDS.' . $_EXTKEY,
	'Kool',
	array(
		'Request' => 'list, show, new, create, edit, update, delete, approve',
		
	),
	// non-cacheable actions
	array(
		'Request' => 'create, update, delete, ',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'VMFDS.' . $_EXTKEY,
	'External',
	array(
		'Request' => 'list, show, new, create, edit, update, delete, approve',
		
	),
	// non-cacheable actions
	array(
		'Request' => 'create, update, delete, ',
		
	)
);
