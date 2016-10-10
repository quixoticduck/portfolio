<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/claraalder/gitHub/grav-portfolio/grav-admin/user/config/site.yaml',
    'modified' => 1469278448,
    'data' => [
        'title' => 'Clara Alder',
        'author' => [
            'name' => 'Clara Alder',
            'email' => 'quixoticduck@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
