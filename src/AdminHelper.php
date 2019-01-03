<?php

namespace Ideiasweb\Admin;

use Ideiasweb\Admin\Models\Configs;

class AdminHelper
{

    /**
     * @param $chave
     * @param bool $valor
     * @return \Illuminate\Database\Eloquent\Model
     */
    function config($chave, $valor = false)
    {
  if ($valor) {
    return Configs::query()->updateOrCreate(['chave' => $chave], ['chave' => $chave, 'valor' => $valor]);
}

return Configs::query()->where('chave', '=', $chave)->first();
}

}
