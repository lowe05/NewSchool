@extends('app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">


<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Liste des salles de classea</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Classes</li>
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

<div class="pd-20 card-box mb-30">
    
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">Liste des salles de classes</h4>
        </div>
        <div class="pull-right">
            <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    Options
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">imprimer</a>
                    <a class="dropdown-item" href="#">Télécharger</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#Medium-modal" href="#">Ajouter une classe</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#small-modal1" href="#">Ajouter une division</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#small-modal" href="#">Ajouter un niveau</a>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Niveau</th>
                    <th scope="col">Divisions</th>
                    <th scope="col">Eff Total</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>6eme M1</td>
                    <td>6eme</td>
                    <td>Ens-General</td>
                    <td>50 élèves</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="{{route('classedetail')}}"><i class="dw dw-eye"></i> Voir plus</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Modifier</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Supprimer</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>6eme M2</td>
                    <td>6eme</td>
                    <td>Ens-General</td>
                    <td>55 élèves</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> Voir plus</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Modifier</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Supprimer</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="collapse collapse-box" id="responsive-table">
        <div class="code-box">
            <div class="clearfix">
                <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#responsive-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
                <a href="#responsive-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
            </div>
            <pre><code class="xml copy-pre" id="responsive-table-code">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </code></pre>
        </div>
    </div>
</div>
@include('users.prof.classe.options.createclasse') 
@include('users.prof.classe.options.niveau')
@include('users.prof.classe.options.typedivision')

@endsection