<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
  <link href="_assets/css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="center">
        <table width="960" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="header_bg">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img src="_assets/images/logo.jpg" width="154" height="100" /></td>
                  <td align="right" valign="top" class="topmenu">
                    <ul>
                      <li><a href="home.php">Home</a></li>
                      <li>|</li>
                      <li><a href="about_us.php">About Us</a></li>
                      <li>|</li>
                      <li><a href="our_mission.php">Our Mission</a></li>
                      <li>|</li>
                      <li><a href="contact_us.php">Contact Us</a></li>
                      </li>
                      <li>|</li>
                      <li><a href="webmaster.php">Webmaster</a></li>

                    </ul>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td class="user_bar">&nbsp;</td>
          </tr>
        </table>

        <table width="960" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="width:21px; height:36px;"><img src="_assets/images/shape_1.jpg" width="21" height="36" /></td>
            <td style="background:url(_assets/images/shape_2.jpg); width:154px;">&nbsp;</td>
            <td style="width:42px; height:36px;"><img src="_assets/images/shape_3.jpg" width="42" height="36" /></td>
            <td style="background:url(_assets/images/shape_4.jpg);">&nbsp;</td>
            <td style="width:24px; height:36px;"><img src="_assets/images/shape_5.jpg" width="24" height="36" /></td>
          </tr>
          <tr>
            <td style="background:url(_assets/images/shape_6.jpg);">&nbsp;</td>
            <td valign="top" class="left_nav">
              <ul>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="add_record.php">Add Record</a></li>
                <li><a href="view_record.php">View Record</a></li>
                <li><a href="trashcan.php">Trashcan</a></li>
                <li><a href="search.php">Search</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </td>
            <td style="background:url(_assets/images/shape_7.jpg);">&nbsp;</td>
            <td align="center">

              <form name="index_form" id="index_form" method="post" action="act_login.php" onsubmit="return validateForm()">
                <table width="300" border="0" cellspacing="2" cellpadding="2">
                  <tr class="labels">
                    <td>Email:</td>
                    <td>
                      <input type="email" name="email" id="email" class="textFields" style="outline: none;" />
                      <div id="emailError" style="color: red;"></div> <!-- Error message here -->
                    </td>
                  </tr>
                  <tr class="labels">
                    <td>Password:</td>
                    <td>
                      <input type="password" name="password" id="password" class="textFields" style="outline: none;" />
                      <div id="passwordError" style="color: red;"></div> <!-- Error message here -->
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="right" class="login_link"><a href="register.php">Be a member</a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="right" class="login_link"><a href="forgot_password.php">Forgot Password?</a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="right">
                      <input type="submit" name="button" id="button" value="Login" class="btns" />
                      <input type="reset" name="button2" id="button2" value="Cancel" class="btns" />
                    </td>
                  </tr>
                </table>
              </form>

            </td>
            <td style="background:url(_assets/images/shape_8.jpg);">&nbsp;</td>
          </tr>
          <tr>
            <td><img src="_assets/images/shape_9.jpg" width="21" height="26" /></td>
            <td style="background:url(_assets/images/shape_10.jpg);">&nbsp;</td>
            <td><img src="_assets/images/shape_11.jpg" width="42" height="26" /></td>
            <td style="background:url(_assets/images/shape_12.jpg);">&nbsp;</td>
            <td><img src="_assets/images/shape_13.jpg" width="24" height="26" /></td>
          </tr>
        </table>

        <table width="960" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="footer_bg">&nbsp;</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <script type="text/javascript">
    function validateForm() {
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;

      // Clear previous error messages
      document.getElementById("emailError").innerHTML = "";
      document.getElementById("passwordError").innerHTML = "";

      var isValid = true;

      // Check if email is empty
      if (email == "") {
        document.getElementById("emailError").innerHTML = "Email is required.";
        isValid = false;
      }

      // Check if password is empty
      if (password == "") {
        document.getElementById("passwordError").innerHTML = "Password is required.";
        isValid = false;
      }

      return isValid; // If validation fails, form won't be submitted
    }
  </script>

</body>

</html>