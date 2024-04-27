<?php

namespace Tests\Unit;

use Core\Teste;
use PHPUnit\Framework\TestCase;

class TesteUnitTest extends TestCase
{
    public function test_get_method()
    {
        $teste = new Teste();
        $response = $teste->foo();

        $this->assertEquals('1234', $response);
    }
}