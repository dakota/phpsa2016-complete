<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Members
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EventsTable extends Table
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

        $this->table('events');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Members', [
            'foreignKey' => 'event_id',
            'targetForeignKey' => 'member_id',
            'joinTable' => 'events_members'
        ]);

$this->belongsTo('Organiser', [
    'foreignKey' => 'organiser_id',
    'className' => 'Members'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('description', 'create')
            ->allowEmpty('description');

        $validator
            ->dateTime('start')
            ->requirePresence('start', 'create')
            ->notEmpty('start');

        $validator
            ->dateTime('end')
            ->requirePresence('end', 'create')
            ->notEmpty('end');

        return $validator;
    }

public function buildRules(RulesChecker $rules)
{
    $rules->add(
        function (Event $event) {
            return $event->start <= $event->end;
        },
        'endAfterStart',
        [
            'errorField' => 'end',
            'message' => 'The event cannot end before it has started'
        ]
    );

    $rules->existsIn('organiser_id', 'Organiser', 'That member does not exist in the database.');

    return parent::buildRules($rules);
}

    public function linkMember(\App\Model\Entity\Event $event, $memberId, $type)
    {
        $member = $this->Members->get($memberId);
        //Add the join data
        $member->_joinData = new \App\Model\Entity\EventsMember([
            'type' => $type
        ]);

        return $this->association('Members')->link($event, [$member]);
    }

}
