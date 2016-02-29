<?php 

$errors = array();
$missing = array();
$errMsg = "";
$errPtrn = "";

    if (isset($_POST['send'])) {
        $expected = array('name', 'dobyear', 'dobmonth','dobday','address', 'nationality', 'email', 'password', 'confirmation', 'avatar', 'terms');
        $required = array('name', 'dobyear', 'dobmonth','dobday', 'address', 'nationality', 'email', 'password', 'confirmation', 'terms');
        
        include('inc/multiple-validation.php');
        include('inc/avatar-upload.php');
        require('inc/preprocess.php');

        if ($errors == null && $missing == null) {
            header("Location: validationCheck.php?status=thanks");
            exit;
        }
    }
    
?><?php
$pageTitle = "Registration | Leaf4Life";
include('inc/header.php'); 
?>

	<section class="page">

            <h1>Registration form</h1>

                <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                    <p>Thanks for registering with us!</p>
                <?php } else { ?>

                <p>Before filling registration form please read the policies and instructions carefully.</p>
                <?php if ($_POST && $suspect) { ?>
                <p class="warning">Sorry, you can not be registered. </p>
                <?php } ?>
                <div class="centered"><img class="avatar" src="img/avatar.png"></div>
                <form method="post" action="validationCheck.php" id="formRegistration" enctype="multipart/form-data">

                    <table>
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name" placeholder="Please enter your name" required aria-required="true"
                                <?php
                                if ($errors || $missing) {
                                    echo 'value="' . htmlentities($name, ENT_COMPAT, 'utf-8') . '"';
                                }
                                ?>
                                >
                                <?php if ($missing && in_array('name', $missing)) { ?>
                                <span class="warning">Please enter your name.</span>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="dobyear">Birthday</label>
                            </th>
                            <td>
                                <select name="dobday" id="dobday" required aria-required="true">
                                    <?php if ($_POST['dobday']) { echo '<option>', $_POST['dobday'], '</option>'; }?>
                                    <?php for ($x = 1; $x < 32; $x++) {?>
                                    <option><?php echo $x; ?></option>
                                    <?php } ?>
                                </select>
                                <select name="dobmonth" id="dobmonth" required aria-required="true">
                                    <?php
                                     $month = array(1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                                     if ($_POST['dobmonth']) {
                                        printf('<option value="%02d">%s</option>', $_POST['dobmonth'], $month[(int) $_POST['dobmonth']]);
                                     }
                                     for ($x = 1; $x <= 12; $x++) {
                                        printf('<option value="%02d">%s</option>', $x, $month[$x]);
                                        echo PHP_EOL; 
                                    } ?>
                                </select>
                                <select name="dobyear" id="dobyear" required aria-required="true">
                                    <?php if ($_POST['dobyear']) { echo '<option>', $_POST['dobyear'], '</option>'; }?>
                                    <?php $year = date ('Y'); ?>
                                    <?php for ($x = $year; $x > ($year - 100); $x--) {?>
                                    <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                    <?php } ?>
                                </select>
                                <?php if ($errMsg != "") { echo $errMsg; } ?> 
                                <span id="errAge" class="errorMsg"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="address">Address</label>
                            </th>
                            <td>
                                <input type="text" name="address" id="address" required placeholder="Please enter your address" aria-required="true"
                                <?php
                                if ($errors || $missing) {
                                    echo 'value="' . htmlentities($address, ENT_COMPAT, 'utf-8') . '"';
                                }
                                ?>
                                >
                                <?php if ($missing && in_array('address', $missing)) { ?>
                                <span class="warning">Please enter your address.</span>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="nationality">Nationality</label>
                            </th>
                            <td>
                                <?php include('inc/nationality.html'); ?><br><br>
                                <?php if ($missing && in_array('nationality', $missing)) { ?>
                                <span class="warning">Please select a nationality.</span>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="email" name="email" id="email" multiple id="email" required placeholder="Please enter your email" aria-required="true"
                                <?php
                                if ($errors || $missing) {
                                    echo 'value="' . htmlentities($email, ENT_COMPAT, 'utf-8') . '"';
                                }
                                ?>
                                >
                                <?php if ($missing && in_array('email', $missing)) { ?>
                                <span class="warning">Please enter a valid email address.</span>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="password">Password</label>
                            </th>
                            <td>
                                <input type="password" name="password" id="password" required placeholder="Please enter your password" aria-required="true"
                                <?php
                                if ($errors || $missing) {
                                    echo 'value="' . htmlentities($password, ENT_COMPAT, 'utf-8') . '"';
                                }
                                ?>
                                >
                                <meter max="4" id="password-strength-meter"></meter>
                                <span class="pass-warning" id="password-strength-text"></span>
                                <script type="text/javascript" src="js/password-strength.js"></script>
                                <?php echo $errPtrn; ?>
                                <?php if ($missing && in_array('password', $missing)) { ?>
                                    <br><span class="warning">Please enter your password.</span>                                
                                <?php } ?>
                                <span id="errPW" class="errorMsg"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="confirmation">Confirm password</label>
                            </th>
                            <td>
                                <input type="password" name="confirmation" id="confirmation" required placeholder="Please retype your password" aria-required="true">
                                <?php if ($missing && in_array('confirmation', $missing)) { ?>
                                <span class="warning">Please make sure you enter your password correctly in both password fields.</span>
                                <?php } ?>
                                <span id="errPWcf" class="errorMsg"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="avatar">Avatar</label>
                            </th>
                            <td>
                                <img src="img/avatars/default-avatar.png">                                
                                <input type="file" name="avatar" id="avatar">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="checkbox" name="terms" id="terms" value="Agreed" required aria-required="true" aria-labelledby="terms Agreed"
                                <?php 
                                if ($_POST && $terms) {
                                    echo "checked";
                                }

                                ?>
                                >&nbsp;I accept the terms and conditions<br>
                                <?php if ($_POST && isset($errors['terms'])) {
                                    ?>
                                    <span class="warning">Please signify acceptance.</span>
                               <?php }   ?>            
                            </td>
                        </tr>                    
                    </table>
                    <input type="submit" value="Submit" name="send">

                </form>
            <?php } ?>
	</section>

    <aside class="top-sidebar">
        <article>
            <h2>Terms and conditions</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
    </aside>

    <aside class="middle-sidebar">
        <article>
            <h2>Privacy</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </article>
    </aside>

    <aside class="bottom-sidebar">
        <article>
            <h2>Policy &amp; Safety</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </article>
    </aside>

<?php include('inc/footer.php') ?>
