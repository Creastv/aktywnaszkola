<aside id="sidebar" class="widget-area">
    <?php if (!is_active_sidebar('sidebar')) : ?>
    <?php dynamic_sidebar('sidebar'); ?>
    <?php else : ?>
    <h1>test</h1>
    <?php endif; ?>
</aside>