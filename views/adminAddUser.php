<<<<<<< HEAD
<?php include('./components/header.php') ?>
<?php include('./components/navBar.php') ?>
=======

<?php include('../../views/components/header.php') ?>
<?php include('../../views/components/navBar.php') ?>
>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                <span class="login100-form-title-1">
                    Add User
                </span>
            </div>
<<<<<<< HEAD

            <form method="post" class="login100-form validate-form">
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Name</span>
                    <input class="input100" type="text" name="username" placeholder="Enter name">
                    <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Enter email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-26" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Enter Password">
=======
             <?php $nameErr=$emailErr=$passwordErr=$cpasswordErr=$roomNoErr=$extErr=$pictureErr="";
             ?>
            <form method="post" class="login100-form validate-form">
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Name</span>
                    <input class="input100" type="text" name="name" placeholder="Enter name" required>
                    <span >* <?php echo $nameErr;?></span>
                    <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required" >
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Enter email" required>
                    <span >* <?php echo $emailErr;?></span>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-26" data-validate="Password is required" >
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Enter Password" required>
                    <span >* <?php echo $passwordErr;?></span>
>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-26" data-validate="Confirm Password">
                    <span class="label-input100">Confirm Password</span>
<<<<<<< HEAD
                    <input class="input100" type="password" name="cpassword" placeholder="Confirm Password">
=======
                    <input class="input100" type="password" name="cpassword" placeholder="Confirm Password" required>
                    <span >* <?php echo $cpasswordErr;?></span>
>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9
                    <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input m-b-26" data-validate="Room No">
                    <span class="label-input100">ٌRoom No</span>
<<<<<<< HEAD
                    <input class="input100" type="text" name="room" placeholder="Room No">
=======
                    <input class="input100" type="text" name="roomNo" placeholder="Room No" required>
                    <span >* <?php echo $roomNoErr;?></span>
>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9
                    <span class="focus-input100"></span>
                </div>
                
                
                <div class="wrap-input100 validate-input m-b-26" data-validate="Ext">
                    <span class="label-input100">ٌExt</span>
<<<<<<< HEAD
                    <input class="input100" type="text" name="ext" placeholder="Ext">
=======
                    <input class="input100" type="text" name="ext" placeholder="Ext" required>
                    <span >* <?php echo $extErr;?></span>
>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9
                    <span class="focus-input100"></span>
                </div>
                
            


                    <div class="wrap-input100 validate-input m-b-26" data-validate="Profile Picture">
                    <span class="label-input100">Profile Picture</span>
<<<<<<< HEAD
                    <input  class="input100" type="file" name="browse" id="fileToUpload">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Save
                    </button>

                    <button class="login100-form-btn">
                        Reset
                    </button>
                </div>
=======
                    <input  class="input100" type="file" name="profilePicture" id="profilePicture" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="mx-auto text-center">
	<button type="submit" class="btn btn-primary" name="submit">Save</button>
  <button type="submit" class="btn btn-light">Reset</button>
	</div>
>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9
            </form>
        </div>
    </div>
</div>

<<<<<<< HEAD
  <?php include('./components/footer.php') ?>
=======
<?php include('../../views/components/footer.php') ?>
>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9
