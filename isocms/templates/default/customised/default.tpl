<div class="page_container page{$mod}{$act}">
<div class="attractions">
    {$core->getBlock('top_attraction')}
</div>
<div class="alsoLike">
    {$core->getBlock('alsoLike_hotel')}
</div>

</div>

<div class="attractions">
    {$core->getBlock('top_attraction')}
</div>
<div class="alsoLike">
    {$core->getBlock('alsoLike_hotel')}
</div>


</div>
<script type="text/javascript">
    var url = window.location.href;
    var $_View_more = '{$core->get_Lang("View more")}';
    var $_Less_more = '{$core->get_Lang("Less more")}';
    var $Loading = '{$core->get_Lang("Loading")}';
    var selectmonth='{$core->get_Lang("select month")}';
    var $_Expand_all = '{$core->get_Lang("Expand all")}';
    var $_Collapse_all = '{$core->get_Lang("Collapse all")}';
    var $_LANG_ID = '{$_LANG_ID}';
</script>

<script src="{$URL_JS}/jquery.countdown.min.js?v={$upd_version}"></script>
<script src="{$URL_JS}/jquery-confirm.min.js?v={$upd_version}"></script>