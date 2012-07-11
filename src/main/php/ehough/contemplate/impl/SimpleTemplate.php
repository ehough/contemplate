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

/**
 * Template implementation.
 */
class ehough_contemplate_impl_SimpleTemplate implements ehough_contemplate_api_Template
{
    private $_source = array();

    private $_path;

    /**
     * Sets the template path.
     *
     * @param string $path The path to the template file.
     *
     * @return void
     *
     * @throws ehough_contemplate_api_exception_InvalidArgumentException If the path is not a readable file.
     */
    public final function setPath($path)
    {
        if (! is_file($path) || ! is_readable($path)) {

            throw new ehough_contemplate_api_exception_InvalidArgumentException("Cannot read template at $path");
        }

        $this->_path = $path;
    }

    /**
     * Set a template variable.
     *
     * @param string $name  The name of the template variable to set.
     * @param mixed  $value The value of the template variable.
     *
     * @return void
     */
    public function setVariable($name, $value)
    {
        $this->_source[$name] = $value;
    }

    /**
     * Converts this template to a string.
     *
     * @return string The string representation of this template.
     */
    public function toString()
    {
        ob_start();

        extract($this->_source);

        /** @noinspection PhpIncludeInspection */
        include realpath($this->_path);

        $result = ob_get_contents();

        ob_end_clean();

        return $result;
    }

    /**
     * Resets this template for use. Clears out any set variables.
     *
     * @return void
     */
    public function reset()
    {
        $this->_source = array();
    }
}