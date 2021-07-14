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
    const STATUS_TYPE_HOME_1 = 2;
    const STATUS_TYPE_HOME_2 = 3;
    const STATUS_TYPE_HOME_3 = 4;
    const STATUS_TYPE_HOME_4 = 5;

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
    protected $status_type = [
        self::STATUS_TYPE_HEADER => [
            'name' => 'Banner header',
            'class' => 'badge-success'
        ],
        self::STATUS_TYPE_HOME_1 => [
            'name' => 'Banner Home 1',
            'class' => 'badge-success'
        ],
        self::STATUS_TYPE_HOME_2 => [
            'name' => 'Banner Home 2',
            'class' => 'badge-success'
        ],
        self::STATUS_TYPE_HOME_3 => [
            'name' => 'Banner Home 3',
            'class' => 'badge-success'
        ],
        self::STATUS_TYPE_HOME_4 => [
            'name' => 'Banner Home 4',
            'class' => 'badge-success'
        ],
        self::STATUS_HIDE => [
            'name' => 'Hide',
            'class' => 'badge-default'
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
