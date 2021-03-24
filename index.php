<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="icon" href ="images/logo.jpg" type = "image/x-icon">
    <title>Axiom TechGuru Pvt. Ltd.</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/axiom1.jpg" class="image" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="BAL/Addstudent">
                        <h2> registration </h2>
                        <div class="form-row">
                            <div class="form-group" >
                               <label for="name"><span style="color:red;">*</span>First Name </label>
                               <input class="input-border"   type="text" name="first_name" id="first_name" autocomplete="off" />
                                <span id="first_nameError"></span>
                            </div>
                            <div class="form-group">
                                <label for="last_name"><span style="color:red;">*</span>Last Name </label>
                                <input class="input-border" type="text" name="last_name" id="last_name" autocomplete="off" />
                            <span id="last_nameError"></span>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email"><span style="color:red;">*</span>Email </label>
                                <input class="input-border" type="email" name="email" id="email" autocomplete="off" />
                            <span id="emailError"></span>
                            </div>
                            <div class="form-group">
                                <label for="mobile_no"><span style="color:red;">*</span>Mobile No:</label>
                                <input class="input-border" maxlength="10" minlength="10" type="text" name="mobile_no" id="mobile_no" autocomplete="off" />
                            <span id="mobile_noError"></span>
                            </div>
                        </div>
                        
                        <div class="form-radio">
                            <label for="gender" class="radio-label"><span style="color:red;">*</span>Gender :</label>
                            <div class="form-radio-item">
                                <input  type="radio" name="gender" id="male" value="Male" required>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input  type="radio" name="gender" id="female" value="Female" required >
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                             <span id="genderError"></span>
                           
                        </div>

                        <div class="form-group">
                            <label for="collage_name"><span style="color:red;">*</span>Collage Name :</label>
                            <input class="input-border" type="text" name="collage_name" id="collage_name" autocomplete="off" />
                            <span id="collage_nameError"></span>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="Degree"><span style="color:red;">*</span>Degree :</label>
                                <div class="form-select">
                                    <select name="degree" id="degree" required class="input-border">
                                        <option value="">Please Select Degree</option>
                                        <option value="Diploma">Diploma</option>
                                            <option value="BE">BE</option>
                                            <option value="BSC">BSC</option>
                                            <option value="BCA">BCA</option>
                                            <option value="Btech">Btech</option>
                                            <option value="Mtech">Mtech</option>
                                            <option value="MCA">MCA</option>
                                            <option value="MSC">MSC</option>
                                            <option value="MBA">MBA</option>
                                    </select>
                                    <span   class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                                    
                            </div>
                            <div class="form-group">
                                <label for="Stream"><span style="color:red;">*</span>Stream :</label>
                                <div class="form-select" required>
                                    <select name="stream" id="stream" required class="input-border">
                                        <option value="">Please Select Stream</option>
                                        <option value="CSE">CSE</option>
                                        <option value="CTech">CTech</option>
                                        <option value="IT">IT</option>
                                        <option value="ETC">ETC</option>
                                        <option value="E&TC">E&TC</option>
                                    </select>
                                    <span  class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>

                    <div class="form-row">
                        <div class="form-group">
                                <label for="Year"><span style="color:red;">*</span>Year :</label>
                                <div class="form-select">
                                    <select name="year" id="year" required class="input-border">
                                        <option value="">Please Select Year</option>
                                        <option value="I Year">I Year</option>
                                        <option value="II Year">II Year</option>
                                        <option value="III Year">III Year</option>
                                        <option value="IV Year">IV Year</option>
                                    </select>
                                    <span   class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                         <div class="form-group">
                                <label for="father_name"><span style="color:red;">*</span>City:</label>
                                <input class="input-border" type="text" name="city" id="city" autocomplete="off" />
                            <span id="cityError"></span>
                         </div>
                    </div>   
                        <div class="form-group">
                            <label for="address"><span style="color:red;">*</span>Address :</label>
                            <input class="input-border" type="text" name="address" id="address" autocomplete="off" />
                        <span id="addressError"></span>
                        </div>
                        <div class="form-submit">
                             <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" onclick="return Validation();" />&nbsp;&nbsp;&nbsp;
                             <input type="reset" value="Reset All" class="submit" name="reset"  />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/register_validation.js" type="text/javascript"></script>
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>