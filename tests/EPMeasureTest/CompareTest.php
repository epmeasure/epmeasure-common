<?php
namespace EPMeasureTest;

class CompareTest extends \PHPUnit_Framework_TestCase
{
    public function testNumberOfExecutions()
    {
        $compare = new \EPMeasure\Compare();
        $foo = function() {
            $pi = \M_1_PI - 1 + 15 * 12 / 8 -34;
            echo $pi . PHP_EOL;
        };
        $compare->setNumberOfExecutions(100);
        $compare->addSnippet($foo);

        $compare->run();
    }
}
