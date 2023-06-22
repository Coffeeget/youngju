<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영주시청</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/weather-icons.min.css">
    <script src="./javascript/jquery-1.12.4.min.js"></script>
    <script src="./javascript/jquery.easing.1.3.js"></script>
    <script src="./javascript/prefixfree.min.js"></script>
    <script src="./javascript/yj.js"></script>
    <meta name="author" content="R">
    <meta name="keywords" content="영주시청, 시청, 영주시, 경상북도">
    <meta name="description" content="영주시청 반응형 웹페이지 입니다.">
    <meta name="Generator" content="vsCode">
    <link rel="shortcut icon" href="./slide_btn1.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script>
        function setCookie(name, value, expiredays) {
            var todayDate = new Date();
            todayDate.setDate(todayDate.getDate() + expiredays);
            document.cookie = name + "=" + escape(value) + "; path/; expires=" + todayDate.toUTCString() + ";"
        }
        function closeWin() { //닫기버튼
            if (document.notice_form.chkbox.checked) {
                setCookie("popup", "done", 1);
            }
            document.getElementById('popup').style.visibility = "hidden";
        }
    </script>
</head>
<?php
    session_start(); //세션 시작. 

?>
<body>
    <header>
        <div id="popup">
            <div class="popup">
                <figure>
                    <video src="./movie/media.mp4" width="1064" height="600" autoplay muted loop></video>
                </figure>
                <div class="pop_cl">
                    <form name="notice_form">
                        <p>
                            <input type="checkbox" name="chkbox" value="checkbox"> 오늘 하루 열지 않기
                            <a href="javascript:closeWin()"><i class="fa-solid fa-xmark fa-2xl"></i></a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <div id="top_btn">
            <img src="./images/sp_control.png" alt="top_arrow">
            <a href="#none">TOP</a>
        </div>
        <div id="siteMap">
            <div class="top">
                <div class="siteMap_total" style="cursor: pointer;">
                    <h2>주요사이트</h2>
                    <div class="total_op">전체보기</div>
                    <div class="total_cl">닫기</div>
                    <div class="language">
                        <span><i class="fa-solid fa-globe"></i></span>
                        <span>language</span>
                    </div>
                    <div class="language_list">
                        <ul>
                            <li><a href="#none">KOREAN</a></li>
                            <li><a href="#none">ENGLISH</a></li>
                            <li><a href="#none">CHINESE</a></li>
                            <li><a href="#none">JAPENESE</a></li>
                        </ul>
                    </div>
                </div>
                <div class="siteMap">
                    <div class="site_list">
                        <ul class="cf">
                            <li>
                                <a href="#none" title="문화관광 사이트 바로가기">
                                    <div class="img_box site1"><img src="./images/slide_btn1.png" alt="문화관광 사이트"></div>
                                    <span>문화관광</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="보건소 사이트 바로가기">
                                    <div class="img_box site2"><img src="./images/slide_btn2_n.png" alt="보건소 사이트"></div>
                                    <span>보건소</span>
                                </a>
                            </li>
                            <li>

                                <a href="#none" title="영주시의회 사이트 바로가기">
                                    <div class="img_box site3"><img src="./images/slide_btn3_n.png" alt="영주시의회 사이트">
                                    </div>
                                    <span>영주시의회</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="농업기술센터 사이트 바로가기">
                                    <div class="img_box site4"><img src="./images/slide_btn4_n.png" alt="농업기순센터 사이트">
                                    </div>
                                    <span>농업기술센터</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="생활공간지도 사이트 바로가기">
                                    <div class="img_box site5"><img src="./images/slide_btn5_n.png" alt="생활공간지도 사이트">
                                    </div>
                                    <span>생활공간지도</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="정책소통플랫폼 사이트 바로가기">
                                    <div class="img_box site6"><img src="./images/slide_btn6_n.png" alt="정책소통플랫폼 사이트">
                                    </div>
                                    <span>정책소통플랫폼</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="공공체육시설 사이트 바로가기">
                                    <div class="img_box site7"><img src="./images/slide_btn7_n.png" alt="공공체육시설 사이트">
                                    </div>
                                    <span>공공체육시설</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="국민재난안전포털 사이트 바로가기">
                                    <div class="img_box site8"><img src="./images/slide_btn8_n.png" alt="국민재난안전포털 사이트">
                                    </div>
                                    <span>국민재난안전포털</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="예약통합서비스 사이트 바로가기">
                                    <div class="img_box site9"><img src="./images/slide_btn9_n.png" alt="예약통합서비스 사이트">
                                    </div>
                                    <span>예약통합서비스</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="인삼박물관 사이트 바로가기">
                                    <div class="img_box site10"><img src="./images/slide_btn10_n.png" alt="인삼박물관 사이트">
                                    </div>
                                    <span>인삼박물관</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="환경사업소 사이트 바로가기">
                                    <div class="img_box site11"><img src="./images/slide_btn11_n.png" alt="환경사업소 사이트">
                                    </div>
                                    <span>환경사업소</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="인터넷뉴스 사이트 바로가기">
                                    <div class="img_box site12"><img src="./images/slide_btn12_n.png" alt="인터넷뉴스 사이트">
                                    </div>
                                    <span>인터넷뉴스</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="대형폐기물신고센터 사이트 바로가기">
                                    <div class="img_box site13"><img src="./images/slide_btn13_n.png"
                                            alt="대형폐기물신고센터 사이트"></div>
                                    <span>대형폐기물신고</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="영주사랑복지몰 사이트 바로가기">
                                    <div class="img_box site14"><img src="./images/slide_btn14_n.png" alt="영주사랑복지몰 사이트">
                                    </div>
                                    <span>영주사랑복지몰</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="현수막 게시 신청 사이트 바로가기">
                                    <div class="img_box site15"><img src="./images/slide_btn15_n.png"
                                            alt="현수막 게시 신청 사이트"></div>

                                    <span>현수막 게시 신청</span>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="개별공시지가 사이트 바로가기">
                                    <div class="img_box site16"><img src="./images/slide_btn16_n.png" alt="개별공시지가 사이트">
                                    </div>
                                    <span>개별공시지가</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="header">
            <div id="main_nav">
                <div id="nav">
                    <ul class="cf">
                        <li class="logo">
                            <a href="./index.php"><img src="./images/logo_b.png" alt="logo"></a>
                            <span class="hidden">영주시</span>
                        </li>
                        <li class="nav">
                            <ul class="depth1 cf">
                                <li>
                                    <a href="./sub01.php">전자민원</a>
                                    <div class="nav_sub">
                                        <ul class="depth2 cf">
                                            <li>
                                                <a href="#none">민원안내</a>
                                                <ul class="depth3 cf">
                                                    <li><a href="#none">민원실안내</a></li>
                                                    <li><a href="#none">민원업무</a></li>
                                                    <li><a href="#none">편리한민원제도</a></li>
                                                    <li><a href="#none">무인민원발급</a></li>
                                                    <li><a href="#none">일과 시간외 민원실 운영</a></li>
                                                    <li><a href="#none">민원미란다</a></li>
                                                    <li><a href="#none">제증명 수수료 면제</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">민원신청/조회</a>
                                                <ul class="depth3  cf">
                                                    <li><a href="#none">전자민원신청</a></li>
                                                    <li><a href="#none">정보통신사용전검사</a></li>
                                                    <li><a href="#none">자동차검사일</a></li>
                                                    <li><a href="#none">민원처리공개</a></li>
                                                    <li><a href="#none">안전신문고</a></li>
                                                    <li><a href="#none">110수화(화상)/채팅상담</a></li>
                                                    <li><a href="#none">개별공시지가 문자알림</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">민원신고센터</a>
                                                <ul class="depth3 cf">
                                                    <li><a href="#none">부정 불량식품 신고</a></li>
                                                    <li><a href="#none">환경오염 신고</a></li>
                                                    <li><a href="#none">물가 과다인상 업소 신고</a></li>
                                                    <li><a href="#none">규제개혁 신고</a></li>
                                                    <li><a href="#none">공직자부조리신고센터</a></li>
                                                    <li><a href="#none">규제개혁신문고</a></li>
                                                    <li><a href="#none">도로 보수 신고</a></li>
                                                    <li><a href="#none">공직자 부조리(익명제보)</a></li>
                                                    <li><a href="#none">가로등 고장 신고</a></li>
                                                    <li><a href="#none">부동산 불법중개행위 신고</a></li>
                                                    <li><a href="#none">예산낭비신고센터</a></li>
                                                    <li><a href="#none">예산절감제안</a></li>
                                                    <li><a href="#none">규제입증요청</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#none">민원사무편람</a></li>
                                            <li>
                                                <a href="#none">지방세안내</a>
                                                <ul class="depth3 cf">
                                                    <li><a href="#none">지방세안내</a></li>
                                                    <li><a href="#none">납세자보호관</a></li>
                                                    <li><a href="#none">세목별목록</a></li>
                                                    <li><a href="#none">납세편의제도</a></li>
                                                    <li><a href="#none">위택스(WeTax)</a></li>
                                                    <li><a href="#none">지방세 챗봇상담</a></li>
                                                    <li><a href="#none">지방세구제제도</a></li>
                                                    <li><a href="#none">납세자권리헌장</a></li>
                                                    <li><a href="#none">인터넷 자동차 공매</a></li>
                                                    <li><a href="#none">마을세무사</a></li>
                                                    <li><a href="#none">세무교실(동영상)</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="./sub02.php">영주소개</a>
                                    <div class="nav_sub">
                                        <ul class="cf">
                                            <li>
                                                <a href="#none">시청안내</a>
                                                <ul class="cf">
                                                    <li><a href="#none">행정조직도</a></li>
                                                    <li><a href="#none">시청사소개</a></li>
                                                    <li><a href="#none">행정구역/인구/가구</a></li>
                                                    <li><a href="#none">시정목표</a></li>
                                                    <li><a href="#none">전화번호 안내</a></li>
                                                    <li><a href="#none">시청사 주차장현황</a></li>
                                                    <li><a href="#none">찾아오시는 길</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">영주의 상징</a>
                                                <ul class="cf">
                                                    <li><a href="#none">시조/시목/시화</a></li>
                                                    <li><a href="#none">영주 C I</a></li>
                                                    <li><a href="#none">시민의 노래</a></li>
                                                    <li><a href="#none">시민헌장</a></li>
                                                    <li><a href="#none">영주시 캐릭터</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">영주의 역사</a>
                                                <ul class="cf">
                                                    <li><a href="#none">역사·특성</a></li>
                                                    <li><a href="#none">선비정신실천</a></li>
                                                    <li><a href="#none">역대 시장 군수</a></li>
                                                    <li><a href="#none">영주지명유래</a></li>
                                                    <li><a href="#none">자매우호교류</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="./sub03.php">소통참여</a>
                                    <div class="nav_sub">
                                        <ul class="cf">
                                            <li><a href="#none">자유게시판</a></li>
                                            <li><a href="#none">칭찬합시다</a></li>
                                            <li><a href="#none">홍보(광고)마당</a></li>
                                            <li><a href="#none">시정모니터</a></li>
                                            <li><a href="#none">시민 시정평가단</a></li>
                                            <li><a href="#none">문예기행</a></li>
                                            <li>
                                                <a href="#none">청렴영주</a>
                                                <ul class="cf">
                                                    <li><a href="#none">청렴나누미</a></li>
                                                    <li><a href="#none">자체 감사결과</a></li>
                                                    <li><a href="#none">주민 감사 청구</a></li>
                                                    <li><a href="#none">민간위탁 실적평가 공개</a></li>
                                                    <li><a href="#none">국민권익위 청렴마당</a></li>
                                                    <li><a href="#none">부패공직자 현황</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">주민참여예산</a>
                                                <ul class="cf">
                                                    <li><a href="#none">주민참여 예산제 소개</a></li>
                                                    <li><a href="#none">예산참여</a></li>
                                                    <li><a href="#none">시민 예산 자료실</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">설문조사</a>
                                                <ul class="cf">
                                                    <li><a href="#none">설문조사</a></li>
                                                    <li><a href="#none">국민신문고 설문조사</a></li>
                                                    <li><a href="#none">서명운동</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">국민행복제안</a>
                                                <ul class="cf">
                                                    <li><a href="#none">일반제안</a></li>
                                                    <li><a href="#none">공모제안</a></li>
                                                    <li><a href="#none">아동 및 청소년 정책 제안</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#none">국민생각함</a></li>
                                            <li>
                                                <a href="#none">적극행정</a>
                                                <ul class="cf">
                                                    <li><a href="#none">적극행정 제도소개</a></li>
                                                    <li><a href="#none">적극행정 추진방안</a></li>
                                                    <li><a href="#none">적극행정 국민추천</a></li>
                                                    <li><a href="#none">법령해석</a></li>
                                                    <li><a href="#none">알림/소식</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">알뜰나눔장터</a>
                                                <ul class="cf">
                                                    <li><a href="#none">재활용품 판매장</a></li>
                                                    <li><a href="#none">중고매매장터</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">찾아주세요</a>
                                                <ul class="cf">
                                                    <li><a href="#none">가출/행불자</a></li>
                                                    <li><a href="#none">유기동물</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#none">영주시 인재풀</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#none">산업경제</a>
                                    <div class="nav_sub">
                                        <ul class="cf">
                                            <li>
                                                <a href="#none">지역산업</a>
                                                <ul class="cf">
                                                    <li><a href="#none">산업현황</a></li>
                                                    <li><a href="#none">대표기업</a></li>
                                                    <li><a href="#none">농공단지</a></li>
                                                    <li><a href="#none">공장현황</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">투자유치</a>
                                                <ul class="cf">
                                                    <li><a href="#none">환영합니다</a></li>
                                                    <li><a href="#none">투자여건</a></li>
                                                    <li><a href="#none">인센티브</a></li>
                                                    <li><a href="#none">유치대상사업</a></li>
                                                    <li><a href="#none">기업 유치 현황</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">국제통상</a>
                                                <ul class="cf">
                                                    <li><a href="#none">수출지원시책</a></li>
                                                    <li><a href="#none">무역동향</a></li>
                                                    <li><a href="#none">수출입통계</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">취업정보</a>
                                                <ul class="cf">
                                                    <li><a href="#none">지역일자리사업</a></li>
                                                    <li><a href="#none">구인구직</a></li>
                                                    <li><a href="#none">영주시 취업지원센터</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">소비자생활</a>
                                                <ul class="cf">
                                                    <li><a href="#none">물가안정 모범업소</a></li>
                                                    <li><a href="#none">물가동향</a></li>
                                                    <li><a href="#none">전통시장</a></li>
                                                    <li><a href="#none">영주사랑상품권</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">농업정보</a>
                                                <ul class="cf">
                                                    <li><a href="#none">가축방역</a></li>
                                                    <li><a href="#none">농산물 유통센터</a></li>
                                                    <li><a href="#none">농업기술센터</a></li>
                                                    <li><a href="#none">귀농귀촌 정보</a></li>
                                                    <li><a href="#none">농산물 식별정보</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">지역특산품</a>
                                                <ul class="cf">
                                                    <li><a href="#none">공동브랜드</a></li>
                                                    <li><a href="#none">특산품</a></li>
                                                    <li><a href="#none">영주장날</a></li>
                                                </ul>
                                            </li>
                                            <li style="width: 250px;">
                                                <a href="#none">첨단베어링 국가산업단지 조성</a>
                                                <ul class="cf">
                                                    <li><a href="#none">추진현황</a></li>
                                                    <li><a href="#none">홍보영상</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#none">정보공개</a>
                                    <div class="nav_sub">
                                        <ul class="cf">
                                            <li>
                                                <a href="#none">행정정보공개</a>
                                                <ul class="cf">
                                                    <li><a href="#none">사전정보공표</a></li>
                                                    <li><a href="#none">제도안내</a></li>
                                                    <li><a href="#none">관련법령</a></li>
                                                    <li><a href="#none">정보공개청구</a></li>
                                                    <li><a href="#none">비공개 대상정보</a></li>
                                                    <li><a href="#none">정보공개목록</a></li>
                                                    <li><a href="#none">인사통계</a></li>
                                                    <li><a href="#none">정보목록(2014년이전)</a></li>
                                                    <li><a href="#none">주요수상실적</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">공공데이터개방</a>
                                                <ul class="cf">
                                                    <li><a href="#none">공공정보 개방정책</a></li>
                                                    <li><a href="#none">법·제도</a></li>
                                                    <li><a href="#none">공공정보 목록</a></li>
                                                    <li><a href="#none">공공데이터 포털</a></li>
                                                    <li><a href="#none">공공와이파이</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#none">계약정보공개</a></li>
                                            <li>
                                                <a href="#none">정책실명제</a>
                                                <ul class="cf">
                                                    <li><a href="#none">정책실명제 안내</a></li>
                                                    <li><a href="#none">2022 공개과제</a></li>
                                                    <li><a href="#none">2021 공개과제</a></li>
                                                    <li><a href="#none">2020 공개과제</a></li>
                                                    <li><a href="#none">이전공개과제</a></li>
                                                    <li><a href="#none">국민신청실명제</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#none">재정정보공개</a></li>

                                            <li>
                                                <a href="#none">행정자료실</a>
                                                <ul class="cf">
                                                    <li><a href="#none">영주시보</a></li>
                                                    <li><a href="#none">통계</a></li>
                                                    <li><a href="#none">시정백서</a></li>
                                                    <li><a href="#none">자치법규</a></li>
                                                    <li><a href="#none">달라지는 법령제도</a></li>
                                                    <li><a href="#none">영주소식지</a></li>
                                                    <li><a href="#none">도시기본계획</a></li>
                                                    <li><a href="#none">정책연구용역</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">지방공기업</a>
                                                <ul class="cf">
                                                    <li><a href="#none">지방공기업이란</a></li>
                                                    <li><a href="#none">지방공기업 현황</a></li>
                                                    <li><a href="#none">지방공기업 경영정보</a></li>
                                                    <li><a href="#none">산하 지방공기업 결산정보</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">조직정보</a>
                                                <ul class="cf">
                                                    <li><a href="#none">조직정보(2022상반기)</a></li>
                                                    <li><a href="#none">조직정보(2021)</a></li>
                                                    <li><a href="#none">조직정보(2020하반기)</a></li>
                                                    <li><a href="#none">조직정보(2020상반기)</a></li>
                                                    <li><a href="#none">조직정보(2019하반기)</a></li>
                                                    <li><a href="#none">조직정보(2019상반기)</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">행정서비스헌장</a>
                                                <ul class="cf">
                                                    <li><a href="#none">헌장전문</a></li>
                                                    <li><a href="#none">보상조치</a></li>
                                                    <li><a href="#none">시민협조사항</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">행정절차제도</a>
                                                <ul class="cf">
                                                    <li><a href="#none">행정절차제도안내</a></li>
                                                    <li><a href="#none">행정처분기준</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">공공저작물</a>
                                                <ul class="cf">
                                                    <li><a href="#none">공공저작물 이용안내</a></li>
                                                    <li><a href="#none">공공저작물 자료실</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none">알림마당</a>
                                                <ul class="cf">
                                                    <li><a href="#none">공지사항</a></li>
                                                    <li><a href="#none">고시/공고</a></li>
                                                    <li><a href="#none">입찰공고</a></li>
                                                    <li><a href="#none">입법예고</a></li>
                                                    <li><a href="#none">채용공고</a></li>
                                                    <li><a href="#none">타기관 소식/공고</a></li>
                                                    <li><a href="#none">보도자료</a></li>
                                                    <li><a href="#none">설명·해명자료</a></li>
                                                    <li><a href="#none">주요일정</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#none" style="visibility: hidden;"></a>
                                                <ul>
                                                    <li><a href="#none">민방위 안내</a></li>
                                                    <li><a href="#none">부서별 주요업무계획</a></li>
                                                    <li><a href="#none">토양 대기 수질</a></li>
                                                    <li><a href="#none">석면 관리 정보</a></li>
                                                    <li><a href="#none">지방보조금</a></li>
                                                    <li><a href="#none">음식 문화 마당</a></li>
                                                    <li><a href="#none">분묘 개장 공고</a></li>
                                                    <li><a href="#none">환경 소식</a></li>
                                                    <li><a href="#none">업무추진비</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#none">분야별 정보</a>
                                    <div class="nav_sub">
                                        <ul class="cf">
                                            <li><a href="#none">복지</a></li>
                                            <li><a href="#none">여성/아동/청소년</a></li>
                                            <li><a href="#none">영주시 청년포털</a></li>
                                            <li><a href="#none">예산/재정</a></li>
                                            <li><a href="#none">보건환경</a></li>
                                            <li><a href="#none">자원 재활용</a></li>
                                            <li><a href="#none">교통/지도</a></li>
                                            <li><a href="#none">교육</a></li>
                                            <li><a href="#none">행사</a></li>
                                            <li><a href="#none">사이버시민</a></li>
                                            <li><a href="#none">코로나바이러스-19</a></li>
                                            <li><a href="#none">재난안전</a></li>
                                            <li><a href="#none">인구정책</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <div class="member">
