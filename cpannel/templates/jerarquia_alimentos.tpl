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
	 {function name=desplegable}
				<ol>
					{foreach from=$data1 item=item}
						{if $item->getDesc() ne $data2}
							<li>{$item->getDesc()}</li>
							{if $item->getHijos() ne null}
								{desplegable data1=$item->getHijos() data2=$data2}
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
				{print_jerarquia data=$jerarquiaAlimentos->getHijos()}
			{/if}
         </div>
		 <div id="options">
			{if $jerarquiaAlimentos->getHijos() ne null}
				<p>Desplegable</p>
				{desplegable data1=$jerarquiaAlimentos->getHijos() data2="Carnes"}
			{/if}
		 
     </main>