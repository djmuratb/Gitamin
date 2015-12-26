<?php

/*
 * This file is part of Gitamin.
 *
 * Copyright (C) 2015-2016 The Gitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gitamin\Test\Events\Project;

use Gitamin\Events\Project\ProjectWasRemovedEvent;
use Gitamin\Models\Project;

class ProjectWasRemovedEventTest extends AbstractProjectEventTestCase
{
    protected function objectHasHandlers()
    {
        return true;
    }

    protected function getObjectAndParams()
    {
        $params = ['project' => new Project()];
        $object = new ProjectWasRemovedEvent($params['project']);

        return compact('params', 'object');
    }
}
