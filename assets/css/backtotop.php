<?php
header('Content-type: text/css');

$size = option('dasformt.backtotop.button.size', '60px');
$radius = option('dasformt.backtotop.button.radius', '100px');
$bottom = option('dasformt.backtotop.button.position.bottom', '30px');
$right = option('dasformt.backtotop.button.position.right', '40px');
$background = option('dasformt.backtotop.button.colors.background', 'var(--primary, #008ED9)');
$opacity = option('dasformt.backtotop.button.colors.opacity', 0.5);
?>

.cd-top {
    display: inline-block;
    height: <?= $size ?>;
    width: <?= $size ?>;
    border-radius: <?= $radius ?>;
    position: fixed;
    bottom: <?= option('dasformt.backtotop.button.position.bottom', '30px') ?>;
    right: <?= option('dasformt.backtotop.button.position.right', '40px') ?>;
    z-index: <?= option('dasformt.backtotop.button.zIndex', 1000) ?>;
    overflow: hidden;
    text-indent: 100%;
    white-space: nowrap;
    background: url('<?= url('backtotop/images/arrow-up.svg') ?>') no-repeat center;
    background-size: 50%;
    background-color: <?= $background ?>;
    filter: brightness(1);
    visibility: hidden;
    opacity: 0;
    transition: opacity .3s, visibility 0s .3s, background-color .3s, filter .3s;
}

.cd-top.cd-is-visible,
.cd-top.cd-fade-out {
    transition: opacity .3s, visibility 0s 0s;
}

.cd-top.cd-is-visible {
    visibility: visible;
    opacity: <?= option('dasformt.backtotop.button.colors.opacity', 0.5) ?>;
}

.cd-top.cd-fade-out {
    opacity: <?= option('dasformt.backtotop.button.colors.opacity', 0.5) ?>;
}

.cd-top:hover {
    opacity: <?= option('dasformt.backtotop.button.colors.hoverOpacity', 1) ?>;
    filter: brightness(0.85);
}

@media only screen and (min-width: 768px) {
    .cd-top {
        bottom: <?= option('dasformt.backtotop.responsive.tablet.bottom', '40px') ?>;
        height: <?= option('dasformt.backtotop.responsive.tablet.size', '55px') ?>;
        width: <?= option('dasformt.backtotop.responsive.tablet.size', '55px') ?>;
    }
}

@media only screen and (min-width: 1024px) {
    .cd-top {
        bottom: <?= option('dasformt.backtotop.responsive.desktop.bottom', '50px') ?>;
        height: <?= option('dasformt.backtotop.responsive.desktop.size', '60px') ?>;
        width: <?= option('dasformt.backtotop.responsive.desktop.size', '60px') ?>;
    }
}