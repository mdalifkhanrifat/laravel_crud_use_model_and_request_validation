<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        @if (session('massage'))
            <h5>{{ session('massage') }}</h5>
        @endif
        <a href="{{ route('one.create') }}" class="btn btn-info">Add data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('one.edit', $item->id) }}">Update</a>
                            <form method="POST" action="{{ route('one.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger rounded-0" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

</body>

</html>
