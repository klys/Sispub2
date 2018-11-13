function fecha()
{
	fecha = new Date()
	mes = fecha.getMonth()
	diaMes = fecha.getDate()
	diaSemana = fecha.getDay()
	anio = fecha.getFullYear()
	dias = new Array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sábado')
	meses = new Array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre')
	document.write('<span id="fecha">')
	document.write (dias[diaSemana] + ", " + diaMes + " de " + meses[mes] + " de " + anio+"&emsp;")
	document.write ('</span>')
}



var puntos = ":"
function hora(){
	var fecha = new Date()
	var hora = fecha.getHours()
	var minuto = fecha.getMinutes()
	var segundo = fecha.getSeconds()
	var meridiano = " am"
	if(hora > 12){hora -= 12; meridiano = " pm"}
	if (hora < 10) {hora = "0" + hora}
	if (minuto < 10) {minuto = "0" + minuto}
	if (segundo < 10) {segundo = "0" + segundo}
	var horita = hora + puntos + minuto + puntos + segundo + meridiano
	document.getElementById('hora').firstChild.nodeValue = horita
	tiempo = setTimeout('hora()',1000)
}

function inicio(){
	document.write('<span id="hora">')
	document.write ('000000</span>')
	hora()
}