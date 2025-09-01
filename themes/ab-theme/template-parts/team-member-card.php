<?php

$memberPhoto = get_field('team_member_image', $post->ID);
$teamCreds = get_field('team_member_credential_initials', $post->ID);
$teamTitle = get_field('team_member_title', $post->ID);

?>

<div class="text-decoration-none m-3">
    <a href="<?php the_permalink();?>">
        <div class="team-member-card">
            <div class="team-member-about-us-container">
                <div class="team-member-about-us-thumbnail-container mb-3">
                    <?php if ( $memberPhoto ): ?>
                        <img class="team-member-thumbnail" src="<?php echo $memberPhoto['sizes']['large'];?>" />
                    <?php endif;?>
                </div>
                <div class="text-left team-member-heading">
                    <h2 class="team-member-fullname"><?php the_title(); ?></h2>
                    <p class="team-member-creds"><?php echo $teamCreds; ?></p>
                </div>
                <div class="text-left">
                    <p class="team-member-title"><?php echo $teamTitle;?></p>
                </div>
            </div>
        </div>
    </a>
</div>