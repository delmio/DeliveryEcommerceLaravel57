(function (){
    var actualizarHora = function(){
        var fecha = new Date(),
            hora = fecha.getHours(),
            minuto = fecha.getMinutes(),
            segundos = fecha.getSeconds(),
            dia = fecha.getDay(),
            mes = fecha.getMonth(),
            anio = fecha.getFullYear(),
            ndia = fecha.getDate();

        var pHoras = document.getElementById('HORAS'),
            pMinuto = document.getElementById('MINUTOS'),
            pSegundos = document.getElementById('SEGUNDOS'),
            pNDia = document.getElementById('NDS'),
            pMes = document.getElementById('MES'),
            pAnio = document.getElementById('ANIO'),
            pDia = document.getElementById('DS');
            
        var DiaSemana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
        var Meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
        pDia.textContent = DiaSemana[dia];
        pNDia.textContent = ndia;
        pMes.textContent = Meses[mes];
        pHoras.textContent = hora;
        pAnio.textContent = anio;
        
        if(minuto <10){
            minuto = "0"+minuto;
        }

        if(segundos <10){
            segundos = "0"+segundos;
        }

        pSegundos.textContent = segundos;
        pMinuto.textContent = minuto;
    };
    actualizarHora();
    var inter = setInterval(actualizarHora,1000);
}())