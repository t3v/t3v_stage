<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'T3v Stage',
  'description' => 'The stage extension of TYPO3Voila.',
  'author' => 'Maik Kempe',
  'author_email' => 'mkempe@bitaculous.com',
  'author_company' => 'Bitaculous - It\'s all about the bits, baby!',
  'category' => 'be',
  'state' => 'stable',
  'version' => '1.1.0',
  'createDirs' => '',
  'uploadfolder' => false,
  'clearCacheOnLoad' => false,
  'constraints' => [
    'depends' => [
      'typo3' => '7.6.0-8.7.99',
      'vhs' => '',
      't3v_core' => '',
      't3v_content' => ''
    ],
    'conflicts' => [
    ],
    'suggests' => []
  ],
  'autoload' => [
    'psr-4' => [
      'T3v\\T3vStage\\' => 'Classes'
    ]
  ],
  'autoload-dev' => [
    'psr-4' => [
      'T3v\\T3vStage\\Tests\\' => 'Tests'
    ]
  ]
];