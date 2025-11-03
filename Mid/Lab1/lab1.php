

<!DICTYPE html>
<html>
    <style>
     #heading{
        color:red;
        border-bottom:2px solid red;
     }
   #comment{
    height:500px;
    width:500px;
    border:2px solid black;
    border-radius:10px;
   }

     </style>
<body>
<center>


<table>
    <tr><td><h1 id ="heading">Student Registration Information </h1></td></tr>
    <tr>
        <td>First Name</td>
    </tr>
    <tr>
        <td>
            <input type="text">
        </td>
    </tr>
     <tr>
        <td>Last Name</td>
    </tr>
    <tr>
        <td>
            <input type="text">
        </td>
    </tr>
     <tr>
        <td>Student ID</td>
    </tr>
    <tr>
        <td>
            <input type="text">
        </td>
    </tr>
     <tr>
        <td>Program/Major</td>
    </tr>
    <tr>
        <td>
            <select >
                <option>BSc in CSE</option>
                <option>BSc in EEE </option>
                <option>BSc in Cyber Security </option>
                <option>BBA </option>
                <option>English </option>
                <option>LLB </option>
            </select>
        </td>
    </tr>
     <tr>
        <td>Department</td>
    </tr>
    <tr>
        <td>
          <select >
                <option>FST</option>
                <option>FE </option>
                <option>FBA</option>
                <option>English</option>
                <option>Humanities </option>
            </select>
        </td>
    </tr>
     <tr>
        <td>Phone</td>
    </tr>
    <tr>
        <td>
            <input type="number">
        </td>
    </tr>
     <tr>
        <td>University Email </td>
    </tr>
    <tr>
        <td>
            <input type="email">
        </td>
    </tr>
     <tr>
        <td>Create Password(min 8 character)</td>
    </tr>
    <tr>
        <td>
            <input type="password">
        </td>
    </tr>
     <tr>
        <td>Confirm Password</td>
    </tr>
    <tr>
        <td>
            <input type="password">
        </td>
    </tr>
    <tr>
        <td>Semster Selection</td>
    </tr>
    <tr>
        <td>
           <input type="radio" name="semester">Summer 2024
           <input type="radio" name="semester">Fall 2024
           <input type="radio" name="semester">Spring 2025
           <input type="radio" name="semester">Other/SPecial Term
        </td>
    </tr>
    <tr>
        
        <td>Requested Credit Load(Max 15)</td>
    </tr>
    <tr>
          <td>
            <input type="text" placeholder="e.g.,9 or 12">
        </td>
    </tr>

    <tr>
        <td>
            <input type="checkbox" require>I require academic advising before final registration.
        </td>
    </tr>
    <tr>
        <td>
            <h1 id="heading">Course Selection</h1>
        </td>
    </tr>
    <tr>
        <td>
           <input type="checkbox">MAH 1201 (Calculus I)
           <input type="checkbox">CS 2105 (Data Structure)
           <input type="checkbox">ECON 1001 (Microeconomics) <br>
           <input type="checkbox">PHY 1102 (Physics Lab)
        </td>
    </tr>
    <tr>
        <td>
            <p>Comments / Special Requests</p>
        </td>
        <tr>
            <td>
                <input type="text" id="comment" >
            </td>
        </tr>
    </tr>
    
</table>

</center>
</body>
</html>
