{if $run_ajax eq 'overview'}
    {$core->getBlock('box_detail_tour_overview')}
{elseif $run_ajax eq 'setting_menu'}
    {$core->getBlock('box_detail_tour_setting_menu')}
{else}
    {section name=i loop=$list_menu_tour}
        {assign var = child_cat_menu value = $list_menu_tour[i].child }
        {assign var = child_cat_menu_prev value = $list_menu_tour[i.index_prev].child }
        {assign var = child_cat_menu_next value = $list_menu_tour[i.index_next].child }
        
        {section name=j loop=$child_cat_menu}
            {math assign=count_child_cat_menu_prev equation='x-y' x=$list_menu_tour[i.index_prev].child|@count y=1}
            {assign var = list_cat_menu_prev value = $list_menu_tour[i.index_prev].cat_menu }
            {assign var = list_cat_menu_next value = $list_menu_tour[i.index_next].cat_menu }
            {assign var =blk value =box_detail_tour_|cat:$run_ajax }
            {if $run_ajax eq $child_cat_menu[j] && $run_ajax ne 'overview'}
				<form method="post" enctype="multipart/form-data">
					<input type="hidden" name="type_post" value="{$child_cat_menu[j]}">
					{$clsISO->getBlock($blk,[
						"child_cat_menu"=>$child_cat_menu,
						"count_child_cat_menu_prev"=>$count_child_cat_menu_prev,
						"child_cat_menu_prev"=>$child_cat_menu_prev,
						"child_cat_menu_next"=>$child_cat_menu_next,
						"list_cat_menu_prev"=>$list_cat_menu_prev,
						"list_cat_menu_next"=>$list_cat_menu_next,
						"child_cat_menu_j"=> $child_cat_menu[j],
						"child_cat_menu_j_index_prev"=>$child_cat_menu[j.index_prev],
						"child_cat_menu_j_index_next"=>$child_cat_menu[j.index_next],
						"list_menu_tour_i_index_next"=>$list_menu_tour[i.index_next]
					])}
				</form>
            {/if}
        {/section}
    {/section}
{/if}
<script type="text/javascript">
	var pcsm_ovv = '{$PCMS}';
	var list_check_target = {$list_check_target};
	var pvalTable_ovv = {$pvalTable};
</script>
{literal}
<script type="text/javascript">
    $(function() {
		$(".chosen-select").chosen({
			width: '100%',
			/*max_selected_options: 10*/
		});
        if($('.textarea_intro_editor_simple').length > 0){
            $('.textarea_intro_editor_simple').each(function(){
                var $_this = $(this);
                tinyMCE.remove();
                var $editorID = $_this.attr('id');
                $('#'+$editorID).isoTextAreaSimple();

            });
        }
        $.each( list_check_target, function( i, val ) {
            if(val['result'] == 'check_success'){
                $('#'+val['target']).closest('li').addClass(val['result']);
                $('#'+val['target']).html(val['name']);
            }else if(val['result'] == 'check_caution'){
                $('#'+val['target']).closest('li').addClass(val['result']);
                $('#'+val['target']).html(val['name']);
            }
        });
    })
</script>
{/literal}