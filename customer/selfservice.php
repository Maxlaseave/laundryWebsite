<?php include('partials/menu.php'); ?>

<form action="process.php" method = "POST">
<div class="container text-center" style="margin-top: 150px;">
    <div class="row">

    <div class="col"> 
        <div class="input-group mb-4">
        <span class="input-group-text">No.of Loads: </span>
        <input type="number" class="form-control" name="qty" placeholder="<= 7kg per Load" required>
        </div>
    </div>

    <div class="col"> 
        <div class="input-group mb-4">
        <span class="input-group-text">Service Type: </span>
          <select class="form-select" name = "serviceType" aria-label="select service" required>
            <option value="1">Wash & Dry</option>
            <option value="2">Wash Only</option>
            <option value="3">Dry Only</option>
          </select>

        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="input-group mb-4">
            <span class="input-group-text">Self Service Date: </span>
            <input type="date" class="form-control" name="sdate" required>
            </div>
        </div>

        <div class="col">
            <div class="input-group mb-4">
            <span class="input-group-text">Self Service Time: </span>
            <input type="time" class="form-control" id="drop_off_time" name="timeSlot" required>     
            </div>
        </div>

        <div class="input-group mb-4">
            <span class="input-group-text">Additional Remarks: </span>
            <input type="text" class="form-control" name="remarks" placeholder="optional" >
        </div>  
    </div>
</div>



<button type="submit" name="selfServiceSubmit" class="btn btn-light submit" style="padding: 5px 50px 5px 50px; 
    margin: 20px;
    background-color: #d7e6e5;
    position: absolute;
    left: 78.8%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);">Submit</button>

</form>

<div class="container-md" style="margin-top:50px; padding-top:10px;">
    <hr>
    <p class="smalltitle"><strong>SELF-SERVICE LAUNDRY</strong></p>
    <p class="content" style="margin-left: 5px;">Wash you clothes easily with our Self-service laundry! Simply bring your laundry, dry cleaning, and/or specialty items to any PashPash branch near you. You only need to put it in the washing machines we have and wait for 1-2 hours to have your clothes clean and dry again.<br><br> Feel free to bring your own laundry agents or you may purchase at PashPash Laundryshop. <br><br>
        Maximum of 8 kilograms per cycle only. If your laundry is more than 8 kilograms and you need to increase the quantity of cycles above to indicate the number of cycles you have to use. <br><br>
        Once you book an appointment, PashPash gives you a priority number and you will be informed of the slots available beforehand. Time allowance of up to 10 minutes will be given for those who come late. After 10 minutes, the slot will be given to walk-in customers.</p>     
</div>


<?php

include('partials/scripts.php');

?>