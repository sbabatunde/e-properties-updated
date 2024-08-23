@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            My Materials
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
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th># </th>
                                                    <th>Image </th>
                                                    <th>Title </th>
                                                    <th>Status </th>
                                                    <th>Price </th>
                                                    {{-- <th>Category </th>
                                                    <th>Type </th> --}}
                                                    {{-- <th>Agent</th> --}}
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @isset($materials)
                                                        @foreach ($materials as $index => $material)
                                                    <tr>
                                                        {{-- @dd($material->type) --}}
                                                        <td>
                                                            {{ ($materials->currentPage() - 1) * $materials->perPage() + $index + 1 }}
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset($material->thumbnail) }}"
                                                                alt="{{ $material->title }}" class="property-mini-image">
                                                        </td>
                                                        <td>{{ $material->title }}</td>
                                                        <td>{{ $material->status }}</td>
                                                        <td>
                                                            {{ $material->initial_denomination ?? '' }}
                                                            {{ number_format($material->price) ?? '' }}

                                                        </td>
                                                        {{-- <td>{{ $material->type->type }}</td> --}}
                                                        {{-- <td>{{ $material->type->category }}</td> --}}

                                                        {{-- <td>
                                                            {{ $material->agent->firstname ?? '' }}
                                                            {{ $material->agent->lastname ?? '' }}
                                                        </td> --}}
                                                        <td class="table-btn">
                                                            <a href="{{ route('admin.categories.edit', $material->id) }}"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                        <td class="table-btn">
                                                            <a class="icon-container"
                                                                href="{{ route('admin.categories.delete', $material->id) }}"
                                                                class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">
                                                                <i class="fa fa-trash "></i>
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
                                @if (count($materials) > 0)
                                    <div class="pagination mt-5 ml-2 d-flex justify-content-center">
                                        {{ $materials->links('vendor.pagination.custom') }}
                                    </div>
                                @endif
                            </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
