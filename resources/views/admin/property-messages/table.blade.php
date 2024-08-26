<table>
    <thead>
        <tr>
            <th>Sender</th>
            <th class="subject">Subject</th>
            <th class="date">Date</th>
            <th class="view">View</th>
        </tr>
    </thead>
    @dd($paginator)
    @foreach ($paginator as $item)
        <tbody>
            <tr>
                <td>{{ $item->client->firstname }} {{ $item->client->lastname }}</td>
                <td class="subject truncate">{{ $item->message }}</td>
                <td class="date">{{ $item->created_at->format('D,ga') }}</td>
                <td class="date">
                    <a href="#" class="btn btn-outline-success" style="background: #352da3;color:#fff"
                        data-bs-toggle="modal" data-bs-target="#messageDetails{{ $item->id }}">
                        View
                    </a>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>
<div class="pagination">
    {{ $paginator->links('vendor.pagination.custom') }}
</div>
@foreach ($paginator as $item)
    @include('admin.property-messages.details')
@endforeach
