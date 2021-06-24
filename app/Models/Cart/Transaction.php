<?php

namespace App\Models\Cart;

use App\Models\User;
use App\Models\Cart\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $table = 'transactions';

    const STATUS_DEFAULT = 1;
    const STATUS_PROCESS = 2;
    const STATUS_SUCCESS = 3;
    const STATUS_TRASH  = 4;
    const STATUS_CANCEL = -1;
    public $statusGlobal;
    protected $status = [
        self::STATUS_DEFAULT => [
            'name' => 'Tiếp nhận',
            'class' => 'badge-default'
        ],
        self::STATUS_PROCESS => [
            'name' => 'Đang xử lý',
            'class' => 'badge-success'
        ],
        self::STATUS_SUCCESS => [
            'name' => 'Hoàn thành',
            'class' => 'badge-success'
        ],
        self::STATUS_CANCEL => [
            'name' => 'Huỷ bỏ',
            'class' => 'badge-dange'
        ],
        self::STATUS_TRASH => [
            'name' => 'Thùng rác',
            'class' => 'badge-dange'
        ]
    ];

    public static function getStatusGlobal()
    {
        $that = new self();
        return $that->status;
    }

    public function getStatus()
    {
        return Arr::get($this->status, $this->t_status, "[N\A]");
    }

    public function user()
    {
        return $this->belongsTo(User::class,'t_user_id');
    }
    public function order()
    {
        return $this->hasOne(order::class,'o_transaction_id');
    }
}
