
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ad listing</title>
    <link rel="stylesheet" type="text/css" href="adlisting.css">
<body>
        <div class="container" >

            <form>
                <h3><u>List  Your Ad</u></h3>

                <label for="city">Select city or Devision:</label><br>
                <input type="text" id="city" name="city"><br>

                <label for="media">Add image or video:</label><br>
                <input type="file" id="media" name="media"><br>

                <label for="condition">Condition:</label><br>
                <select id="condition" name="condition">
                    <option value="used">Used</option>
                    <option value="new">New</option>
                </select><br>

                <label for="localArea">Local Area:</label><br>
                <input type="text" id="localArea" name="localArea"><br>

                <label for="price">Prize:</label><br>
                <input type="number" id="price" name="price">
                <br>
                <input type="checkbox" id="negotiable" name="negotiable" value="negotiable">
              <div class="label">
                  <label for="negotiable">Negotiable</label><br>
              </div>


                <label for="email">Contact Details:</label><br>
                <input type="email" id="email" name="email"><br>

                <label for="title">Add Title:</label><br>
                <input type="text" id="title" name="title"><br>

                <label for="description">Discription:</label><br>
                <textarea id="description" name="description"></textarea><br>

                <label for="phone">Phone Number:</label><br>
                <input type="tel" id="phone" name="phone"><br>

                <label for="category">Category:</label><br>
                <input type="text" id="category" name="category"><br>

                <label for="subCategory">Sub Category:</label><br>
                <input type="text" id="subCategory" name="subCategory"><br>

                <input type="submit" value="Post Ad">
            </form>



        </div>


</body>
</html>
