<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
	use Notifiable;

    protected $table = 'tb_parkir';

    protected $fillable = [
        'id_kendaraan', 'jenis',
    ];
}
