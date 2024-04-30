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

    public function testActived()
    {
        $category = new Category(
            name: 'new Cat',
            isActive: false
        );

        $this->assertFalse($category->isActive);
        $category->activate();
        $this->assertTrue($category->isActive);
    }

    public function testDesabled()
    {
        $category = new Category(
            name: 'new Cat',
        );

        $this->assertTrue($category->isActive);
        $category->disable();
        $this->assertFalse($category->isActive);
    }
}