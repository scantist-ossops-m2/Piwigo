{* $Id$ *}
<div id="content" class="content">

  <div class="titrePage">
    <ul class="categoryActions">
      <li><a href="{$U_HOME}" title="{'return to homepage'|@translate}"><img src="{$themeconf.icon_dir}/home.png" class="button" alt="{'home'|@translate}"/></a></li>
    </ul>
    <h2>{'User comments'|@translate}</h2>
  </div>

<form class="filter" action="{$F_ACTION}" method="get">

  <fieldset>
    <legend>{'Filter'|@translate}</legend>

    <label>{'Keyword'|@translate}<input type="text" name="keyword" value="{$F_KEYWORD}" /></label>

    <label>{'Author'|@translate}<input type="text" name="author" value="{$F_AUTHOR}" /></label>

    <label>
      {'Category'|@translate}
      <select name="cat">
        <option value="0">------------</option>
        {html_options options=$categories selected=$categories_selected}
      </select>
    </label>

    <label>
      {'Since'|@translate}
      <select name="since">
        {html_options options=$since_options selected=$since_options_selected}
      </select>
    </label>

  </fieldset>

  <fieldset>

    <legend>{'Display'|@translate}</legend>

    <label>
      {'Sort by'|@translate}
      <select name="sort_by">
        {html_options options=$sort_by_options selected=$sort_by_options_selected}
      </select>
    </label>

    <label>
      {'Sort order'|@translate}
      <select name="sort_order">
        {html_options options=$sort_order_options selected=$sort_order_options_selected}
      </select>
    </label>

    <label>
      {'Number of items'|@translate}
      <select name="items_number">
        {html_options options=$item_number_options selected=$item_number_options_selected}
      </select>
    </label>

  </fieldset>

  <p><input class="submit" type="submit" value="{'Filter and display'|@translate}"></p>

</form>

<div class="navigationBar">{$NAVBAR}</div>

{if isset($comments)}
<div id="comments">
	{include file='comment_list.tpl'}
</div>
{/if}

</div> <!-- content -->
