<table>
    <thead>
        <tr>
            <th>Sender</th>
            <th class="subject">Subject</th>
            <th class="date">Date</th>
        </tr>
    </thead>
    @foreach ($myMessages as $item)
        <tbody>
            <tr>
                <td>{{ $item->client->firstname }} {{ $item->client->lastname }}</td>
                <td class="subject truncate">{{ $item->message }}</td>
                <td class="date">{{ $item->created_at->format('D,ga') }}</td>
            </tr>
        </tbody>
    @endforeach
</table>
<div class="pagination">
    1-1 of 1 Results
</div>
