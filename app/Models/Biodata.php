<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = "tb_biodata"; // tambahkan ini
    protected $fillable = ["nama", "alamat"];
}
