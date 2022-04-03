<div class="card">
    <div class="card-header">List of countries</div>
    <div class="card-body">
        <table class="table table-hover">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>ISO</th>
                <th>Edit</th>
            </tr>
            @foreach ($countries as $country)
                <tr>
                    <td>{{$country->id}}</td>
                    <td>{{$country->Name}}</td>
                    <td>{{$country->ISO}}</td>
                    <td><a href="/dashboard/{{$country->id}}" class="btn btn-primary">Edit</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>