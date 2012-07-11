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
 * Template instance.
 */
interface ehough_contemplate_api_Template
{
    /**
     * Converts this template to a string.
     *
     * @return string The string representation of this template.
     */
    function toString();

    /**
     * Set a template variable.
     *
     * @param string $name  The name of the template variable to set.
     * @param mixed  $value The value of the template variable.
     *
     * @return void
     */
    function setVariable($name, $value);

    /**
     * Resets this template for use. Clears out any set variables.
     *
     * @return void
     */
    function reset();
}