<!DOCTYPE html>
<html>
<head>
    <title>Train Staff Registration</title>
</head>
<body>
    <h2>Train Staff Registration Form</h2>
    <form action="submit_staff.php" method="post">
        <table border="1">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="name" required></td>
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
                <td>Staff Role:</td>
                <td>
                    <select name="role">
                        <option value="admin">Administrator</option>
                        <option value="conductor">Train Conductor</option>
                        <option value="driver">Train Driver</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Assigned Train Route:</td>
                <td>
                    <select name="assigned_route">
                        <option value="route1">DHAKA - CHITAGONG</option>
                        <option value="route2">SYLHET - KHULNA</option>
                        <option value="route3">CHITTAGONG - RAJSHAHI</option>
                        <option value="route4">RAJSHAHI - DHAKA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Upload Work ID Proof:</td>
                <td><input type="file" name="work_id" accept=".pdf, .jpg, .png" required></td>
            </tr>
            <tr>
            
            <td>Live Location (GPS):</td>           
                  <td><input type="text" name="location" placeholder="Enter current city"></td>      
    </td>
</tr>

                <td>Emergency Contact Number:</td>
                <td><input type="tel" name="emergency_contact" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Register as Staff">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
