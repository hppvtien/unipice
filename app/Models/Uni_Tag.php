<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Uni_Tag extends Model
{
    use HasFactory;
    protected $guarded = [''];
    const STATUS_DEFAULT = 0;
    const STATUS_PROCESS = 1;
    public $statusGlobal;
    protected $t_status = [
        self::STATUS_DEFAULT => [
            'name' => 'Product',
            'class' => 'badge-default'
        ],
        self::STATUS_PROCESS => [
            'name' => 'Blog',
            'class' => 'badge-success'
        ],
    ];
    public static function getStatusGlobal()
    {
        $that = new self();
        return $that->t_status;
    }
    public function getStatus()
    {
        return Arr::get($this->t_status, $this->status, "[N\A]");
    }
    protected $table = 'uni_tag';
}
