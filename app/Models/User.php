<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [''];
    const STATUS_DEFAULT = 0;
    const STATUS_PROCESS = 1;
    public $statusGlobal;
    protected $u_status = [
        self::STATUS_DEFAULT => [
            'name' => 'Khóa tài khoản',
            'class' => 'badge-default'
        ],
        self::STATUS_PROCESS => [
            'name' => 'Đang hoạt động',
            'class' => 'badge-success'
        ],
    ];
    public static function getStatusGlobal()
    {
        $that = new self();
        return $that->u_status;
    }
    public function getStatus()
    {
        return Arr::get($this->u_status, $this->status, "[N\A]");
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
