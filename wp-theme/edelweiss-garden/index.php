<?php
/**
 * Main Template File
 *
 * @package EdelweissGarden
 */

get_header();
?>

<main class="min-h-screen bg-background">
    <?php
    get_template_part('template-parts/hero');
    get_template_part('template-parts/about');
    get_template_part('template-parts/programs');
    get_template_part('template-parts/reviews');
    get_template_part('template-parts/contacts');
    ?>
</main>

<?php
get_footer();

