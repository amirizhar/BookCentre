<!DOCTYPE html>
<html>
<title>Book Centre | Administrator</title>
<meta charset="UTF-8">

<?php
if (Session::has('firebaseUserId') && Session::has('idToken')) {
    // dd("User masih login.");
} else {
    dd('User sudah logout.');
}
?>

<head>
    <meta charset="utf-8">
    <title>Book Centre | Manage Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    @include('Admin.navBar')
    @include('Admin.homeCss')
</head>
<style>
    .container {
        margin-top: 70px;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Bookstore Staff List
                        <div class="float-end"><a
                            <button type="button" class="btn btn-sm btn-primary"
                                href="/userRegister">Register Staff</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">UID</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>

                            </thead>
                            <tbody id="table-list">

                                {{-- Display all users from DB --}}
                                @foreach ($senarai as $x)
                                    <tr>
                                        <td>{{ $x->uid }}</td>
                                        <td>{{ $x->email }}</td>
                                        <td>
                                            <button type="button" id="delete-button" class="btn btn-primary">Delete</button>
                                        <td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
