


<!--Section: Contact v.2-->
<section  class="py-5">

    <!--Section heading-->
    <h2 class="  text-center font  ">Contact Me</h2>
    <!--Section description-->
    <!--<p class="text-center  ">Do you want to hire me???? Feel free to knock me ...!!</p>-->

    <div class="row  justify-content-center">

        <!--Grid column-->
        <div class="col-md-8 ">
            <form id="contact-form"  action="#">

                <!--div for name and email row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div>
                            <label for="name" class="para-design ">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div >
                            <label for="email" class="para-design">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--div for name and email row end -->

                <!--grid for subject-->
                <div class="row">
                    <div class="col-md-12">
                        <div >
                            <label for="subject" class="para-design">Subject</label>
                            <input type="text" id="subject" name="subject"  class="form-control">
                        </div>
                    </div>
                </div>
                <!--grid end for subject-->

                <!--grid for textarea-->
                <div class="row">

                    <div class="col-md-12">

                        <div >
                            <label for="message" class="para-design">Your message</label>
                            <textarea  id="message" name="message" placeholder="Write you message here..." class="form-control "></textarea>
                        </div>

                    </div>
                </div>
                <!--grid for textarea ends -->
                <input type="submit"  class="form-control btn btn-primary ">

            </form>
        </div>

    </div>
    <!--Grid column--> 
</section>
<!--Section: Contact v.2-->
<?php require_once 'footerjs.php'; ?>