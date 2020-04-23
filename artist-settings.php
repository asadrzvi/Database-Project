<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Home</title>
	<link rel="stylesheet" href="homepage.css">
</head>
<body>
	<form action = "AddArtistInfo.php" method = "post">
	<div class="uploads">
		<h2>Change your Name</h2>
        <form action='AddArtistInfo.php' method="post">
            <input type="text" name="yoname">
            <input class="myButton" type="submit" id="ChangeName" style="display:none;"/>
            <label class="myButton" for="ChangeName">Submit</label>
        </form>
    </div>
	<div class="uploads">
		<h2>Change your Description</h2>
        <form action='AddArtistInfo.php' method="post" id='desc'>
            <textarea name="desc" rows="4" cols="50" form='desc' maxlength='280'></textarea>
            <div>
                <input class="myButton" type="submit" id="ChangeDesc" style="display:none;"/>
                <label class="myButton" for="ChangeDesc">Submit</label>
            </div>
        </form>
	</div>
	<div class="uploads">
		<h2>Change your Username</h2>
        <form action='AddArtistInfo.php' method="post">
            <input type="text" name="user">
            <input class="myButton" type="submit" id="ChangeUsername" style="display:none;"/>
            <label class="myButton" for="ChangeUsername">Submit</label>
        </form>
    </div>
	<div class="uploads">
		<h2>Change your Passcode</h2>
        <form action='AddArtistInfo.php' method="post">
            <input type="text" name="passcode">
            <input class="myButton" type="submit" id="ChangePass" style="display:none;"/>
            <label class="myButton" for="ChangePass">Submit</label>
        </form>
    </div>
    <div class="uploads">
        <form action='LogOut.php' method="post">
            <input class="myButton" type="submit" id="die"style="display:none;"/>
            <label class="myButton" for="die">Log Out</label>
        </form>
    </div>
	</form>
</body>
</html>