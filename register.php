<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style/navbar.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>

<body>
<nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo"><strong>GALLERY PHOTO</strong></div>
    <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="project.php">Projects</a></li>

        <?php if (isset($_SESSION['nama_lengkap'])) {
            session_destroy();
            echo '<li><a href="index.php">Logout</a></li>';
        } else {
            echo '<li><a href="login.php">Login</a></li>';
        } ?>
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
</nav>
<section class="h-screen">
    <div class="px-6 h-full text-gray-800">
        <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
            <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                     class="w-full" alt="Sample image"/>
            </div>
            <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                <h1 class="text-3xl mb-8 text-blue-600 font-bold">Register</h1>

                <form>

                    <div class="mb-6">
                        <input id="nama_lengkap" type="text"
                               class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                               id="exampleFormControlInput2"
                               placeholder="Nama Lengkap"/>
                    </div>

                    <!-- Email input -->
                    <div class="mb-6">
                        <input id="username" type="text"
                               class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                               id="exampleFormControlInput2"
                               placeholder="Username"/>
                    </div>

                    <!-- Password input -->
                    <div class="mb-6">
                        <input id="password" type="password"
                               class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                               id="exampleFormControlInput2" placeholder="Password"/>
                    </div>

                    <div class="flex justify-between items-center mb-6">
                        <div class="form-group form-check">
                            <input type="checkbox"
                                   class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                   id="exampleCheck2"/>
                            <label class="form-check-label inline-block text-gray-800" for="exampleCheck2">Remember
                                me</label>
                        </div>
                        <a href="#!" class="text-gray-800">Forgot password?</a>
                    </div>

                    <div class="text-center lg:text-left">
                        <button id="register_button" type="button"
                                class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Register
                        </button>
                        <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                            Sudah punya akun ?
                            <a href="login.php"
                               class="text-blue-600 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function () {

        $("#register_button").click(function () {

            var nama_lengkap = $("#nama_lengkap").val();
            var username = $("#username").val();
            var password = $("#password").val();

            if (nama_lengkap.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Nama Lengkap Wajib Diisi !'
                });

            } else if (username.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Username Wajib Diisi !'
                });

            } else if (password.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Password Wajib Diisi !'
                });

            } else {

                //ajax
                $.ajax({

                    url: "save_register.php",
                    type: "POST",
                    data: {
                        "nama_lengkap": nama_lengkap,
                        "username": username,
                        "password": password
                    },

                    success: function (response) {
                        console.log(response);
                        if (response == "success") {

                            Swal.fire({
                                type: 'success',
                                title: 'Register Berhasil!',
                                timer: 3000,
                                text: 'silahkan login!'
                            }).then(function () {
                                window.location.href = "login.php";
                            });
                            ;

                            $("#nama_lengkap").val('');
                            $("#username").val('');
                            $("#password").val('');

                        } else {

                            Swal.fire({
                                type: 'error',
                                title: 'Register Gagal!',

                                text: 'silahkan coba lagi!'
                            });

                        }

                        console.log(response);

                    },

                    error: function (response) {
                        console.log(response);
                        Swal.fire({
                            type: 'error',
                            title: 'Opps!',
                            text: 'server error!'
                        });
                    }

                })

            }

        });

    });
</script>

</html>