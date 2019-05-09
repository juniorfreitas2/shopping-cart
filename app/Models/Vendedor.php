<?php

namespace App\Models;
use Core\BaseModel;

class Vendedor extends BaseModel
{
    protected $primaryKey = 'ven_id';

    protected $table = 'vendedores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ven_end_id',
		'ven_nome',
		'ven_cpf',
		'ven_sexo',
		'ven_nascimento',
		'ven_telefone',
		'ven_celular',
		'ven_email',
		'ven_ativo',
		'ven_observacao'
    ];

}