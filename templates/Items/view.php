<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="items view content">
            <h3><?= h($item->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($item->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Room') ?></th>
                    <td><?= $item->has('room') ? $this->Html->link($item->room->name, ['controller' => 'Rooms', 'action' => 'view', $item->room->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= $item->has('type') ? $this->Html->link($item->type->name, ['controller' => 'Types', 'action' => 'view', $item->type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($item->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= $this->Number->format($item->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($item->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($item->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($item->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Item Details') ?></h4>
                <?php if (!empty($item->item_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('History Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($item->item_details as $itemDetails) : ?>
                        <tr>
                            <td><?= h($itemDetails->id) ?></td>
                            <td><?= h($itemDetails->code) ?></td>
                            <td><?= h($itemDetails->photo) ?></td>
                            <td><?= h($itemDetails->created) ?></td>
                            <td><?= h($itemDetails->modified) ?></td>
                            <td><?= h($itemDetails->item_id) ?></td>
                            <td><?= h($itemDetails->history_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ItemDetails', 'action' => 'view', $itemDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ItemDetails', 'action' => 'edit', $itemDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ItemDetails', 'action' => 'delete', $itemDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemDetails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
