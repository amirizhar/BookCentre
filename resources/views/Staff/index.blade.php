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
    <title>Book Centre | Manage Book</title>
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
                        <div class="float-end">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#add-modal">Add Book</button>
                        </div>
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
                                    <th scope="col">Price</th>
                                    <th scope="col">Store</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Summary</th>
                                    <th scope="col">Action</th>
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


    {{-- create modal --}}
    <div class="modal fade" id="add-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register Book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="add-post" method="post">

                        {{-- <div class="mb-3">
                            <label for="cover" class="form-label">Choose a book cover:</label><br>
                            <input type="file" id="cover" name="cover" accept="image/png, image/jpeg">
                        </div> --}}

                        <div class="mb-3">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="number" class="form-control" id="isbn" name="isbn">
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="mb-3">
                            <label for="language" class="form-label">Language</label>
                            <input type="text" class="form-control" id="isbn" name="language">
                        </div>

                        <div class="mb-3">
                            <label for="publisher" class="form-label">Publisher</label>
                            <input type="text" class="form-control" id="publisher" name="publisher">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>

                        <div class="mb-3">
                            <label for="store" class="form-label">Store</label>
                            <input type="text" class="form-control" id="store" name="store">
                        </div>

                        <div class="mb-3">
                            <label for="summary" class="form-label">Summary</label>
                            <textarea type="text" class="form-control" id="summary" name="summary"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Caterory</label><br>
                            <select type="text" name="category" id="category">

                                <option value="BusinessEconomics">Business & Economics</option>
                                <option value="ChildrensBooks">Childrens Books</option>
                                <option value="ComicsGraphic">Comics & Graphic</option>

                                <option value="Novels">Novels</option>
                                <option value="FamilyRelationships">Family & Relationships</option>
                                <option value="Languages">Languages</option>

                                <option value="Religion">Religion</option>
                                <option value="ComputersInternet">Computers & Internet</option>
                                <option value="DesigntheArts">Design & the Arts</option>

                                <option value="HistoryPolitics">History & Politics</option>
                                <option value="HealthWellBeing">Health & Well-Being</option>
                                <option value="Sport">Sport</option>

                                <option value="HobbiesCollectibles">Hobbies & Collectibles</option>
                                <option value="SocialScience">Social Science</option>
                                <option value="Science">Science</option>

                                <option value="FoodDrink">Food & Drink</option>
                                <option value="SelfEnrichment">Self-Enrichment</option>
                                <option value="Localstudy">Local study</option>

                                <option value="Textbooks">Textbooks</option>
                                <option value="LanguageExam">Language Exam</option>
                                <option value="InternationalExam">International Exam</option>

                                <option value="Fiction">Fiction</option>
                                <option value="Nonfiction">Non-fiction</option>
                                <option value="ChineseBooks">Chinese Books</option>

                                <option value="JapaneseBooks">Japanese Books</option>
                                <option value="Lifestyle">Lifestyle</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label><br>
                            <select type="text" name="stock" id="stock">
                                <option value="Not Available">Not Available</option>
                                <option value="Available">Available</option>
                            </select>
                        </div>

                        <button type="button" id="add-submit" class="btn btn-primary">Register Book</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- update modal --}}
    <div class="modal fade" id="update-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="update-post" method="post">

                        <div class="mb-3" hidden>
                            <label for="update-isbn" class="form-label">ISBN</label>
                            <input type="number" class="form-control" id="update-isbn" name="isbn">
                        </div>

                        <div class="mb-3" hidden>
                            <label for="update-title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="update-title" name="title">
                        </div> 

                        <div class="mb-3" hidden>
                            <label for="update-language" class="form-label">Language</label>
                            <input type="text" class="form-control" id="update-language" name="language">
                        </div>

                        <div class="mb-3" hidden>
                            <label for="update-publisher" class="form-label">Publisher</label>
                            <input type="text" class="form-control" id="update-publisher" name="publisher">
                        </div>

                        <div class="mb-3">
                            <label for="update-price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="update-price" name="price">
                        </div>

                        <div class="mb-3" hidden>
                            <label for="update-store" class="form-label">Store</label>
                            <input type="text" class="form-control" id="update-store" name="store">
                        </div>

                        <div class="mb-3" hidden>
                            <label for="update-summary" class="form-label">Summary</label>
                            <textarea type="text" class="form-control" id="update-summary" name="summary"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="update-category" class="form-label">Category</label><br>
                            <select type="text" name="category" id="update-category">
                                <option value="BusinessEconomics">Business & Economics</option>
                                <option value="Children's Books">Children's Books</option>
                                <option value="Comics & Graphic">Comics & Graphic</option>
                                <option value="Novels">Novels</option>
                                <option value="Family & Relationships">Family & Relationships</option>
                                <option value="Languages">Languages</option>
                                <option value="Religion">Religion</option>
                                <option value="Computers & Internet">Computers & Internet</option>
                                <option value="Design & the Arts">Design & the Arts</option>
                                <option value="History & Politics">History & Politics</option>
                                <option value="Health & Well-Being">Health & Well-Being</option>
                                <option value="Sport">Sport</option>
                                <option value="Hobbies & Collectibles">Hobbies & Collectibles</option>
                                <option value="Social Science">Social Science</option>
                                <option value="Science">Science</option>
                                <option value="Food & Drink">Food & Drink</option>
                                <option value="Self-Enrichment">Self-Enrichment</option>
                                <option value="Local study">Local study</option>
                                <option value="Textbooks">Textbooks</option>
                                <option value="Language Exam">Language Exam</option>
                                <option value="International Exam">International Exam</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Non-fiction">Non-fiction</option>
                                <option value="Chinese Books">Chinese Books</option>
                                <option value="Japanese Books">Japanese Books</option>
                                <option value="Lifestyle">Lifestyle</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="mb-3" hidden>
                            <label for="update-stock" class="form-label">Stock</label><br>
                            <select type="text" name="stock" id="update-stock">
                                <option value="Not Available">Not Available</option>
                                <option value="Available">Available</option>
                            </select>
                        </div>

                        <button type="button" id="update-button" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- delete modal --}}
    <div class="modal fade" id="delete-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="lead">Are you sure you want to delete this book?</p>
                    <input name="id" id="post-id" type="hidden">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="delete-button" class="btn btn-primary">Delete</button>
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
        database.ref("books").on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function(index, value) {
                if (value) {
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
                                    <td style="text-align:justify;">' + value.summary +
                        '</td>\
                                    <td><a data-bs-toggle="modal" data-bs-target="#update-modal" class="btn btn-success update-post" data-id="' +
                        index +
                        '">Update</a>\
                                    <a data-bs-toggle="modal" data-bs-target="#delete-modal" class="btn btn-danger delete-data" data-id="' +
                        index + '">Delete</a></td>\
                                </tr>');
                }
                lastId = index;
            });
            $('#table-list').html(htmls);
        });

        // -----------------------add data----------------------------------
        $('#add-submit').on('click', function() {
            var formData = $('#add-post').serializeArray();
            var createId = Number(lastId) + 1;

            firebase.database().ref('books/' + createId).set({
                isbn: formData[0].value,
                title: formData[1].value,
                language: formData[2].value,
                publisher: formData[3].value,
                price: formData[4].value,
                store: formData[5].value,
                summary: formData[6].value,
                category: formData[7].value,
                stock: formData[8].value,
            });

            // Reassign lastID value
            lastId = createId;
            $("#add-post")[0].reset();
            $("#add-modal").modal('hide');
        });

        // ---------fetch data from db and display in the form---------------
        var updateID = 0;
        $('body').on('click', '.update-post', function() {
            updateID = $(this).attr('data-id');
            firebase.database().ref('books/' + updateID).on('value', function(snapshot) {
                var values = snapshot.val();
                $('#update-isbn').val(values.isbn);
                $('#update-title').val(values.title);
                $('#update-price').val(values.price);
                $('#update-stock').val(values.stock);
                $('#update-language').val(values.language);
                $('#update-publisher').val(values.publisher);
                $('#update-store').val(values.store);
                $('#update-summary').val(values.summary);
                $('#update-category').val(values.category);
            });
        });

        // --------------------------update to DB----------------------------
        $('#update-button').on('click', function() {
            var values = $("#update-post").serializeArray();
            var postData = {
                isbn: values[0].value,
                title: values[1].value,
                language: values[2].value,
                publisher: values[3].value,
                price: values[4].value,
                store: values[5].value,
                summary: values[6].value,
                category: values[7].value,
                stock: values[8].value,
            };

            var updatedPost = {};
            updatedPost['/books/' + updateID] = postData;

            firebase.database().ref().update(updatedPost);

            $("#update-modal").modal('hide');
            $("#update-post")[0].reset();
        });

        // ---------------------------delete modal-------------------------
        $("body").on('click', '.delete-data', function() {
            var id = $(this).attr('data-id');
            $('#post-id').val(id);
        });

        // delete post
        $('#delete-button').on('click', function() {
            var id = $('#post-id').val();
            firebase.database().ref('books/' + id).remove();

            $('#post-id').val('');
            $("#delete-modal").modal('hide');
        });
    </script>
</body>

</html>
