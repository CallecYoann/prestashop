<!-- Block mymodule -->
<div id="mymodule_block_left" class="block">
  <h4>Souhaite lui sa fête !</h4>
  <div class="block_content">
    <p>Bonjour,
       {if isset($firstname_customer) && $firstname_customer}
           {$firstname_customer}
           {if isset($lastname_customer) && $lastname_customer}
            {$lastname_customer}
           {/if}
       {else}
           World
       {/if}
       ! <br><br>
    </p>   
    
    <p>Nous sommes le {date("d M Y")}<br>
    <p>Nous fêtons la {$row_saint}<br><br>
    
        
        
        
    <ul>
      <li><a href="{$my_module_link}" title="Click this link">Click moi pour voir le dicton du jour !</a></li>
    </ul>
  </div>
</div>
<!-- /Block mymodule -->