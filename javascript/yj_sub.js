$(function () {

    //탑버튼
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
            $('#top_btn').fadeIn();
        }
        else {
            $('#top_btn').fadeOut();
        }
    });

    $('#top_btn a').click(function (e) {
        $('html,body').animate({ scrollTop: 0 }, 500);
        e.preventDefault();
    })

    //자주찾는메뉴 
    var total = $('.total_op');

    total.click(function (e) {
        e.preventDefault();
    });

    total.click(function () {
        $('#siteMap').css('height', '320px');
        $('.total_cl').show();
        total.hide();
    });

    $('.total_cl').click(function () {
        $('#siteMap').css('height', '160px');
        $('.total_cl').hide();
        total.show();
    });

    $('.top .siteMap_total .language').click(function () {
        $('#siteMap .top .siteMap_total .language_list').show();
    });

    $('#siteMap .top .siteMap_total .language_list ul li a').click(function () {
        $('#siteMap .top .siteMap_total .language_list').hide();
    });


    $('.site_list ul li a').each(function () {
        var a = $(this);
        var img = a.find('img');
        var src_off = img.attr('src');
        var src_hover = src_off.replace('_n', '_hover');

        $('<img >').attr('src', src_hover);

        a.hover(function () {
            img.attr('src', src_hover);
        }, function () {
            img.attr('src', src_off)
        });
    });


    //nav
    $('#nav>ul>li.nav>ul.depth1>li').each(function () {
        $(this).hover(function () {
            $(this).find('.nav_sub').stop().animate({ height: '475px' });
            $(this).find('.nav_sub').css('border-bottom', '2px solid #00a651');
        }, function () {
            $(this).find('.nav_sub').stop().animate({ height: '0px' });
            $(this).find('.nav_sub').css('border-bottom', 'none');
        });

        $('#nav>ul>li.nav>ul.depth1>li:nth-child(5)').hover(function () {
            $(this).find('.nav_sub').stop().animate({ height: '800px' });
            $(this).find('.nav_sub').css('border-bottom', '2px solid #00a651');
        }, function () {
            $(this).find('.nav_sub').stop().animate({ height: '0px' });
            $(this).find('.nav_sub').css('border-bottom', 'none');
        });

        $('*').click(function () {
            $(this).find('.nav_sub').stop().animate({ height: '0px' });
        })
    });


    $('#main_nav #nav .nav>ul').hover(function () {
        $('#main_nav #nav').css({ 'background-color': 'white' })
    }, function () {
        $('#main_nav #nav').css({ 'background-color': '#ecf5ea' })
    });

    $('#main_nav #nav .nav>ul').hover(function () {
        $('#main_nav #nav .nav').css({ 'background-color': 'white' })
    }, function () {
        $('#main_nav #nav .nav').css({ 'background-color': '#ecf5ea' })
    });

    $('#main_nav #nav .nav>ul').hover(function () {
        $('.nav_sub').css({ 'background-color': 'white' })
    }, function () {
        $('.nav_sub').css({ 'background-color': '#ecf5ea' })
    });

    $('#main_nav #nav .nav>ul').hover(function () {
        $('#nav .member').css({ 'background-color': 'white' })
    }, function () {
        $('#nav .member').css({ 'background-color': '#ecf5ea' })
    });



    //서브 헤더

    $('.print_btn').on('click', function () {
        window.print();
        return false
    })

    var base = 100;
    var mybody = $('html');
    $('#zoom a').on('click', function () {
        var zNum = $('#zoom a').index(this);
        if (zNum == 0) {//확대(+)
            base += 10;
        }
        else {// 축소(-)
            base -= 10;
        }
        mybody.css('overflow-x', 'auto')
            .css('transform-origin', '50% 0')
            .css('transform', 'scale(' + base / 100 + ')')
            .css('zoom', base + '%'); //낮은 브라우저 때문에
        return false;
    });

    $('.share').click(function () {
        $('.share_list').toggle(500);
    })



    //서브1 섹션사이드


    $('.sub_section_side .click').click(function (e) {
        e.preventDefault();

        var tgg = $('.down').css('display', 'block');

        if ($('.down').css('display', 'block')) { tgg.stop().css('display', 'none'); }

        $(this).next('.down').stop().css('display', 'block');
    })





    //서브3 팝업

    $('.pop_closed').click(function () {
        $('#sub03_pop').css('display', 'none');

    })


    //서브3 현재날짜 - 오류원인으로 제거

    // document.getElementById('date').value = new Date().toISOString().substring(0, 10);
    // document.getElementById('date2').value = new Date().toISOString().substring(0, 10);

    // 푸터슬라이드

/*     $('#footer .Fsitemap div>a').click(function () {
        if($('.site_sub').css('display','block')) {$('.site_sub').css('display','none')}
        $(this).next('.site_sub').toggle(10);
    })

    $('.site_sub').click(function () {
        $('.site_sub').css('display','none');
    })
 */
});
$(function(){

    $('.foot>a').click(function () {
        $('.site_sub').stop().animate({ height: 0 }, 200);
        $(this).next('.site_sub').stop().animate({ height: '290px' }, 500);
    })

    $('.site_sub').click(function () {
        $(this).stop().animate({ height: 0 }, 200)
    })
});