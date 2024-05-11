@extends('admin.admin_layout.main')

@push('title')
<title>Admin - Employee_dash</title>
@endpush

@push('pannelname')
<h3>Employee's</h3>
@endpush

@push('footer')
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Job Search.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Job Search
                </div>
            </div>
        </div>    
    </div>
</div>
@endpush

@push('ul')
    <ul class="navbar-nav" id="navbar-nav">

        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
        <li class="nav-item">
            <a href="{{url('admindashboard')}}" class="nav-link menu-link collapsed" role="button" aria-controls="sidebarDashboards">
                <i class="bi bi-diagram-3"></i> <span data-key="t-dashboards">Users Dashboards</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_application')}}" class="nav-link menu-link"> <i class="bi bi-briefcase"></i> <span data-key="t-chat">Manage Job Card's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_employee')}}" class="nav-link menu-link active"> <i class="bi bi-person-vcard"></i> <span data-key="t-email">Employee</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_employer')}}" class="nav-link menu-link"> <i class="bi bi-person-video3"></i> <span data-key="t-email">Employer</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_contact')}}" class="nav-link menu-link"> <i class="bi bi-envelope-plus"></i> <span data-key="t-email">Contact</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_about')}}" class="nav-link menu-link"> <i class="bi bi-globe2"></i> <span data-key="t-email">About</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_profile')}}" class="nav-link menu-link"> <i class="bi bi-person-circle"></i> <span data-key="t-email">Profile</span> </a>
        </li>

        <li class="nav-item">
            <a href="" class="nav-link menu-link"> <i class="bi bi-box-arrow-in-left"></i> <span data-key="t-email">log Out</span> </a>
        </li>
    </ul>
@endpush
@section('admin.admin_layout.main.container')
        <!-- ============================================================== -->
                           <!-- Admin Modal -->
        <!-- ============================================================== -->

        <!-- Approve Modal -->
        <div id="Accept" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-success">
                                <i class="bi bi-patch-check display-4"></i>
                            </div>
                            <div class="mt-4 fs-base">
                                <h4 class="mb-1">Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">you want Approve ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn  w-sm btn-light" data-bs-dismiss="modal" aria-label="Close">Back</button>
                            <button type="submit" class="btn w-sm btn-success" id="Approve">Yes, Accept.</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Reject Modal -->
        <div id="Reject" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-danger">
                                <i class="bi bi-patch-question display-4"></i>
                            </div>
                            <div class="mt-4 fs-base">
                                <h4 class="mb-1">Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">you want to Reject or Remove ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Back</button>
                            <button type="submit" class="btn w-sm btn-danger" id="Reject">Yes, Reject It.</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        
        <!-- ============================================================== -->
        <!-- Admin Pannel -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-3 text-center">Employee Pannel</h4>
                                </div><!-- end card header -->
                                <div class="card-body mt-3">
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Mobile</th>
                                                    <th scope="col">Resume</th>
                                                    <th scope="col">Cover Later</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col" style="width: 150px;">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span class="badge bg-danger">Rejected</span></td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div>
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#Accept">Accept</button>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#Reject">Reject</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>02</td>
                                                    <td>john</td>
                                                    <td>john@gmail.com</td>
                                                    <td>96585856985</td>
                                                    <td>resume.pdf</td>
                                                    <td>i have completed my diploma, and i have 1 year experience of full-stack developer.</td>
                                                    <td><span class="badge bg-success">Accepted</span></td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div>
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#Accept">Accept</button>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#Reject">Reject</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    @stack('footer')
@endsection