<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for warehouse in sales package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  warehouse module in sales package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Warehouse',
    'names'         => 'Warehouses',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Warehouses',
        'sub'   => 'Warehouses',
        'list'  => 'List of warehouses',
        'edit'  => 'Edit warehouse',
        'create'    => 'Create new warehouse'
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
        'name'                       => 'Please select name',
        'origin_kg_fee'              => 'Please select origin kg fee',
        'exchange_rate'              => 'Please select exchange rate',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'name'                       => 'Name',
        'origin_kg_fee'              => 'Origin kg fee',
        'exchange_rate'              => 'Exchange rate',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'name'                       => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'origin_kg_fee'              => ['name' => 'Origin kg fee', 'data-column' => 2, 'checked'],
        'exchange_rate'              => ['name' => 'Exchange rate', 'data-column' => 3, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Warehouses',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
