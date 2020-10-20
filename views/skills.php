<?php
try {
    $skills = SkillTypeModel::all();
    foreach ($skills as $s) {
        $s->groups;
    }
} catch (Exception $e) {
    $skills = array();
}
?>

<?php if (!empty($skills)): ?>
<section class="section box-override has-text-centered">
    <div class="container is-narrow">
        <div class="box">
            <div class="content">
                <div class="columns is-centered">
                    <?php foreach ($skills as $skill): ?>
                        <div class="column">
                            <i class="material-icons" data-sal="zoom-in" data-sal-delay="50">
                                <?php echo $skill->icon; ?>
                            </i>
                            <h1 class="title is-size-4 is-spaced"
                                data-sal="zoom-in"
                                data-sal-delay="50">
                                <?php echo $skill->getName(); ?>
                            </h1>
                            <?php foreach ($skill->groups as $grp): ?>
                            <p class="list-title has-text-primary has-text-weight-normal"
                               data-sal="zoom-in"
                               data-sal-delay="50">
                                <?php echo $grp->getName(); ?>
                            </p>
                            <p data-sal="zoom-in"
                               data-sal-delay="50">
                                <?php echo $grp->skills; ?>
                            </p>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>