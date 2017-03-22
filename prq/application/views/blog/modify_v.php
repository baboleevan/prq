<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
<h2>블로그 수정</h2>
<ol class="breadcrumb">
<li>
<a href="/">Home</a>
</li>
<li>
<a>블로그 관리</a>
</li>
<li class="active">
<strong>블로그 수정</strong>
</li>
</ol>
</div>
<div class="col-lg-2">

</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<?php 
$attributes = array(
'class' => 'form-horizontal', 
'id' => 'write_action'
);
echo form_open('/blog/modify/prq_store/board_id/', $attributes);
//echo form_open_multipart('/dropzone/upload', $attributes);
$mb_code=$this->input->post('mb_code',TRUE);
$prq_fcode=$this->input->cookie('prq_fcode',TRUE);
$mb_gcode=$this->input->cookie('mb_gcode',TRUE);

//echo $prq_fcode;

//print_r($views);
//print_r($files);
//print_r($store);

//print_r($member);

$bf_file=$views->bl_file;
$arr_file=explode("_",$bf_file);
$d1x=$arr_file[0];
$d2x=$d1x+$arr_file[1];
$d3x=$d2x+$arr_file[2];
$arrays=array();
$arrays2=array();
//print_r($store);
$img_zone=array();
foreach($files as $fi){
	//$arrays[]="http://".$_SERVER['SERVER_NAME'].'/prq/uploads/'.$fi->bf_content."/".$fi->bf_source;
	$arrays[]=$fi->bf_source;
	$arrays2[]=$fi->bf_filesize;

}
echo '<div id="image_area">';
foreach($arrays as $key=>$value){
	echo 	"<input type='text' name='img_src[]' id='img_zone_".$key."' value='".$value."' class='form-control'>\n";
	echo 	"<input type='text' name='img_size[]' id='img_size_".$key."' value='".$arrays2[$key]."' class='form-control'>\n";
}
echo '</div>';
?>
<!-- id="my-awesome-dropzone" class="" -->
<input type="hidden" name="mode" id="mode" value="modify">
<input type="hidden" name="is_join" id="is_join" value="">
<input type="hidden" name="is_member" id="is_member">
<input type="hidden" name="chk_seq[]" id="chk_seq" value='<?php echo $views->bl_no;?>' checked>
<?php if($mb_gcode=="G5"){?>
<input type="hidden" name="prq_fcode" id="prq_fcode" value="<?php echo $prq_fcode;?>">
<?php }?>
<input type="hidden" name="mb_gcode" id="mb_gcode" value="<?php echo $mb_gcode;?>">
<input type="hidden" name="mb_code" id="mb_code" value="<?php echo $this->input->post('mb_code',TRUE);?>">
<input type="hidden" name="mb_pcode" id="mb_pcode" value="<?php echo $this->input->post('mb_code',TRUE);?>">
<!-- 매장사장 전화번호 -->
<input type="text" name="st_hp_1" id="st_hp_1" value="<?php echo $store->st_hp_1;?>" class="form-control">
<!-- 영업사원 전화번호 -->
<input type="text" name="mb_hp" id="mb_hp" value="<?php echo $member->mb_hp;?>" class="form-control">

<input type="text" name="bl_no" id="bl_no" value="<?php echo $views->bl_no;?>" class="form-control">
<input type="text" name="bl_file" id="bl_file" value="<?php echo $views->bl_file;?>" class="form-control">
<input type="text" name="bl_naverid" id="bl_naverid" value="testid" class="form-control">
<input type="text" name="st_no" id="st_no" value="<?php echo $views->st_no;?>" class="form-control">
<input type="text" name="d1x_size" id="d1x_size" value="<?php echo $d1x;?>" class="form-control">
<input type="text" name="d2x_size" id="d2x_size" value="<?php echo $d2x;?>" class="form-control">
<input type="text" name="d3x_size" id="d3x_size" value="<?php echo $d3x;?>" class="form-control">


<input type="text" name="bl_imgprefix" id="bl_imgprefix" value="<?php echo $views->bl_imgprefix;?>" class="form-control">

