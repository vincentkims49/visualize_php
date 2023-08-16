<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Strategy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .post {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
        }
        .post h2 {
            margin-top: 0;
        }
        .post img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php
$json_url = 'https://www.thebrand.ai/i/prompt/seo-strategy?mode=categoryView';
$json_data = file_get_contents($json_url);
$data = json_decode($json_data, true);
$image_base_url = 'https://www.thebrand.ai/i/uploads/blog/202307/';

foreach ($data['posts'] as $post) {
    $image_default_url = $image_base_url . $post['image_default'];
    $image_small_url = $image_base_url . $post['image_small'];

    echo '<div class="post">';
    echo '<h2>' . $post['title'] . '</h2>';
    echo '<p>' . $post['slug'] . '</p>';
    echo '<p>Keywords: ' . $post['keywords'] . '</p>';
    echo '<img src="' . $image_default_url . '" alt="' . $post['image_default'] . '" />';
    echo '<img src="' . $image_small_url . '" alt="' . $post['image_small'] . '" />';
    echo '<p>Created At: ' . $post['created_at'] . '</p>';
    echo '<p>Category: ' . $post['category_name'] . '</p>';
    echo '</div>';
}
?>

</body>
</html>
