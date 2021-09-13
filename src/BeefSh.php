<?php

declare(strict_types=1);

namespace Shaw;

class BeefSh extends Shawarma
{
    protected float|int $cost = 75;
    protected array $ingredients = [ 'чесночный соус', 'говяжий окорок', 'огурцы маринованные',
            'маринованный лук с барбарисом и зеленью', 'салат коул слоу', 'тандырный лаваш',
            'помидоры свежие', 'хумус', 'соус тахин'

    ];
    protected string $title = 'Шаурма говяжья';
}
