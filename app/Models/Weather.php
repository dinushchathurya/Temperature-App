<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Weather extends Model
{
    use HasFactory,Sortable;

    protected $fillable = [
        'user_id',
        'logged_at',
        'col_temp',
        'mel_temp'
    ];

    public $sortable = ['col_temp'];
}
