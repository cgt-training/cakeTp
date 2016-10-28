<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Enquiry'), ['action' => 'edit', $enquiry->email]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Enquiry'), ['action' => 'delete', $enquiry->email], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->email)]) ?> </li>
        <li><?= $this->Html->link(__('List Enquiries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enquiry'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enquiries view large-9 medium-8 columns content">
    <h3><?= h($enquiry->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($enquiry->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($enquiry->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($enquiry->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Query') ?></th>
            <td><?= h($enquiry->query) ?></td>
        </tr>
    </table>
</div>
