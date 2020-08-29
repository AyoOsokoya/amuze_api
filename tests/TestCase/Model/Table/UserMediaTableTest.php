<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserMediaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserMediaTable Test Case
 */
class UserMediaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserMediaTable
     */
    protected $UserMedia;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.UserMedia',
        'app.Users',
        'app.Media',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserMedia') ? [] : ['className' => UserMediaTable::class];
        $this->UserMedia = $this->getTableLocator()->get('UserMedia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UserMedia);

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