<?php
    include "define.php";


    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = ""; //null. 즉 로그인 상태가 아니라면 

    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";

    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";

?>

    <div id="top">
        <ul id="top_menu">
<?php
    if(!$userid){
?>
            <li><a href="member_form.php">회원가입</a></li>
            <li> | </li>
            <li><a href="login_form.php">로그인</a></li>

<?php
} else {
    //$userid가 값을 가진 경우라면 로그인 상태 (사용자이름, 아이디,레벨,포인트,로그아웃)
    $logged = $username;
?>
    <li><a href="logout.php">로그아웃</a></li>
    <li> | </li>
    <li><?= $logged ?></li>

<?php
}
?>
<?php
    if($userlevel == 1){ //관리자모드버튼.로그인한 사용자가 관리자인지 확인

    
?>
        <li> | </li>
        <li><a href="admin.php">관리자 모드</a></li>
<?php
}
?>
        </ul>
    </div>
                            </div>
                        </li>
                        <li class="gnb"></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div id="banner">
            <div class="bannerBox">
                <div class="banner">
                    <div class="banner_slide">
                        <div class="banner_img">
                            <ul>
                                <li style="left: 0;"><a href="#none"></a></li>
                                <li><a href="#none"></a></li>
                                <li><a href="#none"></a></li>
                                <li><a href="#none"></a></li>
                                <li><a href="#none"></a></li>
                                <li><a href="#none"></a></li>
                                <li><a href="#none"></a></li>
                                <li><a href="#none"></a></li>
                                <li><a href="#none"></a></li>
                                <li><a href="#none"></a></li>
                                <li><a href="#none"></a></li>
                            </ul>
                        </div>
                        <div class="slide_btn">
                            <span class="material-symbols-outlined btn_left">chevron_left</span>
                            <span class="material-symbols-outlined btn_right">chevron_right</span>
                        </div>
                        <div class="num">
                            <p class="num_on">01 / 11</p>
                            <p>02 / 11</p>
                            <p>03 / 11</p>
                            <p>04 / 11</p>
                            <p>05 / 11</p>
                            <p>06 / 11</p>
                            <p>07 / 11</p>
                            <p>08 / 11</p>
                            <p>09 / 11</p>
                            <p>10 / 11</p>
                            <p>11 / 11</p>
                        </div>
                    </div>
                    <div id="search">
                        <div class="banner_bottom">
                            <div class="search_tag">
                                <ul id="tag">
                                    <li>
                                        <a href="#none">청년포털
                                            <i class="fa-solid fa-chevron-right fa-xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#none">선비세상
                                            <i class="fa-solid fa-chevron-right fa-xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#none">문화관광
                                            <i class="fa-solid fa-chevron-right fa-xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#none">예약통합
                                            <i class="fa-solid fa-chevron-right fa-xs"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="weather">
                                <div class="weather">
                                    <div class="wDate"></div>
                                    <div class="temp">현재온도
                                        <div class="wtemp"></div>
                                        <!-- <div class="wlowtemp">최저 : </div> -->
                                        <!-- <div class="whightemp">최고 : </div> -->
                                    </div>
                                    <div class="wicon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="search">
                            <form>
                                <fieldset>
                                    <p>
                                        <select>
                                            <option value="통합검색">통합검색</option>
                                            <option value="통합검색">행사이름</option>
                                            <option value="통합검색">담당업무</option>
                                            <option value="통합검색">직원검색</option>
                                        </select>
                                        <input type="text"
                                            placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;영주에게 궁금한 것을 입력해주세요.">
                                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </p>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="profile">
                    <h2>
                        <span>함께의 힘!</span>
                        <span>소통 중심 영주</span>
                    </h2>
                    <h3>영주시장 <span>박남서</span> 입니다.</h3>
                    <div class="profile_text">
                        <ul>
                            <li><a href="#none">민선8기 공약사항</a></li>
                            <li><a href="#none">시장에게 바란다!</a></li>
                            <li><a href="#none">인사말</a></li>
                            <li><a href="#none">취임사</a></li>
                        </ul>
                    </div>
                    <div class="profile_pictrue"><img src="./images/mayor02.png" width="300" alt="mrPark"></div>
                    <div class="profile_href">
                        <a href="#none">
                            <i class="fa-solid fa-plus"></i>
                            열린시장실
                        </a>
                    </div>
                </div>
                <div id="sns">
                    <div class="insta">
                        <div class="insta_logo">
                            <span class="insta_ob1"></span>
                            <span class="insta_ob2"></span>
                        </div>
                        <div class="insta_text"><span class="hidden">힐리와함께하는 인스타그램</span></div>
                        <div class="next"></div>

                    </div>
                    <div class="sns">
                        <ul>
                            <li class="facebook"></li>
                            <li class="blog"></li>
                            <li class="youtube"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="section1">
            <div class="section1">
                <div id="news">
                    <ul class="sectionTab">
                        <li>
                            <a href="#newsCont">알립니다.</a>
                        </li>
                        <li>
                            <a href="#board" class="tab_on">자유게시판</a>
                        </li>
                    </ul>

                    <div class="news_cont">
                        <div class="board" id="board">
                            <span>영주의 주요소식을 만나보실 수 있습니다.</span>
                            <table>
                                <tr>
                                    <th>제목</th>
                                    <th>이름</th>
                                    <th>작성일</th>
                                </tr>
                                <?php
                                            $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
                                            //mysqli_connect()은 MariaDB Server에 연결하는 함수
                                            $sql = "select * from board order by num desc limit 10";
                                            //게시판 DB 테이블 board에 저장되어 있는 최근 게시글 5개를 내림차순으로 정렬
                                            $result = mysqli_query($con, $sql);
                                            
                                            if (!$result) //게시글이 생성되지 않았다면
                                            echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
                                            else{
                                                while( $row = mysqli_fetch_array($result))
                                                /* mysqli_fetch_array()는 더이상 배열의 형태로 반환할 데이터가 없을때까지 반환 */
                                                {
                                                    $regist_day = substr($row["regist_day"],0,10);
                                                    ?>
        
        <tr>
                   <td><?= $row["subject"] ?></td> <!-- 제목 -->
                   <td><?= $row["name"] ?></td> <!-- 이름 -->
                   <td><?= $regist_day ?></td> <!-- 작성일 -->
                </tr>
        
<?php
        };
    };
