	<script type="text/javascript">
		function openclose(idPadre){
			var cl = document.getElementsByClassName(idPadre);
			for (i=0; i<cl.length; i++){
				console.log(cl[i].style.display);
				if (cl[i].style.display == ""){
					cl[i].style.display = "none";
				}else if(cl[i].style.display == "none"){
					console.log(cl[i].style.display);
					cl[i].style.display = "";
				}
			}
		}
		
	 </script>		

	{function name=print_jerarquia}
				<ol>
					{foreach from=$data1 item=item}
						{if $item->getDesc() ne $data2}

							{if $item->getHijos() ne null}
								<li style="color:red;"><button onclick="openclose({$item->getID()});">+</button>{$item->getDesc()}</li>	
								{print_jerarquia data1=$item->getHijos() data2=$data2}
							{else}
								<li class="{$item->getPadre()}">{$item->getDesc()}</li>
							{/if}
						{/if}
					{/foreach}
				</ol> 
	{/function}
 
	{function name=desplegable}
					{foreach from=$data1 item=item}
						{if $item->getDesc() ne $data2}
							{if $item->getHijos() ne null}
								<option>
									{$aux = $item->getNivel()}
									{while ($aux-1)>0}
										&nbsp;&nbsp;&nbsp;
										{$aux=$aux-1}
									{/while}
									{$item->getDesc()}
								</option>
								{desplegable data1=$item->getHijos() data2=$data2}
							{else}
								<option>
									{$aux = $item->getNivel()}
									{while ($aux-1)>0}
										&nbsp;&nbsp;
										{$aux=$aux-1}
									{/while}
									{$item->getDesc()}
								</option>
							{/if}
						{/if}
					{/foreach}
	 {/function}
	 {include file='menu.tpl'}
     <main>
        <select><option>&nbsp;1</option><option>&nbsp;&nbsp;2</option></select>
         <div id="options">
			<select>{desplegable data1=$jerarquiaAlimentos->getHijos() data2=""}</select>
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