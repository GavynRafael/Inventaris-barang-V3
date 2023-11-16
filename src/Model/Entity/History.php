<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * History Entity
 *
 * @property int $id
 * @property string $status
 * @property \Cake\I18n\FrozenTime $date
 * @property string|null $reason
 * @property string|null $photo
 * @property \Cake\I18n\FrozenTime $fixed
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $detail_id
 *
 * @property \App\Model\Entity\ItemDetail[] $item_details
 */
class History extends Entity
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
        'status' => true,
        'date' => true,
        'reason' => true,
        'photo' => true,
        'fixed' => true,
        'created' => true,
        'modified' => true,
        'detail_id' => true,
        'item_details' => true,
    ];
}
