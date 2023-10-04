<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>W3CMS</title>

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Template CSS Style -->
  <link rel="stylesheet" href="./assets/css/base.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="./assets/icons-1.11.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/fontawesome-free-6.4.0-web/css/all.min.css">

</head>
<?php require_once './connect.php'; ?>

<body>
  <div class="container">
    <?php include './layout/navigation.php'; ?>

    <!-- - Start: Main content -->
    <div class="main">
      <div class="header">
        <div class="header__title">
          <a href="#"><i class="bi bi-list"></i></a>
          <span>Add User</span>
        </div>
        <div class="header__search">
          <div class="header__search-wrapped">
            <i class="fa-solid fa-search"></i>
            <input class="header__search-input" type="text" name="" id="" placeholder="Search here...">
          </div>
        </div>
      </div>
      <div class="main__content">
        <div class="content__top">
          <span class="content__title">New User Form</span>
        </div>
        <div class="content__body" style="padding-inline: 5rem;">
          <?php
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "select * from w3cms_users where id ='$id'";
            $users = mysqli_query($strConnection, $query);
            $user = mysqli_fetch_array($users);
          }
          ?>
          <form action="index.php" method="post" class="myForm">
            <div class="form__header">
              <div class="form__wrapped">
                <img class="form__avatar" src="<?= $user['image'] ?>" alt="#">
                <div class="form__check">
                  <?php
                  if ($user['stt']) {
                    echo '<input type="checkbox" checked name="" id="">';
                  } else {
                    echo '<input type="checkbox" name="" id="">';
                  }
                  ?>
                  <span>is active</span>
                </div>
              </div>
              <div class="form__wrapped">
                <div class="form__wrapped form__wrapped--row">
                  <div class="form__group">
                    <label for="firstName" class="form__label">First Name</label>
                    <input type="text" name="firstName" id="firstName" class="form__control" placeholder="First Name">
                  </div>
                  <div class="form__group">
                    <label for="lastName" class="form__label">Last Name</label>
                    <input type="text" name="lastName" id="lastName" class="form__control" placeholder="Last Name">
                  </div>
                </div>
                <div class="form__group">
                  <label for="username" class="form__label">Username<span class="mandatory">*</span></label>
                  <input type="text" name="username" id="username" class="form__control" placeholder="Username" value="<?= $user['fullname'] ?>">
                </div>
                <div class="form__group">
                  <label for="email" class="form__label">Email<span class="mandatory">*</span></label>
                  <input type="email" name="email" id="email" class="form__control" placeholder="Email" value="<?= $user['email'] ?>">
                </div>
                <div class="form__group">
                  <label for="phone" class="form__label">Phone Number<span class="mandatory">*</span></label>
                  <input type="text" name="phone" id="phone" class="form__control" placeholder="Phone Number" value="<?= $user['mobile'] ?>">
                </div>
              </div>
            </div>
            <div class="form__body">
              <div class="form__wrapped form__wrapped--row">
                <div class="form__group">
                  <label for="role" class="form__label">Role</label>
                  <select class="form__control" name="roles" id="roles">
                    <?php
                    $user['job'] == 'Manager' ? $job = 'role2' : $job = 'role3';
                    if ($user['job']  == 'Manager') {
                      echo '<option value="role1">Select the Role</option>';
                      echo '<option selected value="role2">Manager</option>';
                      echo '<option value="role3">Customer</option>';
                    } else if ($user['job'] == 'Customer') {
                      echo '<option value="role1">Select the Role</option>';
                      echo '<option value="role2">Manager</option>';
                      echo '<option selected value="role3">Customer</option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="form__group">
                  <label for="gender" class="form__label">Gender<span class="mandatory">*</span></label>
                  <select class="form__control" name="genders" id="genders">
                    <?php
                    if ($user['gender']) {
                      echo '<option value="gender1">Choose gender</option>';
                      echo '<option selected value="gender2">Male</option>';
                      echo '<option value="gender3">Female</option>';
                    } else {
                      echo '<option value="gender1">Choose gender</option>';
                      echo '<option value="gender2">Male</option>';
                      echo '<option selected value="gender3">Female</option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="form__group">
                  <label for="dob" class="form__label">Date of Birth<span class="mandatory">*</span></label>
                  <input class="form__control" type="date" name="dob" id="dob" placeholder="dob" value="<?= $user['dob'] ?>">
                </div>
              </div>
              <div class="form__wrapped form__wrapped--row">
                <div class="form__group">
                  <label for="fb" class="form__label">Facebook URL</label>
                  <input class="form__control" type="text" name="fb" id="fb">
                </div>
                <div class="form__group">
                  <label for="twitter" class="form__label">Twitter URL</label>
                  <input class="form__control" type="text" name="twitter" id="twitter">
                </div>
                <div class="form__group">
                  <label for="linkedin" class="form__label">Linkedin URL</label>
                  <input class="form__control" type="text" name="linkedin" id="linkedin">
                </div>
              </div>
              <div class="form__group">
                <label class="form__label" for="about">About</label>
                <textarea class="form__control" name="about" id="" cols="30" rows="10" placeholder="Write About YourSelf..."></textarea>
              </div>
              <div class="form__wrapped form__wrapped--row">
                <div class="form__group">
                  <label for="password" class="form__label">Password</label>
                  <input class="form__control" type="text" name="password" id="password" placeholder="Password">
                </div>
                <div class="form__group">
                  <label for="confirmPassword" class="form__label">Confirm Password</label>
                  <input class="form__control" type="text" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
                </div>
              </div>
            </div>
            <div class="form__footer">
              <button class="btn btn--save">Save</button>
              <button class="btn btn--cancel">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- - End: Main content -->

    <?php include './layout/sidebar.php'; ?>
    <?php mysqli_close($strConnection); ?>
  </div>
  <script src="./assets/js/validate.js"></script>
  <script src="./assets/js/app.js"></script>
</body>


</html>