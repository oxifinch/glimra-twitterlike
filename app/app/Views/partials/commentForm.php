   <!-- TODO make fix comment form -->
   <div class="comment-form-container">
       <form action="comment/commentSave" method="POST" class="content-form-container">
           <div class="form-toolbar-wrapper">
               <div class="textarea-container">
               <input type="hidden" name="post_id" value=<?php echo $post->post_id ?>>
                   <textarea class="expand-textarea" name="text_content" id="textArea" rows="1" maxlength="260"
                       placeholder="Write a comment! (260 characters max)"></textarea>
               </div>
               <div class="form-toolbar">
                   <button class="submitUploadIcon typeSubmit" type="submit"><i
                           class="fa fa-paper-plane clickable-icons" aria-hidden="true"></i></button>
               </div>
           </div>
           <p class="characters-left input-feedback-info">Characters left: <span class="charactersRemaining">260</span></p>
       </form>
   </div>
