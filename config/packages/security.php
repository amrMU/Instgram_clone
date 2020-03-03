<?php 


use App\Entity\Models\Users;

$container->loadFromExtension('security', array(
    'encoders' => array(
        Users::class => 'bcrypt',
    ),
));