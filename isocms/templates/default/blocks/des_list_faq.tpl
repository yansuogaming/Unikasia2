<div class="des_list_faq">
    <div class="container">
        <div class="des_list_faq_title">
            <h2>{$clsConfiguration->getOutTeam('FAQTitle')}</h2>
        </div>
        <div class="des_list_faq_content">
            <div class="accordion" id="accordion_destination">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box_left">
                            {if $list_faq_country}
                            {section name=i loop=$list_faq_country}
                            {assign var=key value=$smarty.section.i.iteration}
                            {assign var=faq_id value=$list_faq_country[i].faq_id}

                            {if $key eq 1}
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading_{$key}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{$key}" aria-expanded="true" aria-controls="collapse_{$key}">
                                        {$clsFAQ->getTitle($faq_id)}
                                    </button>
                                </h2>
                                <div id="collapse_{$key}" class="accordion-collapse collapse show" aria-labelledby="heading_{$key}" data-bs-parent="#accordion_destination">
                                    <div class="accordion-body">
                                        {$clsFAQ->getContent($faq_id)}
                                    </div>
                                </div>
                            </div>
                            {elseif $key gt 1 && $key % 2 eq 1}
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading_{$key}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{$key}" aria-expanded="false" aria-controls="collapse_{$key}">
                                        {$clsFAQ->getTitle($faq_id)}
                                    </button>
                                </h2>
                                <div id="collapse_{$key}" class="accordion-collapse collapse" aria-labelledby="heading_{$key}" data-bs-parent="#accordion_destination">
                                    <div class="accordion-body">
                                        {$clsFAQ->getContent($faq_id)}
                                    </div>
                                </div>
                            </div>
                            {/if}
                            {/section}
                            {/if}
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="box_right">
                            {if $list_faq_country}
                            {section name=i loop=$list_faq_country}
                            {assign var=key value=$smarty.section.i.iteration}
                            {assign var=faq_id value=$list_faq_country[i].faq_id}
                            {if $key gt 1 && $key % 2 eq 0}
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading_{$key}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{$key}" aria-expanded="false" aria-controls="collapse_{$key}">
                                        {$clsFAQ->getTitle($faq_id)}
                                    </button>
                                </h2>
                                <div id="collapse_{$key}" class="accordion-collapse collapse" aria-labelledby="heading_{$key}" data-bs-parent="#accordion_destination">
                                    <div class="accordion-body">
                                        {$clsFAQ->getContent($faq_id)}
                                    </div>
                                </div>
                            </div>
                            {/if}
                            {/section}
                            {/if}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>