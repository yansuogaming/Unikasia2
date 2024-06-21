<div class="share_news">
  <div class="sharer-icons" data-link_share="{$link_share}" data-title_share="{$title_share}" data-description_share="{$description_share}">

  </div>
</div>
{literal}
<style type="text/css">
  .share_news {
    display: inline-block;
    text-align: right;
    float: right;
  }

  .navbarHeads-title .share_box.open .share_news {
    visibility: visible
  }

  .share_news .sharer-icons {
    display: flex;
  }

  .share_news .sharer-icons a {
    cursor: pointer;
    height: 30px;
    width: 30px;
    font-size: 16px;
    text-decoration: none;
    border: 1px solid transparent;
    border-radius: 50%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 15px;
    transition: all 0.3s ease-in-out;
  }

  .share_news .sharer-icons a i {
    transition: transform 0.3s ease-in-out;
  }

  .share_news .sharer-icons a:hover {
    color: #fff;
  }

  .share_news .sharer-icons a.sharer-icon-youtube {
    color: #1385c4;
    border-color: #89c6e7;
  }

  .share_news .sharer-icons a.sharer-icon-youtube:hover {
    background: #1385c4;
    color: #FFF
  }

  .share_news .sharer-icons a.sharer-icon-instagram {
    color: #1385c4;
    border-color: #89c6e7;
  }

  .share_news .sharer-icons a.sharer-icon-instagram:hover {
    background: #1385c4;
    color: #FFF
  }


  .share_news .sharer-icons a.sharer-icon-linkedin {
    color: #1385c4;
    border-color: #89c6e7;
  }

  .share_news .sharer-icons a.sharer-icon-linkedin:hover {
    background: #1385c4;
    color: #FFF
  }

  .share_news .sharer-icons a.sharer-icon-pinterest {
    color: #f13434;
    border-color: #f9b7b7;
  }

  .share_news .sharer-icons a.sharer-icon-pinterest:hover {
    background: #f13434;
    color: #FFF
  }

  .share_news .sharer-icons a.sharer-icon-facebook {
    color: #1877f2;
    border-color: #b7d4fb;
  }

  .share_news .sharer-icons a.sharer-icon-facebook:hover {
    background: #1877f2;
    color: #FFF
  }

  .share_news .sharer-icons a.sharer-icon-twitter {
    color: #46c1f6;
    border-color: #b6e7fc;
  }

  .share_news .sharer-icons a.sharer-icon-twitter:hover {
    background: #46c1f6;
    color: #FFF
  }
</style>
<script type="text/javascript">
  $(".sharer-icons").each(function(index) {
    var link_share = $(this).data('link_share');
    var title_share = $(this).data('title_share');
    var description_share = $(this).data('description_share');
    $(this).empty().sharer({
      networks: ["youtube", "instagram", "facebook", "twitter"],
      url: DOMAIN_NAME + link_share,
      title: title_share,
      description: description_share,
    });
  });
  $(".icon_share").click(function() {
    $(".share_box").toggleClass('open');
  });

  $('.share_box')
  $(".share_box").click(function() {
    $(this).toggleClass('open');
  });
  $(".sharer-icons").each(function(index) {
    var link_share = $(this).data('link_share');
    var title_share = $(this).data('title_share');
    $(this).empty().sharer({
      networks: ["facebook", "twitter", "linkedin", "pinterest"],
      url: DOMAIN_NAME + link_share,
      title: title_share
    });
  });
</script>
{/literal}