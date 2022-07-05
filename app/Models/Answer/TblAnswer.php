<?php

namespace App\Models\Answer;

use App\Models\Guest\TblGuest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblAnswer extends Model
{
    protected $connection = 'mysql';
    protected $table = "tbl_answers";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','id_guest','category','questions_number','answer'
    ];

    public function getAnswerAttribute ($value){
        
        return ($value == 'Yes' || $value == 'No' ) ? 0 : $value;
    }

    public function guestss()
    {
        return $this->belongsTo('App\Models\Guest\TblGuest','id_guest', 'id');
    }

}