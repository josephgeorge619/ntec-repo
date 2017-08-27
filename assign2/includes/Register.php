<!-- Sign Up section -->

<div class="modal fade" id="signup" role="dialog">
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
           <form action="result.php" method="post" id="fsignup">
             <fieldset class="form-group">
               <label for="Name"> Name </label>
               <input type="text" class="form-control" id="name_val" name="name1" placeholder="Enter your Full Name">
             </fieldset>
             <fieldset class="form-group">
               <label for="Email1"> Email address </label>
               <input type="email" class="form-control" id="email_val" name="email1" placeholder="Enter email">
               <small class="text-muted">We'll never share your email with anyone else.</small>
             </fieldset>
             <fieldset class="form-group">
               <label for="dataofbirth"> Date Of Birth </label>
               <input type="date" name="date" class="form-control" placeholder=" Enter Your DOB ">
             </fieldset>
             <fieldset class="form-group">
               <label for="Password1"> Password </label>
               <input type="password" class="form-control" id="pass_val" name="pass1" placeholder="Password">
             </fieldset>
       <!--     <div class="checkbox">
               <label>
                 <input type="checkbox"> Check me out
               </label>
             </div> -->
             <button type="submit" class="btn btn-primary" style="margin-left:40%;">Sign Up</button>
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
      document.getElementById("signup").reset();
  }
  window.onload = fnreset;
</script>
