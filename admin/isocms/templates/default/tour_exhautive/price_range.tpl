<div class="page-tour_setting page_container">
	{$core->getBlock('header_title_tour_setting')}
	<div class="container-fluid container-fluid-2 d-flex">
		{$core->getBlock('menu_tour_exhautive_setting')}
		<div class="content_setting_box">
			<div class="page_detail-title d-flex">
				<div class="title">
					<h2>{$core->get_Lang('pricerange')}</h2>
                    <p>Chức năng quản lý khoảng giá tour trong hệ thống isoCMS</p>
					<p>This function is intended to manage tour price range in isoCMS system</p>
				</div>
				<div class="button_right">
					<a class="btn btn-main btn-addnew btnCreatePriceRange" href="javascript:void(0);" title="{$core->get_Lang('Add new')}">{$core->get_Lang('Add new')}</a>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="filter_box">
				<form id="forums" method="post" class="filterForm" action="" onsubmit="return false;">
					<div class="form-group form-keyword">
						<input class="form-control" type="text" name="keyword" value="{$keyword}" placeholder="{$core->get_Lang('search')}..." />
					</div>
					<div class="form-group form-button">
						<button type="submit" class="btn btn-main" id="findtBtn">Tìm kiếm</button>
						<input type="hidden" name="filter" value="filter" />
					</div>
				</form>	
			</div>
			<div class="hastable">
				<div id="tab_content">
					<table class="tbl-grid full-width table-striped">
                        <thead>
                            <tr>
                                <th class="gridheader" style=" width:70px"><strong>{$core->get_Lang('index')}</strong></th>
                                <th class="gridheader" style="text-align:left"><strong>{$core->get_Lang('title')}</strong></th>
                                <th class="gridheader" style="text-align:right"><strong>{$core->get_Lang('minrate')}</strong></th>
                                <th class="gridheader" style="text-align:right"><strong>{$core->get_Lang('maxrate')}</strong></th>
                                <th class="gridheader" colspan="4" style="width:100px"><strong>{$core->get_Lang('move')}</strong></th>
                                <th class="gridheader" style="text-align:center; width: 70px"><strong>{$core->get_Lang('Action')}</strong></th>
                            </tr>
                        </thead>
                        <tbody id="tblHolderPriceRange">
                        </tbody>
                    </table>
                    <div class="clearfix" style="height:5px"></div>
                        <div class="pagination_box">
                        <div class="wrap holderEvent_tbl" id="dataTable_paginate">
                        <!-- Ajax Loading pagination -->
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{$URL_JS}/jquery.price_format.1.8.js?v={$upd_version}"></script>
<script type="text/javascript">
	var $type = 'TOUR';
