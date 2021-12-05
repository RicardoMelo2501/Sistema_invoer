<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Motoristas Model
 *
 * @property \App\Model\Table\VeiculosTable&\Cake\ORM\Association\HasMany $Veiculos
 *
 * @method \App\Model\Entity\Motorista get($primaryKey, $options = [])
 * @method \App\Model\Entity\Motorista newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Motorista[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Motorista|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Motorista saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Motorista patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Motorista[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Motorista findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MotoristasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('motoristas');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Veiculos', [
            'foreignKey' => 'motorista_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 200)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 20)
            ->requirePresence('cpf', 'create')
            ->notEmptyString('cpf');

        $validator
            ->scalar('cnh')
            ->maxLength('cnh', 20)
            ->requirePresence('cnh', 'create')
            ->notEmptyString('cnh');

        return $validator;
    }
}
