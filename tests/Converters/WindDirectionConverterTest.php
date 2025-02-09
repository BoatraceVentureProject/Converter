<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Converters;

use Boatrace\Venture\Project\Converters\CoreConverter;
use Boatrace\Venture\Project\Converters\WindDirectionConverter;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author shimomo
 */
class WindDirectionConverterTest extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Converters\WindDirectionConverter
     */
    protected WindDirectionConverter $converter;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->converter ??= new WindDirectionConverter(
            new CoreConverter()
        );
    }

    /**
     * @return void
     */
    public function testWindDirectionId(): void
    {
        $this->assertSame(4, $this->converter->windDirectionId(4));
        $this->assertSame(4, $this->converter->windDirectionId('東北東'));
        $this->assertNull($this->converter->windDirectionId('競艇'));
        $this->assertNull($this->converter->windDirectionId(null));
    }

    /**
     * @return void
     */
    public function testWindDirectionName(): void
    {
        $this->assertSame('東北東', $this->converter->windDirectionName(4));
        $this->assertSame('東北東', $this->converter->windDirectionName('東北東'));
        $this->assertNull($this->converter->windDirectionName('競艇'));
        $this->assertNull($this->converter->windDirectionName(null));
    }
}
