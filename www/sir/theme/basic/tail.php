<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
    <div id="aside">
        <?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
    </div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr">
        <!-- <div id="ft_link" class="ft_cnt">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
            <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
        </div> -->
        <div id="ft_company" class="ft_cnt">

	        <p class="ft_info">

            <?php

            echo latest('basic_copy', 'footer', 1, 200);
            ?>
          <div id="nands" class="nandss">
          <p class="number"><a href=# target="_blank">0507-1335-0754</a></p>
          <p class="sns"><a href="#" target="_blank"><i class="xi-facebook xi-2x"></i><span class="sound_only">페이스북으로</span></a>
                         <a href="http://www.instagram.com/all.year.round.jeju" target="_blank"><i class="xi-instagram xi-2x"></i><span class="sound_only">열두달 인스타그램으로</span></a>
                         <a href="#" target="_blank"><i class="xi-kakaotalk xi-2x"></i><span class="sound_only">카카오톡으로</span></a></p>
          </div>
          </p>
      </div>

	    </div>

		<?php echo visit('theme/basic'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
	</div>
        <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->


    <div id="top_btn">
      <a href="https://blog.naver.com/limyeslim" target="_blank"><i class="xi-emoticon-cool-o xi-2x"></i><span class="sound_only">예림의 다른 포트폴리오</span></a>
    </div>
    <!-- <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script> -->
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
