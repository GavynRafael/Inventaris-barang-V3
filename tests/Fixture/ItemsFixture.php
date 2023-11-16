<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ItemsFixture
 */
class ItemsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'code' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'amount' => 1,
                'created' => '2023-09-11 13:34:37',
                'modified' => '2023-09-11 13:34:37',
                'room_id' => 1,
                'type_id' => 1,
            ],
        ];
        parent::init();
    }
}
