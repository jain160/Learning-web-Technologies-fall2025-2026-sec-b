<html>
<head>
    <title>Document Print Page</title>
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
            width: 150px;
        }
        .error {
            color: red;
            margin-left: 200px;
            font-size: 14px;
        }
        #fileName {
            margin-left: 150px;
            font-weight: bold;
        }
        a {
            margin-left: 270px;
        }
    </style>
</head>

<body>

<img src="AIUB Logo.png" width="100">
<h3>Student Document Printing</h3>

<form onsubmit="return validateForm()">
<div class="box">

    <label><b>Name: </b></label>
    <input type="text" id="name" oninput="e1.innerHTML=''">
    <p id="e1" class="error"></p>
    <br>

    <label><b>Student ID: </b></label>
    <input type="text" id="sid" oninput="e2.innerHTML=''">
    <p id="e2" class="error"></p>
    <br>

    <label><b>Upload Document: </b></label>
    <input type="file" id="doc" onchange="showFileName(); e3.innerHTML=''">
    <p id="e3" class="error"></p>
    <br>

    <p id="fileName"></p>
    <br>

    <input type="submit" value="Print Document">
    <br><br>

    <a href="Dashboard.php">Back</a>

</div>
</form>

<script>
function validateForm() {
    var name = document.getElementById("name").value;
    var sid = document.getElementById("sid").value;
    var doc = document.getElementById("doc").value;

    if(name === ""){
        e1.innerHTML = "Name is required";
        return false;
    }

    if(sid === ""){
        e2.innerHTML = "Student ID is required";
        return false;
    }

    if(doc === ""){
        e3.innerHTML = "Please upload a document";
        return false;
    }
    alert("Document ready for printing!");
    window.print();
    return false;
}

function showFileName() {
    var fileInput = document.getElementById("doc");
    if(fileInput.files.length > 0){
        document.getElementById("fileName").innerHTML =
            "Selected File: " + fileInput.files[0].name;
    }
}
</script>
</body>
</html>
