<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\Jommla3/templates/it_construction/particles/feedback.yaml',
    'modified' => 1629828473,
    'data' => [
        'name' => 'Feedback',
        'description' => 'Display feedback.',
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
                    'description' => 'Globally enable Feedback particles.',
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
                    'description' => 'Select the number of items per slide for the Slider and Slideset behaviour.',
                    'placeholder' => 'Select...',
                    'default' => 3,
                    'options' => [
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5
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
                    'default' => 'dots',
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
                    'label' => 'Feedback Items',
                    'description' => 'Create each Feedback item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.feedback' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Feedback',
                            'description' => 'Type in the feedback text.'
                        ],
                        '.customername' => [
                            'type' => 'input.text',
                            'label' => 'Name',
                            'description' => 'Type in the name of the person who provided the feedback.'
                        ],
                        '.position' => [
                            'type' => 'input.text',
                            'label' => 'Position',
                            'description' => 'Type in the position of the person who provided the feedback.'
                        ],
                        '.company' => [
                            'type' => 'input.text',
                            'label' => 'Company',
                            'description' => 'Type in the company of the person who provided the feedback.'
                        ],
                        '.wordconnector' => [
                            'type' => 'input.text',
                            'label' => 'Word Connector',
                            'description' => 'Type in the word that will appear between \'Position\' and \'Company\', for example \'at\'.'
                        ],
                        '.companylink' => [
                            'type' => 'input.text',
                            'label' => 'Company Link',
                            'description' => 'Type in the link to the company website.'
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
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select the image of the person who provided the feedback.'
                        ],
                        '.alt' => [
                            'type' => 'input.text',
                            'label' => 'Image Alt Tag'
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
