<?php

declare(strict_types=1);

use Changelog\Version\SemVer\Parser;

it('can determine the major', function () {
    expect(1)->toBe((new Parser('1.2.3-alpha.1'))->getMajor());
});

it('can determine the minor', function () {
    expect(2)->toBe((new Parser('1.2.3-alpha.1'))->getMinor());
});

it('can determine the patch', function () {
    expect(3)->toBe((new Parser('1.2.3-alpha.1'))->getPatch());
});

it('can determine the stability', function () {
    expect((new Parser('1.2.3'))->getStability())->toBeNull();
    expect((new Parser('1.2.3-alpha.1'))->getStability())->toBe('alpha');
});

it('can determine if a version is a pre release', function () {
    expect((new Parser('1.2.3'))->isPreRelease())->toBeFalse();
    expect((new Parser('1.2.3-alpha.1'))->isPreRelease())->toBeTrue();
});
