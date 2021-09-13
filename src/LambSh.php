<?php

declare(strict_types=1);

namespace Shaw;

class LambSh extends Shawarma
{
    protected float|int $cost = 85;
    protected array $ingredients = [ 'острый соус', 'огурцы маринованные', 'кинза', 'помидоры свежие',
                        'маринованный лук с барбарисом и зеленью', 'мясо баранины', 'лаваш арабский',
    ];
    protected string $title = 'Шаурма из Баранины';
}
