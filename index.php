<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro U Tasty</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to the external CSS stylesheet -->
    <link rel="icon" href="favicon/food.png" type="image/png"> <!-- Favicon for the site -->
</head>
<body>
    <header>
        <h1>Bistro U Tasty</h1> <!-- Main heading for the restaurant -->
        <nav>
            <ul>
                <!-- Navigation menu -->
                <li><a href="#menu">Nabídka</a></li> <!-- Link to the menu section -->
                <li><a href="#gallery">Galerie</a></li> <!-- Link to the gallery section -->
                <li><a href="#reviews">Recenze</a></li> <!-- Link to the reviews section -->
                <li><a href="#contact">Kontakt</a></li> <!-- Link to the contact section -->
            </ul>
        </nav>
    </header>
    <main>
        <section id="welcome">
            <h2>Vítejte v našem bistru!</h2> <!-- Welcome message -->
            <p>Jsme malé, rodinné bistro specializující se na domácí kuchyni a čerstvé suroviny. Přijďte si pochutnat na našich lahodných pokrmech a užijte si příjemnou atmosféru.</p>
        </section>
        <section id="specialties">
            <h2>Naše Specializace</h2> <!-- Our specialties -->
            <p>V našem bistru se zaměřujeme na:</p>
            <ul>
                <li>Čerstvé saláty z lokálních surovin</li> <!-- Fresh salads from local ingredients -->
                <li>Domácí polévky</li> <!-- Homemade soups -->
                <li>Pečené speciality a grilovaná jídla</li> <!-- Baked specialties and grilled dishes -->
                <li>Vegetariánské a veganské pokrmy</li> <!-- Vegetarian and vegan dishes -->
                <li>Domácí dezerty a zákusky</li> <!-- Homemade desserts and cakes -->
            </ul>
        </section>
        <section id="menu" class="menu-section">
            <h2>Nabídka</h2> <!-- Menu section heading -->
            <div>
                <h3>Čerstvé saláty</h3> <!-- Fresh salads -->
                <ul>
                    <li class="menu-item">
                        Řecký salát - <span class="price">150 Kč</span> <!-- Greek salad price -->
                        <div class="ingredients">Rajčata, okurky, olivy, feta sýr, červená cibule, olivový olej</div> <!-- Ingredients for Greek salad -->
                    </li>
                    <li class="menu-item">
                        Caesar salát - <span class="price">170 Kč</span> <!-- Caesar salad price -->
                        <div class="ingredients">Římský salát, kuřecí prsa, parmazán, krutony, Caesar dresing</div> <!-- Ingredients for Caesar salad -->
                    </li>
                    <li class="menu-item">
                        Salát s avokádem a quinoou - <span class="price">180 Kč</span> <!-- Avocado and quinoa salad price -->
                        <div class="ingredients">Avokádo, quinoa, cherry rajčata, okurky, špenát, citronová zálivka</div> <!-- Ingredients for avocado and quinoa salad -->
                    </li>
                </ul>
            </div>
            <div>
                <h3>Domácí polévky</h3> <!-- Homemade soups -->
                <ul>
                    <li class="menu-item">
                        Dýňová polévka - <span class="price">90 Kč</span> <!-- Pumpkin soup price -->
                        <div class="ingredients">Dýně, mrkev, cibule, kokosové mléko, zázvor</div> <!-- Ingredients for pumpkin soup -->
                    </li>
                    <li class="menu-item">
                        Čočková polévka - <span class="price">80 Kč</span> <!-- Lentil soup price -->
                        <div class="ingredients">Čočka, mrkev, celer, cibule, česnek</div> <!-- Ingredients for lentil soup -->
                    </li>
                </ul>
            </div>
            <div>
                <h3>Pečené speciality a grilovaná jídla</h3> <!-- Baked specialties and grilled dishes -->
                <ul>
                    <li class="menu-item">
                        Grilovaný losos - <span class="price">250 Kč</span> <!-- Grilled salmon price -->
                        <div class="ingredients">Losos, citron, bylinky, olivový olej</div> <!-- Ingredients for grilled salmon -->
                    </li>
                    <li class="menu-item">
                        Pečená kachna - <span class="price">300 Kč</span> <!-- Roasted duck price -->
                        <div class="ingredients">Kachna, jablka, cibule, červené víno</div> <!-- Ingredients for roasted duck -->
                    </li>
                    <li class="menu-item">
                        Grilovaná zelenina - <span class="price">150 Kč</span> <!-- Grilled vegetables price -->
                        <div class="ingredients">Papriky, cuketa, lilek, olivový olej, bylinky</div> <!-- Ingredients for grilled vegetables -->
                    </li>
                </ul>
            </div>
            <div>
                <h3>Vegetariánské a veganské pokrmy</h3> <!-- Vegetarian and vegan dishes -->
                <ul>
                    <li class="menu-item">
                        Vegetariánská lasagne - <span class="price">190 Kč</span> <!-- Vegetarian lasagna price -->
                        <div class="ingredients">Těstoviny, ricotta, špenát, rajčatová omáčka, parmazán</div> <!-- Ingredients for vegetarian lasagna -->
                    </li>
                    <li class="menu-item">
                        Vegan burger - <span class="price">220 Kč</span> <!-- Vegan burger price -->
                        <div class="ingredients">Burger z červené řepy, avokádo, salát, rajče, veganská majonéza</div> <!-- Ingredients for vegan burger -->
                    </li>
                    <li class="menu-item">
                        Cizrnový falafel - <span class="price">160 Kč</span> <!-- Chickpea falafel price -->
                        <div class="ingredients">Cizrna, petržel, česnek, koriandr, olivový olej</div> <!-- Ingredients for chickpea falafel -->
                    </li>
                </ul>
            </div>
            <div>
                <h3>Domácí dezerty a zákusky</h3> <!-- Homemade desserts and cakes -->
                <ul>
                    <li class="menu-item">
                        Jablečný štrúdl - <span class="price">100 Kč</span> <!-- Apple strudel price -->
                        <div class="ingredients">Jablka, skořice, cukr, máslo, těsto</div> <!-- Ingredients for apple strudel -->
                    </li>
                    <li class="menu-item">
                        Čokoládový dort - <span class="price">120 Kč</span> <!-- Chocolate cake price -->
                        <div class="ingredients">Čokoláda, mouka, vejce, máslo, cukr</div> <!-- Ingredients for chocolate cake -->
                    </li>
                    <li class="menu-item">
                        Cheesecake - <span class="price">110 Kč</span> <!-- Cheesecake price -->
                        <div class="ingredients">Smetanový sýr, sušenky, máslo, cukr, vejce</div> <!-- Ingredients for cheesecake -->
                    </li>
                </ul>
            </div>
        </section>
        <section id="gallery">
            <h2>Galerie</h2> <!-- Gallery section heading -->
            <div class="gallery">
                <!-- Images in the gallery -->
                <img src="images/soup.jpg" alt="Polévka" /> <!-- Soup image -->
                <img src="images/salad.jpg" alt="Salát" /> <!-- Salad image -->
                <img src="images/apple_pie.jpg" alt="Štrúdl" /> <!-- Apple pie image -->
                <img src="images/vegetables.jpg" alt="Zelenina" /> <!-- Vegetables image -->
            </div>
        </section>
        <section id="reviews" class="reviews">
            <h2>Recenze</h2> <!-- Reviews section heading -->
            <div id="reviews-list">
                <?php
                // Connecting to the database
                include("conn.php");

                // Processing the form if it was submitted
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Retrieve data from the form and escape it to prevent SQL injection
                    $name = mysqli_real_escape_string($conn, $_POST['name']);
                    $review = mysqli_real_escape_string($conn, $_POST['review']);
                    $created_at = date('Y-m-d H:i:s'); // Current timestamp

                    // Prepare the SQL query using prepared statements
                    $sql = "INSERT INTO reviews (name, review, created_at) VALUES (?, ?, ?)";
                    $stmt = mysqli_prepare($conn, $sql);

                    // Bind parameters
                    mysqli_stmt_bind_param($stmt, "sss", $name, $review, $created_at);

                    // Execute the query
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<p class='success-message'>Recenze byla úspěšně přidána.</p>";
                    } else {
                        echo "<p>Chyba při přidávání recenze: " . mysqli_stmt_error($stmt) . "</p>";
                    }

                    // Close the prepared statement
                    mysqli_stmt_close($stmt);
                }

                // Fetch existing reviews
                $sql_select = "SELECT * FROM reviews ORDER BY created_at DESC";
                $result = mysqli_query($conn, $sql_select);

                if (mysqli_num_rows($result) > 0) {
                    echo "<div id='reviews-list'>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='review-item'>";
                        echo "<strong>" . htmlspecialchars($row['name']) . ":</strong>";
                        echo "<p>" . htmlspecialchars($row['review']) . "</p>";
                        echo "</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<p>Zatím nejsou žádné recenze k dispozici.</p>";
                }

                mysqli_free_result($result);
                mysqli_close($conn);
                ?>
            </div>
            <form class="review-form" id="review-form" method="post">
                <h3>Napište recenzi</h3> <!-- Form to submit a review -->
                <label for="name">Vaše jméno:</label>
                <input type="text" id="name" name="name" placeholder="Vaše jméno" required>
                <label for="review">Vaše recenze:</label>
                <textarea id="review" name="review" placeholder="Vaše recenze" required></textarea>
                <button type="submit" name="submit">Odeslat recenzi</button>
            </form>
        </section>
        <section id="contact" class="contact">
            <h2>Kontakt</h2> <!-- Contact section heading -->
            <p><strong>Email:</strong> <a href="mailto:info@bistroutasty.cz">info@bistroutasty.cz</a></p> <!-- Contact email -->
            <p><strong>Telefon:</strong> <a href="tel:+420123456789">+420 123 456 789</a></p> <!-- Contact phone number -->
            <p><strong>Adresa:</strong> Ulice 123, Město, PSČ 12345</p> <!-- Address -->
            <!-- Adding a map -->
            <div class="map">
                <h3>Naše lokalita</h3>
                <a href="https://mapy.cz/zakladni?source=base&id=2087206&x=14.4251899&y=50.0819155&z=17" target="_blank">
                    <img src="images/map.jpg" alt="Mapa naší lokace" style="width: 100%; max-width: 600px;">
                </a>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Bistro U Tasty. Všechna práva vyhrazena.</p> <!-- Footer with copyright information -->
        </div>
    </footer>

    <script>
        // JavaScript for sending review via AJAX
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('review-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                const formData = new FormData(form);
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '<?php echo $_SERVER["PHP_SELF"]; ?>', true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        const response = xhr.responseText;
                        form.reset(); // Reset the form after submission
                        const successMessage = document.createElement('p');
                        successMessage.classList.add('success-message');
                        successMessage.textContent = 'Recenze byla úspěšně odeslána.';
                        document.querySelector('.reviews').insertBefore(successMessage, document.getElementById('reviews-list'));
                        loadReviews(); // Load new reviews
                    }
                };

                xhr.send(formData);
            });

            // Function to load and display new reviews
            function loadReviews() {
                const xhr = new XMLHttpRequest();
                xhr.open('GET', 'fetch_reviews.php', true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        const reviewsList = document.getElementById('reviews-list');
                        reviewsList.innerHTML = xhr.responseText;
                    }
                };
                xhr.send();
            }
        });
    </script>
</body>
</html>
