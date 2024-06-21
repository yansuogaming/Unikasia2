<section class="top-attractions">
    <div class="container">
        <h2 class="txt_title_attractions">{$clsConfiguration->getOutTeam('TopDestinationTitle')}</h2>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="list-holidays">
                    {section name=i loop=$listSelected}
                    <div class="holiday">
                        <div class="hnv_item_holiday">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                                    <a href="{$clsClassTable->getLink($listSelected[i].city_id)}" title="{$clsClassTable->getTitle($listSelected[i].city_id)}">
                                        <div class="hnv_item_image_holiday">
                                            <img class="img_holiday" src="{$clsClassTable->getImage($listSelected[i].city_id, 257, 158)}" onerror="this.src='{$URL_IMAGES}/none_image.png'" width="257" height="158">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                                    <div class="content_holiday">
                                        <h3 class="title_hodiday pb-0">
                                            <a href="{$clsClassTable->getLink($listSelected[i].city_id)}" title="{$clsClassTable->getTitle($listSelected[i].city_id)}">
                                                {$clsClassTable->getTitle($listSelected[i].city_id)} Holidays
                                            </a>
                                        </h3>
                                        <p class="txt_holiday pb-0">{$clsISO->limit_textIso($clsClassTable->getIntro($listSelected[i].city_id)|html_entity_decode, 15)}</p>
                                        <p class="txt_detail_holiday pb-0">12 tours from USD $124</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/section}
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8479708.1163098!2d98.40041518043569!3d16.03001272123944!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31157a4d736a1e5f%3A0xb03bb0c9e2fe62be!2sVietnam!5e0!3m2!1sen!2sus!4v1715618209377!5m2!1sen!2sus" width="100%" height="96%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="btn-attraction text-center mt-5">
			<button class="btn txt_btn">Explore all attractions 
				<img class="ms-2" src="{$URL_IMAGES}/arrow_right.png" alt="">
			</button>
        </div>
    </div>
</section>

<style>
	.top-attractions .btn-attraction .txt_btn {
		border:none;
	}
	
	
	.content_holiday .title_hodiday a:hover {
		color: #FFA718;
	}
	
.top-attractions .holiday:hover {

    box-shadow: 0px 12px 24px 0px rgba(255, 167, 24, 0.36);

}
	.btn-attraction .txt_btn {
    transition: ease-in-out all 0.3s;
}
.btn-attraction .txt_btn:hover {
    background: #e88f00 !important;
}
	

</style>