<input type="hidden" name="ds_code" id="ds_code" value="<?php echo @$this->input->cookie('prq_fcode',TRUE);?>">

<div class="row">
<div class="col-lg-12">
<div id="image_area">#image_area</div>
</div><!--.col-lg-12-->
</div><!--.row-->

<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>작성하기 <small>이용후기의 사진 광고 목적으로 사용 할 수 있습니다.</small></h5>
<div class="ibox-tools">
<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench"></i></a>
<ul class="dropdown-menu dropdown-user">
<li><a href="#">Config option 1</a></li>
<li><a href="#">Config option 2</a></li>
</ul>
<a class="close-link"><i class="fa fa-times"></i></a>
</div><!-- .ibox-tools -->
</div><!-- .ibox-title -->
<div class="ibox-content">

<div class="col-md-12">

<div class="form-group"><label class="col-sm-2 control-label">배달음식 사진</label>
<div class="col-sm-10">
<div id="my-awesome-dropzone1" class="dropzone"><div class="dz-default dz-message"></div></div><!-- #my-awesome-dropzone1 -->
<span class="help-block m-b-none">배달 음식 개봉샷, 먹방샷, 한조각등 다양한 방향에서 맛있는 사진을 찍어주세요.</span>
</div><!-- .col-sm-10 -->
</div><!-- .form-group -->
<div class="hr-line-dashed"></div><!-- .hr-line-dashed -->

<div class="form-group"><label class="col-sm-2 control-label">첫 번째 글</label>
<div class="col-sm-10">
<textarea  class="form-control" name="content[]"  id="content1" rows="4" cols="50" 

onkeyup='chk_byte(1);textAreaAdjust(this)' 
onkeydown='chk_byte(1);textAreaAdjust(this)' 
onkeypress='chk_byte(1);textAreaAdjust(this)' 

placeholder="고객의 힘으로 상점과 고객간에 따뜻한 격려가 담긴 이용후기를 남겨주세요."><?php echo $views->bl_content1;?></textarea><!-- #form_data -->
<span class="help-block m-b-none"><span id='bytesize_1'>0</span> byte <br>
100 byte 이상 작성하셔야 합니다.~ !!! <br>
</div><!-- .col-sm-10 -->
</div><!-- .form-group -->
<div class="hr-line-dashed"></div><!-- .hr-line-dashed -->


<div class="form-group"><label class="col-sm-2 control-label">먹방 사진</label>
<div class="col-sm-10">
<div id="my-awesome-dropzone2" class="dropzone"><div class="dz-default dz-message"></div></div><!-- #my-awesome-dropzone1 -->
<span class="help-block m-b-none">가까이서 찍고, 멀리서 찍고 맛있는 사진을 많이 올려 주세요.</span>

</div><!-- .col-sm-10 -->
</div><!-- .form-group -->
<div class="hr-line-dashed"></div><!-- .hr-line-dashed -->

<div class="form-group"><label class="col-sm-2 control-label">두 번째 글</label>
<div class="col-sm-10">
<textarea  class="form-control" name="content[]"  id="content2" rows="4" cols="50" 

onkeyup='chk_byte(2);textAreaAdjust(this)' 
onkeydown='chk_byte(2);textAreaAdjust(this)' 
onkeypress='chk_byte(2);textAreaAdjust(this)' 
placeholder="정성스러운 이용후기가 가게 사장님들께 더 큰 힘이 됩니다!"><?php echo $views->bl_content2;?></textarea><!-- #form_data -->
<span class="help-block m-b-none"><span id='bytesize_2'>0</span> byte <br>
100 byte 이상 작성하셔야 합니다.~ !!! <br>
무성의한 글은 신청시 포인트 지급이 거절 될 수 있습니다.
</div><!-- .col-sm-10 -->
</div><!-- .form-group -->
<div class="hr-line-dashed"></div><!-- .hr-line-dashed -->



<div class="form-group"><label class="col-sm-2 control-label">잘찍은 사진</label>
<div class="col-sm-10">
<div id="my-awesome-dropzone3" class="dropzone"><div class="dz-default dz-message"></div></div><!-- #my-awesome-dropzone3 -->

