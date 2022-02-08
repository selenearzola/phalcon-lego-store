<?php

/**
 * This file is part of the Phalcon Incubator Test.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Incubator\Test\PHPUnit;

use Phalcon\Incubator\Test\Traits\FunctionalTestCase as FunctionalTestCaseTrait;

abstract class FunctionalTestCase extends ModelTestCase
{
    use FunctionalTestCaseTrait;
}
