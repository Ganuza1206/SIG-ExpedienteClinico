<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li @click="menu=0" class="nav-item">
                        <a class="nav-link active" href="#"><i class="icon-speedometer"></i> Escritorio</a>
                    </li>
            
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Acceso</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=10" class="nav-item">
                                <a class="nav-link active" href="#"><i class="icon-user"></i> Usuarios</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-book-open"></i>Informes Resumidos</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=7" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i>Reportes de medicamentos</a>
                            </li>
                            <li @click="menu=8" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i>Reportes de citas</a>
                            </li>
                        </ul>
                    </li>
                  <!--  <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i>Sacramentos</a>
                        <ul class="nav-dropdown-items">
                        <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i>Bautizo</a>
                            <ul class="nav-dropdown-items">
                            <li @click="menu=3" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bag"></i>Historial</a>
                            </li>
                            </ul>
                        </li>
                            <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i>Primera Comunion</a>
                            <ul class="nav-dropdown-items">
                            <li @click="menu=5" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bag"></i>Historial</a>
                            </li>
                            </ul>
                            </li>
                            <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i>Confirma</a>
                            <ul class="nav-dropdown-items">
                            <li @click="menu=20" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bag"></i>Historial</a>
                            </li>
                            </ul>
                            </li>
                            <li @click="menu=6" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bag"></i>Matrimonio</a>
                            </li>
                        </ul>
                    </li>
        
                    <li @click="menu=2" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bag"></i>Calendario de Eventos</a>
                    </li>-->
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-book-open"></i>Informes Semi-Resumidos</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=12" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i>Reportes de medicamentos</a>
                            </li>
                            <li @click="menu=13" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i>Reportes de citas</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!--<li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i>Donaciones</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=34" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i>Informe</a>
                            </li>
                        </ul>
                    </li>

                </ul>-->
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
