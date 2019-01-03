<?php

namespace Ideiasweb\Admin\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable // implements MustVerifyEmail
{
    use Notifiable;

    protected $table = "adm_usuario";

    protected $fillable = [
        "nome",
        "email",
        "password",
    ];

}
