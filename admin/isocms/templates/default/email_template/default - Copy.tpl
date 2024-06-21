<div class="breadcrumb">
	<strong>{$core->get_Lang('youarehere')}:</strong>
	<a href="{$PCMS_URL}">{$core->get_Lang('home')}</a>
    <a>&raquo;</a>
    <a href="{$PCMS_URL}?mod=email_template">{$core->get_Lang('emailtemplate')}</a>
	<!-- Back -->
    <a href="javascript:window.history.back();" class="back fr">{$core->get_Lang('back')}</a>
</div>
<div class="container-fluid">
    <div class="page-title">	
        <h2>
        	{$core->get_Lang('emailtemplate')} 
            <a class="btn btn-success" href="{$PCMS_URL}/?mod={$mod}&act=edit" title="{$core->get_Lang('add')}"> <i class="icon-plus icon-white"></i></a>
        </h2>
		{assign var = setting value = 'SiteIntroModule_'|cat:$mod|cat:'_'|cat:$_LANG_ID}
		{if $clsConfiguration->getValue($setting) ne ''}
        <p>{$clsConfiguration->getValue($setting)|html_entity_decode}</p>
		{/if}
    </div>
    <div class="clearfix"></div>
    <div class="wrap mt30">
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>{$core->get_Lang('Name')}</th>
                    <th>{$core->get_Lang('Group')}</th>
                    <th>{$core->get_Lang('LastUpdated')}</th>
                    <th>{$core->get_Lang('UpdateBy')}</th>
                    <th></th>
                </tr>
            </thead>
            {section name=i loop=$lstCat}
            {assign var=lstEmailTemplate value=$clsClassTable->getListEmailTemplate($lstCat[i].email_template_cat_id)}
            {if $lstEmailTemplate}
            <tbody>
                {section name=j loop=$lstEmailTemplate}
                <tr>
                    <td>{$lstEmailTemplate[j].email_template_id}</td>
                    <td>{$clsClassTable->getTitle($lstEmailTemplate[j].email_template_id)|truncate:60}</td>
                    <td>{$lstCat[i].title}</td>
                    <td>{$lstEmailTemplate[j].upd_date|date_format:"%d/%m/%Y"}</td>
                    <td>{$clsUser->getOneField('user_name',$lstEmailTemplate[j].user_id_update)} </td>
                    <td class="block_responsive text-center" style="white-space:nowrap;" data-title="{$core->get_Lang('func')}">
                        <div class="btn-group">
                            <button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a title="{$core->get_Lang('edit')}" href="{$PCMS_URL}/index.php?mod={$mod}&act=edit&email_template_id={$core->encryptId($lstEmailTemplate[j].email_template_id)}"><i class="icon-pencil"></i> <span>{$core->get_Lang('edit')}</span></a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                {/section}
            </tbody>
            
            
                {if 1==2}
                <div class="wrap">
                {if $smarty.section.i.first}
                <h2 style="font-size:20px;">{$lstCat[i].title}</h2>
                {else}
                <h2 style="font-size:18px; margin:30px 0 5px 0">{$lstCat[i].title}</h2>
                {/if}
                <div class="row">
                {section name=j loop=$lstEmailTemplate}
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 full_width_600">
                <div class="emailtplstandard full-width">
                <a href="{$PCMS_URL}/index.php?mod={$mod}&act=edit&email_template_id={$core->encryptId($lstEmailTemplate[j].email_template_id)}" id="{if 1 eq 1}({$lstEmailTemplate[j].email_template_id}){/if}"><img align="top" src="{$URL_IMAGES}/massmail.png" /> {$clsClassTable->getTitle($lstEmailTemplate[j].email_template_id)|truncate:50}
                </a>
                </div>
                </div>
                {/section}
                </div>
                </div>
                {/if}
            {/if}
            {/section}
        </table>
	</div>
</div>