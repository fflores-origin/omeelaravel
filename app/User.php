<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 
        'email', 
        'password',
        'role_id',
        'nombre',
        'apellido'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function roles() 
    {   
        return $this->belongsToMany(Role::class);
    }

    private function escuela() 
    {
        return $this->hasOne('App\Escuela','id','id');
    }

    private function alumno() 
    {
        return $this->hasOne('App\Alumno','id','id');
    }



    public function hasRoles(array $roles)
    {


        foreach ($roles as $role)
        {
            foreach ($this->roles as $userRole) {

                if ( $userRole->key === $role )
                {
                    return true;
                }
            }
        }
        
        return false;
    }


    public function isAdmin()
    {
        return $this->hasRoles(['admin']);
    }

    public function getUserName()
    {
        return $this->nombre . ' ' . $this->apellido;
    }

}
