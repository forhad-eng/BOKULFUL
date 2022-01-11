<!-----Social Media------>

<section id="social-media">
    <div class="container text-center">
        <p>FIND US ON SOCIAL MEDIA</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/facebookapp"><img src="images/facebook%20logo.png"></a>
            <a href="https://www.instagram.com/"><img src="images/instagram%20logo.png"></a>
            <a href="https://twitter.com/"><img src="images/twitter%20logo.png"></a>
            <a href="https://www.whatsapp.com/"><img src="images/whatsapp%20logo.png"></a>
            <a href="https://bd.linkedin.com/"><img src="images/linkdin%20logo.png"></a>
            <a href="https://www.snapchat.com/"><img src="images/snapchat%20logo.png"></a>

        </div>
    </div>
</section>

<!-----Footer Section----->

<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-box">
                <a href="file:///C:/Users/user/Desktop/Website/index.html"> <img src="images/tree-plantation%20logo.png"></a>

                <p>Bokulful Nursery Mart</p>
            </div>
            <div class="col-md-4 footer-box">
                <p><b>CONTACT US</b></p>
                <p><i class="fa fa-map-marker"></i> Boropol,Halishohor,Ctg</p>
                <p><i class="fa fa-phone"></i> 01778402398</p>
                <p><i class="fa fa-envelope-o"></i> mahmud2461@gmail.com</p>
            </div>

            <div class="col-md-4 footer-box">
                <p><b>LOGIN NEWSLETTER</b></p>
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="action_page.php" method="POST">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
                        </div>

                        <div class="montainer">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" id="uname" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" id="psw" required>

                            <button type="submit">Login</button>
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                        </div>

                        <div class="montainer" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
                    </form>
                </div>

                <script>
                    // Get the modal
                    var modal = document.getElementById('id01');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target === modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>

            </div>
        </div>
        <hr>
        <p class="copyright">Website created by Abdullah Al Mahmud</p>

    </div>
</section>

<script src="smooth-scroll.js"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script>

</body>
</html>