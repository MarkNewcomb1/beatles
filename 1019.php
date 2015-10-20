<form method="post">
    <label for="first_name">First Name:</label><br>
    <input type="text" name="first_name" id="first_name">
    <br>
    <label for="last_name">Last Name:</label><br>
    <input type="text" name="last_name" id="last_name">

    <br>
    <label for="title">Title:</label><br>
    <select class="" name="title">
        <option value="">Select a Title</option>
        <option value="mr">Mr.</option>
        <option value="mrs">Mrs.</option>
        <option value="ms">Ms.</option>
        <option value="?">Undetermined</option>
    </select><br>
    <label for="beatle">Beatle:</label>
    <select class="" name="beatle">
        <option value="">Select a Beatle</option>
        <option value="ringo">Ringo</option>
        <option value="john">John</option>
        <option value="paul">Paul</option>
        <option value="george">George</option>
    </select><br>
    <input type="submit" value="submit">
    <input type="reset" value="reset">
</form>

<?php
	if (isset($_POST["title"])) {
	$salutation = $_POST['title'] . '.';
	$salutation = ucfirst($salutation);
	}
	
	
	
if (isset($_POST["first_name"])) {
$first = $_POST['first_name'];
}




if (isset($_POST["last_name"])) {
	$last = $_POST['last_name'];
	echo "Hello, " . $salutation . " " . $first . " " . $last . "<br />"; 

}

if (isset($_POST["beatle"])) {
$beatle = $_POST['beatle'];
}

	
	
if (isset($_POST["title"]) && isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["beatle"])) {
	$firstPartOfUsername = mb_substr($_POST["first_name"], 0, 2);
	$lastPartOfUsername = mb_substr($_POST["last_name"], -2);
	$indexOfBeatle = $_POST['beatle'];
	
	echo "Your generated username is: " . $firstPartOfUsername . $lastPartOfUsername . $indexOfBeatle;
	
}
	
	
	
?>

