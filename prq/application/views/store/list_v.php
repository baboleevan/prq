	<script>
		$(document).ready(function(){
			$("#search_btn").click(function(){
				if($("#q").val() == ''){
					alert('검색어를 입력해주세요.');
					return false;
				} else {
					var act = '/prq/store/lists/ci_board/q/'+$("#q").val()+'/page/1';
					$("#bd_search").attr('action', act).submit();
				}
			});
		});

		function board_search_enter(form) {
			var keycode = window.event.keyCode;
			if(keycode == 13) $("#search_btn").click();
		}

		function set_write(){
		$('#bd_search').attr('action', "/prq/store/write/prq_store/page/1");
          $("#bd_search").submit();		
		
		}
	</script>
	<article id="board_area">
		<header>
			<h1></h1>
		</header>

		<div class="container-fluid">

    <div class='row'>
<?php echo form_open('prq/store/lists/ci_board', array('id'=>'bd_search', 'class'=>'well form-search'));?>
<!--form id="bd_search" method="post" class="well form-search" -->

<input type="hidden" name="page" id="page" value="<?php echo $this->uri->segment(5);?>">
<input type="hidden" name="mb_code" id="mb_code" value="ST">
		<!-- id="my-awesome-dropzone" class="" -->
        <div class="wrapper wrapper-content animated fadeInRight">
			<div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><span class="mb_gname">상점</span>  리스트 정보 입니다. <small><span class="mb_gname">총판</span>의 정보 및 계약서를 작성해 주세요.</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div><!-- .ibox-title -->
                        <div class="ibox-content">
    <div class='row'>
        <div class='col-sm-6'>    
            <div class='form-group'>
                <label for="user_title">등록일자</label>
                <input class="form-control" id="user_title" name="user[title]" size="30" type="text" />
            </div><!-- .form-group -->
        </div><!-- .col-sm-6 -->
        <div class='col-sm-6'>
            <div class='form-group'>
                <label for="user_firstname">상태</label>
                <input class="form-control" id="user_firstname" name="mb_status" required="true" size="30" type="text" />
            </div><!-- .form-group -->
        </div><!-- .col-sm-6 -->
    </div><!-- .row -->
    <div class='row'>
        <div class='col-sm-6'>    
            <div class='form-group'>
                <label for="user_title"><span class="mb_gname">총판</span>명</label>
                <input class="form-control" id="user_title" name="user[title]" size="30" type="text" />
            </div><!-- .form-group -->
        </div><!-- .col-sm-6 -->
        <div class='col-sm-6'>
            <div class='form-group'>
                <label for="user_firstname"><span class="mb_gname">총판</span>ID</label>
                <input class="form-control" id="user_firstname" name="mb_status" required="true" size="30" type="text" />
            </div><!-- .form-group -->
        </div><!-- .col-sm-6 -->
    </div><!-- .row -->
    <div class='row'>
        <div class='col-sm-12'>
            <div class='form-group'>
                <label for="user_email"><span class="mb_gname">총판</span> 목록</label>
                <input class="form-control required email" id="user_email" name="user[email]" required="true" size="30" type="text" />
            </div>
        </div>
    </div><!-- .row -->
    <div class='row'>
	<div class='col-sm-12 right'>
            <div class='form-group'><input type="button" value="검색" id="search_btn" class="btn btn-primary" /> </div>
        </div>
    </div>
			</form><!-- #bd_search -->
</div>
	</div>
	</div><!-- .row -->

<div class='row'>
		<?php 
			$attributes = array(
				'class' => 'form-horizontal', 
				'id' => 'write_action'
			);
			echo form_open('board/write/ci_board', $attributes);
		?>
	<div class='col-sm-12'>
<div class="table-responsive">
		<table cellspacing="0" cellpadding="0" class="table table-striped">
			<thead>
				<tr>
					<th scope="col"><input type="checkbox" name="chk_"></th>
					<th scope="col">No</th>
					<th scope="col">등록일자</th>
					<th scope="col">가맹점 이름</th>
					<th scope="col">가맹점코드</span>코드</th>
					<th scope="col">구분</th>
					<th scope="col">대리점</th>
					<th scope="col"><span class="mb_gname">총판</span>상태</th>
					<th scope="col">비고</th>
				</tr>
			</thead>
			<tbody>
<?php
foreach ($list as $lt)
{
?>
				<tr>
					<td scope="col"><input type="checkbox" name="chk_"></td>
					<td scope="row"><?php echo $lt->st_no;?></td>
					<td>
					<a rel="external" href="/prq/<?php echo $this->uri->segment(1);?>/view/<?php echo $this->uri->segment(3);?>/board_id/<?php echo $lt->st_no;?>/page/<?php echo $page;?>"><?php echo $lt->st_datetime;?></a></td>
					<td><?php echo $lt->st_name;?></td>
					<td><?php echo $lt->prq_fcode;?></td>
 					 <td></td>
 					<td>상점</td> 
 					<td>46</td> 
 					<td><?php echo $lt->st_status;?></td> 
 					<td>-</td> 
				</tr>
<?php
}

if(!$list){
echo "<tr><td colspan=9 style='text-align:center'>상점 리스트가 존재 하지 않습니다.</td></tr>";
}
?>

			</tbody>
			<tfoot>
				<tr>
					<th colspan="5" style="text-align:center">
					<ul class="pagination pagination-lg"><?php echo $pagination;?></ul><!-- .pagination --></th>
				</tr>
			</tfoot>
		</table>
</div><!-- .table-responsive -->
</div>
</div>
</div>
<div class="row"><div class='col-sm-11'></div><div class='col-sm-1'> <a href="javascript:set_write();" class="btn btn-success">쓰기</a></div></div>
</article>