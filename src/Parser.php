<?php

declare(strict_types=1);

namespace Changelog\Version\SemVer;

use PharIo\Version\Version as Phar;
use Throwable;

final class Parser implements \Changelog\Version\Parser
{
    private Phar $version;

    public function __construct(string $version)
    {
        $this->version = new Phar($version);
    }

    public function getMajor(): int
    {
        return (int) $this->version->getMajor()->getValue();
    }

    public function getMinor(): int
    {
        return (int) $this->version->getMinor()->getValue();
    }

    public function getPatch(): int
    {
        return (int) $this->version->getPatch()->getValue();
    }

    public function getStability(): ?string
    {
        if (! $this->isPreRelease()) {
            return null;
        }

        return $this->version->getPreReleaseSuffix()->getValue();
    }

    public function isPreRelease(): bool
    {
        try {
            $this->version->getPreReleaseSuffix();

            return true;
        } catch (Throwable) {
            return false;
        }
    }
}
