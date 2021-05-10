<div id="_desktop_user_info">
  <div class="pst_userinfotitle">
  	  <i class="fa fa-user-o hidden-lg-up hidden-md-down"></i>
	  <span class="user-info-icon"></span>
	  <span class="user-info-title">{l s='My Account' d='Shop.Theme.Global'}</span><i class="material-icons expand-more hidden-lg-up hidden-md-down">&#xE5CF;</i>
  </div>
  <div class="user-info">
    {if $logged}
	  <a
        class="account"
        href="{$my_account_url}"
        title="{l s='View my customer account' d='Shop.Theme.Global'}"
        rel="nofollow"
      >
        <i class="material-icons logged">&#xE7FF;</i>
        <span class="user-name">{$customerName}</span>
      </a>
      <a
        class="logout"
        href="{$logout_url}"
        rel="nofollow"
      >
        <i class="material-icons">&#xE898;</i>
        {l s='Sign out' d='Shop.Theme.Global'}
      </a>      
    {else}
      <a
        href="{$my_account_url}"
        title="{l s='Log in to your customer account' d='Shop.Theme.Global'}"
        rel="nofollow"
      >
        <i class="material-icons">&#xE899;</i>
        <span class="sign-in">{l s='Sign in' d='Shop.Theme.Global'}</span>
      </a>
    {/if}
	
	{hook h='displayLanguage'}
	{hook h='displayCurrency'}
	
  </div>
</div>