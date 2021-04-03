<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    </head>

<body>
<p>Dear {{ $data['full_name'] }}</p>

<p>My Name is Ashton and I am the owner of Gorilla Gutter gang. I want to personally thank you for considering us for your project! Attached you will find your estimate, if at any time you have any questions or concerns please fell free to simply reply to this email or give us a call at (587) 785 5475
In the meantime I encourage you to take a look below at the great promotions our company is currently offering to see if we can save you even more money of our already industry best pricing.</p>
<br>
<img src="{{ $message->embed(url('uploads/1.png')) }}">
</body>

</html>