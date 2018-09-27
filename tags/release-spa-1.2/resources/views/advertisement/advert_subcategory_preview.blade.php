@extends('common.default')
@section('content')
@include("advertisement.advert_subcategory_modal")

<style type="text/css">
.fa-times-thin:before {
	content: '\00d7';
}

*, *:before, *:after{
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing:border-box;
  box-sizing: border-box;
}

.img{
  width: 100%;
  height:210px;
  object-fit: cover;
}


/*.btn-add-div
{
	width: 40px;
	height: 40px;
	text-align: center;
	padding: 4px 0;
	font-size: 20px;
	line-height: 1.42;
	border-radius: 20px;
	margin-top: 20px;
}*/

.save-btn-div{
	margin-top: 20px;
}
.save-btn-leftdiv{
	margin-top: 20px;
}
.btn-close{
	width: 40px;
	height: 40px;
	text-align: center;
	padding: 4px 0;
	font-size: 20px;
	line-height: 1.42;
	border-radius: 20px;
	margin-top: -10px;
	margin-right: -10px;
}
.btn-upload{
	width: 40px;
	height: 40px;
	text-align: center;
	padding: 4px 0;
	font-size: 20px;
	line-height: 1.42;
	border-radius: 20px;
	margin-top: 153px;
}

.small-container-btn {
	width: 30px;
	height: 20px;
	text-align: center;
	padding: 0;
	font-size: 20px;
	border-width:0;
	border-radius: 4px;
}

.scb-slider {
	margin-top: -19px;
	margin-right: -14px;
}
 
.sub_category_image_div .btn-close{
	position: absolute;
	right: 15px;
}
.sub_category_image_div .btn-upload{
	position: fixed;
	right: 17px;
	bottom:102px;
}
.fa-2x{
	font-size: 20px;
	font-weight: bold;
}
.btn-black{
background-color: #000;
	color:#fff;
}
.btn-black:hover{
	color:#fff; 
}
.top_space{
  padding-top:10px;
}
.sub_category_image_container{
	/*height:420px;*/
	/*border:1px solid #c0c0c0;*/
	padding-top:10px;
	padding-bottom:10px;
}
.subcategory_section
{
	height:210px;
	border:1px solid #c0c0c0;	
}
</style>
<div class="container nomobile">
@include('admin/panelHeading')
<div class="row" style="margin-bottom:0;margin-left:0;margin-right:0">
	<div class="col-sm-8" style="padding-left:0;padding-right:0">
		@include('admin/advertPanelHeading')
	</div>
	<div class="col-sm-4"
	style="border-width:1px;border-color:red;padding-right:0;margin-top:50px">
		<button class="pull-right btn btn-success btn_update_to_public">
			Update To Public</button>
		<div class="col-sm-12" style="margin-top:10px;padding-right:0">
		<p style="font-size:17px;font-weight:bold;text-align:right;margin-bottom:0">
		{{$categoryImages->description}}</p>
		</div>
	</div>
</div>
 
<div class="sub_category_image_container" style="margin-left:0;margin-right:0">
	<div class="row" style="margin-left:0;margin-right:0">
		<div class="subcategory_section col-sm-8 col-xs-6"
			style="padding-left:0;padding-right:0"
			subcat_adv1" data-toggle="modal"
			data-target="#subcategoryModal" data-subadvtarget="subcat_adv1">
			@if($subcat_adv1)
			<img class="img" src="{{$slider_path.$subcat_adv1->id.'/'.$subcat_adv1->temp_path}}" />
			@endif
		</div>
		<div class="subcategory_section col-sm-4 col-xs-6 subcat_adv2"
			style="padding-left:0;padding-right:0"
			data-toggle="modal"  data-target="#subcategoryModal"
			data-subadvtarget="subcat_adv2">
			@if($subcat_adv2)
			<img class="img" src="{{$slider_path.$subcat_adv2->id.'/'.$subcat_adv2->temp_path}}" />
			@endif
		</div>
	</div>
	<div class="row" style="margin-left:0;margin-right:0">
		<div class="subcategory_section col-sm-4 col-xs-6 subcat_adv3"
			style="padding-left:0;padding-right:0"
			data-toggle="modal" data-target="#subcategoryModal"
			data-subadvtarget="subcat_adv3">
			@if($subcat_adv3)
			<img class="img" src="{{$slider_path.$subcat_adv3->id.'/'.$subcat_adv3->temp_path}}" />
			@endif
		</div>
		<div class="subcategory_section col-sm-4 col-xs-6 subcat_adv4"
			style="padding-left:0;padding-right:0"
			data-toggle="modal"  data-target="#subcategoryModal"
			data-subadvtarget="subcat_adv4">
			@if($subcat_adv4)
			<img class="img" src="{{$slider_path.$subcat_adv4->id.'/'.$subcat_adv4->temp_path}}" />
			@endif
		</div>
		<div class="subcategory_section col-sm-4 col-xs-6 cat_adv5"
			style="padding-left:0;padding-right:0"
			data-toggle="modal"  data-target="#subcategoryModal"
			data-subadvtarget="subcat_adv5">
			@if($subcat_adv5)
			<img class="img" src="{{$slider_path.$subcat_adv5->id.'/'.$subcat_adv5->temp_path}}" />
			@endif
		</div>
	</div>
