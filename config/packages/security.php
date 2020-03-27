<?php 


use App\Entity\Models\Users;

$container->loadFromExtension('security', array(
    // 'encoders' => array(
    //     Users::class => [
    //     	// 'bcrypt'
    //     	'algorithm' => 'auto',
    //         'cost' => 12,
        // ]

    // ),
	'firewalls' => [
	        'dev' => [
	            'pattern' => '^/(_(profiler|wdt)|css|images|js)/',
	            'security' => false,
	        ],
	        'main' => [
	            'anonymous' => 'lazy',
	        ],
		],//firewalls
		
		
));