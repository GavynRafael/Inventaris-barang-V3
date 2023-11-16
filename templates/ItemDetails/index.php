<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ItemDetail> $itemDetails
 */
?>
<div class="itemDetails index content">
    <?= $this->Html->link(__('New Item Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Item Details') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($itemDetails as $key => $itemDetail): ?>
                <tr>
                    <td><?= $this->Number->format($key+1) ?></td>
                    <td><?= h($itemDetail->code) ?></td>
                    <td><?= h($itemDetail->created) ?></td>
                    <td><?= h($itemDetail->modified) ?></td>
                    <td><?= $itemDetail->has('item') ? $this->Html->link($itemDetail->item->name, ['controller' => 'Items', 'action' => 'view', $itemDetail->item->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $itemDetail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemDetail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemDetail->id)]) ?>
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
