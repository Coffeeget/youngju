<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영주시청</title>
    <link rel="stylesheet" href="./css/login.css">
    <script src="./javascript/jquery-1.12.4.min.js"></script>
    <script src="./javascript/jquery.easing.1.3.js"></script>
    <script src="./javascript/prefixfree.min.js"></script>
    <script src="./javascript/login.js"></script>
    <meta name="author" content="R">
    <meta name="keywords" content="영주시청, 시청, 영주시, 경상북도">
    <meta name="description" content="영주시청 반응형 웹페이지 입니다.">
    <meta name="Generator" content="vsCode">
    <link rel="shortcut icon" href="./slide_btn1.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>
<script>
    function check_input()
{
    if(!document.login_form.id.value)
    {
        alert("아이디를 입력하세요");
        document.login_form.id.focus();
        return;
    }

    if(!document.login_form.pass.value)
    {
        alert("비밀번호를 입력하세요");
        document.login_form.pass.focus();
        return;
    }
    document.login_form.submit();
}

</script>
</head>
<?php
    session_start(); //세션 시작. 

?>
<body>
    <header>
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
                            <li><a href="#none" title="문화관광 사이트 바로가기">
                                    <div class="img_box site1"><img src="./images/slide_btn1.png" alt="문화관광 사이트"></div>
                                    <span>문화관광</span>
                                </a></li>
                            <li><a href="#none" title="보건소 사이트 바로가기">
                                    <div class="img_box site2"><img src="./images/slide_btn2_n.png" alt="보건소 사이트"></div>
                                    <span>보건소</span>
                                </a></li>
                            <li><a href="#none" title="영주시의회 사이트 바로가기">
                                    <div class="img_box site3"><img src="./images/slide_btn3_n.png" alt="영주시의회 사이트">
                                    </div>
                                    <span>영주시의회</span>
                                </a></li>
                            <li><a href="#none" title="농업기술센터 사이트 바로가기">
                                    <div class="img_box site4"><img src="./images/slide_btn4_n.png" alt="농업기순센터 사이트">
                                    </div>
                                    <span>농업기술센터</span>
                                </a></li>
                            <li><a href="#none" title="생활공간지도 사이트 바로가기">
                                    <div class="img_box site5"><img src="./images/slide_btn5_n.png" alt="생활공간지도 사이트">
                                    </div>
                                    <span>생활공간지도</span>
                                </a></li>
                            <li><a href="#none" title="정책소통플랫폼 사이트 바로가기">
                                    <div class="img_box site6"><img src="./images/slide_btn6_n.png" alt="정책소통플랫폼 사이트">
                                    </div>
                                    <span>정책소통플랫폼</span>
                                </a></li>
                            <li><a href="#none" title="공공체육시설 사이트 바로가기">
                                    <div class="img_box site7"><img src="./images/slide_btn7_n.png" alt="공공체육시설 사이트">
                                    </div>
                                    <span>공공체육시설</span>
                                </a></li>
                            <li><a href="#none" title="국민재난안전포털 사이트 바로가기">
                                    <div class="img_box site8"><img src="./images/slide_btn8_n.png" alt="국민재난안전포털 사이트">
                                    </div>
                                    <span>국민재난안전포털</span>
                                </a></li>
                            <li><a href="#none" title="예약통합서비스 사이트 바로가기">
                                    <div class="img_box site9"><img src="./images/slide_btn9_n.png" alt="예약통합서비스 사이트">
                                    </div>
                                    <span>예약통합서비스</span>
                                </a></li>
                            <li><a href="#none" title="인삼박물관 사이트 바로가기">
                                    <div class="img_box site10"><img src="./images/slide_btn10_n.png" alt="인삼박물관 사이트">
                                    </div>
                                    <span>인삼박물관</span>
                                </a></li>
                            <li><a href="#none" title="환경사업소 사이트 바로가기">
                                    <div class="img_box site11"><img src="./images/slide_btn11_n.png" alt="환경사업소 사이트">
                                    </div>
                                    <span>환경사업소</span>
                                </a></li>
                            <li><a href="#none" title="인터넷뉴스 사이트 바로가기">
                                    <div class="img_box site12"><img src="./images/slide_btn12_n.png" alt="인터넷뉴스 사이트">
                                    </div>
                                    <span>인터넷뉴스</span>
                                </a></li>
                            <li><a href="#none" title="대형폐기물신고센터 사이트 바로가기">
                                    <div class="img_box site13"><img src="./images/slide_btn13_n.png"
                                            alt="대형폐기물신고센터 사이트">
                                    </div>
                                    <span>대형폐기물신고</span>
                                </a></li>
                            <li><a href="#none" title="영주사랑복지몰 사이트 바로가기">
                                    <div class="img_box site14"><img src="./images/slide_btn14_n.png" alt="영주사랑복지몰 사이트">
                                    </div>
                                    <span>영주사랑복지몰</span>
                                </a></li>
                            <li><a href="#none" title="현수막 게시 신청 사이트 바로가기">
                                    <div class="img_box site15"><img src="./images/slide_btn15_n.png"
                                            alt="현수막 게시 신청 사이트">
                                    </div>
                                    <span>현수막 게시 신청</span>
                                </a></li>
                            <li><a href="#none" title="개별공시지가 사이트 바로가기">
                                    <div class="img_box site16"><img src="./images/slide_btn16_n.png" alt="개별공시지가 사이트">
                                    </div>
                                    <span>개별공시지가</span>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
                            <ul>
                            <li><a href="member_form.php">회원가입</a></li>
            <li> | </li>
            <li><a href="login_form.php">로그인</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="gnb"></li>
                </ul>
            </div>
        </div>
    </header>
    <section id="sub_section">
        <div id="sub_sectionTop">
            <div class="sub_sectionTop">
                <div class="sub_sectionTop_l">
                    <div>
                        <h2>함께의 힘! <br> <span>소통 중심 영주!</span></h2>
                        <h3>소통참여</h3>
                    </div>
                </div>
                <div class="sub_sectionTop_c">
                    <h2>로그인</h2>
                    <div>
                        <ul>
                            <li><a href="./index.php"><i class="fas fa-home"></i></a></li>
                            <li><a href="#none">통합회원</a></li>
                            <li><a href="#none">로그인</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sub_sectionTop_r">
                    <ul>
                        <li id="zoom">
                            <ul>
                                <li><a href="#" class="zoom_in" title="확대"><span>+</span></a></li>
                                <li><a href="#" class="zoom_out" title="축소"><span>-</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="print_btn" title="인쇄"><span>print</span></a></li>
                        <li><a href="#" class="share" title="공유"><span>share</span></a></li>
                    </ul>
                    <div class="share_list">
                        <ul>
                            <li><a href="#none"></a></li>
                            <li><a href="#none"></a></li>
                            <li><a href="#none"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="sub_section_main">
            <div class="sub_section_side">
                <ul>
                    <li><a href="./member_form.php">회원가입</a></li>
                    <li><a href="./login.php">로그인</a></li>
                    <li><a href="#none">아이디 찾기</a></li>
                    <li><a href="#none">비밀번호 찾기</a></li>
                </ul>
            </div>
            <div class="sub_section_middle">
                <div class="login_txt">
                    <h3>
                        <span>※ 회원가입 오류시 브라우저 설정에서 팝업 허용 또는 사이트를 추가해주세요.</span>
                        <span>※ 영주시 대표홈페이지 회원가입 및 로그인 관련 문의 000-000-0000</span>
                        <button>회원가입 및 로그인 관련 오류조치 안내</button>
                    </h3>
                    <div>
                        <span>영주시 홈페이지를 한번의 로그인으로 간편하게 이용하실 수 있습니다.</span>
                        <span>통합 로그인은 추가 인증절차를 거치지 않고 주민참여예산방, 문화관광, 역사박물관 등의 다양한 회원 서비스를 이용하실 수 있습니다.</span>
                        <span>비회원 본인인증은 회원가입 없이 본인인증 후 로그인이 필요한 게시판에 글을 올리실 수 있습니다. </span>
                        <p><span>&nbsp;&nbsp;&nbsp;작성한 글은 비회원 본인인증을 통해서만 확인하실 수 있습니다.</span></p>
                    </div>
                </div>
                <div id="login">
                    <div class="login">
                        <div class="login_tab">
                            <ul>
                                <li><a href="#login_input" class="on">
                                        <h3>회원 로그인</h3>
                                    </a></li>
                                <li><a href="#login_simp">
                                        <h3>비회원 본인인증</h3>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="login_sub">
                            <div id="login_input">
                                <form action="login.php" method="post" name="login_form">
                                <div class="id">
                                    <h4>회원아이디</h4>
                                    <input type="text" name="id" placeholder="아이디를 입력해주세요." value="">
                                </div>
                                <div class="password">
                                    <h4>비밀번호</h4>
                                    <input type="password" name="pass" placeholder="비밀번호를 입력해주세요." value="">
                                </div>
                                <button onclick="check_input()">로그인</button>
                                </form>
                                <div class="member_sub">
                                    <ul>
                                        <li><a href="./member_form.php" target="_blank">회원가입</a></li>
                                        <li><a href="#none">아이디 찾기</a></li>
                                        <li><a href="#none">비밀번호 찾기</a></li>
                                    </ul>
                                    <p><span>※&nbsp;비밀번호 입력 5회 오류시</span> 로그인이 제한됩니다.</p>
                                </div>
                            </div>
                            <div id="login_simp">
                                <div class="ipin">
                                    <div>
                                        <figure><img src="./images/ipin.png" height="90" alt="ipin"></figure>
                                        <button>아이핀 인증하기</button>
                                        <p>S C I 평가정보 제공 주민번호 대체 서비스</p>
                                        <p><strong>문의 1577-1006</strong></p>
                                    </div>
                                </div>
                                <div class="phoN">
                                    <div>
                                        <figure><img src="./images/phone.png" height="90" alt="phone"></figure>
                                        <button>휴대폰 인증하기</button>
                                        <p> 본인 명의의 휴대폰으로 인증</p>
                                        <p><strong>문의 1577-1006</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simple_login">
                        <h3>간편로그인</h3>
                        <button class="phone">간편인증 로그인</button>
                        <button class="naver"><img src="./images/naver_login.gif" width="40" height="40" alt="naver"
                                style="display: block; float: left;"> 네이버 로그인</button>
                        <button class="google"><img src="./images/google_login.png" width="38" height="38" alt="naver"
                                style="display: block; float: left;">구글 로그인</button>
                        <div>
                            <p>
                                <span>최초 1회 본인인증이 </span>&nbsp; 필요합니다.
                            </p>
                            <p>
                                <span>회원가입 없이 </span>&nbsp; 이용이 가능합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tel">
                    <table>
                        <caption>홈페이지 문의전화</caption>
                        <tr>
                            <th>영주시 홈페이지</th>
                            <td>000-000-0000</td>
                            <th>문화관광 홈페이지</th>
                            <td>000-000-0000</td>
                        </tr>
                        <tr>
                            <th>주민참여예산방</th>
                            <td>000-000-0000</td>
                            <th>영주시 역사박물관</th>
                            <td>000-000-0000</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div id="footer">
            <div id="sitemap">
                <div class="Fsitemap">
                    <div id="sitemap1" class="foot">
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
                    <div id="sitemap2" class="foot">
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

                    <div id="sitemap3" class="foot">
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
</body>

</html>