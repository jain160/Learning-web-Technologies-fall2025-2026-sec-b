<html>
<head>
    <title>Document Printing System</title>
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
        a {
            margin-left: 270px;
        }
        ul {
            margin-left: 150px;
        }
    </style>
</head>

<body>

<img src="AIUB Logo.png" width="100">
<h3>Student Document Printing System</h3>

<form onsubmit="return validateForm()">
<div class="box">

    <label><b>Student Name: </b></label>
    <input type="text" id="name" oninput="e1.innerHTML=''">
    <p id="e1" class="error"></p>
    <br>

    <label><b>Student ID: </b></label>
    <input type="text" id="sid" oninput="e2.innerHTML=''">
    <p id="e2" class="error"></p>
    <br>

    <label><b>Upload Documents: </b></label>
    <input type="file" id="docs" multiple onchange="e3.innerHTML=''">
    <p id="e3" class="error"></p>
    <br>

    <input type="submit" value="Upload">
    <br><br>

    <b style="margin-left:150px;">Uploaded Documents:</b>
    <ul id="docList"></ul>

    <br>
    <a href="Dashboard.php">Back</a>

</div>
</form>

<script>
function validateForm() {
    var name = document.getElementById("name").value;
    var sid = document.getElementById("sid").value;
    var docs = document.getElementById("docs").files;

    if(name === ""){
        e1.innerHTML = "Student name is required";
        return false;
    }

    if(sid === ""){
        e2.innerHTML = "Student ID is required";
        return false;
    }

    if(docs.length === 0){
        e3.innerHTML = "Please upload at least one document";
        return false;
    }

    showDocuments(docs);
    alert("Documents uploaded successfully!");
    return false;
}

function showDocuments(files) {
    var list = document.getElementById("docList");
    list.innerHTML = "";

    for(var i = 0; i < files.length; i++){
        var li = document.createElement("li");
        var link = document.createElement("a");

        link.href = URL.createObjectURL(files[i]);
        link.download = files[i].name;
        link.innerHTML = files[i].name;

        li.appendChild(link);
        list.appendChild(li);
    }
}
</script>
</body>
</html>
