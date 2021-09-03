<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\Jommla3/templates/it_construction/particles/logo.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => 'Logo / Image',
        'description' => 'Display a logo or an image.',
        'type' => 'particle',
        'icon' => 'fa-file-image-o',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable logo particles.',
                    'default' => true
                ],
                'url' => [
                    'type' => 'input.text',
                    'label' => 'Url',
                    'description' => 'Url for the image. Leave empty to go to home page.'
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Normal Image',
                    'description' => 'Select desired logo image for the normal Header.'
                ],
                'imagefixed' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Fixed Image',
                    'description' => 'Select desired logo image for the Fixed/Sticky Header.'
                ],
                'text' => [
                    'type' => 'input.text',
                    'label' => 'Text',
                    'description' => 'Input logo description text.'
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Set a specific CSS class for custom styling.'
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Tag Attributes',
                    'description' => 'Extra Tag attributes.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ]
            ]
        ]
    ]
];
