<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events index large-9 medium-8 columns content">
    <h3><?= __('Events') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->id) ?></td>
                <td><?= h($event->title) ?></td>
                <td><?= h($event->start) ?></td>
                <td><?= h($event->end) ?></td>
                <td><?= h($event->created) ?></td>
                <td><?= h($event->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
                    <br>
                    <?php
                    if (!$event->memberStatus($this->request->session()
                        ->read('Auth.User.id'), \App\Model\Entity\EventsMember::TYPE_GOING)
                    ) {
                        echo $this->Html->link(__('Going'), [
                            'action' => 'linkActiveMember',
                            $event->id,
                            \App\Model\Entity\EventsMember::TYPE_GOING
                        ]);
                    }
                    if (!$event->memberStatus($this->request->session()
                        ->read('Auth.User.id'), \App\Model\Entity\EventsMember::TYPE_INTERESTED)
                    ) {
                        echo $this->Html->link(__('Interested'), [
                            'action' => 'linkActiveMember',
                            $event->id,
                            \App\Model\Entity\EventsMember::TYPE_INTERESTED
                        ]);
                    }
                    if (!$event->memberStatus($this->request->session()
                        ->read('Auth.User.id'), \App\Model\Entity\EventsMember::TYPE_NOT_GOING)
                    ) {
                        echo $this->Html->link(__('Not going'), [
                            'action' => 'linkActiveMember',
                            $event->id,
                            \App\Model\Entity\EventsMember::TYPE_NOT_GOING
                        ]);
                    }
                    ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
