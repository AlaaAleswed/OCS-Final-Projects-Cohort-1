@extends('admin.layout.master')

@section('title', 'Order Page')

@section('css')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">

        <h4 class="mb-4">Orders Management</h4>

  


            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Orders Table</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#Order ID</th>
                                    <th>Customer</th>
                                    <th>Roll</th>
                                    <th>Length</th>
                                    <th>Theme</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1021</td>
                                    <td>Ahmad Ali</td>
                                    <td>Kids Animals</td>
                                    <td>2 m</td>
                                    <td>Nature</td>
                                    <td>7JD</td>
                                    <td>
                                        <span class="badge bg-warning">Pending</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1022</td>
                                    <td>Sara Mohammad</td>
                                    <td>Alphabet Fun</td>
                                    <td>3 m</td>
                                    <td>Letters</td>
                                    <td>10JD</td>
                                    <td>
                                        <span class="badge bg-info">Printing</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1023</td>
                                    <td>Omar Khaled</td>
                                    <td>Jungle World</td>
                                    <td>1 m</td>
                                    <td>Animals</td>
                                    <td>5JD</td>
                                    <td>
                                        <span class="badge bg-success">Delivered</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


    </div>
@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection
