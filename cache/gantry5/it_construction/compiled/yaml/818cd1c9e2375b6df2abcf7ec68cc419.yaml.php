<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Jommla3/templates/it_construction/particles/content-pro.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => 'Content PRO',
        'description' => 'Display content in an awesome way.',
        'type' => 'particle',
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
                    'description' => 'Globally enable Content PRO particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>This Particle requires the "UIkit for Gantry5" Atom to be loaded.</strong>'
                ],
                'mainheading' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Type in the title.',
                    'placeholder' => 'Enter Title',
                    'default' => ''
                ],
                'introtext' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Intro Text',
                    'description' => 'Type in the intro text.',
                    'placeholder' => 'Enter Intro Text',
                    'default' => ''
                ],
                'style' => [
                    'type' => 'select.select',
                    'label' => 'Style',
                    'description' => 'Select the style which defines the particle layout on the frontend.',
                    'placeholder' => 'Select...',
                    'default' => 'style1',
                    'options' => [
                        'style1' => 'Style 1',
                        'style2' => 'Style 2',
                        'style3' => 'Style 3'
                    ]
                ],
                'behaviour' => [
                    'type' => 'select.select',
                    'label' => 'Behaviour',
                    'description' => 'Select the particle behaviour - static, slider or slideset.',
                    'placeholder' => 'Select...',
                    'default' => 'static',
                    'options' => [
                        'static' => 'Static',
                        'slider' => 'Slider',
                        'slideset' => 'Slideset'
                    ]
                ],
                'columns' => [
                    'type' => 'select.select',
                    'label' => 'Items per Slide',
                    'description' => 'Select the number of items per slide for the Slider and Slideset behaviour. This option also acts as \'Items per Row\' for the \'Static\' behavior.',
                    'placeholder' => 'Select...',
                    'default' => 3,
                    'options' => [
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5,
                        6 => 6,
                        10 => 10
                    ]
                ],
                'gutter' => [
                    'type' => 'select.select',
                    'label' => 'Gutter',
                    'description' => 'Enable or disable the Content PRO gutter (to have space between the items or not).',
                    'placeholder' => 'Select...',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled'
                    ]
                ],
                'autoplay' => [
                    'type' => 'select.select',
                    'label' => 'Autoplay',
                    'description' => 'Select whether or not the Slider and Slideset items should switch automatically',
                    'placeholder' => 'Select...',
                    'default' => 'disable',
                    'options' => [
                        'enable' => 'Enabled',
                        'disable' => 'Disabled'
                    ]
                ],
                'autoplayInterval' => [
                    'type' => 'input.text',
                    'label' => 'Autoplay Interval',
                    'description' => 'Set the timespan in miliseconds between switching the Slider and Slideset items.',
                    'default' => 7000
                ],
                'navigation' => [
                    'type' => 'select.select',
                    'label' => 'Navigation',
                    'description' => 'Select the navigation type (Slideset ONLY).',
                    'placeholder' => 'Select...',
                    'default' => 'arrows',
                    'options' => [
                        'arrows' => 'Arrows',
                        'dots' => 'Dots',
                        'both' => 'Both'
                    ]
                ],
                'animation' => [
                    'type' => 'select.select',
                    'label' => 'Animation',
                    'description' => 'Select the animation type (Slideset ONLY).',
                    'placeholder' => 'Select...',
                    'default' => 'fade',
                    'options' => [
                        'fade' => 'Fade',
                        'scale' => 'Scale',
                        'slide-horizontal' => 'Slide-horizontal',
                        'slide-vertical' => 'Slide-vertical',
                        'slide-top' => 'Slide-top',
                        'slide-bottom' => 'Slide-bottom'
                    ]
                ],
                'duration' => [
                    'type' => 'input.text',
                    'label' => 'Animation Duration',
                    'description' => 'Set the animation duration in miliseconds (Slideset ONLY).',
                    'default' => 200
                ],
                'lightbox' => [
                    'type' => 'select.select',
                    'label' => 'Lightbox',
                    'description' => 'Enable or disable the image lightbox/popup.',
                    'placeholder' => 'Select...',
                    'default' => 'enable',
                    'options' => [
                        'enable' => 'Enabled',
                        'disable' => 'Disabled',
                        'disablelink' => 'Disabled (Item Link)'
                    ]
                ],
                'pullup' => [
                    'type' => 'input.checkbox',
                    'label' => 'Pull Up',
                    'description' => 'If enabled, a negative \'margin-top\' will be applied to the particle. Enabling this option is recommended only when the particle is just below the slider.',
                    'default' => 0
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.',
                    'default' => NULL
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
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Content PRO Items',
                    'description' => 'Create each Content PRO item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image'
                        ],
                        '.alt' => [
                            'type' => 'input.text',
                            'label' => 'Image Alt Tag'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Title Link'
                        ],
                        '.target' => [
                            'type' => 'select.select',
                            'label' => 'Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_parent',
                            'options' => [
                                '_parent' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description'
                        ],
                        '.date' => [
                            'type' => 'input.text',
                            'label' => 'Date',
                            'description' => 'Enter the date that you want to be associated with this item. The field is mostly used as a \'Published Date\'. Being able to type in the date manually gives you a great flexibility as you can show the exact format you want.'
                        ],
                        '.specialtext' => [
                            'type' => 'input.text',
                            'label' => 'Special Text'
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Special Icon',
                            'description' => 'Choose an icon to be placed in front of \'Special Text\'.'
                        ],
                        '.bottomlink' => [
                            'type' => 'input.text',
                            'label' => 'Bottom Link',
                            'description' => 'Enter the clickable text you want to be shown. The link is the URL you enter in the \'Title Link\' field above.'
                        ],
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Class'
                        ],
                        '.extra' => [
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
        ]
    ]
];
