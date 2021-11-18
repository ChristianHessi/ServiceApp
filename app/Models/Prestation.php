<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Service;
use App\Models\User;

class Prestation extends Model
{
    use HasFactory;

    protected $table = "prestation";

    protected $fillable = [
        'code',
        'service_id',
        'user_id',
        'custumer_id',
        'price',
        'date_prestation',
    ];

    public function Technicien() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Service() {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function Custumer() {
        return $this->belongsTo(Client::class, 'custumer_id');
    }
}
