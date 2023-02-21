{{-- reference = https://www.laravelcode.com/post/laravel-8-crud-operation-example-using-google-firebase  --}}

<?php

if (Session::has('firebaseUserId') && Session::has('idToken')) {
    // dd("User masih login.");
} else {
    dd('User sudah logout.');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Book Centre | <?php $category = @$_GET['value'];
    echo $category; ?>
    </title>
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

    @include('Staff.navBar')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Book List
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">#</th>
                                    <th scope="col">ISBN</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Language</th>
                                    <th scope="col">Publisher</th>
                                    <th scope="col">Price (RM)</th>
                                    <th scope="col">Store</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Summary</th>
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

    <?php
    $category = @$_GET['value'];
    // dd($category)
    ?>

    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-database.js"></script>
    <script>
        category = "<?php echo $category; ?>";
    </script>

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

        <?php
        $sesi = Session::get('firebaseUserId');
        ?>
        var session =
            '<?php
            echo $sesi;
            ?>';

        // mph
        mph1 = "CIqF4dqDMsPETn5dkw1LE9UDy322"
        mph2 = "vCw4TwpJaFSsrF3JqQKe4nN4KFV2"
        mph3 = "YU0mSMpimFXAAj5hZusJfyO21Lt2"
        mph4 = "Zil8H0fMHJWraF0NivYZIL18dGn2"
        mph5 = "YXhYZaVu0xP757sGf6FTliFBSVd2"

        // kinokuniya
        kinokuniya1 = "Bx4DBsutciaTExDiFob6TUOJg9y1"
        kinokuniya2 = "BIcVpHsR9pR0smTFkokmlHchksH3"
        kinokuniya3 = "sXFPJ2OqBaeD9pGvlzITPMVf8gh2"
        kinokuniya4 = "XuNX2ttNrcQ60AbvOPPI9nb9O332"
        kinokuniya5 = "ZhvLL3XiR4Zs0qkzrLlx7oU6hTp1"


        // popular
        popular1 = "hoiuhbXr5mgOuPPm8WuDPAmc3843"
        popular2 = "t6hGF7UCBLXO3mipj8IfW0GZri83"
        popular3 = "fJMHB0AHLaYqKNjlc41zRP441zH3"
        popular4 = "rgHauq9BLxZHNqH9VQzMFAJiNpQ2"
        popular5 = "RvLBIRqoRHQFX3eB4A4uVSl49KE3"

        // get post data
        database.ref("books").on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function(index, value) {
                if (value) {
                    if (value.category == category) {
                        if (session == mph1 || session == mph2 || session == mph3 || session == mph4 ||
                            session == mph5) {
                            if (value.store == 'mph') {
                                htmls.push('<tr>\
                                                <td>' + index + '</td>\
                                                <td>' + value.isbn + '</td>\
                                                <td>' + value.title + '</td>\
                                                <td>' + value.language + '</td>\
                                                <td>' + value.publisher + '</td>\
                                                <td> RM' + value.price + '</td>\
                                                <td>' + value.store + '</td>\
                                                <td>' + value.category + '</td>\
                                                <td>' + value.stock + '</td>\
                                                <td style="text-align:justify;">' + value.summary + '</td>\
                                                </tr>');
                            }
                        }
                    }

                    if (value.category == category) {
                        if (session == kinokuniya1 || session == kinokuniya2 || session == kinokuniya3 ||
                            session == kinokuniya4 || session == kinokuniya5) {
                            if (value.store == 'kinokuniya') {
                                htmls.push('<tr>\
                                                <td>' + index + '</td>\
                                                <td>' + value.isbn + '</td>\
                                                <td>' + value.title + '</td>\
                                                <td>' + value.language + '</td>\
                                                <td>' + value.publisher + '</td>\
                                                <td> RM' + value.price + '</td>\
                                                <td>' + value.store + '</td>\
                                                <td>' + value.category + '</td>\
                                                <td>' + value.stock + '</td>\
                                                <td style="text-align:justify;">' + value.summary + '</td>\
                                                </tr>');
                            }
                        }
                    }

                    if (value.category == category) {
                        if (session == popular1 || session == popular2 || session == popular3 || session ==
                            popular4 || session == popular5) {
                            if (value.store == 'popular') {
                                htmls.push('<tr>\
                                            <td>' + index + '</td>\
                                                <td>' + value.isbn + '</td>\
                                                <td>' + value.title + '</td>\
                                                <td>' + value.language + '</td>\
                                                <td>' + value.publisher + '</td>\
                                                <td> RM' + value.price + '</td>\
                                                <td>' + value.store + '</td>\
                                                <td>' + value.category + '</td>\
                                                <td>' + value.stock + '</td>\
                                                <td style="text-align:justify;">' + value.summary + '</td>\
                                                </tr>');
                            }
                        }
                    }


                }
                lastId = index;
            });

            $('#table-list').html(htmls);
        });
    </script>
</body>

</html>
