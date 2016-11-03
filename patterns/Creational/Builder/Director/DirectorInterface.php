<?php

namespace DesignPatterns\Creational\Builder\Director;

use DesignPatterns\Creational\Builder\Builders\BurgerBuilderInterface;
use DesignPatterns\Creational\Builder\Burger\AbstractBurger;

interface DirectorInterface
{
    /**
     * @param BurgerBuilderInterface $builder
     *
     * @return AbstractBurger
     */
    public function buildBurger(BurgerBuilderInterface $builder): AbstractBurger;
}
