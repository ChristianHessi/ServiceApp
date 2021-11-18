<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    use HasFactory;

    protected $table = "emailtemplate";

    protected $fillable = [
        'email_type_id',
        'language',
        'object',
        'description',
        'link_name',
        'signature'
    ];

    public function get_email_type(){
        return Emailtype::find($this->email_type_id)->name;
    }
}
