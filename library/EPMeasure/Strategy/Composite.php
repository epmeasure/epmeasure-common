<?php
namespace EPMeasure\Strategy;

class Composite implements StrategyInterface
{
    protected $strategies = array();

    public function addStrategy(StrategyInterface $strategy)
    {
        $this->strategies[] = $strategy;
    }

    public function capture()
    {
        $results = array();
        foreach($this->strategies as $strategy)
        {
            $results[] = $strategy;
        }
    }
}
