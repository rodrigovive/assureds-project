@extends('backend.layout.app')

@section('content')
    
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
    
        <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                    <div class="input-group input-group-seamless ml-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                        <input class="navbar-search form-control" type="text" placeholder="Buscar por nombre" aria-label="Search">
                        <hr />
                        <input class="navbar-search form-control" type="text" placeholder="Buscar por dni" aria-label="Search">

                    </div>
                </form>
            </nav>
        </div>
    
        
        <!-- / .main-navbar -->
        <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
                <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                    <span class="text-uppercase page-subtitle">Resultados</span>
                    <h3 class="page-title">Lista de personas aseguradas</h3>
                </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
                <div class="col">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Personas</h6>
                        </div>
                        <div class="card-body p-0 pb-3 text-center">
                            <table class="table mb-0">
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">Nombres</th>
                                    <th scope="col" class="border-0">Apellidos</th>
                                    <th scope="col" class="border-0">F.nacimiento</th>
                                    <th scope="col" class="border-0">F.P.Inicio</th>
                                    <th scope="col" class="border-0">F.P.Final</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ali</td>
                                    <td>Kerry</td>
                                    <td>Russian Federation</td>
                                    <td>Gdańsk</td>
                                    <td>107-0339</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Clark</td>
                                    <td>Angela</td>
                                    <td>Estonia</td>
                                    <td>Borghetto di Vara</td>
                                    <td>1-660-850-1647</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jerry</td>
                                    <td>Nathan</td>
                                    <td>Cyprus</td>
                                    <td>Braunau am Inn</td>
                                    <td>214-4225</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Colt</td>
                                    <td>Angela</td>
                                    <td>Liberia</td>
                                    <td>Bad Hersfeld</td>
                                    <td>1-848-473-7416</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Default Light Table -->
            <!-- Default Dark Table -->
            <!-- End Default Dark Table -->
        </div>
        
    </main>

@endsection