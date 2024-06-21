<?php
    // idea for later : Make the whole form spin on submission and reveal a card with 'Message Sent'
?>
  
  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-12 col-lg-9">
        <div class="bg-transparent border border-secondary rounded shadow-lg overflow-hidden" id="contactWindow">

          <form action="" method="POST">
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
              <div class="col-12 col-md-6">
                <input  type="text" 
                        class="form-control d-none" 
                        id="contactID" 
                        name="contactID" 
                        value="<?php if (isset($visitorName) && $visitorName != "") echo $visitorName["cp_visitor_id"]?>" 
                        required>
                
                    <label  for="contactName" class="form-label" id="contactNameLabel"> 
                        <span class="text-danger">*</span>
                    </label>
                <input  type="text" 
                        class="form-control" 
                        id="contactName" 
                        name="contactName" 
                        placeholder="<?php if (isset($visitorName) && $visitorName != "") echo $visitorName["cp_visitor_name"]?>"  
                        value="<?php if (isset($visitorName) && $visitorName != "") echo $visitorName["cp_visitor_name"]?>" 
                        required>
              </div>
              <div class="col-12 col-md-6">
                <label for="contactMail" id="contactMailLabel" class="form-label"> 
                    <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                  </span>
                  <input type="email" 
                         class="form-control" 
                         id="contactMail" 
                         name="contactMail" 
                         value="<?php if (isset($visitorName) && $visitorName != "") echo $visitorName["cp_visitor_email"]?>" 
                         placeholder="<?php if (isset($visitorName) && $visitorName != "") echo $visitorName["cp_visitor_email"]?>" 
                         required>
                </div>
              </div>
              <div class="col-12">
                <label for="contactMess" id="contactMessLabel" class="form-label"> 
                    <span class="text-danger">*</span>
                </label>
                <textarea class="form-control" 
                          id="contactMess" 
                          name="contactMess" 
                          rows="3" 
                          required></textarea>
              </div>
              <div class="col-12">
                <div class="d-grid justify-content-center">
                  <button class="btn btn-primary btn-outline-success text-white btn-lg submitButton" type="submit"></button>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>



