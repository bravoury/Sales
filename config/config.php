<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'tadascript',

    /*
     * Package.
     */
    'package'   => 'sales',

    /*
     * Modules.
     */
    'modules'   => ['warehouse', 
'status', 
'quote', 
'quote_item', 
'order', 
'order_item', 
'transaction'],

    'warehouse'       => [
        'model' => [
            'model'                 => \Tadascript\Sales\Models\Warehouse::class,
            'table'                 => 'warehouses',
            'presenter'             => \Tadascript\Sales\Repositories\Presenter\WarehousePresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['name',  'origin_kg_fee',  'exchange_rate'],
            'translatables'         => [],
            'upload_folder'         => 'sales/warehouse',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Tadascript',
            'package'   => 'Sales',
            'module'    => 'Warehouse',
        ],

    ],

    'status'       => [
        'model' => [
            'model'                 => \Tadascript\Sales\Models\Status::class,
            'table'                 => 'statuses',
            'presenter'             => \Tadascript\Sales\Repositories\Presenter\StatusPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['type',  'name',  'desc',  'order'],
            'translatables'         => [],
            'upload_folder'         => 'sales/status',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Tadascript',
            'package'   => 'Sales',
            'module'    => 'Status',
        ],

    ],

    'quote'       => [
        'model' => [
            'model'                 => \Tadascript\Sales\Models\Quote::class,
            'table'                 => 'quotes',
            'presenter'             => \Tadascript\Sales\Repositories\Presenter\QuotePresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['shop_name',  'shop_link',  'web_type',  'comment',  'note',  'order_fee',  'total_fee',  'checked',  'customer_id',  'is_active'],
            'translatables'         => [],
            'upload_folder'         => 'sales/quote',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Tadascript',
            'package'   => 'Sales',
            'module'    => 'Quote',
        ],

    ],

    'quote_item'       => [
        'model' => [
            'model'                 => \Tadascript\Sales\Models\QuoteItem::class,
            'table'                 => 'quote_items',
            'presenter'             => \Tadascript\Sales\Repositories\Presenter\QuoteItemPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['quote_id',  'name',  'image',  'link',  'qty',  'options',  'price_web',  'comment',  'note',  'total_fee',  'checked',  'total_web',  'total_exchange'],
            'translatables'         => [],
            'upload_folder'         => 'sales/quote_item',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Tadascript',
            'package'   => 'Sales',
            'module'    => 'QuoteItem',
        ],

    ],

    'order'       => [
        'model' => [
            'model'                 => \Tadascript\Sales\Models\Order::class,
            'table'                 => 'orders',
            'presenter'             => \Tadascript\Sales\Repositories\Presenter\OrderPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['avatar',  'average_cash',  'bales_charge',  'customer_id',  'deposit_money',  'exchange_rate',  'fee_tally',  'is_pay',  'notes',  'order_code',  'shop_fee',  'order_id',  'status',  'internal_status',  'created_shop_dt',  'kg_fee',  'quote_dt',  'weight',  'success_dt',  'ordering_dt',  'transpost_fee',  'total_fee',  'total_fee_te',  'quote_id'],
            'translatables'         => [],
            'upload_folder'         => 'sales/order',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Tadascript',
            'package'   => 'Sales',
            'module'    => 'Order',
        ],

    ],

    'order_item'       => [
        'model' => [
            'model'                 => \Tadascript\Sales\Models\OrderItem::class,
            'table'                 => 'order_items',
            'presenter'             => \Tadascript\Sales\Repositories\Presenter\OrderItemPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['order_id',  'name',  'image',  'link',  'note',  'comment',  'qty',  'price_web',  'total_web',  'total_exchange',  'ship_in_china',  'options'],
            'translatables'         => [],
            'upload_folder'         => 'sales/order_item',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Tadascript',
            'package'   => 'Sales',
            'module'    => 'OrderItem',
        ],

    ],

    'transaction'       => [
        'model' => [
            'model'                 => \Tadascript\Sales\Models\Transaction::class,
            'table'                 => 'transactions',
            'presenter'             => \Tadascript\Sales\Repositories\Presenter\TransactionPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['order_id',  'debt',  'note',  'order_fee',  'pay_fee',  'code',  'transport_fee'],
            'translatables'         => [],
            'upload_folder'         => 'sales/transaction',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Tadascript',
            'package'   => 'Sales',
            'module'    => 'Transaction',
        ],

    ],
];
