   <!-- TODO make fix comment form -->
   <div>
       <form action="Lol!AddIdToPostURL" method="POST">
           <div class="form-toolbar-wrapper">
               <div class="textarea-container">
                   <textarea name="text_content" id="textArea" rows="1" maxlength="260"
                       placeholder="Write a comment! (260 characters max)"></textarea>
               </div>
               <div class="form-toolbar">
                   <button class=" clickable-icons submitUploadIcon typeSubmit" type="submit"><i
                           class="fa fa-paper-plane" aria-hidden="true"></i></button>
               </div>
           </div>
           <small>Characters left: <span id="charactersRemaining">260</span></small>
       </form>
   </div>