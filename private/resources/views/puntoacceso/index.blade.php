@extends('layouts.app')

@section('content')

    <div id="wrapper">
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav">
                <div class="sidebar-head">
                    <img src="<?php echo get_template_directory_uri();?>/images/WIFIdark.png" style="max-height: 190px; max-width: 190px;" alt="home" class="dark-logo img-responsive mt-2" />
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0 0;">
                        
                        @if(isset($current_user))
                            <a href="{{ route('usuario.show', $current_user) }}" class="waves-effect">
                            <i class="fa fa-user fa-fw" aria-hidden="true"></i>Perfil</a>
                        @else
                            <a href="{{ route('login') }}" class="waves-effect">
                            <i class="fa fa-user fa-fw" aria-hidden="true"></i>Login</a>
                        @endif
                    </li>
                    
                    <li>
                		<a href="http://informatica.ieszaidinvergeles.org:9025/proyectofinalWP/chart" class="waves-effect"><i class="fa fa-bar-chart fa-fw"></i>
                		Ver estadisticas
                		</a>
                    </li>
                    
                    <li>
                        {{-- @if(Auth::user()->tipo == 'admin') --}}
                		<a href="{{ route('usuario.index') }}" class="waves-effect">
                		    <i class="fa fa-users fa-fw"></i> Ver usuarios
                		</a>
                		{{-- @endif --}}
                    </li>
                    
                    <li>
                        {{-- @if(Auth::user()->tipo == 'admin') --}}
                		<a href="{{ route('conexion.index') }}" class="waves-effect">
                		    <i class="fa fa-sitemap fa-fw"></i> Ver conexiones
                		</a>
                		{{-- @endif --}}
                    </li>
                    
                    <li>
                        {{-- @if(Auth::user()->tipo == 'admin') --}}
                		<a href="{{ route('activo.index') }}" class="waves-effect">
                		    <i class="fa fa-clock-o fa-fw"></i> Ver p. activos
                		</a>
                		{{-- @endif --}}
                    </li>
                    @auth
                    <li>
                        @if(Auth::user()->tipo == 'admin')
                		<a href="{{ route('puntoacceso.create') }}" class="waves-effect"><i class="fa fa-wifi fa-fw"></i>
                		Crear p. de acceso
                		</a>
                		@endif
                    </li>
                    
                    <li>
                        @if(Auth::user()->tipo == 'admin')
                		<a href="{{ route('usuario.create') }}" class="waves-effect">
                		    <i class="fa fa-user-plus fa-fw"></i> Crear técnico
                		</a>
                		@endif
                    </li>
                    
                    <li>
                        @if(Auth::user()->tipo == 'admin')
                		<a href="{{ route('activo.create') }}" class="waves-effect">
                		    <i class="fa fa-bolt fa-fw"></i> Crear p. activo
                		</a>
                		@endif
                		@endauth
                    </li>

                </ul>
                
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
     
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Usuarios</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">{{ $users }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Puntos de acceso</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">{{ $n_puntos }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Conexiones</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">{{ $conexiones }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
                
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <!--<select class="form-control pull-right row b-none">-->
                                <!--    <option>March 2017</option>-->
                                <!--    <option>April 2017</option>-->
                                <!--    <option>May 2017</option>-->
                                <!--    <option>June 2017</option>-->
                                <!--    <option>July 2017</option>-->
                                <!--</select>-->
                            </div>
                            <h3 class="box-title">Puntos de acceso</h3>
                            <div class="table-responsive">
                               
                                <table class="table">
                                    
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Modelo</th>
                                            <th>Ubicación</th>
                                            <th>Latitud</th>
                                            <th>Longitud</th>
                                            <th>Fecha de alta</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($puntoacceso as $p)
                                        <tr>
                                            <td>{{ $p->id }}</td>
                                            <td>{{ $p->modelo }}</td>
                                            <td class="txt-oflo">{{ $p->ubicacion }}</td>
                                            <td>{{ $p->latitud }}</td>
                                            <td>{{ $p->longitud }}</td>
                                            <td class="txt-oflo">{{ $p->fechaalta }}</td>
                                            <td class="txt-oflo"> <a href="{{ route('puntoacceso.show', $p->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a> 
                                            <i class="fa fa-wifi"></i></td>
                                        </tr>
                                        @endforeach
                                        <!--<tr>-->
                                        <!--    <td>2</td>-->
                                        <!--    <td class="txt-oflo">Real Homes WP Theme</td>-->
                                        <!--    <td>EXTENDED</td>-->
                                        <!--    <td class="txt-oflo">April 19, 2017</td>-->
                                        <!--    <td><span class="text-info">$1250</span></td>-->
                                        <!--</tr>-->
                                    </tbody>
                                    
                                </table>
                            	<div class="d-flex justify-content-center">
                                    {{ $puntoacceso->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <!--<div class="white-box">-->
                            
                        <!--</div>-->
                    </div>
                </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2020 &copy; Open Wifi Company</footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
@stop