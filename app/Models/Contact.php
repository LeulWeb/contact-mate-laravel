<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable= [
        'name',
        'user_id',
        'email',
        'phone',
        'website',
        'profile',
        'relation',
        'birthday',
        'note'
    ];
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
    }


    // http://localhost:8000/storage/contacts/KUmMaxZ60KztbCSasxS7cs1eMdl2PNC8XJC74MXl.jpg
    public function getImageUrl(){
        if($this->profile){
            // dd('/storage/'.$this->profile);
            return url('storage/'.$this->profile);
        }
        
        return "https://api.dicebear.com/7.x/adventurer/svg?seed=".$this->name.".svg";
    }
}
