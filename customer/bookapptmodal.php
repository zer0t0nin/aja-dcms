<!-- Modal for book appointment -->
<div id="bookapptmodal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
    <!-- <span class="close">&times;</span> -->
        <section id="register" class="four">
            <div class="container">
                <h1>Book Appointment</h1>
                <hr>

                <form method="post" action="apptCRUDS/addappt.php">
                    <div class="container">
                        
                        <label for="name"><b>Name</b></label>
                        <input type="text" name="name" placeholder="Enter Name" required/>
                        
                        <label for="email"><b>Email</b></label>
                        <input type="text" name="email" placeholder="Enter Email" required/>
                        
                        <label for="contact"><b>Contact</b></label>
                        <input type="text" name="contact" placeholder="Enter Contact" required/>
                        
                        <label for="service_name"><b>Service</b></label>
                        <input type="text" name="service_name" placeholder="Choose Service" required/>
                        
                        <label for="appt_date"><b>Date</b></label>
                        <div class="col-12">
                        
                        <input type="date" name="appt_date" placeholder="Date" required/>
                        </div>
                        

                        <div class="col-12">
                            <button type="submit" class="submitbtn">S U B M I T</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>

</div>
