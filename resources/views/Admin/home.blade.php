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
    @include('Admin.navBar')
    @include('Admin.homeCss')
</head>

<body>
    <br><br>
    <h1>
        <center>Book Categories</center>
    </h1>
    <!-- 1st Row -->
    <div class="row">
        <div class="column">
            <p><a href="admin-books?value=BusinessEconomics" type="text" name="Comics Graphic" method="POST">
                    <img src="assets/Images/Business.png" alt="Comics & Graphic" style="width:100%";"></a></p>
            <center>
                <p>Business & Economics</p>
            </center>
        </div>
        <div class="column">
            <center>
                <p><a href="admin-books?value=ChildrensBooks" type="text" name="Arts And Music"
                        method="POST">
                        <img src="assets/Images/Kids.jpg" alt="ArtsAndMusic" style="width:100%";"></a></p>
                <p>Children</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=ComicsGraphic" type="text" name="Comics&Graphic" method="POST">
                    <img src="assets/Images/Comics.png" alt="Comics & Graphic" style="width:100%";"></a></p>
            <center>
                <p>Comics & Graphics</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=Novels" type="text" name="Business" method="POST">
                    <img src="assets/Images/novels.png" alt="Business" style="width:100%";"></a></p>
            <center>
                <p>Novels</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=FamilyRelationships" type="text" name="Travel" method="POST">
                    <img src="assets/Images/family.jpeg" alt="Travel" style="width:100%";"></a></p>
            <center>
                <p>Family & Relationship</p>
            </center>
        </div>
    </div>


    <!-- 2nd Row -->
    <div class="row">
        <div class="column">
            <p><a href="admin-books?value=Languages" type="text" name="Cooking" method="POST">
                    <img src="assets/Images/language.jpeg" alt="Cooking" style="width:100%";"></a></p>
            <center>
                <p>Language</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=Religion" type="text" name="Edu And Reference"
                    method="POST">
                    <img src="assets/Images/Religion.png" alt="EduAndReference" style="width:100%";"></a></p>
            <center>
                <p>Religion</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=ComputersInternet" type="text" name="Entertaiment" method="POST">
                    <img src="assets/Images/ComputerAndTech.jpg" alt="Entertaiment" style="width:100%";"></a></p>
            <center>
                <p>Computers & Internet</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=DesigntheArts" type="text" name="Health And Fitness"
                    method="POST">
                    <img src="assets/Images/ArtsAndMusic.png" alt="HealthAndFitness" style="width:100%";"></a></p>
            <center>
                <p>Design & Art</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=HistoryPolitics" type="text" name="History" method="POST">
                    <img src="assets/Images/History.png" alt="History" style="width:100%";"></a></p>
            <center>
                <p>History & Politics</p>
            </center>
        </div>
    </div>


    <!-- 3rd Row -->
    <div class="row">
        <div class="column">
            <p><a href="admin-books?value=HealthWellBeing" type="text" name="Home And Garden"
                    method="POST">
                    <img src="assets/Images/HealthAndFitness.png" alt="HomeAndGarden" style="width:100%";"></a></p>
            <center>
                <p>Health & Well-being</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=Sport" type="text" name="Horror" method="POST">
                    <img src="assets/Images/Sport.png" alt="Horror" style="width:100%";"></a></p>
            <center>
                <p>Sport</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=HobbiesCollectibles" type="text" name="Kids" method="POST">
                    <img src="assets/Images/hobbies.png" alt="Kids" style="width:100%";"></a></p>
            <center>
                <p>Hobbies & Collectibles</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=SocialScience" type="text" name="Literature And Fiction" method="POST">
                    <img src="assets/Images/socialScience.png" alt="LiteratureAndFiction"
                        style="width:100%";"></a></p>
            <center>
                <p>Social Science</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=Science" type="text" name="Medical" method="POST">
                    <img src="assets/Images/science.png" alt="Medical" style="width:100%";"></a></p>
            <center>
                <p>Science</p>
            </center>
        </div>
    </div>


    <!-- 4th Row -->
    <div class="row">
        <div class="column">
            <p><a href="admin-books?value=FoodDrink" type="text" name="Parenting" method="POST">
                    <img src="assets/Images/food.png" alt="Parenting" style="width:100%";"></a></p>
            <center>
                <p>Food & Drink</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=SelfEnrichment" type="text" name="Religion" method="POST">
                    <img src="assets/Images/self-enrichment.png" alt="Religion" style="width:100%";"></a></p>
            <center>
                <p>Self-Enrichment</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=Localstudy" type="text" name="Romance" method="POST">
                    <img src="assets/Images/localStudy.png" alt="Romance" style="width:100%";"></a></p>
            <center>
                <p>Local Study</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=Textbooks" type="text" name="Sci-fi And Fantasy"
                    method="POST">
                    <img src="assets/Images/textbook.png" alt="Sci-fiAndFantasy" style="width:100%";"></a>
            </p>
            <center>
                <p>Textbooks</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=LanguageExam" type="text" name="Science And Math"
                    method="POST">
                    <img src="assets/Images/languageExam.jpeg" alt="ScienceAndMath" style="width:100%";"></a></p>
            <center>
                <p>Language Exam</p>
            </center>
        </div>
    </div>

    <!-- 6th Row -->
    <div class="row">
        <div class="column">
            <p><a href="admin-books?value=InternationalExam" type="text" name="Sport" method="POST">
                    <img src="assets/Images/internationalExam.jpeg" alt="Sport" style="width:100%";"></a></p>
            <center>
                <p>International Exam</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=Fiction" type="text" name="Computer And Tech"
                    method="POST">
                    <img src="assets/Images/fiction.png" alt="ComputerAndTech" style="width:100%";"></a></p>
            <center>
                <p>Fiction</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=Nonfiction" type="text" name="Hobbies And Crafts"
                    method="POST">
                    <img src="assets/Images/non-fiction.png" alt="HobbiesAndCrafts" style="width:100%";"></a>
            </p>
            <center>
                <p>Non-Fiction</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=ChineseBooks" type="text" name="Mysteries" method="POST">
                    <img src="assets/Images/chineseBook.png" alt="Mysteries" style="width:100%";"></a></p>
            <center>
                <p>Chinese Books</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=JapaneseBooks" type="text" name="Self-help" method="POST">
                    <img src="assets/Images/japaneseBook.png" alt="Self-Help" style="width:100%";"></a></p>
            <center>
                <p>Japanese Books</p>
            </center>
        </div>
    </div>

    <!-- 4th Row -->
    <div class="row">
        <div class="column">
            <p><a href="admin-books?value=Lifestyle" type="text" name="Parenting" method="POST">
                    <img src="assets/Images/lifestyle.png" alt="Parenting" style="width:100%";"></a></p>
            <center>
                <p>Lifestyle</p>
            </center>
        </div>
        <div class="column">
            <p><a href="admin-books?value=Others" type="text" name="Religion" method="POST">
                    <img src="assets/Images/others.png" alt="Religion" style="width:100%";"></a></p>
            <center>
                <p>Others</p>
            </center>
        </div>
    </div>
    <br><br>




    <!----------------------------- Contact Form------------------------->

    </div>


    <tr>
        <br><br><br>
</body>

</html>
