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