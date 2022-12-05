<?php $page_title='contact'; include_once "header.php"; include_once "send_mail.php"?> 
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['phone'] = $_POST['phone'];
        $data['subject'] = $_POST['subject'];
        $data['message'] = $_POST['message'];
        SendMail($data, "New Contact Form");
    }
?>
<section class="page-title">
    <div class="container-fluid">
        <h2 class="c-white">Contact Us</h2>
        <hr class="c-white">
    </div>
</section>
<section class="form">
    <div class="container-fluid d-flex justify-content-center">
        <form action="" method="post">
            <div class="form-group form-group-full">
                <h2>Contact Us</h2>
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control"
                    placeholder="Full Name" required="">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control"
                placeholder="Enter Email" required="">
            </div>
            <div class="form-group">
                <input type="number" name="phone" class="form-control"
                    placeholder="Contact Number" required="">
            </div>
            <div class="form-group">
                <input type="text" name="subject" class="form-control"
                    placeholder="Subject" required="">
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Message" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="housing" id="housing"
                    value="Submit">
            </div>
        </form>
    </div>
</section>
<?php include_once "footer.php";?> 