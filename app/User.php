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

    public function isEscuela()
    {
        if ($this->escuela() != null)
        {
            return true;
        }
        return false;
    }

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    public function getUserName()
    {
        return $this->nombre . ' ' . $this->apellido;
    }

}
