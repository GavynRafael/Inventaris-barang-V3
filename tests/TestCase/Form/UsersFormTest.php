<?php
declare(strict_types=1);

namespace App\Test\TestCase\Form;

use App\Form\UsersForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\UsersForm Test Case
 */
class UsersFormTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Form\UsersForm
     */
    protected $Users;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->Users = new UsersForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Users);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Form\UsersForm::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
