<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/user/stylesheet_login.css')}}">
    <link rel="stylesheet" href="{{asset('css/eye.css')}}">


</head>

<body>


    <section class="Form my-1 mx-5">
        <div class="container">
            <div class="row content g-0">
                <div class="col-lg-5">

                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <div class="mb-3">
                        <img src="{{asset('img/logo.jpg')}}" alt="" width="70%">
                    </div>
                    <h3 class="login">Register User</h3>
                    <form method="POST" action="{{route('admin.user.store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-lg-7">
                                <!-- Username -->
                                <input type="text" class="form-control my-3 p-3" name="username" placeholder="Username"
                                    required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <!-- Password -->
                                <input id="password-field" type="password" class="form-control my-3 p-3" name="password"
                                    placeholder="Password" value="" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle"
                                    onclick="myFunction()"></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <!-- Password -->
                                <input id="password-field" type="password" class="form-control my-3 p-3"
                                    name="password_confirm" placeholder="Return" value="" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle"
                                    onclick="myFunction()"></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <?php
                        $arr_role=array('A'=>'Admin','U'=>'User');
                    ?>
                                <select type="text" name="role" class="form-control my-2 p-2" class="form-control form"
                                    placeholder="ROLE" required>
                                    <?php foreach ($arr_role as $key_role => $val_role):?>
                                    <option value="<?=$key_role?>"><?=$val_role?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label mb-2" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <!-- button -->
                                    <button type="submit" name="simpan" class="btn1 mb-4">Tambah</button>
                                </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="js/hide.js"></script>
    <script src="{{asset('js/hide.js')}}"></script>
</body>

</html>