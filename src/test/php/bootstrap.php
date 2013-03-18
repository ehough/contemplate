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

require_once __DIR__ . '/../../../vendor/ehough/pulsar/src/main/php/ehough/pulsar/ComposerClassLoader.php';

$loader = new ehough_pulsar_ComposerClassLoader(__DIR__ . '/../../../vendor/');
$loader->registerDirectory('ehough_contemplate', __DIR__ . '/../../main/php/');
$loader->register();