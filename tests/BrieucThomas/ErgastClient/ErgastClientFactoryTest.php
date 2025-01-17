<?php

/*
 * (c) Brieuc Thomas <tbrieuc@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\BrieucThomas\ErgastClient;

use BrieucThomas\ErgastClient\ErgastClientFactory;
use PHPUnit\Framework\TestCase;

class ErgastClientFactoryTest extends TestCase
{
    public function testCreateErgastClient()
    {
        $ergastClient = ErgastClientFactory::createErgastClient();

        $this->assertInstanceOf('BrieucThomas\ErgastClient\ErgastClient', $ergastClient);
    }
}
