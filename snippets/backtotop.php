<?php if (option('dasformt.backtotop.enabled', true)): ?>
<script>
window.backtotopConfig = {
    offset: <?= option('dasformt.backtotop.offset', 300) ?>,
    offsetOpacity: <?= option('dasformt.backtotop.offsetOpacity', 1200) ?>,
    scrollDuration: <?= option('dasformt.backtotop.scrollDuration', 700) ?>
};
</script>

<a 
    href="#" 
    class="cd-top" 
    aria-label="<?= option('dasformt.backtotop.aria.label', 'Zurück nach oben') ?>"
>
    <span class="screen-reader-text">
        <?= option('dasformt.backtotop.aria.hidden', 'Zum Seitenanfang scrollen') ?>
    </span>
</a>

<link rel="stylesheet" href="<?= url('backtotop/css/styles') ?>">
<script src="<?= url('backtotop/js/script') ?>"></script>
<?php endif ?> 