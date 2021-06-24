
import 'owl.carousel'
import AutoloadJs from '../../../components/_inc_autoload'
var Home = {
    init : function ()
    {
        this.runBanner()
        this.runTags()
        this.runCourse()
        this.runSlider()
        this.showCourseByCategory()
    },

    runBanner()
    {
        $('.js-banner').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items:1,
            navigation: true,
            smartSpeed:450,
            navText: ["<i class='fa fa-chevron-left '></i>","<i class='fa fa-chevron-right'></i>"]
        })
    },

    runTags()
    {
        $('.js-tags').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            // items:7,
            navigation: true,
            smartSpeed:450,
            navText: ["<i class='fa fa-chevron-left '></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{
                // 0:{
                //     items:2,
                //     nav:true
                // },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:7,
                    nav:true,
                    loop:false
                }
            }
        })
    },

    runCourse()
    {
        $(".js-lists-course-home").owlCarousel({
            // items:4,
            loop:true,
            nav: true,
            navigation: true,
            smartSpeed:450,
            navText: ["<i class='fa fa-chevron-left '></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:1.5,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:false
                }
            }
        })
        $(".js-lists-lecture").owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items:3,
            margin:15,
            loop:true,
            nav: false,
            dots: false,
            autoplay:true,
            autoplayTimeout:2000,
            navText: ["<i class='fa fa-chevron-left '></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
    },


runSlider()
{
    $(".js-slider-hot").owlCarousel({   
        items:1,
        loop:true,
        nav: false,
        dots: true,
        autoplay:false,
        autoplayTimeout:3000,

        navText: ["<i class='fa fa-chevron-left '></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
},

    showCourseByCategory()
    {
        $(".js-course-by-category").click(function (event){
            event.preventDefault()
            $(".js-course-by-category").removeClass('active')
            let $this = $(this);
            $this.addClass('active')
            let URL = $this.attr('href')
            if (URL) {
                $.ajax({
                    url: URL,
                    beforeSend: function( xhr ) {
                        $(".js-loading-1").show()
                    }
                }).done(function( results ) {
                    console.log(results)
                    if (results.coursesHtml)
                    {
                        $("#coursesHtml").html(results.coursesHtml)
                    }
                });
            }
        })
    }
}

$(function (){
    AutoloadJs.init()
    Home.init()
})
