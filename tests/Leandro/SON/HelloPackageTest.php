<?php

namespace Leandro\SON;

class HelloPackageTest extends \PHPUnit_Framework_TestCase {

    public function testgetHello() {
        $hello = new HelloPackage();
        $string = $hello->getHello();
        $this->assertNotNull($string);
        $this->assertInternalType("string", $string);
        $this->assertNotEquals(0, strlen($string));
    }

}
