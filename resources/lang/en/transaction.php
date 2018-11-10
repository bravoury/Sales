<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for transaction in sales package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  transaction module in sales package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Transaction',
    'names'         => 'Transactions',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Transactions',
        'sub'   => 'Transactions',
        'list'  => 'List of transactions',
        'edit'  => 'Edit transaction',
        'create'    => 'Create new transaction'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'order_id'                   => 'Please select order id',
        'debt'                       => 'Please select debt',
        'note'                       => 'Please select note',
        'order_fee'                  => 'Please select order fee',
        'pay_fee'                    => 'Please select pay fee',
        'code'                       => 'Please select code',
        'transport_fee'              => 'Please select transport fee',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'order_id'                   => 'Order id',
        'debt'                       => 'Debt',
        'note'                       => 'Note',
        'order_fee'                  => 'Order fee',
        'pay_fee'                    => 'Pay fee',
        'code'                       => 'Code',
        'transport_fee'              => 'Transport fee',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'order_id'                   => ['name' => 'Order id', 'data-column' => 1, 'checked'],
        'debt'                       => ['name' => 'Debt', 'data-column' => 2, 'checked'],
        'note'                       => ['name' => 'Note', 'data-column' => 3, 'checked'],
        'order_fee'                  => ['name' => 'Order fee', 'data-column' => 4, 'checked'],
        'pay_fee'                    => ['name' => 'Pay fee', 'data-column' => 5, 'checked'],
        'code'                       => ['name' => 'Code', 'data-column' => 6, 'checked'],
        'transport_fee'              => ['name' => 'Transport fee', 'data-column' => 7, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Transactions',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
