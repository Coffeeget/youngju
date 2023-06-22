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


    // 배너슬라이드모션


    var banner = $('.banner_slide').find('.banner_img>ul>li');
    var button1 = $('.banner_slide').find('.slide_btn>.btn_right');
    var button2 = $('.banner_slide').find('.slide_btn>.btn_left');
    var current = 0;
    var setIntervalSd;
    var p = $('.banner_slide').find('.num>p');

    timer();

    function timer() {
        setIntervalSd = setInterval(function () {
            var prev = banner.eq(current);
            var pn = p.eq(current);

            move(prev, 0, '-100%');
            pn.removeClass('num_on'); //넘버

            current++;

            if (current == banner.size()) { current = 0 }

            var next = banner.eq(current);
            var pnn = p.eq(current);

            move(next, '100%', 0);
            pnn.addClass('num_on')
        }, 2000);
    }

    function move(tg, start, end) {
        tg.css('left', start).stop().animate({ left: end }, { duration: 500, ease: 'easeOutCubic' });

    }

    $('.banner .banner_slide').on({
        mouseover: function () {
            clearInterval(setIntervalSd);
        }, mouseout: function () {
            timer();
        }
    })


    button1.click(function () {
        var prev = banner.eq(current);
        var pn = p.eq(current);


        //현재 보여지는 이미지를 왼쪽으로 이동
        //넘버는 현재 보여지는 안보이게
        move(prev, 0, '-100%');
        pn.removeClass('num_on');

        current++;

        //조건문 배너 이미지가 끝까지 갔다면 초기화
        if (current == banner.size()) { current = 0 }

        //다음이미지는 현재 보여지도록 이동
        var next = banner.eq(current);
        var pnn = p.eq(current);

        move(next, '100%', 0);
        pnn.addClass('num_on')

        //원래 링크속성 없애기

        return false;

    });

    button2.click(function () {
        var prev = banner.eq(current);
        var pn = p.eq(current);


        //현재 보여지는 이미지를 왼쪽으로 이동
        //넘버는 현재 보여지는 안보이게
        move(prev, 0, '100%');
        pn.removeClass('num_on');

        current--;

        //조건문 배너 이미지가 끝까지 갔다면 초기화
        if (current == -banner.size()) { current = 0 }

        //다음이미지는 현재 보여지도록 이동
        var next = banner.eq(current);
        var pnn = p.eq(current);

        move(next, '-100%', 0);
        pnn.addClass('num_on')

        //원래 링크속성 없애기

        return false;

    });


    //날씨
    $(function () {
        $.getJSON('https://api.openweathermap.org/data/2.5/weather?lat=36.805647&lon=128.624005&appid=931cf418021445795381368f79037456&units=Metric', function (data) {
            var $cTemp = data.main.temp;
            // var $clowTemp = data.main.temp_min;
            // var $chighTemp = data.main.temp_max;
            var now = new Date(Date.now());
            var b = now.getDay();

            switch (b) {
                case 0: c = "일"
                    break
                case 1: c = "월"
                    break
                case 2: c = "화"
                    break
                case 3: c = "수"
                    break
                case 4: c = "목"
                    break
                case 5: c = "금"
                    break
                case 6: c = "토"
                    break
            }
            var month = now.getMonth() + 1;
            var $cDate = month + '월 ' + now.getDate() + '(' + c + ') ';

            let weatherIcon = { //스코프범위를 가지는 지역 변수
                '01': 'wi wi-day-sunny',
                '02': 'wi wi-day-cloudy',
                '03': 'wi wi-cloud',
                '04': 'wi wi-cloudy',
                '09': 'wi wi-day-rain-mix',
                '10': 'wi wi-showers',
                '11': 'wi wi-thunderstorm',
                '13': 'wi wi-snowflake-cold',
                '50': 'wi wi-smog'
            }

            var $wIcon = (data.weather[0].icon).substr(0, 2);

            $('.wicon').append('<i class="' + weatherIcon[$wIcon] + '"></i>');
            $('.wDate').append($cDate);
            $('.wtemp').append($cTemp + '℃');

            if (c == '토') { $('.wDate').css('color', 'blue') };
            if (c == '일') { $('.wDate').css('color', 'red') };
            // $('.wlowtemp').append($clowTemp + '℃');
            // $('.whightemp').append($chighTemp + '℃');
        });
    });



    // 섹션1 시작
    //알립니다
    $('#news').each(function () {
        var news = $(this);
        var newsTit = news.find('.news_list>li>a');
        var newsTxt = news.find('div.newsListSub');

        var lastTit;
        var lastTxt;

        newsTit.fadeIn(200);
        lastTit = newsTit.filter('.on');
        lastTxt = $(lastTit.attr('href'));

        newsTxt.fadeOut(200);
        lastTxt.fadeIn(200);

        newsTit.click(function (e) {
            e.preventDefault();

            var currentTit = $(this);
            var currentTxt = $(currentTit.attr('href'));

            if (currentTit.get(0) === lastTit.get(0)) {
                return
            }
            lastTit.removeClass('on');
            currentTit.addClass('on');
            lastTxt.fadeOut(200);
            currentTxt.fadeIn(200);

            lastTit = currentTit;
            lastTxt = currentTxt;
        });
    });



    //자주찾는사이트

    $('.bookmark').each(function () {
        var bookmark = $(this);
        var bmarList = bookmark.find('ul.bmarkList>li>a');
        var bmarkcont = bookmark.find('.bmarkcont>ul');

        var lastbml;
        var lastbmc;

        bmarList.fadeIn(200);
        lastbml = bmarList.filter('.on2');
        lastbmc = $(lastbml.attr('href'));

        bmarkcont.fadeOut(200);
        lastbmc.fadeIn(200);

        bmarList.click(function (e) {
            e.preventDefault();

            var currentbml = $(this);
            var currentbmc = $(currentbml.attr('href'));

            if (currentbml.get(0) === lastbml.get(0)) {
                return
            }
            lastbml.removeClass('on2');
            currentbml.addClass('on2');
            lastbmc.fadeOut(200);
            currentbmc.fadeIn(200);

            lastbml = currentbml;
            lastbmc = currentbmc;
        });




    });



    var adSlide = $('.ad_slide_sub>ul');
    var adSlider = $('.ad_slide_sub>ul>li');
    var adSlideWidth = $('.ad_slide_sub>ul>li').width();
    var mainAdSlide;

    setIntervalAd();

    function setIntervalAd() {
        mainAdSlide = setInterval(function () {
            adSlide.stop().animate({ left: -adSlideWidth }, 500, function () {
                $('.ad_slide_sub>ul>li:first-child').insertAfter('.ad_slide_sub>ul>li:last-child');
                adSlide.css('left', 0);
            });
        }, 2000);

    }
    $('.ad_slide_sub, .ad_btn>span').hover(function () {
        clearInterval(mainAdSlide);
    }, function () {
        setIntervalAd();
    });

    function ad_left() {
        adSlide.stop().animate({ left: -adSlideWidth }, 500, function () {
            $('.ad_slide_sub>ul>li:first-child').insertAfter('.ad_slide_sub>ul>li:last-child');
            adSlide.css('left', 0);
        });
    }

    function ad_right() {
        $('.ad_slide_sub>ul>li:last-child').insertBefore('.ad_slide_sub>ul>li:first-child');
        adSlide.css('left', -adSlideWidth);
        adSlide.animate({ left: 0 }, 500);
    }

    $('.ad_btn>.btn_left').click(function () {
        ad_right();
    });

    $('.ad_btn>.btn_right').click(function () {
        ad_left();
    });



    // 영주시는 지금~
    $('#media').each(function () {
        var media = $(this);
        var mediaTit = media.find('#media_tit>div>.media_tit>a');
        var mediacont = media.find('.media>#media_list>.mediaList');

        var lastmediaTit;
        var lastmediacont;

        mediaTit.fadeIn(200);
        lastmediaTit = mediaTit.filter('.media_on');
        lastmediacont = $(lastmediaTit.attr('href'));

        mediacont.fadeOut(200);
        lastmediacont.fadeIn(200);

        mediaTit.click(function (e) {
            e.preventDefault();

            var currentmediaTit = $(this);
            var currentmediacont = $(currentmediaTit.attr('href'));


            if (currentmediaTit.get(0) === lastmediaTit.get(0)) {
                return
            }

            lastmediaTit.removeClass('media_on');
            currentmediaTit.addClass('media_on');
            lastmediacont.fadeOut(200);
            currentmediacont.fadeIn(200);

            lastmediaTit = currentmediaTit;
            lastmediacont = currentmediacont;
        });


        $('.tagBox p').hover(function () {
            $(this).css('background-color', '#333333').animate({ top: '-5px' })
        }, function () {
            $(this).css('background-color', '#999999').animate({ top: 0 })

        });

        $('.tagBox2 p').hover(function () {
            $(this).css('background-color', '#333333').animate({ top: '-5px' })
        }, function () {
            $(this).css('background-color', '#999999').animate({ top: 0 })

        });

    });

    $('.mediaNews>div').hover(function () {
        $(this).find('.under').css('text-decoration', 'underline 2px solid')
    }, function () {
        $(this).find('.under').css('text-decoration', 'none')
    });

    $('.media_video>div').hover(function () {
        $(this).find('.under').css('text-decoration', 'underline 2px solid')
    }, function () {
        $(this).find('.under').css('text-decoration', 'none')
    });



    // 푸터슬라이드

    $('#f_slide .f_slide_ctrl span:nth-child(1)').click(function () {
        $('#f_slide .f_slide_ctrl span:nth-child(1)').hide();
        $('#f_slide .f_slide_ctrl span:nth-child(2)').show();
    })


    $('#f_slide .f_slide_ctrl span:nth-child(2)').click(function () {
        $('#f_slide .f_slide_ctrl span:nth-child(2)').hide();
        $('#f_slide .f_slide_ctrl span:nth-child(1)').show();
    })


    var footslide = $('.f_slide_sub>div>ul');
    var footslideWidth = ('.f_slide_sub>div>ul>li');

    lastSlide();
    var Sliderft;

    function lastSlide() {
        Sliderft = setInterval(function () {
            footslide.stop().animate({ left: -footslideWidth }, 500, function () {
                $('.f_slide_sub>div>ul>li:first-child').insertAfter('.f_slide_sub>div>ul>li:last-child');
                footslide.css('left', 0);
            });
        }, 2000)
    };


    $('.f_play').click(function () {
        clearInterval(Sliderft);
    });

    $('.f_stop').click(function () {
        lastSlide();
    });



    $('#footer .sitemap div>a').click(function () {
        $('.site_sub').stop().animate({ height: 0 }, 200);
        $(this).next('.site_sub').stop().animate({ height: '290px' }, 500);
    });

    $('.site_sub').click(function () {
        $(this).stop().animate({ height: 0 }, 200)
    });

});

$(function () {
    $('#news').each(function () {
        var sectionTab = $(this);
        var newStab = sectionTab.find('ul.sectionTab>li>a');
        var newScont = sectionTab.find('.news_cont>div');

        var lastStab;
        var lastScont;

        newStab.fadeIn(200);
        lastStab = newStab.filter('.tab_on');
        lastScont = $(lastStab.attr('href'));

        newScont.fadeOut(200);
        lastScont.fadeIn(200);

        newStab.click(function (e) {
            e.preventDefault();

            var currentStab = $(this);
            var currentScont = $(currentStab.attr('href'));

            if (currentStab.get(0) === lastStab.get(0)) {
                return
            };

            lastStab.removeClass('tab_on');
            currentStab.addClass('tab_on');
            lastScont.fadeOut(200);
            currentScont.fadeIn(200);

            lastStab = currentStab;
            lastScont = currentScont;


        });
    });

});