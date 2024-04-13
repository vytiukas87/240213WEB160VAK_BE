<?php include 'parts/header.php'; ?>
<?php include 'parts/navbar.php'; ?>

        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Knygos</h1>
                        <p class="lead">Visos suvestos knygos</p>
                    </div>
                </div>
            </div>
        </header>

        <?php
            $sql = 'SELECT * FROM `knygos`;';
            $result = $conn->query($sql);
            // print_r($result);
            if ($result->num_rows > 0) {
                print_r($result->fetch_assoc());

            }
        ?>

        <div class="content pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p><a href="nauja.html" class="btn btn-success">Nauja knyga</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pavadinimas</th>
                                    <th scope="col">Autorius</th>
                                    <!-- <th scope="col">Žanras</th> -->
                                    <th scope="col">Puslapių sk.</th>
                                    <th scope="col">Kaina, €</th>
                                    <th scope="col">Veiksmai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <!-- <td>Stulpelis</td> -->
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <td>
                                        <a href="perziureti.html" class="btn btn-primary">Žiūrėti</a>
                                        <a href="atnaujinti.html" class="btn btn-warning">Atnaujinti</a>
                                        <a href="salinti.html" class="btn btn-danger">Šalinti</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <!-- <td>Stulpelis</td> -->
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <td>
                                        <a href="perziureti.html" class="btn btn-primary">Žiūrėti</a>
                                        <a href="atnaujinti.html" class="btn btn-warning">Atnaujinti</a>
                                        <a href="salinti.html" class="btn btn-danger">Šalinti</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <!-- <td>Stulpelis</td> -->
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <td>
                                        <a href="perziureti.html" class="btn btn-primary">Žiūrėti</a>
                                        <a href="atnaujinti.html" class="btn btn-warning">Atnaujinti</a>
                                        <a href="salinti.html" class="btn btn-danger">Šalinti</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <!-- <td>Stulpelis</td> -->
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <td>
                                        <a href="perziureti.html" class="btn btn-primary">Žiūrėti</a>
                                        <a href="atnaujinti.html" class="btn btn-warning">Atnaujinti</a>
                                        <a href="salinti.html" class="btn btn-danger">Šalinti</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<?php include 'parts/footer.php'; ?>
