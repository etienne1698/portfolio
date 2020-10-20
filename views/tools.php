<?php
try {
    $tools = ToolModel::all();
} catch (Exception $e) {
    $tools = array();
}
?>

<?php if(!empty($tools)): ?>
<section class="tools is-medium is-white has-text-centered has-border-top">
    <div class="container is-narrow">
        <div class="columns is-centered mb-5">
            <div class="column is-half">
                <h1 class="title is-size-3-desktop is-size-4-tablet is-size-5-mobile"
                    data-sal="zoom-in"
                    data-sal-delay="50">
                    <?php echo Context::getContext()->translate('tools'); ?>
                </h1>
            </div>
        </div>

        <div class="content">
            <div class="columns is-multiline is-mobile">
                <?php foreach ($tools as $tool): ?>
                    <div class="column is-half-mobile is-one-third-tablet">
                        <figure class="image is-128x128">
                            <img data-sal="fade"
                                 data-sal-delay="200"
                                 alt="<?php echo $tool->name; ?>"
                                 title="<?php echo $tool->name; ?>"
                                 src="<?php echo $tool->img_path; ?>">
                        </figure>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </div>
</section>
<?php endif; ?>