<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Product</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
            <tr>
                <th scope="row">{{ $d->id }}</th>
                <td>{{ $d->name }}</td>
                <td>
                    <button onclick="show({{ $d->id }})" class="btn btn-warning">
                        Edit
                    </button>
                    <button onclick="destroy({{ $d->id }})" class="btn btn-danger">
                        Delete
                    </button>
                </td>
            </tr>            
        @endforeach
    </tbody>
  </table>