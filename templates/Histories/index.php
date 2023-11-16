<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\History> $histories
 */
?>
<div class="histories index content">
    <?= $this->Html->link(__('New History'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Histories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('fixed') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('detail_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($histories as $history): ?>
                <tr>
                    <td><?= $this->Number->format($history->id) ?></td>
                    <td><?= h($history->status) ?></td>
                    <td><?= h($history->date) ?></td>
                    <td><?= h($history->fixed) ?></td>
                    <td><?= h($history->created) ?></td>
                    <td><?= h($history->modified) ?></td>
                    <td><?= $this->Number->format($history->detail_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $history->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $history->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
