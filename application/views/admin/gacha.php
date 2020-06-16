<?php
foreach ($user as $a) {
    $arr[] = $a['gambar'];
}


// "[
//     {
//         "id":"2",
//         "role_id":"2",
//         "name":"eca",
//         "email":"eca@gmail.com",
//         "password":"$2y$10$Hvo1ewB3yG1clmsCBApf1OYUUH0sh6OZxWViUZ.cdmeTGZNlDiL6u",
//         "gambar":"default.jpg",
//         "is_active":"1"
//     },

//     {
//         "id":"3",
//         "role_id":"1",
//         "name":"Golady",
//         "email":"theprojessa@gmail.com",
//         "password":"$2y$10$KN4fOMR20VA3XMGMaiDqHe2gDEexMls7l54kZh4RgGoK05nAy30S."
//         ,"gambar":"IMG-20200313-WA0011-removebg-preview_(1).jpg",
//         "is_active":"1"
//     }
// ]"
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bootstrap/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="<?php echo base_url('assets/'); ?>css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!--//web-fonts-->
    <title><?php echo $title; ?></title>
    <style>
        @font-face {
            font-family: 'courigette';
            src: url('http://localhost/myTraining/Kelasku/assets/font/BubbleBobble-rg3rx.ttf') format('truetype');
        }

        * {
            font-family: 'courigette';
            font-weight: normal;
        }

        .img-gacha {
            width: 500px;
            height: 500px;
            overflow: hidden;
        }

        .img-gacha img {
            width: 300px;
            height: 300px;
        }

        .container-card {
            background-color: whitesmoke;
            border: 8px solid white;
            border-radius: 100px 100px 0px 0px;
            height: 500px;
            box-shadow: 3px 4px 6px 5px grey;
        }

        .card {
            width: 300px;
            margin-left: 10%;
        }

    </style>
</head>

<body>
    <div class="container-fluid justify-content-center bg-gacha">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col img-gacha">
                <img src="<?php echo base_url('assets/img/') ?>1.jpg" class="rounded mx-auto d-block mt-5 img-thumbnail" width="120px" id="gambar">
                <button id="gacha" type="button" class="btn btn-dark mt-3" style="margin-left:44%">Gacha</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="container-fluid justify-content-center container-card">
        <div class="row">
            <div class="col text-center">
                <div class="row card-template">

                </div>
            </div>
        </div>
    </div>

    </footer>
    <!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/'); ?>bootstrap/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src='<?php echo base_url('assets/'); ?>js/jquery-2.2.3.min.js'></script>
    <script type="text/javascript">
        let jArray = <?php echo json_encode($arr); ?>;




        let angkaKelompok = [1, 2, 3, 4, 5, 6, 7]
        $('#gacha').on('click', function() {


            templateCard(angkaKelompok[0])

            if (jArray.length === 0) {
                alert('sudah tidak ada item lagi');
                $('#gacha').attr('style', 'visibility:hidden;');
                return
            }



            const waktuMulai = new Date().getTime();
            setInterval(function() {
                if (new Date().getTime() - waktuMulai > 18000) {
                    clearInterval

                    return


                }else{
                    console.log('ok')
                }

                gacha()


            }, 3000)


            setTimeout(function() {
                angkaKelompok.splice(0, 1)
            }, 18000);
        })



        function gacha() {

            putar()

            setTimeout(function() {
                const imgComputer = document.querySelector('#gambar');
                let hasil = Math.floor(Math.random() * jArray.length)
                const randomGambar = jArray[hasil];
                imgComputer.setAttribute('src', '<?php echo base_url('assets/img/') ?>' + randomGambar);

                $('.list-group-flush-' + angkaKelompok[0]).append(`
                    <li class="list-group-item">` + randomGambar.replace('.JPG', '') + `</li>`)
                jArray.splice(hasil, 1);

            }, 1000);

            console.log(jArray)

        }

        function templateCard(angkaKelompok) {

            let classCard = angkaKelompok

            $('.card-template').append(`
                    <div class="col-md-4">
                        <div class="card mt-4 card-kel" style="">
                            <div class="card-header">
                             ` + angkaKelompok + `
                            </div>    
                             <ul class="list-group list-group-flush-` + angkaKelompok + `">
                            
                            </ul>
                        </div>
                    </div>
                `)


        }


        function putar() {
            const imgComputer = document.querySelector('#gambar');
            let i = 0;
            const waktuMulai = new Date().getTime();

            setInterval(function() {
                if (new Date().getTime() - waktuMulai > 1000) {
                    clearInterval;
                    return
                }
                imgComputer.setAttribute('src', '<?php echo base_url('assets/img/') ?>' + jArray[i++]);
                if (i == jArray.length) i = 0;
            }, 100);


        }
    </script>
</body>

</html>