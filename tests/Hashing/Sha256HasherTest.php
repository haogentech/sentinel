<?php

/*
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Sentinel
 * @version    6.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2022, Cartalyst LLC
 * @link       https://cartalyst.com
 */

namespace Cartalyst\Sentinel\Tests\Hashing;

use Cartalyst\Sentinel\Hashing\Sha256Hasher;

class Sha256HasherTest extends BaseHashingTest
{
    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->hasher = new Sha256Hasher();

        parent::setUp();
    }
}
