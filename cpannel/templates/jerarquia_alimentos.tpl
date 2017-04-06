	 {function name=print_jerarquia}
				<ol>
					{foreach from=$data1 item=item}
						{if $item->getDesc() ne $data2}
							<li>{$item->getDesc()}</li>
							{if $item->getHijos() ne null}
								{print_jerarquia data1=$item->getHijos() data2=$data2}
							{/if}
						{/if}
					{/foreach}
				</ol> 
	 {/function}
	 
	 {include file='menu.tpl'}
     <main>
         <div id="options">
			{if $jerarquiaAlimentos->getHijos() ne null}
				<p>Jerarqu&iacute;a de Alimentos</p>
				{print_jerarquia data1=$jerarquiaAlimentos->getHijos() data2=""}
			{/if}
         </div>
		 <div id="options">
			{if $jerarquiaAlimentos->getHijos() ne null}
				<p>Desplegable</p>
				{print_jerarquia data1=$jerarquiaAlimentos->getHijos() data2="Carnes"}
			{/if}
		 
     </main>