?>
                                </div><!-- class="board" id="board" -->
                            </table>
                     </div><!-- news_cont -->




                        <div class="news" id="newsCont">
                            <span>영주의 자유로운 소통게시판</span>
                            <ul class="news_list">
                                <li><a href="#list1" class="on">코로나19</a></li>
                                <li><a href="#list2">공지사항</a></li>
                                <li><a href="#list3">고시/공고</a></li>
                                <li><a href="#list4">채용공고</a></li>
                                <li><a href="#list5">입법예고</a></li>
                                <li><button></button></li>
                            </ul>
                            <div class="newsListSub" id="list1">
                                <div class="newsCont">
                                    <div class="newsContTxt">
                                        <h3>30<span>2023.01</span></h3>
                                    </div>
                                    <div class="news_main">
                                        <h2>마스크 착용 의무화 행정명령 변경 공고(2023. 1. 30. 시행)</h2>
                                        <p>경상북도 공고 제2023-165호 - 마스크 착용 방역지침 개정 시행에 따른 - 「마스크 착용 의무화 행정명령」변경공고 코로나19 예방 및
                                            확산
                                            방지를
                                            위하여「감염병의 예방 및 관리에 관한 법률」에 따라 「마스크 착용 의무화 행정명령(2022.9.23. 경상북도 공고
                                            제2022-1647호)」을
                                            변경하여
                                        </p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#none">마스크 착용 의무화 행정명령 변경공고(2022. 9. 26. 시행)</a>
                                        <span>2023-04-11</span>
                                    </li>
                                    <li>
                                        <a href="#none">새로운 일상을 위한 사회적 거리두기 의무화 조치 해제 안내(2022. 4. 18.시행)</a>
                                        <span>2022-04-15</span>
                                    </li>
                                    <li>
                                        <a href="#none">단계적 일상회복 지속을 위한 거리두기 변경 안내(2022. 4. 4.시행)</a>
                                        <span>2022-04-02</span>
                                    </li>
                                    <li>
                                        <a href="#none">단계적 일상회복 지속을 위한 거리두기 조치 재연장 안내(2022. 3. 21. 시행)</a>
                                        <span>2022-03-18</span>
                                    </li>
                                    <li>
                                        <a href="#none">단계적 일상회복 지속을 위한 방역강화 조치 재연장 안내(2022. 3. 5. 시행)</a>
                                        <span>2022-03-04</span>
                                    </li>
                                    <li>
                                        <a href="#none">단계적 일상회복 지속을 위한 거리두기 행정명령 변경 공고</a>
                                        <span>2022-03-01</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="newsListSub" id="list2">
                                <div class="newsCont">
                                    <div class="newsContTxt">
                                        <h3>11<span>2023.04</span></h3>
                                    </div>
                                    <div class="news_main">
                                        <h2>&lt;&lt;경상북도재난안전체험관 영주시 유치 기원!!&gt;&gt;</h2>
                                        <p>우리 시는 경상북도 재난안전체험관을 영주시에 유치하고자하며, 영주시 건립을 염원하는 시민들의 서명을 받고 <br> 있사오니 동참하여 주시기
                                            바랍니다.&lt;영주시 유치시 장점&gt; 1. 시민의 위기 대응력 향상으로 생명, 재산 보호 및 기타관련 </p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#none">2023. 3월 국내.국제 경혼중개업 관련</a>
                                        <span>2023-04-11</span>
                                    </li>
                                    <li>
                                        <a href="#none">2023년 민방위 사이버교육 통지서 관련</a>
                                        <span>2023-04-11</span>
                                    </li>
                                    <li>
                                        <a href="#none">4월 영주인성아카데미 홍보</a>
                                        <span>2023-04-11</span>
                                    </li>
                                    <li>
                                        <a href="#none">위해식품 등 긴급회수</a>
                                        <span>2023-04-10</span>
                                    </li>
                                    <li>
                                        <a href="#none">위해식품 등 긴급회수</a>
                                        <span>2023-04-10</span>
                                    </li>
                                    <li>
                                        <a href="#none">경상북도 지정문화재 문화재구역 관련문</a>
                                        <span>2023-04-10</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="newsListSub" id="list3">
                                <div class="newsCont">
                                    <div class="newsContTxt">
                                        <h3>11<span>2023.04</span></h3>
                                    </div>
                                    <div class="news_main">
                                        <h2>2023년 영주2동 마을방법용 CCTV설치를 위한 행정예고</h2>
                                        <p>범죄를 예방하고 시민의 생명과 재산을 보호하기 위하여 영주2동 마을방법용 CCTV 설치에 앞서 「개인정보보호법」 <br> 제25조 및 동법
                                            시행령
                                            제23조, 「행정절차법」 제25조 규정에 따라 설치 위치 및 설치 취지와 내용을 시민에게 미리 알려드리려합니다.</p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#none">행정구역변경에 따른 지적공부 시설 관련</a>
                                        <span>2023-04-11</span>
                                    </li>
                                    <li>
                                        <a href="#none">영주시 새직골지구 새뜰마을사업 관련</a>
                                        <span>2023-04-11</span>
                                    </li>
                                    <li>
                                        <a href="#none">상속인 없는 500만원 이하 재산의 처리에 관련</a>
                                        <span>2023-04-11</span>
                                    </li>
                                    <li>
                                        <a href="#none">상속인 없는 500만원 이하 재산의 처리에 관련</a>
                                        <span>2023-04-11</span>
                                    </li>
                                    <li>
                                        <a href="#none">계획공모형 지역관광개발사업 안빈관 관련</a>
                                        <span>2023-04-11</span>
                                    </li>
                                    <li>
                                        <a href="#none">영주시 관광종합개발계획 수립 용역관련</a>
                                        <span>2023-04-10</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="newsListSub" id="list4">
                                <div class="newsCont">
                                    <div class="newsContTxt">
                                        <h3>11<span>2023.04</span></h3>
                                    </div>
                                    <div class="news_main">
                                        <h2>기술지원과 종합검정실 기간제근로자 채용 서류전형 합격자 공고</h2>
                                        <p>기술지원과 종합검정실 기간제근로자 채용 서류전형 합격자 및 면접일정을 아래와 같이 공고합니다. 1. 서류 합격자 <br>명단 2. 면접일정
                                            -
                                            2023.
                                            4. 13(목), 10:00 예정</p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#none">영주시 청소년상담복지센터 직원관련</a>
                                        <span>2023-04-10</span>
                                    </li>
                                    <li>
                                        <a href="#none">영주시자원봉사센터 직원 채용 공고</a>
                                        <span>2023-04-07</span>
                                    </li>
                                    <li>
                                        <a href="#none">2023년 순흥면 농지이용관리지원 관련</a>
                                        <span>2023-04-07</span>
                                    </li>
                                    <li>
                                        <a href="#none">2023년 야생멧돼지 사체처리 및 보상에 관련</a>
                                        <span>2023-04-03</span>
                                    </li>
                                    <li>
                                        <a href="#none">2023년 기술지원과 종합검정실 관련</a>
                                        <span>2023-03-31</span>
                                    </li>
                                    <li>
                                        <a href="#none">2023년 기술지원과 작물실증시도 관련</a>
                                        <span>2023-03-31</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="newsListSub" id="list5">
                                <div class="newsCont">
                                    <div class="newsContTxt">
                                        <h3>14<span>2023.03</span></h3>
                                    </div>
                                    <div class="news_main">
                                        <h2>「영주시 도시건축 민간전문가 운영에 관한 조례」 제정(안) 입법 예고</h2>
                                        <p>「영주시 도시건축 민간전문가 운영에 관한 조례」를 제정함에 있어 제정 이유와 주요 내용을 시민들에게 알리고, 이에 <br> 대한 의견을
                                            듣고자
                                            「행정절차법」제41조에 따라 다음과 같이 공고합니다. 1공고기간: 2023. 3. 14 ~ 4. 3(20일)</p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#none">「영주시 도시가스 공급사업 보조금 지원 조례」일부개정조례안 입법예고 관련</a>
                                        <span>2023-03-14</span>
                                    </li>
                                    <li>
                                        <a href="#none">「영주시 선비세상 관리 및 운영에 관한 조례」 일부개정조례안 입법예고</a>
                                        <span>2023-03-14</span>
                                    </li>
                                    <li>
                                        <a href="#none">「영주시 시세 감면 조례」일부개정조례안 입법예고</a>
                                        <span>2023-03-14</span>
                                    </li>
                                    <li>
                                        <a href="#none">「영주시 공동주택 관리보조금 지원 조례 시행규칙」 일부개정시행규칙안 입법예고</a>
                                        <span>2023-03-14</span>
                                    </li>
                                    <li>
                                        <a href="#none">「영주시 공동주택 관리보조금 지원 조례」 일부개정 조례안 입법예고</a>
                                        <span>2023-03-14</span>
                                    </li>
                                    <li>
                                        <a href="#none">입법예고(영주시 자연재해위험지구 안에서의 행위제한에 관한 조례 일부개정안)</a>
                                        <span>2023-03-14</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bookmark">
                    <div class="bookmark">
                        <h2>자주 찾는 서비스 <span>내가 원하는 메뉴로 설정하기</span></h2>
                        <ul class="bmarkList">
                            <li><a href="#bmarkcont1" class="on2">민원</a></li>
                            <li><a href="#bmarkcont2">신청</a></li>
                            <li><a href="#bmarkcont3">교육</a></li>
                            <li><a href="#bmarkcont4">공지</a></li>
                            <li><button></button></li>
                        </ul>
                        <div class="bmarkcont">
                            <ul id="bmarkcont1">
                                <li><a href="#none">주요일정</a></li>
                                <li><a href="#none">민원실안내</a></li>
                                <li><a href="#none">전자민원신청</a></li>
                                <li><a href="#none">행정조직도</a></li>
                                <li><a href="#none">강우량 정보</a></li>
                                <li><a href="#none">지진대피장소</a></li>
                                <li><a href="#none">영주사랑상품권</a></li>
                                <li><a href="#none">영주소식지</a></li>
                                <li><a href="#none">기존 시내 버스노선안내</a></li>
                            </ul>
                            <ul id="bmarkcont2">
                                <li><a href="#none">여권신청발급</a></li>
                                <li><a href="#none">지방세안내</a></li>
                                <li><a href="#none">정보통신 사용 전 검사</a></li>
                            </ul>

                            <ul id="bmarkcont3">
                                <li><a href="#none">민방위 안내</a></li>
                                <li><a href="#none">정보화교육</a></li>
                                <li><a href="#none">공공체육시설</a></li>
                                <li><a href="#none">시설안내</a></li>
                                <li><a href="#none">철탄체육관</a></li>
                                <li><a href="#none">영주실내수영장</a></li>
                                <li><a href="#none">대한복싱훈련장</a></li>
                                <li><a href="#none">영주시민운동장</a></li>
                            </ul>
                            <ul id="bmarkcont4">
                                <li><a href="#none">보도자료</a></li>
                                <li><a href="#none">음식 문화 마당</a></li>
                                <li><a href="#none">공지사항</a></li>
                                <li><a href="#none">지방보조금</a></li>
                                <li><a href="#none">석면 관리 정보</a></li>
                                <li><a href="#none">설명·해명자료</a></li>
                                <li><a href="#none">채용공고</a></li>
                                <li><a href="#none">환경 소식</a></li>
                                <li><a href="#none">입법예고</a></li>
                                <li><a href="#none">타기관 소식/공고</a></li>
                                <li><a href="#none">입찰공고</a></li>
                                <li><a href="#none">고시/공고</a></li>
                                <li><a href="#none">분묘 개장 공고</a></li>
                                <li><a href="#none">부서별 주요업무계획</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="section2">
                <div class="section2">
                    <div id="advertisement">
                        <h2><span>알림창</span></h2>
                        <div class="ad_btn">
                            <span class="material-symbols-outlined btn_left">chevron_left</span>
                            <span class="material-symbols-outlined btn_right">chevron_right</span>
                        </div>
                        <div class="ad_slide">
                            <div class="ad_slide_sub">
                                <ul>
                                    <li><a href="#none"><img src="./images/ad01.png" alt="ad01"></a></li>
                                    <li><a href="#none"><img src="./images/ad02.jpg" alt="ad02"></a></li>
                                    <li><a href="#none"><img src="./images/ad03.png" alt="ad03"></a></li>
                                    <li><a href="#none"><img src="./images/ad04.png" alt="ad04"></a></li>
                                    <li><a href="#none"><img src="./images/ad05.png" alt="ad05"></a></li>
                                    <li><a href="#none"><img src="./images/ad06.png" alt="ad06"></a></li>
                                    <li><a href="#none"><img src="./images/ad07.jpg" alt="ad07"></a></li>
                                    <li><a href="#none"><img src="./images/ad08.jpg" alt="ad08"></a></li>
                                    <li><a href="#none"><img src="./images/ad09.jpg" alt="ad09"></a></li>
                                    <li><a href="#none"><img src="./images/ad10.jpg" alt="ad10"></a></li>
                                    <li><a href="#none"><img src="./images/ad11.jpg" alt="ad11"></a></li>
                                    <li><a href="#none"><img src="./images/ad12.png" alt="ad12"></a></li>
                                    <li><a href="#none"><img src="./images/ad13.jpg" alt="ad13"></a></li>
                                    <li><a href="#none"><img src="./images/ad14.png" alt="ad14"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="media">
                        <div id="media_tit">
                            <div>
                                <span>영주시는 지금 ~</span>
                                <div class="media_tit">
                                    <a href="#mediaNews" class="media_on">시정뉴스</a>
                                    <a href="#media_video">소통해요</a>
                                    <span><a href="#none">더보기&nbsp;&nbsp;<i
                                                class="fa-regular fa-square-plus"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div id="media_list">
                                <div class="mediaNews mediaList" id="mediaNews">
                                    <div>
                                        <figure>
                                            <img src="./images/mediaNew1.jpg" width="300" alt="mediaNew1">
                                        </figure>
                                        <div class="under">영주시, 도시재생·새뜰마을사업으로 도심 활력</div>
                                        <span>2023-01-11</span>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src="./images/mediaNew2.jpg" width="300" alt="mediaNew2">
                                        </figure>
                                        <div class="under">2023년 충혼탑 참배 및 시무식</div>
                                        <span>2023-01-10</span>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src="./images/mediaNew3.jpg" width="300" alt="mediaNew3">
                                        </figure>
                                        <div class="under">곱작골 마음센터 준공식</div>
                                        <span>2023-01-10</span>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src="./images/mediaNew4.jpg" width="300" alt="mediaNew4">
                                        </figure>
                                        <div class="under">2022 영주세계풍기인삼엑스포</div>
                                        <span>2023-01-10</span>
                                    </div>
                                </div>
                                <div class="media_video mediaList" id="media_video">
                                    <div>
                                        <figure>
                                            <img src="./images/media1.jpg" width="300" alt="mediaVideo1">
                                        </figure>
                                        <div class="under">【월간영주】 사과향 가득한 영주</div>
                                        <span>2022-10-20</span>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src="./images/media2.jpg" width="300" alt="mediaVideo2">
                                        </figure>
                                        <div class="under">【월간영주】 영주사과</div>
                                        <span>2022-10-20</span>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src="./images/media3.jpg" width="300" alt="mediaVideo3">
                                        </figure>
                                        <div class="under">【월간영주】 영주 무섬외나무다리축제</div>
                                        <span>2022-10-20</span>
                                    </div>
                                    <div>
                                        <figure>
                                            <img src="./images/media4.jpg" width="300" alt="mediaVideo4">
                                        </figure>
                                        <div class="under">【월간영주】 2022영주세계풍기인삼엑스포</div>
                                        <span>2022-10-20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tourist">
                    <div class="tourist">
                        <div class="tourist_img"></div>
                        <div class="tagBox">
                            <h2>"영주 대표 관광지"</h2>
                            <p><a href="#none">#부석사</a></p>
                            <p><a href="#none">#소백산_국립공원</a></p>
                            <p><a href="#none">#학사골목</a></p>
                            <p><a href="#none">#무섬마을</a></p>
                            <p><a href="#none">#영주호_오토캠핑장</a></p>
                            <p><a href="#none">#웹툰방탈출_테마파크</a></p>
                            <p><a href="#none">#금선정계곡</a></p>
                            <p><a href="#none">#삼판서_고택</a></p>
                            <p><a href="#none">#장수조이월드</a></p>
                            <p><a href="#none">#사과홍보관</a></p>
                            <p><a href="#none">#인삼박물과</a></p>
                            <p><a href="#none">#소수서원</a></p>
                            <p><a href="#none">#선비촌</a></p>
                            <p><a href="#none">#천지인전통사상체험관</a></p>
                            <p><a href="#none">#다스림</a></p>
                        </div>
                        <div class="touristTag"></div>
                        <div class="tagBox2">
                            <h2>"영주 특산물"</h2>
                            <p><a href="#none">#영주사과</a></p>
                            <p><a href="#none">#영주한우</a></p>
                            <p><a href="#none">#풍기인삼</a></p>
                            <p><a href="#none">#배</a></p>
                            <p><a href="#none">#복숭아</a></p>
                            <p><a href="#none">#살구</a></p>
                            <p><a href="#none">#포도</a></p>
                            <p><a href="#none">#살구</a></p>
                            <p><a href="#none">#곶감</a></p>
                            <p><a href="#none">#반건시</a></p>
                            <p><a href="#none">#감말랭이</a></p>
                            <p><a href="#none">#아이스홍시</a></p>
                            <p><a href="#none">#블루베리</a></p>
                            <p><a href="#none">#오디</a></p>
                            <p><a href="#none">#오미자</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div id="f_slide">
            <div class="f_slide">
                <div class="f_slide_ctrl">
                    <span class="f_play">play</span>
                    <span class="f_stop">stop</span>
                    <span><a href="#none">plus</a></span>
                </div>
                <div class="f_slide_sub">
                    <div>
                        <ul>
                            <li><a href="#none" title="선비세상 공식 SNS 새창열림">선비세상 공식 SNS</a></li>
                            <li><a href="#none" title="경상북도북부노인보호전문기관 새창열림">경상북도북부노인보호전문기관</a></li>
                            <li><a href="#none" title="부동산거래질서교란행위 신고센터 새창열림">부동산거래질서교란행위 신고센터</a></li>
                            <li><a href="#none" title="영주시 농특산물 쇼핑몰 영주장날 새창열림">영주시 농특산물 쇼핑몰 영주장날</a></li>
                            <li><a href="#none" title="문서24 새창열림">문서24</a></li>
                            <li><a href="#none" title="Yellow ID Talk @중소기업옴부즈만 새창열림">Yellow ID Talk @중소기업옴부즈만</a></li>
                            <li><a href="#none" title="선비세상 공식 SNS 새창열림">선비세상 공식 SNS</a></li>
                            <li><a href="#none" title="경상북도북부노인보호전문기관 새창열림">경상북도북부노인보호전문기관</a></li>
                            <li><a href="#none" title="부동산거래질서교란행위 신고센터 새창열림">부동산거래질서교란행위 신고센터</a></li>
                            <li><a href="#none" title="영주시 농특산물 쇼핑몰 영주장날 새창열림">영주시 농특산물 쇼핑몰 영주장날</a></li>
                            <li><a href="#none" title="문서24 새창열림">문서24</a></li>
                            <li><a href="#none" title="Yellow ID Talk @중소기업옴부즈만 새창열림">Yellow ID Talk @중소기업옴부즈만</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div id="sitemap">
                <div class="sitemap">
                    <div id="sitemap1">
                        <a href="#none">행정복지센터</a>
                        <ul class="site_sub">
                            <li><a href="#none">행정복지센터</a></li>
                            <li>
                                <ul>
                                    <li><a href="#none">풍기읍</a></li>
                                    <li><a href="#none">이산면</a></li>
                                    <li><a href="#none">평은면</a></li>
                                    <li><a href="#none">문수면</a></li>
                                    <li><a href="#none">장수면</a></li>
                                    <li><a href="#none">안정면</a></li>
                                    <li><a href="#none">봉현면</a></li>
                                    <li><a href="#none">순흥면</a></li>
                                    <li><a href="#none">단산면</a></li>
                                    <li><a href="#none">부석면</a></li>
                                    <li><a href="#none">상망동</a></li>
                                    <li><a href="#none">하망동</a></li>
                                    <li><a href="#none">영주1동</a></li>
                                    <li><a href="#none">영주2동</a></li>
                                    <li><a href="#none">휴천1동</a></li>
                                    <li><a href="#none">휴천2동</a></li>
                                    <li><a href="#none">휴천3동</a></li>
                                    <li><a href="#none">가흥1동</a></li>
                                    <li><a href="#none">가흥2동</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div id="sitemap2">
                        <a href="#none">유관기관</a>
                        <ul class="site_sub">
                            <li><a href="#none">유관기관</a></li>
                            <li>
                                <ul>
                                    <li><a href="#none">영주경찰서</a></li>
                                    <li><a href="#none">영주소방서</a></li>
                                    <li><a href="#none">영주교육지원청</a></li>
                                    <li><a href="#none">영주문화원</a></li>
                                    <li><a href="#none">한국폴리텍VI대학</a></li>
                                    <li><a href="#none">영주고용노동지청</a></li>
                                    <li><a href="#none">경북북부보훈지청</a></li>
                                    <li><a href="#none">영주세무서</a></li>
                                    <li><a href="#none">영주시종합자원봉사센터</a></li>
                                    <li><a href="#none">한국전기안전공사</a></li>
                                    <li><a href="#none">경북전문대학교</a></li>
                                    <li><a href="#none">동양대학교</a></li>
                                    <li><a href="#none">영주시 도시재생지원센터</a></li>
                                    <li><a href="#none">국립산림치유원</a></li>
                                    <li><a href="#none">영주시취업지원센터</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div id="sitemap3">
                        <a href="#none">영주시 운영사이트</a>
                        <ul class="site_sub">
                            <li> <a href="#none">영주시 운영사이트</a></li>
                            <li>
                                <ul>
                                    <li><a href="#none">시의회</a></li>
                                    <li><a href="#none">영주시립도서관</a></li>
                                    <li><a href="#none">영주시인재육성장학회</a></li>
                                    <li><a href="#none">영주시사이버시민</a></li>
                                    <li><a href="#none">평생학습센터</a></li>
                                    <li><a href="#none">영주장날</a></li>
                                    <li><a href="#none">콩세계과학관</a></li>
                                    <li><a href="#none">영주문화예술회관</a></li>
                                    <li><a href="#none">영주시민회관</a></li>
                                    <li><a href="#none">공공체육시설</a></li>
                                    <li><a href="#none">영주문화관광재단</a></li>
                                    <li><a href="#none">인삼박물관</a></li>
                                    <li><a href="#none">보건소</a></li>
                                    <li><a href="#none">수도사업소</a></li>
                                    <li><a href="#none">소수서원관리사무소</a></li>
                                    <li><a href="#none">농업기술센터</a></li>
                                    <li><a href="#none">환경사업소</a></li>
                                    <li><a href="#none">사이버홍보관</a></li>
                                    <li><a href="#none">148아트스퀘어</a></li>
                                    <li><a href="#none">영주시 공공자전거 무인대여</a></li>
                                    <li><a href="#none">천지인 전통사상체험관</a></li>
                                    <li><a href="#none">영주실내수영장</a></li>
                                    <li><a href="#none">상하수도 요금 사이버창구</a></li>
                                    <li><a href="#none">영주시 청년포털</a></li>
                                    <li><a href="#none">정책소통플랫폼(영주 온정)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="f_top">
                <ul>
                    <li><a href="#none">개인정보 처리방침</a></li>
                    <li><a href="#none">영상정보처리기기 운영·관리방침</a></li>
                    <li><a href="#none">저작권정책</a></li>
                    <li><a href="#none">이메일무단수집거부</a></li>
                    <li><a href="#none">홈페이지 개선제안</a></li>
                    <li><a href="#none">이용안내</a></li>
                    <li><a href="#none">내PC지킴이</a></li>
                    <li><a href="#none">찾아오시는 길</a></li>
                    <li><a href="#none">사이트맵</a></li>
                </ul>
            </div>
            <div class="address">
                <address>[36132] 경상북도 영주시 시청로 1 (휴천2동 470번지)</address>
                <span><strong>영주시 민원콜센터</strong> 054-639-7777 </span>
                <span><strong>팩스번호</strong> 054-631-6300</span>
                <span><strong>영주시(당직실)</strong> 054-639-6222(일과시간 외 이용바랍니다)</span>
            </div>
            <div class="copy">
                <figure><img src="./images/WA.png" width="100" alt="WEB접근성"></figure>
                <span>© 2022 Yeongju-Si, All Rights Reserved.</span>
            </div>
        </div>

    </footer>
    <script>
        cookiedata = document.cookie;
        if (cookiedata.indexOf("popup=done") < 0) {
            document.getElementById('popup').style.visibility = "visible"
        }
        else {
            document.getElementById('popup').style.visibility = "hidden"
        }
    </script>
</body>

</html>