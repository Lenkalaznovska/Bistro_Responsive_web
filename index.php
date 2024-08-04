<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro U Tasty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon/food.png" type="image/png">
</head>
<body>
    <!-- Header section with the main title and navigation menu -->
    <header>
        <h1>Bistro U Tasty</h1>
        <nav>
            <ul>
                <li><a href="#menu">Nabídka</a></li>
                <li><a href="#gallery">Galerie</a></li>
                <li><a href="#reviews">Recenze</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Welcome section with a brief introduction -->
        <section id="welcome">
            <h2>Vítejte v našem bistru!</h2>
            <p>Jsme malé, rodinné bistro specializující se na domácí kuchyni a čerstvé suroviny. Přijďte si pochutnat na našich lahodných pokrmech a užijte si příjemnou atmosféru.</p>
        </section>
        <!-- Specialties section highlighting our focus -->
        <section id="specialties">
            <h2>Naše specializace</h2>
            <p>V našem bistru se zaměřujeme na:</p>
            <ul>
                <li>Čerstvé saláty z lokálních surovin</li>
                <li>Domácí polévky</li>
                <li>Pečené speciality a grilovaná jídla</li>
                <li>Vegetariánské a veganské pokrmy</li>
                <li>Domácí dezerty a zákusky</li>
            </ul>
        </section>
        <!-- Menu section with detailed offerings -->
        <section id="menu" class="menu-section">
            <h2>Nabídka</h2>
            <div>
                <h3>Čerstvé saláty</h3>
                <ul>
                    <li class="menu-item">
                        Řecký salát - <span class="price">150 Kč</span>
                        <div class="ingredients">Rajčata, okurky, olivy, feta sýr, červená cibule, olivový olej</div>
                    </li>
                    <li class="menu-item">
                        Caesar salát - <span class="price">170 Kč</span>
                        <div class="ingredients">Římský salát, kuřecí prsa, parmazán, krutony, Caesar dresing</div>
                    </li>
                    <li class="menu-item">
                        Salát s avokádem a quinoou - <span class="price">180 Kč</span>
                        <div class="ingredients">Avokádo, quinoa, cherry rajčata, okurky, špenát, citronová zálivka</div>
                    </li>
                </ul>
            </div>
            <div>
                <h3>Domácí polévky</h3>
                <ul>
                    <li class="menu-item">
                        Dýňová polévka - <span class="price">90 Kč</span>
                        <div class="ingredients">Dýně, mrkev, cibule, kokosové mléko, zázvor</div>
                    </li>
                    <li class="menu-item">
                        Čočková polévka - <span class="price">80 Kč</span>
                        <div class="ingredients">Čočka, mrkev, celer, cibule, česnek</div>
                    </li>
                </ul>
            </div>
            <div>
                <h3>Pečené speciality a grilovaná jídla</h3>
                <ul>
                    <li class="menu-item">
                        Grilovaný losos - <span class="price">250 Kč</span>
                        <div class="ingredients">Losos, citron, bylinky, olivový olej</div>
                    </li>
                    <li class="menu-item">
                        Pečená kachna - <span class="price">300 Kč</span>
                        <div class="ingredients">Kachna, jablka, cibule, červené víno</div>
                    </li>
                    <li class="menu-item">
                        Grilovaná zelenina - <span class="price">150 Kč</span>
                        <div class="ingredients">Papriky, cuketa, lilek, olivový olej, bylinky</div>
                    </li>
                </ul>
            </div>
            <div>
                <h3>Vegetariánské a veganské pokrmy</h3>
                <ul>
                    <li class="menu-item">
                        Vegetariánská lasagne - <span class="price">190 Kč</span>
                        <div class="ingredients">Těstoviny, ricotta, špenát, rajčatová omáčka, parmazán</div>
                    </li>
                    <li class="menu-item">
                        Vegan burger - <span class="price">220 Kč</span>
                        <div class="ingredients">Burger z červené řepy, avokádo, salát, rajče, veganská majonéza</div>
                    </li>
                    <li class="menu-item">
                        Cizrnový falafel - <span class="price">160 Kč</span>
                        <div class="ingredients">Cizrna, petržel, česnek, koriandr, olivový olej</div>
                    </li>
                </ul>
            </div>
            <div>
                <h3>Domácí dezerty a zákusky</h3>
                <ul>
                    <li class="menu-item">
                        Jablečný štrúdl - <span class="price">100 Kč</span>
                        <div class="ingredients">Jablka, skořice, cukr, máslo, těsto</div>
                    </li>
                    <li class="menu-item">
                        Čokoládový dort - <span class="price">120 Kč</span>
                        <div class="ingredients">Čokoláda, mouka, vejce, máslo, cukr</div>
                    </li>
                    <li class="menu-item">
                        Cheesecake - <span class="price">110 Kč</span>
                        <div class="ingredients">Smetanový sýr, sušenky, máslo, cukr, vejce</div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Gallery section showcasing images of dishes -->
        <section id="gallery">
            <h2>Galerie</h2>
            <div class="gallery">
                <img src="images/soup.jpg" alt="Polévka">
                <img src="images/salad.jpg" alt="Salát">
                <img src="images/apple_pie.jpg" alt="Štrúdl">
                <img src="images/vegetables.jpg" alt="Zelenina">
            </div>
        </section>
        <!-- Reviews section with functionality to submit and display reviews -->
        <section id="reviews" class="reviews">
            <h2>Recenze</h2>
            <div id="reviews-list">
                <?php
                // Connecting to the database
                include("conn.php");

                // Processing form submission if it has been sent
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Getting data from the form and escaping against SQL injection
                    $name = mysqli_real_escape_string($conn, $_POST['name']);
                    $review = mysqli_real_escape_string($conn, $_POST['review']);
                    $created_at = date('Y-m-d H:i:s'); // Current timestamp

                    // Preparing the query using prepared statements
                    $sql = "INSERT INTO reviews (name, review, created_at) VALUES (?, ?, ?)";
                    $stmt = mysqli_prepare($conn, $sql);

                    // Binding parameters
                    mysqli_stmt_bind_param($stmt, "sss", $name, $review, $created_at);

                    // Executing the query
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<p class='success-message'>Recenze byla úspěšně přidána.</p>";
                    } else {
                        echo "<p>Chyba při přidávání recenze: " . mysqli_stmt_error($stmt) . "</p>";
                    }

                    // Closing the prepared statement
                    mysqli_stmt_close($stmt);
                }

                // Fetching existing reviews
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
            <!-- Review submission form -->
            <form class="review-form" id="review-form" method="post">
                <h3>Napište recenzi</h3>
                <label for="name">Vaše jméno:</label>
                <input type="text" id="name" name="name" placeholder="Vaše jméno" required>
                <label for="review">Vaše recenze:</label>
                <textarea id="review" name="review" placeholder="Vaše recenze" required></textarea>
                <button type="submit" name="submit">Odeslat recenzi</button>
            </form>
        </section>
        <!-- Contact section with contact details and a map -->
        <section id="contact" class="contact">
            <h2>Kontakt</h2>
            <p><strong>Email:</strong> <a href="mailto:info@bistroutasty.cz">info@bistroutasty.cz</a></p>
            <p><strong>Telefon:</strong> <a href="tel:+420123456789">+420 123 456 789</a></p>
            <p><strong>Adresa:</strong> Ulice 123, Město, PSČ 12345</p>
            <!-- Adding a map -->
            <div class="map">
                <h3>Naše lokalita</h3>
                <a href="https://mapy.cz" target="_blank">
                    <img src="images/map.jpg" alt="Mapa naší lokace" style="width: 100%; max-width: 600px;">
                </a>
            </div>
        </section>
    </main>
    <!-- Footer with copyright information -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Bistro U Tasty. Všechna práva vyhrazena.</p>
        </div>
    </footer>

    <!-- JavaScript for handling review submission via AJAX -->
    <script>
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
                        successMessage.textContent = 'Recenze byla úspěšně přidána.';
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
