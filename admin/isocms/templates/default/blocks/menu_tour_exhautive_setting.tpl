<div class="menu_setting_box">
	<ul class="ul_menu_setting">
		<li class="{if $act=='setting'}current{/if}">
			<a href="{$PCMS_URL}/?mod=tour_exhautive&act=setting">
				<span class="text">{$core->get_Lang('Tour Settings')}</span>
			</a>
		</li>
		{assign var=lstTourType value=$clsTourStore->getListType()}
		{foreach from=$lstTourType key=k item=v}
		<li class="{if $type==$k}current{/if}">
			<a href="{$PCMS_URL}/?mod=tour_exhautive&act=store&type={$core->encryptID($k)}">
				<span class="text">{$v} {if $k=='DEPARTURE'}<span class="badge s_pro label-warning">Pro</span>{/if}</span>
			</a>
		</li>
		{/foreach}
		{if $clsISO->getCheckActiveModulePackage($package_id,'property','service','default')}
		<li class="{if $mod=='property' && $act=='service'}current{/if}">
			<a href="{$PCMS_URL}/?&mod=property&act=service">
				<span class="text">{$core->get_Lang('Addon Services')}</span>
			</a>
		</li>
		{/if}
		{if $clsISO->getCheckActiveModulePackage($package_id,'tour_exhautive','category','default')}
		<li class="{if $mod=='tour_exhautive' && $act=='category'}current{/if}">
			<a href="{$PCMS_URL}/?&mod=tour_exhautive&act=category" title="{$core->get_Lang('Travel Styles')}">
				<span class="text">{$core->get_Lang('Travel Styles')}</span>
			</a>
		</li>
		{/if}
		{if $clsISO->getCheckActiveModulePackage($package_id,'property','transport','default')}
		<li class="{if $mod=='property' && $act=='transport'}current{/if}">
			<a href="{$PCMS_URL}/?mod=property&act=transport" title="{$core->get_Lang('Transportations')}">
				<span class="text">{$core->get_Lang('Transportations')}</span>
			</a>
		</li>
		{/if}
		{if $clsISO->getCheckActiveModulePackage($package_id,'property','activities','default')}
		<li class="{if $mod=='property' && ($act=='activities' || $act=='edit_activities')}current{/if}">
			<a href="{$PCMS_URL}/?mod=property&act=activities" title="{$core->get_Lang('Type of activity')}">
				<span class="text">{$core->get_Lang('Type of activity')}</span>
			</a>
		</li>
		{/if}

		{if $clsISO->getCheckActiveModulePackage($package_id,'tour_exhautive','category_country','default')}
		<li class="{if $mod=='tour_exhautive' && $act=='category_country'}current{/if}">
			<a href="{$PCMS_URL}/?&mod=tour_exhautive&act=category_country" title="{$core->get_Lang('Travel Styles by Countries')}">
				<span class="text">{$core->get_Lang('Travel Styles by Countries')}</span>
			</a>
		</li>
		{/if}
		{if $clsISO->getCheckActiveModulePackage($package_id,'tour_exhautive','category_country','default')}
		<li class="{if $mod=='tour_exhautive' && $act=='why_travelstyle_country'}current{/if}">
			<a href="{$PCMS_URL}/?&mod=tour_exhautive&act=why_travelstyle_country" title="{$core->get_Lang('Why Travel Styles by Countries')}">
				<span class="text">{$core->get_Lang('Why Travel Styles by Countries')}</span>
			</a>
		</li>
		{/if}

		{if $clsISO->getCheckActiveModulePackage($package_id,'tour_exhautive','property','default','MEAL')}
		<li class="{if $type=='MEAL'}current{/if}">
			<a href="{$PCMS_URL}/?mod=tour_exhautive&act=property&type=MEAL">
				<span class="text">{$core->get_Lang('Meals')}</span>
			</a>
		</li>
		{/if}
		{if $clsISO->getCheckActiveModulePackage($package_id,'tour_exhautive','property','default','TOUROPTION')}
		<li class="{if $type=='TOUROPTION'}current{/if}">
			<a href="{$PCMS_URL}/?mod=tour_exhautive&act=property&type=TOUROPTION" title="{$core->get_Lang('Price class')}">
				<span class="text">{$core->get_Lang('Price class')}</span>
			</a>
		</li>
		{/if}
		{if $clsISO->getCheckActiveModulePackage($package_id,'tour_exhautive','group','default')}
		<li class="{if $mod=='tour_exhautive' && $act=='group'}current{/if}">
			<a title="{$core->get_Lang('Market')}" href="{$PCMS_URL}/?mod=tour_exhautive&act=group">
				<span class="text">{$core->get_Lang('Market')}</span>
			</a>
		</li>
		{/if}
		{if $clsISO->getCheckActiveModulePackage($package_id,'tour_exhautive','property','default','VISITORTYPE')}
		<li class="{if $type=='VISITORTYPE'}current{/if}">
			<a href="{$PCMS_URL}/?mod=tour_exhautive&act=property&type=VISITORTYPE">
				<span class="text">{$core->get_Lang('Adults - Children - Infants type')}</span>
			</a>
		</li>
		{/if}
		{if $clsISO->getCheckActiveModulePackage($package_id,'tour_exhautive','price_range','default')}
		<li class="{if $mod=='tour_exhautive' && $act=='price_range'}current{/if}">
			<a href="{$PCMS_URL}/?mod=tour_exhautive&act=price_range">
				<span class="text">{$core->get_Lang('Price range')}</span>
			</a>
		</li>
		{/if}
		{if $clsISO->getCheckActiveModulePackage($package_id,'tour_exhautive','property','default','SIZEGROUP')}
		<li class="{if $type=='SIZEGROUP'}current{/if}">
			<a href="{$PCMS_URL}/?mod=tour_exhautive&act=property&type=SIZEGROUP" title="{$core->get_Lang('Price for Groups')}">
				<span class="text">{$core->get_Lang('Price for Groups')} <span class="badge s_pro label-warning">Pro</span></span>
			</a>
		</li>
		{/if}
		<li class="{if $mod=='tour_exhautive' && $act=='faqs'}current{/if}">
			<a href="{$PCMS_URL}/?mod=tour_exhautive&act=faqs" title="{$core->get_Lang('FAQs')}">
				<span class="text">{$core->get_Lang('FAQs')}</span>
			</a>
		</li>
		<li class="{if $type=='TOURGUIDE'}current{/if}">
			<a href="{$PCMS_URL}/?mod=tour_exhautive&act=property&type=TOURGUIDE">
				<span class="text">{$core->get_Lang('Tour guide')}</span>
			</a>
		</li>
		<li class="{if $type=='TOURROOM'}current{/if}">
			<a href="{$PCMS_URL}/?mod=tour_exhautive&act=property&type=TOURROOM" title="{$core->get_Lang('Room')}">
				<span class="text">{$core->get_Lang('Room')}</span>
			</a>
		</li>
	</ul>
</div>