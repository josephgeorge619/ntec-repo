<!-- Sign Up section -->

<div class="modal fade" id="register" role="dialog">
  <div class="modal-dialog">


<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title" style="text-align: center;">Registration Form</h4>
  </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 controldivreg">
          <div class="regform">
           <form action="includes/result.php" method="post" id="register">
             <fieldset class="form-group">
             <fieldset class="form-inline">
              <label for="Name"> Name </label></br>
               <input type="text" class="form-control" style="width:32%;" id="name_val" name="name_first" placeholder="First Name" required>
               <input type="text" class="form-control" style="width:32%;" id="name_val" name="name_mid" placeholder="Middle Name" >
               <input type="text" class="form-control" style="width:34%;" id="name_val" name="name_last" placeholder="Last Name" required>
             </fieldset>
             </fieldset>
             <fieldset class="form-group">
               <label for="Email1"> Email address </label>
               <input type="email" class="form-control" id="email_val" name="email1" placeholder="Enter email" required>
               <small class="text-muted">We'll never share your email with anyone else.</small>
             </fieldset>
             <fieldset class="form-group">
               <label for="Password1"> Password </label>
               <input type="password" class="form-control" id="pass_val" name="pass1" placeholder="Password" required>
             </fieldset>
             <fieldset class="form-group">
               <label for="Phone"> Phone </label>
               <input type="tel" name="phone" class="form-control" placeholder=" Phone Number " required>
             </fieldset>
             <fieldset class="form-group">
               <label for="Address"> Address </label>
               <input type="text" name="address" class="form-control" placeholder=" Address ">
               <fieldset class="form-inline">
                 <input type="text" class="form-control" style="width:49%;margin-top:7px;" id="city" name="city" placeholder=" City " required>
                 <input type="text" class="form-control" style="width:50%;margin-top:7px;" id="pobox" name="pobox" placeholder=" Post Box " required>
                 <input type="text" class="form-control" style="width:100%;margin-top:7px;" id="country" name="country" placeholder=" Country " required>
              </fieldset>
             </fieldset>
             <fieldset class="form-group">
               <label for="age"> Age </label>
               <input type="number" name="age" class="form-control" placeholder=" Age " >
             </fieldset>
             <fieldset class="form-group">
               <label for="gender"> Gender </label>
               <div class="form-check form-check-inline">
                <label class="form-check-label">
                 <input class="form-check-input" type="radio" name="gender" value="Male">
                 Male
               </label>
              </div>
              <div class="form-check form-check-inline">
               <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" value="Female">
                Female
              </label>
             </div>
             </fieldset>
             <fieldset class="form-group">
               <label for="photo"> Photo </label></br>
               <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control"></span>
              </label>
            </fieldset>
            <fieldset class="form-group">
              <label for="acdc"> Academic Qualification </label>
              <input type="text" name="acdc" class="form-control" placeholder=" Recent Academic Qualification " required>
            </fieldset>
            <fieldset class="form-group">
            <fieldset class="form-inline">
             <label for="Name"> Area of Expertise </label></br>
              <input type="text" class="form-control" style="width:32%;" id="expert_1" name="expert_1" placeholder="skill 1" required>
              <input type="text" class="form-control" style="width:32%;" id="expert_2" name="expert_2" placeholder="skill 2" required>
              <input type="text" class="form-control" style="width:34%;" id="expert_3" name="expert_3" placeholder="skill 3" required>
              <input type="text" class="form-control" style="width:34%;" id="expert_4" name="expert_4" placeholder="skill 4" required>
              <input type="text" class="form-control" style="width:34%;" id="expert_5" name="expert_5" placeholder="skill 5" required>
            </fieldset>
            </fieldset>
       <!--     <div class="checkbox">
               <label>
                 <input type="checkbox"> Check me out
               </label>
             </div> -->
             <button type="submit" class="btn btn-primary" style="margin-left:40%;">Register</button>
           </form>
           </div>
         </div>
       </div>
  </div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>
<script>
  function fnreset() {
      document.getElementById("register").reset();
  }
  window.onload = fnreset;
</script>
