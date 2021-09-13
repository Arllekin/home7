<?php

declare(strict_types=1);

namespace Shaw;

abstract class Shawarma
{
    protected float|int $cost;
    protected array $ingredients;
    protected string $title;

//  Cost_Started
    public function setCost(float|int $cost): void
    {
        $this->cost = $cost;
    }
    public function getCost(): float|int
    {
        return $this->cost;
    }
//  Cost_Ended

//  Ingredients_Started
    public function setIngredients(array $ingredients): void
    {
        $this->ingredients = $ingredients;
    }
    public function getIngredients(): array
    {
        return $this->ingredients;
    }
//  Ingredients_Ended

//  Title_Started
    public function setTitle($title): void
    {
        $this->title = $title;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
 //  Title_Started
}
