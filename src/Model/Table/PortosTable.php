<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Portos Model
 *
 * @method \App\Model\Entity\Porto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Porto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Porto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Porto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Porto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Porto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Porto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Porto findOrCreate($search, callable $callback = null, $options = [])
 */
class PortosTable extends Table
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

        $this->setTable('portos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('municipio')
            ->maxLength('municipio', 200)
            ->requirePresence('municipio', 'create')
            ->notEmptyString('municipio');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 200)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        $validator
            ->integer('faturamento')
            ->requirePresence('faturamento', 'create')
            ->notEmptyString('faturamento');

        return $validator;
    }
}
