<div class="booking_header_box">
	<div class="container">
		<div class="header-main">
			<div class="logo_booking"><a href="{$DOMAIN_NAME}{$extLang}"  title ="{$PAGE_NAME}">  <img class="full-width height-auto" alt="{$PAGE_NAME}" src="{$clsConfiguration->getImageValue('HeaderLogo')}" /></a></div>
			<div class="count_step_booking hidden-xs">
				{if $cartSessionService or $cartSessionVoucher or $cartSessionCruise}
				<div class="row">
					<div class="col-sm-4 p-0">
						<p class="text_num_step">1</p>
						<p class="text_step color_1c1c1c {if $act eq 'default'}text-bold{/if}">{$core->get_Lang('Cart')}</p>
					</div>
					<div class="col-sm-4 p-0">
						<p class="text_num_step step-2 step-empty">2</p>
						<p class="text_step color_666 {if $act eq 'book'}text-bold{/if}">{$core->get_Lang('Payment details')}</p>
					</div>
					<div class="col-sm-4 p-0">
						<p class="text_num_step step-3 step-empty">3</p>
						<p class="text_step color_666">{$core->get_Lang('Payment confirmed')}</p>
					</div>
				</div>
				{/if}
			</div>
			<div class="box_phone_booking">
				<a class="phone_booking" href="tel:{$clsConfiguration->getValue('CompanyPhone')}" title="{$core->get_Lang('Call')}"><i class="fa fa-phone" aria-hidden="true"></i>{$core->get_Lang('Question Call')}: {$clsConfiguration->getValue('CompanyPhone')}</a>
			</div>
		</div>
	</div>
</div>	