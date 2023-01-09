@extends('app')

@section('content')
{{-- <link href="./vendor/bootstrap-select/dist/css/-selebootstrapct.min.css" rel="stylesheet"> --}}
    <link href="{{asset('assetz/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assetz/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<div class="container-fluid">
    <!-- Add Project -->
    <div class="modal fade" id="addProjectSidebar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Project</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="text-black font-w500">Project Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Deadline</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Client Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">CREATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span>Datatable</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->


    <div class="row">
        
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Fees Collection</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example4" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Roll No</th>
                                    <th>Student Name</th>
                                    <th>Invoice number</th>
                                    <th>Fees Type </th>
                                    <th>Payment Type </th>
                                    <th>Status </th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Tiger Nixon</td>
                                    <td>#54605</td>
                                    <td>Library</td>
                                    <td>Cash</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                    <td>2011/04/25</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Garrett Winters</td>
                                    <td>#54687</td>
                                    <td>Library</td>
                                    <td>Credit Card</td>
                                    <td><span class="badge light badge-warning">Panding</span></td>
                                    <td>2011/07/25</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Ashton Cox</td>
                                    <td>#35672</td>
                                    <td>Tuition</td>
                                    <td>Cash</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                    <td>2009/01/12</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>Cedric Kelly</td>
                                    <td>#57984</td>
                                    <td>Annual</td>
                                    <td>Credit Card</td>
                                    <td><span class="badge light badge-warning">Panding</span></td>
                                    <td>2012/03/29</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>Airi Satou</td>
                                    <td>#12453</td>
                                    <td>Library</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-warning">Panding</span></td>
                                    <td>2008/11/28</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td>Brielle Williamson</td>
                                    <td>#59723</td>
                                    <td>Tuition</td>
                                    <td>Cash</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                    <td>2012/12/02</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td>Herrod Chandler</td>
                                    <td>#98726</td>
                                    <td>Tuition</td>
                                    <td>Credit Card</td>
                                    <td><span class="badge light badge-danger">Udpaid</span></td>
                                    <td>2012/08/06</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>08</td>
                                    <td>Rhona Davidson</td>
                                    <td>#98721</td>
                                    <td>Library</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-danger">Udpaid</span></td>
                                    <td>2010/10/14</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td>Colleen Hurst</td>
                                    <td>#54605</td>
                                    <td>Annual</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                    <td>2009/09/15</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Sonya Frost</td>
                                    <td>#98734</td>
                                    <td>Tuition</td>
                                    <td>Credit Card</td>
                                    <td><span class="badge light badge-danger">Udpaid</span></td>
                                    <td>2008/12/13</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Jena Gaines</td>
                                    <td>#12457</td>
                                    <td>Tuition</td>
                                    <td>Cash</td>
                                    <td><span class="badge light badge-danger">Udpaid</span></td>
                                    <td>2008/12/19</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Quinn Flynn</td>
                                    <td>#36987</td>
                                    <td>Library</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-warning">Panding</span></td>
                                    <td>2013/03/03</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Charde Marshall</td>
                                    <td>#98756</td>
                                    <td>Tuition</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                    <td>2008/10/16</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Haley Kennedy</td>
                                    <td>#98754</td>
                                    <td>Library</td>
                                    <td>Cash</td>
                                    <td><span class="badge light badge-danger">Udpaid</span></td>
                                    <td>2012/12/18</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>#65248</td>
                                    <td>Annual</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-danger">Udpaid</span></td>
                                    <td>2010/03/17</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Michael Silva</td>
                                    <td>#75943</td>
                                    <td>Tuition</td>
                                    <td>Credit Card</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                    <td>2012/11/27</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Paul Byrd</td>
                                    <td>#87954</td>
                                    <td>Library</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-warning">Panding</span></td>
                                    <td>2010/06/09</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Gloria Little</td>
                                    <td>#98746</td>
                                    <td>Tuition</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                    <td>2009/04/10</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Bradley Greer</td>
                                    <td>#98674</td>
                                    <td>Annual</td>
                                    <td>Cash</td>
                                    <td><span class="badge light badge-danger">Udpaid</span></td>
                                    <td>2012/10/13</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Dai Rios</td>
                                    <td>#69875</td>
                                    <td>Tuition</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-warning">Panding</span></td>
                                    <td>2012/09/26</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Jenette Caldwell</td>
                                    <td>#54678</td>
                                    <td>Library</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                    <td>2011/09/03</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Yuri Berry</td>
                                    <td>#98756</td>
                                    <td>Tuition</td>
                                    <td>Credit Card</td>
                                    <td><span class="badge light badge-danger">Udpaid</span></td>
                                    <td>2009/06/25</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Caesar Vance</td>
                                    <td>#86754</td>
                                    <td>Tuition</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                    <td>2011/12/12</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Doris Wilder</td>
                                    <td>#34251</td>
                                    <td>Annual</td>
                                    <td>Cash</td>
                                    <td><span class="badge light badge-warning">Panding</span></td>
                                    <td>2010/09/20</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Angelica Ramos</td>
                                    <td>#65874</td>
                                    <td>Tuition</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-danger">Udpaid</span></td>
                                    <td>2009/10/09</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Gavin Joyce</td>
                                    <td>#54605</td>
                                    <td>Female</td>
                                    <td>Credit Card</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                    <td>2010/12/22</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Jennifer Chang</td>
                                    <td>#54605</td>
                                    <td>Tuition</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-warning">Panding</span></td>
                                    <td>2010/11/14</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Brenden Wagner</td>
                                    <td>#45687</td>
                                    <td>Library</td>
                                    <td>Cheque</td>
                                    <td><span class="badge light badge-danger">Udpaid</span></td>
                                    <td>2011/06/07</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Fiona Green</td>
                                    <td>#23456</td>
                                    <td>Tuition</td>
                                    <td>Cash</td>
                                    <td><span class="badge light badge-success">Paid</span></td>
                                    <td>2010/03/11</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Shou Itou</td>
                                    <td>#54605</td>
                                    <td>Annual</td>
                                    <td>Credit Card</td>
                                    <td><span class="badge light badge-warning">Panding</span></td>
                                    <td>2011/08/14</td>
                                    <td><strong>120$</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>

<script src="{{asset('assetz/vendor/global/global.min.js')}}"></script>
{{-- <script src="{{asset('assetz/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script> --}}
<!-- Datatable -->
<script src="{{asset('assetz/js/custom.js')}}"></script>
<script src="{{asset('assetz/js/deznav-init.js')}}"></script>


<script src="{{asset('assetz/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assetz/js/plugins-init/datatables.init.js')}}"></script>

@endsection