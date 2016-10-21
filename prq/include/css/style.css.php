<?php 
header("Content-type: text/css; charset: UTF-8");
/**
*
* theme에 따른 css 형식 변경 하기
* 작성 : 2016-02-17 (수)
* 수정 : 2016-02-18 (목)
* 1.00 php to css
* 1.01 add to variabled with theme
* @author : Taebu Moon
* @Copyright : 2016, 태부
*/
$red="#e84031";
$blue="#4d86cb";
$orange="#fba427";
$green="#390";

$reda="rgba(198,77,75,.9)";
$bluea="rgba(77,134,203,.9)";
$orangea="rgba(251,164,39,.9)";
$greena="rgba(51,153,0,.9)";

$color_type=${$_GET['theme']};
$color_type_alpha=${$_GET['theme']."a"};
?>
@charset "utf-8";body,h3{position:relative}
.btn_bottom_basket,.btn_bottom_call{z-index:1003;text-indent:-9999px;bottom:20px}
.mcds_ad,.mcds_banner,.mcds_banner_new,.nav,.overflow_hidden{overflow:hidden}
.nav,h3{border-bottom:1px solid #e2e2e2}
.celeb_wrap ul,ol,ul{list-style:none}
.celeb_wrap_bg,.menu_bg{top:0;left:0;opacity:.6}
.btn_gocoupon,.btn_top_home,input,select{-webkit-appearance:none}@font-face{font-family:FontAwesome;src:url(../font/fontawesome-webfont.eot);src:url(../font/fontawesome-webfont.eot?#iefix)format('eot'),url(../font/fontawesome-webfont.woff)format('woff'),url(../font/fontawesome-webfont.ttf)format('truetype'),url(../font/fontawesome-webfont.svg#FontAwesome)format('svg');font-weight:400;font-style:normal}@font-face { font-family: 'fontello'; src: url('../font/fontello.eot?34923716'); src: url('../font/fontello.eot?34923716#iefix') format('embedded-opentype'), url('../font/fontello.woff?34923716') format('woff'), url('../font/fontello.ttf?34923716') format('truetype'), url('../font/fontello.svg?34923716#fontello') format('svg'); font-weight: normal; font-style: normal; }body,html{height:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-moz-user-select:none;-khtml-user-select:none;-webkit-user-select:none;user-select:none}body,h3,html{box-sizing:border-box}body,button,dd,dl,dt,fieldset,form,h1,h2,h3,h4,h5,h6,html,input,legend,li,ol,p,select,table,td,textarea,th,ul{margin:0;padding:0;font-size:14px;font-family:'나눔고딕','Nanum Gothic','돋움',Dotum,'굴림',Gulim,Helvetica,sans-serif!important}body{background-color:#f0f0f0;color:#333!important;height:100%;-webkit-text-size-adjust:none}body,button,h1,h2,h3,h4,h5,input,select,table,textarea{letter-spacing:-1px;font-size:14px}
#memeber_form_area .memeber_form_guide p span:nth-of-type(2),#storedetail_area .store_detail dt:nth-of-type(3){letter-spacing:.04em}table{border-collapse:collapse}fieldset,img{border:0;margin:0;padding:0}a{color:inherit;text-decoration:none;cursor:pointer}address,em{font-style:normal}mark{background-color:transparent}
.display_none{display:none}::-webkit-scrollbar{display:none}
.clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden}
.nav_lon .nav_a:after,.newbn_a:after,h3:after{content:''}h3{height:39px;background-color:#fff;color:<?php echo $color_type;?>;font-size:15px;font-weight:700;line-height:2.6em;padding:0 0 0 15px;z-index:9999;margin-top:-5px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}h3 span{display:inline-block;border-bottom:4px solid <?php echo $color_type;?>;padding:0 7px;height:34px}
.btn_top_openleft,.btn_top_prev{position:absolute;top:0;left:0;width:50px;height:50px;padding:0;border:0;background-color:transparent;-webkit-appearance:none}
.btn_top_openright,.btn_top_prev{position:absolute;top:0;right:0;width:50px;height:50px;padding:0;border:0;background-color:transparent;-webkit-appearance:none}
.btn_top_openleft_num{display:block;position:absolute;top:7px;right:-2px;width:12px;height:18px;line-height:19px;color:red;font-size:10px;padding:0 3px;background-color:rgba(255,255,255,1);border-radius:30px;text-align:center;border:3px solid;font-weight:800}
.btn_bottom_basket,.btn_bottom_call{border:1px solid #aeaeae;border-radius:55px}
.btn_top_home{position:absolute;top:0;right:0;width:50px;height:50px;padding:0;border:0;background-color:transparent}
.btn_bottom_basket,.btn_bottom_call{position:fixed;width:57px;height:57px}
.btn_bottom_basket{left:10px}
.btn_bottom_call{right:10px}
.btn_bottom_basket_num{display:block;position:absolute;top:0;right:-10px;width:16px;height:22px;line-height:24px;color:red;font-size:13px;padding:0 3px;background-color:rgba(255,255,255,1);border-radius:30px;text-align:center;border:1px solid #aeaeae;font-weight:800;text-indent:0}
#floatBtn{position:fixed;top:130px;right:5px;z-index:2005}
.gnb_tl,.gnb_wrp,.nav,.nav_a{position:relative}
.btn_gocoupon{width:50px;height:50px;padding:0;border:0;background-color:transparent}
.gnb_wrp{min-height:50px;background-color:<?php echo $color_type;?>;text-align:center}
.nav,.nav_a,.nav_wrap{background-color:#fff}
/** 2016-05-12 (목) 가운데 

* 아래 왼쪽으로 변경
*/
.gnb_wrp h1{display:inline-block;height:50px;margin-top:-1px;vertical-align:top} 
.gnb_wrp h1.left{display:block;height:50px;margin-top:-1px;vertical-align:top}

.gnb_wrp h1>a{display:table-cell;height:50px;vertical-align:middle;color:#fff}
.gnb_tl,.newbn_m{vertical-align:top}
.gnb.list.l2{left:7px;right:auto!important}
.gnb_tl{display:inline-block;margin-right:10px;padding:9px 10px 5px;font-size:19px;font-family:helvetica}
.nav{z-index:20}
.header .grd_next,.header .grd_prev{position:absolute;width:17px;height:38px;z-index:2001}

.nav_u{display:table;white-space:nowrap}
.nav_u li:first-child{padding:0 0 0 15px}
.nav_u li:last-child{padding:0 15px 0 0}
.nav_l{display:table-cell;margin:0;white-space:nowrap;width:200px;}
/*width:200px;*/
.nav_a{display:inline-block;padding:0 7px;font-family:HelveticaNeue-Condensed,Helvetica,sans-serif;font-weight:700;font-size:15px;line-height:36px;color:#333;text-shadow:0 -1px 1px rgba(255,255,255,.7)}
.nav_lon .nav_a{height:35px;border-bottom:0px solid <?php echo $color_type;?>;color:<?php echo $color_type;?>}
#review_area,#review_area .box_review,#review_area .review_top,#storedetail_area,.celeb_wrap ul li{border-bottom:1px solid #e2e2e2}
#review_area{border-bottom:0}
.header .grd_prev{top:50px;left:0;bottom:3px;background:-webkit-gradient(linear,left top,right top,color-stop(0,#fff),color-stop(100%,rgba(255,255,255,0)))}
.header .grd_next{top:50px;right:0;bottom:3px;background:-webkit-gradient(linear,left top,right top,color-stop(0,rgba(255,255,255,0)),color-stop(100%,#fff))}
.header2 .grd_prev{top:50px;left:0;bottom:3px;background:-webkit-gradient(linear,left top,right top,color-stop(0,#fff),color-stop(100%,rgba(255,255,255,0)))}
.header2 .grd_next{top:50px;right:0;bottom:3px;background:-webkit-gradient(linear,left top,right top,color-stop(0,rgba(255,255,255,0)),color-stop(100%,#fff))}
.nav .sprh_mark{position:absolute;top:13px;right:0}
.nav_lon .nav_a:after{overflow:hidden;position:absolute;bottom:-4px;left:0;width:100%;height:1px;background-color:<?php echo $color_type;?>}
.mcds,.mcds_ad{position:relative;margin:10px 8px;background-color:#fff;-webkit-box-shadow:0 0 2px rgba(0,0,0,.08),0 1px 1px rgba(0,0,0,.05);box-shadow:0 0 2px rgba(0,0,0,.08),0 1px 1px rgba(0,0,0,.05)}
.mcds_more{clear:both;margin:0 0 11px;background-color:transparent;-webkit-box-shadow:none;box-shadow:none}
.mcds_ad{clear:both;background-color:#eff0f2}
.mcds_banner{clear:both;background-color:transparent}
.mcds_banner_new{clear:both;background-color:#3e91cc}
.newbn_a{display:block;position:relative;text-align:center}
.reveal2-nav,.rs-left,.rs_right{display:none}
.newbn_a:after{position:absolute;top:0;left:0;width:100%;height:41px;border:1px solid rgba(0,0,0,.1);-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}
.celeb_wrap .left_navtitle .left_nav_photo,.celeb_wrap .left_navtitle .left_nav_photo.user_login{width:40px;position:absolute;margin:0 3px 0 0;height:40px;top:10px;left:10px;border:1px solid #d2d2d2}
.reveal2-nav{width:100%;position:absolute;top:0;left:0;z-index:3000}
.celeb_wrap{box-shadow:0 0 20px rgba(0,0,0,.9);-webkit-box-shadow:0 0 20px rgba(0,0,0,.9);position:fixed;top:0;left:0;width:230px;height:120%;background:#f8f8f8;z-index:999999;overflow-y:auto}
.celeb_wrap_wrap,.menu_bg,.rs-content{width:100%}
.celeb_wrap .left_navtitle{position:relative;margin:0;height:60px;padding:0 0 0 1.2em;line-height:46px;color:#fff;background-color:<?php echo $color_type;?>;font-weight:800}
.celeb_wrap .left_navtitle a{width:80%}

.celeb_wrap .left_navtitle .left_nav_photo{background:url(../img/icon_01.png)-105px -150px no-repeat #f3f3f3;background-size:200px 200px;border-radius:30px;-moz-border-radius:30px;-webkit-border-radius:30px;text-indent:-9999px}
.celeb_wrap .left_navtitle .left_nav_photo.user_login{background:url(../img/icon_01.png)-105px -150px no-repeat;background-color:#f3f3f3!important;background-size:200px 200px;border-radius:30px;-moz-border-radius:30px;-webkit-border-radius:30px;text-indent:-9999px}
.celeb_wrap .left_navtitle p{padding:0 0 0 42px;color:#fff;line-height:62px;width:50%}
.celeb_wrap .left_navtitle .left_nav_close{position:absolute;top:0;right:0;background:url(../img/icon_01.png)-120px -110px no-repeat;margin:0 3px 0 0;background-size:160px 160px;width:40px;height:62px;text-indent:-9999px;z-index:2001}
.celeb_wrap ul{margin:0;padding:0;background-color:#fff}
.celeb_wrap ul li:first-child{border-top:1px solid #e2e2e2;margin-top:4px}
.celeb_wrap ul li{position:relative}
.celeb_wrap ul li a{display:block;position:relative;color:#777;font-family:'Nanum Gothic';height:45px;line-height:43px;padding:0 0 0 45px;font-weight:800}
.celeb_wrap_bg,.menu_bg{position:fixed;height:100%}
.celeb_wrap_bg{background-color:#000;width:100%;text-indent:-9999px;z-index:1004}
.celeb_wrap a:active,.celeb_wrap a:focus,.celeb_wrap a:hover{background-color:#ededed}
.menu_bg{background-color:#000;text-indent:-9999px;z-index:2005}
.celeb_wrap .icon_menu{position:absolute;background:url(../img/icon_01.png)no-repeat;top:10px;left:10px;width:25px;height:25px;display:inline-block;border:0px solid #777;border-radius:30px;-moz-border-radius:30px;-webkit-border-radius:30px;overflow:hidden;text-indent:-9999px}
.celeb_wrap .imenu01,.celeb_wrap .imenu02,.celeb_wrap .imenu03,.celeb_wrap .imenu04,.celeb_wrap .imenu05,.celeb_wrap .imenu06,.celeb_wrap .imenu07,.celeb_wrap .imenu08,.celeb_wrap .imenu09,.celeb_wrap .imenu10,.celeb_wrap .imenu11{background-size:130px 130px}
.celeb_wrap .imenu01{background-position:-3px -4px}
.celeb_wrap .imenu02{background-position:-35px -5px}
.celeb_wrap .imenu03{background-position:-4px -37px}
.celeb_wrap .imenu04{background-position:-36px -36px}
.celeb_wrap .imenu06{background-position:-3px -69px}
.celeb_wrap .imenu05{background-position:-68px -37px}
.celeb_wrap .imenu07{background-position:-36px -69px}
.celeb_wrap .imenu08{background-position:-69px -69px}
.celeb_wrap .imenu09{background-position:-3px -101px}
.celeb_wrap .imenu10{background-position:-36px -101px}
.celeb_wrap .imenu11{background-position:-69px -4px}

.nav_wrap ul li a{display:block;position:relative;color:#777;font-family:'Nanum Gothic';height:45px;line-height:39px;padding:0 0 0 0;font-weight:800}
.nav_wrap .icon_menu
{
	position:absolute;
	background:url(../img/icon_02.png) no-repeat;
	top:9px;
	left:10px;
	width:33px;
	height:25px;
	display:inline-block;
/*
	border:1px solid #777;
	border-radius:30px;
	-moz-border-radius:30px;
	-webkit-border-radius:30px;
*/
	overflow:hidden;
	text-indent:-9999px
}
.nav_wrap .imenu01,.nav_wrap .imenu02,.nav_wrap .imenu03,.nav_wrap .imenu04,.nav_wrap .imenu05,.nav_wrap .imenu06,.nav_wrap .imenu07,.nav_wrap .imenu08,.nav_wrap .imenu09,.nav_wrap .imenu10,.nav_wrap .imenu11{background-size:130px 130px}
.nav_wrap .nav_lon .imenu01{background-position:-45px -7px}
.nav_wrap .nav_lon .imenu02{background-position:-45px -35px}
.nav_wrap .nav_lon .imenu03{background-position:-45px -63px}
.nav_wrap .nav_lon .imenu04{background-position:-45px -92px}
.nav_wrap .imenu01{background-position:-7px -7px}
.nav_wrap .imenu02{background-position:-7px -35px}
.nav_wrap .imenu03{background-position:-7px -63px}
.nav_wrap .imenu04{background-position:-7px -92px}
.celeb_wrap .add_favorite{display:block;height:40px;margin:10px;line-height:40px;color:<?php echo $color_type;?>;text-align:center;background-color:#fff;border-radius:5px;border:1px solid}
.celeb_wrap .add_favorite span{display:none}
.celeb_wrap .add_favorite:before{content:"\f045";display:inline-block;font-family:FontAwesome;font-size:16px;color:<?php echo $color_type;?>;line-height:28px;margin-right:5px;vertical-align:baseline}
.celeb_wrap .add_favorite:hover{background-color:rgba(198,77,75,.1)}
.celeb_wrap .msg_num{display:block;position:absolute;top:7px;left:105px;width:12px;height:18px;line-height:19px;color:#fff;font-size:10px;padding:0 3px;background-color:#f66;border-radius:10px;text-align:center}
.btn,.review_top .star,.user_mark .star{display:inline-block}
.review_top .star{width:15px;height:15px;text-indent:-9999px;background:url(../img/contents_01.png)no-repeat}
.review_top .star_active{background-size:125px 125px;background-position:-8px -9px}
.review_top .star_inert{background-size:125px 125px;background-position:-40px -9px}
.user_mark .star{width:12px;height:12px;text-indent:-9999px;background:url(../img/contents_01.png)no-repeat}
.user_mark .star_active{background-size:100px 100px;background-position:-7px -7px}
.user_mark .star_inert{background-size:100px 100px;background-position:-31px -7px}
.btn_top{display:block;position:absolute;background:url(../img/btn_01.png)no-repeat;width:40px;height:40px;text-indent:-9999px}
.btn_top.home,.btn_top.openleft,.btn_top.prev{background-size:180px 180px}
.btn_top.openleft{background-position:0 2px}
.btn_top.prev{background-position:-141px -105px;width:40px;height:25px;left:10px;top:14px}
/*.btn_top.home{background-position:-43px 2px}*/
.btn_top.home{background-position:-90px -32px}
.btn_bottom{display:block;width:53px;height:53px;background:url(../img/btn_01.png)no-repeat;background-color:<?php echo $color_type_alpha;?>;text-indent:-9999px;border-radius:55px;overflow:hidden;border:2px solid #fff;border-opacity:.9}
.btn_bottom.basket{background-size:150px 150px;background-position:-36px -29px}
.btn_bottom.call{background-size:150px 150px;background-position:8px -29px}
.btn_intro{display:block;position:absolute;right:5px;background:url(../img/btn_01.png)no-repeat;width:80px;height:50px;text-indent:-9999px}
.btn_intro.gocoupon{background-size:280px 280px;background-position:-75px -212px}
.gray_btn_s{background:linear-gradient(#fff,#e9e9e9);border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;border:1px solid #acacac;padding:3px;font-size:12px;font-weight:600}
.color_btn_xb{display:inline-block;width:80px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #892828;padding:10px;font-weight:700;color:#fff;background:rgba(224,72,72,1);background:-moz-linear-gradient(top,rgba(224,72,72,1) 0,rgba(175,52,52,1) 100%);background:-webkit-gradient(left top,left bottom,color-stop(0,rgba(224,72,72,1)),color-stop(100%,rgba(175,52,52,1)));background:-webkit-linear-gradient(top,rgba(224,72,72,1) 0,rgba(175,52,52,1) 100%);background:-o-linear-gradient(top,rgba(224,72,72,1) 0,rgba(175,52,52,1) 100%);background:-ms-linear-gradient(top,rgba(224,72,72,1) 0,rgba(175,52,52,1) 100%);background:linear-gradient(to bottom,rgba(224,72,72,1) 0,rgba(175,52,52,1) 100%);filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#e04848', endColorstr='#af3434', GradientType=0 )}
#cEvent.contents,#cHome.contents,#cMenu.contents{line-height:0}
#cEvent.contents img,#cHome.contents img,#cMenu.contents img{line-height:0;border-top:1px solid #e2e2e2;border-bottom:1px solid #e2e2e2}
#wrapper_1 .contents,#wrapper_3 .contents,#wrapper_6 .contents{line-height:0;border-top:1px solid #e2e2e2}
.contents{padding-top:5px;padding-bottom:5px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
#storedetail_area{background-color:#fff;border-top:1px solid #e2e2e2}
#storedetail_area .store_detail{position:relative;padding:15px 0}
#storedetail_area .thumb{float:left;background:url(../img/sample/storedetail_sample.png)no-repeat;margin:5px 15px 10px 10px;border-radius:5px;-moz-border-radius:10px;-webkit-border-radius:10px;border:1px solid #e2e2e2;width:90px;height:90px;background-size:70px 70px;-webkit-background-size:70px 70px;text-indent:-9999px}
#storedetail_area .store_detail dl.store_info{margin-top:10px;margin-bottom:0}
#storedetail_area .store_detail dt{float:left;width:60px;color:grey;font-weight:600}
#storedetail_area .store_detail dl.store_introduce{line-height:14px;margin:0 10px 5px 20px;padding:0}
#storedetail_area .store_detail .store_introduce dt:first-child{margin:0 0 3px}
#storedetail_area .store_detail .store_introduce dt{width:100%;color:grey;margin:10px 0 3px;font-weight:600}
#storedetail_area .store_detail .store_introduce dd{float:left;display:inline-block;line-height:15px}
#storedetail_area .store_detail dl.store_info{margin:10px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
#storedetail_area .store_detail dl.store_info dt{position:absolute;left:120px;width:60px;color:grey;font-weight:600}
#storedetail_area .store_detail dl.store_info dd{margin-left:170px}
#review_area{margin-top:5px;background-color:#fff;border-top:1px solid #e2e2e2}
#review_area .review_top{position:relative;padding:14px 10px}
#review_area .review_top .star{width:15px;margin-right:-2px}
#review_area .review_top p{display:inline}
#review_area .review_top em{display:inline-block;padding:0 0 0 5px}
#review_area .review_top .btn_area{position:absolute;top:8px;right:10px}
#review_area .box_review{position:relative;padding:10px;background-color:#fff}
#review_area .box_review li{position:relative}
#review_area .box_review .review_cont{margin:0 0 0 80px}
#review_area .box_review .user_photo_b{float:left;display:block;background:url(../img/icon_01.png)-153px -225px no-repeat #e9e9e9;margin:0 10px 0 0;width:70px;height:70px;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;border:1px solid #e2e2e2;background-size:300px 300px;-webkit-background-size:300px 300px;text-indent:-9999px}
#review_area .box_review .user_mark{font-weight:600}
#review_area .box_review .date{font-size:.813em;font-weight:600}
#review_area .box_review .star{width:12px;margin-right:-3px}
#review_area .box_review .comment{display:block;padding:5px 0}
#review_area .box_review .btn_area{display:block;padding:5px 0 0}
#review_area .box_review .review .btn_area a:nth-of-type(3){position:absolute;right:10px;bottom:-3px;line-height:14px}
#review_area .box_comment{position:relative;padding:10px;border:1px solid #e2e2e2;border-radius:5px;margin-top:3px;margin-left:30px;background-color:#f5f5f5}
#review_area .box_review li.review+li.box_comment{margin-top:15px;border:1px solid #e2e2e2}
#review_area .box_review li.review+li.box_comment:before{content:' ';position:absolute;width:0;height:0;left:7px;top:-20px;border:10px solid;border-color:transparent transparent #e2e2e2 #e2e2e2}
#review_area .box_review li.review+li.box_comment:after{content:' ';position:absolute;width:0;height:0;left:8px;top:-18px;border:9px solid;border-color:transparent transparent #f5f5f5 #f5f5f5}
#review_area .box_comment .comment_cont{margin:0 0 0 50px}
#review_area .box_comment .user_photo_s{float:left;display:block;background:url(../img/icon_01.png)-105px -154px no-repeat #e9e9e9;margin:0 10px 0 0;width:40px;height:40px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #e2e2e2;background-size:50px 48px;-webkit-background-size:200px 200px;text-indent:-9999px}
#review_area .box_comment .user{font-weight:600}
#review_area .box_comment .user p{display:inline-block;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;font-weight:600;font-size:12px;padding:3px;margin:0 0 0 3px;background-color:<?php echo $color_type;?>;color:#fff}
#review_area .box_comment .date{font-size:.813em;font-weight:600}
#review_area .box_comment .comment{display:block;padding:5px 0}
#review_area .box_comment .btn_area{padding:5px 0 0;position:absolute;bottom:10px;right:10px}
#review_area .box_recommend{position:relative;padding:10px 10px 10px 40px;border-bottom:1px solid #afafaf;background-color:#f5f5f5}
#coupon_area .coupon_box dl,#delilink_area,#delilink_area .store_detail,#inquiry_area,#review_w_area .review_w_cont02,#review_w_area .review_w_cont03,.login_area{border-bottom:1px solid #e2e2e2}
#review_area .box_recommend .recommend_cont{margin:0 0 0 50px}
#review_area .box_recommend .user_photo_s{float:left;display:block;margin:0 10px 0 0;background-color:#e9e9e9;width:40px;height:40px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #d2d2d2;background-size:30px 29px;-webkit-background-size:30px 29px;text-indent:-9999px}
#review_area .box_recommend .user{font-weight:600}
#review_area .box_recommend .user p{display:inline-block;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;font-weight:600;font-size:12px;padding:3px;margin:0 0 0 3px;background-color:<?php echo $color_type;?>;color:#fff}
#review_area .box_recommend .date{font-size:.813em;font-weight:600}
#review_area .box_recommend .comment{display:block;padding:5px 0}
#review_area .box_recommend .btn_area{padding:5px 0 0;position:absolute;bottom:10px;right:10px}
#review_area .review_w_cont03{padding:5px 5px 5px 0;background-color:#fff}
#review_area .review_w_cont03 li{position:relative;width:50px;display:inline-block;text-align:left}
#review_area .review_w_cont03 .reveiw_photo{display:inline-block;background-color:#fff;width:45px;height:45px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #acacac;background-size:27px 26px;-webkit-background-size:27px 26px;text-indent:-9999px}
#review_area .review_w_cont03 .reveiw_photo.addphoto{display:inline-block;background-color:#fff;width:45px;height:45px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #acacac;background-size:cover;text-indent:-9999px}
#review_w_area{height:100%;background-color:#fff;margin-top:5px}
#review_w_area h3{display:none}
#review_w_area .review_w_cont01{background-color:#f5f5f5;font-size:13px;height:40px;font-weight:600;line-height:40px;padding:0 0 0 10px;border-top:1px solid #e2e2e2}
#review_w_area .review_w_cont01 img{width:20px;vertical-align:text-bottom;margin:0 7px 0 0}
#review_w_area .review_w_cont01 img:first-child{margin:0 7px}
#review_w_area .review_w_cont02{font-weight:600;padding:10px;border-top:1px solid #e2e2e2}
#review_w_area .review_w_cont02 p{margin:0 0 5px;font-size:13px}
#review_w_area .review_w_cont03{padding:10px;background-color:#f5f5f5}
#review_w_area .review_w_cont03 li{position:relative;width:70px;display:inline-block;text-align:center}
#review_w_area .review_w_cont03 .reveiw_photo{display:inline-block;background:url(/img/icon_photo.png)center center no-repeat #fff;width:50px;height:50px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #acacac;background-size:30px 29px;-webkit-background-size:30px 29px;text-indent:-9999px}
#review_w_area .review_w_cont03 .reveiw_photo.addphoto{display:inline-block;background-color:#fff;width:50px;height:50px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #acacac;background-size:cover;text-indent:-9999px}
#review_w_area .review_w_cont03 .close{position:absolute;right:0;top:-5px;display:block;vertical-align:top;width:20px;height:20px;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;background:url(../img/btn_close01.png)center center no-repeat;text-indent:-9999px;background-size:10px 10px;-webkit-background-size:10px 10px}
#review_w_area .review_w_cont04 p,.darkgray_btn_xb,.gray_btn_xb,.icon_check,.icon_check.select,.icon_view,.review_btn p{display:inline-block}
#review_w_area .review_w_cont04{padding:10px}
#review_w_area .review_w_cont04 i{display:inline-block;background-color:<?php echo $color_type;?>;width:15px;height:15px;border-radius:10px;color:#fff;text-align:center;vertical-align:top;line-height:15px;font-size:11px}
#review_w_area .review_w_cont04 p{margin-left:5px;font-size:12px}
#review_w_area .review_w_btn_area{padding:20px;text-align:center}
#review_w_area .review_w_btn_area .darkgray_btn_xb{width:47%}
#cont .menu_img{width:100%;z-index:-1}
.gray_btn_b{background:linear-gradient(#fff,#e9e9e9);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #acacac;padding:5px;font-weight:700}
.darkgray_btn_xb,.gray_btn_xb{border-radius:5px;padding:10px;-moz-border-radius:5px;-webkit-border-radius:5px}
.t_color_orange{color:#f39918}
.t_color_red{color:#df3950}
.t_color_orange_b{color:#f39918;font-weight:700}
.t_color_red_b{color:#df3950;font-weight:700}
.darkgray_btn_xb{text-align:center;width:120px;border:1px solid #292c2e;font-weight:700;color:#fff;background:rgba(127,133,139,1);background:-moz-linear-gradient(top,rgba(127,133,139,1) 0,rgba(78,83,87,1) 100%);background:-webkit-gradient(left top,left bottom,color-stop(0,rgba(127,133,139,1)),color-stop(100%,rgba(78,83,87,1)));background:-webkit-linear-gradient(top,rgba(127,133,139,1) 0,rgba(78,83,87,1) 100%);background:-o-linear-gradient(top,rgba(127,133,139,1) 0,rgba(78,83,87,1) 100%);background:-ms-linear-gradient(top,rgba(127,133,139,1) 0,rgba(78,83,87,1) 100%);background:linear-gradient(to bottom,rgba(127,133,139,1) 0,rgba(78,83,87,1) 100%);filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#7f858b', endColorstr='#4e5357', GradientType=0 )}
.gray_btn_xb{width:80px;border:1px solid #a3a3a3;font-weight:700;color:#000;background:rgba(255,255,255,1);background:-moz-linear-gradient(top,rgba(255,255,255,1) 0,rgba(246,246,246,1) 47%,rgba(233,233,233,1) 100%);background:-webkit-gradient(left top,left bottom,color-stop(0,rgba(255,255,255,1)),color-stop(47%,rgba(246,246,246,1)),color-stop(100%,rgba(233,233,233,1)));background:-webkit-linear-gradient(top,rgba(255,255,255,1) 0,rgba(246,246,246,1) 47%,rgba(233,233,233,1) 100%);background:-o-linear-gradient(top,rgba(255,255,255,1) 0,rgba(246,246,246,1) 47%,rgba(233,233,233,1) 100%);background:-ms-linear-gradient(top,rgba(255,255,255,1) 0,rgba(246,246,246,1) 47%,rgba(233,233,233,1) 100%);background:linear-gradient(to bottom,rgba(255,255,255,1) 0,rgba(246,246,246,1) 47%,rgba(233,233,233,1) 100%);filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e9e9e9', GradientType=0 )}
.icon_view,.review_btn{border:1px solid #acacac}
.review_btn{background:linear-gradient(#fff,#e9e9e9);border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;font-weight:600;font-size:12px;padding:3px}
.review_btn p{font-size:12px;padding:0 2px 0 0}
.review_btn em{border-left:1px solid #acacac;font-size:12px;padding:0 0 0 2px}
.icon_view{width:25px;height:25px;font-size:14px;background-size:14px 14px;background-color:#eaeaea;border-radius:6px;font-weight:700;text-indent:-9999px;padding:0}
.icon_check,.icon_check.select{border:1px solid #666;padding:0;width:20px;height:20px;background-color:#fff}
.icon_check{text-indent:-9999px;border-radius:6px}
.icon_check.select{border-radius:6px;text-indent:0;color:<?php echo $color_type;?>;text-align:center;vertical-align:-4px;font-size:16px}
.more{display:block;position:relative;margin:0;padding:.7em 1em;text-align:center;overflow:hidden}
#coupon_area{position:relative}
.contents .coupon_reg{display:relative}
.contents .banner_coupon_reg{background-color:#fff;overflow:hidden;position:relative;display:block;text-indent:-9999px;height:55px;border:1px solid #e2e2e2}
.contents .banner_coupon_reg .coupon_regi{display:block;position:absolute;top:0;left:10px;width:186px;height:50px;background:url(../img/icon_02.png)0 -104px no-repeat;background-size:500px 500px;z-index:100}
.contents .banner_coupon_reg .coupon_regb{display:block;position:absolute;top:7px;right:10px;width:110px;height:40px;background:url(../img/icon_02.png)25px -126px no-repeat;background-size:400px 400px;z-index:100}
.contents .coupon_reg .btn_area a.btn_coupon_reg{position:absolute;right:10px;top:10px;width:70px;height:35px;border:1px solid;border-radius:3px;color:<?php echo $color_type;?>;background-color:#fff;text-align:center;font-size:12px;line-height:28px}
.contents .coupon_reg .btn_area a.btn_coupon_reg i{display:block;font-size:18px;margin-top:-10px}
.coupon_num_reg{display:block;width:100%;padding:10px;background:rgba(240,240,240,1);z-index:2;border:1px solid #cecece;margin-top:-1px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
.coupon_num_reg p{display:inline-block;width:77%}
.coupon_num_reg input{display:inline-block;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
.coupon_num_reg .btn_coupon_num{display:inline-block;width:21.5%;text-align:center;background:linear-gradient(#fff,#e9e9e9);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #acacac;padding:4px;font-weight:700;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;margin:5px 0 0;line-height:22px;color:#333}
.coupon_num_reg .coupon_num_note{display:block;color:#666;font-size:12px;line-height:14px;margin-top:8px}
#coupon_area .coupon_box{position:relative;background-color:#fff;border:1px solid #e2e2e2;padding:10px;margin-top:5px}
#coupon_area .coupon_box:first-child{position:relative;background-color:#fff;border:1px solid #e2e2e2;padding:10px;margin-top:0px}
#coupon_area .coupon_box.disable{background-color:#f3f3f3}
#coupon_area .coupon_box.disable .coupon_down{background-color:#666}
#coupon_area .coupon_box.disable .btn_coupon_down{border:1px solid #666}
#coupon_area .coupon_box.disable .btn_coupon_down,#coupon_area .coupon_box.disable .coupon_amount strong,#coupon_area .coupon_box.disable .coupon_dday strong,#coupon_area .coupon_box.disable h4{color:#666!important}
#coupon_area .coupon_box h4{font-size:17px;color:#000;margin-top:5px;margin-bottom:30px;letter-spacing:-1px;width:75%}
#coupon_area .coupon_box dl{font-size:13.33px;line-height:14px;color:#666;padding-bottom:5px;width:72%}
#coupon_area .coupon_box dl dt{float:left;clear:both;width:78px;color:#000}
#coupon_area .coupon_note{color:#666;font-size:12px;line-height:14px;margin-left:0;margin-top:8px;width:72%}
#coupon_area .coupon_note .info_icon{display:inline-block;text-indent:-9999px;width:25px;height:25px;background:url(../img/icon_01.png)-119px -43px no-repeat #fff;background-size:150px 150px;line-height:28px;border-radius:125px;vertical-align:top;margin-right:5px}
#coupon_area .coupon_note p{position:relative;margin-left:8px;font-size:12px}
#coupon_area .coupon_note p span{position:absolute;left:-8px}
#coupon_area .coupon_top{position:absolute;top:-18px;right:-1px}
#coupon_area .coupon_amount span{display:inline-block;bottom:11px;right:10px;color:#fff;text-align:center}
#coupon_area .coupon_amount span em{color:#fff;font-size:20px}
#coupon_area .coupon_amount{display:inline-block;font-weight:900;color:#fff;padding:4px 8px;z-index:2;text-align:center;margin-right:-5px;font-size:12px}
#coupon_area .coupon_dday span{display:inline-block;bottom:11px;right:10px;color:#fff;text-align:center}
#coupon_area .coupon_dday span em{color:#fff;font-size:20px}
#coupon_area .coupon_dday{display:inline-block;font-weight:900;color:#fff;padding:4px 8px;z-index:2;text-align:center;font-size:12px}
#coupon_area .coupon_right{position:absolute;top:5px;right:5px}
#coupon_area .coupon_right .coupon_amount{display:inline-block;position:relative;width:60px;font-weight:900;color:#333;padding:3px 8px 1px;z-index:2;text-align:center;font-size:12px}
#coupon_area .coupon_right .coupon_amount span{display:inline-block;color:#333;width:60px;text-align:right}
#coupon_area .coupon_right .coupon_amount strong{color:#e4361a;font-size:20px}
#coupon_area .coupon_right .coupon_dday{display:block;position:relative;width:60px;font-weight:900;color:#333;padding:3px 8px 1px;z-index:2;text-align:center;font-size:12px}
#coupon_area .coupon_right .coupon_dday span{display:inline-block;color:#333;width:60px;text-align:right}
#coupon_area .coupon_right .coupon_dday strong{color:#e4361a;font-size:20px}
#coupon_area .tooltips_cls{background-color:#fff}
#coupon_area .tooltips_cls span{color:#666;height:15px;line-height:15px;text-align:center;border-radius:6px;border:1px solid #666;padding:2px 5px;font-size:10.5px;visibility:visible;top:-25px;left:10px;z-index:999}
.btn_area a.btn_coupon_down,.btn_area a.btn_coupon_fin{height:50px;line-height:10px;border-radius:3px;font-size:12px}
.coupon_box_expiration span,.coupon_box_finishuse span,.coupon_box_soldout span,.coupon_box_storecancle span{bottom:6px;color:#fff;font-size:17px}
.btn_area a.btn_coupon_down{position:absolute;right:10px;bottom:10px;width:70px;border:1px solid;color:<?php echo $color_type;?>;text-align:center}
.btn_area a.btn_coupon_fin{position:absolute;right:10px;bottom:10px;width:70px;color:#999;text-align:center}
.btn_area .btn_c{display:inline-block;text-indent:-9999px;width:25px;height:25px;background:url(../img/btn_01.png)no-repeat;background-size:100px 100px;background-color:<?php echo $color_type;?>;line-height:28px;border-radius:125px;margin:5px}
.coupon_box_expiration span,.coupon_box_finishuse span,.coupon_box_soldout span,.coupon_box_storecancle span{display:block;line-height:60px;margin:-5px 0 0}
.btn_area .btn_c.coupon_down{background-position:-72px 3px;background-color:<?php echo $color_type;?>}
.btn_area .btn_c.coupon_fin{background-position:-72px -16px;background-color:#999}
.coupon_box_expiration{position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(255,255,255,.5);z-index:20;text-align:center;overflow:hidden}
.coupon_box_expiration span{position:absolute;width:100%;height:60px;background-color:rgba(102,102,102,.8);text-align:center}
.coupon_box_finishuse{position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(255,255,255,.5);z-index:20;text-align:center;overflow:hidden}
.coupon_box_finishuse span{position:absolute;width:100%;height:60px;background-color:rgba(102,102,102,.8);text-align:center}
.coupon_box_soldout{position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(255,255,255,.5);z-index:20;text-align:center;overflow:hidden}
.coupon_box_soldout span{position:absolute;left:0;width:100%;height:60px;background-color:rgba(102,102,102,.8);text-align:center}
.coupon_box_storecancle{position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(255,255,255,.5);z-index:20;text-align:center;overflow:hidden}
.coupon_box_storecancle span{position:absolute;width:100%;height:60px;background-color:rgba(102,102,102,.8);text-align:center}
#delilink_area .store_detail mark{position:absolute;left:0;top:-27px;float:none;width:70px;height:14px;line-height:14px;text-indent:0;background-color:rgba(0,0,0,.45);border-radius:3px;color:#FFF;font-size:11px;font-weight:700;padding:2px 6px;vertical-align:3px;text-align:center;letter-spacing:-1px;text-transform:uppercase;white-space:nowrap;text-decoration:none}
#delilink_area .store_detail .delilink_icon_01{background-color:rgba(192,57,43,1);border-top:1px solid rgba(192,57,43,1)}
#delilink_area .store_detail .delilink_icon_02{background-color:rgba(230,126,34,1);border-top:1px solid rgba(230,126,34,1)}
#delilink_area .store_detail .delilink_icon_03{background-color:rgba(39,174,96,1);border-top:1px solid rgba(39,174,96,1)}
#delilink_area .store_detail .delilink_icon_04{background-color:rgba(149,165,166,1);border-top:1px solid rgba(149,165,166,1)}
#delilink_area .store_detail .delilink_icon_05{background-color:rgba(52,152,219,1);border-top:1px solid rgba(52,152,219,1)}
#delilink_area .store_detail .delilink_icon_06{background-color:rgba(52,73,94,1);border-top:1px solid rgba(52,73,94,1)}
#delilink_area .store_detail .delilink_icon_07{background-color:rgba(189,195,199,1);border-top:1px solid rgba(189,195,199,1)}
#delilink_area .store_detail .delilink_icon_08{font-size:10px;background-color:rgba(155,89,182,1);border-top:1px solid rgba(155,89,182,1)}
#delilink_area .store_detail .delilink_icon_09{background-color:rgba(241,196,15,1);border-top:1px solid rgba(241,196,15,1)}
#adress_area,#delilink_area,#inquiry_area,#memeber_form_area,#memeber_form_area .memeber_form_result,.login_area{border-top:1px solid #e2e2e2}
#delilink_area{background-color:#fff}
#delilink_area .store_detail{position:relative;padding:15px 0 5px}
#delilink_area .store_detail:last-child{border-bottom:none}
#delilink_area .store_detail h4{display:inline-block;font-size:17px;margin-top:-4px;margin-bottom:5px}
#delilink_area .delilink_more{position:absolute;top:24px;right:3px;display:block;color:#fff;font-size:12px;width:50px;height:40px;background:url(../img/btn_01.png)-86px 0 no-repeat;background-size:180px 180px;text-align:center;text-indent:-9999px;z-index:999}
#footer.footer,.footer,.footer.footer01,.footer.footer02{color:#fff;z-index:1}
#delilink_area .review_top{margin-bottom:3px}
#delilink_area .review_top .star{display:inline-block;width:12px;height:12px;text-indent:-9999px;background:url(../img/contents_01.png)no-repeat;line-height:14px;margin-right:-3px}
#delilink_area .review_top .star_active{background-size:100px 100px;background-position:-7px -7px}
#delilink_area .review_top .star_inert{background-size:100px 100px;background-position:-31px -7px}
#delilink_area .store_detail .review_top p{display:inline-block;margin:0 0 0 5px;line-height:14px}
#delilink_area .store_introduce dd,#m_footer p{line-height:15px}
#delilink_area .thumb{position:relative;float:left;background:url(../img/sample/storedetail_sample.png)no-repeat;margin:24px 10px 10px;border-radius:5px;-moz-border-radius:10px;-webkit-border-radius:10px;border:1px solid #e2e2e2;width:82px;height:82px;background-size:70px 70px;-webkit-background-size:70px 70px;text-indent:-9999px}
#m_footer,.footer{background:rgba(0,0,0,.5)}
#delilink_area .store_detail dl{position:absolute;left:105px;display:inline-block;margin-bottom:0;width:63%;box-sizing:border-box}
#delilink_area .store_detail dl,#m_footer{-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
#delilink_area .store_detail dt i{font-size:16px}
#delilink_area .store_detail dt:first-child{width:15px}
#delilink_area .store_detail dt{float:left;width:72px;color:#333;font-weight:700}
#delilink_area .store_detail dt:last-child{display:none}
#delilink_area .store_detail dd span.link_data01{display:inline-block;width:90%;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}
#delilink_area .store_detail dd span.link_data02{width:100%;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;word-wrap:break-word}
#delilink_area .store_introduce dt:first-child{margin:6px 0 3px}
#delilink_area .store_introduce dt{clear:both;width:100%;color:grey;margin:10px 0 3px;font-weight:600}
#delilink_area .store_detail .store_introduce dt{letter-spacing:normal}
#m_footer{position:fixed;bottom:0;left:0;text-align:center;width:100%;padding:7px 0;color:#fff;z-index:1}
#mycoupon_area,.footer.footer01,.footer.footer02{position:relative}
#m_footer p{margin:0;padding:0;font-size:11px;font-weight:600}
.footer{width:100%;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
#footer.footer{text-align:center;margin:0 auto;width:100%;background:#a3a3a3;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
#footer.footer p{font-size:12px;line-height:18px;}
.footer.footer01{text-align:center;margin:0 auto;width:100%;background:rgba(0,0,0,.5);height:70px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
.footer.footer01 p{margin:0;font-size:11px;line-height:14px}
.footer.footer01 p:first-child{padding-top:14px!important}
.footer strong{display:block;text-align:left;margin:3px}
.footer.footer02{height:88px}
.footer .footer02_wrap{display:inline-block;margin:0 auto;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;padding-top:10px}
.footer .footer02_wrap:after{content:".";display:block;height:0;clear:both;visibility:hidden}
.footer .footer02_wrap p{float:left;display:inline-block;text-align:left;font-size:11px;font-weight:600;line-height:13px}
.footer .footer02_wrap p.f_01{padding-right:5px}
.footer.footer02{text-align:center;margin:0 auto;width:100%;background:rgba(0,0,0,.5);box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
.footer.footer02 p{margin:0;font-size:11px}
#mycoupon_area .coupon_box{position:relative;background-color:#fff;border:1px solid #e2e2e2;padding:10px;margin-top:5px}
#mycoupon_area .coupon_box .mycoupon_top{position:absolute;top:44px;left:90px}
#mycoupon_area .coupon_box .mycoupon_top .coupon_amount,#mycoupon_area .coupon_box .mycoupon_top .coupon_dday{display:inline-block;position:relative;color:#333;width:94px;height:20px;line-height:15px;text-align:center;vertical-align:baseline;padding:3px 0 4px;font-size:10.5px}
#mycoupon_area .coupon_box .mycoupon_top .coupon_amount{border-right:1px solid #e2e2e2}
#mycoupon_area .coupon_box .mycoupon_top .coupon_amount em,#mycoupon_area .coupon_box .mycoupon_top .coupon_dday em{display:inline-block;position:absolute;left:5px;line-height:11px;text-align:left}
#mycoupon_area .coupon_box .mycoupon_top .coupon_amount span,#mycoupon_area .coupon_box .mycoupon_top .coupon_dday span{display:inline-block;vertical-align:30px;margin-top:3px;text-align:center;width:70px;margin-left:18px}
#mycoupon_area .coupon_box .mycoupon_top .coupon_amount strong,#mycoupon_area .coupon_box .mycoupon_top .coupon_dday strong{font-size:18px;color:rgba(198,77,75,1)}
#mycoupon_area .coupon_box .thumb{display:inline-block;background:url(../img/sample/storedetail_sample.png)no-repeat;margin:8px 10px 8px 0;border-radius:5px;-moz-border-radius:10px;-webkit-border-radius:10px;border:1px solid #e2e2e2;width:75px;height:75px;background-size:75px 75px;-webkit-background-size:75px 75px;text-indent:-9999px}
#mycoupon_area .coupon_box:last-child{margin-bottom:5px}
#mycoupon_area .coupon_box h4{font-size:17px;color:#000;margin-top:5px;letter-spacing:-1px;width:75%}
#mycoupon_area .coupon_box dl{position:absolute;top:80px;left:95px;font-size:13.33px;line-height:14px;color:#666;width:65%;clear:both}
#mycoupon_area .coupon_box dl dt{float:left;clear:both;width:76px;color:#262626;font-weight:900}
.login_area .login_btn_area .btn_b_login,.login_area .login_btn_area .btn_id,.login_area .login_btn_area .btn_pw{border-radius:5px;box-sizing:border-box;background:linear-gradient(#fff,#e9e9e9);border:1px solid #acacac;font-weight:700}
#mycoupon_area .coupon_box dl dd{color:#333}
#mycoupon_area .coupon_box dl dd strong{color:<?php echo $color_type;?>}
#mycoupon_area .coupon_box .coupon_note{color:#666;line-height:14px;margin-left:0;padding-top:8px;width:100%;border-top:1px solid #e2e2e2}
#mycoupon_area .coupon_box .coupon_note p{position:relative;margin-left:8px;font-size:12px}
#mycoupon_area .coupon_box .coupon_note p span{position:absolute;left:-8px}
#mycoupon_area .coupon_box .coupon_top{position:absolute;top:-18px;right:-1px}
#mycoupon_area .coupon_box.disable{background-color:#f3f3f3}
#mycoupon_area .coupon_box.disable .coupon_down{background-color:#666}
#mycoupon_area .coupon_box.disable .btn_coupon_down{border:1px solid #666}
#mycoupon_area .coupon_box.disable .coupon_amount strong,#mycoupon_area .coupon_box.disable .coupon_dday strong,#mycoupon_area .coupon_box.disable dl dd,#mycoupon_area .coupon_box.disable h4,#mycoupon_area .coupon_box04.disable .btn_coupon_down{color:#666!important}
.emptypage i,.emptypage strong em,.stop_service_area strong em{color:<?php echo $color_type;?>}
#inquiry_area{background-color:#fff;padding:0 10px;height:100%}
#inquiry_area .inquiry_box{width:100%;background-color:#fff}
#inquiry_area .inquiry_box table{width:100%;margin:10px 0}
#inquiry_area .inquiry_box .user_photo_s{display:block;margin:0 10px 0 0;background-color:#e9e9e9;width:60px;height:60px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px dotted #d2d2d2;background-size:40px 39px;-webkit-background-size:40px 39px;text-indent:-9999px}
#inquiry_area .inquiry_box table th{text-align:left}
#inquiry_area .inquiry_box table td{height:40px;padding:0 10px 0 0}
#inquiry_area .inquiry_box table tr:last-child td:last-child{padding-top:1px}
#inquiry_area .inquiry_box table tr:last-child th{vertical-align:top;padding-top:12px}
#inquiry_area .inquiry_box table .btn_area{padding:0}
#inquiry_area .inquiry_btn_area{padding:0 20px 20px;text-align:center}
#inquiry_area textarea{padding-top:11px;resize:none}
.emptypage{width:100%;height:200px;padding:10% 0 0}
.emptypage i{display:block;margin:0 auto;width:40px;height:40px;line-height:40px;font-size:30px;border:2px solid;border-radius:5px;text-align:center}
.emptypage strong{display:block;margin-top:15px;text-align:center;font-size:18px}
.emptypage span{display:block;margin-top:5px;text-align:center;font-size:12px;color:#666}
.stop_service_area{overflow:hidden;position:absolute;top:50%;left:50%;width:300px;height:auto;margin:-120px 0 0 -150px;padding:30px 0;background:#fff;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;background-color:rgba(255,255,255,1);z-index:2006}
.stop_service_area i{display:block;margin:0 auto;width:60px;height:60px;line-height:60px;color:<?php echo $color_type;?>;font-size:50px;border:2px solid;border-radius:5px;text-align:center}
.stop_service_area strong{display:block;margin-top:15px;text-align:center;font-size:22px}
.stop_service_area span{display:block;margin-top:5px;text-align:center;font-size:14px;color:#666}
.stop_service_area span em{color:<?php echo $color_type;?>}
.stop_service_bg{position:fixed;top:0;left:0;background-color:#000;opacity:.4;width:100%;height:100%;text-indent:-9999px;z-index:2005}
.login_area{background-color:#fff;width:100%;height:100%;text-align:center}
.login_area .login_cont{display:table;width:100%;height:30px;padding:10px 15px 5px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
.login_area .login_cont dl{display:table-cell;width:100%;text-align:left;padding-right:10px}
.login_area .login_cont dl .l_id,.login_area .login_cont dl .l_pw{display:none}
.login_area .login_cont div.login_btn_m{display:talbe-cell;width:80px}
.login_area dl dd:first-of-type{margin:0 0 5px}
.login_area dl dd:last-of-type{margin:0 0 8px}
.login_area .l_btn{display:block;position:relative;font-size:12px;text-align:center;width:100%;height:77px;border-radius:5px;background-color:#eaeaea;border:1px solid #acacac;font-weight:700;vertical-align:2px}
.login_area .l_btn p{width:25px;height:35px;margin:10px auto 0;background:url(../img/pop_01.png)1px -44px no-repeat;background-size:250px 250px;text-indent:-9999px}
.login_area .l_btn span{display:inline-block;margin-top:3px}
.login_area .l_auto{position:relative;display:block;margin:0 15px 10px;text-align:left;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
.login_area .l_auto p.l_find{display:inline-block;position:absolute;right:0}
.login_area .l_auto p.l_find a{border-bottom:1px solid #999;font-size:13px}
.login_area .l_auto p.l_find a.btn_id{margin-right:5px}
.login_area .l_auto label{font-size:13px}
.login_area .login_btn_area{width:100%;text-align:center;padding:10px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
.login_area .login_btn_area .btn_id,.login_area .login_btn_area .btn_pw{display:inline-block;width:45%;text-align:center;-moz-border-radius:5px;-webkit-border-radius:5px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
.login_area .login_btn_area .btn_b_login{display:inline-block;width:48%;text-align:left;-moz-border-radius:5px;-webkit-border-radius:5px;padding:6px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;line-height:22px;font-size:12px;margin-bottom:5px}
.login_area .login_btn_area .btn_b_login:last-child{width:97%;padding:10px 6px;margin-top:12px;text-align:center}
.login_area .login_btn_area .btn_gra{display:inline-block;background:url(../img/pop_01.png)no-repeat;background-size:120px 120px;width:22px;height:22px;text-indent:-9999px;margin-right:5px}
.login_area .login_btn_area .btn_kakao{background-position:0 0}
.login_area .login_btn_area .btn_naver{background-position:-63px 0}
.login_area .login_btn_area .btn_google{background-position:-42px 0}
.login_area .login_btn_area .btn_facebook{background-position:-85px 0}
.login_area .login_btn_area .btn_join{background-position:-21px 0}
#memeber_form_area{background-color:#fff;border-bottom:1px solid #e2e2e2;padding:0 10px;height:100%}
#memeber_form_area .id_info{padding:10px 10px 0;clear:both}
#memeber_form_area .id_info:after{clear:both}
#memeber_form_area .id_info i{float:left;display:inline-block;background-color:<?php echo $color_type;?>;width:18px;height:18px;border-radius:10px;color:#fff;text-align:center;vertical-align:top;line-height:19px;font-size:11px}
#memeber_form_area .id_info p{display:inline-block;text-align:left;vertical-align:-1px;font-size:12px;margin:0 0 0 5px;width:90%}
#memeber_form_area .id_info p em{color:<?php echo $color_type;?>}
#memeber_form_area .memeber_form_box{position:relative;width:100%;background-color:#fff}
#memeber_form_area .memeber_form_box table{width:100%;margin:10px 0}
#memeber_form_area .memeber_form_box .user_photo_s{display:block;margin:0 10px 0 0;background-color:#e9e9e9;width:60px;height:60px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px dotted #d2d2d2;background-size:40px 39px;-webkit-background-size:40px 39px;text-indent:-9999px}
#memeber_form_area .memeber_form_box table th{text-align:left;padding:0 0 0 10px}
#memeber_form_area .memeber_form_box table td{height:40px;padding:0 10px 0 0}
#memeber_form_area .memeber_form_box table tr:last-child td:last-child{padding-top:1px}
#memeber_form_area .memeber_form_box table .btn_area{padding:0}
#memeber_form_area .memeber_form_btn_area{padding:0 20px 20px;text-align:center}
#memeber_form_area .memeber_form_result{margin:5px 10px;padding:20px 0 5px;border-bottom:1px solid #e2e2e2}
#memeber_form_area .memeber_form_result h4{font-weight:900}
#memeber_form_area .memeber_form_result p{margin:5px 0;padding:8px 0;color:#666}
#memeber_form_area .memeber_form_result p span{color:<?php echo $color_type;?>;font-weight:900;font-size:18px}
#memeber_form_area .memeber_form_result p span em{color:#333}
#memeber_form_area .memeber_form_result label{display:inline-block;color:<?php echo $color_type;?>;font-weight:900;font-size:18px}
#memeber_form_area .memeber_form_result p label em{font-weight:400;color:#333}
#memeber_form_area .memeber_form_guide{margin:5px 10px 0;padding:10px 0;font-size:12px}
#memeber_form_area .memeber_form_guide p{font-size:13px}
#memeber_form_area .memeber_form_guide p span{display:inline-block;width:55px}
#memeber_form_area .memeber_form_guide p i{display:inline-block;width:20px}
#adress_area{background-color:#fff;height:100%}
#adress_area .adress_info{display:block;padding:10px 10px 0;background-color:#fff}
#adress_area .adress_info i{float:left;display:inline-block;background-color:<?php echo $color_type;?>;width:18px;height:18px;border-radius:10px;color:#fff;text-align:center;vertical-align:top;line-height:19px;font-size:11px}
#adress_area .adress_info p{display:inline-block;text-align:left;vertical-align:-1px;font-size:12px;margin:0 0 0 5px;width:90%}
#adress_area .adress_info p em{color:<?php echo $color_type;?>}
#adress_area .adress_search_box{display:table;width:100%;background-color:#fff;padding:5px 15px 10px;border-bottom:1px solid #e2e2e2;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
#adress_area .adress_search_box .adress_cont{display:table-cell;background-color:#fff;padding-right:10px}
#adress_area .adress_search_box .adress_btn_area{display:table-cell;width:60px;text-align:right;vertical-align:middle}
#adress_area .adress_search_box .adress_btn_area a.gray_btn_b{display:block;text-align:center;width:60px}
#adress_area .adress_cont .a_adress{display:none}
#adress_area .adress_cont a{margin:13px 0 0 10px}
#adress_area .adress_cont .a_btn span{line-height:10.33em;text-align:center}
#adress_area .adress_result{margin:5px 0;padding:5px 0}
#adress_area .adress_result h4{font-weight:900;margin:0 10px}
#adress_area .adress_result .adress_select{position:relative;margin:8px 15px;padding:0 0 10px;border-bottom:1px dotted #aeaeae}
#adress_area .adress_result .adress_select:last-child{border-bottom:0 dotted #aeaeae}
#adress_area .adress_result .adress_select span,#adress_area .adress_select p{display:inline-block;font-size:12px;color:grey;line-height:20px}
#adress_area .adress_result .adress_select span{color:#000;font-weight:600}
#adress_area .adress_result .adress_select p{margin:0 0 0 5px}
#adress_area .adress_result .adress_select a{position:absolute;top:-3px;right:0}
#join_area{background-color:#fff;border-bottom:1px solid #e2e2e2}
#join_area .subtitle{height:35px;color:#000;font-size:14px;line-height:36px;padding:0 0 0 10px;border-top:1px solid #cdcdcd;border-bottom:1px solid #cdcdcd;background-color:#f5f5f5}
#join_area .box_join01{width:100%;background-color:#fff}
#join_area .box_join01 table{width:100%;margin:10px 0}
#join_area .box_join01 .user_photo_s{display:block;background:url(../img/icon_01.png)-153px -225px no-repeat #e9e9e9;margin:0 10px 0 0;width:70px;height:70px;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;border:1px solid #e2e2e2;background-size:300px 300px;-webkit-background-size:300px 300px;text-indent:-9999px}
#join_area .box_join01 table th{text-align:left;padding:0 0 0 10px}
#join_area .box_join01 table td{height:40px;padding:0 10px 0 0}
#join_area .box_join01 table .btn_area{padding:0}
#join_area .box_join02{position:relative;width:100%;padding:0 0 10px}
#join_area .box_join02 table{width:100%;margin:0}
#join_area .box_join02 table th{text-align:left;padding:0 0 0 10px}
#join_area .box_join02 table td{height:40px;padding:0 10px 0 0}
#join_area .box_join02 table .btn_area{padding:0}
#join_area .box_join03{position:relative}
#join_area .box_join03 h5{margin:5px 0}
#join_area .box_join03 .bdp_terms{position:relative}
#join_area .box_join03 span.input_chk{display:block;position:relative;margin:10px 0 15px}
#join_area .box_join03 p{display:inline-block;margin:5px 0 5px 5px;font-size:13px;vertical-align:middle}
#join_area .box_join03 .terms_chk_all{position:relative;border-bottom:1px solid #e2e2e2;padding:10px}
#join_area .box_join03 .terms_chk_all .btn_area{position:absolute;top:16px;right:10px;vertical-align:middle}
#join_area .box_join03 .terms_chk_all .btn_area .btn_terms_view{display:inline-block;width:50px;height:30px;border:1px solid #333;border-radius:3px;color:#333;background-color:#fff;text-align:center;font-size:12px;line-height:22px;vertical-align:-5px}
#join_area .box_join03 .terms_chk_all .btn_area .btn_terms_view i{display:block;font-size:18px;margin-top:-7px}label.select:after,label.select:before{position:absolute;top:2px;display:inline-block}
#join_area .box_join03 .sub_cont01,#join_area .box_join03 .sub_cont02,#join_area .box_join03 .sub_cont03{padding:10px 10px 0}
#join_area .box_join03 .sub_cont01 .btn_area,#join_area .box_join03 .sub_cont02 .btn_area,#join_area .box_join03 .sub_cont03 .btn_area{position:absolute;top:18px;right:10px}
#join_area .box_join03 .sub_cont01,#join_area .box_join03 .sub_cont02{position:relative;background-color:#fff;font-size:14px;font-weight:600}
#join_area .box_join03 .sub_cont03{position:relative;background-color:#fff;font-size:14px;font-weight:600;border-bottom:1px solid #e2e2e2;padding-bottom:15px}
#join_area .box_join03 .join_btn_area{padding:20px;text-align:center}
#join_area .box_join03 .terms_view{height:80px;overflow-x:hidden;border:1px solid #e2e2e2;padding:10px;font-size:12px}
#join_area .box_join03 .terms_view .terms_scroll{overflow-y:scroll}
#join_area .box_join03 .godropout{padding:0 5px 10px}
#join_area .box_join03 .godropout a{color:#c44b49;margin-left:5px}
#join_area .box_join03 .godropout a i{margin-left:5px;font-size:16px}
#serviceinfo_area .serviceinfo_cont{padding:0 10px 10px}
#servicecompany_area .servicecompany_cont p,#serviceinfo_area .serviceinfo_cont p{padding:10px}
#serviceinfo_area .serviceinfo_cont em{color:<?php echo $color_type;?>;text-decoration:underline}
#serviceinfo_area .serviceinfo_cont strong{color:#000}
#serviceinfo_area .serviceinfo_cont strong.promotion_title{color:<?php echo $color_type;?>}
#serviceinfo_area .serviceinfo_cont p:nth-of-type(2){border-bottom:1px solid #e2e6eb;border-top:1px solid #e2e6eb}
#servicecompany_area{position:relative;padding:10px;height:100%;border-top:1px solid #e2e2e2;border-bottom:1px solid #e2e2e2;background-color:#fff;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
#servicecompany_area .servicecompany_cont p a{text-decoration:underline}
#servicecompany_area .servicecompany_cont em{color:<?php echo $color_type;?>;text-decoration:underline}
#servicecompany_area .servicecompany_cont strong{color:#000}
#servicecompany_area .servicecompany_cont strong.promotion_title{color:<?php echo $color_type;?>}
#servicecompany_area .servicecompany_cont p:nth-of-type(2){border-bottom:1px solid #e2e6eb;border-top:1px solid #e2e6eb}select{background:linear-gradient(#fff,#e9e9e9);border:1px solid #acacac;font-weight:700;font-size:14px;padding:4px 18px 4px 2px;display:inline-block;-moz-appearance:none;border-radius:0!important;cursor:pointer}label.select{position:relative;height:28px;margin:0 2px 0 0;text-overflow:ellipsis}label.select:after{content:'\f107';font-family:FontAwesome;font-size:18px;color:#666;right:8px;pointer-events:none;line-height:15px}label.select:before{content:'';background:#f8f8f8;right:5px;pointer-events:none;width:100%}::-webkit-input-placeholder{color:#999;font-size:12px}:-moz-placeholder{color:#999;font-size:12px}::-moz-placeholder{color:#999;font-size:12px}:-ms-input-placeholder{color:#999}input{-webkit-border-radius:1px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;color:#666;height:35px;padding:0 0 0 5px;line-height:35px}input,textarea{letter-spacing:-1px;border:1px solid #b8b8b8;font-size:12px;box-sizing:border-box}textarea{color:#666;padding:5px 0 0 5px;overflow-x:hidden;overflow-y:auto;vertical-align:middle;resize:none;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}input.typered[type=checkbox]+label,input.typered[type=radio]+label,input[type=checkbox]+label{padding:0 5px 0 0}input.typered[type=checkbox]{display:none}input.typered[type=checkbox]:checked+label span{background:url(../img/form_01.png)no-repeat;background-size:170px 170px}input.typered[type=checkbox]+label span{display:inline-block;width:20px;height:20px;line-height:20px;margin:-1px 0 0;vertical-align:middle;background:url(../img/form_01.png)-21.5px 0 no-repeat;background-size:170px 170px;cursor:pointer}input[type=checkbox]+label span,input[type=radio]+label span{background-size:20px 20px;display:inline-block;margin:-1px 4px 0 0}input.typered[type=radio]{display:none}input.typered[type=radio]+label span{display:inline-block;width:20px;height:20px;margin:-1px 4px 0 0;vertical-align:middle;background:url(../img/form_01.png)0 -23px no-repeat;background-size:170px 170px;cursor:pointer}input.typered[type=radio]:checked+label span{background:url(../img/form_01.png)-21px -23px no-repeat;background-size:170px 170px}input[type=checkbox],input[type=radio]{display:none}input[type=checkbox]+label span{width:2px;height:20px;vertical-align:middle;-webkit-background-size:20px 20px;cursor:pointer}input[type=checkbox]:checked+label span{background-size:20px 20px}input[type=radio]+label span{width:20px;height:20px;vertical-align:middle;-webkit-background-size:20px 20px;cursor:pointer}input[type=radio]:checked+label span{background-size:20px 20px;-webkit-background-size:20px 20px}
#mypagelist_notice_area.section{position:relative;border-top:1px solid #e2e2e2;font-size:12px;line-height:normal;zoom:1}
#mypagelist_notice_area h3{height:35px;color:#000;font-size:14px;line-height:36px;padding:0 0 0 10px;border-top:1px solid #cdcdcd;border-bottom:1px solid #cdcdcd;background-color:#f5f5f5;margin-bottom:0}
.u_pg_btn,.u_pg_cnt,.u_pg_txt{line-height:1em}
#mypagelist_notice_area h3:after{content:"";display:block;clear:both;background-color:transparent}
#mypagelist_notice_area h3:first-child{margin-top:-1px}
#mypagelist_notice_area dl+h3{margin-top:5px}
#mypagelist_notice_area.section .hx{display:block;font-size:14px;position:relative;padding:13px;border-bottom:1px solid #e2e2e2;background-color:#fbfbfb;color:#555}
#mypagelist_notice_area.section .hx span{position:absolute;right:5px;content:'\f107';font-family:FontAwesome;font-size:16px;width:20px;height:20px}
#mypagelist_notice_area.section .hx span:before{content:'\f107';font-family:FontAwesome;font-size:16px;width:20px;height:20px;text-indent:9999px}
#mypagelist_notice_area.section .hx.select span:before{content:'\f106';font-family:FontAwesome;font-size:16px;width:20px;height:20px;text-indent:9999px}
#mypagelist_notice_area.section .hx p{display:inline-block;position:absolute;right:40px}
#mypagelist_help_area .hx span,#mypagelist_help_area .hx.select span{background-size:20px 20px;position:absolute;display:block;right:10px}
#mypagelist_notice_area.section .tx{padding:10px;border-bottom:1px solid #e2e2e2;color:#666;background-color:#eaeaea}
#mypagelist_notice_area.section .tx span{color:#006400}
#mypagelist_notice_area.section .section_more{position:absolute;top:12px;left:40px;font-size:12px;color:#656565;text-decoration:none!important}
#mypagelist_notice_area.section .section_more span{font-size:14px;color:#6e89aa}
.accordion-block{overflow:hidden;cursor:pointer}
.accordion-block dd{cursor:default}
#mypagelist_help_area .mlist_help_q.unselect:active,#mypagelist_help_area .mlist_help_q.unselect:focus,#mypagelist_help_area .mlist_help_q.unselect:hover{background-color:#ededed}
#mypagelist_help_area .hx{display:block;position:relative;padding:15px;border-bottom:1px solid #d2d2d3;background-color:#fbfbfb;font-weight:600}
#popup_area .id_cont .i_btn,#popup_area .login_btn_area .btn_join,#popup_area .login_btn_area .btn_kakao,#popup_area .login_cont .l_btn,#popup_area .pw_cont .p_btn{border:1px solid #acacac;font-weight:700}
#mypagelist_help_area .hx.select{background-color:#f5f5f5}
#mypagelist_help_area .hx.select span{top:12px;width:20px;height:20px;-webkit-background-size:20px 20px;text-indent:-9999px;transform:rotate(180deg);-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);-moz-transform:rotate(180deg);-o-transform:rotate(180deg)}
#mypagelist_help_area .hx span{top:12px;width:20px;height:20px;-webkit-background-size:20px 20px;text-indent:-9999px;transform:rotate(90deg);-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);-moz-transform:rotate(90deg);-o-transform:rotate(90deg);border:1px solid red}
.u_pg,.u_pg_area,.u_pg_wrap{position:relative}
#mypagelist_help_area .tx{border-bottom:1px solid #d2d2d3;padding:15px;background-color:#eaeaea}
#mypagelist_help_area .title{background-color:#454652}
.u_pg,.u_pg_lod{background:#f4f4f4}
.u_pg{display:table;width:100%;height:45px;margin-top:-1px;border-top:1px solid #cecece;border-bottom:1px solid #cecece;text-align:center}
.u_pg_btn{display:table-cell;border-right:1px solid #cecece}
.u_pg_area{display:table;height:43px;margin:0 auto;padding-left:23px;background:url()0 10px no-repeat;font-size:1em}
.u_pg_lod,.u_pg_wrap{display:block}
.u_pg_lod{position:absolute;top:0;width:21px;height:43px;margin-left:-29px}
.u_pg_lodic,.u_pg_lodjs{display:inline-block;overflow:hidden;width:21px;height:22px;margin-top:11px;text-indent:-999em}
.u_pg_lodic{background:url(../img/ico_lod2.gif)50% 50% no-repeat}
.u_pg_lodjs{background:url(../img/ico_lod2_ngif.png)no-repeat}
.u_pg_txt{display:table-cell;padding-top:8px}
.u_pg_cnt{font-size:.79em;color:#666}
.u_pg_total{color:#a6a6a6}
.u_pg_end .u_pg_btn{background:#fafafa;-webkit-box-shadow:none}
.u_pg_end .u_pg_area{background:0 0}
.u_pg_top{display:table-cell;width:53px;padding-top:22px;background:url(../img/ico_pg.gif)21px -28px no-repeat;background-size:10px 47px;font-size:.8em;color:#707070;vertical-align:top}
.dialog-layer{background-color:transparent!important;top:50px!important}
.dialog-fog{opacity:.7!important;background-color:#000!important}
#popup_area.popup_center{position:relative;top:40px}
#popup_area{width:300px;overflow:hidden;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;padding-bottom:5px;background-color:#fff}
#popup_area .pop_title{height:40px;line-height:40px;background-color:#fff;color:<?php echo $color_type;?>;text-align:center;margin-top:5px;border-radius:10px 10px 0 0;-moz-border-radius:10px 10px 0 0;-webkit-border-radius:10px 10px 0 0;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}
#popup_area .pop_title h3.title{display:inline-block;font-size:20px;text-align:center;margin-top:1px;border:0;color:#333;padding:0}
#popup_area .pop_title .title:after{content:"";display:block;clear:both;background-color:transparent}
#popup_area .pop_title .close{position:absolute;top:5px;right:5px;margin:0;width:40px;height:38px;z-index:2001}
#popup_area .pop_title .close i{font-size:28px}
#popup_area .pop_title .close i:last-child{margin-left:-3px}
#popup_area .login_cont{width:100%}
#popup_area .login_cont .l_id,#popup_area .login_cont .l_pw{visibility:hidden;overflow:hidden;position:absolute;left:-999em;width:0;height:0;font-size:0}
#popup_area .login_cont dd{float:left;width:62%}
#popup_area .login_cont dd:first-of-type{margin:10px 0 5px 10px}
#popup_area .login_cont dd:last-of-type{margin:0 0 10px 10px}
#popup_area .login_cont .l_btn{display:inline-block;font-size:12px;text-align:center;width:83px;height:75px;margin:10px 0 10px 10px;background-size:30px 30px;background-color:#eaeaea;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px}
#popup_area .login_cont .l_btn span{line-height:8.3em}
#popup_area .l_auto{display:inline-block;margin:0 0 5px 10px}
#popup_area .login_btn_area{width:100%;text-align:center;padding:0 0 10px}
#popup_area .login_btn_area .btn_id,#popup_area .login_btn_area .btn_pw{display:inline-block;width:45%;text-align:center;background:linear-gradient(#fff,#e9e9e9);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #acacac;padding:5px;font-weight:700;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
#popup_area .login_btn_area .btn_join{display:inline-block;width:92%;text-align:left;background:linear-gradient(#fff,#e9e9e9);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;padding:5px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;margin:5px 0 0}
#popup_area .login_btn_area .btn_join span{display:block;background-size:20px 20px;padding:5px 5px 5px 25px}
#popup_area .login_btn_area .btn_kakao{display:inline-block;width:92%;text-align:left;background:linear-gradient(#fff,#e9e9e9);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;padding:5px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;margin:5px 0 0}
#popup_area .login_btn_area .btn_kakao span{display:block;background-size:20px 20px;padding:5px 5px 5px 25px}
#popup_area .id_cont{width:100%}
#popup_area .id_cont .i_email,#popup_area .id_cont .i_name{visibility:hidden;overflow:hidden;position:absolute;left:-999em;width:0;height:0;font-size:0}
#popup_area .id_cont dd{float:left;width:62%}
#popup_area .id_cont dd:first-of-type{margin:10px 0 5px 10px}
#popup_area .id_cont dd:last-of-type{margin:0 0 10px 10px}
#popup_area .id_cont .i_btn{display:inline-block;font-size:10px;text-align:center;width:83px;height:75px;padding:0 15px;margin:10px 0 10px 10px;background-size:30px 30px;background-color:#eaeaea;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px}
#popup_area .id_cont .i_btn span{line-height:10.33em;text-align:center}
#popup_area .id_info{padding:10px;background-color:#f0f0f0;border-radius:0 0 10px 10px;-moz-border-radius:10px 0 10px 10px;-webkit-border-radius:0 0 10px 10px}
#popup_area .id_info span{display:inline-block;vertical-align:top;width:15px;height:15px;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;text-indent:-9999px;background-size:10px 10px;-webkit-background-size:10px 10px}
#popup_area .adress_info i,#popup_area .adress_info span{border-radius:10px;width:15px;height:15px;vertical-align:middle}
#popup_area .id_info p{display:inline-block;text-align:left;font-size:12px}
#popup_area .pw_cont{width:100%}
#popup_area .pw_cont .p_email,#popup_area .pw_cont .p_id,#popup_area .pw_cont .p_name{visibility:hidden;overflow:hidden;position:absolute;left:-999em;width:0;height:0;font-size:0}
#popup_area .pw_cont dd{float:left;width:62%}
#popup_area .pw_cont dd:first-of-type{margin:10px 0 5px 10px}
#popup_area .pw_cont dd:last-of-type{margin:0 0 10px 10px}
#popup_area .pw_cont .p_btn{display:inline-block;font-size:10px;text-align:center;width:83px;height:75px;padding:0 15px;margin:10px 0 10px 10px;background-size:30px 30px;background-color:#eaeaea;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px}
#popup_area .pw_cont .p_btn span{line-height:10.33em;text-align:center}
#popup_area .pw_info{padding:10px;background-color:#f0f0f0;border-radius:0 0 10px 10px;-moz-border-radius:10px 0 10px 10px;-webkit-border-radius:0 0 10px 10px}
#popup_area .pw_info span{display:inline-block;vertical-align:middle;width:15px;height:15px;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;text-indent:-9999px;background-size:10px 10px;-webkit-background-size:10px 10px}
#popup_area .pw_info p{display:inline-block;text-align:left;font-size:12px;width:90%}
#popup_area .adress_cont{width:100%}
#popup_area .adress_cont .a_adress{visibility:hidden;overflow:hidden;position:absolute;left:-999em;width:0;height:0;font-size:0}
#popup_area .adress_cont dd{float:left;width:69%}
#popup_area .adress_cont dd:first-of-type{margin:10px 0 0 10px}
#popup_area .adress_cont a{margin:13px 0 0 10px}
#popup_area .adress_cont .a_btn span{line-height:10.33em;text-align:center}
#popup_area .adress_info{padding:5px 10px;border-radius:0 0 10px 10px;-moz-border-radius:0 0 10px 10px;-webkit-border-radius:0 0 10px 10px}
#popup_area .adress_info i{display:inline-block;background-color:<?php echo $color_type;?>;color:#fff;text-align:center;line-height:15px;font-size:11px}
#popup_area .adress_info span{display:inline-block;-moz-border-radius:10px;-webkit-border-radius:10px;text-indent:-9999px;background-size:10px 10px;-webkit-background-size:10px 10px}
#popup_area .adress_info p{display:inline-block;text-align:left;font-size:12px;width:90%}
#popup_area .adress_info p:last-of-type{margin:0 0 0 18px}
#popup_area .adress_select{position:relative;padding:10px;border-top:1px solid #e2e2e2;height:28px}
#popup_area .adress_select:last-child{border-bottom:0 dotted #aeaeae}
#popup_area .adress_select p{display:inline-block;font-size:12px;color:grey;width:200px;margin:0 0 0 5px}
#popup_area .adress_select span{color:#000;font-weight:600;width:90px;vertical-align:top}
#popup_area .adress_select a{position:absolute;top:7px;right:10px}
#popup_area .shoutcut_area{padding:5px 10px 15px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
#popup_area .shoutcut_area .thumb{display:inline-block;background:url(../img/sample/storedetail_sample.png)no-repeat;border-radius:5px;-moz-border-radius:10px;-webkit-border-radius:10px;border:1px solid #e2e2e2;width:80px;height:80px;background-size:80px 80px;text-indent:-9999px;vertical-align:top}
#popup_area .shoutcut_area .shoutcut_btn_area{display:inline-block;width:180px;text-align:center;margin:4px 0 0 10px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
#popup_area .shoutcut_area .shoutcut_btn_area p{text-align:left;padding-bottom:8px;font-size:15px;line-height:17px}
#popup_area .shoutcut_area .shoutcut_btn_area a{display:inline-block;width:75px;text-align:center;background:linear-gradient(#fff,#e9e9e9);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #acacac;padding:4px;font-weight:700;line-height:22px;font-size:14px;margin-bottom:5px}
#popup_area .shoutcut_form .icon_check,#popup_area .shoutcut_form .icon_check.select{background-color:#fff;width:18px;height:18px;border-radius:6px;border:1px solid #666}
#popup_area .shoutcut_area .shoutcut_btn_area a:last-child{margin-left:5px}
#popup_area .shoutcut_area .shoutcut_info{margin-top:15px;text-align:left;font-size:13px;line-height:15px;letter-spacing:-1.5px}
#popup_area .shoutcut_area .shoutcut_info em{display:inline-block}
#popup_area .shoutcut_area .shoutcut_info i{display:inline-block;background-color:<?php echo $color_type;?>;width:15px;height:15px;border-radius:10px;color:#fff;text-align:center;line-height:15px;font-size:11px;margin-right:3px;vertical-align:top}
#popup_area .shoutcut_form{position:absolute;bottom:20px;right:10px}
#popup_area .shoutcut_form label{margin-right:5px}
#popup_area .shoutcut_form .icon_check{display:inline-block;text-indent:-9999px;padding:0;margin-right:3px}
#popup_area .shoutcut_form .icon_check.select{display:inline-block;padding:0;text-indent:0;color:<?php echo $color_type;?>;text-align:center;font-size:16px}
#popup_area .nonminfo_area{position:relative;padding:5px 10px 15px;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
#popup_area .nonminfo_area .nonminfo_info{text-align:left;font-size:15px;margin-top:8px}
#popup_area .nonminfo_area .nonminfo_info i{display:inline-block;background-color:<?php echo $color_type;?>;width:15px;height:15px;border-radius:10px;color:#fff;text-align:center;vertical-align:top;line-height:15px;font-size:11px}
#popup_area .nonminfo_area .nonminfo_info em{position:absolute;display:inline-block;padding-right:10px;line-height:16px}
#popup_area .nonminfo_area .nonminfo_info span{position:absolute;top:38px;left:32px;display:inline-block;padding-right:10px;line-height:16px;margin-top:10px;font-size:13px;letter-spacing:-1.5px}
#popup_area .nonminfo_area .nonminfo_btn_area{display:inline-block;width:100%;text-align:center;margin:55px 0 0;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box}
#popup_area .nonminfo_area .nonminfo_btn_area a{display:inline-block;width:110px;text-align:center;background:linear-gradient(#fff,#e9e9e9);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #acacac;padding:4px;font-weight:700;line-height:22px;font-size:14px;margin-bottom:5px}
#popup_area .nonminfo_area .nonminfo_btn_area a:last-child{margin-left:5px}
#popup_area .pop_checkingorder_ordercancel{display:inline-block;padding:12px}
#popup_area .pop_checkingorder_ordercancel h4{margin:0 0 5px;font-size:15px}
#popup_area .pop_checkingorder_ordercancel p{line-height:2em}
#popup_area .checkingorder_btn_area{width:100%;text-align:center;padding:0 0 10px}
#popup_area .checkingorder_btn_area .btn_confirmation{display:inline-block;width:91%;text-align:center;background:linear-gradient(#fff,#e9e9e9);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #acacac;padding:5px;font-weight:700;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;margin:0}
#popup_area .checkingorder_btn_area .btn_confirmation span{background-size:15px 15px;padding:5px 5px 5px 25px}
#popup_area .pop_checkingorder_cancellation{display:inline-block;padding:12px}
#popup_area .pop_checkingorder_cancellation p{line-height:1.5em}
#popup_area .checkingorder_btn_area .btn_phone{display:inline-block;width:91%;text-align:center;background:linear-gradient(#fff,#e9e9e9);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #acacac;padding:5px;font-weight:700;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;margin:0}
#popup_area .checkingorder_btn_area .btn_phone span{background-size:15px 15px;padding:5px 5px 5px 25px}
#refusalm_area{background-color:#fff;height:100%}
#refusalm_area .refusalm_info{width:85%;padding:20px 10px 20px 0;margin:0 auto}
#refusalm_area .refusalm_info p{text-align:left}
#refusalm_area .refusalm_info p:first-child{margin-bottom:10px}
#refusalm_area .refusalm_form{width:85%;padding:10px;margin:0 auto;border:1px solid #afafaf}
#refusalm_area .refusalm_form tr{margin-bottom:10px;height:80px}
#refusalm_area .refusalm_form tr:nth-of-type(2){margin-bottom:100px;height:80px;border-top:1px solid #afafaf}
#refusalm_area .refusalm_form tr:nth-of-type(2) th{text-align:center;letter-spacing:5px}
#refusalm_area .refusalm_form th{text-align:center;border-right:1px solid #afafaf;background-color:#f5f5f5}
#refusalm_area .refusalm_form td{padding:0 10px}
#refusalm_area .refusalm_form td label{display:block;line-height:25px;height:18px;margin:0 0 2px}
#refusalm_area .refusalm_form td label span{vertical-align:-5px}
#refusalm_area .refusalm_btn_area{padding:20px 0;text-align:center}
.btn_menu_zoom a{display:block;position:fixed;top:10px;right:10px;width:50px;height:50px;overflow:hidden;z-index:999!important}
.btn_menu_zoom a.move{top:20px!important}