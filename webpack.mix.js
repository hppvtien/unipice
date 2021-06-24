const mix = require('laravel-mix');

// FRONTEND =====
mix.sass('resources/assets/frontend/scss/frontend_dashboard.scss', 'public/css');
mix.sass('resources/assets/scss/pages/home/home.scss', 'public/css');
mix.sass('resources/assets/scss/pages/category/category.scss', 'public/css');
mix.sass('resources/assets/scss/pages/course/course.scss', 'public/css');
mix.sass('resources/assets/scss/pages/teacher/teacher.scss', 'public/css');
mix.sass('resources/assets/scss/pages/pay/pay.scss', 'public/css');
mix.sass('resources/assets/scss/pages/cart/cart.scss', 'public/css');
mix.sass('resources/assets/scss/pages/user/user.scss', 'public/css');
mix.sass('resources/assets/scss/pages/blog/blog_home.scss', 'public/css');
mix.sass('resources/assets/scss/pages/blog/blog_menu.scss', 'public/css');
mix.sass('resources/assets/scss/pages/blog/blog_article.scss', 'public/css');
mix.sass('resources/assets/scss/pages/unistyle/unistyle.scss', 'public/css');


// FRONTEND =====
mix.js('resources/assets/frontend/js/frontend_dashboard.js', 'public/js');
mix.js('resources/assets/js/pages/home/home.js', 'public/js');
mix.js('resources/assets/js/pages/category/category.js', 'public/js');
mix.js('resources/assets/js/pages/course/course.js', 'public/js');
mix.js('resources/assets/js/pages/teacher/teacher.js', 'public/js');
mix.js('resources/assets/js/pages/cart/cart.js', 'public/js');
mix.js('resources/assets/js/pages/user/user.js', 'public/js');
mix.js('resources/assets/js/pages/user/deletejob.js', 'public/js');
mix.js('resources/assets/js/pages/unijs/unijs.js', 'public/js');

//ADMIN
// mix.js('resources/assets/valex/js/pages/admin_dashboard.js', 'public/js_admin');
// mix.sass('resources/assets/valex/scss/pages/admin_dashboard.scss', 'public/css_admin');


mix.autoload({
    jquery: ['$', 'jQuery', 'window.jQuery'],
});

