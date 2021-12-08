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


<div class="module-container-background">
    <form action="/post/postSave" method="POST">
        <div class="form-toolbar-wrapper">
            <div class="textarea-container">
                <textarea name="text_content" id="textArea" rows="1" maxlength="260"
                    placeholder="What's on your mind? (260 characters max)"></textarea>
            </div>
            <div class="form-toolbar">
                <!-- <input type="file" id="myFile" name="">
    <input type="file" accept="image/*" capture=""> -->
                <!-- https://jakub-kozak.medium.com/how-to-open-the-native-camera-in-mobile-browsers-327820fa669a -->
                <!-- <button class="ActivateCameraIcon "><i class="fa fa-camera" aria-hidden="true" ></i></button>
                <button class="fileUploadIcon"><i class="fa fa-file" aria-hidden="true"></i></button> -->
                <button class=" clickable-icons submitUploadIcon" type="submit" class="typeSubmit"><i
                        class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
        </div>
        <small>Characters left: <span id="charactersRemaining">260</span></small>
    </form>
</div>