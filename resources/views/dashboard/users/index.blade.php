@extends('admin.index')
@section('content')
    <!-- page content -->
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            All Users
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
                                                data-bs-toggle="modal" data-bs-target="#addUser">
                                                <i class="fa fa-plus 2x"></i>

                                            </a>
                                            <h6>
                                                <strong style="color: black">
                                                    Add User
                                                </strong>
                                            </h6>
                                        </div>

                                        <table>
                                            <thead>
                                                <tr>
                                                    <th># </th>
                                                    <th>Photo </th>
                                                    <th>Name </th>
                                                    <th>Email </th>
                                                    <th>Type </th>
                                                    <th>Edit</th>
                                                    <th>Verify</th>
                                                    <th>Blacklist</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @isset($users)
                                                        {{-- @dd($users) --}}

                                                        @foreach ($users as $index => $user)
                                                    <tr>
                                                        <td>
                                                            {{ ($users->currentPage() - 1) * $users->perPage() + $index + 1 }}
                                                        </td>
                                                        <td>
                                                            <img src="{{ $user->photo ?? asset('/assets/admin/images/no_image.jpg') }}"
                                                                alt="{{ $user->title }}" class="property-mini-image">
                                                        </td>
                                                        <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                                        @if ($user->user_type !== 'service_provider')
                                                            <td class="text-bold">{{ $user->user_type }}</td>
                                                        @else
                                                            @foreach ($user->providers as $provider)
                                                                @php
                                                                    $service = App\Models\Site\ServiceType::where(
                                                                        'id',
                                                                        $provider->service_type_id,
                                                                    )->first();
                                                                @endphp
                                                            @endforeach
                                                            <td class="text-bold">Provider-{{ $service->service }}</td>
                                                        @endif
                                                        <td>{{ \Carbon\Carbon::parse($user->created_at)->format('D,M j,Y g:i A') }}
                                                        </td>

                                                        <td class="table-btn">
                                                            <a href="#"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editUser{{ $user->id }}">
                                                                {{-- <a href="{{ route('admin.categories.edit', $user->id) }}"
                                                                    class="btn btn-outline-primary btn-min-width box-shadow-3
                                                                     mr-1 mb-1"> --}}
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                        <td class="table-btn">
                                                            <strong>{{ $user->status }}</strong>
                                                            <form id="verifyUser{{ $user->id }}" class="addForm"
                                                                action="{{ route('admin.verify.user', $user->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button onclick="verifyUser(event,{{ $user->id }})"
                                                                    class="btn removeForm btn-outline-secondary btn-min-width box-shadow-3 mr-1 mb-1"
                                                                    style="outline:1px solid rgb(23, 182, 23)">
                                                                    <i class="fa fa-check-circle"
                                                                        style="color:rgb(23, 182, 23) "></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td class="table-btn">
                                                            @if ($user->blacklist == null)
                                                                <a href="#"
                                                                    class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#Blacklist{{ $user->id }}">
                                                                    <i class="fa fa-ban" style="color: red"></i>
                                                                </a>
                                                            @else
                                                                <form id="removeFromBlacklist{{ $user->id }}"
                                                                    {{-- style="display: none" --}}
                                                                    action="{{ route('admin.blacklist.remove', $user->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button
                                                                        onclick="removeFromBlacklist(event,{{ $user->id }})"
                                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">
                                                                        <i class="fa fa-unlock"></i>
                                                                    </button>
                                                                </form>
                                                            @endif
                                                        </td>
                                                        <td class="table-btn">
                                                            <a class="icon-container"
                                                                href="{{ route('admin.categories.delete', $user->id) }}"
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
                                @if (count($users) > 0)
                                    <div class="pagination mt-5 ml-2 d-flex justify-content-center">
                                        {{ $users->links('vendor.pagination.custom') }}
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
    @foreach ($users as $user)
        @include('dashboard.users.edit')
    @endforeach
    @include('dashboard.users.add-user')
    @include('dashboard.users.blacklist.script')
    @foreach ($users as $user)
        @include('dashboard.users.blacklist.add')
    @endforeach
    <!-- /page content -->
@endsection
