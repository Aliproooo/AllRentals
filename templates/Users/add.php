<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="custom-container">
    <div class="custom-row align-center">
        <div class="custom-column column-80">
            <div class="custom-users-form-content">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Create Your Account') ?></legend>
                    <?php
                        echo $this->Form->control('level', ['class' => 'custom-input']);
                        echo $this->Form->control('name', ['class' => 'custom-input']);
                        echo $this->Form->control('username', ['class' => 'custom-input']);
                        echo $this->Form->control('email', ['class' => 'custom-input']);
                        echo $this->Form->control('password', ['class' => 'custom-input']);
                        echo $this->Form->control('user_created', ['class' => 'custom-input']);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'), ['class' => 'custom-button']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<style>
.custom-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    padding: 0 15px; /* Add padding to the sides */
}

.custom-row.align-center {
    max-width: 900px;
}

.custom-users-form-content {
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    padding: 20px;
}

.custom-users-form-content fieldset {
    border: none;
    padding: 0;
    margin: 0;
}

.custom-users-form-content legend {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.custom-users-form-content .custom-input {
    width: calc(100% - 20px); /* Adjusted width to account for padding */
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.custom-users-form-content .custom-button {
    display: block;
    width: calc(100% - 20px); /* Adjusted width to account for padding */
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #4CAF50;
    color: white;
    font-size: 18px;
    cursor: pointer;
}

.custom-users-form-content .custom-button:hover {
    background-color: #45a049;
}
</style>
