<html>
<head>
    <title>University Notice Board</title>
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
            width: 700px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
        }
        .event {
            margin-bottom: 10px;
        }
        .event a {
            font-weight: bold;
            text-decoration: none;
            color: black;
        }
        .details {
            display: none;
            margin-left: 20px;
            margin-top: 5px;
            border-left: 3px solid black;
            padding-left: 10px;
        }
        .details:target {
            display: block;
        }
        a.back {
            margin-left: 320px;
        }
    </style>
</head>

<body>

<img src="AIUB Logo.png" width="100">
<h3>University Notice Board</h3>

<div class="box">

    <div class="event">
        <a href="#e1">Final Examination Schedule Published</a>
    </div>
    <div id="e1" class="details">
        <p><b>Date:</b> 10 September 2025</p>
        <p>The final examination schedule for Fall 2025 has been published. Students should check the portal.</p>
    </div>

    <div class="event">
        <a href="#e2">Student Tutor Application Open</a>
    </div>
    <div id="e2" class="details">
        <p><b>Date:</b> 05 September 2025</p>
        <p>Eligible students can apply for Student Tutor positions through the university system.</p>
    </div>

    <div class="event">
        <a href="#e3">Convocation Ceremony 2025</a>
    </div>
    <div id="e3" class="details">
        <p><b>Date:</b> 01 September 2025</p>
        <p>The Convocation Ceremony will be held on campus. Registration is mandatory.</p>
    </div>

    <div class="event">
        <a href="#e4">Programming Contest Announcement</a>
    </div>
    <div id="e4" class="details">
        <p><b>Date:</b> 28 August 2025</p>
        <p>A university-level programming contest will be organized by the CSE department.</p>
    </div>

    <div class="event">
        <a href="#e5">Library Notice</a>
    </div>
    <div id="e5" class="details">
        <p><b>Date:</b> 25 August 2025</p>
        <p>The library will remain closed on Friday due to maintenance work.</p>
    </div>

    <br>
    <a href="Dashboard.php" class="back">Back</a>

</div>
</body>
</html>
