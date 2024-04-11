<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Logging\JUnit;

use PHPUnit\Event\InvalidArgumentException;
use PHPUnit\Event\Test\Skipped;
use PHPUnit\Event\Test\SkippedSubscriber;
use PHPUnit\Event\TestData\NoDataSetFromDataProviderException;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSkippedSubscriber extends Subscriber implements SkippedSubscriber
{
    /**
     * @throws InvalidArgumentException
     * @throws NoDataSetFromDataProviderException
     */
    public function notify(Skipped $event): void
    {
        $this->logger()->testSkipped($event);
    }
}
