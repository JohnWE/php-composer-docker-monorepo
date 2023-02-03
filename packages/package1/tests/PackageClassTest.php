<?php

declare(strict_types=1);

namespace PHPMR\Package1\Tests;

use PHPMR\Package1\PackageClass;
use PHPUnit\Framework\TestCase;

class PackageClassTest extends TestCase
{
    public function testDoSomething(): void
    {
        $o = new PackageClass();
        $this->assertSame("PackageClass did something", $o->doSomething());
    }
}