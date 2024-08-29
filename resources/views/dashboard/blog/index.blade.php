@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            Blog Posts
                        </strong>
                    </h3>
                </div>
                @include('admin.user.details')
            </div>
            @include('dashboard.includes.alerts.success')
            @include('dashboard.includes.alerts.errors')
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="">
                        <div class="">
                            <br />
                            <div class="row justify-content-md-center">
                                <div class="col-md-11">
                                    <div class="form-body">
                                        <div class="row mb-2">
                                            <a href="#" style=""
                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1"
                                                data-bs-toggle="modal" data-bs-target="#newBlog">
                                                <i class="fa fa-plus 2x"></i>

                                            </a>
                                            <h6 class="pt-1">
                                                <strong style="color: black">
                                                    Add New
                                                </strong>
                                            </h6>
                                        </div>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th># </th>
                                                    <th>Photo</th>
                                                    <th>title</th>
                                                    <th>Posted By</th>
                                                    <th>Posted On</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @isset($blogs)
                                                        @foreach ($blogs as $index => $blog)
                                                    <tr>
                                                        {{-- @dd($blog->type) --}}
                                                        <td>
                                                            {{ ($blogs->currentPage() - 1) * $blogs->perPage() + $index + 1 }}
                                                        </td>
                                                        <td>
                                                            <img src="{{ $blog->photo }}" alt="{{ $blog->title }}"
                                                                class="property-mini-image">
                                                        </td>
                                                        <td>{{ $blog->title }}</td>
                                                        <td>
                                                            {{ $blog->user->firstname ?? '' }}
                                                            {{ $blog->user->lastname ?? '' }}
                                                        </td>
                                                        <td>
                                                            {{ \Carbon\Carbon::parse($blog->created_at)->format('D,M j,Y g:i A') ?? '' }}
                                                        </td>

                                                        <td class="table-btn">
                                                            <a href="#"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                        <td class="table-btn">
                                                            <a href="#"
                                                                class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">
                                                                <i class="fa fa-trash"></i>
                                                                <span class="tooltip">Delete</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @endisset
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div>
                                @if (count($blogs) > 0)
                                    <div class="pagination mt-5 ml-2 d-flex justify-content-center">
                                        {{ $blogs->links('vendor.pagination.custom') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    @include('dashboard.blog.post')
@endsection
