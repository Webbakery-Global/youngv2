<?php


$className = 'projects';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
?>


<div class="<?php echo esc_attr($className); ?>">
    <div class="row">

        <?php
        $projecten = get_field('projecten');
        foreach($projecten as $project) :
            ?>

            <div class="col-sm-12 col-lg-4 mb-2 mb-lg-0">
                <a href="<?php echo get_site_url() ?>/projecten">
                    <?php echo get_the_post_thumbnail($project->ID, 'large', array('class' => 'project_thubmnail')) ?>
                </a>
            </div>

    <?php endforeach ?>

    </div>
</div>