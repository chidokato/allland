<!-- comments -->
<div>Bình Luận</div>
<div class='comments'>
	<form action="comment" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<input type="hidden" name="link" value="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
		<input type="hidden" name="id" value="{{$datas->id}}" />
		<input type="hidden" name="sort_by" value="{{$datas->category->sort_by}}" />
		<p><textarea required id='click-comments' name='content' placeholder="Viết bình luận* ..." rows='3'></textarea></p>
		<div id='hien-comments' style="display: none;">
			<p><input required placeholder="Name* ..." name='name' type='text' /> <input type='text' disabled value='This comment form is under antispam protection' /></p>
			<p><input placeholder="Phone ..." name='phone' type='text' /> <input type='submit' value='Post Comment' /> <span class='close'> close</span> </p>
		</div>
	</form>
</div>

@foreach($comment as $val)
<div class='list-comments'>
	<div class='avatar'><img src='/public/upload/files/user.png' alt='user comment'></div>
	<div class='content-comments'>
		<h6>{{$val->name}}</h6> 
		<p>{{$val->content}}</p> 
		<!--p><button class='traloi'>Trả lời</button></p> 
		<div class='comments'>
			<p><textarea id='click-comments' placeholder="Viết bình luận* ..." rows='3'></textarea></p>
			<div id='hien-comments' style="display: none;">
				
			</div>
		</div-->
	</div>
	<div class='clr'></div>
</div>
@if(isset($val->reply))
<div style='margin-left: 12%;' class='list-comments'>
	<div style='padding: 0;' class='avatar'><img src='/public/upload/files/logo-maivietland.png' alt='user comment'></div>
	<div class='content-comments'>
		<h6>Công Ty Cổ Phần Địa Ốc Mai Việt</h6> 
		<p>{{$val->reply}}</p> 
		<!--p><button class='traloi'>Trả lời</button></p> 
		<div class='comments'>
			<p><textarea id='click-comments' placeholder="Viết bình luận* ..." rows='3'></textarea></p>
			<div id='hien-comments' style="display: none;">
				
			</div>
		</div-->
	</div>
	<div class='clr'></div>
</div>
@endif
@endforeach
<!-- comments -->


<script type="text/javascript">
$(document).ready(function(){
	$("#click-comments").click(function(){
		$("#hien-comments").show();
	});
	$(".close").click(function(){
		$("#hien-comments").hide();
	});
	
});
</script>