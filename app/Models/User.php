<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Admin\Blacklist;
use App\Models\Site\GroupMember;
use App\Models\Site\ServiceType;
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
    protected $guarded = [ ];

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
        'password' => 'hashed',
    ];

    public function isAdmin()
    {
        return $this->user_type === 'admin'; // Adjust as per your database schema
    }

    public function tenant()
    {
        return $this->hasMany(Tenant::class);
    }

    public function landlord()
    {
        return $this->hasMany(Landlord::class);
    }

    public function agent()
    {
        return $this->hasMany(Agent::class);
    }


    public function property()
    {
        return $this->hasMany(Property::class,'agent_id','id');
    }

    public function blacklist()
    {
        return $this->hasOne(Blacklist::class,'reported_id','id');
    }

    public function providers()
    {
        return $this->hasMany(ServiceProvider::class);
    }
    
    public static function getPropertyProfessionals($selectedServiceTypeId)
    {
        return self::where(function ($query) use ($selectedServiceTypeId) {
            // Check if the selected service type is for Real Estate Agents
            if ($selectedServiceTypeId) {
                $realEstateAgentType = ServiceType::where('service', 'Real Estate Agents')->first();
    
                if ($realEstateAgentType && $realEstateAgentType->id == $selectedServiceTypeId) {
                    // Include service providers, landlords, and tenants for Real Estate Agents
                    $query->where(function ($q) {
                        $q->where('user_type', 'service_provider')
                          ->orWhere('user_type', 'landlord')
                          ->orWhere('user_type', 'tenant');
                    });
                } else {
                    // For other service types, only include service providers
                    $query->where('user_type', 'service_provider');
                }
            }
        })
        ->when($selectedServiceTypeId, function ($query) use ($selectedServiceTypeId) {
            return $query->whereHas('providers', function ($q) use ($selectedServiceTypeId) {
                $q->where('service_type_id', $selectedServiceTypeId);
            });
        })
        ->get();
    }

       // User can have many ServiceProviders
       public function serviceProviders()
       {
           return $this->hasMany(ServiceProvider::class, 'user_id', 'id');
       }
   
       // User can access ServiceType through ServiceProvider
       public function serviceTypes()
       {
           return $this->hasManyThrough(ServiceType::class, ServiceProvider::class, 'user_id', 'id', 'id', 'service_type_id');
       }

       public function groupMembers()
       {
           return $this->hasMany(GroupMember::class);
       }
}
    
