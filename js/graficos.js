/* SCRIPTS PARA LOS GRÁFICOS DE MYTRN */

/* FUNCION GRAFICO BURBUJA PROGRESO */
function burbuja(){
	$('#bubble').waterbubble({
	// bubble size
	// tamaño de la burbuja 
	radius: 100,
	// border width
	// ancho del borde
	lineWidth: '',
	// data to present
	// datos que representa / 
	data: 0.2,
	// color of the water bubble
	// color del agua de la burbuja
	waterColor: 'rgba(25, 139, 201, 1)',
	// text color
	// color del texto
	textColor: 'rgba(06, 85, 128, 0.8)',
	// custom font family
	// fuente personalizada del texto
	font: '',
	// show wave
	// ondulación de la ola 
	wave: true,
	// custom text displayed inside the water bubble
	//texto dentro de la burbuja
	txt: '20%',
	// enable water fill animation
	// animacion del gráfico
	animation: true
	});
}

/* FUNCION GRAFICO LINEAL PROGRESO */

function linea_progreso(){
	var ctx = document.getElementById("progreso");
	var progreso = new Chart(ctx, {
	type: 'line',
	data: {
		datasets: [{
			label: 'Progreso',
			data: [{
				x: -10,
				y: 0
			}, {
				x: 0,
				y: 10
			}, {
				x: 10,
				y: 5
			}]
		}]
	},
	options: { responsive: true,
		scales: {
			xAxes: [{
				type: 'linear',
				position: 'bottom'
			}]
		}
	}
	});
}

/* FUNCION GRAFICO LINEAL PESO */

function linea_peso(){
	var ctx = document.getElementById("peso");
	var peso = new Chart(ctx, {
	type: 'line',
	data: {
		datasets: [{
			label: 'Enero',
			fill: false,
			data: [{
				x: 0,
				y: 95
			}, {
				x: 1,
				y: 90
			}, {
				x: 2,
				y: 85
			}]
		}]
	},
	options: { responsive: true,
		scales: {
			xAxes: [{
				type: 'linear',
				position: 'bottom'
			}]
		}
	}
	});
}