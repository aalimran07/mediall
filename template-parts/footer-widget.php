<footer class="footer-area section-padding">
    <div class="container">
        <div class="row">
            <?php if (is_active_sidebar('footer-1')) : ?>
            <div class="col-md-3">
                <?php dynamic_sidebar('footer-1');?>
            </div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-2')) : ?>
            <div class="col-md-3">
                <?php dynamic_sidebar('footer-2'); ?>
            </div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-3')) : ?>
            <div class="col-md-3">
                <?php dynamic_sidebar('footer-3'); ?>
            </div>
            <?php endif; ?>
            <?php if (is_active_sidebar('footer-4')) : ?>
            <div class="col-md-3">
                <?php dynamic_sidebar('footer-4'); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</footer>
