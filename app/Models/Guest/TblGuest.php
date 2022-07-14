<?php

namespace App\Models\Guest;

use App\Models\Answer\TblAnswer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblGuest extends Model
{
    protected $connection = 'mysql';
    protected $table = "tbl_guests";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','full_name','email','phone_number','school_name','grade'
    ];

    public function pertanyaan()
    {
        return $this->hasMany(TblAnswer::class, 'id_guest','id');
    }
}