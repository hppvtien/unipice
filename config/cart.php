<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Gross price as base price
    |--------------------------------------------------------------------------
    |
    | This default value is used to select the method to calculate prices and taxes
    | If true the item price is managed as a gross price, so taxes will be calculated by separation/exclusion
    |
    */

    'calculator' => \Gloudemans\Shoppingcart\Calculation\DefaultCalculator::class,

    /*
    |--------------------------------------------------------------------------
    | Default tax rate
    |--------------------------------------------------------------------------
    |
    | This default tax rate will be used when you make a class implement the
    | Taxable interface and use the HasTax trait.
    |
    */

    'tax' => 10,

    /*
    |--------------------------------------------------------------------------
    | Shoppingcart database settings
    |--------------------------------------------------------------------------
    |
    | Here you can set the connection that the shoppingcart should use when
    | storing and restoring a cart.
    |
    */

    'database' => [

        'connection' => null,

        'table' => 'shoppingcart',

    ],

    /*
    |--------------------------------------------------------------------------
    | Destroy the cart on user logout
    |--------------------------------------------------------------------------
    |
    | When this option is set to 'true' the cart will automatically
    | destroy all cart instances when the user logs out.
    |
    */

    'destroy_on_logout' => false,

    /*
    |--------------------------------------------------------------------------
    | Default number format
    |--------------------------------------------------------------------------
    |
    | This defaults will be used for the formatted numbers if you don't
    | set them in the method call.
    |
    */

    'format' => [

        'decimals' => 2,

        'decimal_point' => '.',

        'thousand_separator' => ',',

    ],
    'pay_type' => [
        0=>[
            'name' => 'Chưa hoàn thành đặt hàng',
            'type' => '0',
            'class' => '',
            'bank' => '',
            'account' => '',
            'address' => '',
            'hotline' => '',
            'email' => ''
        ],
        1=>[
            'name' => 'Chuyển khoản',
            'type' => '1',
            'class' => '',
            'bank' => '',
            'account' => '',
            'address' => '',
            'hotline' => '',
            'email' => ''
        ],
        2=>[
            'name' => 'COD',
            'type' => '2',
            'class' => '',
            'bank' => 'Thanh toán khi nhận hàng',
            'account' => '',
            'address' => '',
            'hotline' => '',
            'email' => ''
        ],
        3=>[
            'name' => 'MOMO',
            'type' => '3',
            'class' => '',
            'bank' => 'Bạn phải có tài khoản Momo',
            'account' => '',
            'address' => '',
            'hotline' => '',
            'email' => ''
        ],
        4=>[
            'name' => 'VNPAY',
            'type' => '4',
            'class' => '',
            'bank' => 'Bạn phải có tài khoản VNPay',
            'account' => '',
            'address' => '',
            'hotline' => '',
            'email' => ''
        ],
    ]

];