<span class="help-block m-b-none">잘찍은 사진 한장! 100댓글이 안부럽다~!</span>
</div><!-- .col-sm-10 -->
</div><!-- .form-group -->
<div class="hr-line-dashed"></div><!-- .hr-line-dashed -->

<div class="form-group"><label class="col-sm-2 control-label">세 번째 글</label>
<div class="col-sm-10">
<textarea  class="form-control" name="content[]"  id="content3" rows="4" cols="50" 

onkeyup='chk_byte(3);textAreaAdjust(this)' 
onkeydown='chk_byte(3);textAreaAdjust(this)' 
onkeypress='chk_byte(3);textAreaAdjust(this)' 
 placeholder="잘찍은 사진 한장! 100댓글이 안부럽다~!"><?php echo $views->bl_content3;?></textarea><!-- #form_data -->


<span class="help-block m-b-none"><span id='bytesize_3'>0</span> byte <br>
여기까지 작성하시면 특별한 혜택을 더해 드려요. ☆♥♡♥♡☆
</div><!-- .col-sm-10 -->
</div><!-- .form-group -->
<div class="hr-line-dashed"></div><!-- .hr-line-dashed -->
</div><!-- .col-md-12 -->


<div class="form-group"><label class="col-sm-2 control-label">이름</label>
<div class="col-sm-10">
<input type="text" name="bl_name" id="bl_name"  class="form-control" value="<?php echo $views->bl_name;?>" placeholder="고객님 이름을 기재해 주세요.">
 - 고객님 이름을 기재해 주세요.<br>
</div><!-- .col-sm-10 -->
</div><!-- .form-group -->
<div class="hr-line-dashed"></div><!-- .hr-line-dashed -->


<div class="form-group"><label class="col-sm-2 control-label">핸드폰</label>
<div class="col-sm-10">
<input type="text" name="bl_hp" id="bl_hp" class="form-control" value="<?php echo $views->bl_hp;?>" placeholder="고객님 핸드폰을 기재해 주세요.">
 - 고객님 핸드폰을 기재해 주세요.<br>
</div><!-- .col-sm-10 -->
</div><!-- .form-group -->
<div class="hr-line-dashed"></div><!-- .hr-line-dashed -->


<div class="form-group"><label class="col-sm-2 control-label">블로그 URL</label>
<div class="col-sm-10">
<input type="text" name="bl_url" id="bl_url" class="form-control" value="<?php echo $views->bl_url;?>" placeholder="네이버 블로그에 url을 기재해 주세요. 예) http://blog.naver.com/abc123/123456">
 - 블로그 URL : 네이버에 기제한 url을 기재해 주세요. <br>
  예) http://blog.naver.com/abc123/123456<br>
</div><!-- .col-sm-10 -->
</div><!-- .form-group -->
<div class="hr-line-dashed"></div><!-- .hr-line-dashed -->

<!-- <textarea name="hidden_contents" id="hidden_contents" cols="30" rows="10">
<?php foreach($files as $fi){
$img_url="http://prq.co.kr/prq/uploads/".$fi->bf_content."/".$fi->bf_file;
echo "<img src='".$img_url."'>";
};?>
<?php echo $views->bl_content1;?>
<?php echo $views->bl_content2;?>
<?php echo $views->bl_content3;?>
</textarea> -->
<div class="controls">

<p class="help-block"><?php echo validation_errors(); ?></p>
</div>

<div class="form-group">
<!-- <div class="col-sm-10 col-sm-offset-2"> -->
<div class="col-sm-12">
<button type="button" class="btn btn-info btn-block" onclick="set_ds();set_member()" id="write_btn">리뷰 수정하기</button>
<button type="button" class="btn btn-primary btn-block" onclick="javascript:set_status('ceo_allow');">사장 승인</button>
<button type="button" class="btn btn-danger btn-block" onclick="javascript:set_status('ceo_deny');">사장 거부</button>
<button type="button" class="btn btn-primary btn-block" onclick="javascript:set_status('co_blog_allow');">일반 승인</button>
<button type="button" class="btn btn-danger btn-block" onclick="javascript:set_status('co_blog_deny');">일반 거부</button>
<button type="button" class="btn btn-primary btn-block" onclick="javascript:set_status('po_blog_allow');">배달 포인트 승인</button>
<button type="button" class="btn btn-danger btn-block" onclick="javascript:set_status('po_blog_deny');">배달 포인트 거부</button>

