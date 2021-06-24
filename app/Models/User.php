<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [''];
    const STATUS_DEFAULT = 1;
    const STATUS_PROCESS = 2;
    public $statusGlobal;
    protected $status = [
        self::STATUS_DEFAULT => [
            'name' => 'Đang hoạt động',
            'class' => 'badge-default'
        ],
        self::STATUS_PROCESS => [
            'name' => 'Khóa tài khoản',
            'class' => 'badge-success'
        ],
    ];
    public static function getStatusGlobal()
    {
        $that = new self();
        return $that->status;
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime', 
    ];
}
