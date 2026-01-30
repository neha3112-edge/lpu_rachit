 <div id="Doubt">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="doubt-box">
                    <h2>Have <span class="org">Any Doubt?</span></h2>
                    <p>Feel Free to contact us</p>
                </div>
               
            </div>
             <div class="col-md-5">
                  <center>  <button class="doubt-btn" onclick="openPopup()"> Request a Call Back</button></center>
                </div>
        </div>
    </div>
</div> 


<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="assets\img\footer-logo.png" width="70%"><br><br>
                <p>LPU is a prestigious university in India . The university was established in 2005 and is UGC approved and NAAC A++ accredited . It offers education in both online and distance modes.LPU online offers an extensive range of undergraduate and postgraduate programs.</p>
            </div><!--end of col-->

            <div class="col-md-3">
                <p class="ftr-h">More courses</p>    
				<li>BA</li>
				 <li>BBA</li>
          
                <li>BCA</li>
                <li>MA</li>
                <li>MBA</li>
                  <li>MCA</li>
                  <li>M.COM</li>
                    <li>MSc</li>
            </div><!--end of col-->

            <div class="col-md-3">
                <p class="ftr-h">Recognization & Approvals</p>
                <li>University Grant commision (UGC)</li>
                <li>National Assessment and Accreditation Council (NAAC A++)</li>
                <li>Distance Education Beurea (DEB)</li>
                <li>National Institutional Ranking Framework (NIRF)</li>
                <li>All India Council for Technical Education (AICTE)</li>
            </div><!--end of col-->
        </div><!--end of row-->
<br><br>
        <div class="row">
            <div class="col-md-5">
              <p class="ftr-h">Contact Us</p>
              <p>Centre for Distance and Online Education, Lovely Professional University, Jalandhar - Delhi G.T. Road, Phagwara, Punjab (India), 144411</p>
            </div><!--end of col-->

            <div class="col-md-4">
                <p class="ftr-h">Make A Step Towards A Success Journey</p>
                <p><strong>Have Any Query?<br></strong> Take Acaedmic Mentor Guidance</p> 

            </div><!--end of col-->
             <div class="col-md-3">
             
             <button type="button" class="footer-btn" onclick="openPopup()"><i class="fa fa-phone"></i> &nbsp;&nbsp;&nbsp;Request a Call Back</button>
            </div><!--end of col-->

           
        </div><!--end of row-->

        <!-- <hr class="footer-hr">
        <center>   <p>Higher Education School platform is an authorised marketing and informational partner of the university. We do not operate as a university. This platform provides information on the university’s online degree programs. Course and fee details are subject to change; please verify them through the official university website. All university names, logos, and trademarks are used for informational purposes only. </p> -->
       
    </div><!--end of container-->

</div>
<?php include "popup.php"; ?>
<script>document.addEventListener("DOMContentLoaded", function () {
    const accordionHeaders = document.querySelectorAll(".accordion-header");

    accordionHeaders.forEach(header => {
        header.addEventListener("click", function () {
            const content = this.nextElementSibling;

            // Toggle current accordion
            this.classList.toggle("active");

            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }

            // Optionally close other open accordions
            accordionHeaders.forEach(otherHeader => {
                if (otherHeader !== this && otherHeader.classList.contains("active")) {
                    otherHeader.classList.remove("active");
                    otherHeader.nextElementSibling.style.maxHeight = null;
                }
            });
        });
    });
});

    </script>