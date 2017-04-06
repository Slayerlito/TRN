     {function name=print_jerarquia}
				<ol>
					{foreach from=$data item=item}
						<li>{$item->getDesc()}</li>
						{if $item->getHijos() ne null}
							{print_jerarquia data=$item->getHijos()}
						{/if}
					{/foreach}
				</ol> 
	 {/function}
	 {include file='menu.tpl'}
     <main>
         <div id="options">
			{if $jerarquiaAlimentos ne null}
				<p>Jerarqu&iacute;a de Alimentos</p>
				{print_jerarquia data=$jerarquiaAlimentos->getHijos()}
			{/if}
         </div>
     </main>