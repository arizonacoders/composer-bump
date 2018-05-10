<?php namespace ArizonaCoders\Infrastructure\Composer\Plugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;
use Composer\Plugin\Capable as CapableInterface;
use Composer\Plugin\PluginInterface;

class SecurityCheckPlugin implements PluginInterface, CapableInterface
{
    /** @var Composer */
    private $composer;

    /** @var IOInterface */
    private $io;

    /**
     * Apply plugin modifications to Composer
     *
     * @param Composer    $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
    }

    /**
     * @return array
     */
    public function getCapabilities()
    {
        return [
            CommandProviderCapability::class => CommandProvider::class
        ];
    }
}
