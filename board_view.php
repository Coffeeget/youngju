<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영주시청</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./javascript/jquery-1.12.4.min.js"></script>
    <script src="./javascript/jquery.easing.1.3.js"></script>
    <script src="./javascript/prefixfree.min.js"></script>
    <script src="./javascript/yj_sub.js"></script>
    <meta name="author" content="R">
    <meta name="keywords" content="영주시청, 시청, 영주시, 경상북도">
    <meta name="description" content="영주시청 반응형 웹페이지 입니다.">
    <meta name="Generator" content="vsCode">
    <link rel="shortcut icon" href="./slide_btn1.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b51af6ee40.js" crossorigin="anonymous"></script>
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
                    <h2>자유게시판</h2>
                    <div>
                        <ul>
                            <li><a href="./index.php"><i class="fas fa-home"></i></a></li>
                            <li><a href="#none">소통참여</a></li>
                            <li><a href="#none">자유게시판</a></li>
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
                    <li><a href="#none">자유게시판</a></li>
                    <li><a href="#none">칭찬합시다</a></li>
                    <li><a href="#none">홍보(광고)마당</a></li>
                    <li><a href="#none">시정모니터</a></li>
                    <li><a href="#none">시민 시정평가단</a></li>
                    <li><a href="#none">문예기행</a></li>
                    <li>
                        <a href="#none" class="click afterarrow">청렴영주</a>
                        <ul class="down">
                            <li><a href="#none">청렴나누미</a></li>
                            <li><a href="#none">자체감사결과</a></li>
                            <li><a href="#none">주민 감사 청구</a></li>
                            <li><a href="#none">민간위탁 실적평가 공개</a></li>
                            <li><a href="#none">국민권익위 청렴마당</a></li>
                            <li><a href="#none">부패공직자 현황</a></li>
                            <li><a href="#none">찾아오시는 길</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#none" class="click afterarrow">주민참여예산</a>
                        <ul class="down">
                            <li><a href="#none">주민참여 예산제 소개</a></li>
                            <li><a href="#none">예산참여</a></li>
                            <li><a href="#none">시민 예산 자료실</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#none" class="click afterarrow">설문조사</a>
                        <ul class="down">
                            <li><a href="#none">설문조사</a></li>
                            <li><a href="#none">국민신문고 설문조사</a></li>
                            <li><a href="#none">서명운동</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#none" class="click afterarrow">국민행복제안</a>
                        <ul class="down">
                            <li><a href="#none">일반제안</a></li>
                            <li><a href="#none">공모제안</a></li>
                            <li><a href="#none">아동 및 청소년 정책 제안</a></li>
                        </ul>
                    </li>
                    <li><a href="#none">국민생각함</a></li>
                    <li>
                        <a href="#none" class="click afterarrow">적극행정</a>
                        <ul class="down">
                            <li><a href="#none">적극행정 제도소개</a></li>
                            <li><a href="#none">적극행정 추진방안</a></li>
                            <li><a href="#none">적극행정 국민추천</a></li>
                            <li><a href="#none">법령해석</a></li>
                            <li><a href="#none">알림/소식</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#none" class="click afterarrow">알뜰나눔장터</a>
                        <ul class="down">
                            <li><a href="#none">재활용품 판매장</a></li>
                            <li><a href="#none">중고매매장터</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#none" class="click afterarrow">찾아주세요</a>
                        <ul class="down">
                            <li><a href="#none">가출/행불자</a></li>
                            <li><a href="#none">유기동물</a></li>
                        </ul>
                    </li>
                    <li><a href="#none">영주시 인재풀</a></li>
                </ul>
            </div>
            <div class="sub_section_middle">
                <div class="sub03_cont">
                    <div class="sub03_content">
                        <div class="sub03_search">
                            <form name="search">
                                <p class="search_txt">
                                    <label>검색어</label>
                                    <select name="title" id="search">
                                        <option value="title">제목</option>
                                        <option value="text">내용</option>
                                        <option value="name">작성자</option>
                                    </select>
                                    <input type="text">
                                </p>
                            </form>
                            <form name="date">
                                <p class="search_date">
                                    <label>기&nbsp;&nbsp;&nbsp;간</label>
                                    <input type="date" id="date">
                                    <!-- <span><i class="far fa-calendar-alt"></i> &nbsp;∽&nbsp; </span> -->
                                    <input type="date" id="date2">
                                    <!-- <span><i class="far fa-calendar-alt"></i></span> -->
                                    <select name="day" id="dates">
                                        <option value="week">1 주</option>
                                        <option value="month">1개월</option>
                                        <option value="month">3개월</option>
                                        <option value="month">6개월</option>
                                    </select>
                                    <button class="search_btn">검색</button>
                                    <button>초기화</button>
                                </p>
                            </form>
                        </div>
                        <div id="notice">
                        <div id="board_box3">
                        <?php
    //board_list.php에서 레코드 일련번호와 페이지번호 전달받기
    $num = $_GET["num"];
    $page = $_GET["page"];

    //db에서 해당 글 검색하여 글 정보 가져오기
	$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);


    //$result에서 데이터 가져오기
    $row = mysqli_fetch_array($result);
    $id           = $row["id"];
    $name         = $row["name"];
    $regist_day   = $row["regist_day"];
    $subject      = $row["subject"];
    $content      = $row["content"];
    $file_name    = $row["file_name"];
    $file_type    = $row["file_type"];
    $file_copied  = $row["file_copied"];
    $hit          = $row["hit"];

    //공백과 줄바꿈 코드 변경
    $content = str_replace(" ","&nbsp;", $content);
    $content = str_replace("\n","<br>", $content);

    //조회수 증가와 DB업데이트
    $new_hit = $hit  + 1;
    $sql = "update board set hit=$new_hit where num=$num";
	mysqli_query($con, $sql);
?>

        <ul id="view_content">
            <li>
                <span>제목 : <?= $subject?> </span>
                <span><?= $name?> | <?= $regist_day?> </span>
            </li>
            <li>
                <?php
                    if($file_name){ /* 첨부 파일 정보 출력 */
                        $real_name = $file_copied;
                        $file_path = "./data/".$real_name;
                        $file_size = filesize($file_path);

                        echo "▼ 첨부파일 : $file_name($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp; <a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a> ";
                    }
                ?>
                <?= $content ?> <!-- 글내용 -->
            </li>
        </ul>
        <ul class="buttons">
            <li><button onclick="location.href='board_list.php?page=<?=$page?>'">목록</button></li>
            <li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
            <li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
            <li><button onclick="location.href='board_form.php'">글쓰기</button></li>
        </ul>
        <div class="sub_section_bottom">
            </div>
            <div class="sub_section_bottom_side" style="left:0">
                <h2>페이지 담당자<span> -</span><span>페이지 수정일: 2023-04-19</span></h2>
                <div>
                    <span>이 페이지에서 제공하는 정보에 대하여 어느 정도 만족하셨습니까?</span>
                    <form name="chekbox">
                        <p>
                            <input type="radio" name="chekbox">매우만족
                            <input type="radio" name="chekbox">만족
                            <input type="radio" name="chekbox">보통
                            <input type="radio" name="chekbox">불만족
                            <input type="radio" name="chekbox">매우 불만족
                        </p>
                        <p><button>의견제출</button><input type="text"></p>
                    </form>
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