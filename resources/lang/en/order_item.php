<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for order_item in sales package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  order_item module in sales package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'OrderItem',
    'names'         => 'OrderItems',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'OrderItems',
        'sub'   => 'OrderItems',
        'list'  => 'List of order_items',
        'edit'  => 'Edit order_item',
        'create'    => 'Create new order_item'
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
        'name'                       => 'Please select name',
        'image'                      => 'Please select image',
        'link'                       => 'Please select link',
        'note'                       => 'Please select note',
        'comment'                    => 'Please select comment',
        'qty'                        => 'Please select qty',
        'price_web'                  => 'Please select price web',
        'total_web'                  => 'Please select total web',
        'total_exchange'             => 'Please select total exchange',
        'ship_in_china'              => 'Please select ship in china',
        'options'                    => 'Please select options',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'order_id'                   => 'Order id',
        'name'                       => 'Name',
        'image'                      => 'Image',
        'link'                       => 'Link',
        'note'                       => 'Note',
        'comment'                    => 'Comment',
        'qty'                        => 'Qty',
        'price_web'                  => 'Price web',
        'total_web'                  => 'Total web',
        'total_exchange'             => 'Total exchange',
        'ship_in_china'              => 'Ship in china',
        'options'                    => 'Options',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'order_id'                   => ['name' => 'Order id', 'data-column' => 1, 'checked'],
        'name'                       => ['name' => 'Name', 'data-column' => 2, 'checked'],
        'image'                      => ['name' => 'Image', 'data-column' => 3, 'checked'],
        'link'                       => ['name' => 'Link', 'data-column' => 4, 'checked'],
        'note'                       => ['name' => 'Note', 'data-column' => 5, 'checked'],
        'comment'                    => ['name' => 'Comment', 'data-column' => 6, 'checked'],
        'qty'                        => ['name' => 'Qty', 'data-column' => 7, 'checked'],
        'price_web'                  => ['name' => 'Price web', 'data-column' => 8, 'checked'],
        'total_web'                  => ['name' => 'Total web', 'data-column' => 9, 'checked'],
        'total_exchange'             => ['name' => 'Total exchange', 'data-column' => 10, 'checked'],
        'ship_in_china'              => ['name' => 'Ship in china', 'data-column' => 11, 'checked'],
        'options'                    => ['name' => 'Options', 'data-column' => 12, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'OrderItems',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
