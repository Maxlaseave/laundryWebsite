<?php include('partials/menu.php'); ?>


<form action="process.php" method ="POST">
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
            <span class="input-group-text">Drop-Off Date: </span>
            <input type="date" class="form-control" name="dropDate" required>
            </div>
        </div>

        <div class="col">
            <div class="input-group mb-4">
              <span class="input-group-text">Drop-Off Time: </span>
              <input type="time" class="form-control"  name="timeSlot" required>
            </div>
        </div>

        <div class="input-group mb-4">
            <span class="input-group-text">Additional Remarks: </span>
            <input type="text" class="form-control" name="remarks" placeholder="optional" >
        </div>  
    </div>

    </div>
</div>
    <button type="submit" name="dropOffSubmit" class="submit btn btn-light" style="padding: 5px 50px 5px 50px; 
        margin: 20px;
        background-color: #d7e6e5;
        position: absolute;
        left: 78.8%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);">Submit</button>

</form>

<div class="container-md" style="margin-top:50px; padding-top:10px;">
    <hr>
    <p class="smalltitle"><strong>DROP-OFF LAUNDRY SERVICE</strong></p>
    <p class="content" style="margin-left: 5px;">Take a break from laundry with our Drop-Off Laundry Service!
     Simply bring your laundry, dry cleaning, and/or specialty items to any PashPash branch near you. Then we do the rest! Within two days we’ll inform you when everything’s ready through your PashPash account for pickup.<br><br>Maximum of 8 kilograms per cycle only. If your laundry is more than 8 kilograms and you need to increase the quantity of cycles above to indicate the number of cycles you have to use.s<br><br></p>
</div>



<?php

include('partials/scripts.php');

?> 