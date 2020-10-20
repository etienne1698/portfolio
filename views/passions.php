<?php
try {
    $passions = PassionModel::all();
} catch (Exception $e) {
    $passions = array();
}
?>
<?php if(!empty($passions)): ?>
<section class="section passions has-text-centered">
    <div class="container is-narrow">
        <div class="box">
            <div class="columns is-centered mb-5">
                <div class="column is-half">
                    <h1 class="title is-size-3-desktop is-size-4-tablet is-size-5-mobile"
                        data-sal="zoom-in"
                        data-sal-delay="50">
                        <?php echo Context::getContext()->translate('passions'); ?>
                    </h1>
                </div>
            </div>

            <div class="content">

                <div class="columns is-centered mb-4">
                    <?php foreach ($passions as $passion): ?>
                        <div class="column">
                            <figure class="image is-128x128"
                                    data-sal="zoom-in"
                                    data-sal-delay="50">
                                <img data-sal="fade"
                                     data-sal-delay="200"
                                     alt="<?php echo $passion->getName(); ?>"
                                     title="<?php echo $passion->getName(); ?>"
                                     src="<?php echo $passion->img_path; ?>">
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>