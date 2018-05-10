<?php namespace ArizonaCoders\Infrastructure\Composer\Plugin;

use Composer\Plugin\Capability\CommandProvider as CapabilityCommandProvider;

class CommandProvider implements CapabilityCommandProvider
{
    /**
     * {@inheritdoc}
     */
    public function getCommands()
    {
        return [
            new Bump(),
        ];
    }
}
