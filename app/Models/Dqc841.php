<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dqc841 extends Model
{
    public $timestamps = false;
    public $table = 'dqc841';

    protected $fillable = [
        'PARTS_NO','UNT_USG', 'DESCRIPTION', 'REF_DESIGNATOR','	UPDATE_DT','FAT_PART_NO',
      ];
}
