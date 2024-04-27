<?php

namespace Tests\Unit\Domain\Entity;

use Core\Domain\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase
{

    public function testAttributes()
    {
        $category = new Category(
            id: 'iuyui',
            name: "New Cat",
            description: "New Desc",
            isActive: true
        );

        $this->assertEquals("New Cat", $category->name);
        $this->assertEquals("New Desc", $category->description);
        $this->assertEquals(true, $category->isActive);

    }
}