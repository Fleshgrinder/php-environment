<?php
/**
 * @author Richard Fussenegger <fleshgrinder@users.noreply.github.com>
 * @copyright 2015 Richard Fussenegger
 * @license MIT
 */

namespace Fleshgrinder\Environment;

final class EnvironmentTest extends \PHPUnit_Framework_TestCase {

    public function testGetReturnsValueForExistingEnvironmentVariable() {
        $name = 'PHPUNIT_TEST_' . time();
        $value = 'this is a test';
        putenv("{$name}={$value}");
        $this->assertSame($value, (new Environment())->get($name));
        putenv($name);
    }

    public function testGetReturnsDefaultValueForNonExistingEnvironmentVariable() {
        $default = 'default value';
        $this->assertSame($default, (new Environment())->get('PHPUNIT_TEST_' . time(), $default));
    }

    public function testIssetReturnsTrueForExistingEnvironmentVariable() {
        $this->assertTrue((new Environment())->isset('PATH'));
    }

    public function testIssetReturnsFalseForNonExistingEnvironmentVariable() {
        $this->assertFalse((new Environment())->isset('PHPUNIT_TEST_' . time()));
    }

}
