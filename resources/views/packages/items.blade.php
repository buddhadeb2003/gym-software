@extends('layouts.app')

@section('content')
    {{-- start modal --}}
    <form action="#" method="post" enctype="multipart/form-data" accept-charset="utf-8" id="form">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelOne"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabelOne">Add Item</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="item_name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="item_name" placeholder="Enter Item Name" data-parsley-required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="selectOne">Type</label>
                            <select class="form-select" aria-label="Default select example">
                              <option value="1" selected>Class</option>
                              <option value="2">Service</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="item_price" class="col-form-label">Price</label>
                        <input type="number" class="form-control" id="item_price" placeholder="Enter Price" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Item</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    {{-- end modal --}}
    <!-- Container fluid -->
    <div class="pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <div class="mb-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-whatever="@mdo">
                        <i data-feather="plus"></i>
                        Add Item
                    </button>
                </div>
                <div class="card shadow bg-white">
                    <!-- card header  -->
                    <div class="card-header bg-white  py-4">
                        <h3 class="mb-0">All Items</h3>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center"><b>Name</b></th>
                                    <th class="text-center"><b>Type</b></th>
                                    <th class="text-center"><b>Price</b></th>
                                    <th class="text-center"><b>Status</b></th>
                                    <th class="text-center"><b>Modified By</b></th>
                                    <th class="text-center"><b>Action</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">Mark</td>
                                    <td  class="text-center">class</td>
                                    <td  class="text-center">20</td>
                                    <td  class="text-center">active</td>
                                    <td  class="text-center">active</td>
                                    <td class="text-center">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamOne" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamOne">
                                                <a class="dropdown-item" href="#"><i data-feather="eye"></i> Show</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i data-feather="edit"></i> Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i data-feather="trash-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">Mark</td>
                                    <td  class="text-center">class</td>
                                    <td  class="text-center">20</td>
                                    <td  class="text-center">active</td>
                                    <td  class="text-center">active</td>
                                    <td class="text-center">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamOne" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamOne">
                                                <a class="dropdown-item" href="#"><i data-feather="eye"></i> Show</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i data-feather="edit"></i> Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i data-feather="trash-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="text-center">Mark</td>
                                    <td  class="text-center">class</td>
                                    <td  class="text-center">20</td>
                                    <td  class="text-center">active</td>
                                    <td  class="text-center">active</td>
                                    <td class="text-center">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamOne" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamOne">
                                                <a class="dropdown-item" href="#"><i data-feather="eye"></i> Show</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i data-feather="edit"></i> Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i data-feather="trash-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="text-center">Mark</td>
                                    <td  class="text-center">class</td>
                                    <td  class="text-center">20</td>
                                    <td  class="text-center">active</td>
                                    <td  class="text-center">active</td>
                                    <td class="text-center">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamOne" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamOne">
                                                <a class="dropdown-item" href="#"><i data-feather="eye"></i> Show</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i data-feather="edit"></i> Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i data-feather="trash-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">Mark</td>
                                    <td  class="text-center">class</td>
                                    <td  class="text-center">20</td>
                                    <td  class="text-center">active</td>
                                    <td  class="text-center">active</td>
                                    <td class="text-center">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamOne" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamOne">
                                                <a class="dropdown-item" href="#"><i data-feather="eye"></i> Show</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i data-feather="edit"></i> Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i data-feather="trash-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@push('script')
        <script type="text/javascript">
            $('#form').parsley();
        </script>
@endpush