</script>
{literal}
<script type="text/javascript">
$(document).ready(function(){
	var aj_search = '';
	loadListPriceRange('', $type, 1, 10);
	$(document).on('click', '#findtBtn', function(ev) {
		var $_this = $(this);
		loadListPriceRange($('input[name=keyword]').val(), $type, 1,10);
	});
	$(document).on('click','.btnCreatePriceRange',function(e){
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=ajSiteFrmTourPriceRange',
			data : adata = {'type' : $type,'tp' : 'F'},
			dataType:'html',
			success:function(html){
				makepopupnotresize('30%','auto',html,'box_CreateTourPriceRange');
				$('#box_CreateTourPriceRange').css('top', 80 + 'px');
				$(".price").priceFormat({thousandsSeparator: '.',centsLimit: 0});
				vietiso_loading(0);
			}
		});
		return false;
	});
	$(document).on('click','.ajEditPriceRange',function(e){
		var $_this = $(this);
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url:path_ajax_script+'/index.php?mod='+mod+'&act=ajSiteFrmTourPriceRange',
			data : {'price_range_id' : $_this.attr('data'),'tp' : 'F'},
			dataType:'html',
			success:function(html){
				makepopupnotresize('30%','auto',html,'box_EditTourPriceRange');
				$('#box_EditTourPriceRange').css('top', 80 + 'px');
				$(".price").priceFormat({thousandsSeparator: '.',centsLimit: 0});
				vietiso_loading(0);
			}
		});
		return false;
	});
	$(document).on('click','.ajSubmitPriceRange',function(e){
		var $_this = $(this);
		var $_form = $_this.closest('.frmPop');
		/**/
		var $title = $_form.find('input[name=title]');
		var $min_rate = $_form.find('input[name=min_rate]');
		var $max_rate = $_form.find('input[name=max_rate]');
		/**/
		if($.trim($title.val())==''){
			$title.addClass('error').focus();
			alertify.error(field_is_required);
			return false;
		}
		if($min_rate.val()==''){
			$min_rate.addClass('error').focus();
			alertify.error(field_is_required);
			return false;
		}
		if($max_rate.val()==''){
			$max_rate.addClass('error').focus();
			alertify.error(field_is_required);
			return false;
		}
		var adata = {
			'title'		: $title.val(),
			'type'		: $type,
			'min_rate' 	: $min_rate.val(),
			'max_rate' 	: $max_rate.val(),
			'price_range_id' : $_this.attr('price_range_id'),
			'tp' : 'S'
		};
		vietiso_loading(1);
		$.ajax({
			type:'POST',
			url : path_ajax_script+'/index.php?mod='+mod+'&act=ajSiteFrmTourPriceRange',
			data:adata,
			dataType:'html',
			success:function(html){
				vietiso_loading(0);
				if(html.indexOf('_SUCCESS') >=0 ){
					alertify.success(insert_success);
					loadListPriceRange('',$type,1,10);
					$_form.find('.close_pop').trigger('click');
				}
				else if(html.indexOf('_UPDATE_SUCCESS') >=0 ){
					alertify.success(update_success);
					var $keyword = $('#keyword').val();
					var $page = $('.paginate_current_page').val();
					var $number_per_page = $('.paginate_length').val();
					loadListPriceRange($keyword,$type,$page,$number_per_page);
					$_form.find('.close_pop').trigger('click');
				}
				else if(html.indexOf('_ERROR') >=0 ){
					alertify.error(insert_error);
				}
				else{
					alertify.error(exist_error);
				}
				
			}
		});
	});
	$('.ajDeletePriceRange').live('click',function(){
		var $_this = $(this);
		if(confirm(confirm_delete)){
			var adata = {'price_range_id' : $_this.attr('data')};
			vietiso_loading(1);
			$.ajax({
				type:'POST',
				url:path_ajax_script+'/index.php?mod='+mod+'&act=ajSiteFrmTourPriceRange',
				data : {'price_range_id' : $_this.attr('data'),'tp' : 'D'},
				dataType:'html',
				success:function(html){
					var $keyword = $('#keyword').val();
					var $page = $('.paginate_current_page').val();
					var $number_per_page = $('.paginate_length').val();
					loadListPriceRange($keyword,$type,$page,$number_per_page);
					vietiso_loading(0);
				}
			});
		}
		return false;
	});
	$('.ajMovePriceRange').live('click',function(){
		var _this = $(this);
		var adata = {
			'price_range_id' : _this.attr('data'),
			'direct' : _this.attr('direct'),
			'tp' : 'M'
		};
		vietiso_loading(1);
		$.ajax({
			type: "POST",
			url: path_ajax_script+"/?mod="+mod+"&act=ajSiteFrmTourPriceRange",
			data: adata,
			dataType: "html",
			success: function(html){
				var $keyword = $('#keyword').val();
				var $page = $('.paginate_current_page').val();
				var $number_per_page = $('.paginate_length').val();
				loadListPriceRange($keyword,$type,$page,$number_per_page);
				vietiso_loading(0);
			}
		});
		return false;
	});
	$('.paginate_length').live('change',function(){
		var $_this = $(this);
		var $keyword = $('#keyword').val();
		var $page = 1;
		var $number_per_page = $_this.val();
		loadListPriceRange($keyword,$type,$page,$number_per_page);
	});
	$('.paginate_button').live('click',function(){
		var $_this = $(this);
		if(!$_this.hasClass('disabled')){
			var $keyword = $('#keyword').val();
			var $page = $_this.attr('page');
			var $number_per_page = $('.paginate_length').val();
			loadListPriceRange($keyword,$type,$page,$number_per_page);
		}
		return false;
	});
});
function loadListPriceRange($keyword, $type, $page, $number_per_page){
	vietiso_loading(1);
	var adata = {
		'keyword' : $keyword,
		'type' : $type,
		'page'	: $page,
		'number_per_page' : $number_per_page,
		'tp' : 'L'
	};
	$.ajax({
		type: "POST",
		url: path_ajax_script+"/?mod="+mod+"&act=ajSiteFrmTourPriceRange",
		data: adata,
		dataType: "html",
		success: function(html){
			var htm = html.split('$$');
			$('#tblHolderPriceRange').html(htm[0]);
			$('#dataTable_paginate').html(htm[1]);
			vietiso_loading(0);
		}
	});
}
</script>
{/literal}