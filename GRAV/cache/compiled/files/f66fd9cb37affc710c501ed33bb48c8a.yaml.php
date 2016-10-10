<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Clara/GitHub/grav-portfolio/grav-admin/user/themes/antimatter/blueprints/modular/text.yaml',
    'modified' => 1469373316,
    'data' => [
        'title' => 'Text',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'name' => [
                                                    'default' => 'modular/text',
                                                    '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'overrides' => [
                                    'fields' => [
                                        'header.template' => [
                                            'default' => 'modular/text',
                                            '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'content' => [
                            'fields' => [
                                'uploads' => [
                                    'label' => 'Page Media (first one will be displayed next to your content)'
                                ],
                                'header.image_align' => [
                                    'type' => 'select',
                                    'label' => 'Image position',
                                    'classes' => 'fancy',
                                    'default' => 'left',
                                    'options' => [
                                        'left' => 'Left',
                                        'right' => 'Right'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
