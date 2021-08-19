<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Uni_FlashSale extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $table = 'uni_flash_sale';
    const STATUS_SILVER = 0;
    const STATUS_GOLD = 1;
    const STATUS_DIAMOND = 2;
    const STATUS_PLATINUM  = 3;
    public $statusGlobal;
    protected $g_status = [
        self::STATUS_SILVER => [
            'name' => 'Silver',
            'class' => 'badge-success'
        ],
        self::STATUS_GOLD => [
            'name' => 'Gold',
            'class' => 'badge-success'
        ],
        self::STATUS_DIAMOND => [
            'name' => 'Diamond',
            'class' => 'badge-success'
        ],
        self::STATUS_PLATINUM => [
            'name' => 'Platinum',
            'class' => 'badge-success'
        ]
    ];


    public static function getStatusGlobal()
    {
        $that = new self();
        return $that->g_status;
    }
    public function getStatus()
    {
        return Arr::get($this->g_status, $this->status, "[N\A]");
    }

}
