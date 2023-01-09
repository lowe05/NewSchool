@extends('app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">


<div class="min-height-200px">
    <div class="page-header">
        
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>6eme M1</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('listeclasse')}}">Classes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Détail</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="dropdown">
                    <button class="btn btn-primary" >
                        
                        {{date('d-m-y')}}
                    </button>
                </div>
            </div>
        </div>
        
    </div>
    <div class="blog-wrap">
        <div class="container pd-0">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="blog-list">
                        <ul>
                            <li>
                                <div class="row no-gutters">
                                    
                                    <div class="col-lg-8 col-md-18 col-sm-12">
                                        <h5 class="pd-20 h5 mb-0"></h5>
                                        {{-- <h5 class="pd-20 h5 mb-0"></h5> --}}
                                        <div class="col-md-8 col-sm-12 mb-30">

                                            <div class="card text-white bg-info card-box">
                                                <button type="button" class="btn btn-success btn-lg btn-block">Information sur la classe</button>
                                                <div class="card-header">Prof titulaire =><button type="button" class="text-right btn btn-secondary righ">M. Lionel Gloire</button> </div>
                                                <div class="card-header">Chef de classe => <button type="button" class="btn btn-secondary ">Clavair Achille</button></div>
                                                <div class="card-header">Effectif de filles => <button type="button" class="btn btn-secondary ">25 ELEVES</button></div>
                                                <div class="card-header">Effectif de garçons => <button type="button" class="btn btn-secondary ">15 ELEVES</button></div>
                                                <div class="card-header">Effectif Total => <button type="button" class="btn btn-secondary ">40 ELEVES</button></div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="card-box mb-30">
                                            <h5 class="pd-20 h5 mb-0 active"></h5>
                                            
                                            <div class="list-group">
                                                <button type="button" class="btn btn-primary btn-lg btn-block">Plus d'option</button>
                                                <a href="{{route('liste_eleves_classe')}}" class="list-group-item d-flex align-items-center justify-content-between ">Liste des élèves <span class="badge badge-primary badge-pill"></span></a>
                                                <a href="{{route('registre.note')}}" class="list-group-item d-flex align-items-center justify-content-between">Registre de note <span class="badge badge-primary badge-pill"></span></a>
                                                <a href="{{route('registre.Appel')}}" class="list-group-item d-flex align-items-center justify-content-between ">Registre d'appel <span class="badge badge-primary badge-pill"></span></a>
                                                <a href="{{route('cahier.De.Texte')}}" class="list-group-item d-flex align-items-center justify-content-between">Cahier de texte <span class="badge badge-primary badge-pill"></span></a>
                                                <a href="{{route('liste.Absence')}}" class="list-group-item d-flex align-items-center justify-content-between">Liste d'absence <span class="badge badge-primary badge-pill"></span></a>
                                                <a href="{{route('liste.Enseignant')}}" class="list-group-item d-flex align-items-center justify-content-between">Liste des enseignants <span class="badge badge-primary badge-pill"></span></a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </div>
    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h4 class="text-blue h4">Emploi de temps</h4>
               
            </div>
            <div class="pull-right">
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        Options
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><h6>imprimer</h6></a>
                        <a class="dropdown-item" href="#"><h6>Télécharger</h6></a>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Heure/Jours</th>
                        <th scope="col">Lundi</th>
                        <th scope="col">Mardi</th>
                        <th scope="col">Mercredi</th>
                        <th scope="col">Jeudi</th>
                        <th scope="col">Vendredi</th>
                        <th scope="col">Samedi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">10h à 12h</th>
                        <td>Prof : M. Mark <br> Matiere : Math</td>
                        <td>Prof : M. Mark <br> Matiere : Math</td>
                        <td>Prof : M. Mark <br> Matiere : Math</td>
                        <td><span>Prof : M. Mark <br> Matiere : Math</span></td>
                        <td><span>Prof : M. Mark <br> Matiere : Math</span></td>
                        <td><span>Prof : M. Mark <br> Matiere : Math</span></td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
        
    </div>
<div class="footer pd-20 mb-20"></div>
</div>



<script src="{{asset('assets/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
@endsection