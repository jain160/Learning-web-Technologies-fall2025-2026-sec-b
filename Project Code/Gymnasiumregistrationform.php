<html>
<head>
    <title>Gymnasium Registration System</title>
    <style>
        body {
            background-color: skyblue;
        }
        h3 {
            text-align: center;
        }
        img {
            display: block;
            margin-top: 100px;
            margin-left: 900px;
        }
        .box {
            width: 600px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
        }
        label {
            display: inline-block;
            width: 200px;
        }
        .error {
            color: red;
            margin-left: 200px;
            font-size: 14px;
        }
        .success {
            color: green;
            margin-top: 15px;
            border-top: 1px solid black;
            padding-top: 10px;
        }
        a {
            margin-left: 270px;
        }
    </style>
</head>

<body>
<img src="AIUB Logo.png" width="100">
<h3>Gymnasium Registration Form</h3>

<form onsubmit="return applyGym()">
<div class="box">

    <label><b>Gym Time Schedule:</b></label>
    <p style="margin-left:200px;">
        <strong>Boys:</strong> 6:00 AM – 8:00 AM<br>
        <strong>Girls:</strong> 4:00 PM – 6:00 PM
    </p>
    <br>

    <label><b>Student ID:</b></label>
    <input type="text" id="sid" oninput="e1.innerHTML=''">
    <p id="e1" class="error"></p>

    <label><b>Name:</b></label>
    <input type="text" id="name" oninput="e2.innerHTML=''">
    <p id="e2" class="error"></p>

    <label><b>Gender:</b></label>
    <input type="radio" name="gender" id="male" onclick="e3.innerHTML=''"> Male
    <input type="radio" name="gender" id="female" onclick="e3.innerHTML=''"> Female
    <p id="e3" class="error"></p>

    <label><b>Upload Medical Certificate:</b></label>
    <input type="file" id="medical" onchange="e4.innerHTML=''">
    <p id="e4" class="error"></p>

    <br>
    <input type="submit" value="Apply">

    <div id="status" class="success"></div>

    <br>
    <a href="Dashboard.php">Back</a>

</div>
</form>

<script>
function applyGym(){

    var sid = document.getElementById("sid").value;
    var name = document.getElementById("name").value;
    var male = document.getElementById("male").checked;
    var female = document.getElementById("female").checked;
    var medical = document.getElementById("medical").value;

    if(sid == ""){
        e1.innerHTML = "Student ID is required";
        return false;
    }

    if(name == ""){
        e2.innerHTML = "Name is required";
        return false;
    }

    if(!male && !female){
        e3.innerHTML = "Please select gender";
        return false;
    }

    if(medical == ""){
        e4.innerHTML = "Medical document is required";
        return false;
    }

    var timeSlot = "";
    if(male){
        timeSlot = "Boys Schedule: 6:00 AM – 8:00 AM";
    }
    if(female){
        timeSlot = "Girls Schedule: 4:00 PM – 6:00 PM";
    }

    document.getElementById("status").innerHTML =
        "<strong>Application Submitted!</strong><br>" +
        "Student ID: " + sid + "<br>" +
        "Name: " + name + "<br>" +
        timeSlot + "<br>" +
        "Status: Pending Approval";

    alert("Gym registration application submitted successfully!");

    return false;
}
</script>
</body>
</html>
