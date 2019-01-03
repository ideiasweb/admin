<?php

namespace Ideiasweb\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Configs extends Model
{

    protected $table = "adm_configs";

    protected $fillable = [
        "chave",
        "valor",
    ];

}
