<?php

namespace App\Listener;

use Cake\Event\Event;
use Cake\Network\Exception\ForbiddenException;
use Crud\Listener\BaseListener;

/**
 * Class AuthListener
 */
class AuthListener extends BaseListener
{
    /**
     * Settings
     *
     * @var array
     */
    protected $_defaultConfig = [
        'property' => 'id',
        'message' => 'You are not allowed to access the requested resource.',
        'actions' => ['edit', 'delete']
    ];

    public function afterFind(Event $event)
    {
        if (!in_array($this->_request()->param('action'), $this->config('actions'))
        ) {
            return;
        }

        $entity = $event->subject()->entity;
        $userId = $this->_controller()->Auth->user('id');

        if ($entity->get($this->config('property')) !== $userId) {
            throw new ForbiddenException($this->config('message'));
        }
    }
}
