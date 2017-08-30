<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role() 
    {   
        return $this->hasOne('App\Role','id', 'role_id');
    }

    private function escuela() 
    {
        return $this->hasOne('App\Escuela','id','id');
    }

    private function alumno() 
    {
        return $this->hasOne('App\Alumno','id','id');
    }


    public function hasRole($role)
    {

        if($this->role->key === $role)
            return true;
        else 
            return false;
     
    }

    public function perfil()
    {

        if ($this->role->key === 'admin')
            return null;

        if ($this->role->key === 'escuela' )
            return $this->escuela();
        
        if ($this->role->key == 'alumno')
            return $this->alumno();

        return null;

    }

    public function getUserName()
    {
        
    }

}
