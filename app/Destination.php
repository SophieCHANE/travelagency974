<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable =[ //$fillable recupere 
    	'destinate','title', 'price', 'date_departure', 'date_return', 'description', 'percentage_discount', 'date_start_discount',  'date_end_discount', 'number_available', 'number_reserved', 'image_un', 'filename', 'mime', 'original_filename', 'filename_un', 'mime_un', 'original_filename_un', 'filename_deux', 'mime_deux', 'original_filename_deux'
    	];
    
    public function user(){//function pour user
        return $this->belongsTo(User::class);//association
    }
    
}
            
            
