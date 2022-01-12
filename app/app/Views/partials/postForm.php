<!-- 
    DO NOT USE!
    
    <div class="module-container-background">
<form class="form-toolbar-wrapper">
    <input type="text" class="" placeholder="Search after user" name="search" id="navSearch">
    <div class="form-toolbar">
        <input type="file" id="myFile" name="">
        <input type="file" accept="image/*" capture="">
        <button type="submit" class="typeSubmit"><i class="fa fa-paper-plane clickable-icons" aria-hidden="true"></i></button>
    </div>
    https://jakub-kozak.medium.com/how-to-open-the-native-camera-in-mobile-browsers-327820fa669a
</form>
</div>
https://jsfiddle.net/coderatchet/p7zdrbvs/1/ 
-->

<div id="post-form-container">
    <div>
        <h3>What's on your mind? Share the glims!</h3>
        <i id="closePostFormBtn" class="fa fa-times" aria-hidden="true"></i>
    </div>
    <form action="/post/postSave" method="POST" class="content-form-container">
        <div class="form-toolbar-wrapper">
            <div class="textarea-container">
                <textarea name="text_content" id="textArea" rows="1" maxlength="260"
                    placeholder="What's on your mind? (260 characters max)"></textarea>
            </div>
            <div class="form-toolbar">
                <button class=" submitUploadIcon" type="submit" class="typeSubmit"><i
                        class="fa fa-paper-plane clickable-icons" aria-hidden="true"></i></button>
            </div>
        </div>
        <p class="characters-left input-feedback-info">Characters left: <span id="charactersRemaining">260</span></p>
    </form>
</div>