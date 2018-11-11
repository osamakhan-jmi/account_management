<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SignUp</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/signup.css">
</head>

<body>
    <div id="container">
        <form action="<?php echo site_url('home/userRegistration'); ?>" method="post">
            <label for="cmpname">Company Name:</label>
            <input type="text" id="cmpname" name="cmpname" required="required">
            
            <label for="address1">Address 1:</label>
            <input type="text" id="address1" name="address1" required="required">
            
            <label for="address2">Address 2:</label>
            <input type="text" id="address2" name="address2" required="required">
            
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required="required">
            
            <label for="state">State:</label>
            <input type="text" id="state" name="state" required="required">
            
            <label for="zip">Zip:</label>
            <input type="text" id="zip" name="zip" required="required">
            
            <label for="countryid">Country Id:</label>
            <input type="text" id="countryid" name="cuntryid" required="required">
            
            <label for="postaladdress">Postal Address:</label>
            <input type="text" id="postaladdress" name="postaladdress" required="required">
            
            <!-- > Admin <-->
            
            <label for="adminfname">Admin First Name:</label>
            <input type="text" id="adminfname" name="adminfname" required="required">
            
            <label for="adminmname">Admin Middle Name:</label>
            <input type="text" id="adminmname" name="adminmname" required="required">
            
            <label for="adminlname">Admin Last Name:</label>
            <input type="text" id="adminlname" name="adminlname" required="required">
            
            <label for="adminemail">Admin Email:</label>
            <input type="text" id="adminemail" name="adminemail" required="required">
            
            <!-- > Admin phone <-->
            
            <label for="adminphncontrycode">Admin Phone Contry Code:</label>
            <input type="text" id="adminphncontrycode" name="adminphncontrycode" required="required">
            
            <label for="adminphnareacode">Admin Phone Area Code:</label>
            <input type="text" id="adminphnareacode" name="adminphnareacode" required="required">
            
            <label for="adminphnnumber">Admin Phone Number:</label>
            <input type="text" id="adminphnnumber" name="adminphnnumber" required="required">
            
            <label for="adminphnextenstion">Admin Phone Extenstion:</label>
            <input type="text" id="adminphnextenstion" name="adminphnextenstion" required="required">
            
            <!-- > Admin FAX <--> 
            
            <label for="adminfaxcontrycode">Admin FAX Contry Code:</label>
            <input type="text" id="adminfaxcontrycode" name="adminfaxcontrycode" required="required">
            
            <label for="adminfaxareacode">Admin FAX Area Code:</label>
            <input type="text" id="adminfaxareacode" name="adminfaxareacode" required="required">
            
            <label for="adminfaxnumber">Admin FAX Number:</label>
            <input type="text" id="adminfaxnumber" name="adminfaxnumber" required="required">
            
            <label for="adminfaxextenstion">Admin FAX Extenstion:</label>
            <input type="text" id="adminfaxextenstion" name="adminfaxextenstion" required="required">
            
            <!-- > Bill <-->
            
            <label for="billfname">Bill First Name:</label>
            <input type="text" id="billfname" name="billfname" required="required">
            
            <label for="billmname">Bill Middle Name:</label>
            <input type="text" id="billmname" name="billmname" required="required">
            
            <label for="billlname">Bill Last Name:</label>
            <input type="text" id="billlname" name="billlname" required="required">
            
            <label for="billemail">Bill Email:</label>
            <input type="text" id="billemail" name="billemail" required="required">
            
            <!-- > Bill phone <-->
            
            <label for="billphncontrycode">Bill Phone Contry Code:</label>
            <input type="text" id="billphncontrycode" name="billphncontrycode" required="required">
            
            <label for="billphnareacode">Bill Phone Area Code:</label>
            <input type="text" id="billphnareacode" name="billphnareacode" required="required">
            
            <label for="billphnnumber">Bill Phone Number:</label>
            <input type="text" id="billphnnumber" name="billphnnumber" required="required">
            
            <label for="billphnextenstion">Bill Phone Extenstion:</label>
            <input type="text" id="billphnextenstion" name="billphnextenstion" required="required">
            
            <!-- > Bill FAX <--> 
            
            <label for="billfaxcontrycode">Bill FAX Contry Code:</label>
            <input type="text" id="billfaxcontrycode" name="billfaxcontrycode" required="required">
            
            <label for="billfaxareacode">Bill FAX Area Code:</label>
            <input type="text" id="billfaxareacode" name="billfaxareacode" required="required">
            
            <label for="billfaxnumber">Bill FAX Number:</label>
            <input type="text" id="billfaxnumber" name="billfaxnumber" required="required">
            
            <label for="billfaxextenstion">Bill FAX Extenstion:</label>
            <input type="text" id="billfaxextenstion" name="billfaxextenstion" required="required">
            
            <!-- > Tech <-->
            
            <label for="techfname">Tech First Name:</label>
            <input type="text" id="techfname" name="techfname" required="required">
            
            <label for="techmname">Tech Middle Name:</label>
            <input type="text" id="techmname" name="techmname" required="required">
            
            <label for="techlname">Tech Last Name:</label>
            <input type="text" id="techlname" name="techlname" required="required">
            
            <label for="techemail">Tech Email:</label>
            <input type="text" id="techemail" name="techemail" required="required">
            
            <!-- > Tech phone <-->
            
            <label for="techphncontrycode">Tech Phone Contry Code:</label>
            <input type="text" id="techphncontrycode" name="techphncontrycode" required="required">
            
            <label for="techphnareacode">Tech Phone Area Code:</label>
            <input type="text" id="techphnareacode" name="techphnareacode" required="required">
            
            <label for="techphnnumber">Tech Phone Number:</label>
            <input type="text" id="techphnnumber" name="techphnnumber" required="required">
            
            <label for="techphnextenstion">Tech Phone Extenstion:</label>
            <input type="text" id="techphnextenstion" name="techphnextenstion" required="required">
            
            <!-- > Tech FAX <--> 
            
            <label for="techfaxcontrycode">Tech FAX Contry Code:</label>
            <input type="text" id="techfaxcontrycode" name="techfaxcontrycode" required="required">
            
            <label for="techfaxareacode">Tech FAX Area Code:</label>
            <input type="text" id="techfaxareacode" name="techfaxareacode" required="required">
            
            <label for="techfaxnumber">Tech FAX Number:</label>
            <input type="text" id="techfaxnumber" name="techfaxnumber" required="required">
            
            <label for="techfaxextenstion">Tech FAX Extenstion:</label>
            <input type="text" id="techfaxextenstion" name="techfaxextenstion" required="required">
            
            <div id="lower">
                <input type="submit" value="Sign Up">
            </div>
        </form>
    </div>
    
</body>
</html>