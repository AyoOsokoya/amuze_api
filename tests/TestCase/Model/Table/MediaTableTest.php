<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MediaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MediaTable Test Case
 */
class MediaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MediaTable
     */
    protected $Media;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Media',
        'app.Types',
        'app.Services',
        'app.Creators',
        'app.Discussions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Media') ? [] : ['className' => MediaTable::class];
        $this->Media = $this->getTableLocator()->get('Media', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Media);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
