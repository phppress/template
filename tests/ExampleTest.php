<?php

declare(strict_types=1);

namespace Yii\Extension\Widget\Tests;

use PHPPress\Template\Example;

final class ExampleTest extends \PHPUnit\Framework\TestCase
{
    public function testExample(): void
    {
        $example = new Example();

        $this->assertTrue($example->getExample());
    }
}
