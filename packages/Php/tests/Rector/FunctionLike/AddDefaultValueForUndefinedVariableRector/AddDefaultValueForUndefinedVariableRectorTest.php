<?php declare(strict_types=1);

namespace Rector\Php\Tests\Rector\FunctionLike\AddDefaultValueForUndefinedVariableRector;

use Rector\Php\Rector\FunctionLike\AddDefaultValueForUndefinedVariableRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class AddDefaultValueForUndefinedVariableRectorTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFiles([
            __DIR__ . '/Fixture/fixture.php.inc',
            __DIR__ . '/Fixture/in_foreach.php.inc',
            __DIR__ . '/Fixture/vimeo_one.php.inc',
            __DIR__ . '/Fixture/vimeo_two.php.inc',
            __DIR__ . '/Fixture/vimeo_else.php.inc',
            __DIR__ . '/Fixture/keep_vimeo_unset.php.inc',
        ]);
    }

    protected function getRectorClass(): string
    {
        return AddDefaultValueForUndefinedVariableRector::class;
    }
}
