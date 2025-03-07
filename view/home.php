<<!DOCTYPE html>
<html>
<head>
    <title>Passenger Registration</title>
</head>
<body>
    <h2>Passenger Registration Form</h2>
    <form action="stuff.php" method="post">
    <table border="1">
    <tr>
            <td>Full Name:</td>
              <td>  <input type="text" name="fullname" required></td>
              </tr>
              <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="tel" name="phone" required></td>
            </tr>
            <tr>
                <td>Preferred Train Route:</td>
                <td>
                    <select name="train_route">
                        <option value="route1">DHAKA - CHITAGONG</option>
                        <option value="route2">SYLHET - KHULNA</option>
                        <option value="route3">CHITAGONG - RAJSHAHI</option>
                        <option value="route4">RAJSHAHI - DHAKA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Travel Date:</td>
                <td><input type="date" name="travel_date" required></td>
            </tr>
            <tr>
                <td>Train Class:</td>
                <td>
                    <input type="radio" name="class" value="economy"> Economy  
                    <input type="radio" name="class" value="business"> Business  
                    <input type="radio" name="class" value="first_class"> First Class  
                </td>
            </tr>
            <tr>
                <td>Preferred Seat:</td>
                <td>
                    <select name="seat_type">
                        <option value="window">Window</option>
                        <option value="aisle">Aisle</option>
                        <option value="middle">Middle</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Upload ID Proof:</td>
                <td><input type="file" name="id_proof" accept=".jpg, .png, .pdf" required></td>
            </tr>
            <tr>
                <td>Receive Real-Time Updates?</td>
                <td>
                    <input type="checkbox" name="updates" value="email"> Email  
                    <input type="checkbox" name="updates" value="sms"> SMS  
                </td>
            </tr>
            <tr>
            <td colspan="2" align="center">
                    <input type="submit" value="Register & Book Ticket">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
