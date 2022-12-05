<?php $page_title='housing'; include_once "header.php"; include_once "send_mail.php";?> 
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['phone'] = $_POST['phone'];
        $data['hotel category'] = $_POST['hotelcategory'];
        $data['check in date'] = $_POST['checkin'];
        $data['check out date'] = $_POST['checkout'];
        $data['per day budget'] = $_POST['perdaybudget'];
        $data['no rooms'] = $_POST['norooms'];
        SendMail($data, "New Housing Form");
    }
?>
<section class="page-title">
    <div class="container-fluid">
        <h2 class="c-white">Housing Form</h2>
        <hr class="c-white">
    </div>
</section>
<section class="form">
    <div class="container-fluid d-flex justify-content-center">
        <form action="" class="regis_left_form" name="form" id="form" method="post">
            <div class="form-group form-group-full">
                <h2>Registration Here</h2>
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control"
                    placeholder="Full Name" required="">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required="">
            </div>
            <div class="form-group">
                <input type="number" name="phone" class="form-control"
                    placeholder="Contact Number" required="">
            </div>
            <div class="form-group">
                <select class="form-control" name="hotelcategory" required="">
                    <option selected="selected" value="" disabled="">Hotel Category</option>
                    <option>2 Star</option>
                    <option>3 Star</option>
                    <option>4 Star</option>
                    <option>5 Star</option>
                </select>
            </div>
            <div class="form-group">
                <input name="checkin" class="form-control required date-picker hasDatepicker" type="text" placeholder="Check In" aria-required="true" required="" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
            </div>
            <div class="form-group">
                <input name="checkout"
                    class="form-control required date-picker hasDatepicker" type="text"
                    placeholder="Check Out" aria-required="true" required="" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
            </div>
            <div class="form-group">
                <input type="text" name="perdaybudget" class="form-control"
                    placeholder="Per Day Budget" required="">
            </div>
            <div class="form-group">
                <select name="norooms" class="form-control" required="">
                    <option value="" selected="selected">Number Of Rooms</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="25+">25+</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="housing" id="housing"
                    value="Submit Housing">
            </div>
        </form>
    </div>
</section>
<?php include_once "footer.php";?> 
