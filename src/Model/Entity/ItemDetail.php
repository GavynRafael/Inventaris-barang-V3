<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ItemDetail Entity
 *
 * @property int $id
 * @property int $code
 * @property string $photo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $item_id
 * @property int|null $history_id
 *
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\History $history
 */
class ItemDetail extends Entity
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
        'photo' => true,
        'created' => true,
        'modified' => true,
        'item_id' => true,
        'history_id' => true,
        'item' => true,
        'history' => true,
    ];
}
