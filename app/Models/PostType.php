<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    use HasFactory;
    protected $table = 'theloai';
    protected $primaryKey = 'idTL';
    public function getPostTypes(){
        return $this
            ->where('AnHien', 1)
            ->take(3)
            ->orderBy('idTL', 'ASC')
            ->get();
    }
}
