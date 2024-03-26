<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>
    <?php get_header(); ?>

    <div class="main-content">
        <div class="left-section">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/media/app.png" alt="Your Image" width="200" height="200">
        </div>
        <div class="center-section">
            <h1>Lorem Ipsum</h1>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque, velit in mattis vulputate, quam odio varius odio, sit amet fringilla urna eros a ipsum. Nullam non lacinia eros. Maecenas sed tortor dapibus, eleifend odio sit amet, interdum odio. Vivamus elementum, nisi non laoreet tincidunt, neque odio bibendum lacus, ut vestibulum metus nulla in sapien. Duis nec justo et odio tristique rhoncus non vitae odio. Pellentesque scelerisque, nunc ac cursus interdum, massa elit cursus risus, at laoreet purus turpis non massa. Fusce ullamcorper fermentum orci a fringilla. Ut nec turpis a elit feugiat tempus.

Sed mollis consequat sapien, vitae egestas purus. Integer accumsan ante eu est dapibus fringilla. Maecenas eu aliquam nisi. Nullam et mauris et dui feugiat tincidunt id nec enim. Vestibulum cursus, lectus eget blandit commodo, mauris ex hendrerit metus, quis convallis mauris libero vitae nisi. Fusce ut metus volutpat, lacinia tellus id, dignissim nisi. Donec sit amet quam nec felis fermentum egestas. Curabitur sit amet interdum ex. Mauris posuere, nibh sit amet dignissim bibendum, velit elit blandit neque, ut tincidunt sapien quam vel justo.

Praesent nec finibus nunc. Duis volutpat, mi in dapibus facilisis, nibh mi venenatis tortor, et facilisis mauris massa eu libero. Suspendisse potenti. Nullam eu odio venenatis, vestibulum enim in, ultricies elit. Nulla facilisi. Nulla facilisi. Nunc sit amet arcu velit. Nullam et nisi vel tortor malesuada semper sit amet vel mauris. Maecenas faucibus id urna nec consequat. Sed rhoncus eleifend aliquam. Ut quis elit dui."</p>
        </div>
    </div>

    <?php get_footer(); ?>
</body>
</html>
