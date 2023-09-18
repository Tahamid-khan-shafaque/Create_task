<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tasks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tasks form content">
            <?= $this->Form->create($task) ?>
            <fieldset>
                <legend><?= __('Add Task') ?></legend>
                <?php
                    echo $this->Form->control('user');
                    echo $this->Form->control('department', [
                        'type' => 'select',
                        'options' => [ 
                            'CSE' => 'CSE',
                            'IT' => 'IT',
                            'HR' => 'HR'
                        ],
                        'default' => 'cse' 
                     ]);
                     echo $this->Form->control('status', [
                        'type' => 'select', 
                        'options' => [ 
                            1 => '1',
                            0 => '0'
                        ],
                        'default' => 1 
                       ]);
                       echo $this->Form->control('type', [
                        'type' => 'select',
                        'options' => [ 
                            'easy' => 'Easy',
                            'difficult' => 'Difficult',
                            'medium' => 'Medium'
                         ],
                        'default' => 'easy' 
                       ]);
                    echo $this->Form->control('due_data');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
