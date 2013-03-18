<?php
/**
 * Copyright 2006 - 2013 Eric D. Hough (http://ehough.com)
 *
 * This file is part of contemplate (https://github.com/ehough/contemplate)
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

class ehough_contemplate_impl_SimpleTemplateTest extends PHPUnit_Framework_TestCase
{
    private $_sut;

    public function setUp()
    {
        $this->_sut = new ehough_contemplate_impl_SimpleTemplate();
    }

    /**
     * @expectedException ehough_contemplate_api_exception_InvalidArgumentException
     */
    public function testSetPathNoSuchFile()
    {
        $this->_sut->setPath('nosuchfile.php');
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Notice
     */
    public function testMissingVariable()
    {
        $this->expectOutputString('Hello ');
        $this->_sut->setPath(dirname(__FILE__) . '/../../../../resources/fixtures/fake_template.php');
        $this->_sut->toString();
    }

    public function testSetVariable()
    {
        $this->_sut->setPath(dirname(__FILE__) . '/../../../../resources/fixtures/fake_template.php');
        $this->_sut->setVariable('world', 'World!');
        $this->assertEquals('Hello World!', $this->_sut->toString());
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Notice
     */
    public function testReset()
    {
        $this->expectOutputString('Hello ');

        $this->_sut->setPath(dirname(__FILE__) . '/../../../../resources/fixtures/fake_template.php');
        $this->_sut->setVariable('world', 'World!');
        $this->assertEquals('Hello World!', $this->_sut->toString());

        $this->_sut->reset();
        $this->_sut->toString();
    }
}