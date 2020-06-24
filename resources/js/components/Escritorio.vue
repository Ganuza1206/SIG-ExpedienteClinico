<template>
   <main class="main">
            <!-- Breadcrumb -->
          
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                    <div id="cabezara">
                        <label id="titulo-escri">SISTEMA DE INFORMACIÓN GERENCIAL PARA EL APOYO DE LOS PROCESOS INTERNOS EN LA CLÍNICA MÉDICA</label>
                    </div>
                    <div class="card-body">
                    <div class="input-group margen">
                            <div id="ima"> 
                                <img id="imagen" src="img/clinicadibujo.jpg">
                            </div>
                    </div>
                 <br>
                 <br>
                        <table id="table">
                            <thead>
                                <tr>
                                    <th id="textoAlin">MISIÓN </th>
                                    <th id="textoAlin">VISIÓN</th>
                                    <th id="textoAlin">VALORES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>   
                                    <td id="textoAlinJ">Ofrecer servicios de salud de buena calidad a un precio accesible a la población salvadoreña.</td>
                                    <td id="textoAlinJ">Crear un sistema de salud que ofrezca los mejores servicios profesionales enfocados en la excelencia y calidez a la asistencia a los pacientes y sus familias</td>
                                    <td id="textoAlinJ">Respeto, Responsabilidad, Tolerancia, Equidad, Ética, Compromiso, Eficiencia</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- tabla Listado -->
            </div>
        </main>
</template>
<style>
    .modal-content{
        width: 100% !important;
        position: absolute !important
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .margen{
        margin-bottom: 10px;
    }
    .div-error{
        clear:both;
        justify-content:center;
    }
    .text-error{
        color: red !important;
        font-weight:bold;
    }
    #imagen{
        width: 400px; 
        height: 300px;
        }
    #titulo-escri {
      font-size:  xx-large;
      font-weight: bold;
      text-align: center;
    }
    #ima{
         margin-left: auto;
         margin-right: auto;
    }
    #textoAlin{
        text-align: center;
    }
    #table {
            display: table;
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
        }
    #textoAlinJ{
        text-align: justify;
        border: 1px solid #c2cfd6;
        padding: 10px;
    }
    #cabezara{
        background-color: #f0f3f5;
        border-bottom: 1px solid #c2cfd6; 
        text-align: center;
    }
</style>