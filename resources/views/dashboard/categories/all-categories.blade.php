<table>
    <thead>
        <tr>
            <th>Name </th>
            <th>Main Category </th>
            <th>Slug </th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @isset($categories)
                @foreach ($categories as $category)
            <tr>
                <td>{{ $category->type }}</td>
                <td>{{ $category->category->category ?? '' }}</td>
                <td>{{ $category->slug }}</td>
                <td class="table-btn">
                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
                <td class="table-btn">
                    <a href="{{ route('admin.categories.delete', $category->id) }}"
                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        @endisset
        </tr>
    </tbody>
</table>
