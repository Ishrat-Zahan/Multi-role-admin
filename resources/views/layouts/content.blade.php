@extends('layouts.main')
@section('content')


<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Admin's Dashboard</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Welcome to Admin's Dashboard</li>
        </ol>

        <div style="background-color: white;" class="">
            <div class="row ms-3">
                <div class="col-xl-3 col-md-6 mt-4">
                    <div class="card  text-white mb-4 bg-secondary">
                        <div class="card-body">Total Sales</div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-4 ">
                    <div class="card  text-white mb-4 bg-info">
                        <div class="card-body">Total Stores</div>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-4">
                    <div class="card  text-white mb-4 bg-warning">
                        <div class="card-body">Total Products</div>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-4">
                    <div class="card  text-white mb-4 bg-dark">
                        <div class="card-body">Total Customers</div>

                    </div>
                </div>
            </div>
            <div class="row ms-3">
                <div class="col-xl-3 col-md-6 mt-4">
                    <div class="card  text-white mb-4 bg-primary">
                        <div class="card-body">Pending</div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-4">
                    <div class="card  text-white mb-4 bg-danger">
                        <div class="card-body">Confirmed</div>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-4">
                    <div class="card  text-white mb-4 bg-success">
                        <div class="card-body">Packaging</div>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-4">
                    <div class="card  text-white mb-4 bg-secondary">
                        <div class="card-body">Out for Delivery</div>

                    </div>
                </div>
            </div>
            <div class="row mb-5 ms-3">
                <div class="col-xl-3 col-md-6 mt-4">
                    <div class="card  text-white mb-4 bg-info">
                        <div class="card-body">Delivered</div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-4">
                    <div class="card  text-white mb-4 bg-warning">
                        <div class="card-body">Canceled</div>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-4">
                    <div class="card  text-white mb-4 bg-dark">
                        <div class="card-body">Returned</div>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-4">
                    <div class="card  text-white mb-4 bg-primary">
                        <div class="card-body">Delivery Failed</div>

                    </div>
                </div>
            </div>
        </div>


        <div style="background-color: white;" class="mb-4 mt-5">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable
            </div>
            <div class="card-body">
                <table id="datatablesSimple">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</main>

@endsection