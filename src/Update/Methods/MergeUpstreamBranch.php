<?php

namespace Updatinate\Update\Methods;

use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Symfony\Component\Filesystem\Filesystem;
use Updatinate\Git\WorkingCopy;

/**
 * MergeUpstreamBranch is an update method that takes all of the changes from
 * the upstream repository and merges them into the working copy of the
 * project being updated.
 */
class MergeUpstreamBranch implements UpdateMethodInterface, LoggerAwareInterface
{
    use UpdateMethodTrait;
    use LoggerAwareTrait;

    public function configure(ConfigInterface $config, $project, $version)
    {
    }

    public function update(WorkingCopy $project, WorkingCopy $upstream, array $parameters)
    {
    }

    public function complete(WorkingCopy $originalProject, WorkingCopy $updatedProject, array $parameters)
    {
    }
}
