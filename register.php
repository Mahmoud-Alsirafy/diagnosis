<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Smart Diagnosis</title>
  <link rel="icon" href="Group 10.png" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
  <section class="register">
    <div
      class="d-flex justify-content-between align-items-center ms-5 mt-3 me-5">
      <div>
        <img
          src="assets/images/Group 10.png"
          class="img-fluid w-50 logo"
          alt="" />
      </div>
      <div>
        <a href="login.php" class="login">Login</a>
      </div>
    </div>
    <div id="content" class="d-flex justify-content-between">
      <div>
        <img src="assets/images/image (5) 1.png" class="doctor" alt="" />
      </div>
      <div class="me-5">
        <div>
          <h6>Let's protect yourself and those around you by vaccinating</h6>
          <p>Iam Registering as</p>
        </div>
        <!-- form -->
        <form action="dev/register/handel_reg.php" method="POST">
          <?php if (isset($_SESSION["errors"]["Role"])) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_SESSION["errors"]["Role"]; ?>
            </div>
          <?php }
          unset($_SESSION["errors"]["Role"])
          ?>
          <!-- <div class="d-flex gap-5 align-items-center check ">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Role" id="inlineRadio1" value="Doctor">
                <label class="form-check-label" for="inlineRadio1">Doctor</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Role" id="inlineRadio2" value="Patient">
                <label class="form-check-label" for="inlineRadio2">Patient </label>
              </div>
        </div> -->
        <div class=" d-flex justify-content-around">
          <label class="toggle-container d-flex gap-3">
            <input type="radio" id="doctor" name="Role" value="Doctor">
            <div class="toggle-circle"></div><span>Doctor</span>
          </label>
          <label class="toggle-container d-flex gap-3">
            <input type="radio" id="doctor" name="Role" value="Doctor">
            <div class="toggle-circle"></div><span>Doctor</span>
          </label>
        </div>
       

          <div class="d-flex flex-column">

            <label for="name">Full Name</label>
            <?php if (isset($_SESSION["errors"]["Name"])) { ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION["errors"]["Name"]; ?>
              </div>
            <?php }
            unset($_SESSION["errors"]["Name"])
            ?>
            <input type="text" name="Name" placeholder="Full Name" />
          </div>
          <div class="d-flex flex-column">
            <label for="number">Mobile Number</label>
            <?php if (isset($_SESSION["errors"]["Phone"])) { ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION["errors"]["Phone"]; ?>
              </div>
            <?php }
            unset($_SESSION["errors"]["Phone"])
            ?>
            <input type="number" name="Phone" placeholder="+201*********" />
          </div>
          <div class="d-flex flex-column">
            <label for="email">Email</label>
            <?php if (isset($_SESSION["errors"]["Email"])) { ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION["errors"]["Email"]; ?>
              </div>
            <?php }
            unset($_SESSION["errors"]["Email"])
            ?>
            <input type="text" name="Email" placeholder="Enter Email" />
          </div>
          <div class="d-flex flex-column">
            <label for="password">Password</label>
            <?php if (isset($_SESSION["errors"]["Password"])) { ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION["errors"]["Password"]; ?>
              </div>
            <?php }
            unset($_SESSION["errors"]["Password"])
            ?>
            <input type="text" name="Password" placeholder="Enter Password" />
          </div>
          <div class="d-flex flex-column">
            <label for="confirm">Confirm Password</label>
            <?php if (isset($_SESSION["errors"]["Confirm"])) { ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION["errors"]["Confirm"]; ?>
              </div>
            <?php }
            unset($_SESSION["errors"]["Confirm"])
            ?>
            <input
              type="text"
              name="Confirm"
              placeholder="Enter Confirm Password" />
          </div>
          <button type="submit" name="add" class="submit text-center">submit</button>
        </form>
        <!-- end form -->
      </div>
    </div>
  </section>
</body>

</html>