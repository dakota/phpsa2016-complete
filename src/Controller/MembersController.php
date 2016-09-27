<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Members Controller
 *
 * @property \App\Model\Table\MembersTable $Members
 */
class MembersController extends AppController
{

    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Auth->allow('add');
        $this->Crud->addListener('Auth', 'Auth', [
            'property' => 'id'
        ]);

        return parent::beforeFilter($event);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $member = $this->Auth->identify();
            if ($member) {
                $this->Auth->setUser($member);

                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Email address or password is incorrect'), [
                    'key' => 'auth'
                ]);
            }
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

}
