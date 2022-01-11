<div class="post-form-container">
    <h3>What's on your mind? Share the glims!</h3>
            <form action="/post/postSave" method="POST">
                <div class="form-toolbar-wrapper">
                    <div class="textarea-container">
                        <textarea name="text_content" id="textArea" rows="1" maxlength="260"
                            placeholder="What's on your mind? (260 characters max)"></textarea>
                    </div>
                    <div class="form-toolbar">
                        <button class=" clickable-icons submitUploadIcon" type="submit" class="typeSubmit"><i
                                class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>
                <small>Characters left: <span id="charactersRemaining">260</span></small>
            </form>
        </div>

        <!-- TODO use this for comments! -->