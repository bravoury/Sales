<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for status in sales package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  status module in sales package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Status',
    'names'         => 'Statuses',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Statuses',
        'sub'   => 'Statuses',
        'list'  => 'List of statuses',
        'edit'  => 'Edit status',
        'create'    => 'Create new status'
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
        'type'                       => 'Please select type',
        'name'                       => 'Please select name',
        'desc'                       => 'Please select desc',
        'order'                      => 'Please select order',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'type'                       => 'Type',
        'name'                       => 'Name',
        'desc'                       => 'Desc',
        'order'                      => 'Order',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'type'                       => ['name' => 'Type', 'data-column' => 1, 'checked'],
        'name'                       => ['name' => 'Name', 'data-column' => 2, 'checked'],
        'desc'                       => ['name' => 'Desc', 'data-column' => 3, 'checked'],
        'order'                      => ['name' => 'Order', 'data-column' => 4, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Statuses',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
