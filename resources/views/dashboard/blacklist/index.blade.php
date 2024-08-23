@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            Blacklisted Users
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
                                                    <th>Business Image </th>
                                                    <th>Business Name</th>
                                                    <th>Blacklisted On </th>
                                                    <th>Blacklisted By </th>
                                                    <th>Reported By</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @isset($blacklists)
                                                        @foreach ($blacklists as $index => $material)
                                                    <tr>
                                                        {{-- @dd($material->type) --}}
                                                        <td>
                                                            {{ ($blacklists->currentPage() - 1) * $blacklists->perPage() + $index + 1 }}
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset($blacklist->reported->business_image) ?? '' }}"
                                                                alt="{{ $blacklist->reported->business_name ?? ' ' }}"
                                                                class="property-mini-image">
                                                        </td>
                                                        <td>{{ $blacklist->reported->business_name }}</td>
                                                        <td>
                                                            {{ \Carbon\Carbon::parse($blacklist->created_at)->format('D,M j,Y g:i A') ?? '' }}
                                                        </td>
                                                        <td>
                                                            {{ $blacklist->blacklisted_by->firtname ?? '' }}
                                                            {{ $blacklist->blacklisted_by->lastname ?? '' }}
                                                        </td>
                                                        <td>
                                                            {{ $blacklist->reporter->firtname ?? '' }}
                                                            {{ $blacklist->reporter->lastname ?? '' }}
                                                        </td>
                                                        <td class="table-btn">
                                                            <a href="{{ route('admin.categories.edit', $blacklist->id) }}"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                                <i class="fa fa-check"></i>
                                                                <span class="tooltip">Remove</span>
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
                                @if (count($blacklists) > 0)
                                    <div class="pagination mt-5 ml-2 d-flex justify-content-center">
                                        {{ $blacklists->links('vendor.pagination.custom') }}
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
