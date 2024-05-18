<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message success" onclick="this.classList.add('hidden')" id="success"><?= $message ?></div>

<style>

#success{

    color:green;
    font-size:17px;

}
</style>
