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

class ehough_contemplate_impl_SimpleTemplateBuilderTest extends PHPUnit_Framework_TestCase
{
    private $_sut;

    public function setUp()
    {
        $this->_sut = new ehough_contemplate_impl_SimpleTemplateBuilder();
    }

    /**
     * @expectedException ehough_contemplate_api_exception_InvalidArgumentException
     */
    public function testNoSuchFile()
    {
        $this->_sut->getNewTemplateInstance('nosuchfile.php');
    }

    public function testBuild()
    {
        $result = $this->_sut->getNewTemplateInstance(dirname(__FILE__) . '/../../../../resources/fixtures/fake_template.php');

        $this->assertTrue(is_a($result, 'ehough_contemplate_impl_SimpleTemplate'));
    }
}