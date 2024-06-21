<main id="main" class="page_container home_page_container">
    {$core->getBlock('slider_home')}
    <div class="main_page">
        <div class="home_search_box"></div>
        <section class="section_home section_about">
            <div class="container">
                <div class="about_max_width_box">
                    <div class="header_home_box">
                        <h2 class="title_home_box">{$core->get_Lang('AGENCE HYOUR LUXURY & CONFIDENCE LOCAL EXPERT FOR SOUTH EAST ASIA ANOI VOYAGES')}</h2>
                    </div>
                    <div class="content_home_box">
                        <div class="intro tinymce_Content">
                        In the boundless expanse of Asia lies a treasure trove of wonders waiting to be explored.  
    Amidst the sea of information inundating us, we often find ourselves lost in a whirlwind of options – See this, do that, don’t miss this. The abundance of choices can leave us feeling overwhelmed, with little regard for how we truly want to feel.  
    Enter us – the local experts, the offspring of Asia.  
    We are a company of passionate individuals celebrated for curating unforgettable travel adventures. With us, experience Asia authentically, guided by those who truly understand its essence. 
                        </div>
                        <div class="button_link"><a title="{$core->get_Lang('LET’S GO. START PLANNING NOW!')}">{$core->get_Lang('LET’S GO. START PLANNING NOW!')} <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none">
  <path d="M15.75 7.72559L0.75 7.72559" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a></div>
                    </div>
                </div>
            </div>
        </section>
        {$core->getBlock('Lbox_cattourHomePage')}
        <section class="section_home section_destination">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box">{$core->get_Lang('DESTINATIONS')}</h2>
                    <div class="intro_box">They are endearing, fascinating, secret, enchanting...between the 5 is your heart torn?  Follow us !</div>
                </div>
            </div>

        </section>
         {if $listWhyHome}
        <section class="section_home section_why_with_us">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box mb40">{$core->get_Lang('The reasons you should book with us')}</h2>
                </div>
                <div class="content_home_box">
                    <div class="list_why">
                        <div class="row">
                            {section name=i loop=$listWhyHome}
                            {assign var=title value=$clsWhy->getTitle($listWhyHome[i].why_id,$listWhyHome[i])}
                            <div class="col-lg-4">
                                <div class=" item_why box_col">
                                    <div class="icon_why">
                                        <img src="{$clsWhy->getIcon($listWhyHome[i].why_id,$listWhyHome[i])}" alt="{$title}" width="48" height="48" class="img100">
                                    </div>
                                    <div class="body_why">
                                        <h3 class="title">{$title}</h3>
                                        <div class="intro limit_2line">
                                            {$clsWhy->getIntro($listWhyHome[i].why_id,$listWhyHome[i])}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {/section}
                        </div>
                    </div>
                </div>
                {$core->getBlock('partner')}
            </div>
        </section>
        {/if}
        {$core->getBlock('testimonials')}


        <section class="section_home section_trip">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box">{$core->get_Lang('EXPLORE OUR TRIPS')}</h2>

                </div>
            </div>

        </section>
        <section class="section_home section_how_it_work">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box">{$core->get_Lang('HOW IT WORKS')}</h2>

                </div>
            </div>

        </section>
        <section class="section_home section_news">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box">{$core->get_Lang('THE UPDATE NEWS')}</h2>

                </div>
            </div>
        </section>
        <section class="section_home section_contact">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box">{$core->get_Lang('Your perfect trip begins with a conversation')}</h2>

                </div>
            </div>
        </section>
        <section class="section_home section_ready">
            <div class="container">
                <div class="header_home_box">
                    <h2 class="title_home_box">{$core->get_Lang('SO, READY TO START?')}</h2>
                    <div class="intro_box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu, bibendum purus scelerisque ipsum id. Fringilla ipsum elementum aliquam aliquam sed duis feugiat molestie nisl. Sed sit cursus vulputate dignissim.</div>
                </div>
            </div>

        </section>
    </div>
</main>
