<?php

include __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dischi</title>
    <!-- Bootrap v5.1 -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <!-- Bootstrap Js Bundle -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>


    <header class="">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <div class="logo col">
                    <img height="40px" width="40px" src="https://cantabrialabsdifacooper.it/wp-content/uploads/2021/03/png-clipart-spotify-logo-spotify-computer-icons-podcast-music-apps-miscellaneous-angle-1-e1614848134495.png" alt="" />
                </div>
                <div class="col">
                    <div class="row ">
                        <div class="col my-3">
                            <label for="genre" class="form-label text-white">Select Music Genre:</label>
                            <select class="form-control" name="genre" id="genre" v-model="selectedGenre" @click="selectGenre" placeholder="Select a Genre">
                                <option disabled>Select Genre</option>
                                <option>All</option>
                                <option>Pop</option>
                                <option>Jazz</option>
                                <option>Metal</option>
                                <option>Rock</option>
                            </select>
                        </div>

                        <div class="col my-3">
                            <label for="genre" class="form-label text-white">Select Artist:</label>
                            <select class="form-control" name="genre" id="genre" v-model="selectedArtist" @click="selectArtist">
                                <option disabled>Select Artist</option>
                                <option>All</option>
                                <option>Bon Jovi</option>
                                <option>Queen</option>
                                <option>Sting</option>
                                <option>Steve Gadd Band</option>
                                <option>Iron Maiden</option>
                                <option>Metallica</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container pt-3">
            <div class="
          row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5
          align-items-center
            ">



                <?php foreach ($music as $album) { ?>

                    <div class="col text-center p-4">
                        <div class="card_album p-3">
                            <div class="img_album">
                                <img src="<?= $album['poster']; ?>" :alt="album.title" />

                            </div>
                            <h4 class="py-3"><?= $album['title']; ?></h4>
                            <div class="info_album">
                                <div class="author">
                                    <?= $album['author']; ?>
                                </div>
                                <div class="year">
                                    <?= $album['year']; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>

        
    </main>












</body>

</html>