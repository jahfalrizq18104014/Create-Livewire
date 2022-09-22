<div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                
            @foreach ( $users as $index=> $items)
            <tr>
                <td>{{ $index + 1}}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href=""{{route('user.details',$item->id)}} class="badge bg-primary">detail</a>
                    <a href="" class="badge bg-warning">submit</a>
                    <a href="" class="badge bg-danger">delete</a>

                </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
</div>