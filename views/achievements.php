<?php
try {
    $achievements = AchievementModel::all();

} catch (Exception $e) {
    $achievements = array();
}
?>
<?php if(!empty($achievements)): ?>
<section class="is-medium is-white has-text-centered has-border-top">
    <div class="container is-narrow">
        <div class="columns is-centered">
            <div class="column is-half">
                <h1 class="title is-size-3-desktop is-size-4-tablet is-size-5-mobile"
                    data-sal="zoom-in"
                    data-sal-delay="50">
                    <?php echo Context::getContext()->translate('achievements'); ?>
                </h1>
            </div>
        </div>

        <div class="columns is-multiline is-mobile mb-1">
            <div class="column is-12-mobile is-half-tablet is-one-third-desktop">
                <figure class="image is-3by2"
                        data-sal="zoom-in"
                        data-sal-delay="50">
                    <img class="" src="img/projects/wfdesignbuild.png">
                </figure>
            </div>
        </div>



    </div>
</section>
<?php endif; ?>