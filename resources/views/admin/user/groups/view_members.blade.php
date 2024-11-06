@extends('admin.index')
@section('content')
    <div class="" style="background-color: #eff0ff" role="main">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            Members of {{ $group->group_name }}
                        </strong>
                    </h3>
                </div>
                @include('admin.user.details')
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="">
                        <div class="">
                            <br />
                            <div class="row justify-content-md-center">
                                <div class="col-md-11">
                                    <div class="form-body  ">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th># </th>
                                                    <th>Name</th>
                                                    <th>photo</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @isset($group->members)
                                                        @foreach ($group->members as $key => $member)
                                                    <tr>
                                                        <td>
                                                            {{ $key + 1 }}
                                                        </td>
                                                        <td>
                                                            <img src="{{ $member->photo ?? asset('/assets/admin/images/no_image.jpg') }}"
                                                                alt="{{ $member->firstname }}" class="property-mini-image">
                                                        </td>
                                                        <td>{{ $member->firstname }} {{ $member->lastname }}</td>
                                                        <td>
                                                            <!-- Action buttons for edit, remove, etc. -->
                                                            <form
                                                                action="{{ route('admin.group.members.destroy', [$group->id, $member->id]) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm">Remove</button>
                                                            </form>
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
                                @if (count($members) > 10)
                                    <div class="pagination mt-5 ml-2 d-flex justify-content-center">
                                        {{ $members->links('vendor.pagination.custom') }}
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
