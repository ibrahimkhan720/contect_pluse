<?php
include 'config/guard.php';
?>


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
            <td class="user_bar">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td style="color:#FFF;">Welcome</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
            </td>
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

              <form id="add_contacts" name="add_contacts" method="post" action="act_add_record.php" onsubmit="return validateForm()">

                <table width="300" border="0" cellspacing="2" cellpadding="2">

                  <tr class="labels">
                    <td nowrap="nowrap">Fullname:</td>
                    <td nowrap="nowrap"><input type="text" name="fullname" id="fullname" class="textFields" /></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span id="fullnameError" style="color:red; padding-left: 75px;"></span></td>
                  </tr>

                  <tr class="labels">
                    <td nowrap="nowrap" style="color:#207ce5;">Country:</td>
                    <td nowrap="nowrap">
                      <select name="country" id="country" class="textFields">
                        <option value="none">-- Select Country --</option>
                        <?php
                        require 'config/dbc.php';
                        $country = mysqli_query($connection, "SELECT * from countries ") or die(mysqli_error($connection));
                        while ($viewcountry = mysqli_fetch_array($country)) {
                        ?>
                          <option value="<?php echo $viewcountry['id']; ?>"><?php echo $viewcountry['name']; ?> </option>
                        <?php  } ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><span id="countryError" style="color:red;padding-left: 75px;"></span></td>
                  </tr>


                  <tr class="labels">
                    <td nowrap="nowrap">Company:</td>
                    <td nowrap="nowrap"><input type="text" name="company" id="company" class="textFields" /></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span id="companyError" style="color:red; padding-left: 75px;"></span></td>
                  </tr>

                  <tr class="labels">
                    <td nowrap="nowrap">Designation:</td>
                    <td nowrap="nowrap"><input type="text" name="designation" id="designation" class="textFields" /></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span id="designationError" style="color:red;    padding-left: 75px;"></span></td>
                  </tr>

                  <tr class="labels">
                    <td nowrap="nowrap">Phone</td>
                    <td nowrap="nowrap"><input type="text" name="phone" id="phone" class="textFields" /></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span id="phoneError" style="color:red;    padding-left: 75px;"></span></td>
                  </tr>

                  <tr class="labels">
                    <td nowrap="nowrap">Mobile</td>
                    <td nowrap="nowrap"><input type="text" name="mobile" id="mobile" class="textFields" /></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span id="mobileError" style="color:red;    padding-left: 75px;"></span></td>
                  </tr>

                  <tr class="labels">
                    <td nowrap="nowrap">Email</td>
                    <td nowrap="nowrap"><input type="text" name="email" id="email" class="textFields" /></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span id="emailError" style="color:red;    padding-left: 75px;"></span></td>
                  </tr>

                  <tr class="labels">
                    <td nowrap="nowrap" style="color:#207ce5;">Group:</td>
                    <td nowrap="nowrap">
                      <select name="cp_group" id="cp_group" class="textFields">
                        <option value="">-- Select group --</option>
                        <?php
                        require 'config/dbc.php';
                        $group = mysqli_query($connection, "SELECT * from cp_group") or die(mysqli_error($connection));
                        while ($viewgroup = mysqli_fetch_array($group)) {
                        ?>
                          <option value="<?php $viewgroup['id'] ?>"><?php echo $viewgroup['title']  ?></option>
                        <?php  } ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><span id="cp_groupError" style="color:red;    padding-left: 75px;"></span></td>
                  </tr>

                  <tr class="labels">
                    <td nowrap="nowrap">Address</td>
                    <td nowrap="nowrap"><textarea name="address" id="address" cols="39" rows="5"></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span id="addressError" style="color:red;    padding-left: 75px;"></span></td>
                  </tr>

                  <tr>
                    <td>&nbsp;</td>
                    <td align="right">
                      <input type="submit" name="button" id="button" value="Submit Record" class="btns" />
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
      // Clear previous error messages
      document.getElementById("fullnameError").innerHTML = "";
      document.getElementById("companyError").innerHTML = "";
      document.getElementById("designationError").innerHTML = "";
      document.getElementById("phoneError").innerHTML = "";
      document.getElementById("mobileError").innerHTML = "";
      document.getElementById("emailError").innerHTML = "";
      document.getElementById("cp_groupError").innerHTML = "";
      document.getElementById("addressError").innerHTML = "";
      document.getElementById("countryError").innerHTML = ""; // Clear country error

      var isValid = true;

      var fullname = document.getElementById("fullname").value;
      var company = document.getElementById("company").value;
      var designation = document.getElementById("designation").value;
      var phone = document.getElementById("phone").value;
      var mobile = document.getElementById("mobile").value;
      var email = document.getElementById("email").value;
      var cp_group = document.getElementById("cp_group").value;
      var address = document.getElementById("address").value;
      var country = document.getElementById("country").value; // Get selected country

      // Fullname validation
      if (fullname == "") {
        document.getElementById("fullnameError").innerHTML = "Fullname is required.";
        isValid = false;
      }

      // Company validation
      if (company == "") {
        document.getElementById("companyError").innerHTML = "Company is required.";
        isValid = false;
      }

      // Designation validation
      if (designation == "") {
        document.getElementById("designationError").innerHTML = "Designation is required.";
        isValid = false;
      }

      // Phone validation (11 digits)
      var phonePattern = /^[0-9]{11}$/;
      if (phone == "") {
        document.getElementById("phoneError").innerHTML = "Phone is required.";
        isValid = false;
      } else if (!phone.match(phonePattern)) {
        document.getElementById("phoneError").innerHTML = "Phone number must be 11 digits.";
        isValid = false;
      }

      // Mobile validation (11 digits)
      if (mobile == "") {
        document.getElementById("mobileError").innerHTML = "Mobile is required.";
        isValid = false;
      } else if (!mobile.match(phonePattern)) {
        document.getElementById("mobileError").innerHTML = "Mobile number must be 11 digits.";
        isValid = false;
      }

      // Email validation (valid email format)
      if (email == "") {
        document.getElementById("emailError").innerHTML = "Email is required.";
        isValid = false;
      } else {
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!email.match(emailPattern)) {
          document.getElementById("emailError").innerHTML = "Please enter a valid email address.";
          isValid = false;
        }
      }

      // Country validation
      if (country == "") {
        document.getElementById("countryError").innerHTML = "Country is required.";
        isValid = false;
      }

      // Group validation

      // Address validation
      if (address == "") {
        document.getElementById("addressError").innerHTML = "Address is required.";
        isValid = false;
      }

      // Return false if the form is not valid
      return isValid;
    }
  </script>


</body>

</html>