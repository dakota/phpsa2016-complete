<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Crud->addListener('Auth', 'Auth', [
            'property' => 'organiser_id'
        ]);

        return parent::beforeFilter($event);
    }

    public function linkActiveMember($eventId, $type)
    {
        $event = $this->Events->get($eventId);
        if ($this->Events->linkMember($event, $this->Auth->user('id'), $type)) {
            $this->Flash->success('Registered!');
        } else {
            $this->Flash->error('Something went wrong.');
        }

        return $this->redirect($this->referer());
    }

}
