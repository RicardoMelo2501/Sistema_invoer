<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carga Entity
 *
 * @property int $id
 * @property string $tipo
 * @property int $empresa_id
 * @property int $peso
 * @property string $nota_fiscal
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Carga extends Entity
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
        'tipo' => true,
        'empresa_id' => true,
        'peso' => true,
        'nota_fiscal' => true,
        'created' => true,
        'modified' => true,
        'empresa' => true,
    ];
}
