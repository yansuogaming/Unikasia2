<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')} : </strong>
    <a href="{$PCMS_URL}" title="{$core->get_Lang('home')}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}/index.php?mod={$mod}" title="{$mod}">{$core->get_Lang('bookingmanagement')} #{$pvalTable}</a>
    <!-- // -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">
        <h2>{$core->get_Lang('viewbooking')}
        	<a href="{$PCMS_URL}/?mod={$mod}&act=print&booking_id={$core->encryptID($pvalTable)}" class="btn-print fr">
            	<i class="fa fa-print"></i> {$core->get_Lang('print')}
            </a>
        </h2>
		{assign var = setting value = 'SiteIntroModule_'|cat:$mod|cat:'_'|cat:$_LANG_ID}
		{if $clsConfiguration->getValue($setting) ne ''}
        <p>{$clsConfiguration->getValue($setting)|html_entity_decode}</p>
		{/if}
    </div>
	<div class="clearfix"></div>
    <form id="newitem" method="post" action="" enctype="multipart/form-data" class="validate-form">
        <div class="row-field">
            <div class="row-heading">{$core->get_Lang('detailbooking')} {$oneItem.booking_code}:</div>
            <div class="coltrols">{$clsClassTable->getBookingHTML($pvalTable)}</div>
        </div>
        <div class="row-field" style="display:none">
            <div class="row-heading">{$core->get_Lang('note')} :</div>
            <div class="coltrols">{$clsForm->showInput('note')}</div>
        </div>
        <div class="row-field">
            <div class="row-heading">{$core->get_Lang('processbooking')}*:</div>
            <div class="coltrols">
            	<input type="checkbox" name="status" id="status" value="1" {if $oneItem.status eq '1'}checked="checked"{/if} />
            	<label for="status">&nbsp;&nbsp;{$core->get_Lang('Tick choose if this Booking already dealing')}!</label>
            </div>
        </div>
        <fieldset class="submit-buttons">
            <legend>{$core->get_Lang('accept')}</legend>
            {$saveBtn} {$resetBtn}
            <input value="Update" name="submit" type="hidden">
        </fieldset>
    </form>
</div>
{literal}
<style type="text/css">
.table-mce{margin:0 auto}
td{ font-size:13px !important}
.hidden { display:none !important}
</style>
{/literal}