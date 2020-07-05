 <template>
    <main class="main">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div>
                        <label class="titulo-encabezados">Informe de consultas realizadas</label> 
                    </div>
                </div>
                 <!-- Listado-->
                <template>
                    <div class="card-body">
                        <div class="form-group row border">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><strong>Seleccione seleccione desde y hasta que fecha desea el informe</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">Desde:</label>
                                        <input type="month" name="fecha" id="fecha" class="form-control"  v-model="fecha1">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">Hasta:</label>
                                        <input type="month" name="fecha" id="fecha" class="form-control" v-model="fecha2">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" @click="mostrarInforme()">Generar</button>
                                    </div>
                                </div>
                        </div>
                           <div v-show="errorDatos" class="form-group row div-error">
                                    <div class="text-center text-error">
                                        <div v-for="error in errorMostrarMsj" :key="error" v-text="error">
                                        </div>
                                    </div>
                                </div> 
                        <!--***************************************************************** -->
                        <!--<h2>Abril - Mayo</h2>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Medicamento</th>
                                    <th>Marca</th>
                                    <th>Proveedor</th>
                                    <th>Precio de Compra ($)</th>
                                    <th>Precio Unitario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Acetaminofen 500 mg Comprimidos</td>
                                    <td>Farmedic</td>
                                    <td>SaludBien</td>
                                    <td>143.75</td>
                                    <td>$0.08</td>
                                </tr>
                                 <tr>
                                    <td>Acetaminofen 500 mg Comprimidos</td>
                                    <td>MK</td>
                                    <td>Dizac</td>
                                    <td>139.75</td>
                                    <td>$0.97</td>
                                </tr>
                                <tr>
                                    <td>Ibuprofeno 400 mg Comprimidos</td>
                                    <td>Farmedic</td>
                                    <td>SaludBien</td>
                                    <td>140.89</td>
                                    <td>$0.17</td>
                                </tr>
                                <tr>
                                    <td>Zinc 50 mg Comprimidos</td>
                                    <td>Vijosa</td>
                                    <td>SaludBien</td>
                                    <td>205.56</td>
                                    <td>$0.30</td>
                                </tr>
                                <tr>
                                    <td>Zinc 50 mg Comprimidos</td>
                                    <td>Teramed</td>
                                    <td>Steiner</td>
                                    <td>159.02</td>
                                    <td>$0.28</td>
                                </tr>
                                <tr>
                                    <td>Zinc 50 mg Comprimidos</td>
                                    <td>MK</td>
                                    <td>SaludBien</td>
                                    <td>100.00</td>
                                    <td>$0.20</td>
                                </tr>
                                <tr>
                                    <td>Vitamina C 500 mg</td>
                                    <td>MK</td>
                                    <td>Dizac</td>
                                    <td>160.75</td>
                                    <td>$0.35</td>
                                </tr>
                                <tr>
                                    <td>Loratadina 10 mg</td>
                                    <td>MK</td>
                                    <td>Steiner</td>
                                    <td>102.75</td>
                                    <td>$0.077</td>
                                </tr>
                            </tbody> 
                        </table>-->

     <!-- **********************************************************-->                   
                        <h2>Junio</h2>
                        <table class="table table-bordered table-striped table-sm">
                            <tbody>
                                <tr>
                                    <th>Clinica Integral Soyapango</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th>N° de Consultas Realizadas</th>
                                    <th>N° de Pacientes Femeninos</th>
                                    <th>N° de Pacientes Masculinos</th>
                                    
                                </tr>
                                <tr>
                                    <td>50</td>
                                    <td>32</td>
                                    <td>18</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered table-striped table-sm">
                            <tbody>
                                <tr>
                                    <th>Clinica Integral Ilopango</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>N° de Consultas Realizadas</th>
                                    <th>N° de Pacientes Femeninos</th>
                                    <th>N° de Pacientes Masculinos</th>
                                    
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>22</td>
                                    <td>14</td>
                                </tr>
                            </tbody> 
                        </table>
                         
            <!-- Aqui tabla de Julio -->
                        &nbsp;
                        &nbsp;
                       <h2>Julio</h2>
                        <table class="table table-bordered table-striped table-sm">
                            <tbody>
                                <tr>
                                    <th>Clinica Integral Soyapango</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>N° de Consultas Realizadas</th>
                                    <th>N° de Pacientes Femeninos</th>
                                    <th>N° de Pacientes Masculinos</th>
                                </tr>
                                <tr>
                                    <td>66</td>
                                    <td>25</td>
                                    <td>41</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered table-striped table-sm">
                            <tbody>
                                <tr>
                                    <th>Clinica Integral Ilopango</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>N° de Consultas Realizadas</th>
                                    <th>N° de Pacientes Femeninos</th>
                                    <th>N° de Pacientes Masculinos</th>
                                    
                                </tr>
                                <tr>
                                    <td>58</td>
                                    <td>20</td>
                                    <td>38</td>
                                </tr>
                            </tbody> 
                        </table>
                        <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" @click="mostrarInforme()">Imprimir PDF</button>
                                    </div>
                            </div>
                    </div>
                </template>
                <!--Fin Listado-->
                            
                </div>
                <!-- Fin ejemplo de tabla Listado -->
                </div>
            
        </main>
</template>

<script>
    export default {
        data (){
            return {
                fecha1 : '',
                fecha2:'',
                errorDatos:0,
                errorMostrarMsj:[],
            }
        },
        methods : {
           

             listarInforme(){
                let me=this;
                var url= '/producto/informe?fecha1='+ me.fecha1 + '&fecha2='+ me.fecha2;
                axios.get(url).then(function (response) {
                    me.respuesta = response.data;
                    me.llenar();
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            mostrarInforme(){
                let me=this;
                me.validarvalores()
               // me.listarInforme();
            },
            validarvalores(){
                this.errorDatos=0;
                this.errorMostrarMsj=[];
               if (!this.fecha1 && !this.fecha2)this.errorMostrarMsj.push("Favor ingresar un periodo de tiempo");
                if (!this.fecha1 && this.fecha2)this.errorMostrarMsj.push("Favor ingresar un mes de inicio");
               if (!this.fecha2 && this.fecha1)this.errorMostrarMsj.push("Favor ingresar un mes de fin");
                if (this.fecha1>this.fecha2 && this.fecha2)this.errorMostrarMsj.push("Favor ingresar un mes valido de fin");
                if(this.errorMostrarMsj.length) this.errorDatos=1;
            
                return this.errorDatos;
            },
      
        },
        
        
        }
</script>
<style>    
    .modal-content{
        width: 100% !important;
        position: absolute !important;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color: red !important;
        font-weight: bold;
    }
    @media (min-width: 600px) {
        .btnagregar {
            margin-top: 2rem;
        }
    }

</style>