<!-- <button type="button" class="btn btn-danger btn-block" onclick="javascript:set_blog();">블로그 등록</button> -->
<!-- <button type="submit" class="btn btn-primary" id="write_btn">작성 실제 적용</button> -->
<!-- <button class="btn btn-white" type="reset">취소</button> -->
<!-- <button class="btn btn-primary" type="button" onclick="set_ds()">파람...</button> -->
<!--
<div class="form-actions">
<button type="submit" class="btn btn-primary" id="write_btn">작성</button>
<button class="btn" onclick="document.location.reload()">취소</button>
</div> -->

<!-- .form-group -->

<div class="row"><div class="col-md-12">
<textarea id="form_data"  class="form-control" rows="4" cols="50">#form_data</textarea><!-- #form_data -->
</div></div>
</div><!-- .col-md-6 Right Menu-->
<!-- <button class="btn btn-primary" type="button" onclick="set_ds()">저장</button> -->
</div><!-- .row -->
</div><!-- .ibox-content -->
</div><!-- .ibox float-e-margins -->
</div><!-- .col-lg-12 -->
</div><!-- .row -->

</div><!-- .wrapper .wrapper-content .animated .fadeInRight -->
<script type="text/javascript">
var image_file_count=0;


/*
server에 <span class="mb_gname">총판</span>을 등록 합니다.
*/
function set_ds(){
var param=$("#write_action").serialize();
param=param.replace(/&/gi, "\n&");
$("#form_data").html(param);
if($("#is_join").val()=="TRUE"){
$("#form_data").html(param);
//	$("#write_action").submit();
//set_member();
}
if($("#is_join").val()=="FALSE"){
$("#form_data").html("<span  class=\"text-danger\">가입불</span>");
}
}
function chk_duplicate_id(mb_id)
{
var result=false;
$.ajax({
url:"/prq/auth/chk_id",
type: "POST",
data:"mb_id="+mb_id,
dataType:"json",
success: function(data) {
	$("#is_member").val(data.success);	
	}
});
}
/*End Dropzone*/	
var focus=0,blur=0;
function chk_vali_id(){
focus++; 
var object=[];
var mb_id=$("#mb_id").val();
chk_duplicate_id(mb_id);
if (mb_id.length<4)
{
object.push("<span  class=\"text-danger\">");
object.push("아이디 길이가 너무 적습니다. 4자 이상");
$("#is_join").val("FALSE");
//}else if ($( "#mb_id" ).val()!="erm00")	{
}else if ($("#is_member").val()){
object.push("<span  class=\"text-success\">");
object.push("\""+$( "#mb_id" ).val()+"\" 멋진 아이디네요.");
$("#is_join").val("TRUE");
}else{
object.push("<span  class=\"text-danger\">");
object.push("이미 사용중이거나 탈퇴한 아이디입니다.");	
$("#is_join").val("FALSE");
}
object.push("</span>");
$( "#mb_id_assist" ).html(object.join(""));
}


