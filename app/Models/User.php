<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
    public function index()
    {
        $services = Service::where('user_id', auth()->id())->with('user')->get(); // Charge aussi la relation user
        return view('services.index', compact('services'));
    }

    public function showProfile()
    {
        $user = User::with('tags')->findOrFail(auth()->id());
        $hasActiveSubscription = $this->checkActiveSubscription(); // Implémentez cette méthode selon votre logique
    
        return view('profile.index', compact('user', 'hasActiveSubscription'));
    }

// Dans le modèle User
public function tags()
{
    return $this->belongsToMany(Tag::class, 'tag_user');
}

}
