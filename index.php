<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nixie+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./stylemain.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Prise de rendez-vous</title>

</head>

<body>

    <header class="bg-imageresized" id="agenda">
        <div class="conteneur">
            <div id="mySidenav" class="sidenav">
                <a id="closeBtn" href="#" class="close">×</a>

                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">

                    <button type="button"
                        class="btn btn-outline-dark border-bottom-0 text-start font-monospace rounded-0" id="bio"><a
                            href="./home.html">biographie</a></button>

                    <div class="btn-accordion" id="accordion1">
                        <div class="accordion-item" role="group">
                            <button class="btn btn-outline-dark dropdown-toggle text-start font-monospace rounded-0"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                créations&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <ul class="menu">
                                    <li><a class="dropdown-item" href="./cieMaiastra.html">la compagnie <br>
                                            maiastra</a></li>
                                    <li><a class="dropdown-item" href="./enChinoiseries.html">en chinoiseries</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./skeinRelations.html">skein relations</a>
                                    </li>
                                    <li><a class="dropdown-item" href="./ebloui.html">ébloui</a></li>
                                    <li><a class="dropdown-item" href="./auLarge.html">au large</a></li>
                                    <li><a class="dropdown-item" href="./lOrigineDesChoses.html">l'origine <br> des
                                            choses</a></li>
                                    <li><a class="dropdown-item" href="./combat.html">combat</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="btn-group" role="group">
                        <button type="button"
                            class="btn btn-outline-dark border-bottom-0 text-start font-monospace rounded-0"><a
                                href="./methodeFeldenkrais.html">
                                méthode feldenkrais</a></button>
                    </div>

                    <div class="btn-accordion" id="accordion2">
                        <div class="accordion-item">
                            <button class="btn btn-outline-dark dropdown-toggle text-start font-monospace rounded-0"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                collaborations
                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <ul class="menu">
                                    <li><a class="dropdown-item" href="./collaborations.html">collaborations <br> et
                                            interprétations</a></li>
                                    <li><a class="dropdown-item" href="./films.html">films et clips</a></li>
                                    <li><a class="dropdown-item" href="./invitations">invitations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-dark text-start font-monospace rounded-0"><a
                                href="./contact.html">contact</a></button>
                    </div>
                </div>
            </div>

            <a href="#" id="openBtn">
                <span class="burger-icon-white">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <section>
                <div class="form-container">
                    <form name="frmContact" id="" frmContact="" method="post" action="" enctype="multipart/form-data"
                        onsubmit="return validateContactForm()">
                        <legend>Formulaire de contact</legend>
                        <div class="input-row">
                            <label style="padding-top: 20px;">Nom :</label> <span id="userName-info"
                                class="info"></span><br /> <input type="text" class="input-field" name="userName"
                                id="userName" />
                        </div>
                        <div class="input-row">
                            <label>Email :</label> <span id="userEmail-info" class="info"></span><br />
                            <input type="text" class="input-field" name="userEmail" id="userEmail" />
                        </div>
                        <div class="input-row">
                            <label>Objet :</label> <span id="subject-info" class="info"></span><br />
                            <input type="text" class="input-field" name="subject" id="subject" />
                        </div>
                        <div class="input-row">
                            <label>Message :</label> <span id="userMessage-info" class="info"></span><br />
                            <textarea name="content" id="content" class="input-field" cols="60" rows="6"></textarea>
                        </div>
                        <div class="envoyer">
                            <input type="submit" name="send" class="btn btn-outline-dark font-monospace rounded-0"
                                value="Envoyer" />

                            <div id="statusMessage">
                                <?php
                                    if (! empty($message)) {
                                        ?>
                                <p class='<?php echo $type; ?>Message'>
                                    <?php echo $message; ?>
                                </p>
                                <?php
                                    }
                                    ?>
                            </div>
                        </div>
                    </form>
                    <?php
if (! empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $conn = mysqli_connect("localhost", "root", "test", "contactform_database") or die("Connection Error: " . mysqli_error($conn));
    $stmt = $conn->prepare("INSERT INTO tblcontact (user_name, user_email, subject,content) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $content);
    $stmt->execute();
    $message = "Your contact information is saved successfully.";
    $type = "success";
    $stmt->close();
    $conn->close();
}
require_once "contact-view.php";
?>
                </div>
            </section>
        </div>
    </header>


    <main>
    </main>


    <footer>

        <div class="boxAgenda">
            <div class="nom">
                <h1>I-FANG LIN</h1>
            </div>

            <div>
                <button type="button" class="btn btn-transparent iconBtn">
                    <a href="https://www.instagram.com" title="instagram icon" alt="Lien Instagram"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg></a>
                </button>
                <button type="button" class="btn btn-transparent iconBtn">
                    <a href="htpps://www.facebook.com" title="facebook icon" alt="Lien Facebook"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg></a>
                </button>
                <button type="button" class="btn btn-transparent iconBtn">
                    <a href="" title="linkedin icon" alt="Lien LinkedIn"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg></a>
                </button>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="./contactValidation.js"></script>


</body>

</html>