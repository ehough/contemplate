<?php
/**
 * Copyright 2012 Eric D. Hough (http://ehough.com)
 *
 * This file is part of contemplate (https://github.com/ehough/contemplate)
 *
 * contemplate is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * contemplate is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with contemplate.  If not, see <http://www.gnu.org/licenses/>.
 *
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