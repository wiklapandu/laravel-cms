<?php
    
return [
    /**
     * * Constant of Fields
     * 
    */
    'types' => [
        [
            'type' => 'text',
        ],
        [
            'type' => 'file',
        ],
        [
            'type' => 'select',
            'options' => [
                [
                    'label' => 'Yes',
                    'label_type' => 'text',
                    'value' => true,
                ],
                [
                    'label' => 'No',
                    'label_type' => 'text',
                    'value' => true,
                ],
            ]
        ],
        [
            'type' => 'radio',
            'options' => [
                [
                    'label' => 'Yes',
                    'label_type' => 'text',
                    'value' => true,
                ],
                [
                    'label' => 'No',
                    'label_type' => 'text',
                    'value' => true,
                ],
            ]
        ],
    ],
    'validations' => [
        [
            'type' => 'required',
        ]
    ]
];