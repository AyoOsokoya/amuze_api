<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Progres Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $media_id
 * @property int|null $rating
 * @property float|null $progress
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Media $media
 */
class Progres extends Entity
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
        'user_id' => true,
        'media_id' => true,
        'rating' => true,
        'progress' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'user' => true,
        'media' => true,
    ];
}
