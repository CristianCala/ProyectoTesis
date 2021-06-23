<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    protected $fillable = [
          'nombre', 'apellido', 'cedula', 'email', 'usuario', 'password', 'estatus', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function adminlte_image()
    {
         return 'https://picsum.photos/300/300';
    }

        public function adminlte_desc()
    {
         return 'Admin';
    }

    public function adminlte_profile_url()
    {
         return 'profile/username';
    }
       public function departamentos()
    {
        return $this->belongsToMany(Departamento::class, 'usuario_x_departamentos' , 'usxdp_uscedula', 'usxdp_dpid');
    }

        public function role()
    {
        return $this->belongsTo(rol::class, 'us_rol_id');
    }

   public function tipo(){
        
      return $this->belongsTo(TipoUsuario::class, 'us_tu_id');

    }
    public function acceso_cliente()
    {
        return $this->belongsTo(AccesoCliente::class, 'acl_us_id');
    }

          public function auditoria()
    {
        return $this->belongsTo(Auditoria::class, 'au_us_id');
    }
}
