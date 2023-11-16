<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int $code
 * @property string $name
 * @property int $amount
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $room_id
 * @property int $type_id
 *
 * @property \App\Model\Entity\Room $room
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\ItemDetail[] $item_details
 */
class Item extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'code' => true,
        'name' => true,
        'amount' => true,
        'created' => true,
        'modified' => true,
        'room_id' => true,
        'type_id' => true,
        'room' => true,
        'type' => true,
        'item_details' => true,
    ];
}
