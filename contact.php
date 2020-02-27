<?php
include('header.php')
?>
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script> 
    <script>
        function sendMessage(){
            //alert('111');
            $.ajax({
                url:"send_contact.php",
                method:"POST",
                data:{
                    name:$("#sendName").val(),
                    email:$("#sendEmail").val(),
                    phone:$("#sendPhone").val(),
                    message:$("#sendMsg").val()
                },
                datatype:"json",
                //console.log(data);
                success: function(data){

                    console.log('data');
                    alert('Message is sent');
                    //window.location.reload();
                }
            })
            
        }
    </script>
<section class="ttbanner">
    <h1>Contact Us</h1>
</section>

<section>
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-6">
                <h4 style="border-left: 3px solid darkcyan;padding-left:3px;">Contact Info</h4>
                <ul style="list-style:none;" class="fa-ul">
                    <li><span class="fa-li" ><i class="fas fa-map-marker"></i></span>15 Karnjanavanich Road Kho Hong, Amphoe Hat Yai, Chang Wat Songkhla 90110</li>
                    <li><span class="fa-li"><i class="fas fa-phone"></i></span>+66 93427930</li>
                    <li><span class="fa-li"><i class="fas fa-envelope"></i></span>acg.service@acgmyanmar.com
                    </li>
                    <li><span class="fa-li"><i class="fas fa-globe"></i></span>https://en.psu.ac.th/</li>
                </ul>
            </div>
            <div class="col-md-6">
            <h4 style="border-left: 3px solid darkcyan;padding-left:3px;">GET IN TOUCH</h4>
            <form>
                <div class="form-group">
                    <label for="">Name</label>
                    <input id="sendName" type="text" class="form-control"  value="" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input id="sendEmail" type="email" class="form-control"  value="" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input id="sendPhone" type="tel" class="form-control"  value="" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea id="sendMsg" class="form-control"  rows="5" placeholder="Message"></textarea>
                </div>
                <button class="btn btn-primary btn-md pull-right" type="submit" name="" onclick="sendMessage()">
                    Send
                </button>
            </form>
            </div>
        </div>
    </div>
</section>

<?php
include('footer.php')
?>