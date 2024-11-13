<?php

namespace App\Views\Client\Pages\Contacts;

use App\Views\BaseView;

class Contact extends BaseView
{
    public static function render($data = null)
    {

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contact Us</title>
            <style>
                body {
                    font-family: 'Arial', sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f4f4f4;
                }

                section {
                    background-color: #333;
                    color: white;
                    padding: 20px;
                    text-align: center;
                    
                }

                h1{
                    color: white;
                    margin-bottom: 20px;
                }

                .container {
                    width: 80%;
                    margin: auto;
                    overflow: hidden;
                }

                .contact-info {
                    display: flex;
                    justify-content: space-between;
                    margin-top: 40px;
                }

                .contact-info div {
                    width: 30%;
                    background-color: white;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .contact-info h3 {
                    color: #333;
                }

                .contact-info p {
                    color: #777;
                }

                .form-container {
                    margin-top: 40px;
                    background-color: white;
                    padding: 40px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .form-container h2 {
                    text-align: center;
                    color: #333;
                }

                .form-container input,
                .form-container textarea {
                    width: 100%;
                    padding: 12px;
                    margin-bottom: 20px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                }

                .form-container textarea {
                    height: 150px;
                    resize: vertical;
                }

                .form-container button {
                    background-color: #333;
                    color: white;
                    padding: 12px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    font-size: 16px;
                }

                .form-container button:hover {
                    background-color: #555;
                }

                
            </style>
        </head>

        <body>

            <section>
                <h1>Contact Us</h1>
                <p>We would love to hear from you! Please feel free to reach out to us.</p>
            </section>

            <div class="container">
                <!-- Contact Info -->
                <div class="contact-info">
                    <div>
                        <h3>Our Office</h3>
                        <p>123 Main Street, City Name, Country</p>
                    </div>
                    <div>
                        <h3>Email Us</h3>
                        <p>contact@yourbrand.com</p>
                    </div>
                    <div>
                        <h3>Call Us</h3>
                        <p>+1 234 567 890</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="form-container">
                    <h2>Send Us a Message</h2>
                    <form action="" method="POST">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <input type="text" name="subject" placeholder="Subject" required>
                        <textarea name="message" placeholder="Your Message" required></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>

            

        </body>

        </html>






<?php

    }
}
