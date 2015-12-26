<?php

/*
 * This file is part of Gitamin.
 *
 * Copyright (C) 2015-2016 The Gitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gitamin\Test\Events\Moment;

use Gitamin\Events\Moment\MomentEventInterface;
use Gitamin\Test\Events\AbstractEventTestCase;

class AbstractMomentEventTestCase extends AbstractEventTestCase
{
    protected function getEventInterfaces()
    {
        return [MomentEventInterface::class];
    }
}
