<?php

namespace App\Http\Filters;

use Illuminate\Http\Request;

class PostApiFilter extends ApiFilter
{
    //Parametros para filtros de modelos
    protected $safeParams = [
        'id' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne'],
        'description' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne'],
        'created_at' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne'],
        'user',
    ];

    //Mapea las columnas a como queremos que se filtren
    protected $columMap = [
        'id' => 'id',
        'description' => 'description',
        'created_at' => 'created_at',
        'user' => 'user_id',
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
