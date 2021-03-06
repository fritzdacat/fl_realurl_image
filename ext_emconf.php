<?php

$EM_CONF['fl_realurl_image'] = [
    'title'          => 'Image RealURL',
    'description'    => 'Add the RealURL functionality to image files. "typo3temp/2d972d5c89b5.jpg" goes "nice-name.jpg"! Many different fallbacks like file reference, file, content element or page settings to get the right file name.',
    'category'       => 'fe',
    'version'        => '4.0.1',
    'state'          => 'stable',
    'author'         => 'Tim Lochmueller, Sareen Millet, Dr. Ronald P. Steiner',
    'author_email'   => 'webmaster@fruit-lab.de',
    'author_company' => 'typo3.fruit-lab.de',
    'constraints'    => [
        'depends' => [
            'typo3' => '6.2.0-8.1.99',
            'php'   => '5.5.0-0.0.0',
        ],
    ],
];
