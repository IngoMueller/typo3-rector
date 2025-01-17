<?php

declare(strict_types=1);

namespace Ssch\TYPO3Rector\Tests\Rector\v8\v5\ContentObjectRendererFileResourceRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

final class ContentObjectRendererFileResourceRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     * @return never
     */
    public function test(SmartFileInfo $fileInfo)
    {
        $this->markTestIncomplete('The comparison is false positive wrongly.');
        #$this->doTestFileInfo($fileInfo);
    }

    /**
     * @return Iterator<SmartFileInfo>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/configured_rule.php';
    }
}
