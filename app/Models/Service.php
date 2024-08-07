<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function index()
    {
        $services = Service::with('user')->get(); // Assurez-vous que la relation user est chargée
        return view('services.index', compact('services'));
    }


    public function precisions()
    {
        return $this->belongsToMany(Precision::class, 'service_precision', 'service_id', 'precision_id');
    }
}
