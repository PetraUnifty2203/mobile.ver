<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Jommla3/templates/it_construction/blueprints/styles/header.yaml',
    'modified' => 1629828472,
    'data' => [
        'name' => 'Header Styles',
        'description' => 'Header styles for the Construction theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Color',
                    'default' => 'rgba(255, 255, 255, 0)'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => ''
                ],
                'background-repeat' => [
                    'type' => 'select.select',
                    'label' => 'Background Repeat',
                    'default' => 'no-repeat',
                    'options' => [
                        'no-repeat' => 'No Repeat',
                        'repeat' => 'Repeat',
                        'repeat-x' => 'Repeat-x',
                        'repeat-y' => 'Repeat-y'
                    ]
                ],
                'background-size' => [
                    'type' => 'select.select',
                    'label' => 'Background Size',
                    'default' => 'auto',
                    'options' => [
                        'auto' => 'Auto',
                        '100%' => '100%',
                        'cover' => 'Cover'
                    ]
                ],
                'background-attachment' => [
                    'type' => 'select.select',
                    'label' => 'Background Attach.',
                    'default' => 'scroll',
                    'options' => [
                        'scroll' => 'Scroll',
                        'fixed' => 'Fixed'
                    ]
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text Color',
                    'default' => '#ffffff'
                ],
                'heading-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Heading Color',
                    'default' => '#ffffff'
                ],
                'fixed-background-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Fixed BG',
                    'default' => '#ffffff',
                    'description' => 'Background Color for the Fixed/Sticky Header'
                ],
                'fixed-text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Fixed Text',
                    'default' => '#29314e',
                    'description' => 'Text Color for the Fixed/Sticky Header'
                ]
            ]
        ]
    ]
];
