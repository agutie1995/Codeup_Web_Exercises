<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>

<title>My First HTML Form</title>

<section>
    <h2>User Login</h2>

    <form method="GET" action="my_first_form.php">
        <p>
            <label for="username"></label>
            <input id="username" name="username" type="text" placeholder="EMAIL" autofocus>
        </p>
        <p>
            <label for="password"></label>
            <input id="password" name="password" type="password" placeholder="PASSWORD">
        </p>
        <p>
            <input type="submit" value="Login">
        </p>    
    </form>

</section>

<section>

    <h2>Compose Email</h2>

    <form method="GET" action="my_first_form.php">
        <p>
            <label for="to"></label>
            <input id="to" name="to" type="text" placeholder="To:" autofocus>
        </p>
    
        <p>
            <label for="from"></label>
            <input id="from" name="from" type="text" placeholder="From:">
        </p>

        <p>
            <label for="subject"></label>
            <input id="subject" name="subject" type="text" placeholder="Subject">
        </p>

        <p>
            <textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Content Here"></textarea>
        </p>

        <p>
            <input type="checkbox" id="save_copy" name="save_copy" value="yes">
            <label for="save_copy">Save copy of e-mail to sent folder</label>
        </p>

        <button>Send</button>

    </form>
</section>

<section>
    <form method="GET" action="my_first_form.php">

        <h2>Multiple Choice Test</h2>


        <p>What is your favorite color?</p>

        <p><label>
            <input type="radio" name="q1" value="blue">
            Blue
        </label></p>
        <p><label>
            <input type="radio" name="q1" value="green">
            Green
        </label></p>
        <p><label>
            <input type="radio" name"q1" value="red">
            Red
        </label></p>
        <p><label>
            <input type="radio" name="q1" value="yellow">
            Yellow
        </label></p>
        <p><label>
            <input type="radio" name="q1" value="I hate all these colors">
            I hate all these colors
        </label></p>


        <p>5x=20 Find x.</p>

        <p><label>
            <input type="radio" name="q2" value="4">
            4
        </label></p>
        <p><label>
        <input type="radio" name="q2" value="2">
            2
        </label></p>
        <p><label>
            <input type="radio" name"q2" value="20">
            20
        </label></p>
        <p><label>
            <input type="radio" name="q2" value="10">
            10
        </label></p>
        <p><label>
            <input type="radio" name="q2" value="None of the above">
            None of the above
        </label></p>


        <p>What are your hobbies? Check all that apply.</p>

        <p><label><input type="checkbox" id="os1" name="os[]" value="sports">Sports</label></p>
        <p><label><input type="checkbox" id="os2" name="os[]" value="painting/drawing">Painting/Drawing</label></p>
        <p><label><input type="checkbox" id="os3" name="os[]" value="outdoor activities">Outdoor Activities</label></p>
        <p><label><input type="checkbox" id="os4" name="os[]" value="Reading">Reading</label></p>
        <p><label><input type="checkbox" id="os5" name="os[]" value="video games">Video Games</label></p>
        <p><label><input type="checkbox" id="os6" name="os[]" value="other">Other</label></p>

        <p><label for="os">What movie genre(s) do you enjoy watching?</label>
        <select id="os" name="os[]" multiple>
            <option value="action and adventure">Action and Adventure</option>
            <option value="horror">Horror</option>
            <option value="romance">Romance</option>
            <option value="comedy">Comedy</option>
            <option value="suspense or thriller">Suspense or Thriller</option>
            <option value="drama">Drama</option>
            <option value="independent">Independent</option>
            <option value="other">Other</option>
        </select>
        </p>

    </form>
</section>

<section>
    <form method="POST" action="my_first_form.php">

        <h2>Select Testing</h2>

        <label for="avengers">Have you seen Avengers: Age of Ultron?</label>
        <select id="avengers" name="avengers">
            <option value="1">Yes</option>
            <option value="2">No</option>
        </select>

        <p>
            <button>Submit</button>
        </p>

    </form>
</section>