<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $Id
 * @property int $level
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\DateTime $user_created
 */
class User extends Entity
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
    protected array $_accessible = [
        'level' => true,
        'name' => true,
        'username' => true,
        'email' => true,
        'password' => true,
        'user_created' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];

    protected function _setPassword(?string $password): ?string
    {
        if ($password === null) {
            return null;
        }
        return password_hash($password, PASSWORD_DEFAULT);
    }
}
