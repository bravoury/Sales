<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for quote_item in sales package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  quote_item module in sales package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'QuoteItem',
    'names'         => 'QuoteItems',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'QuoteItems',
        'sub'   => 'QuoteItems',
        'list'  => 'List of quote_items',
        'edit'  => 'Edit quote_item',
        'create'    => 'Create new quote_item'
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
        'quote_id'                   => 'Please select quote id',
        'name'                       => 'Please select name',
        'image'                      => 'Please select image',
        'link'                       => '',
        'qty'                        => 'Please select qty',
        'options'                    => 'Please select options',
        'price_web'                  => 'Please select price web',
        'comment'                    => 'Please select comment',
        'note'                       => 'Please select note',
        'total_fee'                  => 'Please select total fee',
        'checked'                    => 'Please select checked',
        'total_web'                  => 'Please select total web',
        'total_exchange'             => 'Please select total exchange',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'quote_id'                   => 'Quote id',
        'name'                       => 'Name',
        'image'                      => 'Image',
        'link'                       => '',
        'qty'                        => 'Qty',
        'options'                    => 'Options',
        'price_web'                  => 'Price web',
        'comment'                    => 'Comment',
        'note'                       => 'Note',
        'total_fee'                  => 'Total fee',
        'checked'                    => 'Checked',
        'total_web'                  => 'Total web',
        'total_exchange'             => 'Total exchange',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'name'                       => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'image'                      => ['name' => 'Image', 'data-column' => 2, 'checked'],
        'qty'                        => ['name' => 'Qty', 'data-column' => 3, 'checked'],
        'options'                    => ['name' => 'Options', 'data-column' => 4, 'checked'],
        'price_web'                  => ['name' => 'Price web', 'data-column' => 5, 'checked'],
        'comment'                    => ['name' => 'Comment', 'data-column' => 6, 'checked'],
        'note'                       => ['name' => 'Note', 'data-column' => 7, 'checked'],
        'total_fee'                  => ['name' => 'Total fee', 'data-column' => 8, 'checked'],
        'checked'                    => ['name' => 'Checked', 'data-column' => 9, 'checked'],
        'total_web'                  => ['name' => 'Total web', 'data-column' => 10, 'checked'],
        'total_exchange'             => ['name' => 'Total exchange', 'data-column' => 11, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'QuoteItems',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
