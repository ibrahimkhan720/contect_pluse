<?php
include 'config/guard.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
  <link href="_assets/css/style.css" type="text/css" rel="stylesheet" />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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

              <form name="formregistor" id="formregistor" method="post" action="store_registor.php">
                <table width="300" border="0" cellspacing="2" cellpadding="2">
                  <tr class="labels">
                    <td nowrap="nowrap">Fullname:</td>
                    <td nowrap="nowrap"><label for="tbFN"></label>
                      <input type="text" name="fullname" id="fullname" class="textFields" style="outline: none;" />
                    </td>
                  </tr>

                  <td nowrap="nowrap" style="color: #207ce5;">Country:</td>
                  <td nowrap="nowrap">
                    <select name="country" id="country" class="textFields" style="outline: none ;width: 256px; height: 34px; color:#207ce5">
                      <option value="">-- Select Country --</option>
                      <?php
                      require 'config/dbc.php';
                      $country = mysqli_query($connection, "SELECT * from countries ") or die(mysqli_error($connection));
                      while ($viewcountry = mysqli_fetch_array($country)) {
                      ?>
                        <option value="<?php echo $viewcountry['id']  ?>"><?php echo $viewcountry['name']  ?></option>
                      <?php  } ?>
                    </select>
                  </td>

                  <tr class="labels">
                    <td nowrap=" nowrap">City:</td>
                    <td nowrap="nowrap"><input type="text" name="city" id="city" class="textFields" style="outline: none;" /></td>
                  </tr>
                  <tr class=" labels">
                    <td nowrap="nowrap">Email::</td>
                    <td nowrap="nowrap"><input type="text" name="email" id="email" class="textFields" style="outline: none;" /></td>
                  </tr>
                  <tr class="labels">
                    <td nowrap="nowrap">Password:</td>
                    <td nowrap="nowrap"><input type="password" name="password" id="password" class="textFields" style="outline: none;" /></td>
                  </tr>
                  <tr class="labels">
                    <td nowrap="nowrap">Are you human!:</td>
                    <td>
                      <div class="g-recaptcha" data-sitekey="6LcECNkqAAAAAG-H6JYIAFrxNVWWa6kBDlmGW4gc"></div>
                    </td>
                  </tr>

                  <tr>
                    <td>&nbsp;</td>
                    <td align="right"><input type="submit" name="button" id="button" value="Register" class="btns" />
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
</body>

</html>