@extends('backend.layout.app')

@section('content')
    
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        <!-- / .main-navbar -->
    
        
        <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
                <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                    <span class="text-uppercase page-subtitle">Persona Asegurada</span>
                    <h3 class="page-title">Agregar nueva persona asegurada</h3>
                </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Add New Post Form -->
                    <div class="card card-small mb-3">
                        <div class="card-body">
                            <form class="add-new-post">
                                <label for="">Nombre de la persona</label>
                                <input class="form-control form-control-lg mb-3" type="text" placeholder="Nombre de la persona">
                                <label for="">Apellido de la persona</label>
    
                                <input class="form-control form-control-lg mb-3" type="text" placeholder="Apellido de la persona">
                                <label for="">Fecha de nacimiento de la persona</label>
    
                                <input class="form-control form-control-lg mb-3" type="date" placeholder="Fecha de nacimiento de la persona">
                                <label for="">Fecha de inicio de la polisa</label>
    
                                <input class="form-control form-control-lg mb-3" type="date" placeholder="Fecha de inicio de la polisa">
                                <label for="">Fecha final de la polisa</label>
    
                                <input class="form-control form-control-lg mb-3" type="date" placeholder="Fecha final de la polisa">

                                <button class="btn btn-success">Agregar Persona</button>
                            </form>
                        </div>
                    </div>
                    <!-- / Add New Post Form -->
                </div>
            </div>
        </div>
        
    </main>

@endsection