function set_member(){
var param=$("#write_action").serialize();

toastr.options = {
  "closeButton": true,
  "debug": true,
  "progressBar": true,
  "preventDuplicates": true,
  "positionClass": "toast-top-full-width",
  "showDuration": "400",
  "hideDuration": "1000",
  "timeOut": "7000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};
	toastr.clear();

if($("#content1").val().length<50){
	toastr.error('첫 번째 글이 너무 적어요 ㅠ ㅠ','100자이상 작성해주세요.');
	//$("#content1").focus();
	return;
}

if($("#content2").val().length<50){
	toastr.error('두 번째 글이 너무 적어요 ㅠ ㅠ','100자이상 작성해주세요.');
	//$("#content2").focus();
	return;
}

if($("#bl_name").val().length<2){
	toastr.error('이름을 작성하셔야 합니다.','2자이상 작성해주세요.');
	//$("#content2").focus();
	return;
}

if($("#bl_hp").val().length<10){
	toastr.error('핸드폰을 작성해야 지급이 가능합니다 .','10자이상 작성해주세요.');
	//$("#content2").focus();
	return;
}

/*
if($("#content3").val().length<100){
	toastr.success('Without any options','글이 너무 적습니다!!!');
	$("#content3").focus();
	return;
}
*/
$("#write_action").submit();
/*
$.ajax({
url:"/prq/blog/modify",
type: "POST",
data:param,
cache: false,
async: false,
success: function(data) {
console.log(data);
}
});		
*/
}
function chk_btn_status()
{
	var param=$("#write_action").serialize();
//			$(".btn_area [lass*='btn-']").toggleClass("disabled",param.indexOf("chk_seq")<0).prop('disabled', param.indexOf("chk_seq")<0);
	
	if(param.indexOf("st_alltime")>0)
	{
		$("#st_open").val('00:00');
		$("#st_closed").val('24:00');
		$("#st_open").addClass("disabled").prop('disabled', true); 
		$("#st_closed").addClass("disabled").prop('disabled', true); 
	}else{
		$("#st_open").removeClass("disabled").prop('disabled', false); 
		$("#st_closed").removeClass("disabled").prop('disabled', false); 
	}
	
}
/*가맴점 코드를 불러 옵니다.*/
var pt_code="";
function get_frcode()
{
	$.ajax({
	url:"/prq/ajax/get_frcode/"+$("#ds_code").val(),
	type: "POST",
	data:"",
	dataType:"json",
	success: function(data) {
		pt_code=data.posts;
		search_frcode();
		}
	});
}
function search_frcode()
{
	var object = [];
	var chk_max_ptcode=[];
if(pt_code===undefined){
	$("#prq_fcode").html("<option selected>사용 가능한 가맹점코드가 하나도 없습니다. 코드와 가맹점을 등록 해주세요.</option>");
}else{
	$.each(pt_code,function(key,val){
		if("DS0001"==val.pt_code){
			object.push('<option value='+val.fr_code+' selected>');
		}else{
			object.push('<option value='+val.fr_code+'>');
		}
		chk_max_ptcode.push(val.fr_code);
		object.push('['+val.fr_code+']');
		object.push(val.fr_name);
		object.push('</option>');
	});
	var result=object.join("");
	var chk_gcode=$("#mb_gcode").val();
	if(chk_gcode=="G5"){
	$("#fr_code").html(result);
	}else{
	$("#prq_fcode").html(result);
	}
}
}
var fr_mail=[];
function get_frmail()
{
	$.ajax({
	url:"/prq/ajax/get_frmail/",
	type: "POST",
	data:"",
	dataType:"json",
	success: function(data) {
			$.each(data.posts,function(key,val){
				
				fr_mail[val.prq_fcode]=val.mb_email;
			});
		}
	});
}
function get_mb_id(v){
$("#mb_id").val(fr_mail[v]);
}

/* 개선된 FOR문으로 문자열 BYTE 계산 */
function getstrbyte(string)
{
	var stringByteLength=0;
	stringByteLength = (function(s,b,i,c){
		for(b=i=0;c=s.charCodeAt(i++);b+=c>>11?2:c>>7?2:1);
		return b
	})(string);
	return stringByteLength;
}


/* 메세지 길이 */
function chk_byte(id){
var str=document.getElementById("content"+id).value;
//console.log(str);
var bytesize=getstrbyte(str);
//console.log(bytesize);
document.getElementById("bytesize_"+id).innerHTML=bytesize;
}

/* Textarea to resize based on content length */
function textAreaAdjust(o) {
    o.style.height = "1px";
    o.style.height = (25+o.scrollHeight)+"px";
}



window.onload = function() {
    var checkload = true;
 
    $("#write_btn").click(function () {
        checkload = false;
    });
 
    $(window).on("beforeunload", function () {
        if (checkload == true) return "레알 나감????????????";
    });
  //출처 ㅡ 「페이지 벗어날때 확인창 띄우기 - 따블류 랩」 https://lab.hv-l.net/?document_srl=172498
};/*window.onload = function() {..}*/


function set_top_msg(v){
$("#st_top_msg").val("(광고) [ "+v+" ] 에서");
}

function get_store()
{
	$.ajax({
	url:"/prq/ajax/get_frmail/",
	type: "POST",
	data:"",
	dataType:"json",
	success: function(data) {
			$.each(data.posts,function(key,val){
				
				fr_mail[val.prq_fcode]=val.mb_email;
			});
		}
	});
}

function set_status(k)
{

	if(k=="po_blog_allow"){
		if($("#bl_url").val().trim().length<3){
			swal("포인트 생성시 블로그 URL이 반드시 필요합니다.!", "포인트 블로그 승인시 해당 url을 \n소비자와 영업사원에게 알립니다. \n반드시 기입해 주세요.", "warning");
			return;
		}
	}


	swal({
		title: "정말 변경 하시겠습니까?",
		text: "해당 블로그 리뷰를 \""+get_status(k)+"\"(으)로 변경 됩니다.<br> 진행 하시겠습니까?<br>변경 사유를 작성해 주세요.",
		html:true,
		type: "input",
		showCancelButton: true,
		closeOnConfirm: false,
		cancelOnConfirm: false,
		confirmButtonText: "네, 변경할래요!",
		cancelButtonText: "아니요, 취소할래요!",
		animation: "slide-from-top",   
		showLoaderOnConfirm: true,
		allowEscapeKey:true,
		inputPlaceholder: "변경 사유는 로그에 기록 됩니다." }, function(inputValue){
		//if (inputValue === false) return false;
		if(!inputValue){
			swal("취소!", "취소 하였습니다.", "error");
		}
		if ($.trim(inputValue).length<3) {
		  swal.showInputError("3자이상 사유를 적어 주세요.");
		  return false
		}

		var param=$("#write_action").serialize();
		param=param+"&mb_status="+k;
		param=param+"&mb_reason="+inputValue;
		/*class 에서 mb_reason을 선언 해 주지 않았기 때문에 값을 못가져오는 경우의 에러 발생 다음에는 참고 하도록 하자.*/
		//console.log(param);

		$.ajax({
		url:"/prq/ajax/chg_status/prq_blog",
			data:param,
			dataType:"json",
			type:"POST",
			success:function(data){
				console.log(data);
				if(data.success){
					//alert("변경에 성공하였습니다.");
					swal("변경!", "변경에 성공하였습니다.. 변경 사유 : "+inputValue, "success");
					$.each(data.posts,function(key,val){
						$("#status_"+val.mb_no).html(val.mb_status);
					});
				}
				console.log(data);
				console.log(data=="9000");
				if(data=="9000"){
					//swal("로그인!", "로그인 되지 않았습니다. 로그인 하시겠습니까?", "error");
					swal({   
						title: "로그인!",
						text: "로그인 되지 않았습니다. 로그인 하시겠습니까?",
						type: "warning",
						showCancelButton: true,
						closeOnConfirm: false,
						animation: "slide-from-top"
					}, 
					function(inputValue)
					{
						/*취소를 눌렀을 때*/
						if (inputValue === false) return false;

						swal("Nice!", "2초 뒤 로그인 페이지로 이동 합니다. ", "success");
						
						setTimeout(function(){console.log('setTimeout');$(location).attr('href', "/prq/auth/");}, 2000);
						;
					});	
				}

			}
		});

		});
}

function get_status(code)
{
	var object=[];
	object['view']='포스팅';
	object['review']='포스팅';
	object['ceo_allow']='사장승인';
	object['ceo_deny']='사장거절';
	object['co_blog_allow']='일반 승인';
	object['co_blog_deny']='일반 거절';
	object['po_blog_allow']='포인트 승인';
	object['po_blog_deny']='포인트 거절';
	return object[code];
}

function set_blog()
{
	$.ajax({
	url:"/prq/blog/write.php",
	type: "POST",
	data:"title=모두톡톡 이용자 후기 입니다.&contents"+$("#hidden_contents").val(),
	dataType:"json",
	success: function(data) {
		console.log(data);
		}
	});
}
</script>
<style type="text/css">
#image_area{display:none}
</style>