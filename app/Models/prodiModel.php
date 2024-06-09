<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodiModel extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $fillable = ['nama_prodi', 'fakultas', 'kaprodi', 'sekprodi'];
}
