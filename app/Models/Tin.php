<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;
    protected $table = 'Tin';
    protected $primaryKey = 'idTin';

    public function latestPost(){
        return $this
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->where('tin.AnHien', 1)
            ->take(4)
            ->orderBy('Ngay', 'DESC')
            ->get();
    }
    public function popularPosts(){
        return $this
            ->where('tin.AnHien', 1)
            ->where('NoiBat', 1)
            ->take(5)
            ->orderBy('Ngay', 'DESC')
            ->get();
    }
    public function topNews(){
        return $this
            ->where('tin.AnHien', 1)
            ->take(6)
            ->orderBy('SoLanXem', 'DESC')
            ->get();
    }
}
