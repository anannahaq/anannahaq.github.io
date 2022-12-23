<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="outer">
        <h1>CURRICULUM VITAE</h1>
        <div class="container">
            <section class="header-area">
                <div class="left-area">
                    <h3>Afrida Haq Ananna</h3>
                    <p><?php
                        $address = "House:305, Block-A, Dhaka <br />
                                    Email:anannaafrida@gmail.com<br />
                                    Tel:019XXXXXXXX";
                        echo $address; ?> </p>
                </div>
                <div class="right-area">
                    <img src="ananna.PNG" alt="Afrida Haq Ananna" />
                </div>
            </section>
        </div>
        <h2>Career Objective</h2>
        <hr><br>
        <p><?php
            $career_object = "An entry-level position to begin my career in a high-level professional environment.To secure employment with a reputable company, where I can utilize my skills and business studies background to the maximum. Seeking a challenging career with an MNC.";
            echo $career_object; ?></p>
        <br>
        <h2>Educational Qualification</h2>
        <hr />
        <br />
        <table border="1" style="border-collapse: collapse">
            <tr>
                <th style="text-align: center;">Name of exam</th>
                <th style="text-align: center;">Board/University</th>
                <th style="text-align: center;">Name of Institution</th>
                <th style="text-align: center;">Year of passing</th>
                <th style="text-align: center;">Obtained Marks</th>
            </tr>
            <tbody>
                <?php
                $educational_qualifications = [
                    "ssc_information" => [
                        "name" => "SSC",
                        "board_subject" => "Dhaka",
                        "institution" => "Khilgaon Girls School",
                        "year_of_passing" =>  2011,
                        "marks" => 4.38
                    ],
                    "hsc_information" => [
                        "name" => "HSC",
                        "board_subject" => "Dhaka",
                        "institution" => "South Point college	",
                        "year_of_passing" =>  2013,
                        "marks" => "4.60"
                    ],
                    "bsc_information" => [
                        "name" => "BSc",
                        "board_subject" => "Electrical & Electronic Engineering",
                        "institution" => "University of Information Technology and Sciences",
                        "year_of_passing" =>  2019,
                        "marks" => 3.68
                    ],
                    "msc_information" => [
                        "name" => "MSc",
                        "board_subject" => "Information Technology",
                        "institution" => "Jahangirnagar University",
                        "year_of_passing" =>  2023,
                        "marks" => 3.58
                    ],

                ];
                foreach ($educational_qualifications as $key => $value) {
                    echo "<tr>";
                    echo "<td>$value[name]</td>";
                    echo "<td>$value[board_subject]</td>";
                    echo "<td>$value[institution]</td>";
                    echo "<td>$value[year_of_passing]</td>";
                    echo "<td>$value[marks]</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <h2>Computer Skills</h2>
        <hr><br>
        <?php
        $MS_Office = "MS Office";
        $email = " Email";
        $Database_Management = "Database Management";
        $Programming_Language = "Programming Language";
        $Graphics = "Graphics";
        $Software_Skills = "Software Skills";
        $computer_skill = [
            $MS_Office => "Word , Excel, Outlook ,Powerpoint , OneNote , Access,Photo Editing",
            $email =>  "Mail Merge , Filters, Folders, Rules",
            $Database_Management => "Oracle 8.x/9.x , SQL Server , My SQL, MS Access",
            $Programming_Language => "HTML,CSS,Java Script, C++,PHP",
            $Graphics => "Photoshop, Illustrator,Photos cape,InDesign, Acrobat, Corel Draw,Draw io",
            $Software_Skills => "Emu 8086, Matlab, Octave software, Cisco packet tracer,Bracket"
        ];
        // foreach ($computer_skill as $x => $x_value) {
        //      echo "<b> $x </b>" . " : " . $x_value;
        //     // echo "<span style='width:230px'; display:"inline-block" > $x </span>" . " : " . $x_value;          
        //     echo "<br>";
        // }
        echo "<table>";
        foreach ($computer_skill as $x => $value) {
            echo "<tr>";
            echo "<td style='text-align: left;'>$x</td>";
            echo "<td>:</td>";
            echo "<td style='text-align: left;'>$value</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <br>
        <h2>Other Studies and Training</h2>
        <hr><br>
        <!-- <p><?php echo $others_studies; ?></p> -->
        <?php
        $others_studies = "<li>Successfully completed internship program on 108 kWp Solar Photovoltaic System in Bangladesh Bank (The central bank of Bangladesh) Head Office,
            Motijheel Dhaka, Bangladesh. (September 01 to November 30, 2018)</li>";
        echo $others_studies;
        ?>
        <br>
        <?php
        $personal_skills = ["Honesty", "Team Spirit", "Accepting Challenges", "Quick learner"];
        ?>
        <h2>Personal Skills</h2>
        <hr><br>
        <?php
        foreach ($personal_skills as $key => $value) {
            echo $key + 1 . ". " . $value . "<br>";
        }
        ?>
        <br>
        <h2>Language Skills</h2>
        <hr><br>
        <table border="1" style="border-collapse: collapse">
            <tr>
                <th style="text-align: center;">Language</th>
                <th style="text-align: center;">Reading </th>
                <th style="text-align: center;">Writting </th>
                <th style="text-align: center;">Speaking</th>
            </tr>
            <tbody>
                <?php
                $language = [
                    "bangla" => [
                        "language" => "Bangla",
                        "reading" => "Excellent",
                        "writting" => "Excellent",
                        "speaking" => "Excellent"
                    ],
                    "english" => [
                        "language" => "English",
                        "reading" => "Excellent",
                        "writting" => "Excellent",
                        "speaking" => "Excellent"
                    ],
                ];
                foreach ($language as $key => $value) {
                    echo "<tr>";
                    echo "<td>$value[language]</td>";
                    echo "<td>$value[reading]</td>";
                    echo "<td>$value[writting]</td>";
                    echo "<td>$value[speaking]</td>";
                    echo "</tr>";
                };
                ?>
            </tbody>
        </table>
        <br>
        <h2>Hobbies</h2><hr><br>
        <?php
        $hobbies = ["Internet browsing", "Reading book", "Cooking", "Singing", "Traveling"];
        foreach ($hobbies as $key => $value) {
            echo $key + 1 . ". " . $value . "<br>";
        }
        ?>
        <br>
        <h2>Games</h2><hr><br>
        <?php
        $games = ["Chess", "Badminton", "Cricket", "Ludu"];
        foreach ($games as $gamekey => $gamevalue) {
            echo $gamekey + 1 . " . " . $gamevalue . "<br>";
        }
        ?>
        <br>
        <h2>Personal Information:</h2><hr><br>
        <?php
        $full_name = "Full Name";
        $father_name = "Father's Name";
        $mother_name = "Mother's Name";
        $date_of_birth = "Date of Birth";
        $nationality = "Nationality";
        $sex = "Sex";
        $religion = "Religion";
        $blood_group = "Blood Group";
        $present_address = "Present Address";
    $personal_information = [
            $full_name => "Afrida Haq Ananna",
            $father_name =>  "Md.Aminul Haq",
            $mother_name => "Sajeda Haq",
            $date_of_birth => "15 July 1996",
            $nationality => "Bangladeshi",
            $sex => "Female",
            $religion => "Islam",
            $blood_group => "A+",
            $present_address => "House:305, Block-A, Dhaka"
        ];
        echo "<table>";
        foreach ($personal_information as $x => $value) {
            echo "<tr>";
            echo "<td style='text-align: left;'>$x</td>";
            echo "<td>:</td>";
            echo "<td style='text-align: left;'>$value</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <br>
        <h2>Reference:</h2><hr><br>
        <?php
        $name = "Name";
        $address = "Address";
        $email = "Email";
        $tel = "Tel";
    $reference = [
            $name => "Md. Amirul Haq",
            $email =>  "amirulhaq@gmail.com",
            $address => "305-C Dhaka-1219",
            $tel => "019933XXXXX"
        ];
        echo "<table>";
        foreach ($reference as $x => $value) {
            echo "<tr>";
            echo "<td style='text-align: left;'>$x</td>";
            echo "<td>:</td>";
            echo "<td style='text-align: left;'>$value</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <br>
        <p style="text-align: center">Copyright ©afridahaq, 2022</p>
    </div>
    <!--end of outer div-->
</body>
</html>