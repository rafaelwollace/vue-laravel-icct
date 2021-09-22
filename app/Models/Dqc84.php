<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dqc84 extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'dqc84';

    protected $fillable = [
        'MODEL','FAT_PART_NO', 'TOTAL_LOCATION', 'UPDATE_DT',
      ];
}
