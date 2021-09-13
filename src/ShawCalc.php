<?php

declare(strict_types=1);

namespace Shaw;

class ShawarmaCalculator extends Shawarma
{
    protected float|int $totalprice = 0;
    protected array $totalingridients = [];
    protected array $totaltitles = [];

//  Add_Started
    public function add(Shawarma $shawarma): void
    {
        $this->totalprice += $shawarma->getCost();
        $this->totalingridients = array_merge($shawarma->getIngredients(), $this->totalingridients);
        $this->totaltitles[] = $shawarma->getTitle();
    }
//  Add_Started

//  Ingredients_Started
    public function ingredients(): array
    {
        return array_unique($this->totalingridients);
    }
//  Ingredients_Ended

//  Price_Started
    public function price(): int|float
    {
        return $this->totalprice;
    }
//  Price_Ended

//  Title_Started
    public function title(): array
    {
        return $this->totaltitles;
    }
//  Title_Ended
}
