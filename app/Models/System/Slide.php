<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Slide extends Model
{
    use HasFactory;

    protected $guarded = [''];

    const STATUS_DEFAULT = 1;
    const STATUS_HIDE = 0;
    const STATUS_TYPE_HEADER = 1;
    const STATUS_TYPE_POST_CATE = 6;
    const STATUS_TYPE_POST_SINGLE = 7;
    const STATUS_TYPE_PRODUCT_CATE = 8;
    const STATUS_TYPE_PRODUCT_SINGLE = 9;
    const STATUS_TYPE_COMBO = 11;

    protected $status = [
        self::STATUS_DEFAULT => [
            'name' => 'Active',
            'class' => 'badge-success'
        ],
        self::STATUS_HIDE => [
            'name' => 'Hide',
            'class' => 'badge-default'
        ]
    ];
    public $status_type = [
        self::STATUS_TYPE_HEADER => [
            'name' => 'Banner header',
            'class' => 'badge-success'
        ],
        self::STATUS_HIDE => [
            'name' => 'Hide',
            'class' => 'badge-default'
        ],
        self::STATUS_TYPE_POST_CATE => [
            'name' => 'Banner Blog Category',
            'class' => 'badge-success'
        ],
        self::STATUS_TYPE_POST_SINGLE => [
            'name' => 'Banner Blog Single',
            'class' => 'badge-success'
        ],
        self::STATUS_TYPE_PRODUCT_CATE => [
            'name' => 'Banner Product Category',
            'class' => 'badge-success'
        ],
        self::STATUS_TYPE_PRODUCT_SINGLE => [
            'name' => 'Banner Product Single',
            'class' => 'badge-success'
        ],
        self::STATUS_TYPE_COMBO => [
            'name' => 'Banner Combo',
            'class' => 'badge-success'
        ]
    ];

    public function getStatus()
    {
        return Arr::get($this->status, $this->s_status, "[N\A]");
    }
    public function getStatusType()
    {
        return Arr::get($this->status_type, $this->s_type, "[N\A]");
    }
}
