<?php
/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Rocketeer\Tasks;

use Rocketeer\TestCases\RocketeerTestCase;

class DeployTest extends RocketeerTestCase
{
    public function testDeployMethod()
    {
        $task = $this->pretendTask('Update', [
            'migrate' => true,
            'seed'    => true,
        ]);

        $matcher = 'z';

        $this->assertTaskHistory($task, $matcher);
    }
}