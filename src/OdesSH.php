<?php

declare(strict_types=1);

namespace Shaw;

class OdesSh extends Shawarma
{
    protected float|int $cost = 69;
    protected array $ingredients = [ 'огурцы маринованные', 'картофель жареный', 'чесночный соус', 'тандырный лаваш',
                    'маринованный лук с барбарисом и зеленью', 'мясо куриное', 'салат коул слоу', 'корейская морковь'
    ];
    protected string $title = 'Шаурма Одесская';
}