</div>
<input type="hidden" id="slider_path" value="{{$slider_path}}" />
<input type="hidden" id="subcategory_id" value="{{$categoryImages->id}}" />
</div>
<br><br>

<script type="text/javascript">
$(function() {

	$(".sub_category_container").on("click",".btn-close",function(){
		var id = $(this).data('id');
		if(confirm("Want to delete category image?") == true) {
			$("input[name='delete_subcat_image']").
				val($("input[name='delete_subcat_image']").val()+","+id);
			$(".sub_category_container").html('<div class="sub_category_div row"><label class="control-label '+
				'form-group" for="target" style="margin-top:20px;">Target </label>'+
				'<input type="text" name="target" class="form-control"><br>'+
				'<div class="sub_category_image_div" '+
				'style="border-style: solid;border-width: 1px; height: 200px;border-color:#c0c0c0">'+
				'<input type="file" style="display:none;" name="sub_category_image" '+
				'data-preview-file-type="text">'+
				'<img src="" class="sub_category_image">'+
				'<button type="button" style="background:#000000; color:#ffffff;" '+
				'class="btn btn-upload pull-right">'+
				'<i class="fa fa-upload"></i></button></div></div>');
			toastr.success(
				'<div><p>Successfully deleted Category Image</p></div>');
		}
	});

	$(".subcategory_section").on("click",function(){
	var subcategory_id = $('#subcategory_id').val();
	var sub_adv_target = $(this).data('subadvtarget');
	$("#sub_adv_target").val(sub_adv_target);
	$.ajax({
		url: '/admin/general/category_image_list/'+subcategory_id,
		type: 'GET',
		data:{
			target:sub_adv_target
		},
		success: function(data){
			console.log(data.id);

			var slider_path = $("#slider_path").val();
			
			if(data.id!=undefined && data.id!=""){
					var sliders="";
					sliders += '<div class="sub_category_div row" '+
					'id="sub_category_image_'+data.id+'">'+
					'<label class="control-label form-group" for="target" '+
					'style="margin-top:20px;">Target </label>'+
					'<input type="text" value="'+data.target+
					'" name="old_target" class="form-control">'+
					'<input type="hidden" value="'+data.id+
					'" name="ids"><br><button type="button" '+
					'class="btn btn-black small-container-btn scb-slider btn-close '+
					'pull-right" data-id="'+data.id+'" data-src="'+data.temp_path+'">'+
					'<i class="fa fa-times-thin fa-2x" '+
					'style="margin-top:0.4px;vertical-align:top">'+
					'</i></button>'+
					'<div class="sub_category_image_div" style="border-style: '+
					'solid;border-color:#c0c0c0;border-width: 1px; '+
					'height: 200px;"><img src="'+slider_path+data.id+'/'+data.temp_path+'" style="object-fit:cover;height:100%;'+
					'width:100%"></div></div>';
				$(".sub_category_container").html(sliders);        		
			}else{
				$(".sub_category_container").html('<div class="sub_category_div row"><label class="control-label '+
				'form-group" for="target" style="margin-top:20px;">Target </label>'+
				'<input type="text" name="target" class="form-control"><br>'+
				'<div class="sub_category_image_div" '+
				'style="border-style: solid;border-width: 1px; height: 200px;border-color:#c0c0c0">'+
				'<input type="file" style="display:none;" name="sub_category_image" '+
				'data-preview-file-type="text">'+
				'<img src="" class="sub_category_image">'+
				'<button type="button" style="background:#000000; color:#ffffff;" '+
				'class="btn btn-upload pull-right">'+
				'<i class="fa fa-upload"></i></button></div></div>');

			}
			// $("#landingModal").toggle();
		},
		error: function(error){
			console.log(error);
		}
	});
	});
	

	// $(".btn-upload").off("click");
	$(".sub_category_container").on("click",".btn-upload",function(e){
		e.preventDefault();
		$(this).parent(".sub_category_image_div").find("input[name='sub_category_image']").click();
	});

	$(".sub_category_container").on("change","input[name='sub_category_image']",
		function(e){
		e.preventDefault();
		readURL(this,'.sub_category_image');
		$(this).parent(".sub_category_image_div").
			find('img').
			attr("style","object-fit:cover;height:100%;width:100%");
		return false;
	});

	function readURL(input,id) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$(id).attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
});

$(document).on("click",".btn_update_to_public",function(){
    if(confirm("Want to update all advert publically ?") == true) {
    $.ajax({
      url: '/admin/general/upload_public',
      type: 'POST',
      data:{'_token':$("input[name=_token]").val()},
      success: function(data){
        toastr.success('<div><p>Category Advert successfully published publically.</p></div>');
      },
      error: function(error){
        console.log(error);
      }
    });
    }
});

</script>
@stop
