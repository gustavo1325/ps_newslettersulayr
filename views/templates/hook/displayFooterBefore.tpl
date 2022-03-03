
<form id="formNews" <!-- action="modules/psnewslettersulayr/newsletterForm.php" --> method="post">
    <fieldset>
        <legend></legend>
            <label for="nameNewsletter">{$psnewslettersulayr.customControls['PSNEWSLETTERSULAIR_NAME']['label']}</label>
            <input type="text" id="nameNewsletter" name="name" placeholder="name" required/>
            <label for="emailNewsletter">{$psnewslettersulayr.customControls['PSNEWSLETTERSULAIR_EMAIL']['label']}</label>
            <input type="email" id="emailNewsletter" name="mail" placeholder="email" required minlength="8" required/> 
            <input type="checkbox" id="politicsNewsletter" name="politicsforNews" required>
            <label for="politicsNewsletter">{$psnewslettersulayr.customControls['PSNEWSLETTERSULAIR_CONDITIONS']['label']}</label>
            <button  type="submit" id="formNews">{$psnewslettersulayr.button['PSNEWSLETTERSULAIR_SUBMIT']['label']}</button>
    </fieldset>
</form>
<!-- <p>{$urls.current_url|var_dump}</p> -->
    