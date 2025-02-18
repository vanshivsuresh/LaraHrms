@extends('movies.layout')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>john.doe@example.com</td>
            <td>(123) 456-7890</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Smith</td>
            <td>jane.smith@example.com</td>
            <td>(987) 654-3210</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Mark Johnson</td>
            <td>mark.johnson@example.com</td>
            <td>(555) 123-4567</td>
        </tr>
    </tbody>
</table>
@endsection