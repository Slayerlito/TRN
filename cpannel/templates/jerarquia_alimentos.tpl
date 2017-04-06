     {include file='menu.tpl'}
     <main>
         <div id="options">
			{if $jerarquiaAlimentos ne null}
				<p>Jerarqu&iacute;a de Alimentos</p>
				<ol>
					{foreach from=$jerarquiaAlimentos->getHijos() item=item}
					<li>{$item->getDesc()}</li>
					{/foreach}
				</ol> 
			{/if}
         </div>
     </main>