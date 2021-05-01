<!DOCTYPE html>

<?php

    $message_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != ''){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {


            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: ' .$name. '<contact@samedpolat.nl>' . "\r\n"; 
        
            $to = "spolat0750@gmail.com";
            $body = "";
        
            $body .= "From: ".$name. "\r\n";
            $body .= "Email: ".$email. "\r\n";
            $body .= "Message: ".$message. "\r\n";
        
            mail($to, $subject, $body, $headers);

            $message_sent = true;
        } 

    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="images/favicon.ico">
        <title>Samed Polat - Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">       
        <link rel="stylesheet" href='css/main2.css' type="text/css">
        </head>
    <body>
        <div class="top-shape">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="header">
            <svg class="logo" id="Laag_1" color="red" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 982.46 384.81"><path d="M9,542.09c18.32,0,36.65.43,55,0,33.17-.82,45.89,21.68,45.34,46A65,65,0,0,1,107.6,602c-4.44,18.14-18.15,29.41-36.95,30-13.48.45-27,.16-40.47.19H23.51v58H9Zm14.71,76.57c15.79,0,31.27.77,46.63-.23,13.47-.87,21.42-9.17,23.9-22.84a47.26,47.26,0,0,0,.36-15.33c-2.46-15.8-11.68-24.09-27.67-24.68-13.29-.49-26.62,0-39.92-.19-3.93,0-3.67,2.3-3.66,4.89q0,27,0,53.93C23.37,615.66,23.59,617.11,23.71,618.66Z" transform="translate(-9 -307.61)"/><path d="M696.44,310.05c6.14,49.3,12.23,98.15,18.41,147.7-4.31,0-8.12.29-11.83-.19-1-.13-2.44-2.42-2.63-3.86-2.21-16.84-4.21-33.7-6.3-50.56-2.69-21.76-5.43-43.53-8.32-66.71-1.42,2.49-2.25,3.79-2.93,5.18Q659.22,389.81,635.67,438c-1.46,3-3,5-6.69,4.4-4.1-.61-8.42,1.46-11.25-4.45-15.47-32.27-31.46-64.28-47.28-96.37-.77-1.57-1.66-3.08-3.14-5.8-5.15,41.43-10.13,81.49-15.14,121.73H538.45c6-49.18,12.08-98.12,18.16-147.48,4.06,0,7.76-.43,11.28.2,1.57.28,3.23,2.44,4.06,4.14,12.21,25,24.27,50,36.39,75,5.94,12.25,11.9,24.5,18.28,37.64,4.53-9.31,8.67-17.79,12.78-26.28,13.56-28,27.25-55.95,40.56-84.08,2.37-5,5-7.79,10.72-6.69C692.28,310.31,694,310.05,696.44,310.05Z" transform="translate(-9 -307.61)"/><path d="M869.41,457.43V310.7c.5-.26.79-.52,1.07-.52,19.32,0,38.65-.52,57.95.13,28.14.94,48.89,16.78,57.8,43.49,7.27,21.79,7.15,43.72-1.6,65-10.19,24.78-29.45,37.77-56,38.83-19,.76-38,.15-57,.13A17.58,17.58,0,0,1,869.41,457.43Zm14.05-13.64a20.76,20.76,0,0,0,2.92.48c14.33,0,28.68.47,43-.18,18.07-.81,31.65-9.64,39.89-25.8,9-17.56,9.71-36.08,5.09-55-5.52-22.59-22.49-39.45-47.39-39.72-12.49-.13-25,0-37.47-.38-4.8-.16-6.16,1.23-6.13,6.08.2,36.33.11,72.66.11,109Z" transform="translate(-9 -307.61)"/><path d="M129.66,616.31c0-42.78,32.89-76.4,74.43-76.64,38.12-.21,74.71,29.52,74.48,76.92-.23,48.37-39.26,76.59-75.63,75.82C162.17,691.55,129.67,658.54,129.66,616.31Zm135,.4c-.52-4.45-.81-9-1.61-13.36-6.84-37.58-45.65-59.9-80.33-46.26-28.25,11.12-44.67,43.91-37.22,74.33,6.72,27.44,30.17,47.23,56.48,47.66C236.76,679.65,264.2,652.2,264.66,616.71Z" transform="translate(-9 -307.61)"/><path d="M287.17,418.7c4,0,7.64-.29,11.21.16,1.19.16,2.74,2,3.13,3.4,3.82,13.21,12.88,20.93,25.86,23.65,14.14,3,27.48.8,37.43-10.75,11.59-13.43,8.46-31.24-7.47-39-9-4.38-19.18-6.26-28.84-9.22-5.88-1.8-12-3.05-17.64-5.33-29.32-11.75-27.71-44.89-10.78-60.7,16.36-15.29,44.45-17.79,63.06-5.37,11.06,7.39,18,20.43,16.68,32.18-3.52,0-7.16.3-10.71-.17-1.12-.14-2.56-2.18-2.87-3.58-3.19-14.21-15.64-23.24-32.06-23-15.94.19-29,10-31.56,23.91-1.71,9.12,1.5,17.72,10.08,22,7.51,3.71,15.87,5.72,23.91,8.29s16.14,4.21,23.79,7.35c13.92,5.72,24,15.3,25.16,31.29,1.13,15.7-5.28,28.28-18,37.4-22.49,16.18-57.61,10.79-73-11.07A38,38,0,0,1,287.17,418.7Z" transform="translate(-9 -307.61)"/><path d="M750,457.38v-147H833.7v12.89H764.13v55.13h60.55v13.42H764.16v52.33h71.63v13.22Z" transform="translate(-9 -307.61)"/><path d="M410.85,457.55h-14.6c18.84-49.39,37.49-98.28,56.08-147a5.82,5.82,0,0,1,1.19-.36c13.82-.62,13.8-.6,18.71,12.33q24.56,64.63,49.15,129.25c.64,1.68,1.24,3.37,2.2,6-4.76,0-8.87.36-12.84-.21-1.27-.18-2.57-2.68-3.21-4.36q-16.78-44-33.39-88.15-6.09-16.09-12.16-32.18c-.45-1.18-1.05-2.3-2.12-4.6C443.24,372.07,427,414.86,410.85,457.55Z" transform="translate(-9 -307.61)"/><path d="M397.43,542.17c4.48,0,8.48-.33,12.36.19,1.29.17,2.75,2.36,3.35,3.93q21.56,56.57,42.93,113.19c1.41,3.72,2.89,7.41,4.8,12.3,1.06-2.48,1.77-4,2.36-5.57q22.53-59.46,44.95-119c1.44-3.86,3.16-5.71,7.4-5.15,2.76.37,5.61.07,9.15.07-3.33,8.75-6.44,17-9.57,25.14-14.94,39.16-29.95,78.29-44.74,117.51-1.46,3.88-3.26,5.33-7.46,5.19-9.58-.33-9.59-.09-13.07-9.24Q424.6,614.3,399.34,547.84C398.7,546.16,398.19,544.43,397.43,542.17Z" transform="translate(-9 -307.61)"/><path d="M585.13,689.89V555.59H538.71V542.48H646v12.66c-1.71.1-3.47.29-5.23.29-11.66,0-23.33.25-35-.1-4.93-.14-6.49,1.06-6.46,6.29.24,40,.16,80,.12,120,0,9.72,1,8.11-8.18,8.27C589.43,689.92,587.62,689.89,585.13,689.89Z" transform="translate(-9 -307.61)"/><path d="M313.17,689.52v-147h13.64V676.41h62.63v13.11Z" transform="translate(-9 -307.61)"/><path d="M382.29,518c.33-4,.28-7.4,1-10.58a5.22,5.22,0,0,1,3.52-3.09c21.79-3.81,43.61-7.43,65.42-11.1l80.18-13.46c1.58-.26,3.18-.44,5.29-.73-.36,4.48-.68,8.39-1.05,12.94Z" transform="translate(-9 -307.61)"/></svg>
        </div>
        <main>
            <div class="CS50W box">
                <div class="link-box">
                    <h3>CS50W</h3>
                    <p>Computer Science 50 Web is een studie van Harvard, die ook een online variant heeft. Tijdens de studie krijg je een beeld van programmeertalen als Python, JavaScript en SQL met behulp van frameworks zoals Django, React en Bootstrap.</p>
                    <hr>
                    <div>
                        <a id="quick-link" target="blank_" href="https://github.com/svmcd/CS50W/tree/main/Project%200">Project 0 - Search</a>
                    </div>
                    <div>
                        <a id="quick-link" target="blank_" href="https://github.com/svmcd/CS50W/tree/main/Project%201">Project 1 - Wiki</a>
                    </div>
                    <div>
                        <a id="quick-link" target="blank_" href="https://github.com/svmcd/CS50W/tree/main/Project%202">Project 2 - Commerce</a>
                    </div>
                    <div>
                        <a id="quick-link" target="blank_" href="#">Project 3</a>
                    </div>
                    <div>
                        <a id="quick-link" target="blank_" href="#">Project 4</a>
                    </div>
                    <div>
                        <a id="quick-link" target="blank_" href="#">Final project</a>
                    </div>
                </div>
                <div class="git">
                    <a target="blank_" href="https://github.com/svmcd/CS50W"><i class="icon ion-social-github"></i></a>
                </div>
            </div>
            <div class="project box">
                <div class="link-box">
                    <h3>Schoolprojecten</h3>
                    <p>Projecten die ik tijdens mijn studie bij Mediacollege Amsterdam heb gemaakt.</p>
                    <hr>
                    <div>
                        <a id="quick-link" target="blank_" href="https://samedpolat.nl/lamlisse/">Museum landingpage</a>
                    </div>
                    <div>
                        <a id="quick-link" target="blank_" href="https://samedpolat.nl/GreenHouse/">GreenHouse</a>
                    </div>
                    <div>
                        <a id="quick-link" target="blank_" href="https://samedpolat.nl/corono/">Corono</a>
                    </div>
                </div>
                <div class="git">
                    <a target="blank_" href="https://github.com/svmcd"><i class="icon ion-social-github"></i></a>
                </div>            
            </div>
            <div class="form box">
                <?php
                if($message_sent):
                ?>
                    <h3>Bedankt!</h3>
                    <p>Je krijgt zo snel mogelijk een reactie terug</p>
                <?php
                else:
                ?>
                <form action="index.php" method="POST">
                    <h3>Contact</h3>
                    <hr>
                    <input class="input name" type="text" name="name" placeholder="uw naam" required >
                    <input class="input email" type="email" name="email" placeholder="uw email" required>
                    <input class="input subject" type="text" name="subject" placeholder="onderwerp" required>
                    <textarea class="input message" name="message" cols="26" rows="5" placeholder="uw bericht" required></textarea>
                    <input class="input submit" type="submit" name="submit" required value="verstuur" >
                </form>
                <?php
                endif;
                ?>
            </div>
        </main>
        <div class="footer-basic">
            <footer>
                <div class="social">
                    <a target="blank_" href="https://www.instagram.com/ssamcd/"><i class="icon ion-social-instagram"></i></a>
                    <a target="blank_" href="https://github.com/svmcd"><i class="icon ion-social-github"></i></a>
                    <a target="blank_" href="https://twitter.com/svmedd"><i class="icon ion-social-twitter"></i></a>
                </div>
                <p class="copyright">Samed Polat © 2021</p>
            </footer>
            <div class="bottom-shape">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
                </svg>
            </div>
    </body>
</html>