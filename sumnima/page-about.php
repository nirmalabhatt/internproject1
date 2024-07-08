<?php get_header();?>
<br>
<h1 class="heading"> About Sumnima</h1><br>


<?php
$about_para = get_field('about_para');

if ($about_para) {
    echo '<div class="about-para">';
    echo $about_para;
    echo '</div>';
} else {
    echo '<p class="error-message">No content found for about_para.</p>';
}
?>

<?php
                $name = get_field('name');
                $phone_number = get_field('phone_number');
                $email = get_field('email');
                $address= get_field('address');            
            ?>

<?php
$image = get_field('image');
$gallary = $image['sizes']['large'];
?>

<h3>Contact Us</h3>
<div class="about">
    <div class="about-content">
        <p><span class="label"> Companey Name: </span><?php echo  $name ?> </p>
        <p><span class="label"> Phone Number: </span><?php echo  $phone_number ?> </p>
        <p><span class="label">Email: </span><?php echo  $email ?> </p>
        <p><span class="label">Address: </span> <?php echo  $address ?></p>
    </div>

    <div class="about-image">
        <img src="<?php echo $gallary; ?>" alt="" class="img-fluid">
    </div>
</div>

<?php
$video_url = get_field('video');
if ($video_url) {
    $video_id = get_youtube_video_id($video_url);

    if ($video_id) {
        ?>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/aDcU9gxl4rI?si=HWXztbsW5EEZo2lM/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe>
        <?php
    } else {
        echo 'Invalid YouTube video URL.';
    }
} else {
    echo 'No video URL provided.';
}
function get_youtube_video_id($url) {
    $video_id = '';

    // Check if the URL is a valid YouTube URL
    if (preg_match('/youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\//i', $url, $match)) {
        // Extract the video ID from the URL
        $video_id = end($match);
    }

    return $video_id;
}
?>




<?php get_footer();?>