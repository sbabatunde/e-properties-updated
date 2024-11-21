@extends('admin.index')
@section('content')
    <div class="container">
        <div class="post-prop-header">
            <div class="prop-form-header">
                <div class="post-prop">
                    <h3>
                        <strong style="color: black">
                            Groups List
                        </strong>
                    </h3>
                </div>
                @include('admin.user.details')
            </div>
            <!-- Responsive Table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Group Name</th>
                            <th>Photo</th>
                            <th>Members</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($groups as $group)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $group->group_name }}</td>
                                <td>
                                    @if ($group->photo)
                                        <img src="{{ $group->photo }}" alt="{{ $group->group_name }}"
                                            style="width: 40px; height: 40px; border-radius: 50%;">
                                    @else
                                        <span>No photo</span>
                                    @endif
                                </td>
                                <td>{{ $group->members_count }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editGroup{{ $group->id }}"
                                        title="Edit Group"
                                        class="btn btn-primary btn-md d-inline-flex align-items-center mx-1">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="#" title="Add Member" data-bs-toggle="modal"
                                        data-bs-target="#addMemberModal{{ $group->id }}"
                                        class="btn btn-primary btn-md d-inline-flex align-items-center mx-1">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <a href="{{ route('admin.group.view.members', $group->id) }}"
                                        style="background: #394293" title="View Members"
                                        class="btn btn-primary btn-md d-inline-flex align-items-center mx-1">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <!-- Delete Button using Anchor -->
                                    <a href="javascript:void(0);"
                                        class="btn btn-danger btn-md d-inline-flex align-items-center mx-1"
                                        onclick="event.preventDefault(); deleteGroup({{ $group->id }});">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                    <!-- JavaScript function to handle deletion with details -->
                                    <script>
                                        function deleteGroup(id, groupName) {
                                            if (confirm('Are you sure you want to delete the group "' + groupName + '"?')) {
                                                // Use the route helper to generate the URL
                                                fetch("{{ route('admin.group.destroy', '') }}/" + id, {
                                                        method: 'DELETE',
                                                        headers: {
                                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                            'Content-Type': 'application/json'
                                                        },
                                                        body: JSON.stringify({
                                                            // Add any extra details you want to send along
                                                            id: id,
                                                            group_name: groupName
                                                        })
                                                    }).then(response => response.json())
                                                    .then(data => {
                                                        if (data.success) {
                                                            // Optionally, reload the page or remove the row from the DOM
                                                            window.location.reload();
                                                        } else {
                                                            alert('Failed to delete the group');
                                                        }
                                                    }).catch(error => {
                                                        alert('An error occurred. Please try again.');
                                                        console.error('Error:', error);
                                                    });
                                            }
                                        }
                                    </script>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No groups available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @foreach ($groups as $group)
        @include('admin.user.groups.membership-form')
        @include('admin.user.groups.edit-form')
    @endforeach
@endsection
