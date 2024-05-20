
@extends('admin.back-end.app')
@section('content')


<!-- product review section start -->
<div class="page-body">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <!-- Table Start -->
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Product Reviews</h5>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="user-table ticket-table review-table theme-table table"
                                       id="table_id">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Customer Name</th>
                                        <th>Product Name</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Published</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($reviews as $review)
                                    <tr>
                                        <td>{{$review->id}}</td>
                                        <td>{{$review->user->name}}</td>
                                        <td>{{$review->product->name}}</td>
                                        <td>
                                            <ul class="rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                <li>
                                                    <i class="fas fa-star {{ $i <= $review->rate ? 'theme-color' : '' }}"></i>
                                                </li>
                                            @endfor
                                            </ul>
                                        </td>
                                        <td
                                            style="
                                                max-width: 300px;
                                                white-space: nowrap;
                                                overflow: hidden;
                                                text-overflow: ellipsis;"
                                        >{{$review->description}}</td>
                                        <td class="td-check" >
                                            {{-- {{ route('product.show', $product->id) }} --}}
                                            <a href="{{ route('productDetail', ['id' => $review->product->id]) }}"><i class="ri-eye-line"></i></a>
                                            <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure?')) { document.getElementById('delete-form-{{ $review->id }}').submit(); }">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                            <form id="delete-form-{{ $review->id }}" action="{{ route('DeleteReview', ['id' => $review->id]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Table End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid Ends-->
</div>
<!-- product review section End -->
@endsection
