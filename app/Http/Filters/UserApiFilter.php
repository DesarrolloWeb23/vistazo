<?php

namespace App\Http\Filters;

use Illuminate\Http\Request;

class UserApiFilter extends ApiFilter
{
    //Parametros para filtros de modelos
    protected $safeParams = [
        'name',
        'email',
        'password',
    ];

    //Mapea las columnas a como queremos que se filtren
    protected $columMap = [
        'name' => 'name',
        'email' => 'email',
        'password' => 'password',
    ];

    /**
     *eq:  Equal                 (=).  Significa "igual a".
     *lt:  Less Than             (<).  Significa "menor que".
     *lte: Less Than or Equal    (<=). Significa "menor o igual que".
     *gt:  Greater Than          (>).  Significa "mayor que".
     *gte: Greater Than or Equal (>=). Significa "mayor o igual que".
     *ne:  Not Equal             (!=). Significa "no igual a".
     */
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
    ];
}
