<?php

declare(strict_types=1);

namespace Changelog\Version\SemVer;

use Composer\Semver\Comparator as Composer;
use PharIo\Version\Version as Phar;

final class Comparator implements \Changelog\Version\Comparator
{
    public function isMajor(string $version1, string $version2): bool
    {
        return (new Phar($version2))->getMajor() > (new Phar($version1))->getMajor();
    }

    public function isMinor(string $version1, string $version2): bool
    {
        return (new Phar($version2))->getMinor() > (new Phar($version1))->getMinor();
    }

    public function isPatch(string $version1, string $version2): bool
    {
        return (new Phar($version2))->getPatch() > (new Phar($version1))->getPatch();
    }

    public function greaterThan(string $version1, string $version2): bool
    {
        return Composer::greaterThan($version1, $version2);
    }

    public function greaterThanOrEqualTo(string $version1, string $version2): bool
    {
        return Composer::greaterThanOrEqualTo($version1, $version2);
    }

    public function lessThan(string $version1, string $version2): bool
    {
        return Composer::lessThan($version1, $version2);
    }

    public function lessThanOrEqualTo(string $version1, string $version2): bool
    {
        return Composer::lessThanOrEqualTo($version1, $version2);
    }

    public function equalTo(string $version1, string $version2): bool
    {
        return Composer::equalTo($version1, $version2);
    }

    public function notEqualTo(string $version1, string $version2): bool
    {
        return Composer::notEqualTo($version1, $version2);
    }
}
