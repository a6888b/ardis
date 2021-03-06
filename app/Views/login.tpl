{extends file='base/layout.tpl'}
{block name=content}

    {if isset($message) && is_array($message)}
      <div class='container'>
        <div class='row'>
        {foreach from=$message item=$msg}
          <div class="p-3 mb-2 bg-danger text-white">{$msg}</div>                                  
        {/foreach}
        </div>
      </div>
    {/if}
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <!-- Icon -->
        <div class="fadeIn first">
          <img src="{base_url('assets/Images/logo.webp')}" id="icon" alt="User Icon" />
        </div>
    
        <!-- Login Form -->
        <form action="{base_url('/visitor/login/')}" method="POST">
          <input type="text" id="login" class="fadeIn second" required name="username" placeholder="pseudo">
          <input type="password" id="password" class="fadeIn third" required name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Se connecter">
        </form>
        
    
      </div>
    </div>
{/block}