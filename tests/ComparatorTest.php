<?php

declare(strict_types=1);

use Changelog\Version\SemVer\Comparator;

test('#isMajor', function (): void {
    expect((new Comparator())->isMajor('1.0.0', '2.0.0'))->toBeTrue();
    expect((new Comparator())->isMajor('2.0.0', '2.0.0'))->toBeFalse();
});

test('#isMinor', function (): void {
    expect((new Comparator())->isMinor('1.0.0', '1.1.0'))->toBeTrue();
    expect((new Comparator())->isMinor('1.1.0', '1.1.0'))->toBeFalse();
});

test('#isPatch', function (): void {
    expect((new Comparator())->isPatch('1.0.0', '1.0.1'))->toBeTrue();
    expect((new Comparator())->isPatch('1.0.1', '1.0.1'))->toBeFalse();
});

test('#greaterThan', function (): void {
    //
});

test('#greaterThanOrEqualTo', function (): void {
    //
});

test('#lessThan', function (): void {
    //
});

test('#lessThanOrEqualTo', function (): void {
    //
});

test('#equalTo', function (): void {
    //
});

test('#notEqualTo', function (): void {
    //
});
