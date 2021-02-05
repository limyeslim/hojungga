<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head_main.php');
?>
<div class="latest_top_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
	echo latest('theme/main_slider', 'wideslider', 4, 23);
			// 최소설치시 자동생성되는 질문답변게시판
  //다운받은 스킨의 위치가 어딘지에 따라서 적용할 때도 주의해야함.
  //echo latest('latest 폴더 속 폴더명', '게시판 테이블명', 출력개수, 제목길이);
  //echo latest('theme/latest 폴더 속 폴더명', '게시판 테이블명', 출력개수, 제목길이);  -> 내가 사용하는 테마 폴더 안에 skin/latest 폴더 안에 넣었다면
    ?>

</div>
<div class="latest_wr" id="container_wr">
<?php
  echo latest('theme/pic_block2', 'gallery', 6, 30);
 ?>

 <ul class="MandR">
   <li class="manage">
      <div class="ex">
    <!-- <a href="http://limyeslim.cafe24.com/sir/bbs/board.php?bo_table=coffee">
     <img src="/sir/theme/basic/img/cafebg.jpg" alt="운영안내 관련 이미지"></a> -->
        <p class=one>제주의 사계절을 담은</p>
        <p class=two>제주 열두달<br></p>
        <p class=three>제주 제주시 한경면 용수길 37<br>
                        (용수리 4348-8)<br></p>
                        <br><br><br>
        <p class=four>매일 11:00 - 20:00<br>
                      화요일 off</p>
        <div class=five><a href="http://limyeslim.cafe24.com/sir/bbs/board.php?bo_table=res_1">예약하기</a></div>
      </div>
    </li>
   <li class="map">
     <div class="mapright">
       <a href="http://limyeslim.cafe24.com/sir/bbs/content.php?co_id=customer_1">
        <img src="/sir/theme/basic/img/cafemap.svg" alt="지도"></a>
        <!-- <p class="map_explain">
        위치 : 제주 제주시 한경면 용수길 37</p> -->
     </div>
   </li>

   <!-- <li class="rec">

     <?php
       echo latest('pic_block', 'review', 4, 23);
      ?>

   </li> -->
 </ul>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
