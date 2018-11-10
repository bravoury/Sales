<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for quote in sales package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  quote module in sales package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Quote',
    'names'         => 'Quotes',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Quotes',
        'sub'   => 'Quotes',
        'list'  => 'List of quotes',
        'edit'  => 'Edit quote',
        'create'    => 'Create new quote'
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
        'shop_name'                  => 'Please select shop name',
        'shop_link'                  => 'Please select shop link',
        'web_type'                   => 'Please select web type',
        'comment'                    => 'Please select comment',
        'note'                       => 'Please select note',
        'order_fee'                  => 'Please select order fee',
        'total_fee'                  => 'Please select total fee',
        'checked'                    => 'Please select checked',
        'customer_id'                => 'Please select customer id',
        'is_active'                  => 'Please select status',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'shop_name'                  => 'Shop name',
        'shop_link'                  => 'Shop link',
        'web_type'                   => 'Web type',
        'comment'                    => 'Comment',
        'note'                       => 'Note',
        'order_fee'                  => 'Order fee',
        'total_fee'                  => 'Total fee',
        'checked'                    => 'Checked',
        'customer_id'                => 'Customer id',
        'is_active'                  => 'Status',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'shop_name'                  => ['name' => 'Shop name', 'data-column' => 1, 'checked'],
        'shop_link'                  => ['name' => 'Shop link', 'data-column' => 2, 'checked'],
        'web_type'                   => ['name' => 'Web type', 'data-column' => 3, 'checked'],
        'comment'                    => ['name' => 'Comment', 'data-column' => 4, 'checked'],
        'note'                       => ['name' => 'Note', 'data-column' => 5, 'checked'],
        'order_fee'                  => ['name' => 'Order fee', 'data-column' => 6, 'checked'],
        'total_fee'                  => ['name' => 'Total fee', 'data-column' => 7, 'checked'],
        'checked'                    => ['name' => 'Checked', 'data-column' => 8, 'checked'],
        'customer_id'                => ['name' => 'Customer id', 'data-column' => 9, 'checked'],
        'is_active'                  => ['name' => 'Status', 'data-column' => 10, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Quotes',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
