<?php if (count($errMsg) > 0) : ?>
<? foreach($errMsg as $item) :?>

<li class="mb-2"><?= $item ?></li>

<? endforeach ?>
<? endif ?>