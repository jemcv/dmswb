<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>[ Home ]</title>

</head>
<body>
    <div id="lines"></div>
    
    <div class="container">
        <div class="main">
                <div class="pic">
                    <img src="assets/me.jpg" alt="me" width="180px">
                </div>
            
                <div class="box">
                    <h1>VEROJA</h1>
                    <nav>
                        [ <a >Home</a> ]
                        [ <a id="upload">Upload</a> ]
                        [ <a id="files">Files</a> ]
                    </nav>
                    <br>
                    <p>Student No: 2020101709</p>
                    <p>Name: Jemuel Veroja</p>
                    <p>Address: Muzon, San Jose Del Monte, Bulacan</p>
                    <p>Contact No: 0123456789</p>
                    <br>
                    <footer>
                    Website: <a id="web">jemcv.github.io/web</a>
                    </footer>            
                </div>
            </div>
        </div>

        <div class="hidden">
            <div id="upload-content">
                <h3>Upload your file</h3>
                <br>
                <br>
                <!-- <blockquote> </blockquote> -->
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label>*Topic Name</label>
                    <input type="text" id="topic_name" name="topic_name" minlength="4" maxlength="30" size="20" required>
                    <!-- <label>*Date</label> --> 
                    <!-- <input type="date" id="date_posted" name="date_posted" required> -->
                    <br>
                    <br>
                    <input type="file" id="file_data" name="file_data" required>
                    <br>
                    <br>
                    <label>*Category</label>
                    <select name="upload_type" id="upload_type" required>
                        <option value="ass">Assignment</option>
                        <option value="quiz">Quiz</option>
                        <option value="lab">Laboratory</option>
                        <option value="exam">Exam</option>
                        <option value="proj">Project</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="Upload File" name="upload">
                </form>
            </div>
        </div>

        <div class="hidden">
            <div id="file-content">
                <h3>Documents</h3>
                <br>
                <a id="ass">Assignment</a> /
                <a id="quiz">Quiz</a> /
                <a id="lab">Laboratory</a> /
                <a id="exam">Exam</a> /
                <a id="proj">Project</a> /
                <a id="archive">Archive</a> /
            </div>
        </div>

        <div class="hidden">
            <div id="ass-content">
                <table class="table-auto">
                    <caption><h3>Assignments</h3></caption>
                    <thead>
                        <tr>
                            <th scope="col">Document No.</th>
                            <th scope="col">Topic</th>
                            <th scope="col">Date Posted</th>
                            <th scope="col">Uploaded by</th>
                            <th scope="col">Action</th>
                        </tr>
                        <?php 
                        session_start();

                        include 'config.php';
                        
                        $sql = "SELECT * FROM assignment";
                        $query = mysqli_query($conn, $sql); 
                        while($res = mysqli_fetch_array($query)) {
                            echo"<tr>";
                                echo"<td>".$res['ass_id']."</td>";
                                echo"<td>".$res['topic_name']."</td>";
                                echo"<td>".$res['date_posted']."</td>";
                                echo"<td>".$res['uploaded_by']."</td>";
                            echo "<td><a href=\"uploads/$res[file_data]\" target=\"_blank\">  </a>/ <a href=\"./edit/assignment.php?id=$res[ass_id]\">  </a>/ <a href=\"archive.php?ass_id=$res[ass_id]\" onClick=\"return confirm('Are you sure you want to archive it?')\"> 󰆴</a>/ "; 
                                    
                                
                            echo"</tr>";
                        }
                    ?>
                    </thead>
                </table>
            </div>

            <div id="quiz-content">
                <table class="table-auto">
                    <caption><h3>Quizzes</h3></caption>
                    <thead>
                        <tr>
                            <th scope="col">Document No.</th>
                            <th scope="col">Topic</th>
                            <th scope="col">Date Posted</th>
                            <th scope="col">Uploaded by</th>
                            <th scope="col">Action</th>
                        </tr>
                        <?php 
                        $sql = "SELECT * FROM quiz";
                        $query = mysqli_query($conn, $sql); 
                        while($res = mysqli_fetch_array($query)) {
                            echo"<tr>";
                                echo"<td>".$res['quiz_id']."</td>";
                                echo"<td>".$res['topic_name']."</td>";
                                echo"<td>".$res['date_posted']."</td>";
                                echo"<td>".$res['uploaded_by']."</td>";
                            echo "<td><a href=\"uploads/$res[file_data]\" target=\"_blank\">  </a>/ <a href=\"./edit/quiz.php?id=$res[quiz_id]\">  </a>/ <a href=\"archive.php?quiz_id=$res[quiz_id]\" onClick=\"return confirm('Are you sure you want to delete?')\"> 󰆴</a>/ "; 
                                    
                                
                            echo"</tr>";
                        }
                    ?>
                    </thead>
                </table>
            </div>

            <div id="lab-content">
                <table class="table-auto">
                    <caption><h3>Laboratories</h3></caption>
                    <thead>
                        <tr>
                            <th scope="col">Document No.</th>
                            <th scope="col">Topic</th>
                            <th scope="col">Date Posted</th>
                            <th scope="col">Uploaded by</th>
                            <th scope="col">Action</th>
                        </tr>
                        <?php 
                        $sql = "SELECT * FROM lab";
                        $query = mysqli_query($conn, $sql); 
                        while($res = mysqli_fetch_array($query)) {
                            echo"<tr>";
                                echo"<td>".$res['lab_id']."</td>";
                                echo"<td>".$res['topic_name']."</td>";
                                echo"<td>".$res['date_posted']."</td>";
                                echo"<td>".$res['uploaded_by']."</td>";
                            echo "<td><a href=\"uploads/$res[file_data]\" target=\"_blank\">  </a>/ <a href=\"./edit/lab.php?id=$res[lab_id]\">  </a>/ <a href=\"archive.php?lab_id=$res[lab_id]\" onClick=\"return confirm('Are you sure you want to delete?')\"> 󰆴</a>/ "; 
                                    
                                
                            echo"</tr>";
                        }
                    ?>
                    </thead>
                </table>
            </div>
            
            <div id="exam-content">
                <table class="table-auto">
                    <caption><h3>Exams</h3></caption>
                    <thead>
                        <tr>
                            <th scope="col">Document No.</th>
                            <th scope="col">Topic</th>
                            <th scope="col">Date Posted</th>
                            <th scope="col">Uploaded by</th>
                            <th scope="col">Action</th>
                        </tr>
                        <?php 
                        $sql = "SELECT * FROM exam";
                        $query = mysqli_query($conn, $sql); 
                        while($res = mysqli_fetch_array($query)) {
                            echo"<tr>";
                                echo"<td>".$res['exam_id']."</td>";
                                echo"<td>".$res['topic_name']."</td>";
                                echo"<td>".$res['date_posted']."</td>";
                                echo"<td>".$res['uploaded_by']."</td>";
                            echo "<td><a href=\"uploads/$res[file_data]\" target=\"_blank\">  </a>/ <a href=\"./edit/exam.php?id=$res[exam_id]\">  </a>/ <a href=\"archive.php?exam_id=$res[exam_id]\" onClick=\"return confirm('Are you sure you want to delete?')\"> 󰆴</a>/ "; 
                                    
                                
                            echo"</tr>";
                        }
                    ?>
                        </thead>
                    </table>
             </div>

            <div id="proj-content">
                <table class="table-auto">
                    <caption><h3>Projects</h3></caption>
                    <thead>
                        <tr>
                            <th scope="col">Document No.</th>
                            <th scope="col">Topic</th>
                            <th scope="col">Date Posted</th>
                            <th scope="col">Uploaded by</th>
                            <th scope="col">Action</th>
                        </tr>
                        <?php 
                        $sql = "SELECT * FROM proj";
                        $query = mysqli_query($conn, $sql); 
                        while($res = mysqli_fetch_array($query)) {
                            echo"<tr>";
                                echo"<td>".$res['proj_id']."</td>";
                                echo"<td>".$res['topic_name']."</td>";
                                echo"<td>".$res['date_posted']."</td>";
                                echo"<td>".$res['uploaded_by']."</td>";
                            echo "<td><a href=\"uploads/$res[file_data]\" target=\"_blank\">  </a>/ <a href=\"./edit/project.php?id=$res[proj_id]\">  </a>/ <a href=\"archive.php?proj_id=$res[proj_id]\" onClick=\"return confirm('Are you sure you want to delete?')\"> 󰆴</a>/ "; 
                                    
                                
                            echo"</tr>";
                        }
                    ?>
                        </thead>
                    </table>
             </div>

            <div id="archive-content">
                <table class="table-auto">
                    <caption><h3>Archive</h3></caption>
                    <thead>
                        <tr>
                            <th scope="col">Document No.</th>
                            <th scope="col">Topic</th>
                            <th scope="col">Archive Date</th>
                            <th scope="col">Archive by</th>
                            <th scope="col">Action</th>
                        </tr>
                        <?php 
                        $sql = "SELECT * FROM archive";
                        $query = mysqli_query($conn, $sql); 
                        while($res = mysqli_fetch_array($query)) {
                            echo"<tr>";
                                echo"<td>".$res['archive_id']."</td>";
                                echo"<td>".$res['topic_name']."</td>";
                                echo"<td>".$res['date_posted']."</td>";
                                echo"<td>".$res['uploaded_by']."</td>";
                            echo "<td><a href=\"uploads/$res[file_data]\" target=\"_blank\">  </a>/ <a href=\"delete.php?archive_id=$res[archive_id]\" onClick=\"return confirm('Are you sure you want to delete?')\"> 󰆴</a>/ "; 
                                    
                                
                            echo"</tr>";
                        }
                    ?>
                        </thead>
                    </table>
             </div>
        </div>
    </div>
    
    

    <script src="./js/winbox.bundle.min.js" ></script>
    <script src="./js/script.js" ></script>
</body>
</html>
