<?php

/*
  +------------------------------------------------------------------------+
  | Phalcon Framework                                                      |
  +------------------------------------------------------------------------+
  | Copyright (c) 2011-2016 Phalcon Team (https://www.phalconphp.com)      |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file LICENSE.txt.                             |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to license@phalconphp.com so we can send you a copy immediately.       |
  +------------------------------------------------------------------------+
  | Authors: Stephen Hoogendijk <stephen@tca0.nl>                          |
  +------------------------------------------------------------------------+
*/

namespace Phalcon\Test\PHPUnit;

use Phalcon\Test\Traits\UnitTestCase as UnitTestCaseTrait;
use PHPUnit\Framework\TestCase as TestCase;
use Phalcon\Di\InjectionAwareInterface;

/**
 * Class UnitTestCase
 *
 * @package Phalcon\Test
 */
abstract class UnitTestCase extends TestCase implements InjectionAwareInterface
{
    use UnitTestCaseTrait;

    protected function setUp(): void
    {
        $this->setUpPhalcon();
    }

    protected function tearDown():  void
    {
        $this->tearDownPhalcon();

        parent::tearDown();
    }
}
