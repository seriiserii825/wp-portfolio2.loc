<aside class="blog-sidebar">
    <?php if(is_active_sidebar( 'sidebar-widget' )): ?>
        <?php dynamic_sidebar( 'sidebar-widget' ); ?>
    <?php else: ?>
        <h2>Место для виджета сайдбара</h2>
    <?php endif; ?>
</aside>