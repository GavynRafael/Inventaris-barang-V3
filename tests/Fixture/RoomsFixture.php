<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoomsFixture
 */
class RoomsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'capacity' => 1,
                'type' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-09-11 13:34:24',
                'modified' => '2023-09-11 13:34:24',
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
