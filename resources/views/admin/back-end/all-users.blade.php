@extends('admin.back-end.app')
@section('content')
<!-- Container-fluid starts-->
<div class="page-body">
    <!-- All User Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Users</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('addNewUser') }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive table-product">
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Option</th>
                                </tr>
                                </thead>

                                <tbody>
                                <!-- <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/1.jpg" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Everett C. Green</span>
                                            <span>Essex Court</span>
                                        </div>
                                    </td>

                                    <td>+ 802 - 370 - 2430</td>

                                    <td>EverettCGreen@rhyta.com</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/2.jpg" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Caroline L. Harris</span>
                                            <span>Davis Lane</span>
                                        </div>
                                    </td>

                                    <td>+ 720 - 276 - 9403</td>

                                    <td>CarolineLHarris@rhyta.com</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/3.jpg" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Lucy j. Morile</span>
                                            <span>Clifton</span>
                                        </div>
                                    </td>

                                    <td>+ 351 - 756 - 6549</td>

                                    <td>LucyMorile456@gmail.com</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/4.jpg" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Jennifer A. Straight</span>
                                            <span>Brunswick</span>
                                        </div>
                                    </td>

                                    <td>+ 912 - 265 - 1550</td>

                                    <td>JenniferAStraight@rhyta.com</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/5.jpg" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Louise J. Stiles</span>
                                            <span>Indianapolis</span>
                                        </div>
                                    </td>

                                    <td>+ 304 - 921 - 8122</td>

                                    <td>KevinAMillett@jourrapide.com</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/1.jpg" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Scott T. Thomas</span>
                                            <span>Kotzebue</span>
                                        </div>
                                    </td>

                                    <td>+ 907 - 442 - 8122</td>

                                    <td>scott.thomas@packiu.com</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/2.jpg" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Everett C. Green</span>
                                            <span>Essex Court</span>
                                        </div>
                                    </td>

                                    <td>+ 218 - 244 - 7026</td>

                                    <td>KevinAMillett@jourrapide.com</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/3.jpg" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Dillon J. Bradshaw</span>
                                            <span>Redbud Drive</span>
                                        </div>
                                    </td>

                                    <td>+ 347 - 649 - 7283</td>

                                    <td>DillonJBradshaw@teleworm.us</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/4.jpg" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Lorna M. Bonner</span>
                                            <span>Broadway Street</span>
                                        </div>
                                    </td>

                                    <td>+ 843 - 765 - 6166</td>

                                    <td>LornaMBonner@teleworm.us</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/5.jpg" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Everett C. Green</span>
                                            <span>Essex Court</span>
                                        </div>
                                    </td>

                                    <td>+ 802 - 370 - 2430</td>

                                    <td>EverettCGreen@rhyta.com</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="assets/images/users/1.jpg" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>Lorraine D. McDowell</span>
                                            <span>Woodland Terrace</span>
                                        </div>
                                    </td>

                                    <td>+ 916 - 942 - 7555</td>

                                    <td>LorraineDMcDowell@dayrep.com</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
 -->

                                <?php

                                // use Controller\UserControllers;

                                // include("../handle/Database/connection.php");
                                // include("../handle/Models/User.php");

                                // include("../handle/Controller/UserControllers.php");

                                // $userController = new UserControllers();
                                // $userController -> viewUser();
                                ?>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All User Table Ends-->
</div>
<!-- Container-fluid end -->

<!-- Delete Modal Box Start -->
<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box">
                    <p>The permission for the use/group, preview is inherited from the object, object will create a
                        new permission for this object</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Yes
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box text-center">
                    <div class="wrapper">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                        </svg>
                    </div>
                    <h4 class="text-content">It's Removed.</h4>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal Box End -->

@endsection
