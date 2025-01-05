<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve and sanitize the form data
//     $name = htmlspecialchars(trim($_POST['name']));
//     $email = htmlspecialchars(trim($_POST['email']));
//     $number = htmlspecialchars(trim($_POST['number']));
//     $subject = htmlspecialchars(trim($_POST['subject']));
//     $message = htmlspecialchars(trim($_POST['message']));

//     // Validation: Ensure that required fields are not empty
//     if (!empty($name) && !empty($email) && !empty($message)) {

//         // Email setup
//         $to = "insafinhaam732@gmail.com"; // Change this to your email
//         $subject = "New Contact Form Submission: " . $subject;
//         $body = "You have received a new message from the contact form on your website.\n\n";
//         $body .= "Name: $name\n";
//         $body .= "Email: $email\n";
//         $body .= "Phone Number: $number\n";
//         $body .= "Subject: $subject\n\n";
//         $body .= "Message:\n$message\n";

//         $headers = "From: $email";

//         // Send email
//         if (mail($to, $subject, $body, $headers)) {
//             echo "<p>Thank you! Your message has been sent.</p>";
//         } else {
//             echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
//         }
//     } else {
//         echo "<p>Please fill out all required fields.</p>";
//     }
// }
?>

<section class="contact-area" id="contact-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title title-style-two white-title text-center mb-75">
                    <span class="sub-title">Contact</span>
                    <h2 class="title">I Want to Hear from You</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 order-0 order-lg-2">
                <div class="contact-info-wrap">
                    <ul class="list-wrap">
                        <li>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/loction_icon02.png"
                                    alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Address</h4>
                                <span>Colombo, Western Province, Sri Lanka</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/mail_icon02.png"
                                    alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Email</h4>
                                <a href="mailto:contact@scalelabz.com">contact@scalelabz.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/phone_icon02.png"
                                    alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Phone</h4>
                                <a href="tel:+94761504268">+94 76 150 4268</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form-wrap">
                    <?php echo do_shortcode('[contact-form-7 id="a27d4bb" title="Contact form 1"]'); ?>
                    <!-- <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input type="text" name="number" placeholder="Your Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-grp">
                            <textarea name="message" placeholder="Write your message here" required></textarea>
                        </div>
                        <button type="submit" class="btn">Submit Now <span></span></button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</section>
