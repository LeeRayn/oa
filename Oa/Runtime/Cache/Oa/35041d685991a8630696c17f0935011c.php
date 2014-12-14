<?php if (!defined('THINK_PATH')) exit();?><div style='word-break:break-all;'>
	<form id='addHospital' method='post' action="<?php echo U('Oa/System/addHospital');?>">
		<div style='width:100%;height:30px;'>
			<span>医院名称：</span>
			<input id='Hospital-title' name='title' />
		</div>
		<div style='width:100%;'>
			<span>医院描述：</span>
			<textarea id='Hospital-description' name="description"></textarea>
		</div>
		<div style='width:100%;height:30px;'>
			<span>医院状态：</span>
			<input id='status1' name='status' type='radio' value='1' checked />  <label for='status1'>启用</label>
			<input id='status0' name='status' type='radio' value='0' />  <label for='status0'>禁用</label>
		</div>
		<input type='hidden' name='addHospital' value='addHospital' />
	</form>
</div>
<script type="text/javascript">
$("#Hospital-title").textbox({
    required: true,
    validType:['length[2,40]'],
    missingMessage: "必须填写医院名称",
    invalidMessage: "已经存在该医院",
});
$("#Hospital-status").textbox({
	width: 190,
	require: true,
	missingMessage: "必须选择医院状态",
});
</script>