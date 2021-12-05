<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Veiculos Model
 *
 * @property \App\Model\Table\MotoristasTable&\Cake\ORM\Association\BelongsTo $Motoristas
 *
 * @method \App\Model\Entity\Veiculo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Veiculo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Veiculo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Veiculo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Veiculo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Veiculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Veiculo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Veiculo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VeiculosTable extends Table
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

        $this->setTable('veiculos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Motoristas', [
            'foreignKey' => 'motorista_id',
            'joinType' => 'INNER',
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
            ->scalar('modelo')
            ->maxLength('modelo', 200)
            ->requirePresence('modelo', 'create')
            ->notEmptyString('modelo');

        $validator
            ->scalar('placa_carroceria')
            ->maxLength('placa_carroceria', 200)
            ->requirePresence('placa_carroceria', 'create')
            ->notEmptyString('placa_carroceria');

        $validator
            ->scalar('placa_veiculo')
            ->maxLength('placa_veiculo', 200)
            ->requirePresence('placa_veiculo', 'create')
            ->notEmptyString('placa_veiculo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['motorista_id'], 'Motoristas'));

        return $rules;
    }
}
