<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Media Entity
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $type_id
 * @property int|null $service_id
 * @property int|null $creator_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Creator $creator
 * @property \App\Model\Entity\Discussion[] $discussions
 * @property \App\Model\Entity\UserMedia[] $user_media
 */
class Media extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'description' => true,
        'type_id' => true,
        'service_id' => true,
        'creator_id' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'type' => true,
        'service' => true,
        'creator' => true,
        'discussions' => true,
        'user_media' => true,
    ];
}
