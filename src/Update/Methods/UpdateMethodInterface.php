<?php

namespace Updatinate\Update\Methods;

use Updatinate\Git\WorkingCopy;
use Consolidation\Config\ConfigInterface;

/**
 * UpdateMethodInterface defines an interface for updating projects from
 * their upstream repositories using git.
 */
interface UpdateMethodInterface
{
    public function configure(ConfigInterface $config, $project, $version);
    public function update(WorkingCopy $project, WorkingCopy $upstream, array $parameters);
    public function complete(WorkingCopy $project, WorkingCopy $upstream, array $parameters);
}
