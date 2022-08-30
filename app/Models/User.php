<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Profile;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'about_me',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


     /**
     * Get the profile associated with the user.
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

     /**
     * Get the educations associated with the user.
     */
    public function educations()
    {
        return $this->hasMany(Education::class);
    }

     /**
     * Get the certifications associated with the user.
     */
    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

     /**
     * Get the skills associated with the user.
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

     /**
     * Get the socials associated with the user.
     */
    public function socials()
    {
        return $this->hasMany(Social::class);
    }

      /**
     * Get the projects associated with the user.
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

     /**
     * Get the jobs associated with the user.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
