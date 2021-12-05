<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Veiculo Entity
 *
 * @property int $id
 * @property int $motorista_id
 * @property string $modelo
 * @property string $placa_carroceria
 * @property string $placa_veiculo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Motorista $motorista
 */
class Veiculo extends Entity
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
        'motorista_id' => true,
        'modelo' => true,
        'placa_carroceria' => true,
        'placa_veiculo' => true,
        'created' => true,
        'modified' => true,
        'motorista' => true,
    ];
}
