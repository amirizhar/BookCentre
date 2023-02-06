{{-- reference = https://www.laravelcode.com/post/laravel-8-crud-operation-example-using-google-firebase  --}}

<?php
if (Session::has('firebaseUserId') && Session::has('idToken')) 
{
    // dd("User masih login.");
} else {
    dd("User sudah logout.");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Book Centre | Administrator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    .container {
      margin-top: 70px;
    }
  </style>

<body>

    @include('Admin.navBar')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Customer Messages
                        {{-- <div class="float-end">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#add-modal">Add Book</button>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">#</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Messages</th>
                                    <th scope="col">Date and Time</th>
                                    {{-- <th scope="col">Store</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Summary</th> --}}
                                    {{-- <th scope="col">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody id="table-list">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-database.js"></script>
    <script type="text/javascript">
        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyBZeQY2IS6ohN1FCcTn-_yTefCfTk1w1gs",
            authDomain: "bookcentre-21891.firebaseapp.com",
            databaseURL: "https://bookcentre-21891-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "bookcentre-21891",
            storageBucket: "bookcentre-21891.appspot.com",
            messagingSenderId: "573036855415",
            appId: "1:573036855415:web:cf1e7983aa8a621d7a8672"
        };

        // Initialize Firebase
        const app = firebase.initializeApp(firebaseConfig);

        var database = firebase.database();

        var lastId = 0;

        // get post data
        database.ref("contacts").on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function(index, value) {
                if (value) {
                    htmls.push('<tr>\
                                <td>' + index + '</td>\
                                <td>' + value.email + '</td>\
                                <td>' + value.name + '</td>\
                                <td>' + value.messages + '</td>\
                                <td>' + value.datetime + '</td>\
                                <td>\
                                </td>\
                            </tr>');
                }
                lastId = index;
            });
            $('#table-list').html(htmls);
        });

        // -----------------------add data----------------------------------
        // $('#add-submit').on('click', function() {
        //     var formData = $('#add-post').serializeArray();
        //     var createId = Number(lastId) + 1;

        //     firebase.database().ref('books/' + createId).set({
        //         isbn: formData[0].value,
        //         title: formData[1].value,
        //         language: formData[2].value,
        //         publisher: formData[3].value,
        //         price: formData[4].value,
        //         store: formData[5].value,
        //         summary: formData[6].value,
        //         category: formData[7].value,
        //         stock: formData[8].value,
        //     });

        //     // Reassign lastID value
        //     lastId = createId;
        //     $("#add-post")[0].reset();
        //     $("#add-modal").modal('hide');
        // });
    </script>
</body>

</html>
