

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
    
    
        //top슬라이드 전체보기
    
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
    
    
        //자주찾는메뉴 
    
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



    $('.login').each(function () {
        var login = $(this);
        var newtab = login.find('.login_tab>ul>li>a');
        var newview = login.find('.login_sub>div');

        var lasttab;
        var lastview;

        newtab.fadeIn(100);
        lasttab = newtab.filter('.on');
        lastview = $(lasttab.attr('href'));

        newview.fadeOut(100);
        lastview.fadeIn(100);

        newtab.click(function (e) {
            e.preventDefault();

            var currenttab = $(this);
            var currentview = $(currenttab.attr('href'));

            if (currenttab.get(0) === lasttab.get(0)) {
                return;
            };

            lasttab.removeClass('on');
            currenttab.addClass('on');
            lastview.fadeOut(100);
            currentview.fadeIn(100);

            lasttab = currenttab;
            lastview = currentview;
        });
    });


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

    
});